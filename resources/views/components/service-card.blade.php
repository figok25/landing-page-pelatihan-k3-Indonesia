@props (['service'])

<div
    class="flex items-start gap-3 rounded-xl border border-slate-100 bg-white p-4 shadow-sm transition hover:shadow-md">
    <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
        ✓
    </span>
    <div>
        <h3 class="font-semibold text-slate-900">{{ $service['name'] }}</h3>
        <a
            href="{{ route('service.show', ['service' => $service['slug']]) }}"
            class="mt-1 inline-block text-sm font-semibold text-emerald-700 hover:underline">
            Info Detail →
        </a>
    </div>
</div>
