@props([
    'href' => '#',
    'target' => null,
])

<a
    href="{{ $href }}"
    @if($target) target="{{ $target }}" @endif
    {{ $attributes->class([
        'text-slate-800 hover:underline',
    ]) }}
>
    {{ $slot }}
</a>
