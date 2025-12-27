@props([
    'label' => null,
    'variant' => 'primary', // primary, secondary, danger
    'outline' => false,
])

@php
    // Classe base do botão
    $baseClasses = 'px-4 py-2 rounded font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';

    // Detecta se o usuário passou uma cor custom via class
    $userClasses = $attributes->get('class'); // pega a string completa de classes
    $hasCustomColor = collect(explode(' ', $userClasses))->contains(function($c){
        return str()->startsWith($c, ['bg-', 'text-', 'border-']);
    });

    // Só aplica cores padrão se não houver cor custom
    if (!$hasCustomColor) {
        // Cores padrão por variant
        $defaultColors = [
            'primary' => 'blue-600',
            'secondary' => 'gray-600',
            'danger' => 'red-600',
        ];

        $btnColor = $defaultColors[$variant] ?? 'gray-600';

        if ($outline) {
            $colorClasses = "bg-transparent border border-{$btnColor} text-{$btnColor} hover:bg-{$btnColor} hover:text-white";
        } else {
            $colorClasses = "bg-{$btnColor} text-white hover:bg-{$btnColor}-700";
        }

        $ring = "focus:ring-{$btnColor}";
    } else {
        $colorClasses = '';
        $ring = '';
    }
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses $colorClasses $ring"]) }}>
    {{ $label ?? $slot }}
</button>
