<aside id="main-sidebar" class="hidden md:flex fixed inset-y-0 left-0 w-20 bg-white border-r border-slate-100 flex-col items-center py-6 z-50 transition-transform duration-300 ease-in-out">
    <div class="mb-10 px-4">
        <img src="{{ asset('images/logo.png') }}" alt="HSL Labs Logo" class="w-10 h-10 object-contain">
    </div>

    <nav class="flex-1 flex flex-col gap-6 items-center">
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 18.svg') }}" alt="Dashboard">
        </a>
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 17.svg') }}" alt="Calendar">
        </a>
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 16.svg') }}" alt="Messages">
        </a>
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 15.svg') }}" alt="Analytics">
        </a>
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 19.svg') }}" alt="Settings">
        </a>
        <a href="#" class="block w-12 h-12 hover:scale-105 transition-transform">
            <img src="{{ asset('images/Group 26.svg') }}" alt="LogOut">
        </a>
    </nav>
</aside>

<div class="fixed bottom-0 left-0 right-0 bg-[#FFFFFF] z-50 border-t border-slate-200 px-6 py-3 flex justify-between items-center md:hidden">
    <a href="#" class="flex items-center justify-center w-12 h-12 bg-[#303030] rounded-[14px] shadow-sm">
        <img src="{{ asset('images/Group 18.svg') }}" alt="Dashboard">
    </a>
    <a href="#" class="flex items-center justify-center w-12 h-12">
        <img src="{{ asset('images/Group 17.svg') }}" class="grayscale opacity-80" alt="Calendar">
    </a>
    <a href="#" class="flex items-center justify-center w-12 h-12">
        <img src="{{ asset('images/Group 16.svg') }}" class="grayscale opacity-80" alt="Messages">
    </a>
    <a href="#" class="flex items-center justify-center w-12 h-12">
        <img src="{{ asset('images/Group 15.svg') }}" class="grayscale opacity-80" alt="Analytics">
    </a>
    <a href="#" class="flex items-center justify-center w-12 h-12">
        <img src="{{ asset('images/Group 19.svg') }}" class="grayscale opacity-80" alt="Settings">
    </a>
    <a href="#" class="flex items-center justify-center w-12 h-12">
        <img src="{{ asset('images/Group 26.svg') }}" class="grayscale opacity-80" alt="Logout">
    </a>
</div>
<style>
    .pb-safe {
        padding-bottom: env(safe-area-inset-bottom, 12px);
    }
</style>
