<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-black text-white overflow-x-hidden">
        <header class="flex justify-between items-center py-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sticky top-0 bg-black z-10">
            <div class="flex items-center space-x-2">
                <span class="text-blue-500 text-2xl font-bold"></span>
                <span class="text-lg font-bold">Portfolio Of Roro Ananda S.</span>
            </div>
            <nav class="space-x-6">
                <a href="#home" class="hover:text-blue-500">Home</a>
                <a href="#about" class="hover:text-blue-500">About Me</a>
                <a href="#education" class="hover:text-blue-500">Education</a>
                <a href="#project" class="hover:text-blue-500">Project</a>
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
                <div class="relative mt-10 md:mt-0" data-aos="fade-left">
                    <img src="{{ asset('storage/images/roro.png') }}" alt="Engineer" class="w-90 h-auto rounded-lg">
                </div>
            </section>
            <section id="about" class="my-10 py-14 text-center">
                <h1 class="text-5xl font-bold text-center my-5">Learn <span class="text-blue-500">About Me</span></h1>
                <div class="my-3 bg-blue-500 h-1 w-96 mx-auto"></div>
                <div class="flex flex-col md:flex-row items-center md:items-center justify-center gap-10 mt-5">
                    <div class="relative w-75 h-auto overflow-hidden" data-aos="fade-right">
                        <img src="{{ asset('storage/images/roro2.png') }}" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <div class="max-w-3xl" data-aos="fade-left">
                        <h1 class="text-3xl font-bold text-left">Roro Ananda Setyawardhani</span></h1>
                        <p class="text-white mt-4 text-justify">I am focused on the field of Manufacturing Systems, with expertise in managing and optimizing production processes and quality control. In my role as an Assistant in the Manufacturing Systems Laboratory, I have gained a deep understanding of production workflows, manufacturing technologies, and efficient implementation of strategies to improve operational performance. This experience has strengthened my ability to analyze and solve problems in the context of the manufacturing industry.</p>
                    </div>
                </div>
            </section>
            <section id="education" class="my-10 py-14 text-center">
                <h1 class="text-5xl font-bold text-center my-5 pt-10">Educational <span class="text-blue-500">Background</span></h1>
                <div class="my-3 bg-blue-500 h-1 w-96 mx-auto"></div>
                <div class="text-left mt-5 py-10 grid grid-cols-2 md:flex-row">
                    <div class="w-max h-auto overflow-hidden" data-aos="fade-right">
                        <img src="{{ asset('storage/images/roro4.png') }}" alt="Profile" class="w-full h-auto">
                    </div>
                    <div data-aos="fade-left">
                        <ol class="relative border-s border-blue-500">                  
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2010 - June 2016</time>
                                <h3 class="text-lg font-semibold text-white">Elemantary School</h3>
                                <p class="mb-4 text-base font-normal text-white">Saya menempuh pendidikan dasar di SDN Rangkah VII Surabaya, di mana saya mulai membangun fondasi akademik dan sosial.</p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2016 - June 2019</time>
                                <h3 class="text-lg font-semibold text-white">Junior Highschool</h3>
                                <p class="mb-4 text-base font-normal text-white">Saya melanjutkan pendidikan menengah pertama di SMPN 2 Surabaya, yang memberikan pengalaman belajar yang lebih mendalam dan beragam.</p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-blue-500">July 2019 - June 2022</time>
                                <h3 class="text-lg font-semibold text-white">Senior Highschool</h3>
                                <p class="mb-4 text-base font-normal text-white">Pendidikan menengah atas saya jalani di SMAN 7 Surabaya, tempat saya mengembangkan keterampilan akademik dan organisasi lebih lanjut.</p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-blue-500">August 2022 - Now</time>
                                <h3 class="text-lg font-semibold text-white">Trunojoyo Madura University</h3>
                                <p class="mb-4 text-base font-normal text-white">Saya saat ini menempuh pendidikan tinggi di Universitas Trunojoyo Madura, dengan fokus pada bidang Industrial Engineering untuk mendalami logistik dan manajemen rantai pasokan.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section id="project" class="my-10 py-14 text-center">
                <h1 class="text-5xl font-bold text-center my-5 pt-10">My <span class="text-blue-500">Project</span></h1>
                <div class="my-3 bg-blue-500 h-1 w-96 mx-auto"></div>
                <div class="text-left mt-5 py-10 grid grid-cols-3 md:flex-row">
                    <x-card-project :data="[
                        'id' => 'project-1',
                        'judul' => 'Analisis dan Penerapan Konsep Fisika Dasar dalam Pengukuran dan Rangkaian Listrik',
                        'short-description' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis.',
                        'description-1' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis. Fokus utama proyek mencakup :',
                        'description-2' => 'Hasil proyek ini menghasilkan panduan eksperimental yang dapat digunakan sebagai referensi dalam praktikum Fisika Dasar. Data yang diperoleh menunjukkan peningkatan akurasi dalam pengukuran besaran fisis serta pemahaman yang lebih baik terkait analisis rangkaian listrik. Selain itu, proyek ini juga memberikan evaluasi terhadap kesalahan pengukuran dan faktor-faktor yang mempengaruhi ketelitian hasil eksperimen, yang dapat menjadi acuan dalam pengembangan metode praktikum yang lebih efektif di masa mendatang.'
                    ]">
                        <li>Teknik pengukuran menggunakan jangka sorong dan mikrometer sekrup untuk meningkatkan akurasi dalam menentukan dimensi suatu objek.</li>
                        <li>Metode pengukuran volume zat cair sebagai dasar dalam analisis fluida.</li>
                        <li>Validasi Hukum Ohm melalui percobaan dengan berbagai nilai resistor dalam rangkaian seri dan paralel, guna memahami hubungan antara tegangan, arus, dan hambatan listrik.</li>
                    </x-card-project>

                    <x-card-project :data="[
                        'id' => 'project-2',
                        'judul' => 'Implementasi Autodesk Inventor dalam Pembuatan Sketch 2D dan 3D untuk Desain Teknik',
                        'short-description' => 'Proyek ini bertujuan untuk meningkatkan pemahaman terhadap proses desain teknik melalui penggunaan perangkat lunak Autodesk Inventor.',
                        'description-1' => 'Proyek ini bertujuan untuk meningkatkan pemahaman terhadap proses desain teknik melalui penggunaan perangkat lunak Autodesk Inventor. Fokus utama proyek mencakup :',
                        'description-2' => 'Proyek ini menghasilkan pedoman praktis untuk penggunaan Autodesk Inventor dalam desain teknik, yang dapat digunakan oleh mahasiswa maupun praktisi untuk meningkatkan efisiensi dalam pembuatan model digital. Hasil proyek menunjukkan bahwa dengan memahami dan mengaplikasikan berbagai fitur pada perangkat lunak ini, pengguna dapat menghasilkan desain yang lebih akurat dan realistis. Selain itu, evaluasi dilakukan untuk mengidentifikasi tantangan yang dihadapi dalam penggunaan software dan memberikan solusi dalam meningkatkan efektivitas pembelajaran desain teknik berbasis CAD.'
                    ]">
                        <li>Pengenalan dan penggunaan toolbar dasar Autodesk Inventor dalam pembuatan sketch 2D dan 3D.</li>
                        <li>Penggunaan fitur-fitur seperti extrude, revolve, hole, dan shell untuk membentuk model 3D secara presisi.</li>
                        <li>Penerapan standar gambar teknik sesuai dengan kaidah industri dalam proses desain.</li>
                    </x-card-project>

                    <x-card-project :data="[
                        'id' => 'project-3',
                        'judul' => 'Analisis dan Implementasi Proses Manufaktur dalam Produksi Produk Kursi',
                        'short-description' => 'Proyek ini bertujuan untuk mengaplikasikan konsep proses manufaktur dalam produksi produk kursi melalui berbagai metode produksi.',
                        'description-1' => 'Proyek ini bertujuan untuk mengaplikasikan konsep proses manufaktur dalam produksi produk kursi melalui berbagai metode produksi. Fokus utama proyek mencakup :',
                        'description-2' => 'Hasil proyek ini menghasilkan dokumentasi lengkap mengenai tahapan proses manufaktur yang dapat digunakan sebagai referensi dalam pengajaran dan pengembangan industri kecil. Data yang diperoleh menunjukkan peningkatan efisiensi dalam produksi serta analisis kualitas produk yang lebih terukur. Selain itu, proyek ini memberikan evaluasi terhadap efisiensi proses, kesalahan manufaktur, serta rekomendasi untuk optimalisasi produksi di masa depan.'
                    ]">
                        <li>Pengukuran dimensi, toleransi, dan suaian komponen kursi untuk memastikan kesesuaian dalam perakitan.</li>
                        <li>Penerapan fungsi kerja bangku seperti pemotongan, pengikiran, dan penggerindaan dalam tahap awal manufaktur.</li>
                        <li>Proses pemesinan drilling dan turning untuk membentuk komponen dengan presisi tinggi.</li>
                        <li>Teknik penyambungan (pengelasan) guna memastikan kekuatan dan daya tahan struktur kursi.</li>
                        <li>Implementasi teknologi 3D printing dalam pembuatan komponen tertentu.</li>
                        <li>Proses assembly dan finishing untuk memastikan kualitas akhir produk.</li>
                        <li>Penerapan metode pengendalian kualitas untuk mengidentifikasi dan mengurangi cacat produksi.</li>
                        <li>Perancangan desain kemasan sebagai tahap akhir dalam siklus produksi.</li>
                    </x-card-project>

                    <x-card-project :data="[
                        'id' => 'project-4',
                        'judul' => 'Perancangan Tata Letak Fasilitas untuk Optimalisasi Aliran Material dan Efisiensi',
                        'short-description' => 'Proyek ini bertujuan untuk mengembangkan perancangan tata letak fasilitas yang optimal guna meningkatkan efisiensi aliran material dan mengurangi biaya produksi.',
                        'description-1' => 'Proyek ini bertujuan untuk mengembangkan perancangan tata letak fasilitas yang optimal guna meningkatkan efisiensi aliran material dan mengurangi biaya produksi. Studi ini dilakukan pada PT Myra Jaya Industri dengan beberapa fokus utama, yaitu :',
                        'description-2' => 'Hasil proyek ini menghasilkan desain tata letak fasilitas yang lebih efisien dengan mengoptimalkan pemanfaatan ruang, mengurangi biaya material handling, serta meningkatkan produktivitas produksi. Dengan pendekatan sistematis melalui tujuh modul praktikum, proyek ini memberikan rekomendasi desain tata letak yang dapat diterapkan dalam industri manufaktur guna mendukung proses produksi yang lebih efektif dan ekonomis.'
                    ]">
                        <li>Analisis kebutuhan luas pabrik dan pemilihan lokasi strategis berdasarkan berbagai faktor industri.</li>
                        <li>Penyusunan diagram aliran material (Flow Diagram) dan pemetaan aliran proses produksi untuk meminimalkan waktu perpindahan material.</li>
                        <li>Penggunaan metode Activity Relationship Chart (ARC) dan Activity Relationship Diagram (ARD) untuk menyusun tata letak fasilitas yang lebih efisien.</li>
                        <li>Perhitungan biaya material handling (Material Handling Cost) guna mengurangi biaya 2woperasional produksi.</li>
                        <li>Penggunaan metode Activity Relationship Chart (ARC) dan Activity Relationship Diagram (ARD) untuk menyusun tata letak fasilitas yang lebih efisien.</li>
                    </x-card-project>

                    <x-card-project :data="[
                        'id' => 'project-5',
                        'judul' => 'Analisis dan Penerapan Konsep Fisika Dasar dalam Pengukuran dan Rangkaian Listrik',
                        'short-description' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis.',
                        'description-1' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis. Fokus utama proyek mencakup :',
                        'description-2' => 'Hasil proyek ini menghasilkan panduan eksperimental yang dapat digunakan sebagai referensi dalam praktikum Fisika Dasar. Data yang diperoleh menunjukkan peningkatan akurasi dalam pengukuran besaran fisis serta pemahaman yang lebih baik terkait analisis rangkaian listrik. Selain itu, proyek ini juga memberikan evaluasi terhadap kesalahan pengukuran dan faktor-faktor yang mempengaruhi ketelitian hasil eksperimen, yang dapat menjadi acuan dalam pengembangan metode praktikum yang lebih efektif di masa mendatang.'
                    ]">
                        <li>Teknik pengukuran menggunakan jangka sorong dan mikrometer sekrup untuk meningkatkan akurasi dalam menentukan dimensi suatu objek.</li>
                        <li>Metode pengukuran volume zat cair sebagai dasar dalam analisis fluida.</li>
                        <li>Validasi Hukum Ohm melalui percobaan dengan berbagai nilai resistor dalam rangkaian seri dan paralel, guna memahami hubungan antara tegangan, arus, dan hambatan listrik.</li>
                    </x-card-project>

                    <x-card-project :data="[
                        'id' => 'project-6',
                        'judul' => 'Analisis dan Penerapan Konsep Fisika Dasar dalam Pengukuran dan Rangkaian Listrik',
                        'short-description' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis.',
                        'description-1' => 'Proyek ini bertujuan untuk mengembangkan pemahaman terhadap konsep dasar Fisika melalui eksperimen yang terstruktur dan sistematis. Fokus utama proyek mencakup :',
                        'description-2' => 'Hasil proyek ini menghasilkan panduan eksperimental yang dapat digunakan sebagai referensi dalam praktikum Fisika Dasar. Data yang diperoleh menunjukkan peningkatan akurasi dalam pengukuran besaran fisis serta pemahaman yang lebih baik terkait analisis rangkaian listrik. Selain itu, proyek ini juga memberikan evaluasi terhadap kesalahan pengukuran dan faktor-faktor yang mempengaruhi ketelitian hasil eksperimen, yang dapat menjadi acuan dalam pengembangan metode praktikum yang lebih efektif di masa mendatang.'
                    ]">
                        <li>Teknik pengukuran menggunakan jangka sorong dan mikrometer sekrup untuk meningkatkan akurasi dalam menentukan dimensi suatu objek.</li>
                        <li>Metode pengukuran volume zat cair sebagai dasar dalam analisis fluida.</li>
                        <li>Validasi Hukum Ohm melalui percobaan dengan berbagai nilai resistor dalam rangkaian seri dan paralel, guna memahami hubungan antara tegangan, arus, dan hambatan listrik.</li>
                    </x-card-project>
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
