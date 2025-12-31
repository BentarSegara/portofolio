@extends('layouts.app')
@section('header_menu')
<x-hmenu href="#home">Home</x-hmenu>
<x-hmenu href="#about">About Me</x-hmenu>
<x-hmenu href="#projects">Projects</x-hmenu>
<x-hmenu href="#contact">Contact</x-hmenu>
@endsection
@section('header_menu_dropdown')
<x-hmenu-dropdown href="#home">Home</x-hmenu-dropdown>
<x-hmenu-dropdown href="#about">About Me</x-hmenu-dropdown>
<x-hmenu-dropdown href="#projects">Projects</x-hmenu-dropdown>
<x-hmenu-dropdown href="#contact">Contact</x-hmenu-dropdown>
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
            <span class="text-gradient">{{ $userInfo->name }}</span>
        </h1>
        <p class="max-w-lg mx-auto text-slate-400 text-base md:text-lg leading-relaxed">
            {{ $userInfo->desc1 }}
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
                <div class="relative w-64 h-80 md:w-80 md:h-96">
                    <div class="absolute inset-0 border-2 border-slate-700 rounded-2xl transform rotate-6 transition-transform hover:rotate-0 duration-500"></div>
                    <div class="absolute inset-0 bg-slate-800 rounded-2xl flex items-center justify-center overflow-hidden shadow-2xl glass-card">
                        <img src="{{asset($userInfo->photo)}}" class="w-full h-full object-fill" alt="Segaara">
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
                    {{ $userInfo->desc2 }}
                </p>
                <p class="text-slate-400 leading-relaxed">
                    {{ $userInfo->desc3 }}
                </p>

                <!-- Skills Tags -->
                <div class="pt-4">
                    <h3 class="text-sm font-semibold text-slate-300 uppercase tracking-wider mb-4">Teknologi yang saya gunakan</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($userInfo->userTechStacks as $techStack)
                        <span class="px-4 py-2 bg-slate-800 rounded-full text-sm text-slate-300 border border-slate-700 hover:border-slate-500 transition-colors">{{ $techStack->techStack->name }}</span>
                        @endforeach
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
            @foreach ($userProjects as $project)
            <x-card :id="$project->id" :image="$project->projectImages[0]->image_path" :github="$project->github">
                <h3 class="text-xl font-bold text-white mb-2">{{ $project->name }}</h3>
                <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                    {{ $project->short_desc }}
                </p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($project->projectTechStacks as $techStack)
                    <span class="text-xs px-2 py-1 bg-slate-800 text-slate-400 rounded">{{ $techStack->techStack->name }}</span>
                    @endforeach
                </div>
            </x-card>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{route('project')}}" class="inline-flex items-center text-slate-400 hover:text-white transition-colors">
                Lihat Proyek Lainnya <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection