<header class="sticky top-0 z-40 flex items-center justify-between py-4 md:py-4 mb-8 bg-[#F9FEFF]/80 backdrop-blur-md -mx-4 md:-mx-8 px-4 md:px-8 border-b border-slate-100/50">
    <div class="flex flex-col gap-1">
        <h1 class="font-['Mulish'] font-bold text-[18px] md:text-[24.45px] leading-none tracking-normal text-[#303030]">Daily Operations</h1>
        <p class="font-['Mulish'] font-semibold text-[10px] md:text-[12.26px] leading-none tracking-normal text-[#6A6969]">December 19, 2025</p>
    </div>

    <div class="flex items-center gap-2 md:gap-4">
        <div class="relative block border border-[#C5C4C4] rounded-full">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <img src="{{ asset('images/search.svg') }}" alt="Search" class="w-[14px] h-[14px] md:w-[18px] md:h-[18px]">
            </span>
            <input type="text" placeholder="Search" class="pl-8 md:pl-10 pr-4 py-1.5 md:py-2 bg-white rounded-full focus:outline-none w-20 sm:w-40 md:w-64 font-['Mulish'] font-medium text-[10px] md:text-[12px] leading-none text-[#C5C4C4] placeholder:text-[#C5C4C4]">
        </div>

        <div id="calendar-trigger" class="flex items-center gap-1.5 md:gap-2 px-2 md:px-4 py-1.5 md:py-2 bg-white rounded-lg text-[9px] md:text-[10px] text-slate-600 border border-[#C5C4C4] shadow-sm cursor-pointer whitespace-nowrap">
            <img src="{{ asset('images/solar_calendar-outline.svg') }}" alt="Calendar" class="w-4 h-4 md:w-[18px] md:h-[18px]">
            <span id="header-date-display" class="font-medium hidden md:inline">Dec 19, 2025</span>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                flatpickr("#calendar-trigger", {
                    dateFormat: "D, M j, Y",
                    defaultDate: "2025-12-19",
                    disableMobile: true,
                    onChange: function(selectedDates, dateStr, instance) {
                        const date = selectedDates[0];
                        const options = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
                        let displayStr = date.toLocaleDateString('en-US', options);
                        const today = new Date();
                        if (date.toDateString() === today.toDateString()) {
                            displayStr = "Today, " + displayStr.split(', ').slice(1).join(', ');
                        }
                        document.getElementById('header-date-display').innerText = displayStr;
                    }
                });
            });
        </script>

        <div class="relative p-2 text-slate-400 hidden sm:block">
            <img src="{{ asset('images/Notification.svg') }}" alt="Notification">
        </div>

        <div class="flex items-center gap-2 md:gap-3 pl-1 md:pl-2">
            <div class="w-8 h-8 md:w-auto rounded-full overflow-hidden flex-shrink-0">
                <img src="{{ asset('images/avatar.svg') }}" alt="User Profile" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col hidden sm:flex">
                <p class="font-['Instrument_Sans'] font-medium text-[14px] md:text-[20px] leading-none tracking-normal text-[#303030]">Dr. Sarah Jones</p>
                <p class="font-['Inter'] font-normal text-[10px] md:text-[16px] leading-none tracking-normal text-[#A39D9D]">Lead</p>
            </div>
        </div>
    </div>
</header>
