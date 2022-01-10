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
    <body class="selection:bg-pink-200">
        <x-top-nav activeMenu="contact" />

        <main id="contact" class="min-h-screen h-full">
            <div class="relative top-40 w-min bg-white px-20 py-5 mx-auto">
                <h1 class="text-4xl uppercase font-display tracking-widest text-pink-600">{{ __('Contact')}}</h1>
            </div>

            <section class="mt-60 bg-white w-3/5 mx-auto p-10">
                <h2 class="font-display font-thin text-3xl uppercase text-pink-600 mb-2">{{ __('Contact form') }}</h2>
                <div class="prose min-w-full mb-10">
                    <p>{{ __('If you want to contact me, please fill up this contact form. I will reply as soon as possible.') }}</p>
                </div>

                <form action="{{ request()->route()->uri() }}" method="post" class="flex flex-col space-y-7">                    
                    <!-- Name -->
                    <label class="flex flex-col space-y-2">
                        <span class="font-display uppercase text-pink-600 text-lg peer-required:after:content-['*']">{{ __('Your name') }}:</span>
                        <input type="text" name="name" required minlength="3" maxlength="300" placeholder="{{ __('e.g. Igor Stravinskij')}}" class="peer border p-2 focus:outline focus:outline-1 focus:outline-pink-600 hover:bg-gray-50 transition-all ease-in duration-200">
                        <small class="invisible peer-invalid:visible text-red-500 font-semibold">Please enter your name</small>
                    </label>

                    <!-- Email -->
                    <label class="flex flex-col space-y-2">
                        <span class="font-display uppercase text-pink-600 text-lg">{{ __('Your email') }}:</span>
                        <input type="email" name="email" required minlength="3" maxlength="300" placeholder="{{ __('e.g. igor@stravinskij.com')}}" class="peer border p-2 focus:outline focus:outline-1 focus:outline-pink-600 hover:bg-gray-50 transition-all ease-in duration-200">
                        <small class="invisible peer-invalid:visible text-red-500 font-semibold">Please enter valid email address</small>
                    </label>

                    <!-- Message -->
                    <label class="flex flex-col space-y-2">
                        <span class="font-display uppercase text-pink-600 text-lg">{{ __('Your message') }}:</span>
                        <textarea name="message" required minlength="3" maxlength="1000" placeholder="{{ __('e.g. Some nice message!')}}" class="peer border p-2 focus:outline focus:outline-1 focus:outline-pink-600 hover:bg-gray-50 transition-all ease-in duration-200"></textarea>
                        <small class="invisible peer-invalid:visible text-red-500 font-semibold">Please enter some message</small>
                    </label> 
                    
                    <!-- GDPR Consent -->                
                    <label class="flex space-x-2 items-center">
                        <span class="sr-only">{{ __('GDPR Consent') }}:</span>                                                    
                            <input type="checkbox" name="gdprConsent" required class="peer border p-2 focus:outline focus:outline-1 focus:outline-pink-600 hover:bg-gray-50 c transition-all ease-in duration-200">
                        <span class="prose min-w-fit">
                            I consent with the <a href="{{ URL::route('privacy-policy') }}" target="__blank">Privacy policy</a>.
                        </span>
                        <small class="invisible peer-invalid:visible text-red-500 font-semibold transition-all ease-in duration-200">You must consent with the gdpr policy in order to get your message processed.</small>
                    </label>
                    
                    <button class="block place-self-start p-2 text-white text-center font-display tracking-wide uppercase bg-pink-600 hover:bg-pink-700 focus:outline-none focus:bg-pink-700 active:bg-pink-800 shadow-lg transition-all ease-in duration-200">
                        <span class="mr-1">
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Odeslat
                    </button>
                </form>
            </section>
        </main>

        <x-footer />
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>