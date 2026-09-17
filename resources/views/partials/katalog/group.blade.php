{{-- dipakai lewat @include('partials.katalog.group', ['category' => ..., 'icon' => ...]) --}}
@php
    $icon = $icon ?? 'ri-shield-star-fill';
    $meta = \App\Data\TrainingCatalog::categories()[$category];
    $items = \App\Data\TrainingCatalog::byCategory($category);
@endphp

<div class="flex items-center gap-space-sm mb-space-md pb-space-xs bg-surface-container p-space-sm rounded-lg">
    <i class="{{ $icon }} text-secondary text-[24px]"></i>
    <div>
        <h3 class="font-headline-sm text-headline-sm text-primary font-bold">
            Group {{ $meta['letter'] }}: {{ $meta['label'] }}
        </h3>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
    @foreach ($items as $item)
        @php $content = \App\Data\TrainingContent::for($item['slug'], $item['name']); @endphp
        <a
            class="bg-surface-container-lowest p-space-md rounded-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between cursor-pointer block"
            href="{{ route('training.show', ['training' => $item['slug']]) }}"
        >
            <div>
                <div class="flex items-center justify-between mb-space-2xs">
                    <span class="font-label-code text-badge-id px-1.5 py-0.5 rounded bg-primary text-on-primary">
                        {{ $content['badge'] }}
                    </span>
                </div>
                <h4 class="font-headline-sm text-[1.125rem] text-primary font-bold mt-2">
                    {{ $item['name'] }}
                </h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                    {{ $content['description'] }}
                </p>
            </div>
            <div class="mt-space-sm pt-space-xs flex items-center justify-between font-label-code text-badge-id text-outline">
                <span class="text-secondary hover:underline font-bold">Info Detail →</span>
            </div>
        </a>
    @endforeach
</div>
