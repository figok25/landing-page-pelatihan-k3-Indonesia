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
                Konten detail untuk program <strong>{{ $training['name'] }}</strong> menyusul sesuai data resmi
                dari client.
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

