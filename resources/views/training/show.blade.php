@extends ('layouts.master')

@section ('title', $training['name'])
@section ('description', 'Informasi pelatihan '.$training['name'].': materi, persyaratan, durasi, dan sertifikasi.')

@section ('content')
    <section class="mx-auto max-w-4xl px-4 py-10">
        <h1 class="text-3xl font-bold text-slate-900">{{ $training['name'] }}</h1>

        {{-- TODO: isi Deskripsi, Tujuan, Materi, Persyaratan, Metode, Durasi,
        dan Sertifikasi sesuai data resmi per program dari client. --}}
        <div class="prose prose-slate mt-6 max-w-none">

            <p>
                Pelatihan dan sertifikasi
                <strong>{{ $training['name'] }}</strong>
                merupakan aspek krusial dalam ekosistem keselamatan kerja saat ini.
                Memiliki kompetensi di bidang ini bukan hanya tentang mematuhi regulasi,
                tetapi juga tentang menciptakan budaya kerja yang aman dan efisien.
                Dalam praktiknya, pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>
                memberikan landasan yang kuat bagi perusahaan untuk terus berkembang
                tanpa mengabaikan aspek fundamental keselamatan dan kesehatan kerja
                para pekerjanya.
            </p>

            <p>
                Di era industrialisasi yang semakin kompleks, pemahaman mendalam mengenai
                <strong>{{ $training['name'] }}</strong>
                menjadi syarat mutlak.
                Banyak organisasi yang menyadari bahwa investasi pada sumber daya manusia
                melalui program ini akan menghasilkan pengembalian (ROI) yang jauh lebih
                besar dalam bentuk penurunan angka kecelakaan kerja, peningkatan moral
                karyawan, serta efisiensi proses operasional secara keseluruhan.
                Pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>.
            </p>

            <p>
                Di era industrialisasi yang semakin kompleks, pemahaman mendalam mengenai
                <strong>{{ $training['name'] }}</strong>
                menjadi syarat mutlak.
                Banyak organisasi yang menyadari bahwa investasi pada sumber daya manusia
                melalui program ini akan menghasilkan pengembalian (ROI) yang jauh lebih
                besar dalam bentuk penurunan angka kecelakaan kerja, peningkatan moral
                karyawan, serta efisiensi proses operasional secara keseluruhan.
                Pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>.
            </p>

            <p>
                Jika kita melihat dari perspektif hukum dan kepatuhan, standar terkait
                <strong>{{ $training['name'] }}</strong>
                telah diatur sedemikian rupa oleh kementerian terkait untuk memastikan
                bahwa setiap elemen dalam rantai produksi dapat beroperasi dengan tingkat
                risiko yang terkendali.
                Oleh karena itu, para praktisi diwajibkan untuk mengikuti pembaruan ilmu
                dan prosedur secara berkala agar tidak tertinggal oleh kemajuan teknologi
                dan perubahan standar internasional.
            </p>

            <p>
                Jika kita melihat dari perspektif hukum dan kepatuhan, standar terkait
                <strong>{{ $training['name'] }}</strong>
                telah diatur sedemikian rupa oleh kementerian terkait untuk memastikan
                bahwa setiap elemen dalam rantai produksi dapat beroperasi dengan tingkat
                risiko yang terkendali.
                Oleh karena itu, para praktisi diwajibkan untuk mengikuti pembaruan ilmu
                dan prosedur secara berkala agar tidak tertinggal oleh kemajuan teknologi
                dan perubahan standar internasional.
            </p>

            <p>
                Penerapan prinsip-prinsip
                <strong>{{ $training['name'] }}</strong>
                di lapangan seringkali menghadapi berbagai dinamika.
                Mulai dari resistensi terhadap perubahan, keterbatasan anggaran,
                hingga kurangnya kesadaran dari pihak manajemen menengah.
                Namun, dengan pendekatan yang sistematis dan didukung oleh komitmen
                pimpinan tingkat atas, segala hambatan tersebut dapat diubah menjadi
                peluang untuk melakukan perbaikan berkelanjutan.
            </p>

            <p>
                Penerapan prinsip-prinsip
                <strong>{{ $training['name'] }}</strong>
                di lapangan seringkali menghadapi berbagai dinamika.
                Mulai dari resistensi terhadap perubahan, keterbatasan anggaran,
                hingga kurangnya kesadaran dari pihak manajemen menengah.
                Namun, dengan pendekatan yang sistematis dan didukung oleh komitmen
                pimpinan tingkat atas, segala hambatan tersebut dapat diubah menjadi
                peluang untuk melakukan perbaikan berkelanjutan.
            </p>

            <p>
                Lebih lanjut mengenai
                <strong>{{ $training['name'] }}</strong>,
                kita dapat melihat bahwa peran sertifikasi sangat berdampak pada
                kredibilitas individu maupun korporasi di mata mitra bisnis dan pelanggan.
                Proses audit dan evaluasi yang ketat dalam pelatihan ini memastikan bahwa
                setiap peserta yang lulus benar-benar memiliki kapasitas teknis dan
                manajerial yang siap diuji di lapangan.
                Pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>.
            </p>

            <p>
                Lebih lanjut mengenai
                <strong>{{ $training['name'] }}</strong>,
                kita dapat melihat bahwa peran sertifikasi sangat berdampak pada
                kredibilitas individu maupun korporasi di mata mitra bisnis dan pelanggan.
                Proses audit dan evaluasi yang ketat dalam pelatihan ini memastikan bahwa
                setiap peserta yang lulus benar-benar memiliki kapasitas teknis dan
                manajerial yang siap diuji di lapangan.
                Pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>.
            </p>

            <p>
                Pelatihan dan sertifikasi
                <strong>{{ $training['name'] }}</strong>
                merupakan aspek krusial dalam ekosistem keselamatan kerja saat ini.
                Memiliki kompetensi di bidang ini bukan hanya tentang mematuhi regulasi,
                tetapi juga tentang menciptakan budaya kerja yang aman dan efisien.
                Dalam praktiknya, pelatihan dan sertifikasi profesional untuk
                <strong>{{ $training['name'] }}</strong>
                memberikan landasan yang kuat bagi perusahaan untuk terus berkembang
                tanpa mengabaikan aspek fundamental keselamatan dan kesehatan kerja
                para pekerjanya.
            </p>

        </div>

        <a
            href="https://wa.me/6281100000000?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.') }}"
            target="_blank"
            rel="noopener"
            class="mt-8 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700"
        >
            Konsultasi Sekarang →
        </a>
    </section>
@endsection
