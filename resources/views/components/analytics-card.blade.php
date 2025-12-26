@props(['title', 'height' => 'h-[280px]'])

<div {{ $attributes->merge(['class' => 'p-6 rounded-3xl flex flex-col h-[300px] border border-[#E8E7E7] shadow-[0px_4px_4px_0px_#00000040] bg-white']) }}>
    <div class="flex items-center justify-between pb-2">
        <h3 class="font-['Inter'] font-semibold text-[16px] leading-none tracking-normal text-black">{{ $title }}</h3>
    </div>
    
    <div class="flex-1 w-full min-h-0 overflow-hidden">
        {{ $slot }}
    </div>
</div>
