@props([
    'type' => 'button'
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 rounded-md text-sm font-medium
                    bg-blue-600 text-white hover:bg-blue-700
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500'
    ]) }}
>
    {{ $slot }}
</button>
