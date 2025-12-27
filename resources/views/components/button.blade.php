@props([
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center rounded-md cursor-pointer hover:opacity-75 text-sm font-medium transition',
    ]) }}
>
    {{ $slot }}
</button>
