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
    <body class="bg-black text-white">
        <header class="flex justify-between items-center py-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2">
                <span class="text-blue-500 text-2xl font-bold"></span>
                <span class="text-lg font-bold">Portfolio Of Roro Ananda S.</span>
            </div>
            <nav class="space-x-6">
                <a href="#" class="text-blue-500">Home</a>
                <a href="#" class="hover:text-blue-500">About Me</a>
                <a href="#" class="hover:text-blue-500">Project</a>
                <a href="#" class="hover:text-blue-500">Contact</a>
            </nav>
        </header>
        
        <main class="flex flex-col md:flex-row items-center justify-between py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover; background-position: center;">
            <div class="max-w-xl">
                <h1 class="text-7xl font-bold">
                    <span class="text-blue-500">Engineering</span>
                    <span class="text-white block">Project</span>
                </h1>
                <p class="mt-4 text-lg">My Personal Portfolio Project As An Industrial Engineering Student</p>
                <a href="#" class="mt-6 inline-block px-6 py-2 border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition">roroanandasetyawardhani@gmail.com</a>
            </div>
            <div class="relative mt-10 md:mt-0">
                <img src="{{ asset('storage/images/roro.png') }}" alt="Engineer" class="w-90 h-auto rounded-lg">
            </div>
        </main>
    </body>
</html>
