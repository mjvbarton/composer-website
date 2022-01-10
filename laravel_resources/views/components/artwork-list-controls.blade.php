<!-- Artwork List Controls -->
<nav id="artworkListControls" class="flex py-2 mx-10 my-5">

    <!-- Order toggle -->
    <div id="artwork-order-options" class="flex items-center space-x-2">
        <h3 class="block font-display text-cyan-500 uppercase tracking-wider">{{ __('Order by') }}:</h3>
        <label>
            <input type="radio" name="orderby" value="name-desc" class="peer hidden" checked="true">
            <div class="bg-white shadow-lg hover:shadow-xl p-2 text-center cursor-pointer hover:bg-gray-100 peer-active:bg-gray-200 peer-checked:hover:bg-cyan-600 peer-checked:active:bg-cyan-700 peer-checked:bg-cyan-500 peer-checked:text-white transition-all ease-in duration-200">
                {{ __('Latest premiere') }}                                
            </div>
        </label>
        <label>
            <input type="radio" name="orderby" value="az" class="peer hidden">
            <div class="bg-white shadow-lg hover:shadow-xl p-2 text-center cursor-pointer hover:bg-gray-100 peer-active:bg-gray-200 peer-checked:hover:bg-cyan-600 peer-checked:active:bg-cyan-700 peer-checked:bg-cyan-500 peer-checked:text-white transition-all ease-in duration-200">
                {{ __('Piece title') }}
                <span class="ml-1 font-display">
                    <i class="fas fa-sort-alpha-down"></i>
                </span>
            </div>
        </label>
        <label>
            <input type="radio" name="orderby" value="name-desc" class="peer hidden">
            <div class="bg-white shadow-lg hover:shadow-xl p-2 text-center cursor-pointer hover:bg-gray-100 peer-active:bg-gray-200 peer-checked:hover:bg-cyan-600 peer-checked:active:bg-cyan-700 peer-checked:bg-cyan-500 peer-checked:text-white transition-all ease-in duration-200">
                {{ __('Piece title') }}
                <span class="ml-1 font-display">                                    
                    <i class="fas fa-sort-alpha-down-alt"></i>                                    
                </span>
            </div>
        </label>
        <label>
            <input type="radio" name="orderby" value="name-desc" class="peer hidden">
            <div class="bg-white shadow-lg hover:shadow-xl p-2 text-center cursor-pointer hover:bg-gray-100 peer-active:bg-gray-200 peer-checked:hover:bg-cyan-600 peer-checked:active:bg-cyan-700 peer-checked:bg-cyan-500 peer-checked:text-white transition-all ease-in duration-200">
                {{ __('Opus number') }}
                <span class="ml-1 font-display">                                    
                    <i class="fas fa-sort-numeric-down"></i>                                    
                </span>
            </div>
        </label>
        <label>
            <input type="radio" name="orderby" value="name-desc" class="peer hidden">
            <div class="bg-white shadow-lg hover:shadow-xl p-2 text-center cursor-pointer hover:bg-gray-100 peer-active:bg-gray-200 peer-checked:hover:bg-cyan-600 peer-checked:active:bg-cyan-700 peer-checked:bg-cyan-500 peer-checked:text-white transition-all ease-in duration-200">
                {{ __('Opus number') }}
                <span class="ml-1 font-display">                                    
                    <i class="fas fa-sort-numeric-down-alt"></i>                                    
                </span>
            </div>
        </label>
    </div>

    <!-- Pagination -->
    <div class="grow flex items-center justify-end space-x-5">
        <button disabled class="text-cyan-500 hover:text-cyan-600 focus:text-cyan-600 active:text-cyan-700 disabled:text-gray-400 transition-all ease-in duration-200">
            <span class="sr-only">{{ __('pagination.previous') }}</span>
            <i class="fas fa-chevron-left"></i>    
        </button>
        <div class="text-xl font-display font-bold text-cyan-500">
            <span class="sr-only">{{ __('Active page') }}</span>
            1
        </div>
        <button class="text-white py-1 px-2 rounded-full bg-cyan-500 hover:bg-cyan-600 focus:bg-cyan-600 active:bg-cyan-700 disabled:text-gray-400 disabled:bg-none transition-all ease-in duration-200">
            <span class="sr-only">{{ __('pagination.next') }}</span>
            <i class="fas fa-chevron-right"></i>    
        </button>
    </div>
</nav>