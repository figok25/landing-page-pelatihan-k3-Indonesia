<x-layouts::app
    :title="$training['name'].' | Informasi & Sertifikasi K3'"
    :metaDescription="'Informasi pelatihan '.$training['name'].': materi, persyaratan, durasi, dan sertifikasi.'"
>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Pelatihan', 'url' => route('training.index')],
        ['label' => $training['name'], 'url' => null],
    ]" />

    <article class="mx-auto max-w-4xl px-4 py-10 lg:px-8">

        {{-- Label Artikel --}}
        <div class="mb-3 text-xs font-bold uppercase tracking-[0.18em] text-green-600">
            PANDUAN KOMPREHENSIF
        </div>

        {{-- Judul Utama --}}
        <h1 class="text-3xl font-normal tracking-tight text-slate-900 md:text-4xl">
            Kajian Mendalam {{ $training['name'] }}
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
                    Pendahuluan dan Latar Belakang {{ $training['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Pelatihan dan sertifikasi profesional untuk program
                    <strong>{{ $training['name'] }}</strong> merupakan aspek penting
                    dalam pengembangan kompetensi tenaga kerja di lingkungan industri.
                    Memiliki kompetensi melalui program
                    <strong>{{ $training['name'] }}</strong> tidak hanya berkaitan
                    dengan peningkatan pengetahuan, tetapi juga menjadi bagian dari
                    upaya perusahaan dalam menciptakan lingkungan kerja yang aman,
                    terstruktur, dan sesuai dengan kebutuhan operasional.
                </p>

                <p>
                    Di era industrialisasi yang semakin kompleks, pemahaman mengenai
                    <strong>{{ $training['name'] }}</strong> menjadi salah satu bagian
                    yang perlu diperhatikan oleh tenaga kerja maupun perusahaan.
                    Perkembangan teknologi, perubahan proses kerja, serta tuntutan
                    terhadap penerapan keselamatan dan kesehatan kerja membuat
                    kompetensi sumber daya manusia menjadi semakin penting.
                </p>

                <p>
                    Banyak organisasi menyadari bahwa investasi terhadap sumber daya
                    manusia melalui program pelatihan seperti
                    <strong>{{ $training['name'] }}</strong> dapat memberikan manfaat
                    dalam jangka panjang. Pengembangan kompetensi tenaga kerja dapat
                    mendukung peningkatan pemahaman terhadap prosedur kerja,
                    pengendalian risiko, serta penerapan praktik kerja yang lebih
                    terstruktur di lingkungan perusahaan.
                </p>

                <p>
                    Pelatihan dan sertifikasi profesional untuk
                    <strong>{{ $training['name'] }}</strong> juga dapat menjadi bagian
                    dari strategi perusahaan dalam meningkatkan kesiapan tenaga kerja.
                    Dengan adanya proses pembelajaran yang sistematis, peserta dapat
                    memperoleh pemahaman yang lebih baik mengenai bidang yang dipelajari
                    dan bagaimana kompetensi tersebut berkaitan dengan kebutuhan
                    pekerjaan di lapangan.
                </p>

                <p>
                    Jika dilihat dari perspektif hukum dan kepatuhan, penerapan
                    kompetensi yang berkaitan dengan
                    <strong>{{ $training['name'] }}</strong> perlu disesuaikan dengan
                    ketentuan dan standar yang berlaku. Perusahaan perlu memastikan
                    bahwa tenaga kerja yang menjalankan pekerjaan tertentu memiliki
                    pengetahuan dan kompetensi yang sesuai dengan tanggung jawabnya.
                </p>

                <p>
                    Penerapan prinsip-prinsip yang berkaitan dengan
                    <strong>{{ $training['name'] }}</strong> di lapangan juga dapat
                    menghadapi berbagai dinamika. Kondisi operasional, karakteristik
                    pekerjaan, kesiapan sumber daya manusia, serta penerapan prosedur
                    dapat menjadi faktor yang memengaruhi pelaksanaan pekerjaan.
                </p>

                <p>
                    Oleh karena itu, peningkatan kompetensi melalui program
                    <strong>{{ $training['name'] }}</strong> dapat menjadi salah satu
                    langkah dalam mendukung proses pengembangan sumber daya manusia.
                    Pelatihan yang dilakukan secara terarah memberikan kesempatan
                    kepada peserta untuk memahami konsep, prosedur, serta penerapan
                    kompetensi yang relevan dengan bidang pekerjaannya.
                </p>

                <p>
                    Lebih lanjut, sertifikasi dapat menjadi salah satu bentuk
                    dokumentasi kompetensi yang diperoleh peserta setelah mengikuti
                    proses pelatihan dan evaluasi sesuai ketentuan program. Bagi
                    perusahaan, keberadaan tenaga kerja yang memiliki kompetensi yang
                    sesuai dapat mendukung proses pengelolaan pekerjaan dan peningkatan
                    kualitas sumber daya manusia.
                </p>

                <p>
                    Konten detail mengenai program
                    <strong>{{ $training['name'] }}</strong>, meliputi deskripsi,
                    tujuan, materi, persyaratan, metode pelaksanaan, durasi, dan
                    sertifikasi, menyusul sesuai data resmi dari client. Informasi
                    tersebut akan disesuaikan dengan data dan ketentuan resmi yang
                    diberikan sehingga informasi pada halaman program tetap relevan
                    dan dapat dipertanggungjawabkan.
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
                    Pentingnya Kompetensi {{ $training['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Kompetensi dalam bidang
                    <strong>{{ $training['name'] }}</strong> memiliki hubungan
                    dengan kesiapan tenaga kerja dalam menjalankan tanggung jawab
                    pekerjaannya. Pemahaman terhadap prosedur dan prinsip kerja yang
                    sesuai dapat membantu tenaga kerja menjalankan aktivitas secara
                    lebih terarah.
                </p>

                <p>
                    Melalui pelatihan yang terstruktur, peserta dapat memperoleh
                    kesempatan untuk mempelajari berbagai aspek yang berkaitan dengan
                    <strong>{{ $training['name'] }}</strong>. Materi pembelajaran
                    nantinya akan disesuaikan dengan kurikulum dan data resmi program
                    yang diberikan oleh client.
                </p>

                <p>
                    Bagi perusahaan, pengembangan kompetensi tenaga kerja juga dapat
                    menjadi bagian dari upaya membangun budaya kerja yang lebih baik.
                    Kompetensi yang sesuai dengan kebutuhan pekerjaan dapat mendukung
                    proses operasional sekaligus membantu perusahaan dalam memenuhi
                    persyaratan yang relevan dengan bidang pekerjaannya.
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
                    Penerapan {{ $training['name'] }} di Lingkungan Kerja
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Penerapan kompetensi
                    <strong>{{ $training['name'] }}</strong> pada lingkungan kerja
                    perlu memperhatikan karakteristik pekerjaan dan kondisi operasional
                    masing-masing perusahaan. Setiap organisasi dapat memiliki
                    kebutuhan yang berbeda sehingga penerapan kompetensi harus
                    disesuaikan dengan kondisi aktual di lapangan.
                </p>

                <p>
                    Pemahaman yang diperoleh melalui pelatihan dapat menjadi dasar bagi
                    peserta untuk menjalankan tugas sesuai dengan prosedur yang
                    ditetapkan. Sementara itu, perusahaan tetap memiliki tanggung jawab
                    untuk menyediakan lingkungan kerja, prosedur, dan pengawasan yang
                    mendukung penerapan kompetensi tersebut.
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
                    Pelatihan dan Sertifikasi {{ $training['name'] }}
                </span>
            </h2>

            <div class="prose prose-slate mt-6 max-w-none leading-7">

                <p>
                    Program pelatihan dan sertifikasi
                    <strong>{{ $training['name'] }}</strong> dirancang sebagai sarana
                    pengembangan kompetensi tenaga kerja. Peserta dapat memperoleh
                    pengetahuan dan pemahaman yang berkaitan dengan bidang pelatihan
                    sesuai dengan materi resmi yang nantinya disediakan oleh client.
                </p>

                <p>
                    Proses pelaksanaan, metode pembelajaran, durasi, persyaratan,
                    materi, serta mekanisme sertifikasi akan mengikuti ketentuan resmi
                    untuk masing-masing program. Oleh sebab itu, informasi detail pada
                    halaman ini akan diperbarui setelah data resmi program diterima.
                </p>

            </div>
        </section>


        {{-- =========================================================
             CTA
        ========================================================== --}}
        <div class="mt-12 rounded-xl border border-slate-200 bg-slate-50 p-6">

            <h2 class="text-xl font-bold text-slate-900">
                Informasi Program {{ $training['name'] }}
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-600">
                Untuk informasi lebih lanjut mengenai jadwal, persyaratan,
                materi, durasi, dan sertifikasi program
                <strong>{{ $training['name'] }}</strong>,
                silakan menghubungi tim kami.
            </p>

            <a
                href="https://wa.me/6281100000000?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.') }}"
                target="_blank"
                rel="noopener"
                class="mt-5 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white transition hover:bg-emerald-700"
            >
                Konsultasi Sekarang →
            </a>

        </div>

    </article>
</x-layouts::app>
