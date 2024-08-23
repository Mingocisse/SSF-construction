@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-4xl font-bold mb-4">Project Gallery</h2>
    <p class="text-xl mb-8">Explore our completed projects and ongoing work.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Replace the '#' with actual image URLs when available -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="#" alt="Project 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Modern Office Complex</h3>
                <p>A state-of-the-art office building with sustainable features.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="#" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Residential High-Rise</h3>
                <p>Luxury apartments with panoramic city views.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="#" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Bridge Renovation</h3>
                <p>Structural reinforcement and modernization of a historic bridge.</p>
            </div>
        </div>
    </div>
</div>
@endsection