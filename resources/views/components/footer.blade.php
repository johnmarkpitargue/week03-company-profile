<footer class="bg-ink text-gray-400 mt-auto">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- About -->
        <div>
            <div class="flex items-center gap-2.5 font-display font-semibold text-lg text-white mb-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Vanguard Solutions logo" class="w-8 h-8 rounded-lg">
                <span>Vanguard Solutions<span class="text-signal">.</span></span>
            </div>
            <p class="text-sm text-gray-400 leading-relaxed">
                Building digital solutions for tomorrow &mdash; web, mobile, and cloud
                engineering for teams that move fast.
            </p>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="endpoint-tag mb-4">/contact-info</h3>
            <ul class="text-sm space-y-2 text-gray-400">
                <li>1st Gate, Laguna State Polytechnic University, Sta Cruz Laguna, PH</li>
                <li>hello@vanguardsolutions.com</li>
                <li>+63 912 345 6789</li>
            </ul>
        </div>

        <!-- Social -->
        <div>
            <h3 class="endpoint-tag mb-4">/social</h3>
            <div class="flex flex-col space-y-2 text-sm">
                <a href="#" class="text-gray-400 hover:text-signal transition w-fit">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-signal transition w-fit">LinkedIn</a>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 py-5 text-center text-xs font-endpoint text-gray-500">
        &copy; {{ date('Y') }} Vanguard Solutions &mdash; all rights reserved
    </div>
</footer>
