<div class="pane" data-pane>
    <nav class="pane-nav" aria-label="Kelompok layanan">
        @foreach ($catalogGroups as $g)
            <button type="button" data-target="cat-{{ $g['key'] }}" class="{{ $loop->first ? 'on' : '' }}">
                <span class="l">{{ $g['letter'] }}</span>
                <span class="t">{{ $g['label'] }}</span>
                <span class="c">{{ count($g['items']) }}</span>
            </button>
        @endforeach
    </nav>

    <div class="pane-body" tabindex="0">
        @foreach ($catalogGroups as $g)
            <section class="grp" id="cat-{{ $g['key'] }}" data-name="{{ strtolower($g['kind'].' '.$g['label']) }}">
                <h3 class="grp-t"><span>{{ $g['letter'] }}</span> {{ $g['kind'] === 'Pelatihan' ? 'Pelatihan ' : '' }}{{ $g['label'] }} <small>{{ count($g['items']) }}</small></h3>
                <div class="items">
                    @foreach ($g['items'] as $it)
                        <a class="item" href="{{ $it['url'] }}" data-text="{{ strtolower($it['title']) }}">
                            <em>{{ $it['badge'] }}</em>
                            <h4>{{ $it['title'] }}</h4>
                            <p>{{ $it['desc'] }}</p>
                            <span>Info Detail <i class="bx bx-right-arrow-alt"></i></span>
                        </a>
                    @endforeach
                </div>
            </section>
        @endforeach
        <p class="empty" hidden>Tidak ada hasil yang cocok. <a href="https://wa.me/628118500177" target="_blank" rel="noopener">Tanyakan via WhatsApp</a>.</p>
    </div>
</div>
