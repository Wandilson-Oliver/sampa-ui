@props([
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center rounded-md text-sm font-medium transition',
    ]) }}
>
    {{ $slot }}
</button>
