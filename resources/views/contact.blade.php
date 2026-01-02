@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/slider/slider-3.jpg') }}" alt="Contact Us Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-charcoal/80 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="text-gold font-bold tracking-[0.2em] uppercase mb-4 block animate-fade-in-up">Get in Touch</span>
            <h1 class="text-white text-5xl md:text-7xl font-black uppercase mb-6 animate-fade-in-up delay-100">
                Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-white">Us</span>
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto animate-fade-in-up delay-200">
                Have a project in mind? We'd love to hear from you. Let's build something great together.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 relative z-10 -mt-32">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">
                
                <!-- Contact Info (Left Side) -->
                <div class="lg:w-2/5 bg-charcoal text-white p-12 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gold/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-gold/10 rounded-full blur-3xl -ml-32 -mb-32"></div>
                    
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-8">Contact Information</h3>
                        <p class="text-gray-400 mb-12">
                            Fill out the form and our team will get back to you within 24 hours.
                        </p>

                        <div class="space-y-8">
                            <div class="flex items-start space-x-6 group">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-charcoal transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-gold font-bold mb-1">Phone</h4>
                                    <p class="text-gray-300">+1 (555) 123-4567</p>
                                    <p class="text-gray-300">+1 (555) 765-4321</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-6 group">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-charcoal transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-gold font-bold mb-1">Email</h4>
                                    <p class="text-gray-300">info@suryashaktigroup.com</p>
                                    <p class="text-gray-300">support@suryashaktigroup.com</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-6 group">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-charcoal transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-gold font-bold mb-1">Office</h4>
                                    <p class="text-gray-300">123 Industrial Ave, Metal City,<br>State 12345, Country</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16">
                            <h4 class="text-gold font-bold mb-6">Follow Us</h4>
                            <div class="flex space-x-4">
                                @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                                <a href="#" class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center hover:bg-gold hover:border-gold hover:text-charcoal transition-all duration-300">
                                    <i class="fab fa-{{ $social }} text-lg"></i>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form (Right Side) -->
                <div class="lg:w-3/5 p-12 bg-white">
                    <form action="#" method="POST" class="space-y-8">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative">
                                <input type="text" id="first_name" name="first_name" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5" placeholder="First Name" required>
                                <label for="first_name" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">First Name</label>
                            </div>
                            <div class="relative">
                                <input type="text" id="last_name" name="last_name" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5" placeholder="Last Name" required>
                                <label for="last_name" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Last Name</label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative">
                                <input type="email" id="email" name="email" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5" placeholder="Email Address" required>
                                <label for="email" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Email Address</label>
                            </div>
                            <div class="relative">
                                <input type="tel" id="phone" name="phone" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5" placeholder="Phone Number">
                                <label for="phone" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Phone Number</label>
                            </div>
                        </div>

                        <div class="relative">
                            <select id="service" name="service" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold py-2.5 bg-transparent">
                                <option value="" disabled selected>Select a Service</option>
                                <option value="fabrication">Fabrication</option>
                                <option value="steel-welding">Steel Welding</option>
                                <option value="pipe-welding">Pipe Welding</option>
                                <option value="metal-works">Metal Works</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="aluminum">Aluminum System</option>
                            </select>
                            <label for="service" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-focus:text-gold peer-focus:text-sm">Interested Service</label>
                        </div>

                        <div class="relative">
                            <textarea id="message" name="message" rows="4" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 resize-none" placeholder="Message" required></textarea>
                            <label for="message" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Your Message</label>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="bg-charcoal text-white font-bold py-4 px-10 rounded-lg shadow-lg hover:bg-gold hover:text-charcoal transform hover:-translate-y-1 transition-all duration-300 uppercase tracking-wider w-full md:w-auto">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-[500px] w-full relative grayscale hover:grayscale-0 transition-all duration-500">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1622646632486!5m2!1sen!2sus" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
        <div class="absolute inset-0 bg-gold/10 pointer-events-none"></div>
    </section>

    <style>
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
