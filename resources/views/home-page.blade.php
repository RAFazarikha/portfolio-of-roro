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
        <header class="flex justify-between items-center py-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sticky top-0 bg-black z-10">
            <div class="flex items-center space-x-2">
                <span class="text-blue-500 text-2xl font-bold"></span>
                <span class="text-lg font-bold">Portfolio Of Roro Ananda S.</span>
            </div>
            <nav class="space-x-6">
                <a href="#home" class="hover:text-blue-500">Home</a>
                <a href="#about" class="hover:text-blue-500">About Me</a>
                <a href="#" class="hover:text-blue-500">Project</a>
                <a href="#" class="hover:text-blue-500">Contact</a>
            </nav>
        </header>
        
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('storage/images/bg.png') }}'); background-size: cover; background-position: center;">
            <section id="home" class="flex flex-col md:flex-row items-center justify-between py-10">
                <div class="max-w-xl">
                    <h1 class="text-7xl font-bold">
                        <span class="text-blue-500">Profile and</span>
                        <span class="text-white block">Portfolio</span>
                    </h1>
                    <p class="mt-4 text-lg">My Personal Portfolio Project As An Industrial Engineering Student</p>
                    <a href="#" class="mt-6 inline-block px-6 py-2 border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition">roroanandasetyawardhani@gmail.com</a>
                </div>
                <div class="relative mt-10 md:mt-0">
                    <img src="{{ asset('storage/images/roro.png') }}" alt="Engineer" class="w-90 h-auto rounded-lg">
                </div>
            </section>
            <section id="about" class="my-10 py-14 text-center">
                <h1 class="text-5xl font-bold text-center my-5">Learn <span class="text-blue-500">About Me</span></h1>
                <div class="my-3 bg-blue-500 h-1 w-96 mx-auto"></div>
                <div class="flex flex-col md:flex-row items-center md:items-center justify-center gap-10 mt-5">
                    <div class="relative w-75 h-auto overflow-hidden">
                        <img src="{{ asset('storage/images/roro2.png') }}" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <div class="max-w-3xl">
                        <h1 class="text-3xl font-bold text-left">Roro Ananda Setyawardhani</span></h1>
                        <p class="text-white mt-4 text-justify">I am focused on the field of Manufacturing Systems, with expertise in managing and optimizing production processes and quality control. In my role as an Assistant in the Manufacturing Systems Laboratory, I have gained a deep understanding of production workflows, manufacturing technologies, and efficient implementation of strategies to improve operational performance. This experience has strengthened my ability to analyze and solve problems in the context of the manufacturing industry.</p>
                    </div>
                </div>
                <h1 class="text-5xl font-bold text-center my-5 pt-10">Educational <span class="text-blue-500">Background</span></h1>
                <div class="my-3 bg-blue-500 h-1 w-96 mx-auto"></div>
                <div class="text-left mt-5 py-10 flex flex-col md:flex-row gap-10">
                    <div class="relative w-75 h-auto overflow-hidden">
                        <img src="{{ asset('storage/images/roro3.png') }}" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <ol class="relative border-s border-blue-500">                  
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2010 - June 2016</time>
                            <h3 class="text-lg font-semibold text-white">Elemantary School</h3>
                            <p class="mb-4 text-base font-normal text-white">Saya menempuh pendidikan SD di surabaya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, non. Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2016 - June 2019</time>
                            <h3 class="text-lg font-semibold text-white">Junior Highschool</h3>
                            <p class="mb-4 text-base font-normal text-white">Saya menempuh pendidikan tingkat menengah pertama di SMPN 2 Surabaya. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam illo quasi cumque quas eius voluptas.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2019 - June 2022</time>
                            <h3 class="text-lg font-semibold text-white">Senior Highschool</h3>
                            <p class="mb-4 text-base font-normal text-white">Saya menempuh pendidikan tingkat menengah atas di SMAN 7 Surabaya. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam illo quasi cumque quas eius voluptas.</p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">August 2022 - Now</time>
                            <h3 class="text-lg font-semibold text-white">Trunojoyo Madura University</h3>
                            <p class="mb-4 text-base font-normal text-white">Saya sekarang menempuh pendidikan S1 Teknik Industri di Universitas Trunojoyo Madura. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ab? Quae, sint?</p>
                        </li>
                    </ol>
                </div>
            </section>
        </main>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const sections = document.querySelectorAll("section"); // Ambil semua section
                const navLinks = document.querySelectorAll("nav a"); // Ambil semua link navbar
            
                const observer = new IntersectionObserver(
                    (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                        // Ambil id section yang sedang terlihat
                        let id = entry.target.getAttribute("id");
            
                        // Hapus semua class aktif
                        navLinks.forEach((link) => {
                            link.classList.remove("font-bold", "text-blue-500");
                        });
            
                        // Tambahkan class aktif pada link yang sesuai
                        document
                            .querySelector(`nav a[href="#${id}"]`)
                            .classList.add("font-bold", "text-blue-500");

                        console.log(id);
                        }
                    });
                    },
                    { threshold: 0.6 } // Jika 60% dari section terlihat, maka aktifkan
                );
            
                // Observe setiap section
                sections.forEach((section) => {
                    observer.observe(section);
                });
            });
        </script>          
    </body>
</html>
