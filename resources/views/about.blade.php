@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- Banner Section -->
<div class=" banner-about relative bg-gray-900 h-64 md:h-96">
    <img src="{{ asset('images/hero-3.jpeg') }}" alt="About Us Banner" class="w-full h-full object-cover opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wider">ABOUT US</h1>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-3xl font-bold mb-4">Overview</h2>
            <p class="mb-4">SSF Construction Company is a Liberian-owned and operated construction firm that has been providing quality construction services to the Liberian market since 2004. Our company is committed to delivering projects that meet international standards, while also ensuring that our operations are environmentally friendly and socially responsible.</p>
            <p class="mb-4">Our team of experienced professionals has a proven track record of delivering projects on time, within budget, and to the required quality standards. We have a strong commitment to safety, quality, and customer satisfaction, and we strive to build long-term relationships with our clients.</p>
            <p class="mb-4">Our services include:</p>
            <ul class="list-disc list-inside mb-4">
                <li>Building Construction</li>
                <li>Road Construction</li>
                <li>Bridge Construction</li>
                <li>Water Supply and Sanitation</li>
                <li>Electrical and Mechanical Installations</li>
            </ul>
            <p class="mb-4">We have worked with a variety of clients, including government agencies, NGOs, and private companies. Our projects have ranged from small-scale renovations to large-scale infrastructure developments.</p>
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
    <div class="col-span-full bg-gray-100 p-8 rounded-lg shadow-md mt-8">
        <h2 class="text-3xl font-bold mb-4 text-center">Our Story</h2>
        <p class="mb-4 text-gray-700">
            Founded in 2004, SSF Construction Company has grown from a small local contractor to one of Liberia's leading construction firms. Our journey began with a vision to rebuild and modernize Liberia's infrastructure in the wake of civil unrest. Through dedication, innovation, and a commitment to excellence, we've transformed that vision into reality.
        </p>
        <p class="mb-4 text-gray-700">
            Over the years, we've tackled projects ranging from urban developments in Monrovia to critical infrastructure in the most remote parts of the country. Our success is built on the foundation of our skilled workforce, cutting-edge technology, and an unwavering commitment to quality and safety.
        </p>
        <p class="text-gray-700">
            Today, SSF stands as a symbol of Liberia's resilience and progress. We continue to push boundaries, empower communities, and shape the future of our nation through sustainable and innovative construction solutions.
        </p>
    </div>
    <div class="col-span-full mt-12">
        <h2 class="text-3xl font-bold mb-8 text-center">Our Leadership Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('images/hero-1.jpeg') }}" alt="CEO" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                <p class="text-gray-600 mb-2">Chief Executive Officer</p>
                <p class="text-sm text-center text-gray-500">With over 20 years of experience in construction, John leads SSF with vision and expertise.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('images/hero-1.jpeg') }}" alt="COO" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                <p class="text-gray-600 mb-2">Chief Operations Officer</p>
                <p class="text-sm text-center text-gray-500">Jane ensures smooth operations across all our projects, bringing efficiency and innovation to every site.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('images/hero-1.jpeg') }}" alt="Chief Engineer" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Robert Johnson</h3>
                <p class="text-gray-600 mb-2">Chief Engineer</p>
                <p class="text-sm text-center text-gray-500">Robert's technical expertise and innovative approach drive our engineering excellence.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Additional styles for the banner if needed */
    .banner-text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
</style>
@endsection