@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="relative bg-ink text-white py-16 text-center overflow-hidden">
        <div class="glow" style="top: -160px; left: 50%; transform: translateX(-50%);"></div>
        <div class="relative">
            <span class="endpoint-tag mb-5 hero-in" style="--d:0">GET /about</span>
            <h1 class="font-display text-4xl font-semibold hero-in" style="--d:1">About Us</h1>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <!-- Company History -->
        <div class="max-w-3xl mx-auto text-center mb-16 reveal">
            <h2 class="font-display text-2xl font-semibold mb-4 text-heading">Our History</h2>
            <p class="text-slate leading-relaxed">
                Vanguard Solutions was founded with a simple goal: to help businesses navigate
                the digital landscape through reliable and thoughtfully engineered software.
                What started as a small team of developers has grown into a full-service
                technology partner for startups and enterprises alike.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            <div class="reveal lift p-8 border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:0">
                <span class="endpoint-tag mb-4">/mission</span>
                <h2 class="font-display text-xl font-semibold mb-3 text-heading">Mission</h2>
                <p class="text-slate leading-relaxed">
                    To empower businesses with innovative, scalable, and secure technology
                    solutions that drive measurable growth.
                </p>
            </div>
            <div class="reveal lift p-8 border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:1">
                <span class="endpoint-tag mb-4">/vision</span>
                <h2 class="font-display text-xl font-semibold mb-3 text-heading">Vision</h2>
                <p class="text-slate leading-relaxed">
                    To be a leading technology partner recognized for excellence, integrity,
                    and impactful digital solutions across Southeast Asia.
                </p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mb-16">
            <div class="text-center mb-8 reveal">
                <span class="endpoint-tag mb-4">/core-values</span>
                <h2 class="font-display text-2xl font-semibold text-heading">What Drives Us</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach ($coreValues as $value => $description)
                    <div class="reveal lift p-6 bg-surface border border-line rounded-xl hover:border-signal/40 transition-colors" style="--d:{{ $loop->index }}">
                        <h3 class="font-display font-semibold text-heading mb-1">{{ $value }}</h3>
                        <p class="text-slate text-sm leading-relaxed">{{ $description }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Team Introduction -->
        <div>
            <div class="text-center mb-8 reveal">
                <span class="endpoint-tag mb-4">/team</span>
                <h2 class="font-display text-2xl font-semibold text-heading">Meet the Team</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
                @foreach ($team as $member)
                    <div class="reveal lift text-center p-5 border border-line rounded-xl bg-surface hover:border-signal/40 transition-colors" style="--d:{{ $loop->index }}">
                        <img src="{{ asset($member['avatar']) }}"
                             alt="Avatar for {{ $member['name'] }}"
                             class="w-20 h-20 mx-auto mb-4 rounded-full border border-line transition-transform group-hover:scale-105">
                        <h3 class="font-display font-semibold text-heading">{{ $member['name'] }}</h3>
                        <p class="text-xs font-endpoint text-slate mt-1">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
