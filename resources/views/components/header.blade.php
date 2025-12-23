<header class="flex items-center justify-between py-4 mb-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800 leading-tight">Daily Operations</h1>
        <p class="text-slate-400 text-sm font-medium">December 19, 2025</p>
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
        <div class="flex items-center gap-2 px-4 py-2 bg-white border border-slate-100 rounded-lg text-sm text-slate-600 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
            <span class="font-medium">Today, Dec 19, 2025</span>
        </div>

        <!-- Notification -->
        <div class="relative p-2 text-slate-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
        </div>

        <!-- User profile (Image left of name) -->
        <div class="flex items-center gap-3 pl-2">
            <div class="w-10 h-10 rounded-full overflow-hidden border border-slate-100">
                <img src="https://ui-avatars.com/api/?name=Sarah+Jones&background=random" alt="User" class="w-full h-full">
            </div>
            <div>
                <p class="text-sm font-bold text-slate-800 leading-tight">Dr. Sarah Jones</p>
                <p class="text-[11px] text-slate-400 font-medium">Command Center Lead</p>
            </div>
        </div>
    </div>
</header>
