@php
    $meta = \App\Data\TrainingCatalog::categories()[$category];
    $items = \App\Data\TrainingCatalog::byCategory($category);
@endphp

<div class="catalog-group-header">
    <div class="catalog-group-icon">
        <i class="bx bx-shield-quarter"></i>
    </div>
    <div>
        <h3 class="catalog-group-title">
            Group {{ $meta['letter'] }}: {{ $meta['label'] }}
        </h3>
    </div>
</div>

<div class="catalog-items">
    @foreach ($items as $item)
        @php $content = \App\Data\TrainingContent::for($item['slug'], $item['name']); @endphp
        <a
            class="catalog-item"
            href="{{ route('training.show', ['training' => $item['slug']]) }}"
        >
            <div>
                <div class="catalog-item-meta">
                    <span class="catalog-item-badge">
                        {{ $content['badge'] }}
                    </span>
                </div>
                <h4 class="catalog-item-title">
                    {{ $item['name'] }}
                </h4>
                <p class="catalog-group-description">
                    {{ $content['description'] }}
                </p>
            </div>
            <div class="catalog-item-detail">
                <span">Info Detail →</span>
            </div>
        </a>
    @endforeach
</div>
