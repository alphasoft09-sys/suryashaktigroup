<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/', function () {
    return view('index');
})->name('home');

// Service Data Configuration
$services = [
    'fabrication' => [
        'title' => 'Fabrication',
        'short_desc' => 'Your trusted partner for the best custom structural fabrication in Odisha and India.',
        'content' => 'Suryashakti Group is recognized as the best fabricator in Odisha, setting the standard for structural and architectural metal fabrication in India. Our fabrication services form the strong foundation of industrial infrastructure. We leverage state-of-the-art technology and expert craftsmanship to deliver precision-engineered components that drive the nation\'s growth. From heavy-duty frameworks to intricate designs, we build with unmatched durability.',
        'image' => 'service-fabrication.jpg',
        'benefits' => [
            ['title' => 'Precision Engineering', 'desc' => 'Exact specifications for every component.'],
            ['title' => 'High Durability', 'desc' => 'Built to withstand harsh industrial environments.'],
        ]
    ],
    'steel-welding' => [
        'title' => 'Steel Welding',
        'short_desc' => 'High-strength steel welding services building a strong foundation for Indian industry.',
        'content' => 'Our steel welding services are pivotal in building a strong foundation for fabrication in India. We utilize advanced arc and gas welding techniques to ensure superior strength and integrity for every joint. As a leading service provider in Odisha, we cater to construction, infrastructure, and heavy machinery sectors, ensuring that every weld contributes to the safety and longevity of your projects.',
        'image' => 'service-steel-welding.jpg',
        'benefits' => [
            ['title' => 'Certified Welders', 'desc' => 'Expertise you can trust for critical structures.'],
            ['title' => 'Advanced Techniques', 'desc' => 'Utilizing the latest in welding technology.'],
        ]
    ],
    'pipe-welding' => [
        'title' => 'Pipe Welding',
        'short_desc' => 'Specialized piping solutions for oil, gas, and water systems.',
        'content' => 'Pipe welding requires a unique set of skills and precision, especially for high-pressure systems in the oil, gas, and water industries. We offer specialized pipe welding services that guarantee leak-proof, pressure-resistant joints. Our team is experienced in working with various pipe diameters and materials, ensuring compliance with strict industry safety standards. We deliver reliable piping infrastructure that powers essential services and industries.',
        'image' => 'service-pipe-welding.jpg',
        'benefits' => [
            ['title' => 'Leak-Proof Guarantee', 'desc' => 'Testing protocols to ensure system integrity.'],
            ['title' => 'Pressure Resistant', 'desc' => 'Designed for high-pressure industrial lines.'],
        ]
    ],
    'manufacturing' => [
        'title' => 'Manufacturing',
        'short_desc' => 'End-to-end industrial manufacturing solutions across Odisha and India.',
        'content' => 'We provide comprehensive manufacturing solutions that reinforce our reputation as the best fabricator in Odisha. Our manufacturing process integrates design, prototyping, and mass production, contributing to a strong industrial foundation in India. Whether it is bespoke components or large-scale production runs, Suryashakti Group delivers quality and efficiency for all your metal manufacturing needs.',
        'image' => 'service-manufacturing.jpg',
        'benefits' => [
            ['title' => 'Scalable Production', 'desc' => 'From prototypes to mass manufacturing.'],
            ['title' => 'Quality Control', 'desc' => 'Rigorous inspection at every production stage.'],
        ]
    ],
    'metal-work' => [
        'title' => 'Metal Work',
        'short_desc' => 'Artisanal and functional metal works for diverse needs.',
        'content' => 'Metal work is an art form that blends functionality with design. Our metal working services cover everything from decorative architectural elements to functional machinery parts. We pride ourselves on our versatility, capable of handling complex geometries and unique finishing requirements. Whether you need custom gates, railings, or machinery casings, our skilled craftsmen deliver metal work that improves both the utility and visual appeal of your project.',
        'image' => 'service-metal-work.jpg',
        'benefits' => [
            ['title' => 'Custom Designs', 'desc' => 'Tailored solutions for unique requirements.'],
            ['title' => 'Versatile Finishes', 'desc' => 'A range of surface treatments and coatings.'],
        ]
    ],
    'aluminum-system' => [
        'title' => 'Aluminum System',
        'short_desc' => 'Modern aluminum profiling and glazing systems.',
        'content' => 'Aluminum systems are the preferred choice for modern construction due to their light weight and corrosion resistance. We specialize in designing and installing comprehensive aluminum systems, including window profiles, curtain walls, and structural frameworks. Our solutions offer excellent thermal efficiency and modern aesthetics, making them ideal for commercial buildings and contemporary homes.',
        'image' => 'service-aluminum.jpg',
        'benefits' => [
            ['title' => 'Lightweight Strength', 'desc' => 'High strength-to-weight ratio.'],
            ['title' => 'Corrosion Resistant', 'desc' => 'Ideal for long-term outdoor exposure.'],
        ]
    ],
];

// Redirect old /service route to the first service
Route::get('/service', function () {
    return redirect()->route('service.show', ['slug' => 'fabrication']);
});

// Contact Route
Route::view('/contact', 'contact')->name('contact');

// Get Quote Route
Route::view('/get-quote', 'quote')->name('quote');

// Dynamic Service Route
Route::get('/services/{slug}', function ($slug) use ($services) {
    if (!array_key_exists($slug, $services)) {
        abort(404);
    }
    return view('service', [
        'service' => $services[$slug],
        'slug' => $slug,
        'allServices' => $services
    ]);
})->name('service.show');
