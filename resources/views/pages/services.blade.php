@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

    <section class="relative bg-ink text-white py-16 text-center overflow-hidden">
        <div class="glow" style="top: -160px; left: 50%; transform: translateX(-50%);"></div>
        <div class="relative">
            <span class="endpoint-tag mb-5 hero-in" style="--d:0">GET /services</span>
            <h1 class="font-display text-4xl font-semibold mb-4 hero-in" style="--d:1">Our Services</h1>
            <p class="text-gray-400 max-w-xl mx-auto hero-in" style="--d:2">
                A full range of technology services designed to help your business
                launch, grow, and scale with confidence.
            </p>
        </div>
    </section>

    <!-- Signature image-card strip -->
    <section class="bg-surface border-y border-line py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 reveal">
                <span class="endpoint-tag mb-4">/why-vanguard</span>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-heading max-w-xl leading-snug">
                    Built to help you ship, secure, and scale with confidence
                </h2>
                <p class="text-slate mt-4 max-w-xl">
                    Our team brings engineering, security, and strategy together so every
                    project moves forward on solid ground.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($signatureServices as $item)
                    <div class="reveal lift relative rounded-2xl overflow-hidden h-80 group" style="--d:{{ $loop->index }}">
                        <img src="{{ asset($item['image']) }}"
                             alt="{{ $item['title'] }} illustration"
                             class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5">
                            <span class="font-endpoint text-signal text-xs uppercase tracking-wide">{{ $item['keyword'] }}</span>
                            <h3 class="font-display text-white text-lg font-semibold mt-1">{{ $item['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Full service grid -->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mb-12 reveal">
            <span class="endpoint-tag mb-4">/all-services</span>
            <h2 class="font-display text-3xl font-semibold text-heading">Everything We Offer</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($services as $service)
                <div class="reveal lift p-7 border border-line rounded-2xl bg-surface hover:border-signal/50 hover:shadow-lg hover:shadow-signal/5 transition-colors" style="--d:{{ $loop->index }}">
                    <span class="font-endpoint text-xs text-signal">
                        /{{ \Illuminate\Support\Str::slug($service['title']) }}
                    </span>
                    <div class="text-3xl my-4">{{ $service['icon'] }}</div>
                    <h2 class="font-display text-lg font-semibold text-heading mb-2">{{ $service['title'] }}</h2>
                    <p class="text-slate text-sm leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection