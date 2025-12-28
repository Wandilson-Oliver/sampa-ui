@props([
    'type' => 'button',
    'variant' => 'default',
])

@php
$base = 'inline-flex items-center justify-center gap-2
        px-5 py-3 rounded-md
        font-light text-sm
        transition-colors duration-200
        focus:outline-none focus:ring-2 focus:ring-offset-2 cursor-pointer
        focus:ring-offset-white dark:focus:ring-offset-neutral-900
        disabled:opacity-50 disabled:pointer-events-none';

$variants = [
    'default'   => 'bg-slate-100 text-slate-900 hover:bg-slate-300
                    dark:bg-slate-50 dark:text-white dark:hover:bg-slate-200',

    'primary'   => 'bg-blue-500 text-white hover:bg-blue-600
                    dark:bg-blue-600 dark:hover:bg-blue-600',

    'secondary' => 'bg-slate-500 text-white hover:bg-slate-600
                    dark:bg-slate-600 dark:hover:bg-slate-600',

    'info'      => 'bg-sky-500 text-white hover:bg-sky-600
                    dark:bg-sky-600 dark:hover:bg-sky-600',

    'success'   => 'bg-teal-500 text-white hover:bg-teal-600
                    dark:bg-teal-600 dark:hover:bg-teal-600',

    'warning'   => 'bg-orange-500 text-white hover:bg-orange-600
                    dark:bg-orange-600 dark:hover:bg-orange-600',

    'error'     => 'bg-red-500 text-white hover:bg-red-600
                    dark:bg-red-600 dark:hover:bg-red-600',
];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => $base.' '.($variants[$variant] ?? $variants['default']),
    ]) }}
>
    {{ $slot }}
</button>
