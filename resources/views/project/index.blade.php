@extends('layouts.app')
@section('header_menu')
<x-hmenu href="{{route('home')}}">Home</x-hmenu>
<x-hmenu href="{{route('home')}}#about">About Me</x-hmenu>
<x-hmenu href="#contact">Contact</x-hmenu>
@endsection
@section('header_menu_dropdown')
<x-hmenu-dropdown href="{{route('home')}}">Home</x-hmenu-dropdown>
<x-hmenu-dropdown href="{{route('home')}}#about">About Me</x-hmenu-dropdown>
<x-hmenu-dropdown href="#contact">Contact</x-hmenu-dropdown>
@endsection
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
            @foreach ($type_projects as $type_project)
            <button onclick="filterProjects('{{$type_project->name}}')" class="filter-btn px-6 py-2 rounded-full border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 transition-all text-sm font-medium">
                {{$type_project->name}}
            </button>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            @foreach ($projects as $project)
            <x-card :id="$project->id" :image="$project->projectImages[0]->image_path" :github="$project->github_link">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-white">{{ $project->name }}</h3>
                    <span class="text-xs font-bold text-slate-500 border border-slate-700 px-2 py-1 rounded">{{$project->projectTypes[0]->typeProject->name}}</span>
                </div>
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

        <!-- Load More / Pagination -->
        <div class="mt-16 text-center">
            <button class="px-8 py-3 border border-slate-700 text-slate-400 hover:text-white hover:border-slate-500 rounded-full transition-colors text-sm font-medium">
                Muat Lebih Banyak
            </button>
        </div>
    </div>
</main>
@endsection