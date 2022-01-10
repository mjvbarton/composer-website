<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- TODO: Fix the title to be dynamic -->
        <title>{{ __('News') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- TODO: Optimalize font loading! -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body class="bg-gradient-to-r from-orange-400 to-orange-600">
        <x-top-nav activeMenu="news"></x-top-nav>

        <main class="mt-20 py-20">
            <div class="w-min bg-white px-20 py-5 mx-auto">
                <h1 class="text-4xl uppercase font-display tracking-widest text-orange-600">{{ __('News')}}</h1>
            </div>

            <!-- Article box -->
            <div class="mt-20 mx-auto w-4/5 flex flex-col space-y-20">
                
                <!-- Article 1 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">In pellentesque magna</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                In pellentesque magna quis diam tempor laoreet. Phasellus purus tellus, tempus in lectus at, fringilla sollicitudin nisl. Quisque viverra est vel metus semper, at dapibus magna auctor. Cras a lorem et tellus accumsan viverra ac vitae lectus. Praesent eu velit id lectus elementum porta. Sed eu turpis fermentum, fermentum lectus in, auctor mauris. Etiam ut tortor quis dui malesuada ultricies ut non metus. Vivamus ac risus et odio tempor aliquam nec quis massa. Proin non neque interdum, placerat metus sagittis, finibus diam. Donec molestie neque a nulla tristique dictum. Aenean sed ornare metus.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article1.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>  

                <!-- Article 2 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Praesent iaculis odio</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Praesent iaculis odio tellus, sed aliquet nisl egestas ut. Proin quis lacus aliquam, scelerisque purus ac, cursus magna. Duis quis augue a ligula pretium convallis a et eros. Curabitur eleifend quam risus, at vestibulum mi convallis sit amet. Ut dapibus efficitur purus ac consequat. Aenean luctus eu nulla non iaculis. In quam libero, convallis vitae imperdiet et, lacinia eget sem. Curabitur ullamcorper varius lacinia. Praesent molestie velit in nulla blandit commodo. 
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article2.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>  

                <!-- Article 3 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Duis vehicula</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Duis vehicula sit amet lorem eget tristique. Duis interdum, neque sed tincidunt tincidunt, nibh elit pulvinar ex, sit amet finibus nisi orci bibendum justo. Integer elementum sapien a nunc auctor, in efficitur neque vehicula. Duis viverra a ante nec aliquam. Nunc quis feugiat est, id interdum purus. Maecenas urna nunc, facilisis in lobortis ac, dictum non elit. Integer semper semper lacinia. Donec pellentesque est non molestie ultricies. Duis quam enim, sollicitudin ut erat ac, lobortis rhoncus sapien.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article3.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>  

                <!-- Article 4 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Sed laoreet tortor</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Sed laoreet tortor id sodales suscipit. Suspendisse diam ipsum, bibendum non odio vel, fermentum mollis nisl. Fusce non lacus ut enim mollis egestas ut non nisl. Aliquam in hendrerit ante, in tempor risus. Vivamus id ex id purus rutrum mollis eget vitae risus. Mauris justo lectus, aliquet eget ipsum in, finibus tristique sapien. Pellentesque pellentesque enim quis placerat bibendum. Proin sed tortor nec ipsum eleifend auctor nec id justo. Sed ultricies aliquam dolor et sagittis. Duis eget tincidunt est. Quisque vitae laoreet elit. Fusce magna est, euismod eu vehicula id, rutrum nec tortor.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article4.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>  

                <!-- Article 5 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Vivamus sagittis</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Vivamus sagittis, dolor id dictum varius, massa mauris sollicitudin sapien, et sagittis nulla eros sit amet sem. Sed lobortis orci sit amet ligula condimentum convallis. Phasellus at tempor arcu. Nam vitae ex posuere libero venenatis tempor a eu velit. Quisque suscipit id odio non consectetur. Nam nec tellus tellus. Vestibulum suscipit ligula at sem dignissim, ac porttitor nisl commodo. Duis et interdum dui, at sagittis risus. Pellentesque vel metus eleifend, pulvinar orci ac, ornare turpis. 
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article5.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>   
                
                <!-- Article 6 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Mauris dapibus nulla nec tortor</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Mauris dapibus nulla nec tortor gravida imperdiet. Phasellus tincidunt arcu nec neque rhoncus, ut faucibus justo tristique. Aliquam tortor mauris, vulputate sed libero quis, dapibus sollicitudin nibh. Duis aliquet quam quis tristique maximus. Morbi ac lobortis ante. Donec pulvinar arcu vitae quam tincidunt ornare. Cras vestibulum mauris at velit molestie, eget eleifend libero tempor. Curabitur tristique urna non est tempus rhoncus. Duis fringilla sit amet ex eget gravida.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article6.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>

                <!-- Article 7 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Nullam sollicitudin</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Nullam sollicitudin odio ac elit vulputate iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum varius tellus a risus sodales eleifend. Sed aliquet leo at magna tempor, non ornare nulla fermentum. Nullam laoreet non arcu in luctus. Praesent finibus scelerisque lorem, eget mollis dui hendrerit bibendum. Nullam faucibus ipsum justo, ac tempor tortor vehicula a. Aenean porta, velit eget laoreet dictum, magna lacus pretium nulla, et bibendum felis orci sit amet dolor.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article7.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>

                <!-- Article 8 -->
                <div class="bg-white flex items-center p-10 space-x-10">
                    <article class="bg-white w-full flex flex-col">       
                        <div class="place-self-start">                 
                            <h2 class="font-display text-orange-600 uppercase text-3xl">Nam sodales</h2>
                            <p class="text-gray-600 font-display uppercase mb-5">
                                13. května 2021
                            </p>
                        </div>
                        <div class="prose min-w-full flex-grow">
                            <p>
                                Nam sodales elit vel nibh porttitor malesuada. Proin rhoncus viverra massa vel finibus. Mauris viverra turpis in tempus congue. Nunc turpis mauris, mollis id nisl et, convallis auctor orci. Nulla porta augue ac libero sollicitudin vulputate. Fusce sed nunc id urna gravida fringilla eu at nunc. Aliquam erat volutpat. Cras in feugiat felis. Vivamus venenatis vulputate purus, eu rutrum metus imperdiet id. Ut sed nulla quam. Aliquam congue laoreet sapien. Sed nunc diam, hendrerit in eros id, mattis condimentum ipsum. In vitae lobortis orci, quis dignissim dui. Vestibulum laoreet est eget dui blandit faucibus.
                            </p>
                        </div>
                        <div class="my-5">
                            <a class="text-orange-600 hover:underline hover:underline-offset-2" href="#">{{ __('Read more') }}</a>
                        </div>
                    </article>
                    <div class="w-3/5">
                        <figure class="aspect-w-16 aspect-h-9">
                            <img src="{{ asset('images/news/articles/article8.jpg') }}" alt="article photo" class="w-full h-full object-center object-cover">
                        </figure>
                    </div>
                </div>
                
                <!-- Pagination -->
                <nav id="article-pagination" role="menubar" class="bg-white p-10 w-min mx-auto flex space-x-2 text-orange-700 font-display">
                    <a aria-label="Go to first page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        <i class="fas fa-fast-backward"></i>
                    </a>
                    <a aria-label="Go to first page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        <i class="fas fa-caret-left"></i>
                    </a>
                    <a aria-label="Go to first page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        1
                    </a>
                    <a aria-label="Go to first page" class="p-5 shadow-lg text-white font-semibold bg-orange-600" href="#">
                        2
                    </a>
                    <a aria-label="Go to first page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        3
                    </a>
                    <a aria-label="Go to the next page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        <i class="fas fa-caret-right"></i>
                    </a>
                    <a aria-label="Go to the last page" class="p-5 shadow-lg bg-orange-200 hover:bg-orange-400" href="#">
                        <i class="fas fa-fast-forward"></i>
                    </a>
                </nav>
            </div>
        </main>

        <x-footer />
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>