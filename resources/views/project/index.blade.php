@extends('layouts.app')
@section('content')
<main class="flex-grow pt-32 pb-20 px-6">
    <div class="container mx-auto">

        <!-- Page Header -->
        <div class="text-center mb-16 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Arsip Proyek</h1>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                Eksplorasi mendalam dari seluruh karya yang pernah saya kerjakan, mulai dari eksperimen kecil hingga aplikasi skala besar.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12 animate-fade-in" style="animation-delay: 0.1s;">
            <button onclick="filterProjects('all')" class="filter-btn active px-6 py-2 rounded-full border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 transition-all text-sm font-medium">
                Semua
            </button>
            <button onclick="filterProjects('web')" class="filter-btn px-6 py-2 rounded-full border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 transition-all text-sm font-medium">
                Website
            </button>
            <button onclick="filterProjects('mobile')" class="filter-btn px-6 py-2 rounded-full border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 transition-all text-sm font-medium">
                Mobile App
            </button>
            <button onclick="filterProjects('ui')" class="filter-btn px-6 py-2 rounded-full border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 transition-all text-sm font-medium">
                UI/UX Design
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">

            <!-- Project 1 (Web) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="web">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-desktop text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="{{route('project_detail')}}" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">E-Commerce Dashboard</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">WEB</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Admin panel untuk manajemen stok dan penjualan toko online.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#VueJS</span> <span>#Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 (Mobile) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="mobile" style="animation-delay: 0.1s;">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-mobile-screen text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="project-detail.html" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Travel App UI</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">MOBILE</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Aplikasi pemesanan tiket perjalanan dengan animasi smooth.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#ReactNative</span> <span>#Figma</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 (Web) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="web" style="animation-delay: 0.2s;">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-layer-group text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="project-detail.html" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Personal Portfolio</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">WEB</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Website portofolio pribadi responsif dan cepat.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#HTML</span> <span>#CSS</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 (UI Design) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="ui" style="animation-delay: 0.3s;">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-palette text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="project-detail.html" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Finance App Redesign</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">UI/UX</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Konsep desain ulang aplikasi perbankan agar lebih ramah pengguna.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#Figma</span> <span>#Prototyping</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 (Web) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="web" style="animation-delay: 0.4s;">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-utensils text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="project-detail.html" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Resto Landing Page</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">WEB</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Landing page restoran modern dengan fitur reservasi online.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#Bootstrap</span> <span>#jQuery</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 (Mobile) -->
            <div class="project-card glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 group animate-fade-in" data-category="mobile" style="animation-delay: 0.5s;">
                <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
                    <i class="fa-solid fa-dumbbell text-5xl text-slate-700 group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                        <a href="project-detail.html" class="px-4 py-2 bg-slate-700 rounded-full text-white text-sm font-medium hover:bg-white hover:text-slate-900 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Fitness Tracker</h3>
                        <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">MOBILE</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Aplikasi pelacak kebugaran dengan integrasi smartwatch.</p>
                    <div class="flex flex-wrap gap-2 text-xs text-slate-500">
                        <span>#Flutter</span> <span>#Dart</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Load More / Pagination -->
        <div class="mt-16 text-center">
            <button class="px-8 py-3 border border-slate-700 text-slate-400 hover:text-white hover:border-slate-500 rounded-full transition-colors text-sm font-medium">
                Muat Lebih Banyak
            </button>
        </div>
    </div>
</main>
@endsection