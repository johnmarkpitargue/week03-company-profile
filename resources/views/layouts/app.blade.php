<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vanguard Solutions') | Company Profile</title>

    <!-- Set theme before first paint to avoid a light/dark flash -->
    <script>
        (function () {
            const saved = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (saved === 'dark' || (!saved && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        ink:    '#0C1222',
                        inkoff: '#141B2E',
                        signal: '#14B8A6',
                        amber:  '#F59E0B',

                        paper:   'rgb(var(--paper) / <alpha-value>)',
                        surface: 'rgb(var(--surface) / <alpha-value>)',
                        slate:   'rgb(var(--slate) / <alpha-value>)',
                        line:    'rgb(var(--line) / <alpha-value>)',
                        heading: 'rgb(var(--heading) / <alpha-value>)',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                },
            },
        }
    </script>

    <style>
        :root {
            --paper:   246 247 251;
            --surface: 255 255 255;
            --slate:   60 66 87;
            --line:    226 228 236;
            --heading: 12 18 34;
        }
        html.dark {
            --paper:   8 11 20;
            --surface: 19 26 43;
            --slate:   184 192 212;
            --line:    35 43 64;
            --heading: 246 247 251;
        }

        body { font-family: 'Inter', sans-serif; transition: background-color 0.3s ease, color 0.3s ease; }
        h1, h2, h3, .font-display { font-family: 'Space Grotesk', sans-serif; }
        .font-endpoint { font-family: 'IBM Plex Mono', monospace; }

        .dot-grid {
            background-image: radial-gradient(rgba(20, 184, 166, 0.35) 1px, transparent 1px);
            background-size: 22px 22px;
            animation: drift 40s linear infinite;
        }
        @keyframes drift {
            from { background-position: 0 0; }
            to   { background-position: 220px 220px; }
        }

        .glow {
            position: absolute;
            width: 640px;
            height: 640px;
            border-radius: 999px;
            background: radial-gradient(circle, rgba(20,184,166,0.22) 0%, transparent 70%);
            animation: breathe 8s ease-in-out infinite;
            pointer-events: none;
        }
        @keyframes breathe {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50%      { transform: scale(1.12); opacity: 1; }
        }

        .endpoint-tag {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.72rem;
            letter-spacing: 0.02em;
            color: #14B8A6;
            border: 1px solid rgba(20, 184, 166, 0.35);
            background: rgba(20, 184, 166, 0.08);
            padding: 0.2rem 0.6rem;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .endpoint-tag::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 999px;
            background: #14B8A6;
            display: inline-block;
            box-shadow: 0 0 0 0 rgba(20, 184, 166, 0.6);
            animation: pulse-dot 2.2s ease-out infinite;
        }
        @keyframes pulse-dot {
            0%   { box-shadow: 0 0 0 0 rgba(20, 184, 166, 0.55); }
            70%  { box-shadow: 0 0 0 7px rgba(20, 184, 166, 0); }
            100% { box-shadow: 0 0 0 0 rgba(20, 184, 166, 0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 0.6s ease, transform 0.6s ease;
            transition-delay: calc(var(--d, 0) * 80ms);
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-in {
            opacity: 0;
            transform: translateY(14px);
            animation: hero-rise 0.7s ease forwards;
            animation-delay: calc(var(--d, 0) * 120ms);
        }
        @keyframes hero-rise {
            to { opacity: 1; transform: translateY(0); }
        }

        .lift {
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .lift:hover {
            transform: translateY(-4px);
        }

        .press:active { transform: scale(0.97); }

        .theme-toggle {
            position: relative;
            width: 44px;
            height: 24px;
            border-radius: 999px;
            background: rgb(var(--line));
            border: 1px solid rgb(var(--line));
            cursor: pointer;
            transition: background-color 0.25s ease;
            flex-shrink: 0;
        }
        .theme-toggle .knob {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 18px;
            height: 18px;
            border-radius: 999px;
            background: #0C1222;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.25s ease;
        }
        html.dark .theme-toggle .knob {
            transform: translateX(20px);
            background: #14B8A6;
        }
        .theme-toggle svg { width: 11px; height: 11px; }

        ::selection { background: #14B8A6; color: #0C1222; }

        @media (prefers-reduced-motion: reduce) {
            *, .dot-grid, .glow, .endpoint-tag::before, .reveal, .hero-in {
                animation: none !important;
                transition: none !important;
            }
            .reveal, .hero-in { opacity: 1 !important; transform: none !important; }
        }
    </style>

    @stack('styles')
</head>
<body class="bg-paper text-slate flex flex-col min-h-screen antialiased">

    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window) || items.length === 0) {
                items.forEach(el => el.classList.add('is-visible'));
                return;
            }
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
            items.forEach(el => observer.observe(el));

            document.querySelectorAll('.theme-toggle').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('theme', isDark ? 'dark' : 'light');
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>