<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Michael Bovee</title>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="style.css"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator -->
		<script src="scripts/jquery-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Custom JS -->
		<script async src="scripts/script.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
			<a class="navbar-brand" href="#">MJB_</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="scrolling-box" onscroll="debounce(checkSlide(this))">

			<header class="h-100 " id="home">
				<div class="header-content text-white align-middle">
					<div class="container-fluid header-content-inner text-center" id="scale">
						<h1>Michael Bovee</h1>
						<h4>I design and build clean, functional websites </h4>
					</div>
				</div>
			</header>

			<section class="projects" id="projects">
				<div class="container-fluid text-dark text-center p-5">
					<h2 class="p-5">Projects</h2>
					<div class="row samples">
						<a class="col-md-4 m-2 m-md-5 sample1" href="https://bootcamp-coders.cnm.edu/~mbovee/marathon-predictor/" target="_blank">
							<p>Marathon Time Predictor</p>
						</a>
						<a class="col-md-4 m-2 m-md-5 sample2" href="https://github.com/mjbovee/data-design" target="_blank">
							<p>Data Design</p>
						</a>
						<a class="col-md-4 m-2 m-md-5 sample3" href="https://bootcamp-coders.cnm.edu/~mbovee/bootstrap-challenge" target="_blank">
							<p>Bootstrap Challenge</p>
						</a>
						<a class="col-md-4 m-3 m-md-5 sample4" href="https://github.com/Family-Connect/family-connect" target="_blank">
							<p>Family Connect</p>
						</a>
					</div>
				</div>
			</section>

			<section class="about" id="about">
				<div class="opaqueBG text-dark text-center m-5" id="abouttext" aria-label="background image of desert">
					<h2 class="pb-3">About</h2>
					<p class="mx-2 mx-md-5 px-md-5">Hey everyone! I'm Michael Bovee - I'm a fullstack web developer and designer based in Albuquerque, New Mexico. I work freelance at the moment, but am actively pursuing full-time employment with an organization that is able to provide me with meaningful work. I'm passionate about sustainable development, utilizing technology in a manner that contributes to the greater good, and helping cultivate growth in my local community. Some of my interests include creating things, increasing my understanding of systems, and problem-solving.</p>
					<p class="mx-2 mx-md-5 px-md-5">I'm proficient in a number of languages and frameworks, including Bash, Git, HTML, SQL, CSS, SASS, Bootstrap, JavaScript, jQuery, node.js, Angular, PHP, and Python. I also have a background in philosophy, which helped me cultivate solid critical thinking and reasoning skills. Programming aside, I love learning, reading, running, spending time outside, and playing chess.</p>
				</div>
			</section>


			<section class="contact" id="contact" >
				<div class="container-fluid text-dark p-5 ">
					<div class="row m-md-5 justify-content-center">
						<div class="col-7 col-md-5 p-3 slide-in slide-in-left">
							<h2 class="px-md-5">Get in touch</h2>
							<h4 class="px-md-5">Interested in working together? Let's talk about it</h4>
						</div>
						<form class="col-md-5 offset-md-1 p-md-3 text-center slide-in slide-in-right" id="contactForm" action="php/mailer.php" method="post">
							<div class="p-2">
								<input class="contactItem" type="text" id="name" name="contact_name" placeholder="Your name">
							</div>
							<div class="p-2 ">
								<input class="contactItem" type="email" id="email" name="contact_email" placeholder="Your email">
							</div>
							<div class="p-2 ">
								<textarea class="contactItem" id="message" name="contact_message" rows="5" placeholder="Say what's up"></textarea>
							</div>
							<div class = "recaptcha">
								<div align="center" class="g-recaptcha" data-sitekey="6LeU0HsUAAAAAGNDk_t3TDrMIaPkeUeakR-4Upk_"></div>
							</div>
							<div class="button p-2">
								<button type="submit">Send   <i class="fa fa-paper-plane"></i></button>
							</div>
							<div id="outputArea" class="outputArea"></div>
						</form>
					</div>
				</div>
				<div class="text-center row justify-content-center mt-md-5 pb-5">
					<div class="logo mx-md-5">
						<a href="https://github.com/mjbovee" target="_blank"><img src="photos/GitHub-Mark-120px-plus.png"/></a>
					</div>
					<div class="logo mx-md-5">
						<a href="https://www.linkedin.com/in/michaeljbovee/" target="_blank"><img src="photos/In-Black-121px-R.png"/></a>
					</div>
					<div class="logo mx-md-5">
						<a href="https://codepen.io/mjbovee/" target="_blank"><img src="photos/Button-Fill-Black-Large.png"/></a>
					</div>
				</div>
			</section>

			<footer class="container container-fluid col-12">
				<div class="text-light text-center p-3 pt-md-5">
					<p>Created by Michael Bovee in the Land of Enchantment. Typefaces used are Raleway and Roboto Slab. Most photos were taken by me, just ask if you want to use them.</p>
				</div>
			</footer>
		</div>

	</body>
</html>