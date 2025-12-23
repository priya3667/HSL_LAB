@props(['title', 'height' => 'h-[280px]'])

<div class="p-6 rounded-3xl flex flex-col h-full border border-[#E8E7E7] shadow-[0px_3px_50px_0px_rgba(0,0,0,0.08)] bg-white">
    <div class="flex items-center justify-between mb-8">
        <h3 class="font-['Inter'] font-semibold text-[20px] leading-none tracking-normal text-black">{{ $title }}</h3>
        <button class="text-slate-300 hover:text-slate-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
        </button>
    </div>
    
    <div class="flex-1 relative {{ $height }} w-full min-h-[200px]">
        {{ $slot }}
    </div>
</div>
