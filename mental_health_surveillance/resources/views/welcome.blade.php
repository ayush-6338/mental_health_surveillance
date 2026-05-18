<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Every Feeling Matters') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f8f1df] font-sans text-[#33402c] antialiased">
        <div class="min-h-screen overflow-hidden">
            <x-landing.nav />

            <main class="story-world relative overflow-hidden">
                <x-landing.story-path />
                <x-landing.hero />
                <x-landing.journey-preview />
            </main>
        </div>
    </body>
</html>
