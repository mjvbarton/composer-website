<nav id="top-nav" class="fixed top-0 min-w-full z-30 bg-white p-5 font-display font-light text-gray-900 uppercase flex space-x-20 items-center justify-center mx-auto shadow-2xl">

    <!-- Brand -->
    <a id="brand" href="{{ route('homepage') }}" tabindex="-1">
        <div id="brand__title" class="text-2xl tracking-wide">Matěj Josef Václav Bartoň</div>
        <div id="brand__subtitle" class="text-base lowercase text-gray-600 tracking-widest">{{ __('music composer') }}</div>
    </a>            


    <!-- Main Menu -->
    <ul id="main-menu" class="flex space-x-10 items-center my-auto" role="menubar">
        <li role="none">
            <a class="px-2 py-5 hover:border-b-2 hover:border-red-700 focus:border-b-2 focus:border-red-700 outline-none transition-all ease-in duration-200 {{ $activeMenu == 'homepage' ? " text-red-700 border-b-2 border-red-700" : "" }}" href="{{ route('homepage') }}" role="menuitem" tabindex="0">
                {{ __('Home') }}
            </a>
        </li>
        <li role="none">
            <a class="px-2 py-5 hover:border-b-2 hover:border-cyan-500 focus:border-b-2 focus:border-cyan-500 outline-none transition-all ease-in duration-200 {{ $activeMenu == 'artwork' ? " text-cyan-500 border-b-2 border-cyan-500" : "" }}" href="{{ route('artwork') }}" role="menuitem" tabindex="0">
                {{ __('Artwork') }}
            </a>
        </li>
        <li role="none">
            <a class="px-2 py-5 hover:border-b-2 hover:border-lime-600 focus:border-b-2 focus:border-lime-600 outline-none transition-all ease-in duration-200 {{ $activeMenu == 'biography' ? " text-lime-600 border-b-2 border-lime-600" : "" }}" href="{{ route('biography') }}" role="menuitem" tabindex="0">
                {{ __('Biography') }}
            </a>
        </li>
        <li role="none">
            <a class="px-2 py-5 hover:border-b-2 hover:border-orange-500 focus:border-b-2 focus:border-orange-500 outline-none transition-all ease-in duration-200 {{ $activeMenu == 'news' ? " text-orange-500 border-b-2 border-orange-500" : "" }}" href="{{ route('news') }}" role="menuitem" tabindex="0">
                {{ __('News') }}
            </a>
        </li>
        <li role="none">
            <a class="px-2 py-5 hover:border-b-2 hover:border-pink-500 focus:border-b-2 focus:border-pink-500 outline-none transition-all ease-in duration-200 {{ $activeMenu == 'contact' ? " text-pink-500 border-b-2 border-pink-500" : "" }}" href="{{ route('contact') }}" role="menuitem" tabindex="0">
                {{ __('Contact') }}
            </a>
        </li>
    </ul>

    <!-- Language select -->
    <ul id="language-select" class="flex space-x-2 items-center" role="radiogroup">
        <li role="none">
            <a href="#" lang="cs" title="Česky" data-toogle="tooltip" data-placement="bottom" role="radio" class="group" aria-checked="{{ App::getLocale() == 'cs' ? "true" : "false" }}">
                <img src="{{ asset('images/language/cs.png') }}" alt="Czech flag" width="24" height="24">
                <bdi class="hidden">Česky</bdi>
            </a>
        </li>
        <li role="none">
            <a href="#" lang="en" title="English" data-toogle="tooltip" data-placement="bottom" role="radio" class="group" aria-checked="{{ App::getLocale() == 'en' ? "true" : "false" }}">
                <img src="{{ asset('images/language/en.png') }}" alt="English flag" width="24" height="24">
                <bdi class="hidden">English</bdi>
            </a>
        </li>
        <li role="none">
            <a href="#" lang="fr" title="Français" data-toogle="tooltip" data-placement="bottom" role="radio" class="group" aria-checked="{{ App::getLocale() == 'fr' ? "true" : "false" }}">
                <img src="{{ asset('images/language/fr.png') }}" alt="French flag" width="24" height="24">
                <bdi class="hidden">Français</bdi>
            </a>
        </li>
        <li role="none">
            <a href="#" lang="de" title="Deutsch" data-toogle="tooltip" data-placement="bottom" role="radio" class="group" aria-checked="{{ App::getLocale() == 'de' ? "true" : "false" }}">
                <img src="{{ asset('images/language/de.png') }}" alt="German flag" width="24" height="24">
                <bdi class="hidden">Deutsch</bdi>
            </a>
        </li>         
    </ul>
</nav>