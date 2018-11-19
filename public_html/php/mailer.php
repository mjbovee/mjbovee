<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 11/16/18
 * Time: 9:54 AM
 */

/**
 * This file handles secure mail transport using the Swiftmailer library with Google reCAPTCHA integration
 */
ini_set('display_errors', 1);

// require composer dependencies
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

// require mail-config.php
require_once ("mail-config.php");

// verify users' reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// throw exception for recaptcha error
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error"));
	}

	/**
	 * sanitize inputs from form: name, email, and message
	 */
	$name = filter_input(INPUT_POST, "contact_name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "contact_email", FILTER_SANITIZE_EMAIL);
	$message = filter_input(INPUT_POST, "contact_message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create swift message
	$swiftMessage = new Swift_Message();

	// attach sender to the message
	$swiftMessage->setFrom([$email => $name]);

	// attach recipient(s) to message
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	// attach message to message
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	// send the email via SMTP. the SMPT server here is configure to relay everything upstream via localhost
	$smtp = (new Swift_SmtpTransport("smtp.sendgrid.net", 587, "tls"))
		->setUsername($smtpUser)
		->setPassword($smtpSecret);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	// throw exception if the number of attempted recipients does not equal the number accepted
	if($numSent !== count($recipients)) {
		throw(new RuntimeException("unable to send email"));
	}
	echo "<div class=\"alert alert-success\" role=\"alert\">Message sent! I'll get back to you shortly.</div>";

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\">Unable to send message: " . $exception->getMessage() . "</div>";
}