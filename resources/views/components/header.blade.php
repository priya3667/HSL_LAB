<header class="sticky top-0 z-40 flex items-center justify-between py-6 mb-8 bg-[#F9FEFF]/80 backdrop-blur-md -mx-4 md:-mx-8 px-4 md:px-8 border-b border-slate-100/50">
    <div class="flex flex-col gap-1.5">
        <h1 class="font-['Mulish'] font-bold text-[24.45px] leading-none tracking-normal text-[#303030]">Daily Operations</h1>
        <p class="font-['Mulish'] font-semibold text-[12.26px] leading-none tracking-normal text-[#6A6969]">December 19, 2025</p>
    </div>

    <div class="flex items-center gap-4">
        <!-- Search bar -->
        <div class="relative hidden lg:block border border-[#C5C4C4] rounded-full">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <img src="{{ asset('images/search.svg') }}" alt="Search" class="w-[18px] h-[18px]">
            </span>
            <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 bg-white rounded-full focus:outline-none w-64 font-['Mulish'] font-medium text-[12px] leading-none text-[#C5C4C4] placeholder:text-[#C5C4C4]">
        </div>

        <!-- Date view -->
        <div id="calendar-trigger" class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg text-[10px] text-slate-600 border border-[#C5C4C4] shadow-[var(--sds-size-depth-0)_var(--sds-size-depth-025)_var(--sds-size-depth-100)_var(--sds-size-depth-0)_var(--sds-color-black-100),var(--sds-size-depth-0)_var(--sds-size-depth-025)_var(--sds-size-depth-100)_var(--sds-size-depth-0)_var(--sds-color-black-200)] cursor-pointer">
            <img src="{{ asset('images/solar_calendar-outline.svg') }}" alt="Calendar" class="w-[18px] h-[18px]">
            <span id="header-date-display" class="font-medium">Today, Dec 19, 2025</span>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                flatpickr("#calendar-trigger", {
                    dateFormat: "D, M j, Y",
                    defaultDate: "2025-12-19",
                    onChange: function(selectedDates, dateStr, instance) {
                        const date = selectedDates[0];
                        const options = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
                        let displayStr = date.toLocaleDateString('en-US', options);
                        
                        // Check if today
                        const today = new Date();
                        if (date.toDateString() === today.toDateString()) {
                            displayStr = "Today, " + displayStr.split(', ').slice(1).join(', ');
                        }
                        
                        document.getElementById('header-date-display').innerText = displayStr;
                    }
                });
            });
        </script>

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
                <p class="font-['Instrument_Sans'] font-medium text-[20px] leading-none tracking-normal text-[#303030]">Dr. Sarah Jones</p>
                <p class="font-['Inter'] font-normal text-[16px] leading-none tracking-normal text-[#A39D9D]">Command Center Lead</p>
            </div>
        </div>
    </div>
</header>
