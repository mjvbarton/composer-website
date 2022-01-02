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
    <body>
        <x-top-nav activeMenu="contact" />

        <main id="contact" class="min-h-screen">
            <div class="relative top-40 w-min bg-white px-20 py-5 mx-auto">
                <h1 class="text-4xl uppercase font-display tracking-widest text-pink-600">{{ __('Contact')}}</h1>
            </div>

            <section class="relative top-60 bg-white w-3/5 mx-auto p-10">
                <h2 class="font-display font-thin text-3xl uppercase text-pink-600 mb-2">{{ __('Contact form') }}</h2>
                <div class="prose min-w-full mb-10">
                    <p>{{ __('If you want to contact me, please fill up this contact form. I will reply as soon as possible.') }}</p>
                </div>

                <form action="{{ request()->route()->uri() }}" method="post">
                    <div class="flex flex-col space-y-7">
                        <div class="flex flex-col">
                            <label for="contactName" class="font-display uppercase text-pink-600 text-lg">{{ __('Your name') }}:</label>
                            <input type="text" name="name" id="contactName" required placeholder="{{ __('e.g. Igor Stravinskij')}}">
                            <small class="text-red-500 font-semibold">Please fill up this field!</small>
                        </div>
                        <div class="flex flex-col">
                            <label for="contactEmail" class="font-display uppercase text-pink-600 text-lg">{{ __('Your email') }}:</label>
                            <input type="email" name="email" id="contactEmail" required placeholder="{{ __('e.g. igor@stravinskij.com')}}">
                            <small class="text-red-500 font-semibold">Please fill up this field!</small>
                        </div> 
                        <div class="flex flex-col">
                            <label for="contactEmail" class="font-display uppercase text-pink-600 text-lg">{{ __('Your message') }}:</label>
                            <textarea name="message" id="contactMessage" required placeholder="{{ __('e.g. Hello there!') }}"></textarea>
                            <small class="text-red-500 font-semibold">Please fill up this field!</small>
                        </div>                  
                        <div class="flex flex-col">                            
                            <input type="checkbox" id="gdprConsent" name="gdprConsent" required value="I consent">
                            <small class="text-red-500 font-semibold">Please fill up this field!</small>
                        </div>
                    </div>
                </form>
            </section>
        </main>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>