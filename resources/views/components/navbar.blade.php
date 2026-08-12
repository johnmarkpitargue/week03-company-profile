<nav class="bg-paper/90 backdrop-blur border-b border-line sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 font-display font-semibold text-lg text-heading group">
                <img src="{{ asset('images/logo.svg') }}" alt="Vanguard Solutions logo" class="w-8 h-8 rounded-lg transition-transform group-hover:scale-105">
                <span>Vanguard Solutions<span class="text-signal">.</span></span>
            </a>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center gap-3">
                <div class="flex items-center space-x-1 font-endpoint text-xs">
                    <a href="{{ route('home') }}"
                       class="px-3 py-1.5 rounded-full transition {{ request()->routeIs('home') ? 'bg-ink text-white' : 'text-slate hover:text-heading' }}">
                        /home
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-3 py-1.5 rounded-full transition {{ request()->routeIs('about') ? 'bg-ink text-white' : 'text-slate hover:text-heading' }}">
                        /about
                    </a>
                    <a href="{{ route('services') }}"
                       class="px-3 py-1.5 rounded-full transition {{ request()->routeIs('services') ? 'bg-ink text-white' : 'text-slate hover:text-heading' }}">
                        /services
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-3 py-1.5 rounded-full transition {{ request()->routeIs('contact') ? 'bg-ink text-white' : 'text-slate hover:text-heading' }} ml-2 !bg-signal !text-heading font-medium">
                        /contact
                    </a>
                </div>

                <!-- Theme toggle -->
                <button id="theme-toggle-desktop" class="theme-toggle" aria-label="Toggle dark mode" type="button">
                    <span class="knob">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"/>
                            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                        </svg>
                    </span>
                </button>
            </div>

            <!-- Mobile controls -->
            <div class="flex items-center gap-3 md:hidden">
                <button id="theme-toggle-mobile" class="theme-toggle" aria-label="Toggle dark mode" type="button">
                    <span class="knob">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"/>
                            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                        </svg>
                    </span>
                </button>
                <button id="menu-btn" class="text-heading focus:outline-none" aria-label="Toggle menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-1 font-endpoint text-sm">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg {{ request()->routeIs('home') ? 'bg-ink text-white' : 'text-slate' }}">/home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg {{ request()->routeIs('about') ? 'bg-ink text-white' : 'text-slate' }}">/about</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg {{ request()->routeIs('services') ? 'bg-ink text-white' : 'text-slate' }}">/services</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg {{ request()->routeIs('contact') ? 'bg-ink text-white' : 'text-slate' }}">/contact</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        const expanded = this.getAttribute('aria-expanded') === 'true';
        menu.classList.toggle('hidden');
        this.setAttribute('aria-expanded', String(!expanded));
    });
</script>