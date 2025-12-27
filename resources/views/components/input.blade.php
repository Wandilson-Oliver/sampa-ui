@props([
    'type' => 'text',
    'name' => null,
    'value' => null,
])

@php
    // Obter o valor antigo do input, ou o valor padrão
    $inputValue = old($name, $value);

    // Se for array, converter para string (se necessário)
    if (is_array($inputValue)) {
        $inputValue = implode(',', $inputValue);
    }
@endphp

<input
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $inputValue }}"
    {{ $attributes->class([
        'rounded-lg border bg-white dark:bg-neutral-900',
    ]) }}
/>
