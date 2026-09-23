
@extends('layouts.master')

@section('title', $training['name'])

@section('description', 'Informasi pelatihan '.$training['name'].': materi, persyaratan, durasi, dan sertifikasi.')

@vite('resources/css/pages/training-show.css')

@section('content')
    {{-- Training Hero --}}
    <section class="training-hero">
        <div class="container">
            <div class="training-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ route('training.index') }}">Pelatihan</a>
                <i class="bx bx-chevron-right"></i>
                <span>{{ $training['name'] }}</span>
            </div>

            <div class="training-hero-content">
                <div class="training-hero-text">
                    <div class="training-badge-row">
                        <span class="section-badge">
                            <i class="bx bx-certification"></i>
                            Program Pelatihan K3
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
                                                    value="{{ route('training.location', ['training' => $training['slug'], 'kota' => $regionCity['slug']]) }}"
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

                    <h1>{{ $training['name'] }}</h1>

                    <p>
                        Tingkatkan kompetensi dan pemahaman Keselamatan
                        dan Kesehatan Kerja melalui program pelatihan
                        yang sesuai dengan kebutuhan perusahaan dan tenaga kerja.
                    </p>

                    <div class="training-hero-actions">
                        <a
                            href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn btn-primary">
                            Konsultasi Sekarang
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>

                        <a href="#training-information" class="btn btn-outline">
                            Lihat Informasi
                            <i class="bx bx-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div class="training-hero-visual">
                    <div class="training-visual-icon">
                        <i class="bx bx-book-bookmark"></i>
                    </div>

                    <span>Pelatihan Profesional</span>
                    <strong>Keselamatan & Kesehatan Kerja</strong>

                    <div class="training-visual-decoration decoration-one"></div>
                    <div class="training-visual-decoration decoration-two"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Training Information --}}
    <section class="training-information section-padding" id="training-information">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Informasi Program</span>
                <h2>Informasi Pelatihan</h2>
                <p>
                    Informasi lengkap mengenai program
                    {{ $training['name'] }}.
                </p>
            </div>

            <div class="training-information-grid">
                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-book-open"></i>
                    </div>
                    <h3>Deskripsi</h3>
                    <p>
                        {{-- Ganti dengan deskripsi resmi dari client --}}
                        Deskripsi program pelatihan akan disesuaikan
                        dengan data resmi dan kebutuhan peserta.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-target-lock"></i>
                    </div>
                    <h3>Tujuan Pelatihan</h3>
                    <p>
                        {{-- Ganti dengan tujuan resmi dari client --}}
                        Membantu peserta memahami prinsip, prosedur,
                        dan penerapan K3 di lingkungan kerja.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-user-check"></i>
                    </div>
                    <h3>Persyaratan</h3>
                    <p>
                        {{-- Ganti dengan persyaratan resmi dari client --}}
                        Persyaratan peserta mengikuti ketentuan
                        program dan lembaga penyelenggara.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-award"></i>
                    </div>
                    <h3>Sertifikasi</h3>
                    <p>
                        {{-- Ganti dengan informasi sertifikasi resmi --}}
                        Informasi sertifikasi mengikuti skema dan
                        ketentuan yang berlaku untuk program terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel --}}
    <section class="training-article section-padding">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Artikel</span>
                <h2>Mengenal Lebih Dalam {{ $training['name'] }}</h2>
            </div>

            @isset($city)
                @php
                    $otherCities = collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))
                        ->where('slug', '!=', $city['slug'])
                        ->take(8);
                @endphp
                <div class="training-article-body">
                    <p>
                        {{ $training['name'] }} di {{ $city['type'] }} {{ $city['name'] }} dapat diselenggarakan
                        secara in-house maupun terjadwal, mengikuti kebutuhan peserta di wilayah
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

            <article class="training-article-body">
                {{-- Artikel generik: template sama untuk semua program,
                hanya nama program yang berubah. Ganti dengan konten resmi
                dari client bila sudah tersedia. --}}
                    <p>
                        <strong>{{ $training['name'] }}</strong> merupakan salah satu program
                        pelatihan yang dirancang untuk membekali peserta dengan pengetahuan,
                        keterampilan, dan pemahaman yang berkaitan dengan Keselamatan dan
                        Kesehatan Kerja (K3). Program ini dapat menjadi bagian dari upaya
                        peningkatan kompetensi tenaga kerja sekaligus mendukung penerapan budaya
                        keselamatan di lingkungan kerja.
                    </p>

                    <p>
                        Keselamatan dan kesehatan kerja tidak hanya berkaitan dengan penggunaan
                        alat pelindung diri atau prosedur keselamatan, tetapi mencakup berbagai
                        aspek mulai dari identifikasi bahaya, penilaian risiko, pengendalian
                        risiko, prosedur kerja yang aman, hingga tanggung jawab setiap pihak di
                        dalam organisasi. Melalui {{ $training['name'] }}, peserta diarahkan untuk
                        memahami aspek-aspek tersebut sesuai dengan ruang lingkup pelatihan.
                    </p>

                    <h2>Tentang {{ $training['name'] }}</h2>

                    <p>
                        {{ $training['name'] }} disusun untuk memberikan pembelajaran yang
                        sistematis sesuai dengan bidang atau kompetensi yang menjadi fokus
                        program. Materi pelatihan dapat mencakup konsep dasar K3, ketentuan yang
                        relevan, potensi bahaya di tempat kerja, metode pengendalian risiko,
                        prosedur keselamatan, serta penerapan K3 sesuai dengan kebutuhan bidang
                        pekerjaan peserta.
                    </p>

                    <p>
                        Setiap peserta memiliki latar belakang pendidikan dan pengalaman kerja
                        yang berbeda. Oleh karena itu, penyampaian materi dilakukan secara
                        bertahap agar peserta dapat memahami konsep yang diberikan sebelum
                        menghubungkannya dengan kondisi nyata di lingkungan kerja.
                    </p>

                    <h2>Tujuan Pelatihan</h2>

                    <p>
                        Tujuan utama dari {{ $training['name'] }} adalah meningkatkan pemahaman
                        dan kompetensi peserta dalam menerapkan prinsip-prinsip K3 sesuai dengan
                        bidang yang dipelajari. Peserta diharapkan tidak hanya memahami teori,
                        tetapi juga mampu mengenali berbagai kondisi yang berhubungan dengan
                        keselamatan kerja.
                    </p>

                    <p>
                        Setelah mengikuti pelatihan, peserta diharapkan memiliki pemahaman yang
                        lebih baik mengenai potensi bahaya, faktor risiko, tindakan pencegahan,
                        serta prosedur yang dapat diterapkan untuk menciptakan lingkungan kerja
                        yang lebih aman dan terkontrol.
                    </p>

                    <h2>Materi {{ $training['name'] }}</h2>

                    <p>
                        Materi yang diberikan dalam {{ $training['name'] }} disesuaikan dengan
                        tujuan dan ruang lingkup program. Secara umum, pembelajaran dapat
                        mencakup pengenalan konsep K3, peraturan dan ketentuan terkait,
                        identifikasi bahaya, penilaian risiko, pengendalian risiko, prosedur
                        kerja aman, serta penerapan keselamatan sesuai dengan karakteristik
                        pekerjaan.
                    </p>

                    <p>
                        Untuk pelatihan yang memiliki fokus teknis tertentu, materi juga dapat
                        mencakup pembahasan mengenai peralatan, aktivitas kerja, kondisi
                        operasional, maupun aspek teknis lain yang berkaitan dengan bidang
                        pelatihan. Detail materi mengikuti kurikulum dan ruang lingkup
                        {{ $training['name'] }} yang diselenggarakan.
                    </p>

                    <h2>Metode Pembelajaran</h2>

                    <p>
                        Proses pembelajaran {{ $training['name'] }} dapat dilakukan melalui
                        kombinasi penyampaian materi, diskusi, studi kasus, pembahasan kondisi
                        lapangan, maupun metode pembelajaran lainnya sesuai dengan karakteristik
                        program.
                    </p>

                    <p>
                        Pendekatan tersebut bertujuan agar peserta dapat menghubungkan materi
                        yang dipelajari dengan kondisi yang mungkin ditemui dalam pekerjaan
                        sehari-hari. Dengan demikian, pembelajaran K3 tidak berhenti pada
                        pemahaman teori, tetapi dapat menjadi dasar dalam mengambil tindakan yang
                        lebih tepat ketika menghadapi potensi bahaya di tempat kerja.
                    </p>

                    <h2>Siapa yang Dapat Mengikuti?</h2>

                    <p>
                        {{ $training['name'] }} ditujukan bagi peserta yang membutuhkan
                        pengetahuan atau kompetensi sesuai dengan bidang pelatihan. Peserta dapat
                        berasal dari berbagai latar belakang pekerjaan, perusahaan, instansi,
                        maupun organisasi selama memenuhi persyaratan yang ditentukan untuk
                        program tersebut.
                    </p>

                    <p>
                        Program ini dapat menjadi pilihan bagi tenaga kerja yang ingin meningkatkan
                        kompetensi, personel yang memiliki tanggung jawab terhadap aspek K3,
                        maupun perusahaan yang ingin meningkatkan kemampuan tenaga kerjanya.
                        Persyaratan peserta dapat berbeda berdasarkan jenis dan jenjang pelatihan.
                    </p>

                    <h2>Manfaat bagi Peserta</h2>

                    <p>
                        Mengikuti {{ $training['name'] }} dapat membantu peserta meningkatkan
                        pemahaman mengenai keselamatan dan kesehatan kerja yang relevan dengan
                        bidang pekerjaannya. Pengetahuan tersebut dapat digunakan sebagai dasar
                        untuk mengenali potensi bahaya dan memahami tindakan pengendalian yang
                        diperlukan.
                    </p>

                    <p>
                        Selain peningkatan pengetahuan, pelatihan juga dapat membantu peserta
                        memahami tanggung jawab dan peran masing-masing dalam penerapan K3.
                        Pemahaman tersebut penting karena keselamatan kerja merupakan tanggung
                        jawab bersama yang melibatkan pekerja, pengawas, manajemen, dan pihak
                        terkait lainnya sesuai dengan peran masing-masing.
                    </p>

                    <h2>Manfaat bagi Perusahaan</h2>

                    <p>
                        Bagi perusahaan, penyelenggaraan atau pengikutsertaan tenaga kerja dalam
                        {{ $training['name'] }} dapat menjadi bagian dari program pengembangan
                        kompetensi dan peningkatan kesadaran K3. Tenaga kerja yang memiliki
                        pemahaman K3 dapat lebih memahami prosedur keselamatan yang diterapkan
                        dalam kegiatan operasional.
                    </p>

                    <p>
                        Pelatihan juga dapat mendukung perusahaan dalam membangun budaya
                        keselamatan yang lebih konsisten. Dengan adanya peningkatan pengetahuan
                        dan kesadaran, perusahaan memiliki dasar yang lebih baik untuk menjalankan
                        program K3 sesuai dengan kebutuhan operasional dan ketentuan yang
                        berlaku.
                    </p>

                    <h2>Kompetensi yang Dipelajari</h2>

                    <p>
                        Kompetensi yang diperoleh peserta melalui {{ $training['name'] }}
                        bergantung pada tujuan dan kurikulum masing-masing program. Secara umum,
                        peserta dapat memperoleh pemahaman mengenai prinsip K3, pengenalan
                        bahaya, pengendalian risiko, prosedur keselamatan, serta penerapan
                        ketentuan K3 pada aktivitas kerja yang relevan.
                    </p>

                    <p>
                        Pada program dengan kompetensi khusus, kemampuan yang dipelajari dapat
                        mencakup aspek teknis maupun prosedural sesuai dengan bidangnya. Oleh
                        karena itu, peserta perlu memperhatikan kurikulum dan persyaratan program
                        sebelum melakukan pendaftaran.
                    </p>

                    <h2>Pelaksanaan Pelatihan</h2>

                    <p>
                        Pelaksanaan {{ $training['name'] }} dilakukan berdasarkan jadwal dan
                        ketentuan program yang telah ditetapkan. Informasi mengenai waktu,
                        lokasi, metode pelaksanaan, durasi, serta ketentuan peserta dapat berbeda
                        pada setiap penyelenggaraan.
                    </p>

                    <p>
                        Sebelum pelatihan dimulai, peserta akan mendapatkan informasi mengenai
                        jadwal dan persiapan yang diperlukan. Untuk pelaksanaan tertentu,
                        peserta juga dapat diminta menyiapkan dokumen atau persyaratan
                        administratif sesuai dengan ketentuan program.
                    </p>

                    <h2>Evaluasi Peserta</h2>

                    <p>
                        Untuk memastikan peserta memahami materi yang diberikan, program
                        {{ $training['name'] }} dapat dilengkapi dengan proses evaluasi sesuai
                        dengan ketentuan pelatihan. Evaluasi dapat dilakukan melalui tes,
                        tugas, studi kasus, praktik, atau bentuk penilaian lain sesuai dengan
                        karakteristik program.
                    </p>

                    <p>
                        Evaluasi tersebut bertujuan untuk mengetahui tingkat pemahaman peserta
                        terhadap materi yang telah disampaikan serta memastikan proses
                        pembelajaran berjalan sesuai dengan tujuan program.
                    </p>

                    <h2>Sertifikat Pelatihan</h2>

                    <p>
                        Peserta yang mengikuti {{ $training['name'] }} sesuai dengan ketentuan
                        program dapat memperoleh sertifikat atau dokumen hasil pelatihan sesuai
                        dengan skema yang berlaku. Ketentuan mengenai sertifikat, persyaratan
                        kelulusan, dan bentuk dokumen yang diberikan dapat berbeda pada setiap
                        jenis pelatihan.
                    </p>

                    <p>
                        Informasi mengenai jenis sertifikat, lembaga penerbit, masa berlaku
                        apabila ada, serta persyaratan untuk mendapatkannya perlu diperhatikan
                        sebelum peserta melakukan pendaftaran. Hal tersebut penting agar peserta
                        memahami hasil yang akan diperoleh setelah menyelesaikan program.
                    </p>

                    <h2>Persyaratan Peserta</h2>

                    <p>
                        Persyaratan untuk mengikuti {{ $training['name'] }} dapat meliputi
                        pendidikan, pengalaman kerja, jabatan, usia, dokumen identitas, maupun
                        persyaratan khusus lainnya tergantung pada jenis program.
                    </p>

                    <p>
                        Tidak semua pelatihan memiliki persyaratan yang sama. Oleh karena itu,
                        peserta disarankan memastikan persyaratan program terlebih dahulu agar
                        proses pendaftaran dan pelaksanaan pelatihan dapat berjalan dengan
                        lancar.
                    </p>

                    <h2>Mengapa Pelatihan K3 Penting?</h2>

                    <p>
                        Lingkungan kerja memiliki berbagai potensi bahaya yang dapat berbeda
                        berdasarkan jenis industri dan aktivitas yang dilakukan. Tanpa pemahaman
                        yang memadai, pekerja dapat mengalami kesulitan dalam mengenali risiko
                        maupun menentukan tindakan yang tepat ketika menghadapi kondisi tertentu.
                    </p>

                    <p>
                        Pelatihan K3 menjadi salah satu sarana untuk meningkatkan pengetahuan dan
                        kesadaran tersebut. Melalui pembelajaran yang terstruktur, peserta dapat
                        memahami prinsip keselamatan yang relevan dengan pekerjaannya dan
                        menggunakannya sebagai bagian dari aktivitas kerja sehari-hari.
                    </p>

                    <h2>Daftar {{ $training['name'] }}</h2>

                    <p>
                        Bagi perusahaan maupun individu yang ingin mengikuti
                        {{ $training['name'] }}, informasi mengenai jadwal, lokasi, metode
                        pelaksanaan, biaya, persyaratan peserta, serta fasilitas yang tersedia
                        dapat dikonsultasikan terlebih dahulu kepada tim kami.
                    </p>

                    <p>
                        Konsultasi awal juga dapat membantu peserta menentukan kesesuaian program
                        dengan kebutuhan kompetensi yang ingin dikembangkan. Dengan mengetahui
                        detail program sejak awal, peserta dapat mempersiapkan dokumen dan
                        kebutuhan lainnya sebelum pelatihan dimulai.
                    </p>

                    <p>
                        Untuk informasi lebih lanjut mengenai {{ $training['name'] }} dan jadwal
                        pelaksanaan terbaru, silakan menghubungi tim kami melalui tombol
                        konsultasi yang tersedia pada halaman ini.
                    </p>

                    @isset($city)
                        <p>
                            <strong>Apakah {{ $training['name'] }} tersedia di {{ $city['name'] }}?</strong>
                            Ya, silakan hubungi tim kami untuk jadwal dan penyelenggaraan di wilayah ini.
                        </p>
                    @endisset

            </article>
        </div>
    </section>

    {{-- Training Details --}}
    <section class="training-details section-padding">
        <div class="container">
            <div class="training-details-grid">
                <div class="training-details-content">
                    <span class="section-badge">Detail Program</span>

                    <h2>Materi dan Pelaksanaan Pelatihan</h2>

                    <p>
                        Setiap program pelatihan dirancang untuk membantu
                        peserta memperoleh pengetahuan dan keterampilan
                        yang relevan dengan penerapan K3.
                    </p>

                    <div class="training-detail-block">
                        <h3>
                            <i class="bx bx-list-check"></i>
                            Materi Pelatihan
                        </h3>

                        <ul>
                            {{-- Ganti dengan materi resmi dari client --}}
                            <li>Materi dasar keselamatan dan kesehatan kerja</li>
                            <li>Identifikasi bahaya dan pengendalian risiko</li>
                            <li>Prosedur keselamatan di lingkungan kerja</li>
                            <li>Evaluasi dan penerapan kompetensi peserta</li>
                        </ul>
                    </div>

                    <div class="training-detail-block">
                        <h3>
                            <i class="bx bx-chalkboard"></i>
                            Metode Pelatihan
                        </h3>

                        <p>
                            {{-- Ganti dengan metode resmi dari client --}}
                            Metode pelatihan dapat mencakup penyampaian materi,
                            diskusi, studi kasus, praktik, dan evaluasi sesuai
                            kebutuhan program.
                        </p>
                    </div>
                </div>

                <aside class="training-summary-card">
                    <div class="training-summary-header">
                        <i class="bx bx-info-circle"></i>
                        <h3>Ringkasan Program</h3>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-time-five"></i>
                            Durasi
                        </span>
                        <strong>Menyesuaikan Program</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-map"></i>
                            Metode
                        </span>
                        <strong>Online / Offline</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-certification"></i>
                            Sertifikasi
                        </span>
                        <strong>Sesuai Ketentuan</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-group"></i>
                            Peserta
                        </span>
                        <strong>Individu / Perusahaan</strong>
                    </div>

                    <a
                        href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai Pelatihan '.$training['name'].'.') }}"
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
    <section class="training-cta section-padding">
        <div class="container">
            <div class="training-cta-content">
                <div>
                    <span class="section-badge">Butuh Informasi Lebih Lanjut?</span>

                    <h2>Siap Mengikuti Pelatihan K3?</h2>

                    <p>
                        Konsultasikan kebutuhan pelatihan Anda bersama
                        tim kami untuk mendapatkan informasi program,
                        jadwal, dan pendaftaran.
                    </p>
                </div>

                <a
                    href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi dan jadwal Pelatihan '.$training['name'].'.') }}"
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
