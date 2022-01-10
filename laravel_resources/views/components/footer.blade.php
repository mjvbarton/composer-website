<footer class="bg-gray-800 text-gray-300 p-32 flex flex-col place-items-center">
    <section class="text-center w-1/2">
        <h2 class="font-display text-2xl uppercase font-thin mb-3">{{ __('Do you like my work? Become my sponsor!') }}</h2>
        <p class="text-sm">
            Nec ultrices dui sapien eget mi proin sed libero. Convallis a cras semper auctor neque vitae. Nisi lacus sed viverra tellus in hac habitasse. Cursus risus at ultrices mi tempus imperdiet nulla. Sed adipiscing diam donec adipiscing. Egestas sed sed risus pretium quam vulputate dignissim suspendisse.
        </p>
        <img src="{{ asset('images/util/paypal-placeholder.png') }}" alt="paypal placeholder" class="w-40 mx-auto mt-10 cursor-pointer">
    </section>    
    <nav id="social-networks" class="my-10">
        <ul class="flex space-x-5 text-2xl">
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Facebook</span>
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Instagram</span>
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Twitter</span>
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Youtube</span>
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Soundcloud</span>
                    <i class="fab fa-soundcloud"></i>
                </a>
            </li>
            <li>
                <a href="#" class="outline-none focus:text-white hover:text-white">
                    <span class="sr-only">Spotify</span>
                    <i class="fab fa-spotify"></i>
                </a>
            </li>            
        </ul>
    </nav>
    <div class="text-xs text-center">        
        <p>
            &copy; {{ now()->isoFormat('YYYY') }} Matěj Bartoň, {{ __('All rights reserved.') }}
        </p>
    </div>
    <ul class="flex space-x-2 mx-auto mt-5 text-xs">
        <li>
            <a href="{{ route('privacy-policy') }}" class="hover:text-white focus:text-white outline-none">
                {{ __('Privacy policy') }}
            </a>
        </li>
        <li>
            <a href="{{ route('cookie-policy') }}" class="hover:text-white focus:text-white outline-none">
                {{ __('Cookie policy') }}
            </a>
        </li>
    </ul>
    <button id="back-to-top" class="text-sm font-display font-thin uppercase hover:text-white mt-10">
        <i class="fas fa-long-arrow-alt-up"></i>
        {{ __('Back to top') }}
        <i class="fas fa-long-arrow-alt-up"></i>
    </button>
</footer>