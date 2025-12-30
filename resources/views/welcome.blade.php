@extends('layouts.app')
@section('header_menu')
<x-hmenu href="#home">Home</x-hmenu>
<x-hmenu href="#about">About Me</x-hmenu>
<x-hmenu href="#projects">Projects</x-hmenu>
<x-hmenu href="#contact">Contact</x-hmenu>
@endsection
@section('content')
<!-- 1. HOME SECTION -->
<section id="home" class="min-h-screen flex flex-col justify-center items-center relative px-4 pt-16">
    <!-- Dekorasi Tengah -->
    <div class="absolute w-[300px] h-[300px] md:w-[500px] md:h-[500px] border border-slate-700/30 rounded-full animate-[spin_20s_linear_infinite]"></div>
    <div class="absolute w-[250px] h-[250px] md:w-[400px] md:h-[400px] border border-slate-700/20 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>

    <div class="z-10 text-center space-y-6 animate-float">
        <p class="text-slate-400 text-sm md:text-base tracking-[0.2em] uppercase mb-2">Halo, nama saya</p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight">
            <span class="text-gradient">Bentar Segara Buana</span>
        </h1>
        <p class="max-w-lg mx-auto text-slate-400 text-base md:text-lg leading-relaxed">
            Seorang <span class="text-white font-medium">Mahasiswa</span> yang tertarik pada bidang <span class="text-white font-medium">Fullstack</span> & <span class="text-white font-medium">Mobile App Development</span> yang menciptakan pengalaman digital yang minimalis dan fungsional.
        </p>
        <div class="pt-8">
            <a href="#projects" class="inline-block px-8 py-3 border border-slate-600 rounded-full text-slate-300 hover:text-white hover:border-white hover:bg-white/5 transition-all duration-300">
                Lihat Karya Saya
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 animate-bounce">
        <a href="#about" class="text-slate-500 hover:text-white transition-colors">
            <i class="fa-solid fa-arrow-down text-xl"></i>
        </a>
    </div>
</section>

<!-- 2. ABOUT ME SECTION -->
<section id="about" class="py-24 bg-slate-900/30 relative">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">

            <!-- Left: Image Placeholder / Visual -->
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="relative w-64 h-64 md:w-80 md:h-80">
                    <div class="absolute h-96 inset-0 border-2 border-slate-700 rounded-2xl transform rotate-6 transition-transform hover:rotate-0 duration-500"></div>
                    <div class="absolute h-96 inset-0 bg-slate-800 rounded-2xl flex items-center justify-center overflow-hidden shadow-2xl glass-card">
                        <img src="{{asset('images/personal/Segara.webp')}}" class="w-full h-full object-fill" alt="Segaara">
                    </div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="w-full md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-white flex items-center gap-3">
                    <span class="w-12 h-[2px] bg-slate-500 inline-block"></span>
                    Tentang Saya
                </h2>
                <p class="text-slate-400 leading-relaxed text-lg">
                    Saya adalah seorang mahasiswa yang antusias dalam pengembangan aplikasi mobile, dengan fokus utama pada perancangan antarmuka pengguna (UI) yang bersih dan efisien serta pengembangan sisi backend yang kuat.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    Saat ini, saya sedang mendalami pengembangan aplikasi mobile dan teknologi backend guna menciptakan solusi aplikasi yang interaktif di sisi pengguna serta optimal dan efisien di sisi server.
                </p>

                <!-- Skills Tags -->
                <div class="pt-4">
                    <h3 class="text-sm font-semibold text-slate-300 uppercase tracking-wider mb-4">Teknologi yang saya gunakan</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">MySql</span>
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">Express JS</span>
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">React Native</span>
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">Node Js</span>
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">Laravel</span>
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">Javascript</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. PROJECTS SECTION -->
<section id="projects" class="py-24 relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Proyek Pilihan</h2>
            <div class="w-20 h-1 bg-slate-700 mx-auto rounded-full"></div>
            <p class="mt-4 text-slate-400 max-w-2xl mx-auto">
                Beberapa hasil karya terbaik saya yang menggabungkan desain estetis dan kode yang efisien.
            </p>
        </div>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project Card 1 -->
            <div class="glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <!-- Placeholder Icon/Image -->
                    <i class="fa-solid fa-desktop text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="https://github.com/BentarSegara" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors" title="View Code">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="{{route('project_detail')}}" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors" title="Live Demo">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">E-Commerce Dashboard</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        Sebuah dashboard admin yang responsif untuk mengelola data penjualan, inventaris, dan analitik pengguna dengan tampilan modern.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">VueJS</span>
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-mobile-screen text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Travel App UI</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        Landing page untuk aplikasi travel dengan fokus pada tipografi yang kuat dan galeri foto yang imersif.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">React</span>
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">Framer Motion</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 group">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-layer-group text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Portfolio Minimalis</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        Template portofolio pribadi yang cepat dan ringan, dirancang dengan pendekatan mobile-first.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">HTML5</span>
                        <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">CSS3</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="{{route('project')}}" class="inline-flex items-center text-slate-400 hover:text-white transition-colors">
                Lihat Proyek Lainnya <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

@endsection