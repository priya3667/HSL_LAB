<div class="w-full bg-white rounded-[12px] border border-[#E8E7E7] shadow-sm flex flex-col items-center justify-center py-[30px] px-[16px] font-sans">

    <div class="w-full max-w-[1468px] h-auto flex flex-col gap-[15.21px]">

        <div class="flex flex-col md:flex-row items-center justify-between pb-1 gap-4 px-6">
            <h2 class="font-inter font-semibold text-[20px] leading-[100%] text-[#45464E]">Action Tracker Table</h2>
            
            <div class="flex items-center gap-[7.6px] w-full md:w-auto">

                <div class="relative w-[133.85px] h-[22.05px]">
                    <div class="absolute inset-y-0 left-[6.08px] flex items-center pointer-events-none">
                        <svg class="h-3 w-3 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input type="text" class="block w-full h-full pl-[22px] pr-2 border-[0.76px] border-[#CFD3D4] rounded-[20px] text-[10px] text-slate-600 placeholder-slate-400 focus:outline-none focus:border-blue-500 transition-all bg-white leading-none" placeholder="Search">
                </div>
                

                <div class="flex items-center gap-[9.13px]">

                    <button class="flex items-center gap-[7.6px] h-[22.05px] px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors" title="Filter">
                        <img src="{{ asset('images/Filter.svg') }}" alt="Filter" class="w-3 h-3">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C]">Filter</span>
                    </button>


                    <button class="flex items-center gap-[7.6px] h-[22.05px] px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors" title="Date">
                        <img src="{{ asset('images/solar_calendar-outline.svg') }}" alt="Date" class="w-3 h-3">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C]">Date</span>
                    </button>


                    <button class="flex items-center gap-[7.6px] h-[22.05px] px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors" title="Share">
                         <img src="{{ asset('images/Send.svg') }}" alt="Share" class="w-3 h-3">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C]">Share</span>
                    </button>
                    

                    <button class="flex items-center gap-[7.6px] h-[22.05px] px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors" title="Bulk">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C]">Bulk Action</span>
                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                </div>
            </div>
        </div>


        <div class="overflow-x-auto flex-1">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-white border-y-[0.76px] border-[#E1E2E9] font-inter font-normal text-[10.65px] leading-[100%] tracking-[0] text-[#2C2D33]">
                    <tr>
                        <th class="px-6 h-[40px]">
                            <div class="flex items-center gap-[16.73px] h-full">
                                <img src="{{ asset('images/Controls.svg') }}" alt="check" class="w-[18.25px] h-[18.25px]">
                                <div class="flex items-center gap-[6.08px]">
                                    <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Task Name</span>
                                    <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                                </div>
                            </div>
                        </th>
                        <th class="px-6 h-[40px] cursor-pointer group">
                            <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Category</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                        <th class="px-6 h-[40px] cursor-pointer group">
                            <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Patient/Reference</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                        <th class="px-6 h-[40px] cursor-pointer group">
                            <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Priority</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                        <th class="px-6 h-[40px] cursor-pointer group">
                            <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Assigned To</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                        <th class="px-6 h-[40px]">
                            <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Action</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                        <th class="px-6 h-[40px] cursor-pointer group">
                             <div class="flex items-center gap-[6.08px] h-full">
                                <span class="font-inter font-normal text-[11px] leading-[100%] tracking-[0]">Status</span>
                                <img src="{{ asset('images/sort.svg') }}" alt="Sort" class="w-3 h-3">
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">

                    <tr>
                        <td colspan="8" class="p-0">
                            <div class="h-[31px] w-full flex items-center justify-between px-6 border-t-[0.76px] border-[#E1E2E9] bg-white font-inter font-normal text-[10.65px] leading-[100%] text-[#A6A8B1]">
                                <div class="flex items-center gap-[7.6px]">
                                    <div class="relative">
                                        <select class="appearance-none bg-[#F4F5F7] border-none rounded-[6.08px] text-[#8B8D97] text-[9.13px] leading-none py-0 pl-[8.37px] pr-[20px] focus:ring-0 cursor-pointer h-[17.49px]">
                                            <option>10</option>
                                            <option>20</option>
                                            <option>50</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-[#8B8D97]">
                                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                        </div>
                                    </div>
                                    <span class="text-[#A6A8B1]">Items per page</span>
                                    <span class="text-[#666666]">1-10 of 200 items</span>
                                </div>
                                
                                <div class="flex items-center gap-[7.6px]">
                                     <div class="flex items-center gap-[6.08px]">
                                        <div class="relative">
                                            <select class="appearance-none bg-[#F4F5F7] border-none rounded-[6.08px] text-[#8B8D97] text-[9.13px] leading-none py-0 pl-[8.37px] pr-[20px] focus:ring-0 cursor-pointer h-[17.49px]">
                                                <option>1</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-[#8B8D97]">
                                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                            </div>
                                        </div>
                                         <span class="text-[#666666]">of 44 pages</span>
                                     </div>
                                    <div class="flex items-center gap-[6.08px]">
                                        <button class="w-[12.17px] h-[12.17px] flex items-center justify-center hover:bg-slate-100 rounded disabled:opacity-50 text-[#A6A8B1]">
                                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                                        </button>
                                        <button class="w-[12.17px] h-[12.17px] flex items-center justify-center hover:bg-slate-100 rounded disabled:opacity-50 text-[#A6A8B1]">
                                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    @php
                        $rows = [
                            ['task' => 'Discharge Summary Review', 'cat' => 'Clinical', 'pat' => 'P-10034 (John Doe)', 'prio' => 'High', 'assign' => 'Dr. Sarah Chen', 'action' => 'Review', 'status' => 'Completed', 's_color' => 'emerald'],
                            ['task' => 'Equipment Maintenance', 'cat' => 'Operations', 'pat' => 'Ventilator V-12', 'prio' => 'Medium', 'assign' => 'Tech Mark', 'action' => 'Assign', 'status' => 'In Progress', 's_color' => 'blue'],
                            ['task' => 'Patient Transfer Request', 'cat' => 'Logistics', 'pat' => 'P-10035 (Jane Smith)', 'prio' => 'Pick Up', 'assign' => 'Nurse Lisa', 'action' => 'Process', 'status' => 'Pending', 's_color' => 'orange'],
                            ['task' => 'Medication Restock', 'cat' => 'Pharmacy', 'pat' => 'Omnicell A3', 'prio' => 'Urgent', 'assign' => 'Pharm David', 'action' => 'Inspect', 'status' => 'Completed', 's_color' => 'emerald'],
                            ['task' => 'Disclosure Follow-up', 'cat' => 'Disclosure', 'pat' => 'P-10038 (Mike Brown)', 'prio' => 'Low', 'assign' => 'Admin Kelly', 'action' => 'Completed', 'status' => 'Completed', 's_color' => 'emerald'],
                            ['task' => 'Billing Audit', 'cat' => 'Billing', 'pat' => 'Invoice INV-2038', 'prio' => 'High', 'assign' => 'Finance Ally', 'action' => 'Completed', 'status' => 'Completed', 's_color' => 'emerald'],
                        ];
                    @endphp
                    @foreach($rows as $row)
                    <tr class="h-[37px] border-b-[0.76px] border-[#E1E2E9] hover:bg-slate-50 transition-colors">
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">
                            <div class="flex items-center gap-[16.73px]">
                                <img src="{{ asset('images/Controls.svg') }}" alt="check" class="w-[18.25px] h-[18.25px]">
                                <span>{{ $row['task'] }}</span>
                            </div>
                        </td>
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">{{ $row['cat'] }}</td>
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">{{ $row['pat'] }}</td>
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">{{ $row['prio'] }}</td>
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">{{ $row['assign'] }}</td>
                        <td class="px-6 h-[37px]">
                            <button class="flex items-center justify-between gap-[7.6px] h-[17.49px] px-[8.37px] rounded-[6.08px] bg-[#5E6366]/[0.08] text-[#5E6366] font-normal text-[10.65px] leading-[100%] hover:bg-[#5E6366]/[0.15] transition-colors">
                                {{ $row['action'] }} <svg class="w-2 h-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
                            </button>
                        </td>
                        <td class="px-6 h-[37px]">
                            <span class="inline-block px-[8.37px] py-[3.04px] rounded-[6.08px] font-inter font-normal text-[10.65px] leading-[100%] bg-{{ $row['s_color'] }}-100 text-{{ $row['s_color'] }}-700">
                                {{ $row['status'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
<style>
    .component-scroll, .hidden-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .component-scroll::-webkit-scrollbar, .hidden-scrollbar::-webkit-scrollbar { display: none; }
</style>