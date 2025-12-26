@props([
    'href' => '#',
    'target' => null,
])

<a
    href="{{ $href }}"
    @if($target) target="{{ $target }}" @endif
    {{ $attributes->class([
        'text-slate-600 underline',
    ]) }}
>
    {{ $slot }}
</a>
