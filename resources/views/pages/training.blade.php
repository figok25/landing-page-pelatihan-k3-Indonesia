<x-layouts::app
    :title="'Katalog Pelatihan K3 | 169 Program Pelatihan'"
    :metaDescription="'Katalog lengkap 169 program pelatihan K3: sertifikasi personil, operator alat berat, konstruksi, migas, lingkungan, dan lainnya.'">
    <x-breadcrumb
        :items="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Pelatihan', 'url' => null],
        ]" />

    <section class="mx-auto max-w-7xl px-4 py-10 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">Katalog Pelatihan K3</h1>
        <p class="mt-2 text-slate-600">Dari pelatihan dasar hingga sertifikasi lanjutan, seluruh program kami dirancang untuk meningkatkan kompetensi dan keselamatan kerja.</p>

        @foreach ($grouped as $key => $group)
            @if (count($group['items']) > 0)
                <div class="mt-10">
                    <h2 class="mb-4 text-xl font-semibold text-slate-900">{{ $group['label'] }}</h2>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($group['items'] as $training)
                            <x-program-card :training="$training" />
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
</x-layouts::app>
