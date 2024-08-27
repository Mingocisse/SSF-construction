<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSF COnstruction</title>

    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">

    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/reset.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/superfish.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/prettyPhoto.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/jquery.qtip.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/animations.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('style/odometer-theme-default.css')}}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/streamline-small/styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/streamline-large/styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/template/styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/social/styles.css')}}">
        <link rel="shortcut icon" href="#">
</head>
    
    <body class="">
		<div class="site-container">
		<!--<div class="site-container boxed">-->
			<div class="header-top-bar-container clearfix">
				<div class="header-top-bar">
					<ul class="contact-details clearfix">
						<li class="template-phone">
							<a href="tel:+231123456789 ">+231 123 456 789</a>
						</li>
						<li class="template-mail">
							<a href="#"><span class="__cf_email__" >info@ssfconstruction.com</span></a>
						</li>
						<li class="template-clock">
							Mon - Fri: 08.00 - 17.02
						</li>
					</ul>
					
					{{-- <ul class="social-icons">
						<li>
							<a target="_blank" href="#" class="social-facebook" title="facebook"></a>
						</li>
						<li>
							<a target="_blank" href="#" class="social-twitter" title="twitter"></a>
						</li>
					
					</ul> --}}
				</div>
				<a href="#" class="header-toggle template-arrow-up"></a>
			</div>
	<div class="header-container">
			<!--<div class="header-container sticky">-->
				<div class="vertical-align-table column-1-1">
					<div class="header clearfix">
						<div class="logo vertical-align-cell">
					<a href="/"><img src="{{asset('images/banner/SSF-Liberia-Logo.png')}}" width="90px"; height="auto"></a>
							<h1><a href="/" title="SSF">S.S.F Construction</a></h1>
						</div>
						<a href="#" class="mobile-menu-switch vertical-align-cell">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</a>
						<div class="menu-container clearfix vertical-align-cell">
							<nav>
	<ul class="sf-menu">
		<li class='selected'>
			<a href="{{route('home')}}" title="Home">
				HOME
			</a>
			
		</li>
		<li >
			<a href="{{route('project')}}" title="project">
				PROJECTS
			</a>
			
		</li>
		<li >
			<a href="{{route('equipment')}}" title="equipment">
				EQUIPMENTS & PLANTS
			</a>
			
		</li>
		<li>
			<a href="{{route('team')}}" title="Our-Team">
				OUR TEAM
			</a>
		</li>
		<li>
			<a href="{{route('about')}}" title="about">
				ABOUT US
			</a>
		</li>
		
		<li class="left-flyout">
			<a href="{{route('contact')}}" title="Contact">
				CONTACT
			</a>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li class='selected'>
				<a href="/" title="Home">
					HOME
				</a>
				<a href="#" class="template-arrow-menu"></a>
			</li>
			<li >
				<a href="/project" title="Services">
					PROJECTS
				</a>
				<a href="#" class="template-arrow-menu"></a>
				
			</li>
			<li >
				<a href="/equipment" title="Projects">
					EQUIPMENTS & PLANTS
				</a>
				<a href="#" class="template-arrow-menu"></a>
				
			</li>
			<li class="">
				<a href="/team" title="Our Team">
					OUR TEAM
				</a>
			</li>
			<li>
				<a href="/about" title="Pages">
					ABOUT US
				</a>
				<a href="#" class="template-arrow-menu"></a>
				
			</li>
			
			
			<li>
				<a href="/contact" title="Contact">
					CONTACT
				</a>
				<a href="#" class="template-arrow-menu"></a>
				
			</li>
		</ul>
	</nav>
</div>
</div>
</div>
</div>
</div>

<main class="mt-1">
    @yield('content')
</main>
					
<div class="row yellow full-width padding-top-bottom-30">
				<div class="row">
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-phone">
								<p>Phone:<br>
                                    +231 123 456 789</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-location">
								<p>123 Construction Ave, 
                                     <br>
                                     Monrovia, Liberia</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-mail">
								<p>E-mail:<br>
								<a href="#"><span class="__cf_email__" >info@ssfconstruction.com</span></a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row gray full-width page-padding-top padding-bottom-50">
				<div class="row row-3-3">
					<div class="column column-1-4">
						<h6 class="box-header">About Us</h6>
						<h2 class="f-about">S.S.F Enterprenuer Inc.</h2>
						<p class="description t1">Building the future with quality and innovation</p>
						
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Our Services</h6>
						<ul class="list margin-top-20">
							<li class="template-bullet">Road Construction</li>
							<li class="template-bullet">Building Construction</li>
							<li class="template-bullet">Civil Engineering</li>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Quick Links</h6>
						<ul class="list margin-top-20">
							<li class="template-bullet"><a href="{{route('home')}}">HOME</a></li>
							<li class="template-bullet"><a href="{{route('project')}}">PROJECTS</a></li>
							<li class="template-bullet"><a href="{{route('equipment')}}">EQUIPMENT & PLANTS</a></li>
							<li class="template-bullet"><a href="{{route('team')}}">OUR TEAM</a></li>
							<li class="template-bullet"><a href="{{route('about')}}">ABOUT US</a></li>
							<li class="template-bullet"><a href="{{route('contact')}}">CONTACT</a></li>\
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">Categories</h6>
						<ul class="taxonomies margin-top-30">
							<li><a href="#" title="BUILD">ROAD</a></li>
							<li><a href="#" title="DESIGN">DESIGN</a></li>
							<li><a href="#" title="FLOORING">ENGINEERING</a></li>
							<li><a href="#" title="PAINTING">PIPING</a></li>
							<li><a href="#" title="PAVERS">PAVERS</a></li>
							<li><a href="#" title="PLUMBING">PLUMBING</a></li>
							<li><a href="#" title="RENOVATION">RENOVATION</a></li>
							<li><a href="#" title="REPAIRS">REPAIRS</a></li>
						</ul>
					</div>
					
					{{-- <div class="column column-1-4">
						<h6 class="box-header">Latest Posts</h6>
						<ul class="blog small margin-top-30">
							<li>
								<a href="indexb878.html?page=post" title="What a Difference a Few Months Make" class="post-image">
									<img src="images/samples/90x90/image_10.jpg" alt="">
								</a>
								<div class="post-content">
									<a href="indexb878.html?page=post" title="What a Difference a Few Months Make">What a Difference a Few Months Make</a>
									<ul class="post-details">
										<li class="date">April 25, 2015</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="indexb878.html?page=post" title="Kitchen and Living Room Renovation" class="post-image">
									<img src="images/samples/90x90/image_07.jpg" alt="">
								</a>
								<div class="post-content">
									<a href="indexb878.html?page=post" title="Kitchen and Living Room Renovation">Kitchen and Living Room Renovation</a>
									<ul class="post-details">
										<li class="date">April 17, 2015</li>
									</ul>
								</div>
							</li>
						</ul>
					</div> --}}
				</div>
			</div>
			<div class="row align-center padding-top-bottom-30">
				<span class="copyright"> <a href="#" >S.S.F ENTERPRENEUR INC.</a> &COPY; Copyright {{date('Y')}} </span>
			</div>
		</div>
		<a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
		<div class="background-overlay"></div>

    <!--- js -->
    {{-- <script data-cfasync="false" src="https://quanticalabs.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> --}}

    <!---Slider revolution -->
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="js/jquery.imagesloaded-packed.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style_selector/style_selector.css">
<script type="text/javascript" src="{{asset('style_selector/style_selector.js')}}"></script>
</div>
</body>
</html>