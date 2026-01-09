@extends('layouts.app')

@section('title', 'Vendor Registration')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            {{-- Reusing an existing slider image or a relevant background --}}
            <img src="{{ asset('images/slider/slider-1.jpg') }}" alt="Vendor Registration Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-charcoal/90 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="text-gold font-bold tracking-[0.2em] uppercase mb-4 block animate-fade-in-up">Join Our Network</span>
            <h1 class="text-white text-5xl md:text-6xl font-black uppercase mb-6 animate-fade-in-up delay-100">
                Partner With <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-white">Us</span>
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto animate-fade-in-up delay-200">
                Register as a vendor and become a part of our supply chain excellence.
            </p>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 relative z-10 -mt-24">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-4xl mx-auto">
                <div class="bg-charcoal p-8 text-center border-b-4 border-gold">
                    <h2 class="text-2xl text-white font-bold uppercase tracking-wider">Vendor Registration</h2>
                    <p class="text-gray-400 mt-2 text-sm">Complete the form below to register your company with us.</p>
                </div>

                <form action="#" method="POST" class="p-8 md:p-12 space-y-12" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Section 1: Company Details -->
                    <div>
                        <h3 class="text-charcoal font-bold text-xl mb-6 flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gold text-charcoal flex items-center justify-center mr-3 text-sm font-black">1</span>
                            Company Details
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <input type="text" id="company_name" name="company_name" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Company Name" required>
                                <label for="company_name" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Company Name</label>
                            </div>
                             <div class="relative group">
                                <input type="text" id="gst_no" name="gst_no" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="GST / Tax ID">
                                <label for="gst_no" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">GST / Tax ID</label>
                            </div>
                             <div class="relative group">
                                <input type="text" id="website" name="website" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Website URL">
                                <label for="website" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Website URL</label>
                            </div>
                            <div class="relative group">
                                <select id="business_type" name="business_type" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold py-2.5 bg-transparent" required>
                                    <option value="" disabled selected>Business Type</option>
                                    <option value="manufacturer">Manufacturer</option>
                                    <option value="supplier">Distributor / Supplier</option>
                                    <option value="service_provider">Service Provider</option>
                                    <option value="contractor">Sub-Contractor</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="business_type" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-focus:text-gold peer-focus:text-sm">Business Type</label>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Contact Information -->
                    <div>
                        <h3 class="text-charcoal font-bold text-xl mb-6 flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gold text-charcoal flex items-center justify-center mr-3 text-sm font-black">2</span>
                            Contact Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                             <div class="relative group">
                                <input type="text" id="contact_person" name="contact_person" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Contact Person Name" required>
                                <label for="contact_person" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Contact Person Name</label>
                            </div>
                             <div class="relative group">
                                <input type="text" id="designation" name="designation" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Designation">
                                <label for="designation" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Designation</label>
                            </div>
                            <div class="relative group">
                                <input type="email" id="email" name="email" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Email Address" required>
                                <label for="email" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Email Address</label>
                            </div>
                            <div class="relative group">
                                <input type="tel" id="phone" name="phone" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 transition-colors" placeholder="Phone Number" required>
                                <label for="phone" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Phone Number</label>
                            </div>
                            <div class="relative group md:col-span-2">
                                <textarea id="address" name="address" rows="2" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 resize-none" placeholder="Registered Address" required></textarea>
                                <label for="address" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Registered Address</label>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Additional Details & Upload -->
                    <div>
                         <h3 class="text-charcoal font-bold text-xl mb-6 flex items-center">
                            <span class="w-8 h-8 rounded-full bg-gold text-charcoal flex items-center justify-center mr-3 text-sm font-black">3</span>
                            Documents & Description
                        </h3>
                        
                        <div class="relative group mb-8">
                            <textarea id="description" name="description" rows="4" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-gold placeholder-transparent py-2.5 resize-none" placeholder="Product / Service Description" required></textarea>
                            <label for="description" class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-gold peer-focus:text-sm">Brief Description of Products/Services</label>
                        </div>

                        <!-- File Upload UI -->
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-gold transition-colors cursor-pointer group relative">
                            <div class="text-gray-400 group-hover:text-gold transition-colors mb-2">
                                <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <p class="text-sm text-gray-600 font-medium">Upload Company Profile / Brochure</p>
                            <p class="text-xs text-gray-400 mt-1">PDF, DOCX up to 10MB</p>
                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" name="company_profile" accept=".pdf,.doc,.docx">
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <button type="submit" class="w-full bg-gold text-charcoal font-black text-lg py-4 rounded-lg shadow-lg hover:bg-gold-light transform hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest">
                            Register Vendor
                        </button>
                        <p class="text-center text-gray-400 text-xs mt-4">
                            By registering, you agree to our vendor terms and conditions.
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
