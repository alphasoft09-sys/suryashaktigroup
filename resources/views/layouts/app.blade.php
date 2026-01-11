<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'SURYASHAKTI GROUP') }} - @yield('title', 'Best Fabricator in Odisha & India')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'SURYASHAKTI GROUP - Building a strong foundation for fabrication in India. We are the best fabricator in Odisha, providing top-tier steel welding, pipe welding, and industrial manufacturing solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Best fabricator in Odisha, Fabrication in India, Strong foundation for fabrication, Suryashakti Group, welding services Odisha, steel welding India, industrial fabrication')">
    <meta name="author" content="SURYASHAKTI GROUP">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'SURYASHAKTI GROUP - Best Fabricator in Odisha & India')">
    <meta property="og:description" content="@yield('og_description', 'Building a strong foundation for fabrication in India. Best fabricator in Odisha for structural and industrial needs.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Google Fonts & Icons imported via Vite in app.js -->
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-white">
    <!-- Sticky Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-charcoal/95 backdrop-blur-sm shadow-lg transition-all duration-300">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="SURYASHAKTI GROUP Logo" class="h-10 w-auto">
                    <div class="flex flex-col leading-tight">
                        <span class="text-white font-black tracking-wider text-xl">SURYASHAKTI</span>
                        <span class="text-gold font-bold tracking-[0.2em] text-sm">GROUP</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium">Home</a>
                    <a href="{{ url('/#about') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium">About Us</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-gold transition-colors duration-200 font-medium flex items-center space-x-1">
                            <span>Services</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="{{ route('service.show', 'steel-welding') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Steel Welding</div>
                                    <div class="text-sm opacity-75">Professional steel fabrication</div>
                                </a>
                                <a href="{{ route('service.show', 'metal-work') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Metal Works</div>
                                    <div class="text-sm opacity-75">Custom metal solutions</div>
                                </a>
                                <a href="{{ route('service.show', 'pipe-welding') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Pipe Welding</div>
                                    <div class="text-sm opacity-75">Industrial pipe services</div>
                                </a>
                                <a href="{{ route('service.show', 'manufacturing') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Manufacturing</div>
                                    <div class="text-sm opacity-75">Large-scale production</div>
                                </a>
                                <a href="{{ route('service.show', 'fabrication') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Fabrication</div>
                                    <div class="text-sm opacity-75">Custom fabrication work</div>
                                </a>
                                <a href="{{ route('service.show', 'aluminum-system') }}" class="block px-4 py-3 text-gray-700 hover:bg-gold hover:text-white transition-colors duration-200">
                                    <div class="font-semibold">Aluminum System</div>
                                    <div class="text-sm opacity-75">Aluminum welding & systems</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    

                    <a href="{{ route('contact') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium">Contact</a>
                    
                    <!-- CTA Button -->
                    <a href="{{ route('quote') }}" class="bg-gold hover:bg-gold-light text-charcoal font-bold px-6 py-3 rounded-lg transition-all duration-200 transform hover:scale-105">
                        Get Quote
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none">
                    <svg id="menu-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="{{ url('/') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium py-2">Home</a>
                    <a href="{{ url('/#about') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium py-2">About Us</a>
                    
                    <!-- Mobile Services Submenu -->
                    <div>
                        <button id="mobile-services-toggle" class="text-white hover:text-gold transition-colors duration-200 font-medium py-2 flex items-center justify-between w-full">
                            <span>Services</span>
                            <svg class="w-4 h-4 transition-transform" id="mobile-services-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="mobile-services-menu" class="hidden pl-4 mt-2 space-y-2">
                            <a href="{{ route('service.show', 'steel-welding') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Steel Welding</a>
                            <a href="{{ route('service.show', 'metal-work') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Metal Works</a>
                            <a href="{{ route('service.show', 'pipe-welding') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Pipe Welding</a>
                            <a href="{{ route('service.show', 'manufacturing') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Manufacturing</a>
                            <a href="{{ route('service.show', 'fabrication') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Fabrication</a>
                            <a href="{{ route('service.show', 'aluminum-system') }}" class="block text-gray-300 hover:text-gold transition-colors duration-200 py-2">Aluminum System</a>
                        </div>
                    </div>
                    

                    <a href="{{ route('contact') }}" class="text-white hover:text-gold transition-colors duration-200 font-medium py-2">Contact</a>
                    <a href="{{ route('quote') }}" class="bg-gold hover:bg-gold-light text-charcoal font-bold px-6 py-3 rounded-lg transition-all duration-200 text-center mt-2">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white pt-20 pb-10 relative bg-cover bg-center" style="background-image: url('{{ asset('images/footer-bg.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="SURYASHAKTI GROUP Logo" class="h-14 w-auto">
                        <div class="flex flex-col leading-tight">
                            <span class="text-white font-black tracking-wider text-2xl">SURYASHAKTI</span>
                            <span class="text-gold font-bold tracking-[0.2em] text-base">GROUP</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6">
                        Providing top-tier welding and metal fabrication solutions. We build with steel and integrity.
                    </p>
                    <div class="flex space-x-4">
                        @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-gold hover:text-charcoal transition-all duration-300">
                            <span class="sr-only">{{ ucfirst($social) }}</span>
                            <i class="fab fa-{{ $social }} text-lg"></i>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Latest News -->
                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-4 border-gold pl-3">Latest News</h4>
                    <div class="space-y-4">
                        @for($i = 1; $i <= 2; $i++)
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-20 h-20 bg-gray-800 rounded overflow-hidden flex-shrink-0">
                                <img src="{{ asset('images/about-1.jpg') }}" alt="Blog" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                            </div>
                            <div>
                                <div class="text-xs text-gold mb-1">Oct 2{{ $i }}, 2023</div>
                                <h5 class="font-medium hover:text-gold transition-colors line-clamp-2">Advanced welding techniques for modern construction</h5>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-4 border-gold pl-3">Quick Links</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="{{ url('/#about') }}" class="hover:text-gold transition-colors flex items-center"><span class="mr-2 text-gold">›</span> About Us</a></li>
                        <li><a href="{{ url('/#services') }}" class="hover:text-gold transition-colors flex items-center"><span class="mr-2 text-gold">›</span> Our Services</a></li>

                        <li><a href="{{ route('contact') }}" class="hover:text-gold transition-colors flex items-center"><span class="mr-2 text-gold">›</span> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-4 border-gold pl-3">Contact Us</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start">
                            <span class="text-gold mt-1 mr-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </span>
                            <span>123 Industrial Ave, Metal City, MC 12345</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-gold mr-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </span>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-gold mr-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <span>info@suryashaktigroup.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} SURYASHAKTI GROUP. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-gold transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-gold transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Mobile services submenu toggle
        const mobileServicesToggle = document.getElementById('mobile-services-toggle');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');

        mobileServicesToggle.addEventListener('click', () => {
            mobileServicesMenu.classList.toggle('hidden');
            mobileServicesIcon.classList.toggle('rotate-180');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-2xl');
                navbar.classList.remove('shadow-lg');
            } else {
                navbar.classList.add('shadow-lg');
                navbar.classList.remove('shadow-2xl');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80; // Account for fixed navbar
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>
