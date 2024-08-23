@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Contact Us</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="list-disc list-inside">
                <li>Phone: 555-555-5555</li>
                <li>Email: <a href="mailto:info@example.com">info@example.com</a></li>
                <li>Address: 123 Main St, Anytown, USA 12345</li>
            </ul>
        </div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Send Us a Message</h2>
            <form>
                <div class="mb-4">
                    <label for="name" class="text-gray-700">Name:</label>
                    <input type="text" id="name" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="email" class="text-gray-700">Email:</label>
                    <input type="email" id="email" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="message" class="text-gray-700">Message:</label>
                    <textarea id="message" class="form-textarea w-full h-48"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection