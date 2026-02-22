<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNITRIPS — Your Dream Escape from Singapore to Nongsa</title>
    <meta name="description" content="What if your dream relaxing life was only 60 minutes away? From Singapore to the sea views of Nongsa. Book your curated island getaway with UNITRIPS.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">

<!-- Cursor glow -->
<div id="cursor-glow" class="glow-cursor hidden lg:block"></div>
<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-50 px-6 py-4 lg:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="nav-logo text-2xl font-extrabold tracking-tight text-white">
            UNITRIPS
        </a>

        <!-- Desktop links -->
        <div class="hidden lg:flex items-center gap-8">
            <a href="#destinations" class="nav-link text-sm">Destinations</a>
            <a href="#itinerary" class="nav-link text-sm">Itinerary</a>
            <a href="#why-us" class="nav-link text-sm">Why Us</a>
            <a href="#testimonials" class="nav-link text-sm">Testimonials</a>
            <a href="#faq" class="nav-link text-sm">FAQ</a>
            <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
               class="btn-primary btn-whatsapp text-sm px-6 py-2.5">
                <span>Build My Itinerary</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <!-- Mobile hamburger -->
        <button id="mobile-menu-btn" class="lg:hidden text-white p-2" aria-label="Open menu">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
</nav>

<!-- Mobile overlay -->
<div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black/50 z-40"></div>

<!-- Mobile menu -->
<div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-72 h-full bg-white z-50 shadow-2xl p-8 flex flex-col gap-6">
    <button id="mobile-menu-close" class="self-end text-slate-600" aria-label="Close menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <a href="#destinations" class="text-lg font-semibold text-slate-700 hover:text-ocean-600">Destinations</a>
    <a href="#itinerary" class="text-lg font-semibold text-slate-700 hover:text-ocean-600">Itinerary</a>
    <a href="#why-us" class="text-lg font-semibold text-slate-700 hover:text-ocean-600">Why Us</a>
    <a href="#testimonials" class="text-lg font-semibold text-slate-700 hover:text-ocean-600">Testimonials</a>
    <a href="#faq" class="text-lg font-semibold text-slate-700 hover:text-ocean-600">FAQ</a>
    <a href="https://wa.me/6285942272983" target="_blank" rel="noopener" class="btn-primary text-center mt-4">
        <span>Build My Itinerary</span>
    </a>
</div>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero-gradient relative min-h-screen flex items-center justify-center overflow-hidden pt-24 lg:pt-0">
    <!-- Floating particles -->
    <div class="floating-particle" style="width:80px;height:80px;top:15%;left:10%"></div>
    <div class="floating-particle" style="width:120px;height:120px;top:60%;left:80%"></div>
    <div class="floating-particle" style="width:60px;height:60px;top:30%;left:70%"></div>
    <div class="floating-particle" style="width:100px;height:100px;top:75%;left:20%"></div>
    <div class="floating-particle" style="width:50px;height:50px;top:20%;left:50%"></div>

    <!-- Parallax background element -->
    <div class="parallax-bg absolute inset-0 opacity-20" data-speed="0.15">
        <svg class="absolute -top-20 -right-20 w-[600px] h-[600px] text-white/10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M45.3,-58.2C57.9,-48.5,66.6,-33.2,71.1,-16.3C75.6,0.6,75.9,19.1,68.5,33.4C61.1,47.6,46,57.6,30.1,63.1C14.2,68.6,-2.4,69.6,-18.7,65.4C-35,61.2,-51,51.8,-60.8,38C-70.6,24.2,-74.2,6,-70.3,-10.1C-66.3,-26.2,-54.8,-40.2,-41.3,-49.7C-27.9,-59.2,-12.4,-64.2,2.6,-67.4C17.6,-70.5,32.8,-67.8,45.3,-58.2Z" transform="translate(100 100)"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <div class="animate-on-scroll">
            <span class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold text-ocean-200 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                🌊 Singapore → Nongsa in 60 minutes
            </span>
        </div>

        <h1 class="animate-on-scroll delay-100 text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-6">
            What if your dream<br>
            <span class="bg-gradient-to-r from-sand-200 via-sand-300 to-sunset-400 bg-clip-text text-transparent">relaxing life</span>
            was only<br>60 minutes away?
        </h1>

        <p class="animate-on-scroll delay-200 text-lg sm:text-xl text-ocean-100 max-w-2xl mx-auto mb-4 leading-relaxed">
            From Singapore to the sea views of Nongsa. Trade traffic noise for waves.
            Trade city rush for sunrise coffee by the beach.
        </p>

        <p class="animate-on-scroll delay-300 text-base text-ocean-200 max-w-xl mx-auto mb-10">
            🚢 45–60 min by ferry &nbsp;·&nbsp; 🏖️ 15 min from Nongsa Pura Ferry Terminal to your first ocean breeze
        </p>

        <div class="animate-on-scroll delay-400 flex flex-col sm:flex-row gap-4 justify-center items-center mb-10 sm:mb-12 md:mb-16 lg:mb-0">
            <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
               class="btn-primary btn-whatsapp text-lg px-10 py-4">
                <span>Build My Itinerary</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#destinations" class="btn-secondary">
                <span>Explore Destinations</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </a>
        </div>
    </div>

    <!-- Hero wave divider -->
    <div class="hero-wave">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,64 C360,120 720,0 1080,64 C1260,96 1380,80 1440,64 L1440,120 L0,120 Z" fill="white"/>
        </svg>
    </div>
</section>


<!-- ============================================================
     MARQUEE STRIP
     ============================================================ -->
<section class="bg-white py-6 overflow-hidden border-b border-slate-100">
    <div class="marquee-track whitespace-nowrap text-slate-300 text-sm font-semibold uppercase tracking-widest">
        <span>🌴 Nongsa Village</span>
        <span>·</span>
        <span>⛵ Nongsa Point Marina</span>
        <span>·</span>
        <span>🏖️ Turi Beach</span>
        <span>·</span>
        <span>🧘 Beachfront Spa</span>
        <span>·</span>
        <span>🍽️ Seafood Feast</span>
        <span>·</span>
        <span>🚢 45 min from Singapore</span>
        <span>·</span>
        <span>🌴 Nongsa Village</span>
        <span>·</span>
        <span>⛵ Nongsa Point Marina</span>
        <span>·</span>
        <span>🏖️ Turi Beach</span>
        <span>·</span>
        <span>🧘 Beachfront Spa</span>
        <span>·</span>
        <span>🍽️ Seafood Feast</span>
        <span>·</span>
        <span>🚢 45 min from Singapore</span>
    </div>
</section>


<!-- ============================================================
     DESTINATIONS
     ============================================================ -->
<section id="destinations" class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section header -->
        <div class="text-center mb-16">
            <span class="animate-on-scroll inline-block px-4 py-1.5 mb-4 text-sm font-semibold text-ocean-600 bg-ocean-50 rounded-full">
                Featured Destinations
            </span>
            <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                Paradise Awaits You
            </h2>
            <p class="animate-on-scroll delay-200 text-lg text-slate-500 max-w-2xl mx-auto">
                Three stunning locations just a short ferry ride from Singapore. Each one offering its own unique blend of relaxation and adventure.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Nongsa Village -->
            <div class="animate-on-scroll delay-100 destination-card group h-96 md:h-[28rem]">
                <div class="card-image absolute inset-0" style="background-image: url('{{ asset('images/nongsavillages.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="absolute inset-0 flex items-center justify-center text-8xl opacity-30">🏘️</div>
                </div>
                <div class="card-overlay absolute inset-0"></div>
                <div class="card-content absolute bottom-0 left-0 right-0 p-6 text-white">
                    <span class="inline-block px-3 py-1 text-xs font-semibold bg-white/20 backdrop-blur-sm rounded-full mb-3">Cultural Experience</span>
                    <h3 class="text-2xl font-bold mb-2">Nongsa Village</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-4">Discover the authentic charm of local culture. Stroll through traditional villages, meet friendly locals, and taste homemade delicacies.</p>
                    <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-sand-300 transition-colors">
                        Explore
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Nongsa Point Marina -->
            <div class="animate-on-scroll delay-200 destination-card group h-96 md:h-[28rem]">
                <div class="card-image absolute inset-0" style="background-image: url('{{ asset('images/Nongsa Point Marina.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="absolute inset-0 flex items-center justify-center text-8xl opacity-30">⛵</div>
                </div>
                <div class="card-overlay absolute inset-0"></div>
                <div class="card-content absolute bottom-0 left-0 right-0 p-6 text-white">
                    <span class="inline-block px-3 py-1 text-xs font-semibold bg-white/20 backdrop-blur-sm rounded-full mb-3">Marina Life</span>
                    <h3 class="text-2xl font-bold mb-2">Nongsa Point Marina</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-4">Where luxury meets the sea. Enjoy sunset walks along the marina, dine at waterfront restaurants, and feel the ocean breeze.</p>
                    <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-sand-300 transition-colors">
                        Explore
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Card 3: Turi Beach -->
            <div class="animate-on-scroll delay-300 destination-card group h-96 md:h-[28rem]">
                <div class="card-image absolute inset-0" style="background-image: url('{{ asset('images/Turi Beach.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="absolute inset-0 flex items-center justify-center text-8xl opacity-30">🏖️</div>
                </div>
                <div class="card-overlay absolute inset-0"></div>
                <div class="card-content absolute bottom-0 left-0 right-0 p-6 text-white">
                    <span class="inline-block px-3 py-1 text-xs font-semibold bg-white/20 backdrop-blur-sm rounded-full mb-3">Beach Paradise</span>
                    <h3 class="text-2xl font-bold mb-2">Turi Beach</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-4">White sand, crystal clear water, and pure relaxation. The perfect escape for those who want to truly unwind by the sea.</p>
                    <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-sand-300 transition-colors">
                        Explore
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     WHY UNITRIPS
     ============================================================ -->
<section id="why-us" class="py-24 lg:py-32 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="animate-on-scroll inline-block px-4 py-1.5 mb-4 text-sm font-semibold text-ocean-600 bg-ocean-50 rounded-full">
                Why Choose Us
            </span>
            <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                Your Escape, Made Simple
            </h2>
            <p class="animate-on-scroll delay-200 text-lg text-slate-500 max-w-2xl mx-auto">
                We take care of every detail so you can focus on what matters — relaxing, exploring, and making memories.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="animate-on-scroll delay-100 feature-card">
                <div class="feature-icon bg-ocean-50 text-ocean-600">🚢</div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Quick Ferry Ride</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Just 45–60 minutes by ferry from Singapore to paradise</p>
            </div>
            <div class="animate-on-scroll delay-200 feature-card">
                <div class="feature-icon bg-coral-400/10 text-coral-500">🌅</div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Curated Experiences</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Handpicked activities, restaurants, and hidden gems</p>
            </div>
            <div class="animate-on-scroll delay-300 feature-card">
                <div class="feature-icon bg-sand-50 text-sand-500">✨</div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Fully Customizable</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Build your own itinerary — your vibe, your pace</p>
            </div>
            <div class="animate-on-scroll delay-400 feature-card">
                <div class="feature-icon bg-green-50 text-green-600">🤝</div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Local Expertise</h3>
                <p class="text-sm text-slate-500 leading-relaxed">We know Nongsa inside out — trust the locals</p>
            </div>
        </div>

        <!-- Stats counters -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="animate-on-scroll delay-100 text-center">
                <div class="counter-value text-4xl lg:text-5xl font-extrabold text-ocean-600" data-target="60" data-suffix=" min">0</div>
                <p class="text-sm text-slate-500 mt-2">Ferry from Singapore</p>
            </div>
            <div class="animate-on-scroll delay-200 text-center">
                <div class="counter-value text-4xl lg:text-5xl font-extrabold text-ocean-600" data-target="3" data-suffix="+">0</div>
                <p class="text-sm text-slate-500 mt-2">Stunning Destinations</p>
            </div>
            <div class="animate-on-scroll delay-300 text-center">
                <div class="counter-value text-4xl lg:text-5xl font-extrabold text-ocean-600" data-target="15" data-suffix=" min">0</div>
                <p class="text-sm text-slate-500 mt-2">Terminal to Ocean</p>
            </div>
            <div class="animate-on-scroll delay-400 text-center">
                <div class="counter-value text-4xl lg:text-5xl font-extrabold text-ocean-600" data-target="100" data-suffix="%">0</div>
                <p class="text-sm text-slate-500 mt-2">Customizable</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     ITINERARY SECTION
     ============================================================ -->
<section id="itinerary" class="py-24 lg:py-32 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <!-- Section header -->
        <div class="text-center mb-16">
            <span class="animate-on-scroll inline-block px-4 py-1.5 mb-4 text-sm font-semibold text-ocean-600 bg-ocean-50 rounded-full">
                ✨ Customize Your Own Travel Itinerary
            </span>
            <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                Not just a trip — a<br class="hidden sm:inline">
                <span class="text-ocean-600">curated experience.</span>
            </h2>
            <p class="animate-on-scroll delay-200 text-lg text-slate-500 max-w-2xl mx-auto">
                Here's a sample 3-day itinerary to spark your imagination. Customize every detail to match your perfect getaway.
            </p>
        </div>

        <!-- Day tabs -->
        <div class="animate-on-scroll delay-200 flex flex-wrap justify-center gap-3 mb-12">
            <button class="itinerary-tab active" data-day="1">🧘 Day 1 — Relax</button>
            <button class="itinerary-tab" data-day="2">🏄 Day 2 — Adventure</button>
            <button class="itinerary-tab" data-day="3">🍽️ Day 3 — Food Journey</button>
        </div>

        <!-- Day panels -->
        <div class="animate-on-scroll delay-300">
            <!-- Day 1 -->
            <div class="itinerary-panel active" data-day="1">
                <div class="bg-gradient-to-br from-ocean-50 to-white rounded-3xl p-8 lg:p-12 border border-ocean-100">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="text-3xl">🧘</span>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900">Day 1 — Relax</h3>
                            <p class="text-slate-500 text-sm">Unwind and let the ocean heal you</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">💆</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Beachfront Spa & Massage</h4>
                                <p class="text-sm text-slate-500">Start your getaway with a relaxing full-body massage overlooking the ocean</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🍹</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Sunset Cocktail by the Sea</h4>
                                <p class="text-sm text-slate-500">Watch the golden hour paint the sky while sipping a tropical cocktail</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🦞</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Private Seafood Dinner</h4>
                                <p class="text-sm text-slate-500">End your first day with the freshest catch, prepared by local chefs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 2 -->
            <div class="itinerary-panel" data-day="2">
                <div class="bg-gradient-to-br from-sunset-400/10 to-white rounded-3xl p-8 lg:p-12 border border-orange-100">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="text-3xl">🏄</span>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900">Day 2 — Adventure</h3>
                            <p class="text-slate-500 text-sm">Get your adrenaline pumping</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🥾</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Morning Hike at Panbil Nature Reserve</h4>
                                <p class="text-sm text-slate-500">Explore lush tropical trails and discover hidden waterfalls</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🚤</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Water Activities (Kayak / Jet Ski)</h4>
                                <p class="text-sm text-slate-500">Feel the rush of the waves with exciting water sports</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🌅</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Marina Sunset Walk</h4>
                                <p class="text-sm text-slate-500">Wind down with a stroll along the beautiful Nongsa Point Marina</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 3 -->
            <div class="itinerary-panel" data-day="3">
                <div class="bg-gradient-to-br from-sand-50 to-white rounded-3xl p-8 lg:p-12 border border-sand-200">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="text-3xl">🍽️</span>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900">Day 3 — Food Journey</h3>
                            <p class="text-slate-500 text-sm">Taste the best of Nongsa</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🥐</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Breakfast by the Beach</h4>
                                <p class="text-sm text-slate-500">Wake up to the sound of waves and enjoy a sumptuous beachfront breakfast</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">🦀</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Seafood Feast at Love Seafood</h4>
                                <p class="text-sm text-slate-500">The most legendary seafood spot in Nongsa — a must-visit</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="text-2xl shrink-0">☕</span>
                            <div>
                                <h4 class="font-semibold text-slate-900">Local Coffee Before Ferry Back</h4>
                                <p class="text-sm text-slate-500">Savor authentic Indonesian kopi before heading home refreshed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Closing message + CTA -->
        <div class="animate-on-scroll delay-400 text-center mt-12">
            <p class="text-xl font-semibold text-slate-700 mb-2">You choose the vibe. We handle the logistics.</p>
            <p class="text-slate-500 mb-8">Every itinerary is 100% customizable to your preferences.</p>
            <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
               class="btn-primary btn-whatsapp text-lg px-10 py-4 mx-auto">
                <span>Build My Itinerary</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section id="testimonials" class="pt-24 lg:pt-32 pb-0 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section header -->
        <div class="text-center mb-16">
            <span class="animate-on-scroll inline-block px-4 py-1.5 mb-4 text-sm font-semibold text-ocean-600 bg-ocean-50 rounded-full">
                What Our Travellers Say
            </span>
            <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                Real stories from Singapore to Nongsa
            </h2>
            <p class="animate-on-scroll delay-200 text-lg text-slate-500 max-w-2xl mx-auto">
                Authentic reviews about UNITRIPS service, smooth booking, and the Nongsa experience.
            </p>
        </div>

        <!-- Testimonials grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="animate-on-scroll delay-100 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-ocean-100 text-ocean-700 flex items-center justify-center font-bold">AT</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Aisha Tan</p>
                        <p class="text-xs text-slate-500">Singapore</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">Booking was super smooth via WhatsApp and the itinerary felt tailored to us. Waking up to ocean views in Nongsa was exactly the reset I needed!</p>
            </div>

            <!-- Card 2 -->
            <div class="animate-on-scroll delay-200 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-coral-400/20 text-coral-600 flex items-center justify-center font-bold">BT</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Benjamin Thomas</p>
                        <p class="text-xs text-slate-500">Singapore</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">Loved the curated food stops and the marina sunset walk. Everything was well-planned, yet flexible. Highly recommend UNITRIPS for stress-free planning.</p>
            </div>

            <!-- Card 3 -->
            <div class="animate-on-scroll delay-300 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-sand-100 text-sand-600 flex items-center justify-center font-bold">ML</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Mei Lin</p>
                        <p class="text-xs text-slate-500">Johor Bahru</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">The team was responsive and helpful. Nongsa Point Marina is gorgeous, and our spa day by the beach was sublime. Will be back!</p>
            </div>

            <!-- Card 4 -->
            <div class="animate-on-scroll delay-100 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-ocean-100 text-ocean-700 flex items-center justify-center font-bold">AK</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Arun Kumar</p>
                        <p class="text-xs text-slate-500">Singapore</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">From ferry timing tips to local recommendations, everything felt thoughtful. The booking process was quick and transparent.</p>
            </div>

            <!-- Card 5 -->
            <div class="animate-on-scroll delay-200 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-coral-400/20 text-coral-600 flex items-center justify-center font-bold">SW</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Sarah Wong</p>
                        <p class="text-xs text-slate-500">Singapore</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">Our family trip was seamless. The kids loved Turi Beach and the flexible pacing. UNITRIPS made planning easy.</p>
            </div>

            <!-- Card 6 -->
            <div class="animate-on-scroll delay-300 bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-sand-100 text-sand-600 flex items-center justify-center font-bold">DC</div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Daniel Cho</p>
                        <p class="text-xs text-slate-500">Singapore</p>
                    </div>
                    <div class="ml-auto flex items-center gap-1 text-sand-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <p class="text-slate-600 leading-relaxed">Great communication and local tips. The Nongsa village visit was meaningful, and the whole trip felt premium yet personal.</p>
            </div>
        </div>
    </div>
    <!-- subtle divider -->
    <div class="section-wave"><svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,40 C360,60 720,20 1080,40 C1260,50 1380,45 1440,40 L1440,60 L0,60 Z" fill="white"/></svg></div>
    
</section>

<!-- ============================================================
     FAQ
     ============================================================ -->
<section id="faq" class="py-24 lg:py-32 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Section header -->
        <div class="text-center mb-12">
            <span class="animate-on-scroll inline-block px-4 py-1.5 mb-4 text-sm font-semibold text-ocean-600 bg-ocean-50 rounded-full">
                Frequently Asked Questions
            </span>
            <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                Everything you need to know
            </h2>
            <p class="animate-on-scroll delay-200 text-lg text-slate-500 max-w-2xl mx-auto">
                Clear answers about booking, ferries, payments, cancellations, and customization options.
            </p>
        </div>

        <!-- Accordion -->
        <div class="space-y-4" role="list">
            <!-- Item 1 -->
            <div class="animate-on-scroll delay-100 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-1" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">How do I book with UNITRIPS?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-1" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    Message us via WhatsApp and share your dates, group size, and preferences. We’ll propose a tailored itinerary and confirm details before securing bookings.
                </div>
            </div>

            <!-- Item 2 -->
            <div class="animate-on-scroll delay-150 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-2" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">Which ferry terminals and schedules do you use?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-2" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    We coordinate with popular Singapore ferry terminals and align your itinerary with available departures to <span class="font-semibold">Nongsa Pura Ferry Terminal</span>. We’ll advise optimal timings and handle transfers.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="animate-on-scroll delay-200 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-3" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">What payment methods are accepted?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-3" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    We support secure payments via major cards and regional options. You’ll receive a transparent invoice—no hidden fees.
                </div>
            </div>

            <!-- Item 4 -->
            <div class="animate-on-scroll delay-250 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-4" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">What’s included in my trip?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-4" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    A curated itinerary, local transfers in Nongsa, recommended activities, and guidance on dining and hidden gems. Ferry tickets and specific activities can be included based on your preferences.
                </div>
            </div>

            <!-- Item 5 -->
            <div class="animate-on-scroll delay-300 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-5" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">Can I customize the itinerary?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-5" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    Absolutely—every trip is personalized. Whether you want more adventure, wellness, or family time, we’ll tailor activities and pacing to your vibe.
                </div>
            </div>

            <!-- Item 6 -->
            <div class="animate-on-scroll delay-350 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-6" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">What are typical group sizes? Do you offer private trips?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-6" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    We arrange trips for couples, families, and groups. Private experiences are available—just tell us your group size and preferences.
                </div>
            </div>

            <!-- Item 7 -->
            <div class="animate-on-scroll delay-400 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-7" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">What is your cancellation and rescheduling policy?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-7" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    Plans change—we get it. We offer flexible options depending on ferry and partner policies. We’ll share clear terms before you confirm.
                </div>
            </div>

            <!-- Item 8 -->
            <div class="animate-on-scroll delay-450 rounded-2xl border border-slate-200 bg-white hover:border-ocean-200 transition" data-accordion-item>
                <button type="button" class="w-full text-left px-5 py-4 flex items-center gap-4" aria-expanded="false" aria-controls="faq-panel-8" data-accordion-toggle>
                    <span class="flex-1 text-slate-900 font-semibold">Do I need travel insurance or a visa?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" data-accordion-icon viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                </button>
                <div id="faq-panel-8" class="px-5 pb-5 text-slate-600 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out" data-accordion-panel>
                    Requirements depend on your nationality. We’ll advise on visa considerations and strongly recommend travel insurance for peace of mind.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FINAL CTA SECTION
     ============================================================ -->
<section class="hero-gradient relative py-24 lg:py-32 overflow-hidden">
    <!-- Background accents -->
    <div class="absolute inset-0 opacity-10">
        <svg class="absolute top-10 left-10 w-64 h-64 text-white" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M45.3,-58.2C57.9,-48.5,66.6,-33.2,71.1,-16.3C75.6,0.6,75.9,19.1,68.5,33.4C61.1,47.6,46,57.6,30.1,63.1C14.2,68.6,-2.4,69.6,-18.7,65.4C-35,61.2,-51,51.8,-60.8,38C-70.6,24.2,-74.2,6,-70.3,-10.1C-66.3,-26.2,-54.8,-40.2,-41.3,-49.7C-27.9,-59.2,-12.4,-64.2,2.6,-67.4C17.6,-70.5,32.8,-67.8,45.3,-58.2Z" transform="translate(100 100)"/>
        </svg>
        <svg class="absolute bottom-10 right-10 w-48 h-48 text-white" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="80" fill="currentColor"/>
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">
        <span class="animate-on-scroll inline-block px-4 py-1.5 mb-6 text-sm font-semibold text-white/90 bg-white/20 backdrop-blur-sm rounded-full">
            🌴 Ready to Escape?
        </span>
        <h2 class="animate-on-scroll delay-100 text-3xl sm:text-4xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Your Dream Getaway<br>Starts with One Message
        </h2>
        <p class="animate-on-scroll delay-200 text-lg lg:text-xl text-white/80 max-w-2xl mx-auto mb-10">
            Tell us your dates, your vibe, your group size — and we'll craft the perfect Nongsa escape just for you. No templates, no cookie-cutter packages.
        </p>
        <div class="animate-on-scroll delay-300 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
               class="btn-primary btn-whatsapp text-lg px-10 py-4">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <span>Chat on WhatsApp</span>
            </a>
            <a href="#destinations" class="btn-secondary text-lg px-10 py-4 text-white border-white/30 hover:bg-white/10">
                Explore Destinations
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Brand -->
            <div>
                <a href="#" class="text-2xl font-extrabold tracking-tight">
                    <span class="text-ocean-400">UNI</span><span class="text-white">TRIPS</span>
                </a>
                <p class="text-slate-400 mt-4 text-sm leading-relaxed">
                    Your gateway to Nongsa, Batam — just 60 minutes from Singapore. Curated travel experiences for those who want more than just a holiday.
                </p>
            </div>
            <!-- Quick links -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-400 mb-4">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#destinations" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">Destinations</a></li>
                    <li><a href="#itinerary" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">Itinerary</a></li>
                    <li><a href="#why-us" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">Why UNITRIPS</a></li>
                    <li><a href="#testimonials" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">Testimonials</a></li>
                    <li><a href="#faq" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">FAQ</a></li>
                    <li><a href="https://wa.me/6285942272983" target="_blank" rel="noopener" class="text-slate-300 hover:text-ocean-400 transition-colors text-sm">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-400 mb-4">Get in Touch</h4>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-sm text-slate-300">
                        <svg class="w-4 h-4 text-ocean-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        hello@unitrips.com
                    </li>
                    <li class="flex items-center gap-3 text-sm text-slate-300">
                        <svg class="w-4 h-4 text-ocean-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        +62 859 4227 2983
                    </li>
                    <li class="flex items-center gap-3 text-sm text-slate-300">
                        <svg class="w-4 h-4 text-ocean-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        Nongsa, Batam, Indonesia
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bottom bar -->
    <div class="border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-slate-500">&copy; {{ date('Y') }} UNITRIPS. All rights reserved.</p>
            <p class="text-xs text-slate-500">Crafted with ❤️ for travelers who seek more.</p>
        </div>
    </div>
</footer>

<!-- ============================================================
     MOBILE MENU OVERLAY
     ============================================================ -->
<div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 bg-slate-900/95 backdrop-blur-lg flex flex-col items-center justify-center">
    <button id="mobile-menu-close" class="absolute top-6 right-6 text-white p-2" aria-label="Close menu">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
    <nav class="flex flex-col items-center gap-8">
        <a href="#destinations" class="text-2xl font-bold text-white hover:text-ocean-400 transition-colors mobile-menu-link">Destinations</a>
        <a href="#itinerary" class="text-2xl font-bold text-white hover:text-ocean-400 transition-colors mobile-menu-link">Itinerary</a>
        <a href="#why-us" class="text-2xl font-bold text-white hover:text-ocean-400 transition-colors mobile-menu-link">Why Us</a>
        <a href="#testimonials" class="text-2xl font-bold text-white hover:text-ocean-400 transition-colors mobile-menu-link">Testimonials</a>
        <a href="#faq" class="text-2xl font-bold text-white hover:text-ocean-400 transition-colors mobile-menu-link">FAQ</a>
        <a href="https://wa.me/6285942272983" target="_blank" rel="noopener"
           class="btn-primary btn-whatsapp text-lg px-8 py-3 mt-4">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            <span>Book via WhatsApp</span>
        </a>
    </nav>
</div>

</body>
</html>