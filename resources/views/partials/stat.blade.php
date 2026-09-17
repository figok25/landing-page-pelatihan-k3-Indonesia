@vite ('resources/css/home/banner.css')
{{-- ========================================
    STATISTICS BANNER
======================================== --}}

<section class="stats-banner">
    <div class="container stats-container">
        {{-- Training --}}
        <div class="stats-item">
            <div class="stats-icon">
                <i class="bx bx-award"></i>
            </div>

            <div class="stats-content">
                <strong class="stats-number"> {{ $stats['total_trainings'] ?? '109+' }} </strong>

                <span class="stats-label"> Program Pelatihan Aktif </span>
            </div>
        </div>

        {{-- Regulation --}}
        <div class="stats-item">
            <div class="stats-icon stats-icon-gold">
                <i class="bx bx-buildings"></i>
            </div>

            <div class="stats-content">
                <strong class="stats-number"> 100% </strong>

                <span class="stats-label"> Regulasi Resmi Negara </span>
            </div>
        </div>

        {{-- Graduation --}}
        <div class="stats-item">
            <div class="stats-icon">
                <i class="bx bx-shield-quarter"></i>
            </div>

            <div class="stats-content">
                <strong class="stats-number"> 99.4% </strong>

                <span class="stats-label"> Tingkat Kelulusan Uji </span>
            </div>
        </div>

        {{-- Alumni --}}
        <div class="stats-item">
            <div class="stats-icon stats-icon-gold">
                <i class="bx bx-group"></i>
            </div>

            <div class="stats-content">
                <strong class="stats-number"> 12.000+ </strong>

                <span class="stats-label"> Alumni Terdaftar TemanK3 </span>
            </div>
        </div>
    </div>
</section>
