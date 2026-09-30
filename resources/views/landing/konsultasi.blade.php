@php $wa = 'https://wa.me/628118500177?text='; @endphp
<section class="cta">
    <img src="{{ asset('images/hero-1.jpg') }}" alt="" loading="lazy" />
    <div class="cta-shade"></div>
    <div class="wrap cta-in">
        <div class="cta-txt">
            <span class="eyebrow eyebrow-y"><i class="bx bx-headphone"></i> LAYANAN PRIORITAS KORPORAT & INSTITUSI</span>
            <h2>Konsultasikan Kebutuhan <em>Pelatihan K3</em> Perusahaan Anda</h2>
            <p>Tim kami siap membantu kebutuhan pelatihan in-house, sertifikasi personil, audit K3, hingga konsultasi keselamatan dan kepatuhan perusahaan.</p>
            <ul>
                <li><i class="bx bx-check"></i> Pelatihan in-house</li>
                <li><i class="bx bx-check"></i> Sertifikasi personil</li>
                <li><i class="bx bx-check"></i> Konsultasi & audit K3</li>
                <li><i class="bx bx-check"></i> Riksa uji & perizinan</li>
            </ul>
        </div>
        <div class="cta-btns">
            <a class="btn btn-y btn-lg" target="_blank" rel="noopener" href="{{ $wa }}{{ rawurlencode('Halo Pelatihan K3 Indonesia, saya ingin bertanya mengenai jadwal dan biaya pelatihan K3. Mohon bantuannya, terima kasih.') }}"><i class="bx bxl-whatsapp"></i><span><small>Hubungi Kami</small>WhatsApp</span></a>
            <a class="btn btn-w btn-lg" target="_blank" rel="noopener" href="{{ $wa }}{{ rawurlencode('Halo Pelatihan K3 Indonesia, saya ingin meminta jadwal batch pelatihan K3 2026.') }}"><i class="bx bx-calendar"></i><span><small>Informasi</small>Jadwal Batch 2026</span></a>
        </div>
    </div>
</section>
