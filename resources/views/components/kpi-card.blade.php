@props(['title', 'value', 'subtext', 'icon', 'color' => 'blue'])

@php
    $bgStyles = [
        'green' => 'bg-green-50 text-green-600',
        'orange' => 'bg-orange-50 text-orange-600',
        'blue' => 'bg-cyan-50 text-cyan-500',
        'red' => 'bg-red-50 text-red-500',
    ];
    $iconStyle = $bgStyles[$color] ?? $bgStyles['blue'];
@endphp

<div class="bg-white p-4 md:p-5 rounded-xl border border-[#E8E7E7] shadow-[0px_4px_4px_0px_#00000040] flex flex-col gap-4">
    <div class="flex items-center gap-3 md:gap-4">
        <div class="w-10 h-10 md:w-12 md:h-12 rounded-lg {{ $iconStyle }} flex items-center justify-center flex-shrink-0">
            {!! $icon !!}
        </div>
        <div class="flex flex-col gap-1 md:gap-2 justify-center overflow-hidden">
            <p class="text-[14px] md:text-[18px] text-[#000000] font-normal leading-tight truncate">{{ $title }}</p>
            <h3 class="text-[24px] md:text-[34px] font-extrabold text-[#272927] leading-none" style="font-family: 'Mulish', sans-serif;">{{ $value }}</h3>
            <p class="text-[12px] md:text-[16px] text-[#8B8787] font-normal leading-none truncate" style="font-family: 'Inter', sans-serif;">{{ $subtext }}</p>
        </div>
    </div>
</div>