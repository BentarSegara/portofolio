@props(['href' => '#', ])
<a href="{{$href}}" class="text-sm font-medium hover:text-white transition-colors relative group">
    {{$slot}}
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-slate-400 transition-all group-hover:w-full"></span>
</a>