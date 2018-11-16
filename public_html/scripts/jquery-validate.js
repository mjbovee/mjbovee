$(document).ready(function(){
	// front end validation for my form
	$("#contactForm").validate({

		//set up form error handling
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#outputArea",
		errorElement: "div",

		// define good and bad input
		rules: {
			name: {
				required: true
			},
			email: {
				email: true,
				required: true
			},
			message: {
				required: true,
				maxLength: 2000
			}
		},

		// error messages for when the above rules don't pass
		messages: {
			name: {
				required: "Please enter your name"
			},
			email: {
				email: "Please enter a valid email address",
				required: "Please enter a valid email address"
			},
			message: {
				required: "Please enter a message",
				maxLength: "2000 characters max"
			}
		},

		// AJAX submit the form data to the back end if all the rules pass
		submitHandler: function(form) {
			$("#contactForm").ajaxSubmit({
				type: "POST",
				url: $("#contactForm").attr("action"),

				success: function(ajaxOutput) {
					// clear the autput area's formatting
					$("#outputArea").css("display", "");

					// write the server's reply to the output area
					$("#outputArea").html(ajaxOutput);

					//reset form if it was a success
					if($(".alert-success").length >= 1) {
						$("#contactForm")[0].reset();
					}
				}
			})
		}
	});
});