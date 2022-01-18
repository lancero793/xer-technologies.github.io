<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="" content="">
	<link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
	<!------------ Unicons Cdn ------------>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<!------------ jQuery ------------>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!------------ Owl Carousel ------------>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!------------ Self Styles Css ------------>
	<link rel="stylesheet" href="./css/styles.css" type="text/css" />
	<title>Portfolio</title>
</head>
<body>
	<!------- Header -------->
	<header class="header" id="header">
		<nav class="navbar container">
			<a class="nav-logo" href="#">Carlos Alberto Guzmán </a>
			<div class="navbar-content" id="navbar">
				<ul class="nav-list grid">
					<li class="links active">
						<a href="#home"><i class="uil uil-estate nav-icon"></i>Home</a>
					</li>
					<li class="links">
						<a href="#about"><i class="uil uil-user nav-icon"></i>About Me</a>
					</li>
					<li class="links">
						<a href="#skills"><i class="uil uil-file-alt nav-icon"></i>Skills</a>
					</li>
					<li class="links">
						<a href="#services"><i class="uil uil-briefcase-alt nav-icon"></i>Services</a>
					</li>
					<li class="links">
						<a href="#portfolio"><i class="uil uil-scenery nav-icon"></i>Portfolio</a>
					</li>
					<li class="links">
						<a href="#contact"><i class="uil uil-message nav-icon"></i>Contact</a>
					</li>
				</ul>
				<i class="uil uil-times nav-close"></i>
			</div>
			<div class="header-btns flex">
				<!--- Toggle Dark Theme ----->
				<div class="toggle-theme" id="toggle-theme">
					<i class="uil uil-moon icon-toggle"></i>
				</div>
				<div class="nav-toggle">
					<i class="uil uil-apps"></i>
				</div>
			</div>
		</nav>
	</header>
	<!------------// End Header//------------>


	<!------------// Main //------------>
	<main class="main">
		<!------------// Home //------------>
		<section class="home section" id="home">
			<div class="home-container container grid">
				<div class="home-content grid">
					<div class="home-social">
						<a href="https://www.linkedin.com/in/carlos-alberto-guzmán-yara" target="_target">
							<i class="uil uil-linkedin-alt social-icon"></i>
						</a>
						<a href="#">
							<i class="uil uil-dribbble social-icon" target="_target"></i>
						</a>
						<a href="https://www.github.com/XER-07" target="_target">
							<i class="uil uil-github social-icon"></i>
						</a>
					</div>
					<div class="home-image">
						<svg class="home-blob" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
  							<path id="blob" d="M410,332Q344,414,246.5,419.5Q149,425,119.5,337.5Q90,250,117,158Q144,66,239,85.5Q334,105,405,177.5Q476,250,410,332Z" ></path>
							  <image class="blob-image" y="150" x="150" xlink:href="./img/me.png" />
						</svg>
					</div>
					<div class="home-data">
						<h1 id="home-title">Hola, Soy Carlos Alberto Guzmán</h1>
						<h3 class="home-subtitle">Desarrollador web FrontEnd</h3>
						<p class="home-description">
							vehicula ipsum a arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada
						</p>
						<a class="btn btn-flex" href="#contact">
							Contactame <i class="uil uil-message btn-icon"></i>
						</a>
					</div>
				</div>
				<div class="home-scroll">
					<a class="btn-scroll btn-flex" href="#about">
						<i class="uil uil-mouse-alt mouse"></i>
						<span class="scroll-info">Ir Abajo</span>
						<i class="uil uil-arrow-down arrow"></i>
					</a>
				</div>
			</div>
		</section>

		<!------------// End Home //------------>

		<!------------// About //------------>
		<section class="about section" id="about">
			<h2 class="section-title">Sobre Mi</h2>
			<span class="section-subtitle">Conoceme un poco</span>
			<div class="about-container container grid">
				<img class="about-image" src="./img/about.jpg" alt="" />
				<div class="about-data">
					<p class="about-description">
						vehicula ipsum a arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuad
					</p>
					<div class="about-info">
						<div>
							<span class="about-info-title">+03</span>
							<span class="about-info-name">Años <br /> Experiencia</span>
						</div>
						<div>
							<span class="about-info-title">+10</span>
							<span class="about-info-name">Proyectos<br /> Realizados</span>
						</div>
						<div>
							<span class="about-info-title">+15</span>
							<span class="about-info-name">Clientes <br /> Satisfechos</span>
						</div>
					</div>
					<div class="about-options">
						<a download="" href="/pdf/HV_Carlos_Alberto_Guzmán.pdf" class="btn btn-flex">
							Descarga Mi CV <i class="uil uil-download-alt btn-icon"></i>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!------------// End About //------------>

		<!------------// Skills //------------>
		<section class="skills section" id="skills">
			<h2 class="section-title">Skills</h2>
			<span class="section-subtitle">Mis conocimientos técnicos</span>
			<div class="skills-container container grid">
				<!---<div>--->
				<div class="skill-content close">
					<!------------// Skill 1 //------------>
					<div class="skill-header">
						<i class="uil uil-brackets-curly skill_icon"></i>
						<div>
							<h1 class="skill-title">FrontEnd Developer</h1>
							<span class="skill-subtitle">+4 Años de experiencia</span>
						</div>
						<i class="uil uil-angle-down skill-arrow"></i>
					</div>
					<div class="list-skills grid">
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Html</h3>
								<span class="skill-level">90%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-html"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Css</h3>
								<span class="skill-level">80%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-css"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">JavaScript</h3>
								<span class="skill-level">75%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-js"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">React</h3>
								<span class="skill-level">70%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-react"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Vue</h3>
								<span class="skill-level">65%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-vue"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="skill-content close">
					<!------------// Skill 2 //------------>
					<div class="skill-header">
						<i class="uil uil-server-network skill_icon"></i>
						<div>
							<h1 class="skill-title">Backend Developer</h1>
							<span class="skill-subtitle">+2 Años de experiencia</span>
						</div>
						<i class="uil uil-angle-down skill-arrow"></i>
					</div>
					<div class="list-skills grid">
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Python</h3>
								<span class="skill-level">60%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-python"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Php</h3>
								<span class="skill-level">60%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-php"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">MySql</h3>
								<span class="skill-level">65%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-mysql"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Nodejs</h3>
								<span class="skill-level">60%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-nodejs"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Heroku</h3>
								<span class="skill-level">89%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-heroku"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="skill-content close">
					<!------------// Skill 3 //------------>
					<div class="skill-header">
						<i class="uil uil-swatchbook skill_icon"></i>
						<div>
							<h1 class="skill-title">Diseño Gráfico</h1>
							<span class="skill-subtitle">+2 Años de experiencia</span>
						</div>
						<i class="uil uil-angle-down skill-arrow"></i>
					</div>
					<div class="list-skills grid">
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Figma</h3>
								<span class="skill-level">90%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-figma"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Illustrator</h3>
								<span class="skill-level">60%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-illustrator"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">Photoshop</h3>
								<span class="skill-level">75%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-photoshop"></span>
							</div>
						</div>
						<div class="skill-data">
							<div class="skill-titles">
								<h3 class="skill-name">CorelDraw</h3>
								<span class="skill-level">60%</span>
							</div>
							<div class="skills-bar">
								<span class="percent skill-coreldraw"></span>
							</div>
						</div>
					</div>
				</div>
				<!---</div>--->
			</div>
		</section>


		<!------------// Qualifications //------------>
		<section class="qualifications section">
			<h2 class="section-title">Mis conocimientos</h2>
			<span class="section-subtitle">Mi viaje personal</span>
			<div class="qualification-container container">
				<div class="qualification-tabs">
					<div class="qualification-btns btn-active btn-flex" data-target="#education">
						<i class="uil uil-graduation-cap qualified-icon education"></i>
						Education
					</div>
					<div class="qualification-btns btn-flex" data-target="#work">
						<i class="uil uil-briefcase-alt qualified-icon work"></i>
						Works
					</div>
				</div>
				<!------------// Qualification Section 1 //------------>
				<div class="qualification-section">
					<div class="qualification-content qualification-active" data-content id="education">
						<div class="qualification-data">
							<!------------// Qualification 1 //------------>
							<div>
								<h3 class="qualification-title">Tecnólogo <!--gestión y desarrollo de software---></h3>
								<span class="qualification-subtitle">Sena - Colombia</span>
								<div class="qualification-calendar">
									<i class="uil uil-calendar-alt calendar-icon"></i>
									2009 - 2011
								</div>
							</div>
							<div>
								<span class="qualification-round"></span>
								<span class="qualification-line"></span>
							</div>
						</div>

						<div class="qualification-data ">
							<!------------// Qualification 2 //------------>
							<div></div>
							<div>
								<span class="qualification-round"></span>
								<span class="qualification-line"></span>
							</div>
							<div>
								<h3 class="qualification-title">Desarrollador Web</h3>
								<span class="qualification-subtitle">Next University - Barcelona</span>
								<div class="qualification-calendar">
									<i class="uil uil-calendar-alt calendar-icon"></i>
									2017 - 2019
								</div>
							</div>
						</div>
						<div class="qualification-data">
							<!------------// Qualification 3 //------------>
							<div>
								<h3 class="qualification-title">Fullstack Developer</h3>
								<span class="qualification-subtitle"></span>Next University - Bogotá</span>
							<div class="qualification-calendar">
								<i class="uil uil-calendar-alt calendar-icon"></i>
								2019 - 2021
							</div>
						</div>
						<div>
							<span class="qualification-round"></span>
						</div>
					</div>
				</div>

				<!------------// Qualification Section 2 //------------>
				<div class="qualification-content" data-content id="work">

					<div class="qualification-data">
						<!------------// Qualification 1 //------------>
						<div></div>
						<div>
							<span class="qualification-round"></span>
							<span class="qualification-line"></span>
						</div>
						<div>
							<h3 class="qualification-title">UI/UX - Designer <!--gestión y desarrollo de software---></h3>
							<span class="qualification-subtitle">Stell Technologies - Bogotá</span>
							<div class="qualification-calendar">
								<i class="uil uil-calendar-alt calendar-icon"></i>
								2012 - 2014
							</div>
						</div>
					</div>

					<div class="qualification-data">
						<!------------// Qualification 2 //------------>
						<div>
							<h3 class="qualification-title">Desarrollador FrontEnd</h3>
							<span class="qualification-subtitle">TCS - Medellín</span>
							<div class="qualification-calendar">
								<i class="uil uil-calendar-alt calendar-icon"></i>
								2015 - 2017
							</div>
						</div>
						<div>
							<span class="qualification-round"></span>
							<span class="qualification-line"></span>
						</div>
					</div>
					<div class="qualification-data">
						<!------------// Qualification 3 //------------>
						<div></div>
						<div>
							<span class="qualification-round"></span>
							<!---<span class="qualification-line"></span>--->
						</div>
						<div>
							<h3 class="qualification-title">Desarrollador Consultor</h3>
							<span class="qualification-subtitle"></span>AMS - Medellín</span>
						<div class="qualification-calendar">
							<i class="uil uil-calendar-alt calendar-icon"></i>
							2019 - 2021
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------// End Qualifications //------------>


<!------------// Services //------------>
<section class="services section" id="services">
	<h2 class="section-title">Servicios</h2>
	<span class="section-subtitle">Lo que ofrezco</span>
	<div class="services-container container grid">
		<!------------// Services 1 //------------>
		<div class="services-content">
			<div>
				<i class="uil uil-browser service-icon"></i>
				<h3 class="service-title">Desarrollo<br /> Web</h3>
			</div>
			<span class="btn btn-flex btn-small btn-link services-btn">
				Ver Más
				<i class="uil uil-arrow-right btn-icon"></i>
			</span>
			<div class="service-modal">
				<div class="modal-content">
					<i class="uil uil-times modal-close"></i>
					<h4 class="service-modal-title">Desarrollo Web<br /> Responsive</h4>
					<ul class="service-modal-services grid">
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!------------// Services 2 //------------>
		<div class="services-content">
			<div>
				<i class="uil uil-robot service-icon"></i>
				<h3 class="service-title">Bots <br /> Automa...</h3>
			</div>
			<span class="btn btn-flex btn-small btn-link services-btn">
				Ver Más
				<i class="uil uil-arrow-right btn-icon"></i>
			</span>
			<div class="service-modal">
				<div class="modal-content">
					<i class="uil uil-times modal-close"></i>
					<h4 class="service-modal-title">Automatización <br /> Tareas</h4>
					<ul class="service-modal-services grid">
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!------------// Services 3 //------------>
		<div class="services-content">
			<div>
				<i class="uil uil-web-grid service-icon"></i>
				<h3 class="service-title">UI/UX <br /> Diseño</h3>
			</div>
			<span class="btn btn-flex btn-small btn-link services-btn">
				Ver Más
				<i class="uil uil-arrow-right btn-icon"></i>
			</span>
			<div class="service-modal">
				<div class="modal-content">
					<i class="uil uil-times modal-close"></i>
					<h4 class="service-modal-title">UI/UX <br />Diseño</h4>
					<ul class="service-modal-services grid">
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!------------// Services 4 //------------>
		<div class="services-content">
			<div>
				<i class="uil uil-megaphone service-icon"></i>
				<h3 class="service-title">Marketing <br /> Digital</h3>
			</div>
			<span class="btn btn-flex btn-small btn-link services-btn">
				Ver Más
				<i class="uil uil-arrow-right btn-icon"></i>
			</span>
			<div class="service-modal">
				<div class="modal-content">
					<i class="uil uil-times modal-close"></i>
					<h4 class="service-modal-title">Marketing <br />Digital</h4>
					<ul class="service-modal-services grid">
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
						<li class="service-modal-service">
							<i class="uil uil-check-circle service-modal-icon"></i>
							<p class="modal-service-description">
								Lorem iconscout Lorem Ipsum dolor sit ammet
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------// End Services //------------>


<!------------// Portfolio //------------>
<section class="portfolio section" id="portfolio">
	<h2 class="section-title">Portafolio</h2>
	<span class="section-subtitle">Trabajos más recientes</span>
	<div class="portfolio-container container">
		<div class="owl-carousel">
			<!------------// Portfolio 1//------------>
			<div class="portfolio-content grid">
				<img class="portfolio-image" src="./img/portfolio1.jpg" alt="" />
				<div class="portfolio-data">
					<h3 class="portfolio-title">Decoraciones DMG</h3>
					<p class="portfolio-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
					</p>
					<a href="#" class="btn btn-flex btn-small btn-portfolio">
						Ver Demo
						<i class="uil uil-arrow-right btn-icon"></i>
					</a>
				</div>
			</div>

			<!------------// Portfolio 2 //------------>
			<div class="portfolio-content grid">
				<img class="portfolio-image" src="./img/portfolio2.jpg" alt="" />
				<div class="portfolio-data">
					<h3 class="portfolio-title">Ecommerce Rueda Libre</h3>
					<p class="portfolio-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
					</p>
					<a href="#" class="btn btn-flex btn-small btn-portfolio">
						Ver Demo
						<i class="uil uil-arrow-right btn-icon"></i>
					</a>
				</div>
			</div>

			<!------------// Portfolio 3 //------------>
			<div class="portfolio-content grid">
				<img class="portfolio-image" src="./img/portfolio3.jpg" alt="" />
				<div class="portfolio-data">
					<h3 class="portfolio-title">Sitio web moderno</h3>
					<p class="portfolio-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
					</p>
					<a href="#" class="btn btn-flex btn-small btn-portfolio">
						Ver Demo
						<i class="uil uil-arrow-right btn-icon"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!------------// Project //------------>
	<section class="project section">
		<div class="project-bg">
			<div class="project-container container grid">
				<div class="project-data">
					<h2 class="project-title">Tienes un proyecto en mente ?</h2>
					<p class="project-description">
						Contactame ahora y obtén un 15% de descuento
					</p>
					<a class="btn btn-flex btn-white" href="#contact">
						Contáctame
						<i class="uil uil-message project-icon btn-icon"></i>
					</a>
				</div>
				<img class="project-image" src="./img/about.jpg" alt="" />
			</div>
		</div>
	</section>
</section>
<!------------// End Portfolio //------------>


<!------------// Testimonials //------------>
<section class="testimonials section">
	<h2 class="section-title">Testimonios</h2>
	<span class="section-subtitle">Lo que mis clientes dicen</span>
	<div class="testimonial-container container">
		<div class="owl-carousel">
			<!------------// Testimonial 1 //------------>
			<div class="testimonial-content">
				<div class="testimonial-data">
					<div class="testimonial-header">
						<img class="testimonial-image" src="./img/client1.jpg" alt="" />
						<div>
							<h3 class="testimonial-name">Manuel Fernando Guzmán</h3>
							<span class="testimonial-enterprise">DMG - Decoraciones</span>
						</div>
					</div>
					<div>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
					</div>
				</div>
				<p class="testimonial-description">
					Lorem iconscout Lorem Ipsum dolor sit ammet Lorem iconscout Lorem Ipsum dolor sit ammet
				</p>
			</div>

			<!------------// Testimonial 2 //------------>
			<div class="testimonial-content">
				<div class="testimonial-data">
					<div class="testimonial-header">
						<img class="testimonial-image" src="./img/client2.jpg" alt="" />
						<div>
							<h3 class="testimonial-name">Christina Rodríguez</h3>
							<span class="testimonial-enterprise">Alma - Beauty Shop</span>
						</div>
					</div>
					<div>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
					</div>
				</div>
				<p class="testimonial-description">
					Lorem iconscout Lorem Ipsum dolor sit ammet Lorem iconscout Lorem Ipsum dolor sit ammet
				</p>
			</div>

			<!------------// Testimonial 3 //------------>
			<div class="testimonial-content">
				<div class="testimonial-data">
					<div class="testimonial-header">
						<img class="testimonial-image" src="./img/client3.jpg" alt="" />
						<div>
							<h3 class="testimonial-name">Luis Celís</h3>
							<span class="testimonial-enterprise">Suplifish - Acuicola</span>
						</div>
					</div>
					<div>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
						<i class="uil uil-star testimonial-star"></i>
					</div>
				</div>
				<p class="testimonial-description">
					Lorem iconscout Lorem Ipsum dolor sit ammet Lorem iconscout Lorem Ipsum dolor sit ammet
				</p>
			</div>
		</div>
	</div>
</section>
<!------------// End Testimonials //------------>


<!------------// Contact //------------>
<section class="contact section" id="contact">
	<h3 class="section-title">Contactame</h3>
	<span class="section-subtitle">Empecemos a hacer realidad sus proyectos</span>
	<div class="contact-container container grid">
		<div>
			<div>
				<div class="contact-info">
					<i class="uil uil-phone contact-icon"></i>
					<div>
						<h3 class="contact-title">Teléfono</h3>
						<span class="contact-subtitle">(+57) 301-333-3333</span>
					</div>
				</div>
			</div>

			<div>
				<div class="contact-info">
					<i class="uil uil-envelope contact-icon"></i>
					<div>
						<h3 class="contact-title">Email</h3>
						<span class="contact-subtitle">ventas@xer.com.co</span>
					</div>
				</div>
			</div>

			<div>
				<div class="contact-info">
					<i class="uil uil-map-marker contact-icon"></i>
					<div>
						<h3 class="contact-title">Ubicación</h3>
						<span class="contact-subtitle">Cra 75 # 76 a 31 Sur</span>
					</div>
				</div>
			</div>
		</div>
		<form class="contact-form grid" method="post">
			<div class="contact-inputs grid">
				<div class="contact-content">
					<label class="contact-label" for="fname">Nombre</label>
					<input class="contact-input" type="text" name="fname" id="fname" required="" />
				</div>
				<span class="name-error d-none">Error</span>
				<div class="contact-content">
					<label class="contact-label" for="emal">Email</label>
					<input class="contact-input" type="email" name="email" id="email" required/>
				</div>
				<span class="email-error d-none">Error</span>
			</div>
			<div class="contact-content">
				<label class="contact-label" for="phone">Teléfono</label>
				<input class="contact-input" type="text" name="phone" id="phone" required />
			</div>
			<span class="phone-error d-none">Error</span>
			<div class="contact-content">
				<label class="contact-label" for="subject">Asunto</label>
				<input class="contact-input" type="text" name="subject" id="subject" required />
			</div>
			<span class="subject-error d-none">Error</span>
			<div class="contact-content">
				<label class="contact-label" for="message">Mensaje</label>
				<textarea class="contact-input" name="message" id="message" rows="8" cols="0" required=""></textarea>
			</div>
			<span class="message-error d-none">Error</span>
			<div>
				<div class="btn btn-flex send-btn" id="btn-send">
					Enviar Email
					<i class="uil uil-message btn-icon"></i>
				</div>
			</div>
			
		</form>
	</div>
</section>
<!------------// End Contact //------------>

</main>
<!------------// End Main//------------>


<!------------// Footer //------------>
<footer class="footer ">
	<div class="footer-bg">
		<div class="footer-container container grid">
			<div>
				<h1 class="footer-title">Carlos Alberto Guzmán</h1>
				<span class="footer-subtitle">Desarrollador Frontend</span>
			</div>
			<ul class="footer-list flex">
				<li><a class="footer-link" href="#about">Sobre Mi</a></li>
				<li><a class="footer-link" href="#skills">Skills</a></li>
				<li><a class="footer-link" href="#services">Servicios</a></li>
				<li><a class="footer-link" href="#portfolio">Portafolio</a></li>
			</ul>
			<div class="footer-social">
				<a class="social-link" href="https://www.facebook.com/carlos.guzman9377" target="_target">
					<i class="uil uil-facebook"></i>
				</a>
				<a class="social-link" href="https://www.instagram.com/xer_technologies" target="_target">
					<i class="uil uil-instagram"></i>
				</a>
				<a class="social-link" href="https://twitter.com/XER2407?t=Q-maY85oQhKZIQ8tccFPdQ&s=09" target="_target">
					<i class="uil uil-twitter"></i>
				</a>
			</div>
			<div class="copyright">
				&copy; 2022 Xer Technologies || Derechos Reservados
			</div>
		</div>
	</div>
</footer>
<div class="arrow-top ">
	<i class="uil uil-arrow-up go-up"></i>
</div>
<!------------// End Footer //------------>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!------------// Self Scripts //------------>
<script src="./js/app.js" type="text/javascript"></script>
<script src="./js/form_validate.js" type="text/javascript"></script>
</body>
</html>