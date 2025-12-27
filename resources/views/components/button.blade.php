@props([
    'label' => null,
    'variant' => 'primary', // primary, secondary, danger, ghost
    'outline' => false,
])

@php
    // Classe base
    $baseClasses = 'px-4 py-2 rounded font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';

    // Detecta se o usuário passou cores custom via class
    $userClasses = $attributes->get('class');
    $hasCustomColor = collect(explode(' ', $userClasses))->contains(function($c){
        return str()->startsWith($c, ['bg-', 'text-', 'border-']);
    });

    // Cores padrão por variant
    $defaultColors = [
        'primary' => 'blue',
        'secondary' => 'gray',
        'danger' => 'red',
        'ghost' => 'gray', // ghost usa apenas hover e texto
    ];

    $color = $defaultColors[$variant] ?? 'gray';

    if (!$hasCustomColor) {
        switch ($variant) {
            case 'ghost':
                // Ghost: fundo transparente, apenas texto e hover
                $colorClasses = $outline 
                    ? "bg-transparent border border-transparent text-{$color}-500 hover:bg-{$color}-400"
                    : "bg-transparent text-{$color}-500 hover:bg-{$color}-400";
                $ring = "focus:ring-{$color}-500";
                break;

            default:
                if ($outline) {
                    $colorClasses = "bg-transparent border border-{$color}-500 text-{$color}-500 hover:bg-{$color}-500 hover:text-white";
                } else {
                    $colorClasses = "bg-{$color}-500 text-white hover:bg-{$color}-400";
                }
                $ring = "focus:ring-{$color}-500";
        }
    } else {
        $colorClasses = '';
        $ring = '';
    }
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses $colorClasses $ring"]) }}>
    {{ $label ?? $slot }}
</button>
