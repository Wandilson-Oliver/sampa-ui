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
                    dark:bg-neutral-700 dark:text-white dark:hover:bg-neutral-600',

    'primary'   => 'bg-blue-400 text-white hover:bg-blue-500
                    dark:bg-blue-500 dark:hover:bg-blue-600',

    'secondary' => 'bg-fuchsia-400 text-white hover:bg-fuchsia-500
                    dark:bg-fuchsia-500 dark:hover:bg-fuchsia-600',

    'info'      => 'bg-sky-400 text-white hover:bg-sky-500
                    dark:bg-sky-500 dark:hover:bg-sky-600',

    'success'   => 'bg-emerald-400 text-white hover:bg-emerald-500
                    dark:bg-emerald-500 dark:hover:bg-emerald-600',

    'warning'   => 'bg-amber-400 text-white hover:bg-amber-500
                    dark:bg-amber-500 dark:hover:bg-amber-600',

    'error'     => 'bg-red-400 text-white hover:bg-red-500
                    dark:bg-red-500 dark:hover:bg-red-600',
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
