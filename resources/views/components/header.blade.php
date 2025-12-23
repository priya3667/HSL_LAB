<header class="flex items-center justify-between py-4 mb-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800 leading-tight">Daily Operations</h1>
        <p class="font-['Mulish'] font-medium text-[16px] leading-none tracking-normal text-[#7B7878]">December 19, 2025</p>
    </div>

    <div class="flex items-center gap-4">
        <!-- Search bar -->
        <div class="relative hidden lg:block">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </span>
            <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 bg-white border border-slate-100 rounded-full text-sm focus:outline-none w-64 shadow-sm">
        </div>

        <!-- Date view -->
        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg text-sm text-slate-600 border border-[#C5C4C4] shadow-[var(--sds-size-depth-0)_var(--sds-size-depth-025)_var(--sds-size-depth-100)_var(--sds-size-depth-0)_var(--sds-color-black-100),var(--sds-size-depth-0)_var(--sds-size-depth-025)_var(--sds-size-depth-100)_var(--sds-size-depth-0)_var(--sds-color-black-200)]">
            <img src="{{ asset('images/solar_calendar-outline.svg') }}" alt="Calendar" class="w-[18px] h-[18px]">
            <span class="font-medium">Today, Dec 19, 2025</span>
        </div>

        <!-- Notification -->
        <div class="relative p-2 text-slate-400">
            <img src="{{ asset('images/Notification.svg') }}" alt="Notification">
        </div>

        <!-- User profile (Image left of name) -->
        <div class="flex items-center gap-3 pl-2">
            <div class="rounded-full overflow-hidden">
                <img src="{{ asset('images/avatar.svg') }}" alt="User Profile">
            </div>
            <div class="flex flex-col">
                <p class="font-['Instrument_Sans'] font-medium text-[24px] leading-none tracking-normal text-[#303030]">Dr. Sarah Jones</p>
                <p class="font-['Inter'] font-normal text-[20px] leading-none tracking-normal text-[#A39D9D]">Command Center Lead</p>
            </div>
        </div>
    </div>
</header>
