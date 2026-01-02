@extends('layouts.app')

@section('title', 'Request a Quote')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/slider/slider-1.jpg') }}" alt="Request Quote Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-charcoal/90 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="text-gold font-bold tracking-[0.2em] uppercase mb-4 block animate-fade-in-up">Start Your Project</span>
            <h1 class="text-white text-5xl md:text-6xl font-black uppercase mb-6 animate-fade-in-up delay-100">
                Request a <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-white">Quote</span>
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto animate-fade-in-up delay-200">
                Tell us about your project requirements, and we'll provide a comprehensive proposal tailored to your needs.
            </p>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 relative z-10 -mt-24">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-4xl mx-auto">
                <div class="bg-charcoal p-8 text-center border-b-4 border-gold">
                    <h2 class="text-2xl text-white font-bold uppercase tracking-wider">Project Details</h2>
                    <p class="text-gray-400 mt-2 text-sm">Please provide as much detail as possible to help us estimate accurately.</p>
                </div>

                <form action="#" method="POST" class="p-8 md:p-12 space-y-12">
                    @csrf
                    
                    <!-- Section 1: Contact Information -->
                    <div>
                        <h3 class="text-charcoal font-bold text-xl mb-6 flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gold text-charcoal flex items-center justify-center mr-3 text-sm font-black">1</span>
                            Contact Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <input type="text" id="name" name="name" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Full Name" required>
                                <label for="name" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Full Name</label>
                            </div>
                            <div class="relative group">
                                <input type="text" id="company" name="company" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Company Name">
                                <label for="company" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Company Name (Optional)</label>
                            </div>
                            <div class="relative group">
                                <input type="email" id="email" name="email" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Email Address" required>
                                <label for="email" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Email Address</label>
                            </div>
                            <div class="relative group">
                                <input type="tel" id="phone" name="phone" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Phone Number" required>
                                <label for="phone" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Phone Number</label>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Project Specifications -->
                    <div>
                        <h3 class="text-charcoal font-bold text-xl mb-6 flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gold text-charcoal flex items-center justify-center mr-3 text-sm font-black">2</span>
                            Project Specifications
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div class="relative">
                                <select id="service_type" name="service_type" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold py-2.5 bg-transparent" required>
                                    <option value="" disabled selected>Select Service Type</option>
                                    <option value="fabrication">Custom Fabrication</option>
                                    <option value="steel-welding">Steel Welding</option>
                                    <option value="pipe-welding">Pipe Welding</option>
                                    <option value="metal-works">General Metal Works</option>
                                    <option value="manufacturing">Industrial Manufacturing</option>
                                    <option value="aluminum">Aluminum Systems</option>
                                    <option value="other">Other / Consultation</option>
                                </select>
                                <label for="service_type" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-focus:text-gold peer-focus:text-sm">Service Required</label>
                            </div>
                            <div class="relative">
                                <select id="budget" name="budget" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold py-2.5 bg-transparent">
                                    <option value="" disabled selected>Estimated Budget</option>
                                    <option value="under-1k">Under $1,000</option>
                                    <option value="1k-5k">$1,000 - $5,000</option>
                                    <option value="5k-10k">$5,000 - $10,000</option>
                                    <option value="10k-50k">$10,000 - $50,000</option>
                                    <option value="50k+">$50,000+</option>
                                </select>
                                <label for="budget" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-focus:text-gold peer-focus:text-sm">Project Budget</label>
                            </div>
                        </div>
                        
                        <div class="relative group mb-8">
                            <textarea id="description" name="description" rows="4" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 resize-none" placeholder="Project Description" required></textarea>
                            <label for="description" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Project Description & Requirements</label>
                        </div>

                        <!-- File Upload UI -->
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-gold transition-colors cursor-pointer group">
                            <div class="text-gray-400 group-hover:text-gold transition-colors mb-2">
                                <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                            </div>
                            <p class="text-sm text-gray-600 font-medium">Click to upload blueprints or reference images</p>
                            <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG up to 10MB</p>
                            <input type="file" class="hidden" name="attachments[]" multiple>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <button type="submit" class="w-full bg-gold text-charcoal font-black text-lg py-4 rounded-lg shadow-lg hover:bg-gold-light transform hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest">
                            Submit Request
                        </button>
                        <p class="text-center text-gray-400 text-xs mt-4">
                            By submitting this form, you agree to our privacy policy. Your information is secure.
                        </p>
                    </div>
                </form>
            </div>
        </div>
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
