<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>My porfolio</title>

	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fontawesome Link for Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
	<div id="header">
		<div class="container">
			<nav class="navbar">
				<img src="img/redlogo.png" class="logo">
				<ul id="sidemenu">
					<li><a href="#header"><b>Home</b></a></li>
					<li><a href="#about"><b>About</b></a></li>
					<li><a href="#services"><b>Services</b></a></li>
					<li><a href="#contact"><b>Contact</b></a></li>
					<img src="img/x.png" width="30px" class="menu" onclick="closemenu()">
				</ul>
				<img src="img/menu2.png" width="50px" class="menu" onclick="openmenu()">
			</nav>
			<div class="header-text">
				<p>web designer</p>
				<h1>Hello, I'm <span>Isurika</span> <br>from Sri lanka</h1>

			</div>
		</div>
	</div>


	<section id="about">
		<div class="container">
			<div class="row">
				<div class="about-col-1">
					<img src="img/ab.jpg" width="1000px">
				</div>
				<div class="about-col-2">
					<h1 class="sub-title">About Me</h1>
					<p>I am a recent IT graduate student in Rajarata university of Sri lanka with a passion for
						technology and a strong foundation in various programming languages and software development
						principles.
						Throughout my academic journey, I have gained hands-on experience in developing web
						applications, mobile apps, and software solutions, honing my skills in HTML, CSS, JavaScript,
						Java, and other relevant technologies.
						.</p>
					<div class="tab-titles">
						<p class="tab-links active-link" onclick="opentab('skills')">skills</p>
						<p class="tab-links  active-link" onclick="opentab('experience')">experience</p>
						<p class="tab-links  active-link" onclick="opentab('education')">education</p>
					</div>
					<div class="tab-contents active-tab" id="skills">
						<ul>
							<li><span>UI/UX</span><br>Designing Web/App interfaces</li>
							<li><span>Web Development</span><br>web app development</li>
							<li><span>App Development</span><br>Building Android/iOS apps</li>
						</ul>
					</div>
					<div class="tab-contents" id="experience">
						<ul>
							<li><span>2021-current</span><br>UI/UX Design Training at ET Institute</li>
							<li><span>2019-2021</span><br>Team lead at StartApp LLC</li>
							<li><span>2017-2019</span><br>work in 4Axis pvt company</li>
							<li><span>2016-2017</span><br>Intern at IIT Company</li>
						</ul>
					</div>
					<div class="tab-contents" id="education">
						<ul>
							<li><span>2013-2016</span><br>BSC IT in Rajarata university of Sri lanka</li>
							<li><span>2016-2020</span><br>Master Degree in colombo university</li>
							<li><span>2012-2013</span><br>software enginering diploma in NIBM</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-----------services------------>

	<section id="services">
		<div class="container">
			<h1 class="sub-title">My services</h1>
			<div class="services-list">
				<div>
					<h2><b>Web Design</b></h2>
					<p>
					<h3>I can develop any type of responsive websites with attractive appearances.</h3>
					</p>
					<a href="#" class="learn-more">Learn more</a>
					<div class="additional-details">

						<ul>
							<li>Custom website design</li>
							<li>User-friendly interfaces</li>
							<li>Responsive and mobile-friendly layouts</li>
							<li>Cross-browser compatibility</li>
							<li>Search engine optimization (SEO)</li>
						</ul>
					</div>
				</div>
				<div>
					<h2><b>App Development</b></h2>
					<p>
					<h3>I can develop any type of web applications with the connection of server, and we will maintain
						the server and the error issues.</h3>
					</p>
					<a href="#" class="learn-more">Learn more</a>
					<div class="additional-details">

						<ul>
							<li>Full-stack web application development</li>
							<li>Database integration</li>
							<li>API integration</li>
							<li>Server maintenance and troubleshooting</li>
							<li>Error handling and debugging</li>
						</ul>
					</div>
				</div>
				<div>
					<h2><b>Poster Design</b></h2>
					<p>
					<h3>I can design attractive and creative posters, leaflets, cover pages for books and banners.</h3>
					</p>
					<a href="#" class="learn-more">Learn more</a>
					<div class="additional-details">

						<ul>
							<li>Eye-catching designs</li>
							<li>Custom illustrations</li>
							<li>Print-ready files</li>
							<li>Brand consistency</li>
							<li>Quick turnaround time</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- myskills--------------------- -->
	<section id="skills">
		<div class="wrapper">
			<h1>My Skills</h1>
			<i id="left" class="fa-solid fa-angle-left"></i>
			<ul class="carousel">
				<li class="card">
					<div class="img"><img src="img/html.png" alt="img" draggable="false"></div>
					<h2>HTML</h2>

				</li>
				<li class="card">
					<div class="img"><img src="img/css.png" alt="img" draggable="false"></div>
					<h2>CSS</h2>
				</li>
				<li class="card">
					<div class="img"><img src="img/js.png" alt="img" draggable="false"></div>
					<h2>JavaScript</h2>

				</li>
				<li class="card">
					<div class="img"><img src="img/rs.png" alt="img" draggable="false"></div>
					<h2>Responsive Web Design</h2>

				</li>
				<li class="card">
					<div class="img"><img src="img/sass.png" alt="img" draggable="false"></div>
					<h2>CSS Preprocessors</h2>

				</li>
				<li class="card">
					<div class="img"><img src="img/ux.png" alt="img" draggable="false"></div>
					<h2>User Experience (UX) Design</h2>

				</li>
			</ul>
			<i id="right" class="fa-solid fa-angle-right"></i>
		</div>

	</section>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="contact-left">
					<h1 class="sub-title">Contact Me</h1>
					<p><b>Name:</b><br>Isurika Athapaththu</p>
					<p><b>Email address:</b><br>isurikaathapaththu@gmail.com</p>
					<p><b>Contact no:</b><br>0766640066</p>
					<p><b>Follow me on:</b></p>
					<div class="social-icons">
						<a href="https://www.facebook.com"><img src="img/images.jpg" alt="Facebook"></a>
						<a href="https://www.twitter.com"><img src="img/twitter-icon.png" alt="Twitter"></a>
						<a href="https://www.instagram.com"><img src="img/instagram-icon.png" alt="Instagram"></a>
						<a href="https://www.linkedin.com"><img src="img/linkedin-icon.png" alt="Instagram"></a>
					</div>
					<a href="My CV.pdf" download class="btn btn2">Download CV</a>
				</div>

				<div class="contact-right">
					<form action="process_contact.php" method="post">
						<input type="text" name="Name" placeholder="Your Name" required>
						<input type="email" name="email" placeholder="Your Email" required>
						<textarea name="Message" rows="6" placeholder="Your Message"></textarea>
						<button type="submit" class="btn btn2">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="copyright">
		<p> ISURIKA portfolio-All Right Reserved-2023</p>
	</div>
	<script src="js/script.js"></script>

	</script>
</body>

</html>