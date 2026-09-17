@extends ('layouts.master')

@section ('title', 'Katalog Jasa K3')
@section ('description', 'Katalog jasa konsultasi dan perizinan K3: riksa uji alat, SLF, SLO, kajian teknis, dan pengelolaan limbah B3.')

@section ('content')
    <section class="mx-auto max-w-7xl px-4 py-10">
        <h1 class="text-3xl font-bold text-slate-900">Katalog Jasa K3</h1>

        @foreach ($categories as $key => $label)
            @php $items = array_values(array_filter($services, fn ($s) => $s['category'] === $key)); @endphp
            @if (count($items) > 0)
                <div class="mt-10">
                    <h2 class="mb-4 text-xl font-semibold text-slate-900">{{ $label }}</h2>
                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ($items as $service)
                            <a href="{{ route('service.show', ['service' => $service['slug']]) }}" class="rounded-xl border border-slate-100 bg-white p-4 shadow-sm hover:shadow-md">
                                <h3 class="font-semibold text-slate-900">{{ $service['name'] }}</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endsection
