@props([
    'type' => 'text',
    'name' => null,
    'value' => null,
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->class([
        'rounded-lg border bg-white dark:bg-neutral-900',
    ]) }}
/>
