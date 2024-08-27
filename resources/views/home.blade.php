@extends('layouts.app')

@section('content')

 <!-- Hero Section with Carousel -->
 <div class="hero-section relative overflow-hidden">
    <div id="heroCarousel" class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner/hero-1.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner/hero-6.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 2">
            </div>
            {{-- <div class="carousel-item">
                <img src="{{ asset('images/banner/hero-3.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 3">
            </div> --}}
            <div class="carousel-item">
                <img src="{{ asset('images/banner/hero-8.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 4">
            </div>
                   
        </div>
        
        <div class="carousel-card">
            <div class="carousel-card-content">
                <h1 id="cardTitle">Building Liberia's Future</h1>
                <p id="cardText">Committed to constructing a stronger, more resilient Liberia through innovative infrastructure solutions.</p>
            </div>
        </div>
        
        
        <div class="carousel-indicators">
            <span class="indicator active"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
        
        <div class="carousel-controls">
            <button id="prevBtn" class="carousel-control-prev"></button>
            <button id="nextBtn" class="carousel-control-next"></button>
        </div>
    </div>
</div>

<div class="theme-page">
	<div class="clearfix">
		
		<div class="row full-width gray page-padding-top-section">
			<div class="row">
				<h2 class="box-header">Overview</h2>
				<p class="description align-center">SSF Entrepreneur Inc. is an Enterprise that was established in 2004 in accordance with a corporation pursuant to section 2. Of the Liberian Corporation Act of 1976 amended 1977. SSF has during its fifteen-year history developed into Liberia's leading construction company.The company has grown organically by re-investing its earnings to fund growth.
                    One of SSF's key focus is the development of young talent</p>

					

					
				<ul class="services-list clearfix page-margin-top">
					<li>
						<a href="indexe3d0.html?page=service_interior_renovation" title="Interior Renovation">
							<img src="images/samples/480x320/image_07.jpg" alt="">
						</a>
						<h4 class="box-header"><a href="indexe3d0.html?page=service_interior_renovation" title="Road Construction">ROAD CONSTRUCTION</a></h4>
						<p>Wec construct the best road in the whole of liberia as a rate compared to none in the industry.</p>
					</li>
					<li>
						<a href="index2e91.html?page=service_design_build" title="Design and Build">
							<img src="images/samples/480x320/image_05.jpeg" alt="">
						</a>
						<h4 class="box-header"><a href="#" title="building construction">BUILDING CONSTRUCTION</a></h4>
						<p>From initial design and project specification to archieving a high end finish.</p>
					</li>
					<li>
						<a href="#" title="civil engineering">
							<img src="images/samples/480x320/image_04.jpeg" alt="">
						</a>
						<h4 class="box-header"><a href="#" title="civil engineering">CIVIL ENGINEERING</a></h4>
						<p>We offer quality engineering services with precision and timeliness.</p>
					</li>
				</ul>
				<div class="align-center margin-top-67 padding-bottom-87">
					<a class="more" href="index94f6.html?page=services" title="VIEW ALL SERVICES">VIEW ALL SERVICES</a>
				</div>
			</div>
		</div>
		<div class="row full-width page-margin-top-section">
			<div class="row">
				<h2 class="box-header">RECENT PROJECTS</h2>
				<p class="description align-center">Here are a few of many projects we have completed for our customers. We provide a professional service<br>which includes consultation, free estimate, design, supply of materials and installation.</p>
			</div>	
			<ul class="projects-list clearfix page-margin-top">
				<li>
					<a href="#" title="Design and Build">
						<img src="images/samples/480x320/image_07.jpg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Road Construction</p>
								<a class="more simple" href="index6487.html?page=project_design_build" title="VIEW PROJECT">VIEW PROJECT</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="index3113.html?page=project_garden_renovation" title="Garden Renovation">
						<img src="images/samples/480x320/image_04.jpeg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Building Construction</p>
								<a class="more simple" href="#" title="VIEW PROJECT">VIEW PROJECT</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="index5245.html?page=project_interior_renovation" title="Interior Renovation">
						<img src="images/samples/480x320/image_05.jpeg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Civil Engineering</p>
								<a class="more simple" href="#" title="VIEW PROJECT">VIEW PROJECT</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="index5245.html?page=project_interior_renovation" title="Interior Renovation">
						<img src="images/samples/480x320/image_04.jpeg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Civil Engineering</p>
								<a class="more simple" href="#" title="VIEW PROJECT">VIEW PROJECT</a>
							</div>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
		<div class="row gray full-width padding-top-54 padding-bottom-61 align-center">
			<h3><span class="button-label">EXPLORE OUR PROJECTS</span> <a class="more" href="index56e1.html?page=projects" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a></h3>
		</div>
		
		<div class="row page-margin-top-section">
			<div class="row">
				<h2 class="box-header">ABOUT US</h2>
				<p class="description align-center">We deliver professional road construction and civil engineering services with a strong commitment to customer satisfaction.<br>Our projects are executed by highly trained professionals, ensuring the highest standards of quality and expertise in every aspect.</p>
			</div>
			<div class="row page-margin-top">
				<div class="column column-1-2 align-center re-preload">
					<div class="image-wrapper">
						<img src="{{asset('images/banner/SSF-Liberia-Logo.png')}}" alt="" class="radius">
					</div>
				</div>
				<div class="column column-1-2">
					<ul class="features-list">
						<li class="sl-small-team margin-top-40">
							<h4>OVER 15 YEARS EXPERIENCE</h4>
							<p>We combine quality workmanship, superior knowledge and low prices to provide you with service unmatched by our competitors.</p>
						</li>
						<li class="sl-small-driller">
							<h4>BEST MATERIALS</h4>
							<p>We have the experience, personel and resources to make the project run smoothly. We can ensure a job is done on time.</p>
						</li>
						<li class="sl-small-ruler">
							<h4>PROFESSIONAL STANDARDS</h4>
							<p>Work with us involve a carefully planned series of steps, centered around a schedule we stick to and daily communication.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row gray full-width page-margin-top-section page-padding-top-section padding-bottom-66">
			<div class="row">
				<div class="tabs no-scroll clearfix">
					<ul class="tabs-navigation clearfix">
						<li>
							<a href="#" title="We Offer" class="sl-small-bubble-check">
								We Offer
							</a>
							<span></span>
						</li>
						<li>
							<a href="#we-guarantee" title="We Guarantee" class="sl-small-shield">
								We Guarantee
							</a>
							<span></span>
						</li>
						<li>
							<a href="#we-provide" title="We Provide" class="sl-small-globe">
								We Provide
							</a>
							<span></span>
						</li>
					</ul>
					<div id="we-offer">
						<h4 class="box-header">OUR OFFER</h4>
						<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
					</div>
					<div id="we-guarantee">
						<h4 class="box-header">OUR WARRANTY COVERS</h4>
						<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
					
					</div>
					<div id="we-provide">
						<h4 class="box-header">OUR SERVICES</h4>
						<p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row page-margin-top-section padding-bottom-66">
			<h2 class="box-header">WHY CHOOSE SSF</h2>
			<p class="description align-center">Founded by Kevin Smith back in 2000, Renovate has established itself as one of the greatest and prestigious<br>providers of construction focused interior renovation services and building.</p>
			<div class="row page-margin-top">
				<div class="column column-1-3">
					<ul class="features-list big">
						<li class="sl-large-person">
							<div class="ornament"></div>
							<h4 class="box-header page-margin-top">OVER 15 YEARS EXPERIENCE</h4>
							<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list big">
						<li class="sl-large-eco">
							<div class="ornament"></div>
							<h4 class="box-header page-margin-top">BEST MATERIALS</h4>
							<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list big">
						<li class="sl-large-hammer">
							<div class="ornament"></div>
							<h4 class="box-header page-margin-top">PROFESSIONAL STANDARDS</h4>
							<p>Morbi nulla tortor, dignissim est node cursus euismod est arcu. Nomad at vehicula novum justo magna.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-3">	
			<div class="row testimonials-container">
				<a href="#" class="slider-control left template-arrow-left-1"></a>
				<ul class="testimonials-list">
					<li class="sl-small-conversation">
						<div class="ornament"></div>
						<p>"We would like to thank SSF Construction for an outstanding effort on this
						recently completed project located in the Monrovia. The project involved a very
						aggressive schedule and it was completed on time. We would certainly like to
						use their professional services again."</p>
						<div class="author">C.E.O</div>
						<div class="author-details">Minister of Roads</div>
					</li>
					<li class="sl-small-conversation">
						<div class="ornament"></div>
						<p>"We would like to thank SSF Construction for an outstanding effort on this
						recently completed project located in the Monrovia. The project involved a very
						aggressive schedule and it was completed on time. We would certainly like to
						use their professional services again."</p>
						<div class="author">C.E.O</div>
						<div class="author-details">Minister of Roads</div>
					</li>
					<li class="sl-small-conversation">
						<div class="ornament"></div>
						<p>"We would like to thank SSF Construction for an outstanding effort on this
						recently completed project located in the Monrovia. The project involved a very
						aggressive schedule and it was completed on time. We would certainly like to
						use their professional services again."</p>
						<div class="author">C.E.O</div>
						<div class="author-details">Minister of Roads</div>
					</li>
				</ul>
				<a href="#" class="slider-control right template-arrow-left-1"></a>
			</div>
		</div>
		<div class="row gray full-width page-padding-top-section padding-bottom-66">
			<div class="row">
				<h2 class="box-header">OUR PARTNERS</h2>
				<div class="our-clients-list-container page-margin-top">
					<ul class="our-clients-list">
						<li>
							<img src="{{ asset('images/logos/logo_01.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_02.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_03.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_04.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_05.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_06.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_06.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_05.png') }}" alt="">
						</li>
						<li>
							<img src="{{ asset('images/logos/logo_04.png') }}" alt="">
						</li>
						
					</ul>
					<div class="re-carousel-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</div>	





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('heroCarousel');
        const items = carousel.querySelectorAll('.carousel-item');
        const indicators = carousel.querySelectorAll('.indicator');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const card = document.querySelector('.carousel-card');
        const cardTitle = document.getElementById('cardTitle');
        const cardText = document.getElementById('cardText');
        let currentIndex = 0;
    
        const cardContent = [
            {
                title: "Building Liberia's Future",
                text: "Committed to constructing a stronger, more resilient Liberia through innovative infrastructure solutions."
            },
            {
                title: "Quality Construction Since 2004",
                text: "Over 15 years of experience delivering excellence in every project across Liberia."
            },
            {
                title: "Empowering Communities",
                text: "Our projects go beyond construction, uplifting local communities through job creation and skills development."
            },
            {
                title: "Innovative Infrastructure Solutions",
                text: "Leveraging cutting-edge technology and best practices to create sustainable infrastructure for Liberia's growth."
            },
            {
                title: "Committed to Excellence",
                text: "Our unwavering commitment to quality, safety, and client satisfaction sets us apart in the construction industry."
            }
        ];
    
        function showSlide(index) {
            items[currentIndex].classList.remove('active');
            indicators[currentIndex].classList.remove('active');
            items[index].classList.add('active');
            indicators[index].classList.add('active');
    
            // Transition out
            card.classList.add('transitioning-out');
            cardTitle.classList.add('transitioning');
            cardText.classList.add('transitioning');
    
            setTimeout(() => {
                // Update content
                cardTitle.textContent = cardContent[index].title;
                cardText.textContent = cardContent[index].text;
    
                // Prepare for transition in
                card.classList.remove('transitioning-out');
                card.classList.add('transitioning-in');
    
                // Force a reflow to ensure the transitioning-in class is applied
                void card.offsetWidth;
    
                // Transition in
                card.classList.remove('transitioning-in');
                cardTitle.classList.remove('transitioning');
                cardText.classList.remove('transitioning');
            }, 500);
    
            currentIndex = index;
            console.log('Showing slide', currentIndex + 1);
        }
    
        function nextSlide() {
            let nextIndex = (currentIndex + 1) % items.length;
            showSlide(nextIndex);
        }
    
        function prevSlide() {
            let prevIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(prevIndex);
        }
    
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
    
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });
    
        // Auto-advance every 7 seconds (adjusted to account for transition time)
        setInterval(nextSlide, 7000);
    
        // Log initial state
        console.log('Number of slides:', items.length);
        items.forEach((item, index) => {
            console.log('Slide', index + 1, 'src:', item.querySelector('img').src);
        });
    });
    </script>
@endsection