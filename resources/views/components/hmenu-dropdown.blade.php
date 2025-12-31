@props([
'href' => '#',
])

<a href="{{ $href }}" class="block hover:text-white transition-colors py-2">
    {{ $slot }}
</a>