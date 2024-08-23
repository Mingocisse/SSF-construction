<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSF Construction</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="bg-gray-100">
    <header class="fixed top-0 left-0 right-0 z-50">
        <nav id="navbar" class="navbar bg-violet-500 text-violet">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/SSF-Liberia-Logo.png') }}" alt="SSF Construction Logo" class="h-20 w-auto mr-3">
                        <span class="text-2xl font-bold hover:text-blue-600 transition duration-300"></span>
                    </a>
                    <button class="mobile-menu-button md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <ul class="nav-links hidden md:flex md:space-x-6">
                        <li><a href="{{ route('home') }}" class="nav-link hover:text-blue-600 transition duration-300">Home</a></li>
                        <li><a href="{{ route('projects') }}" class="nav-link hover:text-blue-600 transition duration-300">Projects</a></li>
                        <li><a href="{{ route('equipment') }}" class="nav-link hover:text-blue-600 transition duration-300">Equipment & Plants</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link hover:text-blue-600 transition duration-300">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="nav-link hover:text-blue-600 transition duration-300">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-16">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">SSF Construction</h3>
                    <p>Building the future with quality and innovation</p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">Quick Links</h3>
                    <ul>
                        <li><a href="{{ route('home') }}" class="hover:text-blue-300">Home</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-blue-300">Projects</a></li>
                        <li><a href="{{ route('equipment') }}" class="hover:text-blue-300">Equipment & Plants</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-300">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-300">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h3 class="text-xl font-bold mb-2">Contact Us</h3>
                    <p>123 Construction Ave, Monrovia, Liberia</p>
                    <p>Phone: +231 123 456 789</p>
                    <p>Email: info@ssfconstruction.com</p>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p> SSF Construction &copy;  {{ date('Y') }} . All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.getElementById('navbar');
            var mobileMenuButton = document.querySelector('.mobile-menu-button');
            var navLinks = document.querySelector('.nav-links');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            mobileMenuButton.addEventListener('click', function() {
                navLinks.classList.toggle('active');
            });
        });
    </script>
    @yield('scripts')
</body>
</html>