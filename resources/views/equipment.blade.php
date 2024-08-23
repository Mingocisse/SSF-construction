@extends('layouts.app')

@section('title', 'Our Equipment')

@section('content')

<div class=" banner-about relative bg-gray-900 h-64 md:h-96">
    <img src="{{ asset('images/hero-1.jpeg') }}" alt="About Us Banner" class="w-full h-full object-cover opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wider">EQUIPMENTS & PLANTS</h1>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="gallery grid grid-cols-3 gap-4">
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 1" class="w-full h-auto object-cover">
        </a>
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 2" class="w-full h-auto object-cover">
        </a>
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 3" class="w-full h-auto object-cover">
        </a>
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 1" class="w-full h-auto object-cover">
        </a>
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 2" class="w-full h-auto object-cover">
        </a>
        <a href="{{ asset('images/equipment/excavator.jpeg') }}" data-lightbox="mygallery">
            <img src="{{ asset('images/equipment/excavator.jpeg') }}" alt="Image 3" class="w-full h-auto object-cover">
        </a>
        <!-- Add more images as needed -->
    </div>
</div>
@endsection

@section('styles')

<style>
    .equipment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
    }

    .equipment-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .equipment-item:hover {
        transform: translateY(-5px);
    }

    .equipment-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .equipment-item:hover .equipment-image {
        transform: scale(1.1);
    }

    .equipment-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
    }

    .equipment-item:hover .equipment-overlay {
        height: 100%;
    }

    .equipment-name {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>
@endsection

@section('scripts')

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices': true,
        'disableScrolling': true
    });

    // Add custom click event to close lightbox when clicking outside the image
    document.addEventListener('click', function(event) {
        var lightboxOverlay = document.getElementById('lightboxOverlay');
        var lightboxImage = document.querySelector('.lb-image');
        if (lightboxOverlay && !lightboxImage.contains(event.target)) {
            lightbox.end();
        }
    }, false);

    // Smooth scroll animation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection