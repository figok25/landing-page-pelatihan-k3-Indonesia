@vite ('resources/css/home/katalog.css')
<section class="catalog-section">
    <div class="container catalog-container">
        {{-- Section Header --}}
        <div class="catalog-header">
            <span class="catalog-eyebrow"> DIREKTORI LENGKAP </span>

            <h2 class="catalog-title">
                Katalog
                <span>109+ Sertifikasi, Pelatihan</span>
                & Jasa K3
            </h2>

            <p class="catalog-description">Telusuri berbagai program pelatihan, sertifikasi, dan jasa K3 berdasarkan kebutuhan industri Anda. Temukan informasi program, persyaratan, serta layanan yang tersedia.</p>
        </div>

        {{-- Category Filter --}}
        <div class="catalog-filters" role="tablist" aria-label="Kelompok katalog">
            <button type="button" class="catalog-filter active" data-category="all" role="tab" aria-selected="true">
                Semua Kelompok
                <span>109+</span>
            </button>

            <button type="button" class="catalog-filter" data-category="personil" role="tab" aria-selected="false">
                Personil & Manajemen
            </button>

            <button type="button" class="catalog-filter" data-category="alat-berat" role="tab" aria-selected="false">
                Alat Berat & Angkat-Angkut
            </button>

            <button type="button" class="catalog-filter" data-category="pesawat-uap" role="tab" aria-selected="false">
                Pesawat Tenaga & Uap
            </button>

            <button type="button" class="catalog-filter" data-category="konstruksi" role="tab" aria-selected="false">
                Konstruksi, Las & Ketinggian
            </button>

            <button type="button" class="catalog-filter" data-category="hse-migas" role="tab" aria-selected="false">
                HSE Skills & Migas
            </button>

            <button type="button" class="catalog-filter" data-category="lingkungan" role="tab" aria-selected="false">
                Lingkungan Hidup
            </button>

            <button type="button" class="catalog-filter" data-category="kajian" role="tab" aria-selected="false">
                Kajian Teknis & Keselamatan
            </button>

            <button type="button" class="catalog-filter" data-category="slf" role="tab" aria-selected="false">
                Jasa SLF & Riksa Uji
            </button>
        </div>

        {{-- Catalog Groups --}}
        <div class="catalog-groups">
            <div class="catalog-group" data-category="personil">
                @include ('partials.katalog.a-group')
            </div>

            <div class="catalog-group" data-category="alat-berat">
                @include ('partials.katalog.b-group')
            </div>

            <div class="catalog-group" data-category="pesawat-uap">
                @include ('partials.katalog.c-group')
            </div>

            <div class="catalog-group" data-category="konstruksi">
                @include ('partials.katalog.d-group')
            </div>

            <div class="catalog-group" data-category="hse-migas">
                @include ('partials.katalog.e-group')
            </div>

            <div class="catalog-group" data-category="lingkungan">
                @include ('partials.katalog.f-group')
            </div>

            <div class="catalog-group" data-category="kajian">
                @include ('partials.katalog.g-group')
            </div>

            {{-- Add another group here when needed --}}
            {{-- 
            <div class="catalog-group" data-category="slf">
                @include('partials.katalog.h-group')
            </div>
            --}}
        </div>
    </div>
</section>
