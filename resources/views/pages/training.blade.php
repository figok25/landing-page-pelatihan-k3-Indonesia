@extends ('layouts.master')

@section ('title', 'Katalog Pelatihan K3')
@section ('description', 'Katalog lengkap program pelatihan K3: sertifikasi personil, operator alat berat, konstruksi, migas, lingkungan, dan lainnya.')

@section ('content')
    <section class="mx-auto max-w-7xl px-4 py-10">
        <h1 class="text-3xl font-bold text-slate-900">Katalog Pelatihan K3</h1>

        @foreach ($grouped as $group)
            @if (count($group['items']) > 0)
                <div class="mt-10">
                    <h2 class="mb-4 text-xl font-semibold text-slate-900">{{ $group['label'] }}</h2>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($group['items'] as $training)
                            <a href="{{ route('training.show', ['training' => $training['slug']]) }}" class="rounded-xl border border-slate-100 bg-white p-5 shadow-sm hover:shadow-md">
                                <h3 class="font-semibold text-slate-900">{{ $training['name'] }}</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endsection
