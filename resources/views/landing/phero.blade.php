{{-- Hero halaman dalam. Props: $crumbs (array label=>url|null), $eyebrow, $heading (HTML aman), $lead, $image --}}
<section class="phero">
    <img src="{{ asset('images/' . ($image ?? 'hero-2.jpg')) }}" alt="" class="phero-bg" />
    <div class="phero-shade"></div>
    <div class="wrap phero-in">
        <nav class="crumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><i class="bx bx-home-alt"></i> Beranda</a>
            @foreach ($crumbs as $label => $url)
                <i class="bx bx-chevron-right"></i>
                @if ($url) <a href="{{ $url }}">{{ $label }}</a> @else <span>{{ $label }}</span> @endif
            @endforeach
        </nav>
        <div class="phero-grid">
            <div class="phero-txt">
                <div class="phero-tags">
                    <span class="eyebrow eyebrow-y">{!! $eyebrow !!}</span>
                    @isset($tags) {!! $tags !!} @endisset
                </div>
                <h1>{!! $heading !!}</h1>
                @isset($lead)<p>{{ $lead }}</p>@endisset
                @isset($actions)<div class="hero-act phero-act">{!! $actions !!}</div>@endisset
            </div>
            @isset($side)
                <aside class="phero-side">{!! $side !!}</aside>
            @endisset
        </div>
    </div>
</section>
