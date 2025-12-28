@props([
    'title' => null,
    'subtitle' => null,
])

@php
$base = 'rounded-lg border border-slate-400 shadow-sm p-5
        bg-white text-neutral-900
        dark:bg-neutral-900 dark:text-neutral-100
        transition';

$sections = [
    'header' => 'mb-4 space-y-1',
    'body'   => '',
    'footer' => 'mt-4 pt-4 flex justify-end gap-2 border-t
                 border-neutral-200 dark:border-neutral-700',
];
@endphp

<div {{ $attributes->merge([
    'class' => $base,
]) }}>
    {{-- Header --}}
    @if ($title || $subtitle || isset($header))
        <div class="{{ $sections['header'] }}">
            @isset($header)
                {{ $header }}
            @else
                @if ($title)
                    <h3 class="text-lg font-semibold">
                        {{ $title }}
                    </h3>
                @endif

                @if ($subtitle)
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">
                        {{ $subtitle }}
                    </p>
                @endif
            @endisset
        </div>
    @endif

    {{-- Body --}}
    <div class="{{ $sections['body'] }}">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    @isset($footer)
        <div class="{{ $sections['footer'] }}">
            {{ $footer }}
        </div>
    @endisset
</div>
