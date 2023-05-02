<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url({{'images/Gear.png'}}); background-size: cover;">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current " style="margin-top: 50px; color: rgba(219, 112, 147)" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-4 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background-color: rgba(219, 112, 147, 0.5);">
                <div style="background-image: url({{'images/corner.png'}}); background-size: cover; border: 1px solid white; border-radius: 5px" class="px-6 py-4" >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
