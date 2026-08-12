@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="relative bg-ink text-white py-16 text-center overflow-hidden">
        <div class="glow" style="top: -160px; left: 50%; transform: translateX(-50%);"></div>
        <div class="relative">
            <span class="endpoint-tag mb-5 hero-in" style="--d:0">POST /contact</span>
            <h1 class="font-display text-4xl font-semibold mb-4 hero-in" style="--d:1">Contact Us</h1>
            <p class="text-gray-400 max-w-xl mx-auto hero-in" style="--d:2">
                Have a project in mind? Reach out and let's talk about how we can help.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- Contact Form (UI only, no backend handling) -->
            <div class="reveal bg-surface p-8 rounded-2xl border border-line" style="--d:0">
                <span class="endpoint-tag mb-5">/send-message</span>
                <h2 class="font-display text-xl font-semibold text-heading mb-6">Send a Message</h2>
                <form class="space-y-5">
                    <div>
                        <label for="name" class="block text-xs font-endpoint text-slate mb-1.5">full_name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name"
                               class="w-full border border-line rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-signal focus:border-signal focus:outline-none transition-shadow">
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-endpoint text-slate mb-1.5">email</label>
                        <input type="email" id="email" name="email" placeholder="Your Active Email"
                               class="w-full border border-line rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-signal focus:border-signal focus:outline-none transition-shadow">
                    </div>
                    <div>
                        <label for="subject" class="block text-xs font-endpoint text-slate mb-1.5">subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Project Inquiry"
                               class="w-full border border-line rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-signal focus:border-signal focus:outline-none transition-shadow">
                    </div>
                    <div>
                        <label for="message" class="block text-xs font-endpoint text-slate mb-1.5">message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your project..."
                                  class="w-full border border-line rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-signal focus:border-signal focus:outline-none transition-shadow"></textarea>
                    </div>
                    <button type="button"
                            class="w-full bg-ink text-white font-semibold py-3 rounded-lg hover:bg-inkoff press transition-all">
                        Send Message
                    </button>
                    <p class="text-xs text-gray-400 text-center">
                        This form is for UI demonstration only and is not yet connected to a backend.
                    </p>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-5">
                <div class="reveal lift p-6 bg-surface border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:1">
                    <span class="endpoint-tag mb-3">/address</span>
                    <p class="text-slate text-sm mt-2">{{ $contactInfo['address'] }}</p>
                </div>
                <div class="reveal lift p-6 bg-surface border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:2">
                    <span class="endpoint-tag mb-3">/email</span>
                    <p class="text-slate text-sm mt-2">{{ $contactInfo['email'] }}</p>
                </div>
                <div class="reveal lift p-6 bg-surface border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:3">
                    <span class="endpoint-tag mb-3">/phone</span>
                    <p class="text-slate text-sm mt-2">{{ $contactInfo['phone'] }}</p>
                </div>

                <!-- Embedded Map (optional) -->
                <div class="reveal rounded-2xl overflow-hidden border border-line h-56" style="--d:4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.8440116778943!2d121.39505807587071!3d14.262317785267696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397e30ce40712f3%3A0xc22f2f4f3751fc75!2sLaguna%20State%20Polytechnic%20University%20-%20Santa%20Cruz%20(Main)%20Campus!5e0!3m2!1sen!2sph!4v1786439765829!5m2!1sen!2sph"
                        width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"
                        title="Company Location Map">
                    </iframe>
                </div>

                <!-- Social Media Links -->
                <div class="reveal lift p-6 bg-surface border border-line rounded-2xl hover:border-signal/40 transition-colors" style="--d:5">
                    <span class="endpoint-tag mb-3">/social</span>
                    <div class="flex space-x-4 text-sm mt-3">
                        @foreach ($contactInfo['social'] as $platform => $url)
                            <a href="{{ $url }}" target="_blank" rel="noopener"
                               class="text-signal hover:underline font-medium">
                                {{ $platform }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
