@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="relative bg-gray-900 h-64 md:h-96">
    <img src="{{ asset('images/hero-5.jpeg') }}" alt="Contact Us Banner" class="w-full h-full object-cover opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wider">Contact Us</h1>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Contact Us</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="list-disc list-inside mb-4">
                <li>Phone: 555-555-5555</li>
                <li>Email: <a href="mailto:info@example.com" class="text-blue-500 hover:underline">info@example.com</a></li>
                <li>Address: 123 Main St, Anytown, USA 12345</li>
            </ul>
        </div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Send Us a Message</h2>
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message:</label>
                    <textarea id="message" class="form-textarea mt-1 block w-full h-48 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection