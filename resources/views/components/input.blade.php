@props([
    'type' => 'text',
    'name' => null,
    'value' => null,
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $attributes }}
/>
