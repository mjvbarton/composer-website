<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- TODO: Fix the title to be dynamic -->
        <title>{{ __('Biography') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- TODO: Optimalize font loading! -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <x-top-nav activeMenu="biography"></x-top-nav>
        
        <main id="biography" class="mt-20 py-20">                        
            <div class="w-min bg-white px-20 py-5 mx-auto">
                <h1 class="text-4xl uppercase font-display tracking-widest text-lime-600">{{ __('Biography')}}</h1>
            </div>
            <div class="mt-20 bg-white p-10 mx-auto w-2/3 flex space-x-10">
                <figure class="basis-1/3">
                    <img src="{{ asset('images/biography/profile-photo.jpg') }}" alt="profile photo">
                </figure>
                <section class="basis-2/3 prose-sm">
                    <h2 class="uppercase font-display font-thin text-2xl text-lime-700">Matěj Josef Václav Bartoň (*1999)</h2>                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Erat nam at lectus urna duis convallis convallis tellus id. Amet consectetur adipiscing elit pellentesque habitant morbi. Gravida cum sociis natoque penatibus et. Tempor nec feugiat nisl pretium fusce. Feugiat nibh sed pulvinar proin gravida. Faucibus turpis in eu mi bibendum neque egestas. Hendrerit dolor magna eget est lorem ipsum dolor. Imperdiet proin fermentum leo vel orci. Pellentesque eu tincidunt tortor aliquam nulla. Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. Augue neque gravida in fermentum. Tristique senectus et netus et. Luctus accumsan tortor posuere ac ut consequat. Tristique risus nec feugiat in fermentum posuere urna nec.
                    </p>
                    <p>
                        Vulputate enim nulla aliquet porttitor lacus. Enim diam vulputate ut pharetra. Aliquam faucibus purus in massa tempor nec feugiat. Tellus pellentesque eu tincidunt tortor. Elit ut aliquam purus sit amet luctus venenatis lectus. Ullamcorper a lacus vestibulum sed arcu non. Enim facilisis gravida neque convallis. Mollis nunc sed id semper risus in hendrerit gravida. Risus viverra adipiscing at in tellus. Vitae nunc sed velit dignissim sodales ut. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Eget nunc lobortis mattis aliquam faucibus purus. Nulla at volutpat diam ut venenatis tellus in. Hac habitasse platea dictumst vestibulum rhoncus est. Id interdum velit laoreet id donec ultrices tincidunt arcu.
                    </p>                    
                </section>                
            </div>            
        </main>

        <div class="bg-gradient-to-b from-lime-800 to-green-900 p-20 text-white">
            <aside>
                <h2 class="font-display uppercase font-thin text-3xl">{{ __('Awards and prizes') }}</h2>
                <ul class="list-disc list-inside pl-10 text-lg prose-li:my-5">
                    <li>2020 Aliquam faucibus purus in massa tempor</li>
                    <li>2021 Enim diam vulputate ut pharetra</li>
                    <li>2022 Erat nam at lectus urna duis</li>                
                </ul>
            </aside>            
        </div>
        

        <section class="py-10 bg-lime-200">
            <h2 class="text-lime-800 font-display font-thin uppercase text-center text-3xl">{{ __('Mentions') }}</h2>
            <div class="flex flex-col place-items-center space-y-20">
                <article class="bg-white rotate-2 p-16 min-w-fit w-3/5 m-10 shadow-lg shadow-lime-900">   
                    <div class="font-display text-gray-400 uppercase text-sm mb-5">Klasikaplus.cz, 13.ledna 2022</div>
                    <h3 class="text-lime-700 font-display uppercase text-2xl mb-3">Duis condimentum varius</h3> 
                    <div class="prose prose-lg min-w-full">
                        <p>
                            Duis condimentum varius ex vel tempus. Ut pretium quam at ligula ornare posuere. Suspendisse vulputate laoreet vulputate. Vivamus nec condimentum urna. Fusce sed quam gravida, fermentum urna sit amet, luctus justo. Nullam nibh ligula, porta non tellus vel, blandit pulvinar eros. 
                        </p>
                        <a href="#" target="__blank" noreferrer noopener>{{ __('Read more') }}</a>
                    </div>
                </article>
                <article class="bg-white -rotate-2 p-16 min-w-fit w-3/5 m-10 shadow-lg shadow-lime-900">   
                    <div class="font-display text-gray-400 uppercase text-sm mb-5">Klasikaplus.cz, 20. listopadu 2021</div>
                    <h3 class="text-lime-700 font-display uppercase text-2xl mb-3">Risus nullam eget felis</h3> 
                    <div class="prose prose-lg min-w-full">
                        <p>
                            Risus nullam eget felis eget nunc. Placerat duis ultricies lacus sed turpis tincidunt id aliquet risus. Mi sit amet mauris commodo quis imperdiet massa tincidunt. Dictum fusce ut placerat orci nulla pellentesque. Aliquam sem fringilla ut morbi tincidunt augue. 
                        </p>
                        <a href="#" target="__blank" noreferrer noopener>{{ __('Read more') }}</a>
                    </div>
                </article>
                <article class="bg-white rotate-2 p-16 min-w-fit w-3/5 m-10 shadow-lg shadow-lime-900">   
                    <div class="font-display text-gray-400 uppercase text-sm mb-5">operaplus.cz, 10. srpna 2021</div>
                    <h3 class="text-lime-700 font-display uppercase text-2xl mb-3">Mi eget mauris pharetra</h3> 
                    <div class="prose prose-lg min-w-full">
                        <p>
                            Mi eget mauris pharetra et ultrices neque ornare aenean euismod. Nibh cras pulvinar mattis nunc sed blandit. Id cursus metus aliquam eleifend mi in nulla. Nulla facilisi morbi tempus iaculis. Tellus elementum sagittis vitae et leo duis ut diam. Vestibulum rhoncus est pellentesque elit. Molestie nunc non blandit massa enim nec dui nunc. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit.
                        </p>
                        <a href="#" target="__blank" noreferrer noopener>{{ __('Read more') }}</a>
                    </div>
                </article>
                <article class="bg-white -rotate-2 p-16 min-w-fit w-3/5 m-10 shadow-lg shadow-lime-900">   
                    <div class="font-display text-gray-400 uppercase text-sm mb-5">Klasikaplus.cz, 15. května 2021</div>
                    <h3 class="text-lime-700 font-display uppercase text-2xl mb-3">Neque convallis</h3> 
                    <div class="prose prose-lg min-w-full">
                        <p>
                            Neque convallis a cras semper auctor neque vitae tempus. Massa vitae tortor condimentum lacinia quis. Accumsan in nisl nisi scelerisque. Neque volutpat ac tincidunt vitae semper quis. Bibendum est ultricies integer quis auctor elit sed vulputate mi. Scelerisque fermentum dui faucibus in ornare quam viverra. 
                        </p>
                        <a href="#" target="__blank" noreferrer noopener>{{ __('Read more') }}</a>
                    </div>
                </article>
                <button class="p-5 hover:bg-lime-600 outline-none focus:bg-lime-600 bg-lime-900 text-white font-display uppercase tracking-widest transition ease-in duration-200">{{ __('Load more') }}</button>
            </div>
        </section>

        <section class="bg-gray-100 py-20 px-10 text-gray-800">
            <h2 class="font-display font-thin text-3xl uppercase text-lime-700 mb-7">{{ __('Press kit') }}</h2>
            <ul class="list-inside pl-10 text-lg prose-li:mb-3">
               <li>
                   <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-gray-800">
                        <i class="far fa-file-pdf"></i>
                        {{ __('Curriculum Vitae (czech)') }}
                   </a>
                </li>
                <li>
                    <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-gray-800">
                        <i class="far fa-file-pdf"></i>
                        {{ __('Curriculum Vitae (english)') }}
                    </a>
                 </li>
                 <li>
                    <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-gray-800">
                        <i class="far fa-image"></i>
                        {{ __('Profile photo 1') }}
                    </a>
                 </li>
                 <li>
                    <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-gray-800">
                        <i class="far fa-image"></i>
                        {{ __('Profile photo 2') }}
                    </a>
                 </li>
            </ul>
        </section>

        <x-footer></x-footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>