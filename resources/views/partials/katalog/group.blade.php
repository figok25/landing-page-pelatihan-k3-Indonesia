@php
    $type = $type ?? 'training';
    $city = $city ?? null;

    if ($type === 'jasa') {
        $meta = \App\Data\ServiceCatalog::categories()[$category];
        $items = \App\Data\ServiceCatalog::byCategory($category);
    } else {
        $meta = \App\Data\TrainingCatalog::categories()[$category];
        $items = \App\Data\TrainingCatalog::byCategory($category);
    }
@endphp

<div class="catalog-group-header">
    <div class="catalog-group-icon">
        <i class="bx bx-shield-quarter"></i>
    </div>
    <div>
        <h3 class="catalog-group-title">Group {{ $meta['letter'] }}: {{ $type === 'training' ? 'Pelatihan ' : '' }} {{ $meta['label'] }}</h3>
    </div>
</div>

<div class="catalog-items">
    @foreach ($items as $item)
        @php
            $content = $type === 'jasa'
                ? \App\Data\ServiceContent::for($item['slug'], $item['name'])
                : \App\Data\TrainingContent::for($item['slug'], $item['name']);

            if ($city) {
                $itemUrl = $type === 'jasa'
                    ? route('service.location', ['service' => $item['slug'], 'kota' => $city['slug']])
                    : route('training.location', ['training' => $item['slug'], 'kota' => $city['slug']]);
            } else {
                $itemUrl = $type === 'jasa'
                    ? route('service.show', ['service' => $item['slug']])
                    : route('training.show', ['training' => $item['slug']]);
            }
        @endphp
        <a class="catalog-item" href="{{ $itemUrl }}" data-name="{{ strtolower($item['name']) }}">
            <div>
                <div class="catalog-item-meta">
                    <span class="catalog-item-badge"> {{ $content['badge'] }} </span>

                    @if ($city)
                        <span class="catalog-item-badge catalog-item-badge-location">
                            {{ $city['type'] }} {{ $city['name'] }}
                        </span>
                    @endif
                </div>
                <h4 class="catalog-item-title">
                    @if ($type === 'training')
                        Pelatihan {{ $item['name'] }}
                    @else
                        {{ $item['name'] }}
                    @endif
                </h4>
                <p class="catalog-group-description">{{ $content['description'] }}</p>
            </div>
            <div class="catalog-item-detail">
                <span>Info Detail →</span>
            </div>
        </a>
    @endforeach
</div>
