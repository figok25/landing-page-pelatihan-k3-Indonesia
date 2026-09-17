<x-layouts::app
    :title="$service['name'].' | Layanan Jasa K3'"
    :metaDescription="'Informasi '.$service['name'].': ruang lingkup, manfaat, dan area layanan.'"
>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Jasa', 'url' => route('service.index')],
        ['label' => $service['name'], 'url' => null],
    ]" />

    <article class="mx-auto max-w-4xl px-4 py-10 lg:px-8">

        {{-- Label Artikel --}}
        <div class="mb-3 text-xs font-bold uppercase tracking-[0.18em] text-green-600">
            PANDUAN KOMPREHENSIF
        </div>

        {{-- Judul Utama --}}
        <h1 class="text-3xl font-normal tracking-tight text-slate-900 md:text-4xl">
            Kajian Mendalam {{ $service['name'] }}
        </h1>

        {{-- Divider --}}
        <div class="mt-5 border-t border-slate-200"></div>


        {{-- =========================================================
             SECTION 1
        ========================================================== --}}
        <section class="mt-7">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    1
                </span>

                <span>
                    Pendahuluan dan Latar Belakang {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    <strong>{{ $service['name'] }}</strong> merupakan salah satu layanan
                    yang dapat menjadi bagian penting dalam mendukung kebutuhan
                    perusahaan, organisasi, maupun kegiatan operasional yang berkaitan
                    dengan keselamatan, kepatuhan, dan pengelolaan pekerjaan. Pemenuhan
                    kebutuhan terhadap layanan yang tepat dapat membantu perusahaan
                    menjalankan proses kerja secara lebih terstruktur sesuai dengan
                    kebutuhan dan kondisi yang dihadapi.
                </p>

                <p>
                    Dalam perkembangan dunia industri yang semakin kompleks, kebutuhan
                    terhadap layanan profesional seperti
                    <strong>{{ $service['name'] }}</strong> semakin berkaitan dengan
                    upaya perusahaan dalam mengelola berbagai aspek pekerjaan secara
                    sistematis. Setiap perusahaan dapat memiliki karakteristik,
                    kebutuhan, serta kondisi operasional yang berbeda sehingga
                    pendekatan terhadap layanan perlu disesuaikan dengan kebutuhan
                    aktual masing-masing perusahaan.
                </p>

                <p>
                    Penggunaan layanan profesional melalui
                    <strong>{{ $service['name'] }}</strong> dapat membantu perusahaan
                    memperoleh dukungan yang sesuai dengan ruang lingkup pekerjaan yang
                    dibutuhkan. Proses pelaksanaan layanan nantinya akan mengikuti
                    kebutuhan, ketentuan, serta data resmi yang berkaitan dengan
                    masing-masing jenis layanan.
                </p>

                <p>
                    Dari perspektif pengelolaan perusahaan, keberadaan layanan yang
                    terstruktur dapat membantu mendukung proses identifikasi kebutuhan,
                    evaluasi kondisi, maupun pelaksanaan pekerjaan sesuai dengan ruang
                    lingkup yang telah ditentukan. Hal tersebut menjadi penting terutama
                    ketika perusahaan membutuhkan dukungan profesional untuk pekerjaan
                    yang memerlukan pengetahuan atau keahlian tertentu.
                </p>

                <p>
                    Selain aspek operasional, perusahaan juga perlu memperhatikan
                    ketentuan dan persyaratan yang berlaku terhadap bidang pekerjaan
                    terkait. Oleh karena itu, penggunaan
                    <strong>{{ $service['name'] }}</strong> perlu disesuaikan dengan
                    kebutuhan perusahaan serta ketentuan yang relevan dengan jenis
                    pekerjaan yang dilaksanakan.
                </p>

            </div>
        </section>


        {{-- =========================================================
             SECTION 2
        ========================================================== --}}
        <section class="mt-10">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    2
                </span>

                <span>
                    Pentingnya {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Setiap perusahaan memiliki kebutuhan yang berbeda dalam menjalankan
                    kegiatan operasionalnya. Karena itu,
                    <strong>{{ $service['name'] }}</strong> perlu dipahami berdasarkan
                    tujuan dan kebutuhan pekerjaan yang ingin dicapai. Pemilihan layanan
                    yang sesuai dapat membantu perusahaan memperoleh dukungan yang
                    relevan dengan kondisi aktual di lapangan.
                </p>

                <p>
                    Dalam penerapannya, layanan profesional tidak hanya berkaitan dengan
                    hasil akhir, tetapi juga dengan proses pelaksanaan pekerjaan.
                    Tahapan pekerjaan, pengumpulan informasi, pemeriksaan, kajian,
                    maupun penyusunan hasil layanan dapat disesuaikan dengan ruang
                    lingkup pekerjaan yang telah disepakati.
                </p>

                <p>
                    Bagi perusahaan, penggunaan
                    <strong>{{ $service['name'] }}</strong> juga dapat menjadi bagian
                    dari upaya meningkatkan keteraturan dalam pengelolaan pekerjaan.
                    Dengan adanya dukungan dari pihak yang memiliki kompetensi sesuai
                    bidangnya, perusahaan dapat memperoleh hasil pekerjaan yang
                    disesuaikan dengan kebutuhan layanan.
                </p>

            </div>
        </section>


        {{-- =========================================================
             SECTION 3
        ========================================================== --}}
        <section class="mt-10">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    3
                </span>

                <span>
                    Ruang Lingkup {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Ruang lingkup <strong>{{ $service['name'] }}</strong> akan
                    disesuaikan dengan jenis layanan dan kebutuhan pekerjaan yang
                    diberikan oleh client. Setiap layanan dapat memiliki tahapan,
                    dokumen, proses pemeriksaan, kajian, maupun hasil pekerjaan yang
                    berbeda.
                </p>

                <p>
                    Oleh karena itu, informasi mengenai ruang lingkup layanan perlu
                    mengacu pada data resmi yang diberikan oleh client. Pendekatan ini
                    diperlukan agar informasi yang ditampilkan pada halaman
                    <strong>{{ $service['name'] }}</strong> tidak memberikan
                    keterangan yang tidak sesuai dengan layanan sebenarnya.
                </p>

                <p>
                    Detail mengenai tahapan pekerjaan, cakupan layanan, dokumen yang
                    diperlukan, serta hasil akhir pekerjaan akan ditampilkan setelah
                    data resmi layanan tersedia.
                </p>

            </div>
        </section>


        {{-- =========================================================
             SECTION 4
        ========================================================== --}}
        <section class="mt-10">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    4
                </span>

                <span>
                    Manfaat {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Manfaat dari <strong>{{ $service['name'] }}</strong> dapat
                    berbeda berdasarkan kebutuhan dan kondisi masing-masing perusahaan.
                    Secara umum, layanan profesional dapat membantu perusahaan
                    memperoleh dukungan dalam menjalankan pekerjaan yang membutuhkan
                    keahlian atau proses tertentu.
                </p>

                <p>
                    Penerapan layanan yang sesuai juga dapat mendukung perusahaan dalam
                    mengelola pekerjaan secara lebih terstruktur. Namun, manfaat dan
                    hasil yang diperoleh tetap bergantung pada ruang lingkup pekerjaan,
                    kondisi perusahaan, serta proses pelaksanaan layanan yang disepakati.
                </p>

                <p>
                    Informasi manfaat secara lebih spesifik akan disesuaikan dengan
                    karakteristik <strong>{{ $service['name'] }}</strong> berdasarkan
                    data resmi yang diberikan oleh client.
                </p>

            </div>
        </section>


        {{-- =========================================================
             SECTION 5
        ========================================================== --}}
        <section class="mt-10">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    5
                </span>

                <span>
                    Area Layanan {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    <strong>{{ $service['name'] }}</strong> dapat ditujukan untuk
                    kebutuhan perusahaan maupun organisasi sesuai dengan cakupan
                    layanan yang tersedia. Area pelaksanaan layanan akan disesuaikan
                    dengan wilayah kerja dan kebutuhan client.
                </p>

                <p>
                    Informasi wilayah layanan dapat mencakup berbagai daerah sesuai
                    dengan cakupan operasional perusahaan. Detail area layanan,
                    termasuk provinsi, kabupaten/kota, maupun wilayah lainnya, akan
                    disusun berdasarkan data wilayah dan informasi resmi yang tersedia.
                </p>

                <p>
                    Untuk memperoleh informasi mengenai ketersediaan layanan
                    <strong>{{ $service['name'] }}</strong> di wilayah tertentu,
                    client dapat menghubungi tim kami untuk mendapatkan informasi lebih
                    lanjut mengenai cakupan dan pelaksanaan layanan.
                </p>

            </div>
        </section>


        {{-- =========================================================
             SECTION 6
        ========================================================== --}}
        <section class="mt-10">

            <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 md:text-2xl">
                <span
                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white"
                >
                    6
                </span>

                <span>
                    Informasi dan Konsultasi {{ $service['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Kebutuhan setiap perusahaan terhadap
                    <strong>{{ $service['name'] }}</strong> dapat berbeda
                    berdasarkan jenis pekerjaan, lokasi, kondisi operasional, serta
                    ruang lingkup layanan yang diperlukan. Karena itu, konsultasi awal
                    dapat membantu menentukan informasi dan kebutuhan layanan yang
                    sesuai.
                </p>

                <p>
                    Konten detail mengenai
                    <strong>{{ $service['name'] }}</strong>, meliputi deskripsi,
                    ruang lingkup, manfaat, proses pelaksanaan, hasil layanan, dan area
                    layanan, menyusul sesuai data resmi dari client. Informasi tersebut
                    akan disesuaikan dengan ketentuan dan materi resmi yang diberikan
                    sehingga setiap informasi yang ditampilkan pada halaman layanan
                    tetap relevan dengan kebutuhan perusahaan.
                </p>

            </div>
        </section>


        {{-- =========================================================
             CTA
        ========================================================== --}}
        <div class="mt-12 rounded-xl border border-slate-200 bg-slate-50 p-6">

            <h2 class="text-xl font-bold text-slate-900">
                Konsultasi {{ $service['name'] }}
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-600">
                Untuk mendapatkan informasi lebih lanjut mengenai
                <strong>{{ $service['name'] }}</strong>,
                ruang lingkup, manfaat, area layanan, dan kebutuhan pekerjaan,
                silakan menghubungi tim kami.
            </p>

            <a
                href="https://wa.me/6281100000000?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}"
                target="_blank"
                rel="noopener"
                class="mt-5 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white transition hover:bg-emerald-700"
            >
                Konsultasi Sekarang →
            </a>

        </div>

    </article>
</x-layouts::app>
