@props([
'id' => '1',
'image' => 'images/project_images/nakamanga/nakamanga-banner.jpeg',
'github' => '#',
])

<div class="glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 group">
    <div class="h-48 bg-slate-800 relative overflow-hidden flex items-center justify-center">
        <img src="{{asset($image)}}" class="w-full h-full object-fill" alt="Project Image">
        <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
            <a href="{{ $github }}" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="{{route('project_detail', $id)}}" class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-colors">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
    <div class="p-6">
        {{ $slot }}
    </div>
</div>