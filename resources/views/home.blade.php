@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Section with Carousel -->
    <div class="hero-section relative overflow-hidden">
        <div id="heroCarousel" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/hero-1.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hero-2.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hero-3.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hero-4.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hero-5.jpeg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero image 5">
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

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold mb-4">Overview</h2>
                <p class="mb-4">SSF Entrepreneur Inc. is an Enterprise that was established in 2004 in accordance with a corporation pursuant to section 2. Of the Liberian Corporation Act of 1976 amended 1977. SSF has during its fifteen-year history developed into Liberia's leading construction company.</p>
                <p class="mb-4">The company has grown organically by re-investing its earnings to fund the company's growth.</p>
                <p class="mb-4">One of SSF's key focus is the development of young talent.</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4">Regional Presence</h2>
                <p class="mb-4">Whilst our head office is based in Monrovia, Liberia, we have over the past few years completed projects/contracts in twelve of Liberia's fifteen counties.</p>
                <p class="mb-4">We currently have branch offices in:</p>
                <div class="grid grid-cols-2 gap-4">
                    <ul class="list-disc list-inside mb-4">
                        <li>Baomi</li>
                        <li>Grand Cape Mount</li>
                        <li>Grand Kru</li>
                    </ul>
                    <ul class="list-disc list-inside mb-4">
                        <li>Lofa</li>
                        <li>Margibi</li>
                        <li>Nimba</li>
                    </ul>
                </div>
                <p>SSF remains flexible having successfully completed projects in some of the most remote parts of Liberia. Many of our contracts have involved projects categorized as "deep rural".</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center">OUR OFFERING</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Road Construction</h3>
                    <p class="mb-4">The core of SSF's business remains Road Construction and more specifically Asphalt Pavement. Approximately 45% of our annual turnover is in Asphalt Pavement.</p>
                    <p class="mb-4">We have extensive experience in all areas of Road Construction such as:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Hot Mix Asphalt Pavement</li>
                        <li>Rural Roads</li>
                        <li>Creation of new access roads</li>
                        <li>Concrete Pavement</li>
                        <li>Drainages and Box Culverts</li>
                        <li>Bridges</li>
                        <li>Low Cost Seals</li>
                    </ul>
                    <p class="mb-4">As of January 2021, SSF has completed in excess of 1000 Km in various road construction sectors.</p>
                    <p class="mb-4">We estimate that SSF has delivered approximately 21% of all the roads developed/or constructed in Liberia since 2004.</p>
                    <p class="mb-4">The total value of projects undertaken and completed to date is in excess of 112 Million US$</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Building</h3>
                    <p class="mb-4">SSF has to date, completed General Building Projects valued in excess of 35 Million US$.</p>
                    <p class="mb-4">The projects range from:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Schools</li>
                        <li>Hospitals</li>
                        <li>Water Treatment Plants</li>
                        <li>Warehouses</li>
                        <li>New Buildings/Offices  Private Sector</li>
                    </ul>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Civil Engineering</h3>
                    <p class="mb-4">Township infrastructures forms an integral part of successful Road Construction Development and Construction.</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Drainage Systems</li>
                        <li>Water Lines (Piping)</li>
                        <li>Water Wells</li>
                        <li>Concrete Generator Foundations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">EMPOWERMENT</h2>
                    <p class="mb-4">Central to the way that SSF does business is the development and empowerment of our staff and associated suppliers and Subcontractors, consistent with our mantra of "TRULY EMPOWERED".</p>
                    <p class="mb-4">In terms of working with SMME's, SSF has a proven track record as recognized in a number of industry awards in the development of small and medium enterprises. The support offered to empower these businesses can take various forms:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Bridging finance</li>
                        <li>Loans</li>
                        <li>Technical Skills</li>
                        <li>Guarantee Facilities</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">CORPORATE SOCIAL INVESTMENT</h2>
                    <p class="mb-4">SSF has a stated objective to contribute to the development of the communities in which we operate.</p>
                    <p class="mb-4">Our contributions over the years have taken many forms such as:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>The building of Schools</li>
                        <li>Home repairs</li>
                        <li>Water Wells for Communities</li>
                        <li>Internship Programs</li>
                    </ul>
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