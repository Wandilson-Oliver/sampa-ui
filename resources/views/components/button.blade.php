@props([
    'type' => 'button'
])

@php
$base = 'inline-flex items-center justify-center gap-2
        px-4 py-2 rounded-md
        font-medium text-sm
        transition-colors duration-200
        focus:outline-none focus:ring-2 focus:ring-offset-2
        focus:ring-offset-white dark:focus:ring-offset-neutral-900
        disabled:opacity-50 disabled:pointer-events-none';

$variants = [
    'default'   => 'bg-slate-50 text-neutral-900 hover:bg-neutral-300
                    dark:bg-slate-50 dark:text-white dark:hover:bg-neutral-200',

    'primary'   => 'bg-blue-500 text-white hover:bg-blue-600
                    dark:bg-blue-600 dark:hover:bg-blue-600',

    'secondary' => 'bg-pink-500 text-white hover:bg-pink-600
                    dark:bg-pink-600 dark:hover:bg-pink-600',

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
    {{ $attributes->class([
        $base,
        $variants[$attributes->get('variant', 'default')] ?? $variants['default'],
    ]) }}
>
    {{ $slot }}
</button>
