@props([
    'type' => 'button',
    'variant' => 'default',
])

@php
    $baseClasses = '
        inline-flex items-center justify-center gap-2
        px-5 py-2.5 rounded-full
        font-medium text-sm
        transition-colors duration-200
        focus:outline-none focus:ring-2 focus:ring-offset-2
        focus:ring-offset-white dark:focus:ring-offset-neutral-900
        disabled:opacity-50 disabled:pointer-events-none
    ';

    $variants = [
        'default' => '
            bg-neutral-200 text-neutral-800
            hover:bg-neutral-300
            focus:ring-neutral-300
            dark:bg-neutral-700 dark:text-neutral-100
            dark:hover:bg-neutral-600
        ',

        'primary' => '
            bg-indigo-400 text-white
            hover:bg-indigo-500
            focus:ring-indigo-400
            dark:bg-indigo-500 dark:hover:bg-indigo-400
        ',

        'secondary' => '
            bg-pink-400 text-white
            hover:bg-pink-500
            focus:ring-pink-400
            dark:bg-pink-500 dark:hover:bg-pink-400
        ',

        'info' => '
            bg-sky-400 text-white
            hover:bg-sky-500
            focus:ring-sky-400
            dark:bg-sky-500 dark:hover:bg-sky-400
        ',

        'success' => '
            bg-emerald-400 text-white
            hover:bg-emerald-500
            focus:ring-emerald-400
            dark:bg-emerald-500 dark:hover:bg-emerald-400
        ',

        'warning' => '
            bg-orange-400 text-white
            hover:bg-orange-500
            focus:ring-orange-400
            dark:bg-orange-500 dark:hover:bg-orange-400
        ',

        'error' => '
            bg-red-400 text-white
            hover:bg-red-500
            focus:ring-red-400
            dark:bg-red-500 dark:hover:bg-red-400
        ',
    ];

    $variantClasses = $variants[$variant] ?? $variants['default'];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->class([$baseClasses, $variantClasses]) }}
>
    {{ $slot }}
</button>
