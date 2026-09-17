@props(['items' => []])

{{-- $items: array of ['question' => string, 'answer' => string] --}}
<div class="space-y-3" itemscope itemtype="https://schema.org/FAQPage">
    @foreach ($items as $item)
        <details class="group rounded-lg border border-slate-100 bg-white p-4" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
            <summary class="cursor-pointer list-none font-semibold text-slate-800" itemprop="name">
                {{ $item['question'] }}
            </summary>
            <div class="mt-2 text-sm text-slate-600" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                <div itemprop="text">{{ $item['answer'] }}</div>
            </div>
        </details>
    @endforeach
</div>
