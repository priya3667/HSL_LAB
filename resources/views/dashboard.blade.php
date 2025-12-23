<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSL Labs | Dashboard Command Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Mulish:wght@500;600;700;800&family=Inter:wght@400;600&family=Instrument+Sans:wght@500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .sidebar-item-active { background-color: #f1f5f9; color: #1e293b; border-radius: 12px; }
        .custom-shadow { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03); }
        @media (max-width: 768px) {
            .main-content { padding-left: 0 !important; padding-bottom: 80px; }
        }
        
        /* Premium Flatpickr Styling */
        .flatpickr-calendar {
            background: #ffffff;
            box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.1);
            border: 1px solid #E8E7E7;
            border-radius: 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding: 10px;
        }
        .flatpickr-day.selected {
            background: #334155;
            border-color: #334155;
        }
        .flatpickr-day:hover {
            background: #f1f5f9;
        }
        .flatpickr-months .flatpickr-month {
            color: #1e293b;
            font-weight: 700;
        }
        .flatpickr-current-month .flatpickr-monthDropdown-months {
            font-weight: 700;
        }
        .flatpickr-weekday {
            color: #94a3b8;
            font-weight: 600;
        }
    </style>
</head>
<body class="text-slate-800 antialiased">

    <!-- Component 1: Sidebar -->
    <x-sidebar />

    <main class="main-content pl-20 transition-all duration-300 bg-[#F9FEFF]">
        <div class="max-w-[1600px] mx-auto px-4 pb-4 md:px-8 md:pb-8">
            
            <!-- Component 2: Header -->
            <x-header />


            <!-- Component 4: KPI Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <x-kpi-card title="Patients Ready" value="42" subtext="31 discharges pending" color="green" icon="<img src='{{ asset('images/tick.svg') }}'>" />
                <x-kpi-card title="Pending Disclosures" value="8" subtext="Awaiting Review" color="orange" icon="<img src='{{ asset('images/pending.svg') }}'>" />
                <x-kpi-card title="Open Tasks" value="123" subtext="86 Critical" color="blue" icon="<img src='{{ asset('images/Open_task.svg') }}'>" />
                <x-kpi-card title="Low Inventory Alerts" value="3" subtext="Critical Items Low" color="red" icon="<img src='{{ asset('images/red_alert.svg') }}'>" />
            </div>

            <!-- Component 5: Analytics Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Patient Flow -->
                <x-analytics-card title="Patient Flow">
                    <img src="{{ asset('images/Patient_Flow_graph.svg') }}" alt="Patient Flow Graph" class="w-full h-full object-contain">
                </x-analytics-card>

                <!-- Task Distribution -->
                <x-analytics-card title="Task Status">
                    <img src="{{ asset('images/task_status_distribution_graph.svg') }}" alt="Task Status Graph" class="w-full h-full object-contain">
                </x-analytics-card>

                <!-- Inventory Trend -->
                <x-analytics-card title="Inventory Trend">
                    <img src="{{ asset('images/Inventory_Usage_Trend_graph.svg') }}" alt="Inventory Trend Graph" class="w-full h-full object-contain">
                </x-analytics-card>

                <!-- Sales -->
                <x-analytics-card title="Sales Health">
                    <img src="{{ asset('images/sales_health_graph.png') }}" alt="Sales Health Graph" class="w-full h-full object-contain">
                </x-analytics-card>
            </div>

            <!-- Action Tracker -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden min-h-[400px]">
                <div class="p-8 pb-4 flex items-center justify-between">
                    <h3 class="text-[14px] font-bold">Action Tracker</h3>
                    <div class="hidden sm:flex items-center gap-2">
                        <x-smart-filter label="All Actions" :active="true" />
                        <x-smart-filter label="Clinical" />
                    </div>
                </div>
                <!-- Table Logic -->
                <div class="overflow-x-auto px-8 pb-8">
                    <table class="w-full text-left border-separate border-spacing-y-4">
                        <thead><tr class="text-[6px] uppercase font-bold text-slate-300"><th>Patient</th><th>Task</th><th>Expert</th><th>Status</th></tr></thead>
                        <tbody class="text-[10px] font-medium">
                            @foreach([['name'=>'John Doe','type'=>'Intake','status'=>'INPROGRESS','c'=>'yellow'],['name'=>'Maria G.','type'=>'Review','status'=>'PENDING','c'=>'orange']] as $r)
                            <tr class="group hover:bg-slate-50">
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50 rounded-l-xl font-bold">{{ $r['name'] }}</td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50">{{ $r['type'] }}</td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50"><span class="px-2 py-1 bg-slate-50 rounded-full text-[8px]">Dr. Rob</span></td>
                                <td class="py-4 px-4 bg-white group-hover:bg-slate-50 rounded-r-xl">
                                    <span class="px-3 py-1 text-[5px] font-bold bg-{{ $r['c'] }}-50 text-{{ $r['c'] }}-600 rounded-lg">{{ $r['status'] }}</span>
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
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg><span class="text-[4px] font-bold">SEARCH</span></button>
        <button class="-mt-10 w-14 h-14 bg-slate-900 text-white rounded-full shadow-lg flex items-center justify-center border-4 border-white"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14"/><path d="M12 5v14"/></svg></button>
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span class="text-[4px] font-bold">PROFILE</span></button>
    </div>

</body>
</html>
