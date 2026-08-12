@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Banner -->
    <section class="relative bg-ink text-white overflow-hidden">
        <div class="absolute inset-0 dot-grid opacity-40"></div>
        <div class="glow" style="top: -120px; left: 50%; transform: translateX(-50%);"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-ink/40 via-ink to-ink"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-28 text-center">
            <span class="endpoint-tag mb-6 hero-in" style="--d:0">GET / &mdash; company profile</span>
            <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight mb-6 hero-in" style="--d:1">
                {{ $company['tagline'] }}
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-10 hero-in" style="--d:2">
                {{ $company['name'] }} helps startups and enterprises design, build, and scale
                reliable software products &mdash; from first commit to production.
            </p>
            <a href="{{ route('contact') }}"
               class="hero-in inline-flex items-center gap-2 bg-signal text-heading font-semibold px-7 py-3.5 rounded-full shadow-lg shadow-signal/20 hover:bg-teal-400 hover:shadow-xl hover:shadow-signal/30 press transition-all group"
               style="--d:3">
                Start a Project
                <span aria-hidden="true" class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>
    </section>

    <!-- Company Introduction -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center reveal">
        <span class="endpoint-tag mb-5">/about-us</span>
        <h2 class="font-display text-3xl font-semibold text-heading mb-4">Who We Are</h2>
        <p class="text-slate leading-relaxed">
            {{ $company['name'] }} is a technology company dedicated to delivering high-quality
            web, mobile, and cloud solutions. Our team combines technical expertise with a
            passion for great design to help businesses thrive in a digital-first world.
        </p>
    </section>

    <!-- Featured Services -->
    <section class="bg-surface border-y border-line py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="endpoint-tag mb-5">GET /services</span>
                <h2 class="font-display text-3xl font-semibold text-heading">Featured Services</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($featuredServices as $service)
                    <div class="reveal lift p-7 border border-line rounded-2xl hover:border-signal/50 hover:shadow-lg hover:shadow-signal/5 transition-colors group" style="--d:{{ $loop->index }}">
                        <div class="text-3xl mb-4">{{ $service['icon'] }}</div>
                        <h3 class="font-display text-lg font-semibold text-heading mb-2">{{ $service['title'] }}</h3>
                        <p class="text-slate text-sm leading-relaxed">{{ $service['description'] }}</p>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-signal group-hover:gap-2.5 transition-all">
                            Learn more <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="relative bg-ink text-white py-20 text-center overflow-hidden reveal">
        <div class="glow" style="bottom: -200px; left: 50%; transform: translateX(-50%);"></div>
        <div class="relative">
            <span class="endpoint-tag mb-5">POST /contact</span>
            <h2 class="font-display text-2xl md:text-3xl font-semibold mb-4">Ready to start your next project?</h2>
            <p class="text-gray-400 mb-8 max-w-md mx-auto">Tell us what you're building and we'll get back to you within one business day.</p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-signal text-heading font-semibold px-7 py-3.5 rounded-full hover:bg-teal-400 press transition-all group">
                Contact Us Today
                <span aria-hidden="true" class="transition-transform group-hover:translate-x-1">&rarr;</span>
            </a>
        </div>
    </section>

@endsection
