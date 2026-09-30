@extends ('layouts.master')

@section ('title', 'Kontak')

@section ('content')
    @include ('landing.phero', [
        'crumbs' => ['Kontak' => null],
        'eyebrow' => 'KONTAK',
        'heading' => 'Hubungi <em>Kami</em>',
        'lead' => 'Konsultasikan kebutuhan pelatihan dan jasa K3 perusahaan Anda melalui WhatsApp.',
        'actions' => '<a href="https://wa.me/628118500177" target="_blank" rel="noopener" class="btn btn-y"><i class="bx bxl-whatsapp"></i> Chat via WhatsApp</a>',
    ])
@endsection
