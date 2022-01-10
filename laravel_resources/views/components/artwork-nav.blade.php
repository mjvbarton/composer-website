<!-- Artwork Nav -->
<nav id="artworkNav" class="basis-1/6 bg-cyan-500"> 
    <div class="p-5 mx-auto">
        <h2 class="text-3xl text-white font-display font-thin uppercase">Artwork database</h2>
    </div>

    <!-- Artwork search -->
    <div class="p-5">
        <form action="#" method="GET" class="flex flex-col">
            <label class="relative block">
                <span class="sr-only">{{ __('Search') }}</span>
                <span class="absolute inset-y-0 left-0 flex  items-center pl-2 text-white">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" name="search" placeholder="Search the artwork" class="placeholder:italic text-white placeholder:text-cyan-100 block w-full bg-cyan-500 focus:bg-cyan-600 hover:bg-cyan-600 focus:outline-none border-b border-cyan-100 py-2 pl-9 pr-3 transition-all ease-in duration-200">                            
            </label>
            <button type="submit" value="submit" class="p-2 bg-white font-display uppercase my-2 place-self-end text-gray-900 hover:bg-gray-100 active:bg-gray-200 shadow hover:shadow-xl transition-all ease-in duration-200">                            
                {{ __('Search') }}
            </button>                        
        </form>
    </div>

    <div class="p-5">
        <h3 class="text-white uppercase font-display font-thin tracking-widest text-xl">{{ __('Categories') }}</h3>
        <ul class="text-white font-display uppercase text-lg my-2">
            <li class="border-cyan-100 border-b last:border-b-0">
                <a href="#" class="block py-2 w-full h-full hover:bg-cyan-600 focus:outline-none focus:bg-cyan-600 active:bg-cyan-700 transition-all ease-in duration-200">
                    <span class="bg-white text-xs py-0.5 p-2 text-gray-900 font-sans font-bold rounded-lg mx-1">40</span>
                    {{ __('Orchestral') }}                                
                </a>
            </li>
            <li class="border-cyan-100 border-b last:border-b-0 flex items-center">
                <a href="#" class="block py-2 w-full h-full hover:bg-cyan-600 focus:outline-none focus:bg-cyan-600 active:bg-cyan-700 transition-all ease-in duration-200">
                    <span class="bg-white text-xs py-0.5 p-2 text-gray-900 font-sans font-bold rounded-lg mx-1">5</span>
                    {{ __('Chamber') }}                                
                </a>
            </li>
            <li class="border-cyan-100 border-b last:border-b-0">
                <a href="#" class="block py-2 w-full h-full hover:bg-cyan-600 focus:outline-none focus:bg-cyan-600 active:bg-cyan-700 transition-all ease-in duration-200">
                    <span class="bg-white text-xs py-0.5 p-2 text-gray-900 font-sans font-bold rounded-lg mx-1">5</span>
                    {{ __('Piano') }}                                
                </a>
            </li>
            <li class="border-cyan-100 border-b last:border-b-0">
                <a href="#" class="block py-2 w-full h-full hover:bg-cyan-600 focus:outline-none focus:bg-cyan-600 active:bg-cyan-700 transition-all ease-in duration-200">
                    <span class="bg-white text-xs py-0.5 p-2 text-gray-900 font-sans font-bold rounded-lg mx-1">5</span>
                    {{ __('Vocal') }}                                
                </a>
            </li>
            <li class="border-cyan-100 border-b last:border-b-0">
                <a href="#" class="block py-2 w-full h-full hover:bg-cyan-600 focus:outline-none focus:bg-cyan-600 active:bg-cyan-700 transition-all ease-in duration-200">
                    <span class="bg-white text-xs py-0.5 p-2 text-gray-900 font-sans font-bold rounded-lg mx-1">55</span>
                    {{ __('All') }}                                
                </a>
            </li>                      
        </ul>
    </div>
</nav>