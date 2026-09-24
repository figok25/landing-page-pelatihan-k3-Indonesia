
@extends('layouts.master')

@section('title', $service['name'])

@section('description', 'Informasi jasa '.$service['name'].': ruang lingkup, manfaat, dan legalitas.')

@vite('resources/css/pages/service-show.css')

@section('content')
    @php
        // $city hanya ada saat dibuka lewat /jasa/{slug}/{kota}.
        $cityLabel = isset($city) ? ' '.$city['type'].' '.$city['name'] : '';
    @endphp
    {{-- Service Hero --}}
    <section class="service-hero">
        <div class="container">
            <div class="service-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ route('service.index') }}">Jasa</a>
                <i class="bx bx-chevron-right"></i>
                <span>{{ $service['name'] }}{{ $cityLabel }}</span>
            </div>

            <div class="service-hero-content">
                <div class="service-hero-text">
                    <div class="training-badge-row">
                        <span class="section-badge">
                            <i class="bx bx-briefcase-alt-2"></i>
                            Jasa Konsultasi & Perizinan K3
                        </span>

                        @isset($city)
                            <span class="section-badge badge-location">
                                <i class="bx bx-map-pin"></i>
                                {{ $city['type'] }} {{ $city['name'] }}
                            </span>
                        @endisset

                        @isset($regions)
                            <div class="region-select-wrapper">
                                <i class="bx bx-map-pin"></i>
                                <select
                                    class="region-select"
                                    aria-label="Pilih Wilayah"
                                    onchange="if (this.value) { window.location.href = this.value; }">
                                    <option value="">Nasional (Semua Wilayah)</option>
                                    @foreach ($regions as $province)
                                        <optgroup label="{{ $province['name'] }}">
                                            @foreach ($province['cities'] as $regionCity)
                                                <option
                                                    value="{{ route('service.location', ['service' => $service['slug'], 'kota' => $regionCity['slug']]) }}"
                                                    @selected(isset($city) && $city['slug'] === $regionCity['slug'])>
                                                    {{ $regionCity['type'] }} {{ $regionCity['name'] }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        @endisset
                    </div>

                    <h1>{{ $service['name'] }}{{ $cityLabel }}</h1>

                    <p>
                        Dapatkan layanan konsultasi dan perizinan K3 yang sesuai dengan
                        kebutuhan dan regulasi yang berlaku bagi perusahaan Anda.
                    </p>

                    <div class="service-hero-actions">
                        <a
                            href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn btn-primary">
                            Konsultasi Sekarang
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>

                        <a href="#service-information" class="btn btn-outline">
                            Lihat Informasi
                            <i class="bx bx-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div class="service-hero-visual">
                    <div class="service-visual-icon">
                        <i class="bx bx-shield-quarter"></i>
                    </div>

                    <span>Layanan Profesional</span>
                    <strong>Konsultasi & Perizinan K3</strong>

                    <div class="service-visual-decoration decoration-one"></div>
                    <div class="service-visual-decoration decoration-two"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Information --}}
    <section class="service-information section-padding" id="service-information">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Informasi Layanan</span>
                <h2>Informasi Jasa</h2>
                <p>
                    Informasi lengkap mengenai layanan
                    {{ $service['name'] }}.
                </p>
            </div>

            <div class="service-information-grid">
                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-book-open"></i>
                    </div>
                    <h3>Deskripsi</h3>
                    <p>
                        {{-- Ganti dengan deskripsi resmi dari client --}}
                        Deskripsi layanan akan disesuaikan dengan data
                        resmi dan kebutuhan perusahaan.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-target-lock"></i>
                    </div>
                    <h3>Ruang Lingkup</h3>
                    <p>
                        {{-- Ganti dengan ruang lingkup resmi dari client --}}
                        Mencakup kajian, pemeriksaan, dan/atau pengurusan
                        sesuai jenis layanan yang dipilih.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-user-check"></i>
                    </div>
                    <h3>Manfaat</h3>
                    <p>
                        {{-- Ganti dengan manfaat resmi dari client --}}
                        Membantu perusahaan memenuhi kepatuhan regulasi
                        dan standar keselamatan kerja.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-award"></i>
                    </div>
                    <h3>Legalitas</h3>
                    <p>
                        {{-- Ganti dengan dasar hukum/legalitas resmi --}}
                        Mengikuti dasar hukum dan ketentuan yang berlaku
                        untuk jenis layanan terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel --}}
    <section class="service-article section-padding">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Artikel</span>
                <h2>Mengenal Lebih Dalam {{ $service['name'] }}{{ $cityLabel }}</h2>
            </div>

            @isset($city)
                @php
                    $otherCities = collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))
                        ->where('slug', '!=', $city['slug'])
                        ->take(8);
                @endphp
                <div class="service-article-body">
                    <p>
                        {{ $service['name'] }} dapat kami layani untuk perusahaan di {{ $city['type'] }}
                        {{ $city['name'] }} dan sekitarnya, mengikuti ketentuan yang berlaku di wilayah
                        {{ $city['province'] }}.
                    </p>

                    @if ($otherCities->isNotEmpty())
                        <p>
                            Selain {{ $city['name'] }}, kami juga melayani wilayah lain di
                            {{ $city['province'] }}, di antaranya:
                            {{ $otherCities->map(fn ($c) => $c['type'].' '.$c['name'])->implode(', ') }}.
                        </p>
                    @endif

                </div>
            @endisset

            <article class="service-article-body">
                {{-- Artikel generik: template sama untuk semua jasa,
                hanya nama layanan yang berubah. Ganti dengan konten resmi
                dari client bila sudah tersedia. --}}

                @php $__articleBlocks = []; @endphp

                @php ob_start(); @endphp
                <p>
                    <strong>{{ $service['name'] }}</strong> merupakan salah satu layanan yang
                    kami sediakan untuk membantu perusahaan, instansi, maupun pelaku usaha dalam
                    memenuhi kebutuhan keselamatan dan kesehatan kerja sesuai dengan ketentuan
                    yang berlaku. Setiap layanan memiliki ruang lingkup dan persyaratan yang
                    berbeda, sehingga pelaksanaannya perlu disesuaikan dengan jenis kegiatan,
                    kondisi tempat kerja, peralatan yang digunakan, serta kebutuhan perusahaan.
                </p>

                <p>
                    Dalam penerapannya, {{ $service['name'] }} tidak hanya berkaitan dengan
                    pemenuhan dokumen atau persyaratan administratif. Layanan ini juga menjadi
                    bagian dari upaya perusahaan dalam memastikan bahwa aspek keselamatan kerja
                    telah diperhatikan secara menyeluruh. Dengan penerapan yang tepat,
                    perusahaan dapat memiliki dasar yang lebih jelas dalam mengidentifikasi
                    potensi risiko, memenuhi persyaratan teknis, serta mendukung penerapan
                    sistem keselamatan kerja di lingkungan operasional.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Apa Itu {{ $service['name'] }}?</h2>

                <p>
                    Secara umum, {{ $service['name'] }} merupakan layanan yang berkaitan dengan
                    kebutuhan keselamatan dan kesehatan kerja, baik dari sisi pemeriksaan,
                    pengujian, sertifikasi, pelatihan, konsultasi, maupun pemenuhan persyaratan
                    tertentu sesuai dengan jenis layanan yang dipilih. Pelaksanaan layanan
                    dilakukan berdasarkan ruang lingkup pekerjaan dan ketentuan yang relevan
                    dengan objek atau kegiatan yang ditangani.
                </p>

                <p>
                    Setiap perusahaan dapat memiliki kebutuhan yang berbeda. Perusahaan dengan
                    aktivitas produksi, konstruksi, pergudangan, manufaktur, perkantoran,
                    fasilitas publik, maupun sektor lainnya dapat memiliki karakteristik risiko
                    yang tidak sama. Oleh karena itu, penerapan {{ $service['name'] }} perlu
                    mempertimbangkan kondisi aktual di lapangan agar hasil yang diperoleh
                    benar-benar sesuai dengan kebutuhan.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Tujuan Pelaksanaan {{ $service['name'] }}</h2>

                <p>
                    Salah satu tujuan utama dari {{ $service['name'] }} adalah membantu
                    perusahaan memastikan bahwa aspek keselamatan kerja telah diperhatikan
                    sesuai dengan persyaratan yang berlaku. Pelaksanaan layanan dapat membantu
                    perusahaan memperoleh informasi, dokumen, hasil pemeriksaan, maupun
                    rekomendasi yang dibutuhkan dalam mendukung pengelolaan keselamatan kerja.
                </p>

                <p>
                    Selain aspek kepatuhan, {{ $service['name'] }} juga dapat menjadi bagian
                    dari proses pengendalian risiko di tempat kerja. Identifikasi terhadap
                    kondisi yang berpotensi menimbulkan bahaya dapat membantu perusahaan
                    menentukan tindakan perbaikan yang diperlukan sebelum risiko tersebut
                    berkembang menjadi gangguan operasional maupun kecelakaan kerja.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Manfaat {{ $service['name'] }} bagi Perusahaan</h2>

                <p>
                    Pelaksanaan {{ $service['name'] }} dapat memberikan manfaat yang berbeda
                    sesuai dengan jenis dan ruang lingkup layanan. Salah satunya adalah
                    membantu perusahaan memperoleh gambaran yang lebih jelas mengenai kondisi
                    keselamatan kerja pada objek atau kegiatan yang diperiksa.
                </p>

                <p>
                    Dari sisi administratif, hasil layanan juga dapat menjadi bagian dari
                    dokumentasi perusahaan. Dokumen dan laporan yang dihasilkan dapat digunakan
                    sebagai arsip, bahan evaluasi internal, maupun sebagai bagian dari
                    pemenuhan persyaratan tertentu sesuai dengan kebutuhan perusahaan dan
                    ketentuan yang berlaku.
                </p>

                <p>
                    Dari sisi operasional, penerapan keselamatan kerja yang baik dapat
                    mendukung terciptanya lingkungan kerja yang lebih terorganisir. Perusahaan
                    dapat memiliki dasar untuk melakukan evaluasi terhadap peralatan, prosedur,
                    maupun aktivitas kerja yang memiliki potensi risiko.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Ruang Lingkup {{ $service['name'] }}</h2>

                <p>
                    Ruang lingkup {{ $service['name'] }} bergantung pada jenis layanan, objek
                    pekerjaan, serta kebutuhan perusahaan. Dalam pelaksanaannya, ruang lingkup
                    dapat mencakup aspek administratif maupun teknis yang berkaitan dengan
                    keselamatan dan kesehatan kerja.
                </p>

                <p>
                    Aspek yang diperhatikan dapat meliputi identifikasi objek, pemeriksaan
                    kondisi, pengumpulan data teknis, peninjauan dokumen pendukung, pelaksanaan
                    kegiatan sesuai prosedur, hingga penyusunan hasil pekerjaan. Detail ruang
                    lingkup akan ditentukan berdasarkan jenis layanan yang dipilih dan kondisi
                    objek yang menjadi bagian dari pekerjaan.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Proses Pelaksanaan {{ $service['name'] }}</h2>

                <p>
                    Pelaksanaan {{ $service['name'] }} pada umumnya dimulai dengan komunikasi
                    awal antara perusahaan dan tim layanan. Pada tahap ini, kebutuhan
                    perusahaan akan dipelajari untuk mengetahui jenis layanan yang sesuai,
                    objek yang akan ditangani, lokasi pekerjaan, serta dokumen atau informasi
                    yang perlu dipersiapkan.
                </p>

                <p>
                    Setelah kebutuhan diketahui, dilakukan persiapan pelaksanaan sesuai dengan
                    ruang lingkup pekerjaan. Persiapan dapat mencakup penjadwalan kegiatan,
                    pemeriksaan dokumen pendukung, koordinasi dengan pihak terkait, serta
                    persiapan teknis apabila layanan membutuhkan kegiatan di lokasi.
                </p>

                <p>
                    Tahap berikutnya adalah pelaksanaan layanan sesuai dengan prosedur dan
                    ruang lingkup yang telah ditentukan. Untuk layanan yang berkaitan dengan
                    pemeriksaan atau pengujian, kegiatan dapat melibatkan peninjauan kondisi
                    objek maupun pengambilan data teknis yang diperlukan.
                </p>

                <p>
                    Setelah seluruh tahapan selesai, hasil pekerjaan kemudian didokumentasikan
                    dalam bentuk laporan, dokumen, rekomendasi, sertifikat, atau keluaran
                    lainnya sesuai dengan karakteristik {{ $service['name'] }}. Hasil tersebut
                    selanjutnya dapat digunakan perusahaan sesuai dengan tujuan dan ketentuan
                    yang berlaku.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Dokumen dan Persiapan yang Perlu Disiapkan</h2>

                <p>
                    Persyaratan dokumen untuk {{ $service['name'] }} dapat berbeda antara satu
                    perusahaan dengan perusahaan lainnya. Perbedaan tersebut dapat dipengaruhi
                    oleh jenis layanan, objek yang diperiksa, jenis usaha, serta lokasi
                    pelaksanaan.
                </p>

                <p>
                    Oleh karena itu, perusahaan sebaiknya menyiapkan informasi dasar mengenai
                    objek atau kegiatan yang akan dilayani. Apabila terdapat dokumen teknis,
                    dokumen legalitas, data peralatan, gambar teknis, atau dokumen pendukung
                    lainnya yang berkaitan dengan layanan, informasi tersebut dapat disiapkan
                    sejak tahap konsultasi awal.
                </p>

                <p>
                    Tim kami dapat membantu memberikan informasi mengenai dokumen dan
                    persyaratan yang perlu dipersiapkan sebelum kegiatan dilaksanakan. Dengan
                    persiapan yang lebih lengkap, proses koordinasi dan pelaksanaan layanan
                    dapat dilakukan secara lebih terarah.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Siapa yang Membutuhkan {{ $service['name'] }}?</h2>

                <p>
                    {{ $service['name'] }} dapat dibutuhkan oleh berbagai jenis perusahaan,
                    instansi, maupun pelaku usaha yang memiliki kewajiban atau kebutuhan
                    tertentu dalam pengelolaan keselamatan dan kesehatan kerja. Kebutuhan
                    tersebut dapat muncul karena karakteristik kegiatan usaha, penggunaan
                    peralatan tertentu, persyaratan operasional, maupun kebutuhan pemenuhan
                    regulasi.
                </p>

                <p>
                    Beberapa sektor yang dapat memiliki kebutuhan layanan K3 antara lain
                    manufaktur, konstruksi, pertambangan, energi, pergudangan, transportasi,
                    perhotelan, rumah sakit, fasilitas publik, perkantoran, pendidikan, serta
                    berbagai sektor usaha lainnya. Namun, kebutuhan aktual tetap perlu
                    disesuaikan dengan jenis kegiatan dan kondisi masing-masing perusahaan.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Pentingnya Kepatuhan Keselamatan dan Kesehatan Kerja</h2>

                <p>
                    Keselamatan dan kesehatan kerja merupakan bagian penting dalam pengelolaan
                    operasional perusahaan. Kepatuhan terhadap ketentuan K3 tidak hanya
                    berkaitan dengan dokumen, tetapi juga dengan bagaimana perusahaan
                    mengidentifikasi bahaya, mengendalikan risiko, serta memastikan aktivitas
                    kerja dapat dilakukan dengan memperhatikan aspek keselamatan.
                </p>

                <p>
                    Penerapan K3 yang terencana juga dapat membantu perusahaan mengurangi
                    potensi gangguan terhadap kegiatan operasional. Pemeriksaan, pengujian,
                    pelatihan, konsultasi, maupun layanan K3 lainnya dapat menjadi bagian dari
                    siklus evaluasi yang dilakukan perusahaan secara berkala.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Dasar Pelaksanaan Layanan</h2>

                <p>
                    Pelaksanaan {{ $service['name'] }} dilakukan dengan memperhatikan dasar
                    hukum, standar, serta ketentuan teknis yang relevan dengan jenis layanan.
                    Ketentuan yang digunakan dapat berbeda tergantung pada objek, jenis
                    kegiatan, serta ruang lingkup pekerjaan.
                </p>

                <p>
                    Karena peraturan dan persyaratan teknis dapat mengalami perubahan,
                    perusahaan perlu memastikan bahwa proses pemenuhan persyaratan mengacu
                    pada ketentuan yang berlaku pada saat layanan dilaksanakan. Tim kami dapat
                    membantu memberikan informasi awal mengenai persyaratan yang relevan
                    berdasarkan kebutuhan perusahaan.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Kenapa Perlu Menggunakan Layanan yang Sesuai?</h2>

                <p>
                    Kebutuhan K3 sering kali memiliki aspek teknis dan administratif yang
                    saling berkaitan. Kesalahan dalam menentukan jenis layanan atau ruang
                    lingkup pekerjaan dapat menyebabkan proses menjadi kurang efektif atau
                    dokumen yang diperoleh tidak sesuai dengan kebutuhan.
                </p>

                <p>
                    Melalui konsultasi sebelum pelaksanaan, kebutuhan perusahaan dapat
                    diidentifikasi terlebih dahulu. Hal ini membantu menentukan jenis layanan,
                    objek pekerjaan, dokumen pendukung, serta tahapan yang perlu dilakukan
                    sehingga proses dapat berjalan dengan lebih terstruktur.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Konsultasi {{ $service['name'] }}</h2>

                <p>
                    Setiap perusahaan memiliki kondisi dan kebutuhan yang berbeda. Karena itu,
                    informasi mengenai {{ $service['name'] }} sebaiknya tidak hanya dilihat
                    dari nama layanan, tetapi juga dari objek, lokasi, jenis usaha, serta tujuan
                    pelaksanaannya.
                </p>

                <p>
                    Jika perusahaan masih belum mengetahui jenis layanan yang dibutuhkan,
                    konsultasi awal dapat dilakukan untuk membantu mengidentifikasi kebutuhan
                    tersebut. Tim kami dapat memberikan informasi mengenai ruang lingkup
                    pekerjaan, persyaratan dokumen, tahapan pelaksanaan, estimasi waktu, dan
                    kebutuhan teknis lainnya sesuai dengan layanan yang tersedia.
                </p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Penyedia Jasa {{ $service['name'] }}</h2>
                <p>Memilih penyedia jasa {{ $service['name'] }} merupakan salah satu tahap yang perlu diperhatikan ketika perusahaan merencanakan kegiatan pelatihan K3. Informasi mengenai program perlu dipahami agar layanan yang dipilih sesuai dengan kebutuhan peserta.</p>
                <p>Penyedia jasa dapat memberikan informasi mengenai materi, metode pelaksanaan, jadwal, durasi, serta persyaratan yang berkaitan dengan program. Kejelasan informasi membantu perusahaan menyiapkan kegiatan sejak tahap awal.</p>
                <p>Untuk mengetahui detail penyediaan jasa {{ $service['name'] }}, calon peserta dapat melakukan konsultasi terlebih dahulu.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Paket Jasa Pelatihan {{ $service['name'] }}</h2>
                <p>Paket jasa pelatihan {{ $service['name'] }} dapat menjadi pilihan bagi perusahaan yang ingin mengatur kebutuhan training secara lebih praktis. Paket layanan dapat dibahas berdasarkan jumlah peserta, bentuk pelaksanaan, serta kebutuhan program.</p>
                <p>Sebelum menentukan paket, perusahaan dapat memperoleh informasi mengenai materi, jadwal, durasi, metode, dan fasilitas yang tersedia.</p>
                <p>Informasi mengenai paket jasa {{ $service['name'] }} dapat diperoleh melalui konsultasi sebelum menentukan paket dan jadwal pelaksanaan.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa In House Training {{ $service['name'] }}</h2>
                <p>In house training {{ $service['name'] }} dapat menjadi salah satu bentuk layanan pelatihan bagi perusahaan yang ingin melaksanakan pembelajaran untuk tenaga kerja dalam satu kelompok. Pelaksanaan dapat dibicarakan berdasarkan kebutuhan dan kondisi perusahaan.</p>
                <p>Sebelum kegiatan dilakukan, perusahaan dapat menyampaikan jumlah peserta, lokasi, waktu yang diharapkan, serta kebutuhan materi.</p>
                <p>Jika perusahaan membutuhkan layanan in house {{ $service['name'] }}, konsultasi dapat dilakukan untuk membahas bentuk pelaksanaan yang tersedia.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan K3 untuk Tim Kerja</h2>
                <p>Jasa {{ $service['name'] }} dapat dimanfaatkan untuk memberikan pembelajaran K3 kepada tim kerja. Pelatihan dalam kelompok dapat membantu peserta memperoleh pemahaman yang sama mengenai topik keselamatan sesuai dengan ruang lingkup program.</p>
                <p>Materi pembelajaran dapat membantu peserta memahami potensi bahaya, risiko, tindakan pengendalian, serta prosedur kerja yang berkaitan dengan K3.</p>
                <p>Perusahaan dapat menghubungi penyedia jasa untuk memperoleh informasi lebih lengkap mengenai {{ $service['name'] }}.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan {{ $service['name'] }} Terjadwal</h2>
                <p>Jasa pelatihan {{ $service['name'] }} dengan jadwal tertentu dapat membantu calon peserta merencanakan keikutsertaan sejak awal. Informasi jadwal perlu dikonfirmasi karena waktu pelaksanaan dapat berbeda pada setiap periode.</p>
                <p>Bagi perusahaan, jadwal pelatihan dapat menjadi bahan untuk mengatur kehadiran tenaga kerja.</p>
                <p>Informasi terbaru mengenai jadwal dan layanan {{ $service['name'] }} sebaiknya dikonsultasikan sebelum pendaftaran.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan {{ $service['name'] }} untuk Individu</h2>
                <p>Individu yang membutuhkan pembelajaran K3 dapat mempertimbangkan jasa {{ $service['name'] }} sesuai dengan kebutuhan dan persyaratan program.</p>
                <p>Sebelum mendaftar, calon peserta sebaiknya memahami sasaran, materi, jadwal, durasi, serta persyaratan program.</p>
                <p>Jika membutuhkan informasi mengenai {{ $service['name'] }}, calon peserta dapat berkonsultasi mengenai jadwal dan ketentuan pendaftaran.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan K3 dengan Materi Terarah</h2>
                <p>Jasa {{ $service['name'] }} memberikan pembelajaran berdasarkan ruang lingkup materi yang telah ditentukan. Materi yang terarah membantu peserta memahami topik K3 sesuai dengan tujuan program.</p>
                <p>Peserta dapat memperoleh pembahasan mengenai bahaya, risiko, pengendalian, prosedur, dan aspek keselamatan lainnya sesuai dengan karakteristik pelatihan.</p>
                <p>Untuk mengetahui materi secara lebih lengkap, calon peserta dapat meminta informasi program {{ $service['name'] }} sebelum mendaftar.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Training {{ $service['name'] }} untuk Pengembangan SDM</h2>
                <p>Pengembangan sumber daya manusia dapat mencakup peningkatan pemahaman mengenai K3. Jasa training {{ $service['name'] }} dapat menjadi salah satu kegiatan yang dipertimbangkan perusahaan dalam program pengembangan tenaga kerja.</p>
                <p>Perusahaan dapat merencanakan peserta berdasarkan kebutuhan masing-masing bagian sesuai relevansi materi dengan tugas dan aktivitas yang dijalankan.</p>
                <p>Informasi mengenai jasa training {{ $service['name'] }} dapat diperoleh melalui konsultasi.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan K3 untuk Kebutuhan Operasional</h2>
                <p>Kebutuhan operasional perusahaan dapat melibatkan aktivitas dengan karakteristik dan potensi bahaya yang berbeda. Jasa {{ $service['name'] }} dapat digunakan untuk memberikan pembelajaran K3 yang relevan dengan ruang lingkup program.</p>
                <p>Pelatihan tidak menggantikan prosedur perusahaan. Hasil pembelajaran tetap perlu diterapkan bersama sistem keselamatan, pengawasan, komunikasi, dan kebijakan yang telah berlaku.</p>
                <p>Jika perusahaan membutuhkan layanan {{ $service['name'] }}, informasi mengenai program dapat dikonsultasikan terlebih dahulu.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan {{ $service['name'] }} dengan Dukungan Administrasi</h2>
                <p>Selain materi pembelajaran, proses pelatihan juga membutuhkan pengelolaan administrasi. Jasa {{ $service['name'] }} dapat membantu calon peserta memahami kebutuhan dokumen dan tahapan pendaftaran sesuai dengan ketentuan program.</p>
                <p>Informasi mengenai persyaratan peserta perlu diperhatikan sejak awal, karena dapat berbeda tergantung pada jenis program yang diselenggarakan.</p>
                <p>Untuk mengetahui kebutuhan administrasi {{ $service['name'] }}, calon peserta dapat melakukan konsultasi.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php ob_start(); @endphp
                <h2>Jasa Pelatihan {{ $service['name'] }} untuk Perusahaan dan Instansi</h2>
                <p>Perusahaan dan instansi dapat memanfaatkan jasa {{ $service['name'] }} untuk kebutuhan pembelajaran K3 bagi personel yang sesuai dengan sasaran program.</p>
                <p>Pelaksanaan pelatihan membutuhkan koordinasi mengenai jumlah peserta, jadwal, metode, lokasi, dan persyaratan.</p>
                <p>Untuk memperoleh informasi mengenai jasa {{ $service['name'] }}, pihak perusahaan atau instansi dapat menghubungi tim layanan.</p>
                @php $__articleBlocks[] = ob_get_clean(); @endphp

                @php shuffle($__articleBlocks); $__articleBlocks = array_slice($__articleBlocks, 0, 6); @endphp
                @foreach ($__articleBlocks as $__articleBlock)
                    {!! $__articleBlock !!}
                @endforeach

                <h2>Dapatkan Informasi {{ $service['name'] }}</h2>

                <p>
                    Untuk mendapatkan informasi lebih lanjut mengenai {{ $service['name'] }},
                    termasuk ruang lingkup layanan, persyaratan, proses pelaksanaan, estimasi
                    waktu, serta kebutuhan dokumen, perusahaan dapat menghubungi tim kami
                    melalui kontak yang tersedia pada halaman ini.
                </p>

                <p>
                    Kami siap membantu perusahaan memahami kebutuhan layanan K3 secara lebih
                    jelas sebelum proses pelaksanaan dimulai. Dengan informasi yang lengkap
                    sejak awal, proses koordinasi dapat dilakukan dengan lebih terarah dan
                    disesuaikan dengan kebutuhan masing-masing perusahaan.
                </p>

                @isset($city)
                    <p>
                        <strong>Apakah {{ $service['name'] }} tersedia di {{ $city['name'] }}?</strong>
                        Ya, silakan hubungi tim kami untuk konsultasi kebutuhan di wilayah ini.
                    </p>
                @endisset
            </article>
        </div>
    </section>

    {{-- Service Details --}}
    <section class="service-details section-padding">
        <div class="container">
            <div class="service-details-grid">
                <div class="service-details-content">
                    <span class="section-badge">Detail Layanan</span>

                    <h2>Cakupan dan Proses Pengerjaan</h2>

                    <p>
                        Setiap layanan dirancang untuk membantu perusahaan
                        memenuhi kebutuhan kepatuhan dan keselamatan kerja
                        secara menyeluruh.
                    </p>

                    <div class="service-detail-block">
                        <h3>
                            <i class="bx bx-list-check"></i>
                            Cakupan Layanan
                        </h3>

                        <ul>
                            {{-- Ganti dengan cakupan resmi dari client --}}
                            <li>Konsultasi awal kebutuhan dan regulasi terkait</li>
                            <li>Pemeriksaan/kajian teknis di lapangan</li>
                            <li>Penyusunan dokumen dan laporan</li>
                            <li>Pendampingan hingga proses selesai</li>
                        </ul>
                    </div>

                    <div class="service-detail-block">
                        <h3>
                            <i class="bx bx-chalkboard"></i>
                            Proses Pengerjaan
                        </h3>

                        <p>
                            {{-- Ganti dengan proses resmi dari client --}}
                            Proses pengerjaan dapat mencakup survei awal,
                            pengumpulan data, analisis, hingga penerbitan
                            dokumen sesuai kebutuhan layanan.
                        </p>
                    </div>
                </div>

                <aside class="service-summary-card">
                    <div class="service-summary-header">
                        <i class="bx bx-info-circle"></i>
                        <h3>Ringkasan Layanan</h3>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-time-five"></i>
                            Estimasi Waktu
                        </span>
                        <strong>Menyesuaikan Layanan</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-map"></i>
                            Area Layanan
                        </span>
                        <strong>Seluruh Indonesia</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-certification"></i>
                            Legalitas
                        </span>
                        <strong>Sesuai Ketentuan</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-group"></i>
                            Peserta
                        </span>
                        <strong>Individu / Perusahaan</strong>
                    </div>

                    <a
                        href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai '.$service['name'].'.') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn btn-primary btn-block">
                        Hubungi Admin
                        <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </aside>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="service-cta section-padding">
        <div class="container">
            <div class="service-cta-content">
                <div>
                    <span class="section-badge">Butuh Informasi Lebih Lanjut?</span>

                    <h2>Siap Menggunakan Jasa Kami?</h2>

                    <p>
                        Konsultasikan kebutuhan layanan Anda bersama tim
                        kami untuk mendapatkan informasi lingkup kerja,
                        estimasi waktu, dan biaya.
                    </p>
                </div>

                <a
                    href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}"
                    target="_blank"
                    rel="noopener"
                    class="btn btn-light">
                    Konsultasi Sekarang
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
