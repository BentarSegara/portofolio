@extends('layouts.app')
@section('content')
<main class="pt-28 pb-16 px-6">
    <div class="container mx-auto max-w-5xl">

        <!-- Breadcrumb -->
        <nav class="flex text-sm text-slate-500 mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="index.html" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li><a href="index.html#projects" class="hover:text-white transition-colors">Projects</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li class="text-slate-300" aria-current="page">E-Commerce Dashboard</li>
            </ol>
        </nav>

        <!-- Project Header -->
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">E-Commerce Dashboard</h1>
            <p class="text-xl text-slate-400 max-w-3xl leading-relaxed">
                Redesain lengkap antarmuka dashboard admin untuk meningkatkan efisiensi manajemen inventaris dan analisis data penjualan.
            </p>
        </div>

        <!-- Main Project Image / Banner -->
        <div class="w-full h-64 md:h-[500px] bg-slate-800 rounded-2xl overflow-hidden mb-12 shadow-2xl border border-slate-800 relative group">
            <!-- Placeholder untuk gambar utama -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-slate-600">
                <i class="fa-regular fa-image text-6xl mb-4"></i>
                <span class="text-lg">Project Banner Image (1200x600)</span>
            </div>
        </div>

        <!-- Project Details Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- Left Column: Narrative Content -->
            <div class="lg:col-span-2 space-y-12">

                <!-- Overview -->
                <section>
                    <h2 class="text-2xl font-bold text-white mb-4">Ringkasan</h2>
                    <p class="text-slate-400 leading-relaxed mb-4">
                        Proyek ini bertujuan untuk memecahkan masalah kompleksitas yang dihadapi oleh admin toko online saat mengelola ribuan SKU. Dashboard lama dinilai lambat dan membingungkan.
                    </p>
                    <p class="text-slate-400 leading-relaxed">
                        Saya merancang ulang tata letak informasi, menerapkan tema gelap untuk mengurangi kelelahan mata, dan mengoptimalkan performa pemuatan data menggunakan teknik lazy-loading.
                    </p>
                </section>

                <!-- Problem & Solution -->
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="glass-card p-6 rounded-xl">
                        <div class="w-10 h-10 bg-red-500/10 rounded-full flex items-center justify-center text-red-400 mb-4">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Masalah</h3>
                        <p class="text-sm text-slate-400">
                            Waktu loading data inventaris mencapai 5 detik dan navigasi menu yang tidak intuitif menyebabkan error input user.
                        </p>
                    </div>
                    <div class="glass-card p-6 rounded-xl">
                        <div class="w-10 h-10 bg-emerald-500/10 rounded-full flex items-center justify-center text-emerald-400 mb-4">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Solusi</h3>
                        <p class="text-sm text-slate-400">
                            Implementasi caching server-side dan penyederhanaan arsitektur informasi mengurangi waktu loading menjadi < 1 detik.
                                </p>
                    </div>
                </div>

                <!-- Gallery / Screenshots -->
                <section>
                    <h2 class="text-2xl font-bold text-white mb-6">Galeri Layar</h2>
                    <!-- Mengubah grid menjadi 3 kolom untuk desktop dan menambahkan gap yang lebih besar -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- Image 1 - Mobile Portrait Aspect Ratio -->
                        <div class="aspect-[9/16] bg-slate-800 rounded-2xl flex items-center justify-center border border-slate-700 hover:border-slate-500 transition-colors cursor-pointer group relative overflow-hidden shadow-lg">
                            <i class="fa-solid fa-mobile-screen text-4xl text-slate-600"></i>
                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-sm font-medium px-4 text-center">Home Screen</span>
                            </div>
                        </div>
                        <!-- Image 2 - Mobile Portrait Aspect Ratio -->
                        <div class="aspect-[9/16] bg-slate-800 rounded-2xl flex items-center justify-center border border-slate-700 hover:border-slate-500 transition-colors cursor-pointer group relative overflow-hidden shadow-lg">
                            <i class="fa-solid fa-cart-shopping text-4xl text-slate-600"></i>
                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-sm font-medium px-4 text-center">Cart Page</span>
                            </div>
                        </div>
                        <!-- Image 3 - Mobile Portrait Aspect Ratio -->
                        <div class="aspect-[9/16] bg-slate-800 rounded-2xl flex items-center justify-center border border-slate-700 hover:border-slate-500 transition-colors cursor-pointer group relative overflow-hidden shadow-lg">
                            <i class="fa-solid fa-user text-4xl text-slate-600"></i>
                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-sm font-medium px-4 text-center">User Profile</span>
                            </div>
                        </div>
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
                            <p class="text-slate-200">UI/UX Designer & Frontend Dev</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Klien / Tahun</h4>
                            <p class="text-slate-200">Personal Project (2024)</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-2">Tech Stack</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-slate-800 text-xs rounded-full border border-slate-700 text-slate-300">Vue.js 3</span>
                                <span class="px-3 py-1 bg-slate-800 text-xs rounded-full border border-slate-700 text-slate-300">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-slate-800 text-xs rounded-full border border-slate-700 text-slate-300">Firebase</span>
                                <span class="px-3 py-1 bg-slate-800 text-xs rounded-full border border-slate-700 text-slate-300">Chart.js</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 space-y-3">
                        <a href="#" class="block w-full py-3 bg-white text-slate-900 font-bold text-center rounded-lg hover:bg-slate-200 transition-colors">
                            <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Kunjungi Live Site
                        </a>
                        <a href="#" class="block w-full py-3 bg-transparent border border-slate-600 text-white font-medium text-center rounded-lg hover:bg-slate-800 transition-colors">
                            <i class="fa-brands fa-github mr-2"></i> Lihat Repository
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Next / Prev Navigation -->
        <div class="border-t border-slate-800 mt-24 pt-12">
            <div class="flex justify-between items-center">
                <a href="#" class="group text-left">
                    <span class="block text-xs text-slate-500 mb-1 uppercase tracking-wider">Proyek Sebelumnya</span>
                    <h4 class="text-lg md:text-xl font-bold text-white group-hover:text-slate-300 transition-colors">
                        <i class="fa-solid fa-arrow-left mr-2 text-sm text-slate-500 group-hover:-translate-x-1 transition-transform"></i>
                        Travel App UI
                    </h4>
                </a>

                <a href="#" class="group text-right">
                    <span class="block text-xs text-slate-500 mb-1 uppercase tracking-wider">Proyek Berikutnya</span>
                    <h4 class="text-lg md:text-xl font-bold text-white group-hover:text-slate-300 transition-colors">
                        Portfolio Minimalis
                        <i class="fa-solid fa-arrow-right ml-2 text-sm text-slate-500 group-hover:translate-x-1 transition-transform"></i>
                    </h4>
                </a>
            </div>
        </div>

    </div>
</main>

@endsection