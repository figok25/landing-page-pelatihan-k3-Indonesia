@props (['training'])

<div class="flex flex-col rounded-xl border border-slate-100 bg-white p-5 shadow-sm transition hover:shadow-md">
    <span class="mb-3 inline-block w-fit rounded bg-emerald-50 px-2 py-1 text-xs font-semibold text-emerald-700">
        K3
    </span>
    <h3 class="mb-2 font-semibold text-slate-900">{{ $training['name'] }}</h3>
    <a
        href="{{ route('training.show', ['training' => $training['slug']]) }}"
        class="mt-auto inline-flex items-center gap-1 text-sm font-semibold text-emerald-700 hover:underline">
        Detail Pelatihan →
    </a>
</div>
