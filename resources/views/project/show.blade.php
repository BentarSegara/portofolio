@extends('layouts.app')
@section('header_menu')
<x-hmenu href="{{route('home')}}">Home</x-hmenu>
<x-hmenu href="{{route('home')}}#about">About Me</x-hmenu>
<x-hmenu href="#contact">Contact</x-hmenu>
@endsection
@section('content')
<main class="pt-28 pb-16 px-6">
    <div class="container mx-auto max-w-5xl">

        <!-- Breadcrumb -->
        <nav class="flex text-sm text-slate-500 mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="{{route('home')}}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li><a href="{{route('project')}}" class="hover:text-white transition-colors">Projects</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li class="text-slate-300" aria-current="page">{{$projects->name}}</li>
            </ol>
        </nav>

        <!-- Project Header -->
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">{{$projects->name}}</h1>
            <p class="text-xl text-slate-400 max-w-3xl leading-relaxed">
                {{$projects->short_desc}}
            </p>
        </div>

        <!-- Main Project Image / Banner -->
        <div class="w-full h-64 md:h-[500px] bg-slate-800 rounded-2xl overflow-hidden mb-12 shadow-2xl border border-slate-800 relative group">
            <!-- Placeholder untuk gambar utama -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-slate-600">
                <img src="{{asset($bannerImages['image_path'])}}" class="w-full h-full object-fill" alt="Project Image">
            </div>
        </div>

        <!-- Project Details Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- Left Column: Narrative Content -->
            <div class="lg:col-span-2 space-y-12">
                <section>
                    <h2 class="text-2xl font-bold text-white mb-4">Ringkasan</h2>
                    <p class="text-slate-400 leading-relaxed mb-4">
                        {{$projects->desc1}}
                    </p>
                    <p class="text-slate-400 leading-relaxed">
                        {{$projects->desc2}}
                    </p>
                </section>

                <!-- Gallery / Screenshots -->
                <section>
                    <h2 class="text-2xl font-bold text-white mb-6">Galeri Layar</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($project_images as $image)
                        @if (!$image['is_primary'])
                        <div class="aspect-[9/16] bg-slate-800 rounded-2xl flex items-center justify-center border border-slate-700 hover:border-slate-500 transition-colors cursor-pointer group relative overflow-hidden shadow-lg">
                            <img src="{{asset($image['image_path'])}}" class="w-full h-full object-fill" alt="Project Image">
                        </div>
                        @endif
                        @endforeach
                    </div>
                </section>

            </div>

            <!-- Right Column: Project Info Sidebar -->
            <div class="lg:col-span-1">
                <div class="glass-card rounded-xl p-6 sticky top-28">
                    <h3 class="text-lg font-bold text-white mb-6 border-b border-slate-700 pb-4">Informasi Proyek</h3>

                    <div class="space-y-6">
                        <div>
                            <h4 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Peran Saya</h4>
                            <p class="text-slate-200">{{$projects->role}}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Klien / Tahun</h4>
                            <p class="text-slate-200">{{$projects->client}} / {{$projects->year}}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-2">Tech Stack</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($projects->projectTechStacks as $techStack)
                                <span class="px-3 py-1 bg-slate-800 text-xs rounded-full border border-slate-700 text-slate-300">{{ $techStack->techStack->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 space-y-3">
                        <a href="{{$projects->github}}" class="block w-full py-3 bg-transparent border border-slate-600 text-white font-medium text-center rounded-lg hover:bg-slate-800 transition-colors">
                            <i class="fa-brands fa-github mr-2"></i> Lihat Repository
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Next / Prev Navigation -->
        <div class="border-t border-slate-800 mt-24 pt-12">
            <div class="flex justify-between items-center">
                @if ($prev_project)
                <a href="{{route('project_detail', $prev_project->id)}}" class="group text-right">
                    <span class="block text-xs text-slate-500 mb-1 uppercase tracking-wider">Proyek Sebelumnya</span>
                    <h4 class="text-lg md:text-xl font-bold text-white group-hover:text-slate-300 transition-colors">
                        <i class="fa-solid fa-arrow-left mr-2 text-sm text-slate-500 group-hover:-translate-x-1 transition-transform"></i>
                        {{$prev_project->name}}
                    </h4>
                </a>
                @endif
                @if ($next_project)
                <a href="{{route('project_detail', $next_project->id)}}" class="group text-left">
                    <span class="block text-xs text-slate-500 mb-1 uppercase tracking-wider">Proyek Berikutnya</span>
                    <h4 class="text-lg md:text-xl font-bold text-white group-hover:text-slate-300 transition-colors">
                        {{$next_project->name}}
                        <i class="fa-solid fa-arrow-right ml-2 text-sm text-slate-500 group-hover:translate-x-1 transition-transform"></i>
                    </h4>
                </a>
                @endif
            </div>
        </div>

    </div>
</main>

@endsection