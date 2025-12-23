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

<div class="bg-white p-5 rounded-xl border border-[#E8E7E7] shadow-[0px_3px_50px_0px_#00000014] flex flex-col gap-4">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-lg {{ $iconStyle }} flex items-center justify-center">
            {!! $icon !!}
        </div>
        <div class="flex flex-col gap-2 justify-center">
            <p class="text-[22px] text-[#000000] font-normal leading-tight">{{ $title }}</p>
            <h3 class="text-[38px] font-extrabold text-[#272927] leading-none" style="font-family: 'Mulish', sans-serif;">{{ $value }}</h3>
            <p class="text-[20px] text-[#8B8787] font-normal leading-none" style="font-family: 'Inter', sans-serif;">{{ $subtext }}</p>
        </div>
    </div>
</div>