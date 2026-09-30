@extends ('layouts.master')

@section ('title', 'Tentang Kami')

@section ('content')
    @include ('landing.phero', [
        'crumbs' => ['Tentang Kami' => null],
        'eyebrow' => 'TENTANG KAMI',
        'heading' => 'Tentang <em>PelatihanK3 Indonesia</em>',
        'lead' => 'Konten profil perusahaan menyusul sesuai materi resmi dari client.',
    ])
@endsection
