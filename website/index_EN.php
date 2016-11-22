<?php

	if(!empty($_POST)){

		extract($_POST);

		$header = "From: AgenceMeEN@hireme.com \n";

		$content = "Who Are You ? : " . "\n" . $whoYouAre . "\n" . "\n" . "What is your name ? : " . "\n" . $fullName . "\n" . "\n" . "I am looking for : " . "\n" . $imLookingFor . "\n" . "\n" . "What is your design for ? : " . "\n" . $whatKinfOfDesign . "\n" . "\n" . "When do you want to Start ? : " . "\n" . $timeGoal . "\n" . "\n" . "What's your budget ? : " . "\n" . $budget . "\n" . "\n" . "What's your Email ? : " . "\n" . $emailAdress . "\n" . "\n" . "Please, Describe your project : " . "\n" . $describeYourProject;

		if (mail("leonard.chalvet@gmail.com, l.agence@me.com, m.legdesign@gmail.com", 'HIRE ME', $content, $header)) {
			unset($whoYouAre);
			unset($fullName);
			unset($imLookingFor);
			unset($timeGoal);
			unset($budget);
			unset($emailAdress);
			unset($describeYourProject);
		}

	}

?><!DOCTYPE html>
<html lang="en">

	<head>

		<title>Agence Me</title>

	    <meta charset="utf-8" />

	    <meta property="og:title" content="AgenceMe" />

		<meta property="og:type" content="website" />

		<meta property="og:url" content="http://www.agence-me.com" />

		<meta property="og:image" content="http://www.agence-me.com/img/og-img.png">

		<meta name="description" content="AgenceMe is a visual identity agency focused on product design.  We are experts in web design, mobile application (iOS and Android), impactful presentations under Keynote or Powerpoint and development (app and front-end)." />

	    <meta name="keywords" content="web design, agency, paris, san francisco, iOS, mobile, application, development, front-end, app, print, presentation, keynote, designer" />

	    <link rel="stylesheet" type="text/css" href="css/style_desktop.css"/>

	    <link rel="stylesheet" type="text/css" href="css/style_responsive.css"/>

	    <!-- THUMB -->

	    <link rel="stylesheet" type="text/css" href="thumb/css/style_desktop.css"/>

	    <link rel="stylesheet" type="text/css" href="thumb/css/style_responsive.css"/>

	    <!-- END THUMB -->

	    <!-- HEADER G -->

	    <link rel="stylesheet" type="text/css" href="header-g/css/style_desktop.css"/>

	    <!-- END HEADER G -->

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

	    <script type="text/javascript" src="js/ThreeBundle.js"></script>
	    <script type="text/javascript" src="js/AnimatedShape.js"></script>

	    <link rel="apple-touch-icon" sizes="57x57" href="http://www.agence-me.com/img/apple-icon-57x57.png">

		<link rel="apple-touch-icon" sizes="60x60" href="http://www.agence-me.com/img/apple-icon-60x60.png">

		<link rel="apple-touch-icon" sizes="72x72" href="http://www.agence-me.com/img/apple-icon-72x72.png">

		<link rel="apple-touch-icon" sizes="76x76" href="http://www.agence-me.com/img/apple-icon-76x76.png">

		<link rel="apple-touch-icon" sizes="114x114" href="http://www.agence-me.com/img/apple-icon-114x114.png">

		<link rel="apple-touch-icon" sizes="120x120" href="http://www.agence-me.com/img/apple-icon-120x120.png">

		<link rel="apple-touch-icon" sizes="144x144" href="http://www.agence-me.com/img/apple-icon-144x144.png">

		<link rel="apple-touch-icon" sizes="152x152" href="http://www.agence-me.com/img/apple-icon-152x152.png">

		<link rel="apple-touch-icon" sizes="180x180" href="http://www.agence-me.com/img/apple-icon-180x180.png">

		<link rel="icon" type="image/png" sizes="192x192"  href="http://www.agence-me.com/img/android-icon-192x192.png">

		<link rel="icon" type="image/png" sizes="32x32" href="http://www.agence-me.com/img/favicon-32x32.png">

		<link rel="icon" type="image/png" sizes="96x96" href="http://www.agence-me.com/img/favicon-96x96.png">

		<link rel="icon" type="image/png" sizes="16x16" href="http://www.agence-me.com/img/favicon-16x16.png">

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-43968145-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>

	<body class="lang-en">

		<?php 
			include('header-g/header-g.php');
		?>

		<div id="container-general" class="active-nav-home">

			<ul id="nav-general">

				<div class="nav-general_select"></div>		

				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				<li>
					<div></div>
				</li>
				
			</ul>

			<div id="position-icosahedron"></div>

			<section id="section-home">

				<div class="section-home_content">

					<div class="section-home_title f-mpl_1">
						<h1>ME</h1>
					</div>

					<div class="section-home_subtitle f-sf_m">
						<h3>THE FRENCH AGENCY</h3>
						<h4>Design & Development</h4>
					</div>

					<div class="section-home_shape" id="animatedshape"></div>
					
				</div>
				
				<!--
				<div class="section-home_scroll">

					<div class="section-home_scroll_content active">

						<div class="section-home_scroll_content_point"></div>
						<div class="section-home_scroll_content_point"></div>
						<div class="section-home_scroll_content_point"></div>
						
					</div>
					
				</div> -->

			</section>
			
			
			<section id="section-work">
				
				<div class="section-work_title f-mpl_1">
					<h2>OUR WORK</h2>
				</div>

				<div class="section-work_content">

					<?php 
						include('thumb/EN/chauffeur-prive-thumb.php');
						include('thumb/EN/thoughtspot-thumb.php');
						include('thumb/EN/orange-thumb.php');
					?>

					<a class="btn-style delay f-mpl_m" href="http://agence-me.com/Website/Work">
						<span>DISCOVER OUR WORK</span>
					</a>
				</div>

			</section>


			<section id="section-ourvision">

				<a id="href-our-vision"></a>

				<div class="section-ourvision_title f-mpl_1">
					<h2>OUR VISION</h2>
				</div>
				<div class="section-ourvision_subtitle f-mpl_3">
					<h3>THE FRENCH AGENCY</h3>
				</div>

				<div class="section-ourvision_text f-sf_r">
					<p>
						Created in 2011, AgenceMe is a visual identity agency focused on product design.  We are experts in web design, mobile application (iOS and Android), impactful presentations under Keynote or Powerpoint and development (app and front-end).<br>
						Our vision of design in unique and our great creativity is our main strength. Visual identity should be a masterpiece, as powerful and attractive as an object, a landscape, a picture… We are putting an emphasis on the visual harmony and attractiveness.  What we enjoy the most is to put together beautiful design and perfect
					</p><p>
						usability to make an interface the most intuitive it can be. Strenghten from our close relationship with the United States, we kept that nice and cheerful way of working and that warmth in relationships. Our priority is give our client full satisfaction and to make them happy, that is the reason we are taking your feedback very carefully and are doing our best to be as swift as we can.<br>
						as to keep it clear and intuitive while there was a lot of functionalities to put on the same page 
					</p>
				</div>

				<a class="btn-style delay f-mpl_m" href="http://agence-me.com/Website/Work">
					<span>DISCOVER OUR WORK</span>
				</a>
				
				<!--
				<video id="section-ourvision_video" src="">

				</video>-->

				<img class="section-ourvision_bg" src="img/our-vision-cover.png">

			</section>


			<section id="section-ext">

				<a id="href-ext"></a>

				<div class="section-ext_container_avis">
					
					<div class="btn-nav left">
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 15 14">
							<path d="M402.31 5126L396.15 5126C392.76 5126 390 5128.76 390 5132.15 " fill-opacity="0" fill="#ffffff" stroke-dasharray="0" stroke-linejoin="miter" stroke-linecap="round" stroke-opacity="1" stroke-miterlimit="50" stroke-width="1" transform="matrix(1,0,0,1,-389.5,-5119.5)"></path>
							<path d="M397 5120L403.15 5126.15L397 5132.3099999999995 " fill-opacity="0" fill="#ffffff" stroke-dasharray="0" stroke-linejoin="round" stroke-linecap="round" stroke-opacity="1" stroke-miterlimit="50" stroke-width="1" transform="matrix(1,0,0,1,-389.5,-5119.5)"></path>
						</svg>
					</div>
					<div class="btn-nav right">
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 14 14">
							<path d="M1044.31 4488L1038.1499999999999 4488C1034.7599999999998 4488 1031.9999999999998 4490.76 1031.9999999999998 4494.15 " fill-opacity="0" fill="#ffffff" stroke-dasharray="0" stroke-linejoin="miter" stroke-linecap="round" stroke-opacity="1" stroke-miterlimit="50" stroke-width="1" transform="matrix(1,0,0,1,-1031.5,-4481.5)"></path>
							<path d="M1038 4482L1044.15 4488.15L1038 4494.3099999999995 " fill-opacity="0" fill="#ffffff" stroke-dasharray="0" stroke-linejoin="round" stroke-linecap="round" stroke-opacity="1" stroke-miterlimit="50" stroke-width="1" transform="matrix(1,0,0,1,-1031.5,-4481.5)"></path>
						</svg>
					</div>

					<div class="list-avis">

						<div class="avis show">
							<div class="logo">
								<img src="img/logo/ThoughtSpot-logo-quote.png" alt="ThoughtSpot Logo" title="ThoughtSpot Logo">
							</div>
							<div class="text f-mpl_3">
								<div><span>«</span></div>
								<div><span> AgenceMe's</span></div>
								<div><span> creative</span></div>
								<div><span> and</span></div>
								<div><span> beautiful</span></div>
								<div><span> designs</span></div>
								<div><span> helped</span></div>
								<div><span> launch</span></div>
								<div><span> our</span></div>
								<div><span> company!</span></div>
								<div><span> Would</span></div>
								<div><span> recommend</span></div>
								<div><span> Barthelemy</span></div>
								<div><span> and</span></div>
								<div><span> their</span></div>
								<div><span> work</span></div>
								<div><span> any</span></div>
								<div><span> day!</span></div>
								<div><span> »</span></div>        
							</div>
							<div class="pp">
								<div style="background-image: url(img/pp/Anand-Raghavan.jpg)"></div>
							</div>
							<div class="name f-mpl_m">
								<span>Anand Raghavan</span>
							</div>
							<div class="job f-mpl_m">
								<span>Senior Director Product Management, ThoughtSpot</span>
							</div>
							<div href="" class="link f-mpl_m">
								<a href="">@raghavan_anand</a>
							</div>
						</div>

						<div class="avis">
							<div class="logo">
								<img src="img/logo/xola-logo-quote.png" alt="XOLA Logo" title="XOLA Logo">
							</div>
							<div class="text f-mpl_3">
								<div><span>«</span></div>
								<div><span> AgenceMe</span></div>
								<div><span> are</span></div>
								<div><span> brilliant</span></div>
								<div><span> designers.</span></div>
								<div><span> I’ve</span></div>
								<div><span> with</span></div>
								<div><span> them</span></div>
								<div><span> for</span></div>
								<div><span> over</span></div>
								<div><span> four</span></div>
								<div><span> years</span></div>
								<div><span> and</span></div>
								<div><span> we’ve</span></div>
								<div><span> completed</span></div>
								<div><span> hundreds</span></div>
								<div><span> of</span></div>
								<div><span> design</span></div>
								<div><span> projects.</span></div>
								<div><span> They</span></div>
								<div><span> have</span></div>
								<div><span> nuanced</span></div>
								<div><span> attention</span></div>
								<div><span> to</span></div>
								<div><span> color,</span></div>
								<div><span> information</span></div>
								<div><span> architecture,</span></div>
								<div><span> negative</span></div>
								<div><span> space,</span></div>
								<div><span> and</span></div>
								<div><span> balance—aspects</span></div>
								<div><span> that</span></div>
								<div><span> are</span></div>
								<div><span> part</span></div>
								<div><span> of</span></div>
								<div><span> superior</span></div>
								<div><span> design,</span></div>
								<div><span> but</span></div>
								<div><span> are</span></div>
								<div><span> hard</span></div>
								<div><span> to</span></div>
								<div><span> identify,</span></div>
								<div><span> let</span></div>
								<div><span> get</span></div>
								<div><span> right.</span></div>
								<div><span> They</span></div>
								<div><span> are</span></div>
								<div><span> also</span></div>
								<div><span> some</span></div>
								<div><span> of</span></div>
								<div><span> the</span></div>
								<div><span> most</span></div>
								<div><span> prolific</span></div>
								<div><span> people</span></div>
								<div><span> I’ve</span></div>
								<div><span> ever</span></div>
								<div><span> with.</span></div>
								<div><span> »</span></div>    
							</div>
							<div class="pp">
								<div style="background-image: url(img/pp/Scott-Zimmerman.jpg)"></div>
							</div>
							<div class="name f-mpl_m">
								<span>J. Scott Zimmerman</span>
							</div>
							<div class="job f-mpl_m">
								<span>Co-founder of Xola</span>
							</div>
						</div>

						<div class="avis">
							<div class="logo">
								<img src="img/logo/Orange-logo-quote.png" alt="Orange Logo" title="Orange Logo">
							</div>
							<div class="text f-mpl_3">
								<div><span>«</span></div>
								<div><span> We</span></div>
								<div><span> had</span></div>
								<div><span> the</span></div>
								<div><span> chance</span></div>
								<div><span> to</span></div>
								<div><span> work</span></div>
								<div><span> with</span></div>
								<div><span> AgenceMe</span></div>
								<div><span> four</span></div>
								<div><span> times</span></div>
								<div><span> on</span></div>
								<div><span> various</span></div>
								<div><span> projects</span></div>
								<div><span> for</span></div>
								<div><span> the</span></div>
								<div><span> web</span></div>
								<div><span> or</span></div>
								<div><span> mobile</span></div>
								<div><span> applications.</span></div>
								<div><span> What</span></div>
								<div><span> we</span></div>
								<div><span> liked</span></div>
								<div><span> was</span></div>
								<div><span> their</span></div>
								<div><span> swiftness</span></div>
								<div><span> and</span></div>
								<div><span> the</span></div>
								<div><span> great</span></div>
								<div><span> quality</span></div>
								<div><span> their</span></div>
								<div><span> design</span></div>
								<div><span> that</span></div>
								<div><span> will</span></div>
								<div><span> always</span></div>
								<div><span> get</span></div>
								<div><span> you</span></div>
								<div><span> that</span></div>
								<div><span> "wow"</span></div>
								<div><span> "effect"</span></div>
								<div><span> »</span></div>        
							</div>
							<div class="pp">
								<div style="background-image: url(img/pp/Miguel-Labranche.jpg)"></div>
							</div>
							<div class="name f-mpl_m">
								<span>Miguel Labranche</span>
							</div>
							<div class="job f-mpl_m">
								<span>Product manager at Orange Labs</span>
							</div>
							<div href="" class="link f-mpl_m">
								<a href="">@miglabranche</a>
							</div>
						</div>

						<div class="avis">
							<div class="logo">
								<img src="img/logo/chauffeur-prive-logo-quote.png" alt="Chauffeur Prive Logo" title="Chauffeur Prive Logo">
							</div>
							<div class="text f-mpl_3">
								<div><span>«</span></div>
								<div><span> Fast</span></div>
								<div><span> and</span></div>
								<div><span> efficient,</span></div>
								<div><span> knew</span></div>
								<div><span> how</span></div>
								<div><span> to</span></div>
								<div><span> respect</span></div>
								<div><span> our</span></div>
								<div><span> several</span></div>
								<div><span> constraints</span></div>
								<div><span> and</span></div>
								<div><span> collaborate</span></div>
								<div><span> with</span></div>
								<div><span> all</span></div>
								<div><span> our</span></div>
								<div><span> departments</span></div>
								<div><span> of</span></div>
								<div><span> our</span></div>
								<div><span> company,</span></div>
								<div><span> to</span></div>
								<div><span> redesign</span></div>
								<div><span> our</span></div>
								<div><span> marketing</span></div>
								<div><span> website</span></div>
								<div><span> »</span></div>     
							</div>
							<div class="pp">
								<div style="background-image: url(img/pp/Remi-Bardoux.jpg)"></div>
							</div>
							<div class="name f-mpl_m">
								<span>Remi Bardoux</span>
							</div>
							<div class="job f-mpl_m">
								<span>Product Manager at Chauffeur-Privé</span>
							</div>
						</div>

						<div class="avis">
							<div class="logo">
								<img src="img/logo/engie-logo-quote.png" alt="Engie Logo" title="Engie Logo">
							</div>
							<div class="text f-mpl_3">
								<div><span>«</span></div>
								<div><span> We</span></div>
								<div><span> had</span></div>
								<div><span> ideas,</span></div>
								<div><span> AgenceMe</span></div>
								<div><span> glorified</span></div>
								<div><span> them.</span></div>
								<div><span> They</span></div>
								<div><span> work</span></div>
								<div><span> with</span></div>
								<div><span> the</span></div>
								<div><span> same</span></div>
								<div><span> passion</span></div>
								<div><span> as us,</span></div>
								<div><span> the</span></div>
								<div><span> same</span></div>
								<div><span> degree</span></div>
								<div><span> of</span></div>
								<div><span> requirement</span></div>
								<div><span> on</span></div>
								<div><span> the</span></div>
								<div><span> quality</span></div>
								<div><span> while</span></div>
								<div><span> staying</span></div>
								<div><span> in</span></div>
								<div><span> our</span></div>
								<div><span> listening.</span></div>
								<div><span> Bonus:</span></div>
								<div><span> they</span></div>
								<div><span> are</span></div>
								<div><span> great</span></div>
								<div><span> »</span></div>     
							</div>
							<div class="pp">
								<div style="background-image: url(img/pp/Olivier-Bertil.jpg)"></div>
							</div>
							<div class="name f-mpl_m">
								<span>Olivier Bertil</span>
							</div>
							<div class="job f-mpl_m">
								<span>PetitBus Co-founder at ENGIE</span>
							</div>
							<div href="" class="link f-mpl_m">
								<a href="">@obertil</a>
							</div>
						</div>

					</div>
					
				</div>

				<div class="section-ext_container_clt">
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 50 51" style="enable-background:new 0 0 50 51;" xml:space="preserve">
							<path style="fill:#3B3B48" d="M0,50.5h50v-50H0V50.5z M47.5,36.7l-0.7,1.7l-0.7-1.7h-0.6V39H46v-1.9h0l0.8,1.9H47l0.8-1.9h0V39
							h0.4v-2.3H47.5z M43.3,36.7V37H44v2h0.4v-2h0.7v-0.3H43.3z M41.2,46.4c-2.1,0-3.3-1.3-3.3-3.6c0-2.3,1.2-3.6,3.2-3.6
							c2,0,3.2,1.3,3.2,3.5c0,0.1,0,0.2,0,0.4h-4.6c0,1.3,0.6,2,1.6,2c0.7,0,1.2-0.3,1.6-0.9l1.3,0.7C43.7,45.9,42.6,46.4,41.2,46.4z
							 M42.6,41.9c0-0.9-0.5-1.5-1.4-1.5c-0.8,0-1.3,0.5-1.4,1.5H42.6z M36.8,39.3v6.6c0,1.2-0.1,3.1-3.4,3.1c-1.4,0-2.6-0.5-2.9-1.7
							l1.8-0.3c0.1,0.3,0.3,0.7,1.3,0.7c0.9,0,1.4-0.5,1.4-1.5v-0.8l0,0c-0.3,0.5-0.7,1-1.8,1c-1.6,0-2.9-1.1-2.9-3.5
							c0-2.3,1.3-3.6,2.8-3.6c1.4,0,1.9,0.6,2,1l0,0l0.2-0.8H36.8z M33.6,44.8c1.4,0,1.5-1.4,1.5-2.3c0-1.1-0.5-2-1.5-2
							c-0.7,0-1.4,0.5-1.4,2C32.2,43.4,32.2,44.8,33.6,44.8z M22.8,39.5l1.5-0.2l0.2,0.8c0.9-0.6,1.5-1,2.4-1c1.4,0,2.2,0.8,2.2,2.3v4.8
							h-1.8v-4.5c0-0.9-0.2-1.2-0.9-1.2c-0.5,0-1.1,0.2-1.7,0.8v5h-1.8V39.5z M19.6,45.7c-0.7,0.5-1.5,0.7-2.3,0.7c-1.3,0-2.1-0.9-2.1-2
							c0-1.6,1.4-2.4,4.4-2.7v-0.4c0-0.5-0.4-0.8-1.1-0.8c-0.7,0-1.3,0.3-1.7,0.8l-1.2-0.7c0.6-0.9,1.6-1.4,3-1.4c1.8,0,2.8,0.8,2.8,2.1
							c0,0,0,5,0,5h-1.6L19.6,45.7z M17,44.2c0,0.5,0.3,0.9,0.8,0.9c0.6,0,1.1-0.2,1.7-0.7v-1.6C17.9,42.9,17,43.4,17,44.2z M10.9,39.3
							h1.7v0.8c0.3-0.4,1.2-1,1.9-1c0.1,0,0.2,0,0.2,0v1.7h-0.1c-0.8,0-1.7,0.1-1.9,0.7v4.6h-1.9V39.3z M6.2,46.5c-1.8,0-3.4-1.2-3.4-3.7
							c0-2.5,1.6-3.7,3.4-3.7c1.8,0,3.4,1.2,3.4,3.7C9.6,45.3,8,46.5,6.2,46.5z M6.2,40.7c-1.4,0-1.6,1.2-1.6,2.1c0,0.9,0.2,2.1,1.6,2.1
							c1.4,0,1.6-1.2,1.6-2.1C7.8,41.9,7.5,40.7,6.2,40.7z"/>
						</svg>

					</div>
					<div class="logo">
						<img src="img/logo/logo-omc.png" alt="Logo Oh My Cream !" title="Logo Oh My Cream !">
					</div>
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 45 62" style="enable-background:new 0 0 45 62;" xml:space="preserve">
							<path style="fill:#3B3B48" d="M17.3,27.1c-0.3,0.3-1.2,0.5-1.4,0.8c-0.4,0.6-1.2,1.9-1.9,2.5c-2.1,2-6.7,3-8.9,1.1
								c-0.1,0-0.1,0.1,0.1,0.6c0.2,1,1,3.5,0.7,4.1c0.2,0.7,0.4,0.4,0.8,0.8C7,37.4,7.1,38,7.4,38.2c0.3,0,0.7,0,1-0.1
								c0.1,0.2,0.1,0.4,0.2,0.6c0.4,0,0.9-0.1,1.3-0.1c0.2,0.1,1,0.4,1.2,0.5c0.5,0,1-0.1,1.5-0.1c1.1,0.3,2.1-0.2,3-0.8
								c0.5-0.4,1.1-0.3,1.6-0.7c0.7-0.6,1.6-1.7,2-2.5c1.1-1.9,0.7-6.5-0.3-7.6C18.5,27,18.1,27,17.3,27.1 M32.2,14.2
								c-2.8,0.4-4.5,1.3-5.5,2c-0.7,0.5-0.9,0.9-1.1,1.1c-0.2,0.2-0.3,0.7-0.2,1.2c0.1,0.5,0.3,1,0.7,1.3c3.4-0.3,9.3-0.5,10.5,2.4
								c0.1,0.4,0.2,0.6,0.2,0.7c1.1-0.3,0.3-0.2,2,0.1c0.4,0.1,1.3-0.2,1.9-0.3c0.3-0.1,0.4-0.3,0.4-0.3s-0.1-0.3,0-0.4c0,0,0.6,0,0.8-0.1
								c1.6-0.3,0.7-1,1.5-1.8C42.9,14.6,37.4,13.4,32.2,14.2 M26.1,25.8c-0.8,0.6-1.1,0.5-1.6,1.4c0,0,0.1,0.1,0,0.1
								c0.5,0.9,1.6,1.3,2.3,2c0.2,0.2,0.9,1.4,1.2,1.5c0.4,0.4,0.6,1.6,0.8,1.6c0.2,0.3,0,1.1,0.2,1.4c0,1.4-0.2,1.5-0.4,1.8
								c0,0.1,0.1,0.4,0.1,0.4c0.1,0.1,0.6,0.5,0.9,0.4c0.8,0,3.9,2.5,4.1,2.9c2.2,0.2,2.1-0.5,3.6-1.2c0.4-0.2,0.7,0,1-0.3
								c0.3-0.3,0.3-0.9,0.6-1.2C39.2,31.2,31.7,26,26.1,25.8 M23.5,6.4c0.1-1.2,0-3,0.9-3.8c0.3-1.3,2.3-1,2-1.8c-0.2-0.5-1.2-0.3-1.5-0.2
								c-0.3,0.1-3.1,1-4.2,1.1c-0.5-0.1-0.9-0.3-1.4-0.4c-1.8,0.2-2.8,1.6-3.7,2.7c-0.8,0.9-1.9,3.2-1,4.6c0,0.3-0.1,0.6-0.1,0.9l2,2.9
								c0.7,0.5,0.8,0.9,1.5,1.3c0.2,0.2,0.3,0.5,0.5,0.7c0.6,0.4,2.4,0.4,2.7,0.1c2.9,0.3,2.6-5.6,3.5-6.8C24.4,7.3,23.9,6.7,23.5,6.4
								 M11.1,23.9c0.6-0.2,1.6-0.2,2.2-0.5c0.9-0.4,3.9-2.5,2.9-4.2c-0.3-3.6-4.6-0.6-6.5-1.8c-1.9-0.2-4-3.8-4.5-5.3
								c-0.2-0.6-0.1-0.4-0.4-0.9c0,0-0.2,0.2-0.2,0.1C4,12,4.1,12.6,4,14.1c-0.2,0-0.5,0-0.7,0c0,0.6-0.1,0.9-0.4,1.2
								c-0.1,0.1-0.1,0.2-0.2,0.3c-0.5-0.2-0.2,0.1-0.4-0.3C0.6,15.3,0.8,17,0,18C0,21.2,6.4,25.1,11.1,23.9"/>
							<path style="fill:#3B3B48" d="M23.1,58c2.5,0,4.6-0.8,4.6-5.3c0-3.8-2.1-5.1-4.6-5.1h-1.3V58H23.1z M24.4,44.5
								c4.6,0,7.7,2.9,7.7,8.1c0,6.6-4.3,8.5-8.8,8.5h-6c0-0.4,0-1.3,0-2.5V47c0-1.2,0-2,0-2.5H24.4z"/>
							<path style="fill:#3B3B48" d="M38.7,58.6c0,1.2,0.1,2.5,0.1,2.5h-4.5c0,0,0-1.3,0-2.5V47c0-1.2,0-2.5,0-2.5h10.5v3.2
								c0,0-2.4-0.1-3.2-0.1h-3V51l3,0c0.6,0,2.5,0,2.5,0v3.1c0,0-1.7,0-2.5,0l-3,0V58.6z"/>
							<path style="fill:#3B3B48" d="M4.8,50.8c0.1-1,0.4-3.2,2.8-3.2c2.5,0,2.6,2.1,2.6,3.2V51c0,0-1.7,0-2.7,0c-1,0-2.8,0-2.8,0
								L4.8,50.8z M8.5,57.8c-2.1,0-3.7-1.4-3.7-3.6V54c0,0,3.9-0.1,5.2-0.1c2.2,0,3.2,0,4.9,0v-1.3c0-5.7-2.4-8.4-7.4-8.4
								C5.3,44.1,0,45,0,52.9c0,5.3,2.7,8.5,7.3,8.5c3.7,0,5.9-0.9,7.6-2.1c-0.2-0.3-1.6-2.7-1.7-3C12.2,57,10.6,57.8,8.5,57.8L8.5,57.8z"
								/>
						</svg>
					</div>
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 133 63" style="enable-background:new 0 0 133 63;" xml:space="preserve">
							<path style="fill:#3B3B48;" d="M5.2,59.9c1.3,0,2.2-0.2,2.8-0.4c0.3-0.1,0.3-0.1,0.3-0.3v-2c0-0.1-0.1-0.2-0.2-0.2h0
								c-0.8,0.1-1.4,0.2-2.6,0.2c-0.9,0-1.9-0.5-1.9-2.6V53c0-2.2,1-2.6,1.9-2.6c1.2,0,1.8,0.1,2.6,0.2l0,0c0.1,0,0.2-0.1,0.2-0.2v-2
								c0-0.2,0-0.3-0.3-0.3c-0.6-0.1-1.5-0.4-2.8-0.4c-3,0-4.8,2-4.8,5.2v1.7C0.4,58,2.2,59.9,5.2,59.9L5.2,59.9z"/>
							<path style="fill:#3B3B48;" d="M9.8,59.8h2.6c0.1,0,0.3-0.1,0.3-0.3v-8.9l0.1,0c0.5-0.1,1.1-0.2,1.8-0.2c1.4,0,2,0.6,2,1.9v7.3
								c0,0.1,0.1,0.3,0.3,0.3h2.6c0.1,0,0.3-0.1,0.3-0.3v-7.5c0-2.9-1.6-4.3-4.7-4.3c-0.8,0-1.6,0.1-2.1,0.3l-0.2,0v-2.9
								c0-0.1-0.1-0.3-0.3-0.3H9.8c-0.1,0-0.3,0.1-0.3,0.3v14.4C9.5,59.7,9.7,59.8,9.8,59.8"/>
							<path style="fill:#3B3B48;" d="M56.7,45c-0.7-0.1-1.6-0.2-2.3-0.2c-2.7,0-4,1.1-4,3.4v0.9h-3.9v-0.9c0-0.6,0.1-1,1-1h2.2
								c0.1,0,0.1,0,0.1-0.2v-2c0,0,0-0.1-0.2-0.1c-0.7-0.1-1.6-0.2-2.3-0.2c-2.7,0-4,1.1-4,3.4v11.3c0,0.1,0.1,0.3,0.3,0.3h2.6
								c0.1,0,0.3-0.1,0.3-0.3v-7.9h3.9v7.9c0,0.1,0.1,0.3,0.3,0.3h2.6c0.1,0,0.3-0.1,0.3-0.3v-7.9h3.1c0.1,0,0.3-0.1,0.3-0.3v-1.9
								c0-0.1-0.1-0.3-0.3-0.3h-3.1v-0.9c0-0.6,0.1-1,1-1h2.2c0.1,0,0.1,0,0.1-0.2v-2C56.9,45.1,56.9,45,56.7,45"/>
							<path style="fill:#3B3B48;" d="M96,54.5c0,1.2-0.2,2.8-2.1,2.8c-0.5,0-1.3-0.1-1.8-0.1l-0.1,0v-6.6l0.1,0c0.4-0.1,1.1-0.1,1.8-0.1
								c1.8,0,2.1,1.6,2.1,2.8V54.5z M93.9,47.7c-2,0-3.8,0.4-4.5,0.5c-0.5,0.1-0.5,0.2-0.5,0.2v13.7c0,0.4,0.1,0.5,0.3,0.5h2.6
								c0.1,0,0.3-0.1,0.3-0.3v-2.7l0.2,0c0.6,0.1,1.3,0.1,1.7,0.1c3.3,0,5.2-1.9,5.2-5.3V53C99.1,49.6,97.2,47.7,93.9,47.7L93.9,47.7z"/>
							<path style="fill:#3B3B48;" d="M105.4,47.7c-2,0-3.3,0.2-4.7,0.6c-0.5,0.2-0.5,0.4-0.5,0.5v10.6c0,0.1,0.1,0.3,0.3,0.3h2.6
								c0.1,0,0.3-0.1,0.3-0.3v-8.9l0.1,0c0.5-0.1,1.3-0.1,1.9-0.1c0.3,0,0.4-0.1,0.4-0.2V48C105.8,47.7,105.4,47.7,105.4,47.7"/>
							<path  style="fill:#3B3B48;" d="M109.8,51.3h-2.6c-0.1,0-0.3,0.1-0.3,0.3v7.9c0,0.1,0.1,0.3,0.3,0.3h2.6c0.1,0,0.3-0.1,0.3-0.3
								v-7.9C110.1,51.4,110,51.3,109.8,51.3"/>
							<path  style="fill:#3B3B48;" d="M109.8,47.8h-2.6c-0.1,0-0.3,0.1-0.3,0.3v2c0,0.1,0.1,0.3,0.3,0.3h2.6c0.1,0,0.3-0.1,0.3-0.3v-2
								C110.1,48,110,47.8,109.8,47.8"/>
							<path  style="fill:#3B3B48;" d="M122.3,48.1c0-0.2-0.1-0.2-0.2-0.2h-2.8c-0.1,0-0.2,0.1-0.3,0.3l-2.3,9l-2.3-9
								c0-0.2-0.2-0.3-0.3-0.3h-2.8c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0.1l2.6,9.6c0.5,1.7,0.6,2,1.6,2c0.1,0,1.1,0,1.3,0
								c0.2,0,1.2,0,1.3,0c1-0.1,1.1-0.3,1.6-2L122.3,48.1C122.3,48.1,122.3,48.1,122.3,48.1"/>
							<path  style="fill:#3B3B48;" d="M64.6,52.7l-4.1,0c0.1-1.9,1.2-2.3,2.1-2.3c0.5,0,0.8,0,1.4,0.1l0.7,0.1V52.7z M66.7,48.3
								c-1.1-0.3-2.5-0.6-4.1-0.6c-3.3,0-5.2,1.9-5.2,5.3v1.6c0,3.4,1.8,5.3,5.2,5.3c1.9,0,2.7-0.2,4-0.5l0.1,0c0.2-0.1,0.3-0.1,0.3-0.4
								v-1.8c0-0.1,0-0.2-0.2-0.2h-0.1c-0.8,0.1-2.6,0.2-4,0.2c-1.3,0-2-0.7-2.1-2.4l0,0h6.3c0.3,0,0.4-0.1,0.4-0.4v-5.7
								C67.2,48.5,67.2,48.4,66.7,48.3L66.7,48.3z"/>
							<path  style="fill:#3B3B48;" d="M84.9,47.8c-2,0-3.3,0.2-4.6,0.6c-0.5,0.2-0.5,0.4-0.5,0.5v10.6c0,0.1,0.1,0.3,0.3,0.3h2.6
								c0.1,0,0.3-0.1,0.3-0.3v-8.9l0.1,0c0.5-0.1,1.3-0.1,1.9-0.1c0.3,0,0.4-0.1,0.4-0.2V48C85.3,47.8,84.9,47.8,84.9,47.8"/>
							<path  style="fill:#3B3B48;" d="M36.7,59.9c2.2,0,3.6-0.2,4.9-0.6c0.5-0.2,0.5-0.4,0.5-0.5V48.2c0-0.2-0.1-0.3-0.3-0.3h-2.6
								c-0.1,0-0.3,0.1-0.3,0.3v9.1l-0.1,0c-0.5,0.1-1.1,0.2-1.8,0.2c-1.4,0-2-0.6-2-1.9v-7.5c0-0.1-0.1-0.3-0.3-0.3h-2.6
								c-0.1,0-0.3,0.1-0.3,0.3v7.5C32,58.5,33.6,59.9,36.7,59.9"/>
							<path  style="fill:#3B3B48;" d="M78.2,47.8h-2.6c-0.1,0-0.3,0.1-0.3,0.3v9.1l-0.1,0c-0.5,0.1-1.1,0.2-1.8,0.2c-1.4,0-2-0.6-2-1.9
								v-7.5c0-0.1-0.1-0.3-0.3-0.3h-2.6c-0.1,0-0.3,0.1-0.3,0.3v7.5c0,2.9,1.6,4.3,4.7,4.3c2.2,0,3.6-0.2,4.9-0.6c0.5-0.2,0.5-0.4,0.5-0.5
								V48.2C78.5,48,78.4,47.8,78.2,47.8"/>
							<g transform="translate(121.518987, 45.695376)">
								<g>
								</g>
								<defs>
									<filter id="Adobe_OpacityMaskFilter_chauffeur-prive" filterUnits="userSpaceOnUse" x="0.9" y="0.9" width="9.9" height="13.3">
										<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
									</filter>
								</defs>
								<mask maskUnits="userSpaceOnUse" x="0.9" y="0.9" width="9.9" height="13.3" id="mask-2-chauffeur-prive">
									<g style="filter:url(#Adobe_OpacityMaskFilter_chauffeur-prive);">
										<polygon style="fill:#FFFFFF;" points="10.8,14.2 10.8,0.9 0.9,0.9 0.9,14.2 			"/>
									</g>
								</mask>
								<path  style="mask:url(#mask-2-chauffeur-prive);fill:#3B3B48;" d="M8.2,7L4,7c0.1-1.9,1.2-2.3,2.1-2.3c0.5,0,0.8,0,1.4,0.1l0.7,0.1V7z M10.3,2.6
									C9.6,2.4,8.8,2.3,7.9,2.2l0.6-0.8c0,0,0-0.1,0-0.1c0-0.1-0.1-0.2-0.3-0.2H5.7c-0.2,0-0.4,0.1-0.5,0.4L4.8,2.2
									C2.3,2.6,0.9,4.4,0.9,7.3v1.6c0,3.4,1.8,5.3,5.2,5.3c1.9,0,2.7-0.2,4-0.5l0.1,0c0.2-0.1,0.3-0.1,0.3-0.4v-1.8c0-0.1,0-0.2-0.2-0.2
									h-0.1c-0.8,0.1-2.6,0.2-4,0.2c-1.3,0-2-0.7-2.1-2.3h6.3c0.3,0,0.4-0.1,0.4-0.4V3.1C10.8,2.8,10.8,2.7,10.3,2.6L10.3,2.6z"/>
							</g>
							<path  style="fill:#3B3B48;" d="M27.7,57.3l-0.2,0c-0.5,0.1-1.1,0.1-1.7,0.1c-1.4,0-2-0.3-2-1.4s0.6-1.4,2-1.4
								c0.6,0,1.2,0,1.7,0.1l0.2,0V57.3z M30.8,53v-1.2c0-2.9-1.4-4.1-4.9-4.1c-2.1,0-3.6,0.4-4,0.6c-0.3,0.1-0.3,0.2-0.3,0.4v1.7
								c0,0.1,0.1,0.2,0.2,0.2h0c0.5,0,2.8-0.3,4-0.3c1.4,0,1.9,0.7,1.9,1.9c-0.7-0.1-1.4-0.1-2.3-0.1c-2.9,0-4.4,1.3-4.6,3.7v0.3
								c0.2,2.5,1.8,3.7,4.6,3.7c0.1,0,0.2,0,0.4,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.3,0,0.6,0,0.9,0c0,0,0,0,0,0
								c1.1-0.1,1.9-0.2,2.7-0.4c0.2,0,0.4-0.1,0.6-0.1c0.5-0.1,0.5-0.2,0.5-0.5v-0.1V58v-4.2L30.8,53C30.8,53,30.8,53,30.8,53L30.8,53z"/>
							<path  style="fill:#3B3B48;" d="M76.3,35.9h-20c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h20c4.4,0,8,3.6,8,8v20
								C84.3,32.3,80.7,35.9,76.3,35.9"/>
							<path  style="fill:#FFFFFF;" d="M66.4,31.5c-0.4,0-0.8-0.2-1.2-0.5l-2.7-2.5c-0.5-0.5-0.8-1.4-0.7-2.1l2.3-17.3l1.5,0.2l-2.3,17.3
								c0,0.2,0.1,0.6,0.3,0.8l2.7,2.5c0,0,0.1,0,0.2,0l2.7-2.5c0.2-0.2,0.3-0.6,0.3-0.8L67.1,9.3l1.5-0.2l2.3,17.3
								c0.1,0.7-0.2,1.6-0.7,2.1L67.5,31C67.2,31.3,66.8,31.5,66.4,31.5"/>
							<path  style="fill:#FFFFFF;" d="M64.3,8.3h4.1V6.9h-4.1V8.3z M68.6,9.9h-4.5c-0.8,0-1.4-0.6-1.4-1.4V6.6c0-0.8,0.6-1.4,1.4-1.4
								h4.5c0.8,0,1.4,0.6,1.4,1.4v1.9C70,9.3,69.4,9.9,68.6,9.9L68.6,9.9z"/>
							<path  style="fill:#FFFFFF;" d="M61.1,22.8c-0.2,0-0.4-0.1-0.5-0.1c-0.2-0.1-0.7-0.4-0.7-1.2v-2.8c0-0.6,0.2-1.5,0.6-2.1l3.4-6
								l1.4,0.8l-3.4,6c-0.2,0.3-0.3,0.9-0.3,1.3v1.9l1.2-0.9l1,1.3L62,22.5C61.7,22.7,61.4,22.8,61.1,22.8"/>
						</svg>
					</div>
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 100 34" style="enable-background:new 0 0 100 34;" xml:space="preserve">
							<g transform="translate(23.985455, 6.530225)">
								<defs>
									<filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="0.8" y="0.5" width="30.8" height="48.1">
										<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
									</filter>
								</defs>
								<mask maskUnits="userSpaceOnUse" x="0.8" y="0.5" width="30.8" height="48.1" id="mask-2-xola">
									<g style="filter:url(#Adobe_OpacityMaskFilter);">
										<path style="fill:#FFFFFF;" d="M0.8,20.3c2.8,3.6,7.1,6,12,6c8.4,0,15.2-6.8,15.2-15.2c0-4.1-1.6-7.8-4.3-10.6H2
											C1.6,0.9,1.2,1.4,0.8,1.9V20.3L0.8,20.3z"/>
									</g>
								</mask>
								<path style="mask:url(#mask-2-xola);fill:#3B3B48;" d="M0.8,12.4c0,0,1.2-0.4,1.3-0.4c0.1,0,0.3,0,0.3,0s0.2-0.2,0.2-0.2c0.1,0,0.3,0.1,0.3,0
									c0-0.1,0.2-0.2,0.2-0.2c0.1,0,0-0.2,0.1-0.2C3.4,11.3,4,11,4.1,10.8C4.2,10.7,4.7,10,4.7,10C4.8,10,4.9,9.9,5,9.8
									C5,9.7,5.5,9.2,5.6,9.1C5.7,8.9,6,8.8,6,8.8S6,8.4,6,8.3C6.1,8.3,6.3,8,6.4,7.9c0.1-0.1,0.4-0.4,0.5-0.4c0.1,0,0.3,0,0.3-0.1
									c0-0.1,0-0.3,0.1-0.3c0.1,0,0.3-0.1,0.3-0.1s0.3-0.9,0.4-0.9C8.1,6.1,8.3,6,8.3,6s0.4-0.3,0.5-0.3c0.1,0,0.5,0,0.5,0
									s0.4-0.4,0.4-0.6C9.8,4.9,9.9,4.8,10,4.8c0.1,0-0.1-0.1,0.1-0.2c0.2-0.1,0.8-0.4,0.9-0.5c0.1-0.1,0.3-0.5,0.3-0.5S11.3,3.2,11.4,3
									c0.1-0.1,0.7-0.3,0.9-0.4C12.5,2.5,13,2.2,13.1,2c0.1-0.2,0.3-0.4,0.4-0.4c0.1,0,0.4-0.4,0.4-0.5c0.1-0.1,0.5-0.2,0.6-0.3
									c0.1-0.1,0.5-0.1,0.6-0.1c0.1,0,0.2-0.1,0.4-0.2c0.2,0,1,0,1,0c0.1,0,0.2-0.2,0.3-0.1c0.1,0.1,0.3,0.4,0.3,0.4
									c0.1,0,0.3,0.1,0.5,0.2c0.2,0.1,0.4,0.5,0.6,0.5c0.2,0,0.3,0.3,0.4,0.4c0.1,0.1,0.5,0.5,0.5,0.6c0,0.1-0.1,0.3,0,0.5
									c0.1,0.2,0.2,0.5,0.3,0.6c0.1,0.1,0.3,0.4,0.3,0.6c0,0.1,0.2,0.5,0.4,0.7c0.2,0.1,0.4,0.9,0.6,1.2c0.2,0.2,0.7,1.5,0.9,1.7
									C21.7,8.1,21.7,8,21.8,8c0.2,0.1,0.7,0.4,0.9,0.5c0.2,0.1,0.7,1.1,0.8,1.3c0.1,0.2,0.7,1.1,0.8,1.3c0.1,0.2,0.3,0.9,0.5,0.9
									c0.1,0,0.4,0.8,0.5,0.9c0.1,0.1,0.7,0.9,0.8,1c0.1,0.1,0.6,1.1,0.6,1.3c0.1,0.1,0.5,0.6,0.6,0.7c0.2,0,0.4,0.4,0.5,0.4
									c0.1,0,0.3,0.1,0.7,0.3c0.4,0.2,1.6,1,1.6,1s-0.2,0.3,0,0.3c0.1,0,0.3-0.1,0.4,0.1c0.1,0.1,0.1,0.5,0.3,0.6
									c0.2,0.1,0.6,0.5,0.7,0.5c0.1,0,0,29.5,0,29.5h-29L0.8,12.4z"/>
							</g>
							<path style="fill:#3B3B48;" d="M42.9,10.9c-0.1,0.1-0.2,0.3-0.2,0.4l0,0c0,0.1,0.1,0.3,0.1,0.4l0,0c0,0.1,0.1,0.4,0.1,0.4l0,0
								c0,0-0.2-0.1-0.3-0.2l0,0c-0.1-0.1-0.1-0.3-0.1-0.4l0,0c0-0.1-0.2,0.1-0.3,0.1l0,0c-0.1,0-0.1-0.1-0.2-0.2l0,0
								c0-0.1-0.1-0.2-0.1-0.2l0,0c-0.1,0-0.3,0.1-0.5,0.3l0,0c-0.2,0.2-0.2,0.3-0.3,0.3l0,0c-0.1,0.1-0.2,0.1-0.3,0l0,0
								c-0.1-0.1-0.1,0-0.1,0l0,0c0,0-0.1,0.1-0.1,0l0,0c-0.1,0,0,0.1,0,0.2l0,0c0.1,0.1,0.1,0.2,0.1,0.1l0,0c-0.1-0.1-0.1,0.2,0,0.3l0,0
								c0.1,0.1,0.2,0.3,0.3,0.5l0,0c0.1,0.2,0.5,1,0.4,1l0,0c-0.1,0-0.3-0.4-0.4-0.6l0,0c-0.1-0.2-0.3-0.4-0.4-0.4l0,0
								c-0.1,0-0.3,0-0.4-0.1l0,0c-0.1,0-0.6-0.2-0.8-0.1l0,0c-0.3,0-0.4-0.2-0.5-0.3l0,0c-0.1,0-0.6-0.2-0.7-0.2l0,0
								c-0.1,0,0.3,0.4,0.4,0.4l0,0c0.1,0,0.2,0.1,0,0.2l0,0c-0.2,0.1-0.5-0.2-0.6-0.2l0,0c-0.1,0-0.2,0.2-0.1,0.3l0,0
								c0.1,0.1,0.5,0.3,0.6,0.4l0,0c0.1,0.1,0,0.4-0.1,0.3l0,0c-0.1,0-0.6,0-0.8,0l0,0c-0.2,0.1-0.5-0.2-0.7-0.3l0,0
								c-0.2-0.1-0.3,0-0.4,0.1l0,0c-0.1,0.1-0.3,0.4-0.4,0.6l0,0c-0.1,0.1-0.7,0.1-0.8,0.2l0,0c-0.1,0.1-0.7,0.6-0.9,0.8l0,0
								c-0.2,0.2-0.7,0.3-0.8,0.5l0,0c-0.2,0.1-0.4,0.7-0.5,0.8l0,0c-0.1,0.1-0.3,0.3-0.5,0.5l0,0c-0.1,0.2-0.4,0.3-0.6,0.6l0,0
								c-0.2,0.2-0.3,0.4-0.3,0.4l0,0l-0.4,0.4L31,18.1c0,0-0.4,0.3-0.5,0.4l0,0c-0.1,0.1-0.6,0-0.8-0.1l0,0c-0.2,0-0.4,0.2-0.4,0.2l0,0
								c0.1,0,0.1,0.1,0.1,0.2l0,0c0,0.1-0.4,0.1-0.4,0.1l0,0l-0.1,0.3c0,0-0.3,0.1-0.5,0.1l0,0c-0.1,0-0.3,0.1-0.4,0.1l0,0
								c-0.1,0-0.3-0.2-0.4-0.2l0,0c-0.1,0-0.3-0.1-0.4,0l0,0c-0.1,0.1-0.3,0.4-0.3,0.4l0,0c0,0-0.3,0-0.3,0l0,0c-0.1,0-0.6,0.2-0.6,0.2
								l0,0l1.8,10.2c2.5,1.9,5.7,3,9.1,3l0,0c6.5,0,12-4.1,14.2-9.8l0,0c-0.4-0.7-1.1-1.9-1.2-2.1l0,0c-0.1-0.2-0.7-1.3-0.8-1.5l0,0
								c-0.1-0.1-0.2,0-0.3,0l0,0c0,0-0.1,0-0.1,0l0,0c-0.1,0-0.1,0-0.1,0l0,0c0,0.1-0.2,0.3-0.3,0.2l0,0c-0.1-0.1-0.3-0.6-0.3-0.7l0,0
								c0-0.1,0.3,0.1,0.3,0.1l0,0c0,0,0.1-0.1,0.1-0.1l0,0c0-0.1-0.5-0.2-0.5-0.2l0,0c-0.1,0-0.3-0.4-0.4-0.5l0,0
								c-0.1-0.1-0.4-0.5-0.5-0.6l0,0c-0.1-0.1-0.5-0.5-0.6-0.6l0,0c-0.1-0.1-0.4-0.4-0.6-0.5l0,0c-0.2-0.1-0.2-0.4-0.3-0.6l0,0
								c-0.1-0.2-0.1,0.1-0.1,0.2l0,0c0,0.1-0.2,0.2-0.1,0.2l0,0c0.1,0,0.1,0.2,0.2,0.3l0,0c0.1,0.1-0.2,0.2-0.3,0.1l0,0
								c-0.1,0-0.2-0.3-0.2-0.4l0,0c-0.1-0.1-0.3-0.2-0.2-0.3l0,0c0.1-0.1,0.2-0.4,0.1-0.5l0,0c-0.1-0.1-0.1-0.3,0-0.3l0,0
								c0.1,0,0.2-0.1,0.3-0.1l0,0c0.1-0.1,0.2,0.2,0.3,0.3l0,0c0.1,0.1,0.3,0.5,0.3,0.4l0,0c0-0.1,0.1-0.1,0.1-0.1l0,0
								c0.1,0.3,1.3,1.8,1.3,1.9l0,0c0,0.1,0.1-0.1,0.1-0.2l0,0c0-0.2,0.1-0.1,0.1-0.2l0,0c0-0.1-0.1-0.3-0.4-0.3l0,0
								c-0.3,0-0.4-0.4-0.5-0.6l0,0c-0.1-0.2,0.3,0.2,0.3,0.2l0,0l-0.8-1.4c0,0-0.7-1.2-0.8-1.2l0,0c-0.1,0-0.2,0.1-0.2,0.1l0,0
								c0,0.1,0.1,0.5,0.2,0.6l0,0c0.1,0.1,0.2,0.3,0.2,0.4l0,0c-0.1,0-0.3-0.1-0.5-0.2l0,0c-0.1-0.1-0.3,0.2-0.3,0.2l0,0
								c0,0-0.1-0.7-0.1-0.7l0,0c-0.1,0-0.1-0.3,0-0.6l0,0c0-0.3-0.3-0.3-0.3-0.3l0,0c0,0-0.1-0.6-0.1-0.7l0,0c-0.1-0.1,0-0.5,0-0.7l0,0
								c0-0.2-0.4-0.8-0.5-0.9l0,0c0,0-0.1-0.1-0.2-0.1l0,0C43,10.9,42.9,10.9,42.9,10.9"/>
							<g transform="translate(26.581818, 11.970225)">
								<path style="fill:#3B3B48;" d="M7.2,0.8c0,0-0.1,0.2-0.2,0.3l0,0C6.9,1.2,6.8,1.5,6.6,1.7l0,0C6.5,1.9,6.3,2,6.2,1.9l0,0
									C6.1,1.9,5.9,2,5.9,2.2l0,0c0,0.2,0.1,0.6,0,0.6l0,0c-0.1-0.1,0-0.3-0.2-0.2l0,0C5.5,2.7,5.2,3.3,5.1,3.2l0,0C5,3.2,4.8,2.9,4.7,3
									l0,0C4.7,3.1,4.6,3.5,4.5,3.3l0,0C4.4,3.1,4.3,3.2,4,3.3l0,0C3.8,3.5,3.5,3.7,3.4,3.7l0,0C3.3,3.8,3,4,3,4.2l0,0
									C2.9,4.3,2.8,4.4,2.7,4.5l0,0C2.6,4.5,2.4,4.7,2.4,4.8l0,0c0,0.1-0.1,0.2-0.3,0.3l0,0C2,5.2,1.8,5.4,1.6,5.5l0,0
									C1.5,5.7,1.2,6,1,6.1l0,0C0.9,6.1,0.6,6.3,0.8,6.3l0,0c0,0,0.2,0,0.4-0.1l0,0c0.1-0.1,0.5-0.4,0.6-0.4l0,0c0.1,0,0.3-0.1,0.4,0.1
									l0,0c0.1,0.1,0,0.3-0.2,0.4l0,0C1.9,6.3,1.7,6.6,1.6,6.6l0,0c-0.1,0-0.3,0.2-0.3,0.2l0,0c0,0,0.3,0,0.5-0.1l0,0
									C2,6.6,2.4,6.4,2.5,6.3l0,0C2.5,6.1,2.6,6,2.7,5.8l0,0C2.8,5.7,3,5.9,2.9,6l0,0c0,0.1,0.2,0.2,0.3,0l0,0C3.4,5.9,3.6,6,3.7,6l0,0
									c0.2,0,0.5,0.1,0.6,0l0,0c0.1-0.1,0.3-0.6,0.4-0.6l0,0c0.1-0.1,0.4-0.6,0.5-0.8l0,0c0.1-0.2,0.4-0.8,0.5-1l0,0
									C5.7,3.2,6,2.9,6.1,2.8l0,0c0.1-0.1,0.5-0.2,0.6-0.3l0,0C6.9,2.4,6.8,2.3,7,2.1l0,0C7.2,2,7.2,2,7.2,1.8l0,0c0-0.2,0.1-0.3,0.1-0.3
									l0,0c0,0-0.2-0.2-0.1-0.4l0,0C7.4,1,7.6,0.6,7.6,0.6l0,0c0,0,0-0.2-0.1-0.1l0,0c-0.1,0.1-0.3,0-0.3,0l0,0V0.8z"/>
							</g>
							<g transform="translate(42.283636, 16.668407)">
								<path style="fill:#3B3B48;" d="M0.6,0.6c0,0,0.6,0.8,0.7,1c0.1,0.2,0.5,1,0.6,1.1C1.9,2.8,2,3,2.2,3.2c0.2,0.2,0.4,0.4,0.4,0.4
									s0-0.2,0-0.3c0-0.1-0.5-0.6-0.6-0.9C1.9,2.2,0.7,0.6,0.6,0.6"/>
								<path style="fill:#3B3B48;" d="M2.8,3.8c0,0,0.2,0.3,0.2,0.5c0,0.2,0.2,0.6,0.3,0.8c0.1,0.2,0.2,0.5,0.3,0.5
									c0.1,0,0.3,0.1,0.5,0.3c0.2,0.2,0.3,0.4,0.5,0.5c0.2,0.1,0.3,0.1,0.3,0.1S4.6,6.1,4.4,5.7C4.1,5.3,3.7,4.5,3.5,4.4
									C3.4,4.3,3.2,4.1,3.2,4.1C3.1,4.2,2.8,3.8,2.8,3.8"/>
							</g>
							<path style="fill:#3B3B48;" d="M28.6,26.3c0.2,0.5,2,1.2,2,0.9l0,0c0-0.3,0-1.1,0-1.6l0,0c0.1,0.2,0.3,0.4,0.3,0.5l0,0
								c0.1,0.2,1.8,2.6,1.9,3l0,0c0.2,0.5,3.6,2.7,3.9,3.1l0,0c0.1,0.1,0.3,0.3,0.5,0.6l0,0c1.3,0,2.5-0.2,3.6-0.6l0,0
								c-0.1-0.1-0.2-0.2-0.2-0.3l0,0c0-0.1,0.1-0.2,0.2-0.3l0,0c0.1-0.1,0.1-0.1-0.1-0.1l0,0c-0.1,0-0.5-0.1-0.7-0.1l0,0
								c-0.2,0-0.9-0.4-1.2-0.5l0,0c-0.2-0.1-0.5-0.6-0.7-0.8l0,0c-0.2-0.2-0.3-0.2-0.4-0.2l0,0c-0.1,0-0.2,0-0.3-0.2l0,0
								c-0.1-0.2-0.1-0.3-0.2-0.4l0,0c-0.1-0.1-0.1,0.2-0.1,0.2l0,0c-0.1,0-0.2-0.3-0.3-0.4l0,0c-0.1-0.1-0.2-0.4-0.3-0.5l0,0
								c-0.1-0.1-0.1,0.1-0.1,0.2l0,0c0,0.1-0.2,0.2-0.3,0.2l0,0c-0.1-0.1-0.2-0.3-0.3-0.4l0,0c0,0,0,0.1,0,0.2l0,0c0,0.1,0,0.2,0,0.1l0,0
								c-0.1-0.1-0.2-0.2-0.2-0.3l0,0c0-0.1-0.1-0.6-0.2-0.6l0,0c-0.1,0-0.1-0.3-0.2-0.4l0,0c-0.1-0.1-0.1,0.1-0.1,0.2l0,0
								c0,0.1-0.2,0-0.2-0.1l0,0c0-0.1-0.1-0.4-0.2-0.4l0,0c-0.1-0.1-0.2,0.1-0.2,0.1l0,0l0,0.5c0,0-0.2-0.5-0.2-0.6l0,0
								c-0.1-0.1-0.2-0.4-0.2-0.3l0,0c0,0.1-0.1-0.1-0.2-0.2l0,0c-0.1-0.1-0.2-0.3-0.2-0.2l0,0c0,0.1,0.1,0.5,0,0.5l0,0
								c-0.1-0.1-0.2-0.5-0.3-0.7l0,0c-0.1-0.2-0.5-0.5-0.5-0.5l0,0l-0.1-0.3c0,0-0.4,0-0.4-0.1l0,0c0-0.1-0.2-0.1-0.2,0l0,0
								c0,0.1-0.2,0-0.3,0l0,0c-0.1,0-0.3-0.4-0.4-0.5l0,0c0-0.1-0.1-0.2-0.1-0.1l0,0c0,0.1-0.1,0-0.2-0.1l0,0c-0.1-0.2,0.1-0.4,0.2-0.5
								l0,0c0-0.1,0-0.2-0.1-0.1l0,0c-0.1,0.1-0.2,0.4-0.2,0.4l0,0l-0.2-0.3l-0.1,0.1L30.5,24l-0.2-0.3l-0.1,0.4l0,0
								c-0.1-0.2-0.1-0.4-0.2-0.4l0,0c-0.1-0.1-0.4-1.1-0.5-1.2l0,0c-0.1-0.2-0.1-0.5-0.1-0.5l0,0c0,0-0.2-0.1-0.4-0.1l0,0
								c-0.1,0.1-0.2-0.2-0.4-0.3l0,0c-0.1-0.1-0.3,0-0.3,0l0,0v-0.4l-1-0.1C27.4,21,28.4,25.8,28.6,26.3"/>
							<path style="fill:#3B3B48;" d="M25.1,16.7c-0.1,0.1-0.5,0.2-0.6,0.2l0,0c-0.1,0.1-0.3,0.3-0.3,0.4l0,0c-0.1,0.1-0.2,0.1-0.3,0.2
								l0,0c-0.1,0.1-0.2,0.4-0.2,0.4l0,0c0,0-0.2,0-0.5,0.3l0,0c-0.2,0.2-0.5,0.3-0.7,0.5l0,0c-0.2,0.1-0.5,0.4-0.7,0.5l0,0
								c0.8,7.7,7.2,13.6,15.1,13.6l0,0c0.4,0,0.8,0,1.2-0.1l0,0c-0.2-0.3-0.3-0.5-0.5-0.7l0,0c-0.3-0.6-1.1-1-1.2-1l0,0
								c-0.1,0-0.4-0.6-0.5-0.6l0,0c-0.1,0-0.4-0.5-0.5-0.7l0,0c-0.1-0.2-0.3-0.3-0.4-0.3l0,0c-0.2,0-0.9-1-0.9-1l0,0c0,0-1.1-1.2-1.2-1.3
								l0,0c-0.1-0.1-0.7-0.9-0.8-1l0,0c-0.1-0.1-0.6-0.5-0.8-0.5l0,0c-0.1,0-0.5-0.6-0.6-0.7l0,0c-0.1-0.1-0.3-0.1-0.3,0l0,0
								c0,0.1-0.2,0.3-0.2,0.3l0,0c0,0.1,0,0.3-0.1,0.4l0,0c-0.1,0.1-0.2,0.5-0.2,0.5l0,0c0,0-0.2-0.2-0.3-0.2l0,0c-0.1,0-0.2-0.6-0.2-0.7
								l0,0c0-0.1-0.2-0.4-0.2-0.5l0,0c-0.1-0.1-0.3-0.6-0.5-0.7l0,0c-0.1-0.1-0.2-0.6-0.3-0.8l0,0c0-0.2-0.4-0.8-0.5-1l0,0
								c-0.1-0.2-0.2-0.8-0.2-0.9l0,0c0-0.1-0.2-0.4-0.3-0.6l0,0c-0.1-0.1-0.6-0.7-0.8-0.8l0,0c-0.2-0.1-0.3-0.4-0.3-0.5l0,0
								c0-0.1-0.1-0.4-0.1-0.4l0,0c0,0-0.1-0.2-0.2-0.3l0,0c0-0.1-0.1-1.7-0.1-1.8l0,0c0-0.1-0.2-0.2-0.3-0.3l0,0c-0.1,0,0-0.2,0-0.3l0,0
								c0-0.1-0.1-0.2-0.1-0.2l0,0C25.5,16.3,25.2,16.6,25.1,16.7"/>
							<g transform="translate(0.000000, 0.101135)">
								<g transform="translate(0.000000, 0.989091)">
									<defs>
										<filter id="Adobe_OpacityMaskFilter_1_" filterUnits="userSpaceOnUse" x="0.6" y="0.5" width="19.6" height="31.5">
											<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
										</filter>
									</defs>
									<mask maskUnits="userSpaceOnUse" x="0.6" y="0.5" width="19.6" height="31.5">
										<g style="filter:url(#Adobe_OpacityMaskFilter_1_);">
											<polygon style="fill:#FFFFFF;" points="0.6,0.5 0.6,32 20.2,32 20.2,0.5 				"/>
										</g>
									</mask>
									<polygon style="mask:url(#mask-4);fill:#3B3B48;" points="0.9,0.5 3.1,0.5 10.4,14.1 17.6,0.5 19.8,0.5 11.6,15.9 20.2,32 18,32 10.4,17.8 
										2.8,32 0.6,32 9.2,15.9 		"/>
								</g>
								<polygon style="fill:#3B3B48;" points="60.4,31.1 69.6,31.1 69.6,33 58.4,33 58.4,1.5 60.4,1.5 	"/>
								<g transform="translate(72.945455, 0.000000)">
									<path style="fill:#3B3B48;" d="M20.1,20.8L13.9,5.6L20.1,20.8z M13.9,5.6L7.8,20.8h12.3L13.9,5.6z M7,22.7L2.8,33h-2L13.9,0.5
										L27.1,33h-2l-4.2-10.4H7z"/>
								</g>
								<path style="fill:#3B3B48;" d="M22.6,17.3c0,7.8,6.5,14.3,14.3,14.3c7.8,0,14.3-6.6,14.3-14.3C51.2,9.5,44.7,3,36.9,3
									C29,3,22.6,9.5,22.6,17.3 M53.2,17.3c0,8.8-7.5,16.2-16.3,16.2c-8.8,0-16.3-7.3-16.3-16.2c0-8.8,7.4-16.2,16.3-16.2
									C45.7,1.1,53.2,8.4,53.2,17.3"/>
							</g>
						</svg>
					</div>
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 132 61" style="enable-background:new 0 0 132 61;" xml:space="preserve">
							<path style="fill:#3B3B48;" d="M130.6,48.1H122c-0.4,0-0.7,0.3-0.7,0.6c0,0.3,0.3,0.6,0.7,0.6h3.6v10.1c0,0.4,0.3,0.7,0.7,0.7
								c0.4,0,0.7-0.3,0.7-0.7V49.4h3.6c0.4,0,0.7-0.3,0.7-0.6C131.2,48.4,130.9,48.1,130.6,48.1L130.6,48.1z M119.6,54.1
								c0,2.7-2,4.9-4.8,4.9c-2.8,0-4.9-2.2-4.9-4.9v0c0-2.7,2-4.9,4.8-4.9C117.6,49.2,119.6,51.4,119.6,54.1L119.6,54.1L119.6,54.1z
								 M114.8,47.9c-3.8,0-6.3,2.9-6.3,6.2v0c0,3.3,2.5,6.1,6.3,6.1c3.8,0,6.3-2.9,6.3-6.2v0C121.1,50.8,118.5,47.9,114.8,47.9L114.8,47.9
								z M105.9,52c0,1.6-1.3,2.6-3.4,2.6h-3.1v-5.3h3.1C104.6,49.4,105.9,50.2,105.9,52L105.9,52L105.9,52z M102.7,48.1h-3.9
								c-0.4,0-0.7,0.3-0.7,0.7v10.7c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7v-3.6h3c2.6,0,4.9-1.3,4.9-3.9v0
								C107.3,49.5,105.5,48.1,102.7,48.1L102.7,48.1z M92.1,53.4c-2.7-0.6-3.4-1.2-3.4-2.3v0c0-1.1,1-1.9,2.6-1.9c1.1,0,2.2,0.3,3.2,1
								c0.1,0.1,0.2,0.1,0.4,0.1c0.4,0,0.7-0.3,0.7-0.6c0-0.3-0.2-0.4-0.3-0.5c-1.1-0.8-2.3-1.2-3.9-1.2c-2.4,0-4.1,1.4-4.1,3.3v0
								c0,2,1.3,2.8,4.2,3.4c2.6,0.5,3.2,1.2,3.2,2.3v0c0,1.2-1.1,2-2.8,2c-1.6,0-2.7-0.5-3.9-1.4c-0.1-0.1-0.2-0.2-0.4-0.2
								c-0.4,0-0.7,0.3-0.7,0.7c0,0.2,0.1,0.4,0.3,0.5c1.4,1.1,2.9,1.6,4.7,1.6c2.5,0,4.2-1.3,4.2-3.4v0C96.1,55,94.8,54,92.1,53.4
								L92.1,53.4z M85,48.1h-8c-0.7,0-1.3,0.5-1.3,1.2c0,0.7,0.6,1.2,1.3,1.2h2.6v8.3c0,0.7,0.6,1.3,1.4,1.3c0.8,0,1.4-0.6,1.4-1.3v-8.3
								H85c0.7,0,1.3-0.5,1.3-1.2C86.2,48.7,85.7,48.1,85,48.1L85,48.1z M73.3,48c-0.8,0-1.4,0.6-1.4,1.3v3.5h-5v-3.5
								c0-0.7-0.6-1.3-1.4-1.3c-0.8,0-1.4,0.6-1.4,1.3v9.5c0,0.7,0.6,1.3,1.4,1.3c0.8,0,1.4-0.6,1.4-1.3v-3.6h5v3.6c0,0.7,0.6,1.3,1.4,1.3
								c0.8,0,1.4-0.6,1.4-1.3v-9.5C74.7,48.6,74.1,48,73.3,48L73.3,48z M61.1,53.2H58c-0.7,0-1.2,0.5-1.2,1.1c0,0.6,0.5,1.1,1.2,1.1h1.8
								v1.7c-0.7,0.5-1.6,0.7-2.6,0.7c-2.2,0-3.8-1.6-3.8-3.8v0c0-2,1.6-3.7,3.6-3.7c1.2,0,2,0.3,2.7,0.8c0.2,0.1,0.4,0.3,0.8,0.3
								c0.7,0,1.3-0.6,1.3-1.3c0-0.5-0.3-0.9-0.6-1.1c-1.1-0.8-2.4-1.2-4.2-1.2c-3.8,0-6.5,2.8-6.5,6.2v0c0,3.5,2.7,6.1,6.5,6.1
								c1.9,0,3.3-0.6,4.3-1.2c0.7-0.4,1-0.9,1-1.7v-2.9C62.5,53.8,61.9,53.2,61.1,53.2L61.1,53.2z M48,48c-0.8,0-1.4,0.6-1.4,1.3V55
								c0,1.9-1,2.9-2.7,2.9c-1.7,0-2.7-1-2.7-3v-5.5c0-0.7-0.6-1.3-1.4-1.3c-0.8,0-1.4,0.6-1.4,1.3v5.6c0,3.5,2,5.3,5.4,5.3
								c3.3,0,5.4-1.8,5.4-5.4v-5.5C49.3,48.6,48.7,48,48,48L48,48z M34.3,54.1c0,2-1.5,3.7-3.7,3.7s-3.8-1.7-3.8-3.8v0
								c0-2,1.5-3.7,3.7-3.7C32.8,50.3,34.3,52,34.3,54.1L34.3,54.1L34.3,54.1z M30.6,47.9c-3.8,0-6.6,2.8-6.6,6.2v0c0,3.4,2.7,6.1,6.6,6.1
								c3.8,0,6.6-2.8,6.6-6.2v0C37.2,50.7,34.4,47.9,30.6,47.9L30.6,47.9z M21.1,48c-0.8,0-1.4,0.6-1.4,1.3v3.5h-5v-3.5
								c0-0.7-0.6-1.3-1.4-1.3c-0.8,0-1.4,0.6-1.4,1.3v9.5c0,0.7,0.6,1.3,1.4,1.3c0.8,0,1.4-0.6,1.4-1.3v-3.6h5v3.6c0,0.7,0.6,1.3,1.4,1.3
								c0.8,0,1.4-0.6,1.4-1.3v-9.5C22.5,48.6,21.9,48,21.1,48L21.1,48z M9.7,48.1h-8c-0.7,0-1.3,0.5-1.3,1.2c0,0.7,0.6,1.2,1.3,1.2h2.6
								v8.3c0,0.7,0.6,1.3,1.4,1.3c0.8,0,1.4-0.6,1.4-1.3v-8.3h2.6c0.7,0,1.3-0.5,1.3-1.2C10.9,48.7,10.3,48.1,9.7,48.1L9.7,48.1z
								 M66.7,0.6C56,0.6,47.3,9.3,47.3,20.1c0,10.8,8.7,19.5,19.4,19.5c10.7,0,19.4-8.7,19.4-19.5C86.1,9.3,77.4,0.6,66.7,0.6L66.7,0.6z"
								/>
							<g transform="translate(56.081933, 15.652174)">
								<g transform="translate(0.124224, 3.220534)">
									<defs>
										<filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="0.3" y="0.6" width="20.5" height="4.5">
											<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
										</filter>
									</defs>
									<mask maskUnits="userSpaceOnUse" x="0.3" y="0.6" width="20.5" height="4.5" id="mask-2">
										<g style="filter:url(#Adobe_OpacityMaskFilter);">
											<polygon style="fill:#FFFFFF;" points="0.3,5.1 20.8,5.1 20.8,0.6 0.3,0.6 "/>
										</g>
									</mask>
									<path style="mask:url(#mask-2-thoughtspot);fill:#FEFEFE;" d="M18.5,0.6H14c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h4.6c0.5,0,0.9,0.4,0.9,0.9
										c0,0.5-0.4,0.9-0.9,0.9H1C0.6,3.7,0.3,4,0.3,4.4c0,0.4,0.3,0.7,0.7,0.7h17.6c1.2,0,2.3-1,2.3-2.3C20.8,1.6,19.8,0.6,18.5,0.6"/>
								</g>
								<g transform="translate(0.000000, 0.114944)">
									<defs>
										<filter id="Adobe_OpacityMaskFilter_1_toughtspot" filterUnits="userSpaceOnUse" x="0.2" y="0.5" width="20.7" height="4.6">
											<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
										</filter>
									</defs>
									<mask maskUnits="userSpaceOnUse" x="0.2" y="0.5" width="20.7" height="4.6" id="mask-4-toughtspot">
										<g style="filter:url(#Adobe_OpacityMaskFilter_1_toughtspot);">
											<polygon style="fill:#FFFFFF;" points="20.9,5.2 20.9,0.5 10.6,0.5 0.2,0.5 0.2,5.2 "/>
										</g>
									</mask>
									<path style="mask:url(#mask-4-toughtspot);fill:#FEFEFE;" d="M2.5,5h5c0.4,0,0.7-0.3,0.7-0.7S7.8,3.7,7.4,3.7h-5C2,3.7,1.6,3.3,1.6,2.8S2,1.9,2.5,1.9h7.6v2.6
										c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7V1.9h8.8c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.7-0.7H2.5c-1.2,0-2.3,1-2.3,2.3
										C0.2,4,1.2,5,2.5,5"/>
								</g>
							</g>
						</svg>

					</div>
					<div class="logo">
						<img src="img/logo/study.png" alt="Logo Study Quizz" title="Logo Study Quizz">
					</div>
					<div class="logo">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 98 47" style="enable-background:new 0 0 98 47;" xml:space="preserve">
							<path  style="fill:#3B3B48;" d="M36.4,37.8c0.2,0.1,0.3,0.3,0.2,0.5v0c-0.2,0.4-0.4,0.8-0.7,1.2c-0.2,0.4-0.4,0.8-0.7,1.2
								c-0.2,0.4-0.5,0.8-0.7,1.2c-0.2,0.4-0.5,0.8-0.8,1.2c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c0,0.1-0.1,0.1-0.1,0.2
								c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3
								c-0.2,0.2-0.4,0.4-0.6,0.5c-0.2,0.2-0.5,0.4-0.7,0.5C30.8,46,30.7,46,30.5,46c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4-0.1-0.6-0.2
								c-0.2-0.1-0.3-0.2-0.5-0.3c-0.1-0.1-0.3-0.2-0.4-0.4c0-0.1-0.1-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2C28.2,44.5,28,44.3,28,44
								c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0-0.4l-0.1-0.8c-0.1-1,0-2,0.1-3
								c0.1-0.6,0.2-1.2,0.3-1.8c-0.4,0.1-0.8,0.1-1.2,0.1c-0.6,0-1.2,0-1.9-0.1c-0.5-0.1-1-0.2-1.4-0.3c0,0,0,0-0.1,0.1c0,0,0,0,0,0.1
								c-0.1,0.3-0.2,0.5-0.4,0.7c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3
								c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.2-0.2,0.3c0,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.2,0-0.3-0.1
								c-0.1-0.1-0.2-0.3-0.1-0.5c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3
								c0.1-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.2-0.5,0.3-0.7c0,0,0,0,0-0.1c-0.2-0.1-0.5-0.3-0.7-0.4
								c-0.2-0.2-0.5-0.3-0.7-0.5c-0.3-0.2-0.5-0.5-0.7-0.8c-0.2-0.4-0.4-0.7-0.5-1.1c-0.1-0.4-0.1-0.8-0.1-1.2c0-0.4,0.2-0.8,0.4-1.2
								c0.1-0.1,0.1-0.1,0.2-0.3c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.2
								c0.2-0.1,0.3-0.2,0.5-0.2c0.2,0,0.3-0.1,0.5-0.1h0.3h0.1h0h0h0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0.1
								c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2
								c0.1,0.1,0.1,0.2,0.1,0.2c0,0.1,0.1,0.2,0.1,0.3c0,0.1,0.1,0.2,0.1,0.2c0,0.1,0,0.2,0.1,0.2v0.3c0,0.1,0,0.1,0,0.2
								c0,0.1,0,0.2,0,0.3v0.2c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2-0.1,0.4h0.6c0.8,0,1.7-0.1,2.6-0.3c0.2,0,0.4-0.1,0.7-0.1
								c0.2-0.1,0.4-0.1,0.7-0.2c0.2-0.1,0.4-0.2,0.6-0.2c0.2-0.1,0.5-0.2,0.7-0.2l0.6-0.1c0.5-0.1,0.9,0,1.4,0.3c0.4,0.3,0.7,0.7,0.8,1.2
								c0.1,0.4,0,0.7-0.1,1c-0.1,0.3-0.3,0.6-0.6,0.8c-0.3,0.2-0.5,0.5-0.8,0.8c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.2-0.2,0.3-0.3,0.5
								c-0.4,0.7-0.7,1.4-1,2.3c-0.1,0.2-0.1,0.4-0.2,0.6C30,40,30,40.2,29.9,40.5c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2-0.1,0.3
								c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.2-0.1,0.4-0.1,0.6c0,0.2,0,0.4,0,0.6c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3
								c0,0.2,0.1,0.3,0.1,0.5c0.1,0.2,0.1,0.3,0.2,0.3c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0.1,0h0.1h0.1
								c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2-0.1c0.1,0,0.2-0.1,0.3-0.1c0.2-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.3-0.2,0.5-0.4l0.5-0.5
								c0,0,0.1-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.1c0-0.1,0.1-0.1,0.2-0.3c0.6-0.7,1.1-1.5,1.6-2.2c0.1-0.2,0.3-0.4,0.4-0.6
								c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.2-0.4,0.3-0.6c0-0.1,0.1-0.2,0.2-0.2C36.2,37.8,36.3,37.8,36.4,37.8
								 M21.9,31.6c0,0.1,0.1,0.3,0.2,0.4c0.1,0.1,0.2,0.2,0.3,0.3l0.3,0.3c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1
								c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0,0.3,0.1,0.4,0.1c0-0.2,0.1-0.3,0.1-0.4v-0.2c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2V32
								c0-0.3,0-0.5-0.1-0.6c0-0.1-0.1-0.2-0.1-0.2C23.7,31,23.6,31,23.6,31c-0.1-0.1-0.3-0.1-0.5-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0
								v0h0h0h0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c-0.2,0.1-0.3,0.2-0.4,0.3C22,31.3,22,31.4,22,31.5
								C21.9,31.5,21.9,31.6,21.9,31.6"/>
							<path  style="fill:#3B3B48;" d="M42,12.6c0.2,1.2,0.1,2.4-0.1,3.6c-0.1,0.6-0.2,1.2-0.4,1.7c-0.2,0.6-0.4,1.1-0.6,1.6
								c-0.1,0.3-0.3,0.5-0.4,0.8c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.5,0.7c-0.2,0.2-0.4,0.5-0.6,0.7c-0.2,0.2-0.4,0.5-0.6,0.7
								c-0.2,0.2-0.4,0.4-0.6,0.6l-0.6,0.5l-0.6,0.5c-0.4,0.3-0.9,0.6-1.3,0.9c-0.5,0.2-0.9,0.5-1.4,0.7c-0.5,0.2-1,0.4-1.5,0.6
								c-0.5,0.1-1,0.3-1.5,0.4c-0.5,0.1-1,0.3-1.5,0.3c-0.5,0.1-0.9,0.2-1.4,0.2c-1.9,0.3-3.9,0.3-5.8,0c-0.5-0.1-0.7-0.3-0.6-0.8
								c0.1-0.4,0.3-0.6,0.6-0.7c1.8-0.2,3.6-0.6,5.2-1.2c0.8-0.3,1.6-0.6,2.3-1c0.8-0.5,1.5-0.9,2-1.4c0.6-0.5,1.2-1.1,1.7-1.7
								c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.3,0.3-0.4
								c0.1-0.2,0.2-0.3,0.3-0.5c0.7-1.3,1.2-2.7,1.3-4c0.1-0.3,0.1-0.6,0.1-1c0-0.3,0-0.7,0-1c0-0.3-0.1-0.6-0.1-1c0-0.3-0.1-0.7-0.2-1
								c-0.1-0.3-0.2-0.6-0.3-1c-0.1-0.3-0.3-0.7-0.4-1C34.9,9.1,34.9,9,34.8,9c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.1-0.2-0.3-0.3-0.5
								c-0.2-0.3-0.4-0.6-0.6-0.9c-0.5-0.6-1.1-1.2-1.7-1.7c-0.6-0.5-1.3-0.9-2.1-1.4c-0.4-0.2-0.8-0.4-1.2-0.5c-0.4-0.1-0.8-0.3-1.2-0.4
								c-0.4-0.1-0.8-0.3-1.3-0.4c-0.4-0.1-0.9-0.2-1.3-0.3c-0.4-0.1-0.9-0.2-1.3-0.3c-0.4-0.1-0.9-0.2-1.3-0.2c-0.2,0-0.5,0-0.7,0
								c-0.2,0-0.4-0.1-0.6-0.1h-1.4h-1.3c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6,0c-0.5,0.1-0.9,0.1-1.3,0.2c-0.4,0.1-0.9,0.1-1.3,0.2
								c-0.9,0.2-1.8,0.4-2.6,0.7c-0.8,0.3-1.7,0.6-2.5,1C8.8,4.3,8.4,4.6,8.1,4.8C7.7,5,7.3,5.2,6.9,5.5C6.6,5.8,6.3,6,5.9,6.3
								C5.6,6.6,5.3,6.9,5,7.2C4.4,7.9,3.9,8.6,3.4,9.4c-0.3,0.7-0.6,1.5-0.8,2.4c0,0.2-0.1,0.5-0.1,0.7v0.6v0.2v0.1v0.3c0,0.1,0,0.2,0,0.3
								c0,0.1,0,0.2,0,0.3c0.1,0.8,0.3,1.6,0.6,2.4c0.4,0.8,0.8,1.5,1.2,2c0.5,0.6,1,1.2,1.6,1.7c0.1,0.1,0.3,0.3,0.4,0.4
								c0.2,0.1,0.3,0.2,0.5,0.3c0.2,0.1,0.3,0.2,0.5,0.3c0.2,0.1,0.3,0.2,0.5,0.3c0.3,0.2,0.7,0.4,1,0.5c0.1,0.1,0.2,0.1,0.3,0.1
								c0.1,0,0.2,0,0.3,0.1c0.2,0.1,0.3,0.1,0.3,0.1l0.1,0l0.1,0c0.6,0.2,1.1,0.6,1.4,1.2c0.3,0.6,0.3,1.2,0.1,1.8
								c-0.2,0.6-0.6,1.1-1.2,1.4c-0.6,0.3-1.2,0.3-1.8,0.1L8.3,27L8.2,27L8,26.9c-0.2-0.1-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.1-0.3-0.2
								c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.5-0.3-0.7-0.4c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.4-0.3-0.6-0.5c-0.2-0.2-0.4-0.3-0.6-0.5
								c-0.2-0.2-0.4-0.4-0.6-0.6c-0.2-0.2-0.3-0.4-0.5-0.6c-0.7-0.8-1.3-1.7-1.8-2.7C1.2,20,1,19.5,0.7,19c-0.2-0.5-0.3-1-0.4-1.5
								c-0.1-0.5-0.2-1-0.2-1.6c0-0.6,0-1.1,0-1.6l0.1-0.8v-0.2c0-0.1,0-0.1,0-0.2l0-0.2l0-0.2c0.1-0.3,0.1-0.5,0.2-0.7
								c0.1-0.3,0.2-0.5,0.3-0.7c0.2-0.5,0.4-1,0.6-1.4C1.7,9.5,1.9,9,2.2,8.6C2.7,7.8,3.3,7.1,4,6.4c0.3-0.4,0.6-0.7,1-1
								C5.4,5,5.8,4.7,6.2,4.4C7,3.8,7.9,3.3,8.7,2.9c0.8-0.4,1.7-0.8,2.6-1.1c0.5-0.2,0.9-0.3,1.3-0.4C13.1,1.2,13.6,1.1,14,1
								c0.9-0.2,1.8-0.4,2.8-0.5c0.2,0,0.5-0.1,0.7-0.1c0.2,0,0.5-0.1,0.7-0.1l1.4-0.1c0.2,0,0.5,0,0.7,0c0.3,0,0.5,0,0.7,0
								c0.2,0,0.5,0,0.7,0c0.3,0,0.5-0.1,0.7-0.1c0.5,0,1,0,1.4,0c0.5,0,0.9,0,1.4,0c0.5,0,1,0.1,1.5,0.1c0.5,0,1,0.1,1.5,0.2
								c0.5,0.1,1,0.2,1.4,0.3c0.5,0.1,1,0.2,1.5,0.4c1,0.3,1.9,0.7,2.9,1.2c0.9,0.4,1.8,1,2.7,1.7c0.2,0.1,0.4,0.3,0.6,0.5
								c0.2,0.2,0.4,0.3,0.6,0.5c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.3,0.3
								c0.7,0.8,1.3,1.8,1.8,3C41.5,10.2,41.8,11.4,42,12.6z"/>
							<path style="fill:#3B3B48;" d="M21.6,39.5c-4.1,7.3-18.9-4.6-19-1.2c0,0.6,0.1,1.2,0.1,1.7c0.1,0.2,0.1,0.5,0.2,0.7
								c0.1,0.2,0.2,0.4,0.3,0.6c0.2,0.4,0.5,0.7,0.8,0.9c0.1,0.1,0.2,0.2,0.5,0.3c0.1,0,0.2,0.1,0.5,0.1c0.1,0,0.3,0,0.5,0
								c0.4,0,0.6,0,0.9,0c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.3-0.2,0.4-0.3
								c0.1-0.1,0.3-0.2,0.4-0.3c0.1-0.1,0.3-0.2,0.4-0.4c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.2,0.3-0.3,0.3-0.5
								c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.2-0.4
								c0.1-0.2,0.2-0.5,0.3-0.7c0.1-0.2,0.2-0.5,0.3-0.7c0.2-0.5,0.3-1,0.5-1.5c0.2-0.5,0.3-1,0.5-1.6l0.4-1.6c0.1-0.3,0.1-0.5,0.2-0.8
								c0.1-0.3,0.2-0.5,0.2-0.8c0.1-0.1,0.1-0.3,0.1-0.4c0-0.1,0.1-0.2,0.1-0.4c0.1-0.1,0.1-0.3,0.1-0.4c0-0.1,0.1-0.3,0.1-0.4l0.2-0.8
								l0.2-0.8L14,24c0.1-0.6,0.2-1.1,0.3-1.7c0.1-0.6,0.2-1.1,0.4-1.7c0.1-0.6,0.3-1.1,0.4-1.7c0.2-0.6,0.4-1.2,0.6-1.7
								c0.2-0.6,0.4-1.2,0.6-1.7c0.2-0.6,0.5-1.2,0.8-1.7c0-0.1,0.1-0.2,0.2-0.4c0-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0.3-0.4
								c0.1-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.2,0.1-0.2l0.3-0.4c0.1-0.1,0.1-0.2,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.2l0.6-0.8
								c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.1,0.2-0.2,0.4-0.3c0.1-0.1,0.3-0.3,0.4-0.3c0.1-0.1,0.2-0.2,0.4-0.3c0.3-0.2,0.6-0.4,0.9-0.6
								C22,8.2,22.3,8,22.6,7.9c0.6-0.3,1.2-0.5,1.9-0.7C25.1,7.1,25.8,7,26.3,7c0.5,0,0.7,0.2,0.7,0.7c0,0.3-0.1,0.5-0.3,0.6
								c-0.2,0.2-0.5,0.3-0.7,0.5c-0.2,0.1-0.4,0.3-0.6,0.5c-0.4,0.3-0.8,0.7-1.1,1.1c-0.6,0.7-1.1,1.5-1.5,2.4c-0.4,0.8-0.7,1.8-0.9,2.8
								c-0.1,0.5-0.3,1-0.4,1.5c-0.1,0.5-0.2,1-0.3,1.6l-0.6,3.3c-0.1,0.6-0.2,1.1-0.3,1.7c-0.1,0.6-0.2,1.1-0.3,1.7L19.6,27
								c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.1,0.5-0.2,0.8c0,0.1-0.1,0.3-0.1,0.4c0,0.1-0.1,0.2-0.1,0.4l-0.2,0.9
								c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1-0.1,0.3-0.1,0.4c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3-0.1,0.4l-0.5,1.7c-0.1,0.3-0.2,0.6-0.3,0.9
								c-0.1,0.3-0.2,0.5-0.3,0.8l-0.6,1.7c-0.1,0.3-0.3,0.6-0.4,0.9c-0.1,0.3-0.2,0.6-0.4,0.8c-0.1,0.3-0.3,0.6-0.4,0.9
								c-0.1,0.3-0.3,0.5-0.4,0.8c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.3,0.4c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.3,0.4
								c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.3,0.4c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.4,0.4c-0.1,0.1-0.3,0.3-0.4,0.3
								c-0.1,0.1-0.2,0.2-0.4,0.4c-0.1,0.1-0.3,0.2-0.5,0.3c-0.1,0.1-0.3,0.2-0.5,0.3c-0.7,0.4-1.4,0.7-2.2,0.9c-0.2,0.1-0.4,0.1-0.6,0.1
								c-0.2,0-0.4,0.1-0.6,0.1H6.7c-0.1,0-0.2,0-0.3,0H6.2H6.1c-0.2,0-0.4-0.1-0.6-0.1c-0.2,0-0.4-0.1-0.6-0.1c-0.5-0.1-0.8-0.2-1.1-0.4
								c-0.3-0.2-0.6-0.4-1-0.6c-0.2-0.1-0.3-0.3-0.5-0.4c-0.1-0.1-0.2-0.3-0.4-0.4c-0.5-0.6-0.8-1.2-1-2c-0.2-0.8-0.2-1.5-0.2-2.1
								c0.1-0.7,0.2-1.3,0.5-2c0.1-0.3,0.3-0.6,0.4-0.9C1.8,37,2,36.7,2.2,36.5c2.4-2.3,14.8,8.6,18.8,2.6L21.6,39.5z"/>
							<path id="Path-280" style="fill:#3B3B48;" d="M10.5,38.6c0,0-0.4,0.3-0.5,0.5c-0.1,0.1-0.6,0.1-0.6,0.3c0,0.2,0.5,0.6,0.5,0.6l-0.1,1l4.8,0.6
								l0.6-0.3l0-1.6L10.5,38.6z"/>
							<path  style="fill:#3B3B48;" d="M35.3,43.3c0-0.2-0.1-0.3-0.1-0.5c0-0.2,0-0.3,0-0.5v-0.9c0-0.6,0.1-1.1,0.2-1.7
								c0-0.3,0.1-0.5,0.1-0.8c0-0.3,0.1-0.6,0.1-0.8c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.1-0.6,0.2-0.8c0.1-0.3,0.1-0.5,0.2-0.8
								c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.2,0.1-0.5,0.2-0.8l0.5-1.5l0.3-0.8l0.1-0.4c0-0.1,0.1-0.1,0.1-0.2
								c0-0.1,0-0.1,0.1-0.2c0.2-0.5,0.6-0.9,1-1.1c0.5-0.2,1-0.2,1.5,0c0.5,0.2,0.9,0.6,1.1,1c0.2,0.5,0.2,1,0,1.5c0,0,0,0,0,0.1h0
								l-0.1,0.3l-0.1,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7
								c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7
								c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c0,0.2-0.1,0.5-0.1,0.7
								c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3V43c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.2v0.1c0,0,0,0,0,0.1
								c0,0,0,0.1,0,0.1v0v0c0,0,0,0,0,0h0.1h0.1c0,0,0,0,0,0h0h0c0.1,0,0.1,0,0.1,0c0,0,0.1,0,0.2-0.1c0.1-0.1,0.3-0.2,0.5-0.3
								c0.2-0.1,0.4-0.3,0.5-0.4c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.3-0.3,0.7-0.7,1-1c0.2-0.2,0.3-0.4,0.5-0.5
								c0.2-0.2,0.3-0.4,0.5-0.6c0.1-0.2,0.3-0.5,0.6-0.8c0.3-0.3,0.5-0.6,0.6-0.8c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.3
								l0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0.1,0,0.3,0,0.4,0.1c0.2,0.2,0.2,0.3,0.1,0.6
								c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2L45,38.9c-0.1,0.3-0.2,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.5,0.9c-0.2,0.4-0.4,0.6-0.5,0.9
								c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.5,0.7c-0.1,0.2-0.3,0.4-0.5,0.6c-0.1,0.1-0.2,0.2-0.3,0.3
								c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.3,0.2-0.5,0.4-0.8,0.6c-0.1,0-0.1,0.1-0.2,0.1
								c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0.1-0.4,0.1-0.6,0.2h-0.1h0l-0.1,0h-0.1c-0.1,0-0.2,0-0.3,0c-0.2,0-0.5,0-0.7-0.1
								c-0.1,0-0.2-0.1-0.4-0.1c-0.1,0-0.2-0.1-0.3-0.2c-0.2-0.2-0.4-0.3-0.6-0.5c-0.2-0.2-0.3-0.4-0.4-0.6c-0.1-0.2-0.2-0.4-0.3-0.6
								c-0.1-0.2-0.1-0.4-0.1-0.5C35.3,43.6,35.3,43.5,35.3,43.3 M42.8,25.3c-0.7,0-1.3-0.2-1.8-0.7c-0.5-0.5-0.7-1.1-0.7-1.8
								c0-0.7,0.2-1.3,0.7-1.8c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.2,1.7,0.7c0.5,0.5,0.7,1.1,0.7,1.8c0,0.7-0.2,1.3-0.7,1.8
								C44.1,25.1,43.5,25.3,42.8,25.3"/>
							<path  style="fill:#3B3B48;" d="M62,37.7c0.1,0.1,0.1,0.3,0.1,0.4C62,38.3,62,38.4,62,38.5l-0.2,0.3c0,0.1-0.1,0.1-0.1,0.3
								c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.1,0.2c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.4-0.3,0.6
								c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.2,0.4-0.4,0.6c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3
								c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.3,0.3-0.4,0.5c-0.4,0.4-0.7,0.7-1.1,1c-0.1,0.1-0.2,0.2-0.3,0.3
								c-0.1,0.1-0.2,0.2-0.4,0.2c-0.1,0.1-0.3,0.1-0.4,0.2c-0.1,0.1-0.3,0.1-0.5,0.2c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0-0.3,0h-0.3
								c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1
								c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0-0.1-0.1-0.2-0.2c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.2-0.3-0.5-0.3-0.6c0-0.1-0.1-0.2-0.1-0.3
								c0-0.1,0-0.2-0.1-0.3c0-0.2-0.1-0.4-0.1-0.5c0-0.2,0-0.3,0-0.5c0-0.2,0-0.3,0-0.4c0-0.1,0-0.3,0-0.4c0-0.1,0-0.3,0.1-0.4
								c0-0.1,0-0.3,0.1-0.4c0-0.3,0.1-0.5,0.1-0.7c0.1-0.2,0.1-0.5,0.2-0.7l0.3-1.4c0.1-0.4,0.2-0.9,0.3-1.3c0.1-0.4,0.3-0.9,0.4-1.3
								c0.1-0.2,0.1-0.4,0.1-0.6c0.1-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.1-0.6c0.1-0.2,0.1-0.4,0.1-0.6c0-0.1,0-0.2,0.1-0.4
								c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.3,0.2-0.5,0.3
								c-0.2,0.1-0.3,0.2-0.5,0.4c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.2c-0.1,0.1-0.1,0.2-0.2,0.2
								c-0.3,0.3-0.5,0.7-0.8,1c-0.2,0.3-0.5,0.7-0.7,1c-0.1,0.2-0.2,0.4-0.4,0.6c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3
								c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.4-0.3,0.6c-0.2,0.4-0.4,0.8-0.6,1.2c-0.2,0.4-0.4,0.8-0.5,1.2c-0.1,0.2-0.2,0.4-0.3,0.6
								c-0.1,0.2-0.2,0.4-0.3,0.6c0,0.1-0.1,0.2-0.1,0.3c0,0.1-0.1,0.2-0.1,0.3c0,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2-0.1,0.3c0,0,0,0,0,0
								l-0.1,0.3c-0.1,0.5-0.4,1-0.8,1.3c-0.4,0.3-0.9,0.4-1.5,0.3c-0.5-0.1-1-0.4-1.3-0.8c-0.3-0.5-0.4-1-0.3-1.5c0-0.1,0-0.1,0-0.2
								l3.7-13.5c0.1-0.4,0.3-0.6,0.6-0.8c0.3-0.2,0.7-0.2,1-0.1c0.3,0.1,0.6,0.3,0.8,0.6c0.2,0.3,0.3,0.6,0.2,0.9l-1.5,8.1
								c0.1-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.6c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3
								c0.1-0.1,0.1-0.2,0.1-0.3c0.2-0.4,0.4-0.8,0.6-1.2c0.2-0.4,0.4-0.8,0.6-1.2c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.2-0.3l0.3-0.6
								c0.1-0.2,0.3-0.4,0.4-0.6c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.3
								c0.1-0.1,0.2-0.2,0.3-0.3c0.2-0.2,0.4-0.4,0.7-0.6c0.2-0.2,0.5-0.4,0.8-0.5c0.1-0.1,0.3-0.1,0.4-0.2c0.2-0.1,0.3-0.1,0.5-0.2
								c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2,0,0.3,0h0.1h0.1h0.1h0.1H56h0.1c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0,0.3,0
								c0.1,0,0.2,0,0.3,0.1c0.2,0.1,0.4,0.1,0.6,0.3c0.1,0.1,0.3,0.2,0.5,0.4c0.1,0.1,0.2,0.2,0.2,0.2c0.1,0.1,0.1,0.2,0.2,0.2
								c0.1,0.1,0.1,0.2,0.1,0.3c0.1,0.1,0.1,0.2,0.1,0.3c0.1,0.2,0.2,0.3,0.2,0.5c0,0.1,0.1,0.3,0.1,0.4c0.1,0.3,0.1,0.5,0.1,0.7
								c0,0.2,0,0.4,0,0.6c0,0.3,0,0.6-0.1,0.9c0,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3-0.1,0.4c0,0.1-0.1,0.3-0.1,0.4c0,0.1-0.1,0.2-0.1,0.4
								c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.2,0.4-0.3,0.6C58,36.6,58,36.8,57.9,37c-0.1,0.2-0.2,0.4-0.3,0.6c-0.2,0.4-0.4,0.8-0.6,1.2
								c-0.2,0.4-0.3,0.8-0.5,1.2L56,41.3c-0.1,0.4-0.3,0.7-0.4,1.2c-0.1,0.3-0.2,0.6-0.2,0.7c0,0.1,0.1,0.2,0.2,0.2c0.1,0,0.3-0.1,0.4-0.2
								c0.2-0.1,0.4-0.2,0.6-0.3c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.1-0.1,0.2-0.2l0.5-0.4c0.3-0.3,0.6-0.6,0.9-0.9
								c0.3-0.3,0.6-0.6,0.9-0.9c0.1-0.2,0.3-0.3,0.4-0.5c0.1-0.2,0.3-0.3,0.4-0.5c0.1-0.1,0.2-0.2,0.4-0.5c0.2-0.3,0.3-0.4,0.4-0.5
								l0.2-0.3l0.2-0.3h0C61.6,37.6,61.8,37.6,62,37.7"/>
							<path  style="fill:#3B3B48;" d="M78.8,24.8c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2-0.1,0.3
								c-0.1,0.1-0.2,0.1-0.3,0.1l-9.9,1c0,0,0,0.1-0.1,0.1c-0.1,0.3-0.2,0.6-0.4,0.9c-0.1,0.3-0.2,0.6-0.4,0.9c-0.3,0.6-0.5,1.2-0.8,1.9
								c-0.3,0.6-0.5,1.2-0.8,1.8c-0.1,0.3-0.3,0.6-0.4,0.9c-0.1,0.3-0.3,0.6-0.4,0.9c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.2-0.2,0.3-0.3,0.5
								L65,35.5l-0.1,0.2l-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0c0,0.1,0,0.2,0,0.2v0.2c0,0.3,0,0.6,0,0.9v0.9c0,0.6,0,1.2,0.1,1.8
								c0.1,0.6,0.1,1.2,0.3,1.7c0.1,0.5,0.3,0.9,0.6,1.3c0.1,0.2,0.3,0.3,0.4,0.4c0.1,0.1,0.3,0.2,0.4,0.2c0,0,0.1,0,0.1,0
								c0.1,0,0.1,0,0.1,0h0.3c0.2,0,0.4-0.1,0.6-0.2c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.3-0.3
								c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.3,0.3-0.4
								c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.1,0.1-0.3,0.2-0.4c0.1-0.2,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0.2-0.4l0.4-0.8c0-0.1,0.1-0.1,0.1-0.2
								c0-0.1,0.1-0.2,0.1-0.2l0.1-0.2l0-0.1l0.1-0.1v0c0.1-0.2,0.2-0.3,0.3-0.3c0.1-0.1,0.3-0.1,0.4,0c0.1,0.1,0.2,0.2,0.3,0.3
								c0.1,0.1,0.1,0.2,0.1,0.4l0,0.1l0,0.1c0,0.1,0,0.1-0.1,0.3c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.1-0.1,0.2c0,0.2-0.1,0.3-0.1,0.5
								c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.2-0.1,0.3-0.2,0.5l-0.4,0.9L70.9,43c-0.1,0.2-0.2,0.3-0.3,0.5
								c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.2-0.2,0.3-0.4,0.4c-0.1,0.1-0.2,0.3-0.4,0.4c-0.1,0.1-0.3,0.3-0.4,0.4c-0.1,0.1-0.3,0.3-0.5,0.4
								c-0.4,0.2-0.8,0.4-1.2,0.5c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.4,0
								c-0.1,0-0.2,0-0.3-0.1c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.4-0.2-0.6-0.4c-0.2-0.2-0.4-0.3-0.5-0.5
								c-0.3-0.3-0.6-0.7-0.8-1c-0.2-0.3-0.4-0.7-0.5-1.1c0-0.1-0.1-0.2-0.1-0.3c0-0.1,0-0.2-0.1-0.3c-0.1-0.2-0.1-0.3-0.2-0.5
								c-0.1-0.4-0.2-0.7-0.3-1.1c-0.1-0.7-0.2-1.4-0.3-2.1c-0.1-0.7-0.1-1.4-0.1-2.1c0-0.7,0-1.4,0.1-2c0.1-0.7,0.1-1.4,0.2-2
								c0.2-1.3,0.4-2.7,0.7-4c0.1-0.2,0.1-0.5,0.2-0.7c0.1-0.2,0.1-0.5,0.2-0.7L52,27.2c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.6-0.4-1
								c0-0.4,0.1-0.7,0.4-1c0.3-0.3,0.6-0.5,1-0.5H52l11.2,0.3c0-0.1,0-0.1,0.1-0.2c0-0.1,0-0.1,0.1-0.2c0.2-0.7,0.4-1.3,0.7-1.9
								c0.3-0.6,0.5-1.3,0.8-1.9c0.1-0.3,0.3-0.6,0.5-0.9c0.2-0.3,0.3-0.6,0.5-0.9c0.1-0.2,0.2-0.3,0.3-0.4c0.1-0.2,0.2-0.3,0.3-0.5
								c0.1-0.2,0.2-0.3,0.3-0.4c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.3-0.3,0.4-0.4c0.1-0.1,0.3-0.3,0.5-0.4c0.1-0.1,0.2-0.1,0.3-0.2
								c0.1-0.1,0.2-0.1,0.3-0.2c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.3,0,0.4,0h0.1h0.1h0
								c0,0,0,0,0,0h0c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0.1,0.4,0.1c0.1,0,0.2,0.1,0.2,0.1c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.2,0.3,0.4
								c0.1,0.2,0.2,0.5,0.2,0.7c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.2-0.1,0.4-0.1,0.5
								c0,0.2,0,0.3-0.1,0.5c0,0.2-0.1,0.3-0.1,0.5c0,0.2-0.1,0.3-0.1,0.5c0,0.1,0,0.2-0.1,0.2c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.2-0.1,0.3
								c0,0.1,0,0.1-0.1,0.2c-0.1,0.3-0.2,0.6-0.3,0.9c-0.1,0.3-0.2,0.6-0.3,0.9L69.9,24l-0.2,0.5l-0.2,0.5L78.8,24.8 M67.7,21.8
								c-0.2,0.5-0.4,1-0.5,1.5c-0.1,0.5-0.3,1-0.4,1.6l1.6,0c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0-0.1,0.1-0.2c0.5-1.2,1-2.4,1.4-3.6
								c0-0.1,0.1-0.2,0.1-0.2c0-0.1,0-0.2,0.1-0.2c0-0.1,0-0.2,0.1-0.2c0-0.1,0-0.2,0.1-0.2c0-0.2,0.1-0.3,0.1-0.5c0-0.2,0.1-0.3,0.1-0.5
								c0.1-0.3,0.1-0.6,0.1-0.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2-0.1-0.4c0-0.1-0.1-0.2-0.1-0.2h-0.1v0l0,0h0h0v0h0
								c-0.1,0-0.1,0.1-0.2,0.1c-0.2,0.1-0.3,0.3-0.4,0.5c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c-0.1,0.1-0.1,0.2-0.2,0.3
								c-0.1,0.2-0.2,0.5-0.4,0.8c-0.1,0.1-0.1,0.3-0.2,0.4l-0.2,0.4c-0.1,0.3-0.2,0.6-0.3,0.8C67.9,21.2,67.8,21.5,67.7,21.8 M66.7,27.9
								c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.3-0.4,0.4-0.6l-1.2,0c-0.1,0.4-0.2,0.8-0.3,1.2c-0.1,0.4-0.2,0.8-0.3,1.1c0,0.1-0.1,0.3-0.1,0.4
								c0,0.1,0,0.2-0.1,0.4c0.2-0.3,0.4-0.6,0.6-0.9C66.4,28.5,66.6,28.2,66.7,27.9"/>
							<path style="fill:#3B3B48;" d="M71.4,43c0-0.2-0.1-0.3-0.1-0.5c0-0.2,0-0.3,0-0.5v-0.9c0-0.6,0.1-1.1,0.2-1.7
								c0-0.3,0.1-0.5,0.1-0.8c0.1-0.3,0.1-0.6,0.1-0.8c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.1-0.6,0.2-0.8c0.1-0.3,0.1-0.5,0.2-0.8
								c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.1-0.5,0.2-0.8c0.1-0.2,0.1-0.5,0.2-0.8l0.5-1.5l0.3-0.8l0.1-0.4c0-0.1,0.1-0.1,0.1-0.2
								c0-0.1,0-0.1,0.1-0.2c0.2-0.5,0.6-0.9,1-1.1c0.5-0.2,1-0.2,1.5,0c0.5,0.2,0.9,0.6,1.1,1c0.2,0.5,0.2,1,0,1.5c0,0,0,0,0,0.1h0
								L77.5,32l-0.1,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7
								c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.5-0.3,0.7
								c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c-0.1,0.2-0.1,0.5-0.2,0.7c0,0.2-0.1,0.5-0.1,0.7
								c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1
								c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1v0v0c0,0,0,0,0,0h0.1h0.1c0,0,0,0,0,0c0,0,0,0,0,0h0c0.1,0,0.1,0,0.1,0c0,0,0.1,0,0.2-0.1
								c0.1-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.4-0.3,0.5-0.4c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.3-0.3,0.7-0.7,1-1
								c0.2-0.2,0.3-0.4,0.5-0.5c0.2-0.2,0.3-0.4,0.5-0.6c0.1-0.2,0.3-0.5,0.6-0.8c0.3-0.3,0.5-0.6,0.6-0.8c0.1-0.1,0.2-0.2,0.2-0.3
								c0.1-0.1,0.2-0.2,0.3-0.3l0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0.1,0,0.3,0,0.4,0.1
								c0.2,0.2,0.2,0.3,0.1,0.6c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2l-0.2,0.3c-0.1,0.3-0.2,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.5,0.9
								c-0.2,0.4-0.4,0.6-0.5,0.9c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.3,0.5-0.5,0.7c-0.1,0.2-0.3,0.4-0.5,0.6
								c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.3,0.2-0.5,0.4-0.8,0.6
								c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0.1-0.4,0.1-0.6,0.2h-0.1h0l-0.1,0h-0.1c-0.1,0-0.2,0-0.3,0
								c-0.2,0-0.5,0-0.7-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.1,0-0.2-0.1-0.3-0.2c-0.2-0.2-0.4-0.3-0.6-0.5c-0.2-0.2-0.3-0.4-0.4-0.6
								c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.1-0.4-0.2-0.5C71.5,43.3,71.5,43.1,71.4,43"/>
							<path style="fill:#3B3B48;" d="M78.6,25.5c-0.7,0-1.3-0.2-1.8-0.7c-0.5-0.5-0.7-1.1-0.7-1.8c0-0.7,0.2-1.3,0.7-1.8
								c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.2,1.7,0.7c0.5,0.5,0.7,1.1,0.7,1.8c0,0.7-0.2,1.3-0.7,1.8C79.9,25.3,79.3,25.5,78.6,25.5"/>
							<path  style="fill:#3B3B48;" d="M80.4,42.3c-0.1-0.3-0.2-0.5-0.2-0.8c0-0.3-0.1-0.6-0.1-0.8c0-0.5,0-1.1,0.1-1.6
								c0-0.1,0-0.3,0.1-0.4c0-0.1,0-0.3,0.1-0.4c0-0.1,0.1-0.3,0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.2,0.1-0.5,0.2-0.7
								c0.1-0.2,0.2-0.5,0.3-0.7c0.4-0.9,0.8-1.8,1.3-2.5c0.1-0.2,0.3-0.4,0.4-0.6c0.1-0.2,0.3-0.4,0.4-0.6c0.1-0.2,0.3-0.4,0.4-0.5
								c0.2-0.2,0.3-0.3,0.5-0.5c0.2-0.2,0.4-0.3,0.6-0.5c0.2-0.1,0.4-0.3,0.6-0.4c0.4-0.3,0.8-0.6,1.3-0.8c0.5-0.2,1-0.4,1.5-0.5h0.1h0
								l0,0h0h0h0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0,0.5,0.1c0.2,0,0.3,0,0.5,0.1
								c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.3,0.2,0.4,0.3
								c0.1,0.1,0.3,0.2,0.4,0.4c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.3,0.3,0.5c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0.2,0.1,0.3,0.2,0.5
								c0.1,0.3,0.2,0.6,0.2,0.9c0,0.3,0.1,0.6,0.1,0.9c0,0.6-0.2,1.2-0.4,1.8c-0.2,0.6-0.5,1.2-1,1.7c-0.2,0.2-0.5,0.5-0.8,0.7
								c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0.1c0,0,0,0-0.1,0c0,0,0,0-0.1,0L90,39h0l0,0c-0.5,0.2-1,0.2-1.5-0.1
								c-0.5-0.2-0.8-0.6-1-1.1c-0.1-0.5-0.1-0.9,0-1.4c0.2-0.5,0.5-0.8,0.9-1h0l0,0l0,0c0,0,0.1-0.1,0.1-0.1l0.2-0.2
								c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.2-0.5,0.2-0.7c0.1-0.2,0.1-0.5,0.1-0.7c0-0.2,0-0.4-0.1-0.6c-0.1-0.2-0.1-0.3-0.3-0.5
								c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1,0-0.1,0h0h0l0,0h-0.1c-0.3-0.1-0.7-0.1-1-0.1
								c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1
								c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.1,0.1-0.2,0.2c-0.6,0.5-1,1.2-1.3,1.9c-0.2,0.4-0.3,0.8-0.4,1.1
								c-0.1,0.4-0.2,0.8-0.2,1.2c-0.1,0.4-0.1,0.8-0.1,1.2c0,0.4,0,0.8,0.1,1.1c0.1,0.4,0.1,0.7,0.2,1c0.1,0.3,0.2,0.6,0.4,0.9
								c0.1,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.1,0.2,0.2,0.3c0.2,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.6,0.3c0.1,0,0.2,0.1,0.4,0.1
								c0.1,0,0.3,0,0.4,0.1h0.2l0,0h0h0.1h0h0.1h0.1h0.5h0.5c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.4-0.1,0.7-0.1,1.1-0.2
								c0.4-0.1,0.7-0.2,1.1-0.4c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.1,0.3-0.2
								c0.2-0.1,0.4-0.2,0.5-0.3c0.2-0.1,0.4-0.2,0.5-0.3c0.4-0.2,0.7-0.4,1-0.7c0.4-0.2,0.7-0.5,1-0.8c0.1-0.1,0.2-0.2,0.4-0.3
								c0.2-0.2,0.3-0.3,0.4-0.4c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.2
								l0.2-0.2l0.1-0.1l0.1-0.1h0c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0.1,0.3,0.1,0.5l-0.1,0.1l-0.1,0.1
								c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.3,0.3-0.4,0.5
								c-0.1,0.1-0.2,0.2-0.3,0.5c-0.1,0.2-0.3,0.4-0.3,0.5c-0.6,0.7-1.2,1.4-1.8,2c-0.2,0.2-0.3,0.3-0.5,0.5c-0.2,0.2-0.3,0.3-0.5,0.5
								c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.1-0.3,0.2c0,0-0.1,0.1-0.1,0.1
								c-0.1,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.1-0.3,0.2
								c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.1-0.4,0.2-0.7,0.3c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.1
								c-0.1,0-0.2,0.1-0.4,0.1c-0.1,0-0.3,0.1-0.4,0.1c-0.1,0-0.3,0-0.4,0.1c-0.1,0-0.1,0-0.1,0h-0.1h-0.1h0h0h0l-0.1,0H86
								c-0.3,0-0.6,0-0.9-0.1c-0.3,0-0.6-0.1-0.9-0.2c-0.3-0.1-0.6-0.2-0.9-0.3c-0.3-0.1-0.6-0.3-0.8-0.5c-0.5-0.4-1-0.9-1.3-1.4
								c-0.2-0.3-0.3-0.5-0.4-0.8S80.5,42.6,80.4,42.3"/>
						</svg>

					</div>
				</div>
				
			</section>
			

			<section id="section-contact">

				<a id="href-nav-contact"></a>

				<div class="section-contact_background"></div>

				<h4 class="f-mpl_1">LET'S TALK</h4>

				<h5 class="f-mpl_3">WANT TO WORK WITH US?</h5>

				<strong class="f-sf_r">We love meeting new people.<br>Let us know how we can help you.</strong>
				
				<a class="btn-style delay f-mpl_m" href="HireMe/">
					<span>HIRE ME</span>
				</a>
				
			</section>

		</div>


		<!-- SCRIPT -->
	    
	    <script type="text/javascript" src="js/index.js"></script>

	    <!-- END SCRIPT -->
	    
	</body>
	
</html>