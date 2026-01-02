@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Slider -->
        <div class="absolute inset-0 z-0" id="hero-slider">
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100 slide-image">
                <img src="{{ asset('images/slider/slider-1.jpg') }}" alt="Welding Background 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-charcoal/80 mix-blend-multiply"></div>
            </div>
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 slide-image">
                <img src="{{ asset('images/slider/slider-2.jpg') }}" alt="Welding Background 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-charcoal/80 mix-blend-multiply"></div>
            </div>
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 slide-image">
                <img src="{{ asset('images/slider/slider-3.jpg') }}" alt="Welding Background 3" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-charcoal/80 mix-blend-multiply"></div>
            </div>
        </div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-white text-5xl md:text-7xl font-black uppercase mb-6 leading-tight animate-fade-in-up delay-100">
                Building a <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-white">Strong Foundation</span><br>
                in India
            </h1>
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light animate-fade-in-up delay-200">
                Acknowledged as the <strong>Best Fabricator in Odisha</strong>. We deliver precision, durability, and excellence in every weld, powering the nation's industrial growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#services" class="bg-gold hover:bg-gold-light text-charcoal font-bold py-4 px-8 rounded-lg transform transition hover:scale-105 hover:shadow-lg">
                    Discover More
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-charcoal font-bold py-4 px-8 rounded-lg transition-colors duration-300">
                    Contact Us
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-8 h-8 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path>
            </svg>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide-image');
            let currentSlide = 0;
            const slideInterval = 5000; // 5 seconds

            function nextSlide() {
                slides[currentSlide].classList.remove('opacity-100');
                slides[currentSlide].classList.add('opacity-0');
                
                currentSlide = (currentSlide + 1) % slides.length;
                
                slides[currentSlide].classList.remove('opacity-0');
                slides[currentSlide].classList.add('opacity-100');
            }

            setInterval(nextSlide, slideInterval);
        });
    </script>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Images -->
                <!-- Left: Images -->
                <div class="relative pb-10 md:pb-0">
                    <div class="relative z-10 rounded-lg overflow-hidden shadow-2xl md:w-3/4">
                        <img src="{{ asset('images/about-1.jpg') }}" alt="Welder at work" class="w-full h-[500px] object-cover">
                    </div>
                    <!-- Overlapping Image with Negative Margin -->
                    <div class="relative z-20 rounded-lg overflow-hidden shadow-2xl border-4 border-white md:w-3/4 ml-auto -mt-24 md:-mt-32 hidden md:block">
                        <img src="{{ asset('images/about-2.jpg') }}" alt="Metal structure" class="w-full h-auto object-cover">
                    </div>
                    <!-- Decor element -->
                    <div class="absolute top-0 left-0 w-24 h-24 bg-gold/20 -z-0 rounded-full blur-2xl"></div>
                </div>

                <!-- Right: Content -->
                <div class="lg:pl-10 mt-12 lg:mt-0">
                    <span class="text-gold font-bold tracking-wider uppercase text-sm">Who We Are</span>
                    <h2 class="text-4xl font-black text-charcoal mb-6 uppercase">
                    Welcome to <span class="text-gold">Suryashakti Group</span>
                </h2>
                <p class="text-gray-600 mb-6 text-lg">
                    As the <strong>Best Fabricator in Odisha</strong>, Suryashakti Group is dedicated to building a strong foundation for fabrication across India. With decades of expertise, we specialize in delivering high-performance metal solutions that stand the test of time.
                </p>
                <p class="text-gray-600 mb-8">
                    From complex industrial frameworks to architectural marvels, our commitment to quality has established us as a leader in the Indian fabrication industry. We don't just weld metal; we forge lasting partnerships and infrastructure.
                </p>
                    <ul class="space-y-4">
                        @foreach(['Certified Professional Welders', 'Advanced Technology & Equipment', 'On-Time Project Delivery', 'Competitive Pricing Structure'] as $item)
                        <li class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-gold/20 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-charcoal font-medium">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="mt-10">
                        <a href="#about" class="text-gold font-bold hover:text-gold-dark flex items-center gap-2 group">
                            Learn More About Us
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-gold font-bold tracking-wider uppercase text-sm">What We Do</span>
                <h2 class="text-4xl font-bold text-charcoal mt-2">Our Premium Services</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'title' => 'Steel Welding', 
                            'desc' => 'Structural steel welding for large scale industrial constructions.', 
                            'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                            'slug' => 'steel-welding',
                            'image' => 'service-steel-welding.jpg'
                        ],
                        [
                            'title' => 'Metal Works', 
                            'desc' => 'Custom metal fabrication designs tailored to your specific needs.', 
                            'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
                            'slug' => 'metal-work',
                            'image' => 'service-metal-work.jpg'
                        ],
                        [
                            'title' => 'Pipe Welding', 
                            'desc' => 'High-pressure pipe welding services for oil, gas, and water systems.', 
                            'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                            'slug' => 'pipe-welding',
                            'image' => 'service-pipe-welding.jpg'
                        ],
                        [
                            'title' => 'Fabrication', 
                            'desc' => 'Precision-engineered components for industrial applications.', 
                            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                            'slug' => 'fabrication',
                            'image' => 'service-fabrication.jpg'
                        ],
                        [
                            'title' => 'Manufacturing', 
                            'desc' => 'End-to-end manufacturing of metal components and assemblies.', 
                            'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                            'slug' => 'manufacturing',
                            'image' => 'service-manufacturing.jpg'
                        ],
                        [
                            'title' => 'Aluminum System', 
                            'desc' => 'Modern aluminum profiling and glazing systems.', 
                            'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                            'slug' => 'aluminum-system',
                            'image' => 'service-aluminum.jpg'
                        ]
                    ];
                @endphp

                @foreach($services as $index => $service)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group border-b-4 border-transparent hover:border-gold">
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/'.$service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-charcoal/60 group-hover:bg-charcoal/40 transition-colors duration-300 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-charcoal mb-3 group-hover:text-gold transition-colors">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-6">{{ $service['desc'] }}</p>
                        <a href="{{ route('service.show', $service['slug']) }}" class="inline-flex items-center text-sm font-bold text-charcoal uppercase tracking-wider hover:text-gold transition-colors">
                            Read Details
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Fun Facts Section -->
    <section class="relative py-20 lg:py-28 bg-cover bg-center" style="background-image: url('{{ asset('images/fun-facts-bg.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Spacer (for BG image visibility if needed) -->
                <div class="hidden lg:block"></div>

                <!-- Right Content -->
                <div class="text-white">
                    <span class="inline-block border border-gold text-gold px-4 py-1 text-sm font-bold uppercase tracking-wider mb-4">Our Fun Facts</span>
                    <h2 class="text-4xl md:text-5xl font-black uppercase leading-tight mb-6">
                        Dream it, we can <br>
                        <span class="text-white">Build it</span>
                    </h2>
                    <p class="text-gray-400 mb-10 leading-relaxed max-w-xl">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <!-- Stat 1 -->
                        <div class="border border-gold p-8 text-center group hover:bg-gold transition-colors duration-300">
                            <div class="text-4xl font-bold text-white mb-2">800</div>
                            <div class="text-gray-400 text-sm font-bold uppercase group-hover:text-charcoal transition-colors">Projects<br>Completed</div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="border border-gold p-8 text-center group hover:bg-gold transition-colors duration-300">
                            <div class="text-4xl font-bold text-white mb-2">681</div>
                            <div class="text-gray-400 text-sm font-bold uppercase group-hover:text-charcoal transition-colors">Satisfied<br>Clients</div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="border border-gold p-8 text-center group hover:bg-gold transition-colors duration-300">
                            <div class="text-4xl font-bold text-white mb-2">909</div>
                            <div class="text-gray-400 text-sm font-bold uppercase group-hover:text-charcoal transition-colors">Metal<br>Works</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Articles Section -->
    <!-- News & Articles Section -->
    <!-- News & Articles Section -->
    <section id="blog" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block border border-gold text-gold px-4 py-1 text-sm font-bold uppercase tracking-wider mb-4">From The Blog</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase text-charcoal">News & Articles</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('images/about-1.jpg') }}" alt="Welding Process" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4 bg-gold text-charcoal text-xs font-bold px-3 py-1 rounded uppercase">
                            20 Aug 2024
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center text-xs text-gray-500 mb-3 border-b border-gray-100 pb-3">
                            <span class="uppercase tracking-wide font-bold text-gold">Construction</span>
                            <span class="mx-2">•</span>
                            <span>By Admin</span>
                        </div>
                        <h3 class="text-xl font-bold text-charcoal uppercase leading-tight mb-4 group-hover:text-gold transition-colors">
                            It Joins Two Pieces of Metal
                        </h3>
                        <p class="text-gray-600 mb-6 line-clamp-3">
                            Welding is a fabrication process that joins materials, usually metals or thermoplastics, by using high heat to melt the parts together.
                        </p>
                        <a href="#" class="inline-block text-sm font-bold text-charcoal uppercase tracking-wider hover:text-gold transition-colors">
                            Read More <span class="ml-1 text-gold">→</span>
                        </a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('images/service-1.jpg') }}" alt="Industrial Welding" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4 bg-gold text-charcoal text-xs font-bold px-3 py-1 rounded uppercase">
                            18 Aug 2024
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center text-xs text-gray-500 mb-3 border-b border-gray-100 pb-3">
                            <span class="uppercase tracking-wide font-bold text-gold">Industry</span>
                            <span class="mx-2">•</span>
                            <span>By Admin</span>
                        </div>
                        <h3 class="text-xl font-bold text-charcoal uppercase leading-tight mb-4 group-hover:text-gold transition-colors">
                            When the welding output is on
                        </h3>
                        <p class="text-gray-600 mb-6 line-clamp-3">
                            Safety is paramount when the welding output is on. Learn about the essential safety gear and protocols for industrial welders.
                        </p>
                        <a href="#" class="inline-block text-sm font-bold text-charcoal uppercase tracking-wider hover:text-gold transition-colors">
                            Read More <span class="ml-1 text-gold">→</span>
                        </a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('images/service-2.jpg') }}" alt="Metal Production" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4 bg-gold text-charcoal text-xs font-bold px-3 py-1 rounded uppercase">
                            15 Aug 2024
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center text-xs text-gray-500 mb-3 border-b border-gray-100 pb-3">
                            <span class="uppercase tracking-wide font-bold text-gold">Fabrication</span>
                            <span class="mx-2">•</span>
                            <span>By Admin</span>
                        </div>
                        <h3 class="text-xl font-bold text-charcoal uppercase leading-tight mb-4 group-hover:text-gold transition-colors">
                            We're creating a metal product
                        </h3>
                        <p class="text-gray-600 mb-6 line-clamp-3">
                            From raw material to finished product, discover our comprehensive process for creating high-quality custom metal fabrications.
                        </p>
                        <a href="#" class="inline-block text-sm font-bold text-charcoal uppercase tracking-wider hover:text-gold transition-colors">
                            Read More <span class="ml-1 text-gold">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client & Newsletter Section Wrapper -->
    <div class="bg-gray-100 pb-20">
        <!-- Client Logo Carousel -->
        <section class="py-20 border-b border-gray-200 overflow-hidden">
            <div class="container mx-auto px-4 mb-16 text-center">
                <span class="inline-block border border-gold text-gold px-4 py-1 text-sm font-bold uppercase tracking-wider mb-4">Our Premium Partners</span>
                <h2 class="text-3xl md:text-5xl font-black text-charcoal uppercase mb-6">
                    Trusted By Industry Leaders
                </h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            @php
                $clients = [
                    'client-1.png', 'client-2.png', 'client-3.png', 'client-4.svg', 
                    'client-5.png', 'client-6.png', 'client-7.jpg', 'client-8.png', 
                    'client-9.jpg', 'client-10.jpg', 'client-11.png'
                ];
                
                // Split clients into two unique sets for top and bottom rows
                $row1Clients = array_slice($clients, 0, 6);
                $row2Clients = array_slice($clients, 6);

                // Duplicate each set for its own seamless loop
                $row1Loop = array_merge($row1Clients, $row1Clients, $row1Clients); // Tripled for smoother infinite scroll on wide screens
                $row2Loop = array_merge($row2Clients, $row2Clients, $row2Clients, $row2Clients); // Quadrupled since fewer items
            @endphp

            <!-- Row 1: Moving Left (Standard) -->
            <div class="relative w-full overflow-hidden mb-12 group">
                <div class="flex items-center animate-marquee whitespace-nowrap py-4 group-hover:pause">
                    @foreach($row1Loop as $client)
                    <div class="inline-block mx-6">
                        <div class="bg-gray-50 rounded-xl shadow-sm border border-gray-100 w-64 h-40 flex items-center justify-center p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 transform">
                            <img src="{{ asset('images/clients/'.$client) }}" alt="Partner Logo" class="max-h-24 w-auto max-w-full transition-all duration-500 object-contain">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Row 2: Moving Right (Reverse) -->
            <div class="relative w-full overflow-hidden group">
                <div class="flex items-center animate-marquee-reverse whitespace-nowrap py-4 group-hover:pause">
                    @foreach($row2Loop as $client)
                    <div class="inline-block mx-6">
                        <div class="bg-gray-50 rounded-xl shadow-sm border border-gray-100 w-64 h-40 flex items-center justify-center p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 transform">
                            <img src="{{ asset('images/clients/'.$client) }}" alt="Partner Logo" class="max-h-24 w-auto max-w-full transition-all duration-500 object-contain">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="container mx-auto px-4 mt-20 relative z-10">
            <div class="bg-gold rounded-lg shadow-2xl p-10 md:p-16 relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, #000 0, #000 1px, transparent 0, transparent 50%); background-size: 10px 10px;"></div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-black text-charcoal uppercase mb-4">
                            Subscribe to Newsletter
                        </h2>
                        <div class="flex items-start space-x-4">
                            <div class="text-charcoal mt-1">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <p class="text-charcoal/80 text-sm leading-relaxed max-w-md">
                                Stay updated with our latest news, industry trends, and exclusive offers. Join our mailing list today!
                            </p>
                        </div>
                    </div>

                    <div>
                        <form class="flex flex-col md:flex-row gap-4">
                            <input type="email" placeholder="Enter Your Email Address..." class="w-full bg-white px-6 py-4 outline-none text-charcoal placeholder-gray-400 focus:ring-2 focus:ring-charcoal transition-all">
                            <button type="submit" class="bg-charcoal text-white px-10 py-4 font-bold uppercase tracking-wider hover:bg-black transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Styles for Marquee Animation -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes marquee-reverse {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .animate-marquee {
            animation: marquee 40s linear infinite;
            width: fit-content;
        }
        .animate-marquee-reverse {
            animation: marquee-reverse 40s linear infinite;
            width: fit-content;
        }
        .group:hover .group-hover\:pause {
            animation-play-state: paused;
        }
    </style>


@endsection
