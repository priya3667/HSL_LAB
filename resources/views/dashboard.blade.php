<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSL Labs | Dashboard Command Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Mulish:wght@800&family=Inter:wght@400&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .sidebar-item-active { background-color: #f1f5f9; color: #1e293b; border-radius: 12px; }
        .custom-shadow { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03); }
        @media (max-width: 768px) {
            .main-content { padding-left: 0 !important; padding-bottom: 80px; }
        }
    </style>
</head>
<body class="text-slate-800 antialiased">

    <!-- Component 1: Sidebar -->
    <x-sidebar />

    <main class="main-content pl-20 transition-all duration-300 bg-[#F9FEFF]">
        <div class="max-w-[1600px] mx-auto p-4 md:p-8">
            
            <!-- Component 2: Header -->
            <x-header />

            <!-- Component 3: Smart Filters -->
            <div class="flex flex-wrap items-center gap-3 mb-8">
                <x-smart-filter label="All Locations" :active="true" />
                <x-smart-filter label="Clinical View" />
                <x-smart-filter label="Inventory Alerts" />
                <x-smart-filter label="Last 24 Hours" />
            </div>

            <!-- Component 4: KPI Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <x-kpi-card title="Patients Ready" value="42" subtext="31 discharges pending" color="green" icon='<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>' />
                <x-kpi-card title="Pending Disclosures" value="8" subtext="Awaiting Review" color="orange" icon='<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>' />
                <x-kpi-card title="Open Tasks" value="123" subtext="86 Critical" color="blue" icon='<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>' />
                <x-kpi-card title="Low Inventory Alerts" value="3" subtext="Critical Items Low" color="red" icon='<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>' />
            </div>

            <!-- Component 5: Analytics Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Patient Flow -->
                <x-analytics-card title="Patient Flow">
                    <div class="flex justify-between text-[11px] font-bold text-slate-300 mb-4">
                        <span>Mon<br>15</span><span>Tue<br>16</span><span>Wed<br>17</span><span>Thu<br>18</span><span class="text-orange-500">Fri<br>19</span><span>Sat<br>20</span>
                    </div>
                    <div class="flex-1 relative h-32">
                        <svg class="w-full h-full" viewBox="0 0 400 150" preserveAspectRatio="none">
                            <path d="M0,100 C50,90 80,110 120,95 C160,80 200,90 240,110 C280,130 320,80 360,90 C380,95 400,85 400,85 L400,150 L0,150 Z" fill="url(#pg)" />
                            <circle cx="330" cy="85" r="5" fill="#f59e0b" /><defs><linearGradient id="pg" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#fdba74" stop-opacity="0.2" /><stop offset="100%" stop-color="#fdba74" stop-opacity="0" /></linearGradient></defs>
                        </svg>
                        <div class="absolute top-0 right-0 bg-white shadow-xl rounded-full px-3 py-1 border border-slate-50 text-[10px] font-bold text-orange-500">112: <span class="text-slate-400">Today</span></div>
                    </div>
                    <div class="flex justify-between items-center mt-4 pt-4 border-t border-slate-50">
                        <div class="text-[10px] font-extrabold text-slate-300">MAX 253</div><div class="text-[10px] font-extrabold text-slate-300 text-right">TODAY 112</div>
                    </div>
                </x-analytics-card>

                <!-- Task Distribution -->
                <x-analytics-card title="Task Status">
                    <div class="flex-1 flex flex-col items-center justify-center -mt-4">
                        <div class="relative w-36 h-36">
                            <svg viewBox="0 0 36 36" class="w-full h-full transform -rotate-90">
                                <circle cx="18" cy="18" r="15.9" fill="transparent" stroke="#f1f5f9" stroke-width="4.5"></circle>
                                <circle cx="18" cy="18" r="15.9" fill="transparent" stroke="#a3b18a" stroke-width="4.5" stroke-dasharray="60 40"></circle>
                                <circle cx="18" cy="18" r="15.9" fill="transparent" stroke="#b47a50" stroke-width="4.5" stroke-dasharray="20 80" stroke-dashoffset="-60"></circle>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-xl font-bold">156</span><span class="text-[8px] font-bold text-slate-400">TOTAL</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1 text-[10px] font-bold">
                        <div class="flex justify-between"><span>Completed</span><span>60%</span></div>
                        <div class="flex justify-between"><span>Inprogress</span><span>20%</span></div>
                    </div>
                </x-analytics-card>

                <!-- Inventory Trend -->
                <x-analytics-card title="Inventory Trend">
                    <div class="flex gap-4 mb-6 text-[9px] font-bold">
                        <div class="flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-[#b47a50]"></span> Today</div>
                        <div class="flex items-center gap-1 text-slate-300"><span class="w-1.5 h-1.5 rounded-full bg-slate-100"></span> Yesterday</div>
                    </div>
                    <div class="flex-1 flex items-end justify-between gap-3 h-32">
                        @foreach(['Meds', 'Supl', 'Equip', 'Use'] as $label)
                        <div class="flex-1 flex flex-col items-center gap-1">
                            <div class="w-full flex items-end gap-1 h-20">
                                <div class="w-full bg-slate-50 h-[60%] rounded-t-sm"></div>
                                <div class="w-full bg-[#b47a50] h-[90%] rounded-t-sm"></div>
                            </div>
                            <span class="text-[8px] text-slate-400 rotate-45">{{ $label }}</span>
                        </div>
                        @endforeach
                    </div>
                </x-analytics-card>

                <!-- Sales -->
                <x-analytics-card title="Sales Health">
                    <div class="flex-1 relative h-32">
                        <svg class="w-full h-full" viewBox="0 0 200 100" preserveAspectRatio="none">
                            <path d="M0,80 C20,30 40,30 60,70 C80,100 100,20 120,40 C140,60 160,80 180,50" fill="none" stroke="#b47a50" stroke-width="2.5" />
                        </svg>
                    </div>
                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-2xl font-extrabold">30%</span><p class="text-[9px] text-slate-400 font-bold">Better than<br>last month</p>
                    </div>
                </x-analytics-card>
            </div>

            <!-- Action Tracker -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden min-h-[400px]">
                <div class="p-8 pb-4 flex items-center justify-between">
                    <h3 class="text-lg font-bold">Action Tracker</h3>
                    <div class="hidden sm:flex items-center gap-2">
                        <x-smart-filter label="All Actions" :active="true" />
                        <x-smart-filter label="Clinical" />
                    </div>
                </div>
                <!-- Table Logic -->
                <div class="overflow-x-auto px-8 pb-8">
                    <table class="w-full text-left border-separate border-spacing-y-4">
                        <thead><tr class="text-[10px] uppercase font-bold text-slate-300"><th>Patient</th><th>Task</th><th>Expert</th><th>Status</th></tr></thead>
                        <tbody class="text-sm font-medium">
                            @foreach([['name'=>'John Doe','type'=>'Intake','status'=>'INPROGRESS','c'=>'yellow'],['name'=>'Maria G.','type'=>'Review','status'=>'PENDING','c'=>'orange']] as $r)
                            <tr class="group hover:bg-slate-50">
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50 rounded-l-xl font-bold">{{ $r['name'] }}</td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50">{{ $r['type'] }}</td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50"><span class="px-2 py-1 bg-slate-50 rounded-full text-xs">Dr. Rob</span></td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50 rounded-r-xl">
                                    <span class="px-3 py-1 text-[9px] font-bold bg-{{ $r['c'] }}-50 text-{{ $r['c'] }}-600 rounded-lg">{{ $r['status'] }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Mobile Quick Actions Bar -->
    <div class="fixed bottom-0 left-0 right-0 bg-white/80 backdrop-blur-md border-t border-slate-100 p-4 flex justify-around items-center md:hidden z-50">
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg><span class="text-[8px] font-bold">SEARCH</span></button>
        <button class="-mt-10 w-14 h-14 bg-slate-900 text-white rounded-full shadow-lg flex items-center justify-center border-4 border-white"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14"/><path d="M12 5v14"/></svg></button>
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span class="text-[8px] font-bold">PROFILE</span></button>
    </div>

</body>
</html>
