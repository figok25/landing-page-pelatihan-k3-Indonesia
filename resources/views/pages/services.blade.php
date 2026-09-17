<x-layouts::app
    :title="'Katalog Jasa K3 | Konsultasi & Perizinan'"
    :metaDescription="'Katalog jasa konsultasi dan perizinan K3: riksa uji alat, SLF, SLO, kajian teknis, dan pengelolaan limbah B3.'"
>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Jasa', 'url' => null],
    ]" />

    <section class="mx-auto max-w-7xl px-4 py-10 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">Katalog Jasa K3</h1>
        <p class="mt-2 text-slate-600">
            Layanan konsultasi dan perizinan profesional untuk mendukung kepatuhan dan keberlanjutan bisnis Anda.
        </p>

        @foreach ($categories as $key => $label)
            @php $items = array_values(array_filter($services, fn ($s) => $s['category'] === $key)); @endphp
            @if (count($items) > 0)
                <div class="mt-10">
                    <h2 class="mb-4 text-xl font-semibold text-slate-900">{{ $label }}</h2>
                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ($items as $service)
                            <x-service-card :service="$service" />
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
</x-layouts::app>
