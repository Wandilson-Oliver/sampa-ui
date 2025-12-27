@props([
    'title' => null,
    'subtitle' => null,
])

<div {{ $attributes->class(['rounded-lg border bg-white dark:bg-neutral-900 shadow p-4']) }}>
    {{-- Header --}}
    @if($title || $subtitle || isset($header))
        <div class="mb-4">
            @isset($header)
                {{ $header }}
            @else
                @if($title)
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
                @endif
                @if($subtitle)
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $subtitle }}</p>
                @endif
            @endif
        </div>
    @endif

    {{-- Body --}}
    <div class="">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    @isset($footer)
        <div class="border-t mt-3 pt-3 flex gap-2 space-x-2">
            {{ $footer }}
        </div>
    @endisset
</div>
