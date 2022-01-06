<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- TODO: Fix the title to be dynamic -->
        <title>Homepage</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- TODO: Optimalize font loading! -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body class="bg-orange-200">
        <x-top-nav activeMenu="artwork"></x-top-nav>

        <div class="flex mt-24 min-h-screen">

            <x-artwork-nav />

            <main class="grow bg-gradient-to-b from-cyan-50 to-cyan-200">
                <h1 class="text-cyan-500 tracking-widest uppercase font-display text-4xl mx-10 mt-10">{{ __('List of artwork') }}</h1>
                <div class="prose min-w-fit mx-10 mt-2 mb-10 text-gray-700">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sem lacus, lacinia vitae erat eu, egestas sagittis justo. Donec bibendum aliquam ligula, at placerat lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed dapibus odio sodales turpis vulputate convallis. Maecenas aliquet, ante in accumsan imperdiet, mauris est consequat odio, at maximus augue nisl in neque. Aenean sollicitudin laoreet facilisis. Donec quam libero, elementum vel porta sit amet, varius eget felis.
                    </p>
                </div>
            
                <x-artwork-list-controls />
                
                <!-- Artwork list -->
                <ol class="mt-5 flex flex-col space-y-8 mb-10">

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>


                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>

                    <!-- Artwork list item -->
                    <li class="block bg-white shadow-lg mx-10 p-5 text-gray-700 text-sm prose-strong:text-cyan-600 prose-strong:font-semibold">
                        <h2 class="text-2xl text-cyan-500 font-display font-thin uppercase mb-5">
                            <a href="/artwork/pieces/1" class="hover:text-cyan-600 hover:underline focus:text-cyan-600 focus:underline focus:outline-none active:text-cyan-700 active:underline">
                                Missa Brevis pro smíšený sbor, sóla a varhany, Op. 4
                            </a>
                        </h2>
                        <ul class="flex space-x-10">
                            <li><strong>{{ __('Premiere at') }}:</strong>&nbsp;31. 5. 2020</li>
                            <li><strong>{{ __('Finished at') }}:</strong>&nbsp;9. 5. 2020</li>
                            <li><strong>{{ __('Revisions') }}:</strong>&nbsp;2</li>
                        </ul>                        
                        <div class="flex space-x-10 mt-2">       
                            <div>                    
                                <strong>Category:</strong>&nbsp;vocal
                            </div>
                                  
                            <div class="flex space-x-1">
                                <strong>Instruments:</strong>
                                <ul class="flex">
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">mixed choir</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">soprano singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">alt singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">tenor singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">bass singer</li>
                                    <li before=", " class="before:content-[attr(before)] first:before:content-none">pipe organ</li>
                                </ul>   
                            </div>                     
                        </p>
                    </li>
                </ol>

                
            </main>
        </div>

        <x-footer />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>