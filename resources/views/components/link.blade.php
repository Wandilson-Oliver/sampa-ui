@props([
    'href' => '#',
    'target' => null,
])

<a
    href="{{ $href }}"
    @if($target) target="{{ $target }}" @endif
    {{ $attributes }}
>
    {{ $slot }}
</a>
