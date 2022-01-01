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
        <x-top-nav activeMenu="biography"></x-top-nav>
        
        <main>            
            <img src="{{ asset('img/biography/background1.jpg') }}" alt="background1" class="absolute top-0 grayscale">
            <div class="relative bg-white top-40 w-min px-20 py-5 mx-auto z-10">
                <h1 class="text-4xl uppercase font-display tracking-widest text-lime-600">{{ __('Biography')}}</h1>
            </div>
            <div class="relative bg-white top-60 z-10 px-32 py-10 mx-auto w-2/3 flex space-x-20">
                <figure>
                    <img src="{{ asset('img/biography/profile-photo.jpg') }}" alt="profile photo">
                </figure>
                <section class="prose">
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
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>