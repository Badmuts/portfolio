<?php
	if ( isset( $_POST ) )
	{
		extract($_POST);
		if (!empty($name) || !empty($email) || !empty($message))
		{
			$headers =  "From: $email \r\n" .
						"Reply-To: $email \r\n" .
						"X-Mailer: PHP/" . phpversion();
			$text = "Naam: $name \r\n" .
					"Email: $email \r\n" .
					"Message: $message";
			if ( mail('d.rosbergen@gmail.com', 'Portfolio Contact form', $text, $headers) ) {
				$success = true;
			} else {
				$success = false;
			}
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="I am a young webdesigner and developer from the Netherlands. Currently I am working for DigitaleFactuur and Studio Projectie">
	<meta name="keywords" content="webdesigner, daan, rosbergen, daan rosbergen, nederland, boskoop, dribbble, github, twitter, digitalefactuur, digitale factuur, studio projectie, leiden, webdeveloper, frontend developer, front end developer, frontenddeveloper">
	<meta name="author" content="Daan Rosbergen">
	<meta name="theme-color" content="#27303d">
	<title>Webdesigner - Daan Rosbergen</title>
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate-custom.css">
</head>
<body>
	<div class="header" id="header">
		<h1 class="animated fadeInUp">
			<span class="light">I am a</span> 
			<span class="webdesigner">webdesigner</span>
		</h1>
	</div>
	<div class="page">
		<nav>
			<div class="container">
				<div class="logo">
					Daan <span class="light">Rosbergen</span>
				</div>
				<ul>
					<li class="active"><a href="#work">Work</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div id="work" class="work">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-6 item animated fadeInUp">
						<img src="img/digitalefactuur-homepage.jpg" alt="DigitaleFactuur homepage">
					</div>
					<div class="col-lg-3 item animated fadeInUp">
						<img src="img/digitalefactuur-app.jpg" alt="DigitaleFactuur App">
					</div>
					<div class="col-lg-3 item animated fadeInUp">
						<img src="img/digitalefactuur-prijzen-aanmelden.jpg" alt="DigitaleFactuur Dashboard">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 pull-right">
						<span></span>
					</div>
					<div class="col-lg-6 item animated fadeInUp pull-right">
						<img src="img/digitalefactuur-dashboard.jpg" alt="DigitaleFactuur Dashboard">
					</div>
					<div class="col-lg-offset-1 col-lg-3 item animated fadeInUp">
						<img src="img/digitalefactuur-offerte.jpg" alt="DigitaleFactuur offerte pagina">
					</div>
					<div class="col-lg-offset-1 col-lg-3 item animated fadeInUp">
						<img src="img/digitalefactuur-projecten.jpg" alt="DigitaleFactuur iPhone en Android App">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-3 item animated fadeInUp">
						<img src="img/kluskar-groen.jpg" alt="Aannemersbedrijf Kluskargroen">
					</div>
					<div class="col-lg-3 item animated fadeInUp">
						<img src="img/derbiteamzuidholland.jpg" alt="Blog Derbi Team Zuid Holland">
					</div>
					<div class="col-lg-3 item animated fadeInUp">
						<img src="img/dehaarwinkel.jpg" alt="Schoolproject: De Haarwinkel">
					</div>
				</div>
			</div>
		</div>
		<div id="contact" class="contact">
			<div class="container">
				<div class="col-lg-offset-3 col-lg-5">
					<h1>Contact</h1>
					<?php
						if ( isset($success) && $success === true) {
							echo "<p>Thanks for your message! I will reply as soon as possible.</p>";
						} elseif ( isset($success) && $success === false) { 
							echo "<p>Oh no! Something went wrong, try to submit the form again or send a message to d.rosbergen@gmail.com</p>";
						} else {
							echo '<form action="" method="POST"> 
						<ul>
							<li>
								<label for="name">Name</label>
								<input type="text" name="name" id="name">
							</li>
							<li>
								<label for="email">Email</label>
								<input type="email" name="email" id="email">
							</li>
							<li>
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10"></textarea>
							</li>
							<li>
								<input type="submit" name="submit" value="Submit">
							</li>
						</ul>
					</form>';
						}
					?>
					<ul class="social">
						<li><a target="_blank" href="https://twitter.com/daanrosbergen"><i class="icon-twitter"></i></a></li>
						<li><a target="_blank" href="https://dribbble.com/daanrosbergen"><i class="icon-dribbble"></i></a></li>
						<li><a target="_blank" href="https://github.com/Badmuts"><i class="icon-github"></i></a></li>
						<li><a target="_blank" href="https://soundcloud.com/kickekees"><i class="icon-soundcloud"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		(function () {
			var navTop = $('nav').offset().top;

			$(window).scroll( function()
		    {
				var scroll = $(window).scrollTop(), slowScroll = scroll/2;
				$('#header').css({ transform: "translateY(" + slowScroll + "px)" });

				if (scroll >= navTop) {
					$('body').addClass('fixed');
				} else {
					$('body').removeClass('fixed');
				}
			});

			$('nav a').on('click', function (e) {
				e.preventDefault();
				var id = $(this).attr('href');
				console.log(id);
				$('html,body').animate({scrollTop: $(id).offset().top},'slow');
			});

			// CONTACT FORM
			$('form').on('submit', function (e) {
				var name = $('input[name=name]');
				var email = $('input[name=email]');
				var message = $('textarea');

				$('input[name=name], input[name=email], textarea').removeClass('error');

				if ( !name.val() ) {
					name.addClass('error');
					e.preventDefault();
				} else if ( !email.val() ) {
					email.addClass('error');
					e.preventDefault();
				} else if ( !message.val() ) {
					message.addClass('error');
					e.preventDefault();
				}
			});

			// $(".webdesigner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
			// 	var $self = $(this);
			// 	setTimeout(function() {
			// 		var clone = $($self).clone(true, true);
			// 		$self.addClass("hide");
			// 		clone.text("webdeveloper");
			// 		clone = $self.after(clone);
			// 	}, 1500);
			// });
		})();
	</script>
</body>
</html>