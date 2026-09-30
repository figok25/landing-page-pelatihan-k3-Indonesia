@extends ('layouts.master')

@section ('title', 'Pelatihan K3 Indonesia | Pelatihan, Sertifikasi & Jasa K3 di Seluruh Indonesia')

@section ('description', 'Pusat pelatihan, sertifikasi, dan jasa K3 di seluruh Indonesia: ' . $stats['total_trainings'] . ' program pelatihan dan ' . $stats['total_services'] . ' jenis jasa K3, tersedia di seluruh provinsi, kota, dan kecamatan.')

@section ('content')
    @include ('landing.hero')
    @include ('landing.why')
    @include ('landing.katalog')
    @include ('landing.konsultasi')
    @include ('landing.wilayah')
@endsection
