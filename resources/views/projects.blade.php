@extends('layouts.app')

@section('content')

<div class=" banner-about relative bg-gray-900 h-64 md:h-96">
    <img src="{{ asset('images/hero-4.jpeg') }}" alt="About Us Banner" class="w-full h-full object-cover opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wider"> OUR PROJECTS</h1>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    {{-- <h1 class="text-3xl font-bold mb-8">Our Projects</h1> --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
     
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <h2 class="text-xl font-semibold bg-blue-600 text-white p-4">Road Construction</h2>
            <div class="p-4">
                <img src="{{ asset('images/hero-1.jpeg')}}" alt="Road Construction" class="w-full h-48 object-cover rounded-md mb-2">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Road Construction projects →</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <h2 class="text-xl font-semibold bg-blue-600 text-white p-4">Warehouse Construction</h2>
            <div class="p-4">
                <img src="{{ asset('images/hero-2.jpeg')}}" alt="Road Construction" class="w-full h-48 object-cover rounded-md mb-2">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Warehouse Construction projects →</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <h2 class="text-xl font-semibold bg-blue-600 text-white p-4">Bridge Construction</h2>
            <div class="p-4">
                <img src="{{ asset('images/hero-3.jpeg')}}" alt="Road Construction" class="w-full h-48 object-cover rounded-md mb-2">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Bridge Construction projects →</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <h2 class="text-xl font-semibold bg-blue-600 text-white p-4">Residential Construction</h2>
            <div class="p-4">
                <img src="{{ asset('images/hero-4.jpeg')}}" alt="Road Construction" class="w-full h-48 object-cover rounded-md mb-2">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Residential Construction projects →</a>
            </div>
        </div>
    </div>
</div>
@endsection