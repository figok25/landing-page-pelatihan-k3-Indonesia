@vite ('resources/css/home/banner.css')
{{-- ========================================
    TOP INFORMATION BANNER
======================================== --}}

<section class="top-info-banner">
    <div class="container top-info-container">
        <div class="top-info-left">
            <span class="top-info-badge"> PORTAL INDUK </span>

            <span class="top-info-regulations"> Regulasi: Kemnaker RI • BNSP • Ditjen Migas • KLHK </span>
        </div>

        <div class="top-info-right">
            <span class="top-info-item">
                <i class="bx bx-medal"></i>
                Akreditasi PJK3 No. KEP.562/2022
            </span>

            <span class="top-info-item top-info-programs">
                <i class="bx bx-check-circle"></i>
                {{ $stats['total_trainings'] ?? '109+' }} Program Aktif
            </span>
        </div>
    </div>
</section>
