<!-- Mobile Sidebar Backdrop -->
<div id="sidebar-backdrop" class="fixed inset-0 bg-black/50 z-40 hidden glass transition-opacity duration-300 pointer-events-auto"></div>

<!-- Sidebar -->
<aside id="main-sidebar" class="fixed inset-y-0 left-0 w-20 bg-white border-r border-slate-100 flex flex-col items-center py-6 z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="mb-10 px-4">
        <img src="{{ asset('images/logo.png') }}" alt="HSL Labs Logo" class="w-10 h-10 object-contain">
    </div>

    <nav class="flex-1 flex flex-col gap-6 items-center">
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 18.svg') }}" alt="Dashboard">
        </a>
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 17.svg') }}" alt="Calendar" >
        </a>
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 16.svg') }}" alt="Messages" >
        </a>
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 15.svg') }}" alt="Analytics" >
        </a>
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 19.svg') }}" alt="Settings" >
        </a>
        <a href="#" class="block w-12 h-12">
            <img src="{{ asset('images/Group 26.svg') }}" alt="LogOut" >
        </a>
    </nav>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Expose toggleSidebar globally so it can be called from dashboard.blade.php
        window.toggleSidebar = function() {
            const sidebar = document.getElementById('main-sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');
            
            if (sidebar.classList.contains('-translate-x-full')) {
                // Open
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.remove('hidden');
                document.body.classList.add('overflow-hidden'); // Prevent background scrolling
            } else {
                // Close
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }

        // Close when clicking backdrop
        const backdrop = document.getElementById('sidebar-backdrop');
        if (backdrop) {
            backdrop.addEventListener('click', function() {
                window.toggleSidebar();
            });
        }
    });
</script>
