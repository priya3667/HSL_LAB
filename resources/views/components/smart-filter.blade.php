@props(['label', 'active' => false])

<button @class([
    'px-4 py-2 rounded-full text-[10px] font-medium transition-all border',
    'bg-slate-900 text-white border-slate-900 shadow-sm' => $active,
    'bg-white text-slate-600 border-slate-200 hover:border-slate-300 hover:bg-slate-50' => !$active,
])>
    {{ $label }}
</button>