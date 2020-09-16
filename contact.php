<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shamar Billingslea</title>
	<link rel="stylesheet" type="text/css" href="contactMe.css">
	<link rel="icon" type="image/x-con" href="logo.ico">
</head>

<body class="landing landing-wide template-custom">
	<div id="div1">
		<div class="header">
			<h1 id="title">Shamar Billingslea</h1>
			<h2 id="subtitle">Full Stack Software Engineer & Investor</h2>
		</div>
		
		<nav id="navbar"> 
			<div class="container">
				<ul class="list">
					<li><a class="button" href="home.html">Home</a></li>
					<li><a class="button" href="resume.html">Resume</a></li>
					<li><a class="button" href="projects.html">Projects</a></li>
					<li><a class="button" href="aboutMe.html">About Me</a></li>
					<li><a class="button" href="contact.php">Contact Me</a></li>
				</ul>	
			</div>
		</nav>
	</div>

	<div class="main">
		<div class="inner">
			<section class="content">
				<article id="post-648" class="post_box entry entry-reg top">
					<header class="headline-area">
						<h1 class="headline">Contact Me</h1>
					</header>
					<div class="post-content">
						<p></p>
						<div class="main-form">
							<h1>Hey There! Thank you for your interest in contacting me!</h1>
							<p>Thank you for reaching out to me. Just follow the form below.</p>
							<p>I will try my best to respond within 48 hours</p>
							<hr>
							<p>&nbsp;</p>

							<form method="post" action="contact_form_handler.php">
								<div class="name-field-group">
									<label>Full Name (Required)</label><br>
									<input type="text" class="name-field" placeholder="Full Name" name="name" required="">
								</div>

								<div class="name-field-group">
									<label>Email (Required)</label><br>
									<input type="email" class="name-field" placeholder="Email" name="email" required="">
								</div>

								<div class="name-field-group">
									<label>Subject</label><br>
									<input type="text" class="name-field" placeholder="Subject" name="subject" maxlength="30" required="">
								</div>

								<div class="name-field-group">
									<label >Your Message</label><br>
									<textarea spellcheck="true" class="name-field" placeholder="What's up?" name="message" required=""></textarea>
								</div><br>

								<button class="submit" type="submit" name="submit">Submit</button>
							</form>
						</div>
						<p></p>
					</div>
				</article>
			</section>
		</div>
	</div>
	
</body>
</html>