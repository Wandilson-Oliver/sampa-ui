@props([
    'type' => 'button',
    'variant' => 'default',
    'outline' => false,
])

@php
$base = 'inline-flex items-center justify-center gap-2
        px-5 py-3 rounded-md
        font-light text-sm
        transition-colors duration-200
        focus:outline-none focus:ring-2 focus:ring-offset-2 cursor-pointer
        focus:ring-offset-white
        disabled:opacity-50 disabled:pointer-events-none';

$solid = [
    'default'   => 'bg-slate-100 text-slate-900 hover:bg-slate-300',

    'primary'   => 'bg-blue-500 text-white hover:bg-blue-600',

    'secondary' => 'bg-slate-500 text-white hover:bg-slate-600',

    'info'      => 'bg-sky-500 text-white hover:bg-sky-600',

    'success'   => 'bg-teal-500 text-white hover:bg-teal-600',

    'warning'   => 'bg-orange-500 text-white hover:bg-orange-600',

    'error'     => 'bg-red-500 text-white hover:bg-red-600',
];

$outlineVariants = [
    'default'   => 'border border-slate-300 text-slate-700 hover:bg-slate-100',

    'primary'   => 'border border-blue-500 text-blue-600 hover:bg-blue-50',

    'secondary' => 'border border-slate-500 text-slate-600 hover:bg-slate-100',

    'info'      => 'border border-sky-500 text-sky-600 hover:bg-sky-50',

    'success'   => 'border border-teal-500 text-teal-600 hover:bg-teal-50',

    'warning'   => 'border border-orange-500 text-orange-600 hover:bg-orange-50',

    'error'     => 'border border-red-500 text-red-600 hover:bg-red-50',
];

$variantClasses = $outline
    ? ($outlineVariants[$variant] ?? $outlineVariants['default'])
    : ($solid[$variant] ?? $solid['default']);
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->class([
        $base,
        $variantClasses,
    ]) }}
>
    {{ $slot }}
</button>
