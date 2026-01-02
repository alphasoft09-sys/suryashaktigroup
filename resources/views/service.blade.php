@extends('layouts.app')

@section('title', $service['title'] . ' - SURYASHAKTI GROUP')

@section('content')
    <!-- Page Header -->
    <section class="relative py-32 bg-cover bg-center" style="background-image: url('{{ asset('images/service-bg.jpg') }}');">
        <div class="absolute inset-0 bg-charcoal/80"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-white uppercase mb-4 tracking-wider">{{ $service['title'] }}</h1>
            <div class="flex items-center justify-center space-x-3 text-sm md:text-base font-bold uppercase tracking-widest text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-gold transition-colors">Home</a>
                <span class="text-gold">•</span>
                <span>Service</span>
                <span class="text-gold">•</span>
                <span class="text-white">{{ $service['title'] }}</span>
            </div>
        </div>
    </section>

    <!-- Service Details Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 order-2 lg:order-1">
                    <!-- Services List -->
                    <div class="bg-gray-50 p-8 rounded-lg mb-10 border border-gray-100">
                        <h3 class="text-xl font-black text-charcoal uppercase mb-6 border-l-4 border-gold pl-4">All Services</h3>
                        <ul class="space-y-2">
                            @foreach($allServices as $key => $s)
                            <li>
                                <a href="{{ route('service.show', $key) }}" class="block p-4 font-bold transition-all duration-300 shadow-sm hover:shadow-md flex justify-between items-center group {{ $key === $slug ? 'bg-gold text-white' : 'bg-white text-gray-600 hover:text-white hover:bg-gold' }}">
                                    {{ $s['title'] }}
                                    <span class="{{ $key === $slug ? 'text-white' : 'text-gold group-hover:text-white' }}">→</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Contact Widget -->
                    <div class="relative bg-gold p-10 text-center rounded-lg overflow-hidden group">
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-charcoal rounded-full flex items-center justify-center mx-auto mb-6 text-gold text-2xl">
                                <i class="fas fa-phone-alt"></i> <!-- FontAwesome Icon -->
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <h3 class="text-2xl font-black text-charcoal uppercase mb-2">Contact With Us For Any Project</h3>
                            <div class="w-12 h-1 bg-charcoal mx-auto my-6"></div>
                            <div class="bg-charcoal text-white py-4 px-8 mt-4 font-bold text-xl rounded shadow-lg inline-block">
                                92 888 666 0000
                            </div>
                        </div>
                        <!-- Decorative Circle -->
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>
                        <div class="absolute bottom-0 left-0 w-full h-1/3 bg-black/10"></div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-full lg:w-2/3 order-1 lg:order-2">
                    <div class="mb-10 rounded-lg overflow-hidden shadow-xl">
                        <img src="{{ asset('images/'.$service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-[400px] object-cover">
                    </div>

                    <h2 class="text-3xl md:text-4xl font-black text-charcoal uppercase mb-6">{{ $service['title'] }}</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        {{ $service['content'] }}
                    </p>
                    <p class="text-gray-600 mb-10 leading-relaxed">
                        We are committed to delivering excellence in every project. With {{ $service['title'] }}, you get precision, durability, and top-tier craftsmanship that meets international standards.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="rounded-lg overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('images/service-2.jpg') }}" alt="Sub Service 1" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('images/about-1.jpg') }}" alt="Sub Service 2" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-charcoal uppercase mb-8">Benefits of Service</h3>
                    
                    <div class="flex flex-col md:flex-row gap-8 mb-10">
                        @foreach($service['benefits'] as $benefit)
                        <div class="flex items-start gap-4">
                            <div class="text-gold">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-charcoal text-lg mb-2">{{ $benefit['title'] }}</h4>
                                <p class="text-gray-500 text-sm">{{ $benefit['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="bg-gray-50 rounded-lg p-0 overflow-hidden text-sm">
                        <div class="border-b border-gray-200">
                            <button class="w-full text-left px-6 py-4 font-bold text-gray-700 flex justify-between items-center group hover:bg-white transition-colors">
                                Providing full range of high metal services solution
                                <span class="text-gold font-bold text-xl">+</span>
                            </button>
                        </div>
                        <div class="border-b border-gray-200">
                            <button class="w-full text-left px-6 py-4 font-bold text-gray-700 flex justify-between items-center bg-white shadow-sm border-l-4 border-gold">
                                Get a solution for all industries in united kingdom
                                <span class="text-gold font-bold text-xl">-</span>
                            </button>
                            <div class="px-6 py-4 text-gray-500 leading-relaxed bg-white">
                                There are many variations of passages of available but majority have alteration in some by inject humour or random words.
                            </div>
                        </div>
                        <div>
                            <button class="w-full text-left px-6 py-4 font-bold text-gray-700 flex justify-between items-center group hover:bg-white transition-colors">
                                Metal works craftmanship built to scale
                                <span class="text-gold font-bold text-xl">+</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
