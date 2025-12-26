<div class="w-full bg-white rounded-[12px] border border-[#E8E7E7] shadow-[0px_4px_4px_0px_#00000040] flex flex-col items-center justify-center py-4 md:py-[30px] px-2 md:px-[16px] font-sans">
    <div class="w-full max-w-[1468px] h-auto flex flex-col gap-[15.21px]">
        <div class="flex flex-col lg:flex-row items-center justify-between pb-1 gap-4 px-2 md:px-6">
            <h2 class="font-inter font-semibold text-[16px] md:text-[20px] leading-[100%] text-[#45464E] self-start lg:self-auto">Action Tracker Table</h2>
            <div class="flex items-center flex-wrap gap-[7.6px] w-full lg:w-auto pb-2 lg:pb-0">
                <div class="relative min-w-[133.85px] h-[22.05px] flex-shrink-0">
                    <div class="absolute inset-y-0 left-[6.08px] flex items-center pointer-events-none">
                        <svg class="h-3 w-3 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input type="text" id="action-search-input" class="block w-full h-full pl-[22px] pr-2 border-[0.76px] border-[#CFD3D4] rounded-[20px] text-[10px] text-slate-600 placeholder-slate-400 focus:outline-none focus:border-blue-500 transition-all bg-white leading-none" placeholder="Search">
                </div>
                <div class="flex items-center gap-[9.13px] flex-nowrap">
                    <div class="relative" id="filter-container">
                        <button id="filter-button" class="flex items-center justify-center gap-[7.6px] h-[22.05px] px-[8.08px] md:px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors flex-shrink-0" title="Filter">
                            <img src="{{ asset('images/Filter.svg') }}" alt="Filter" class="w-3.5 h-3.5 md:w-3 md:h-3">
                            <span class="text-[10px] font-medium leading-[100%] text-[#53545C] hidden md:inline">Filter</span>
                        </button>
                        <div id="filter-dropdown" class="hidden absolute top-full mt-2 left-0 w-36 bg-white border border-slate-200 rounded-lg shadow-lg z-20 py-1">
                            <div class="px-3 py-2 text-[10px] font-semibold text-slate-500 border-b border-slate-100 uppercase tracking-wider">Status</div>
                            <label class="flex items-center px-3 py-2 hover:bg-slate-50 cursor-pointer">
                                <input type="radio" name="status-filter" value="All" class="mr-2 accent-[#45464E]" checked>
                                <span class="text-[11px] text-slate-600">All</span>
                            </label>
                            <label class="flex items-center px-3 py-2 hover:bg-slate-50 cursor-pointer">
                                <input type="radio" name="status-filter" value="Completed" class="mr-2 accent-emerald-500">
                                <span class="text-[11px] text-slate-600">Completed</span>
                            </label>
                            <label class="flex items-center px-3 py-2 hover:bg-slate-50 cursor-pointer">
                                <input type="radio" name="status-filter" value="In Progress" class="mr-2 accent-blue-500">
                                <span class="text-[11px] text-slate-600">In Progress</span>
                            </label>
                            <label class="flex items-center px-3 py-2 hover:bg-slate-50 cursor-pointer">
                                <input type="radio" name="status-filter" value="Pending" class="mr-2 accent-orange-500">
                                <span class="text-[11px] text-slate-600">Pending</span>
                            </label>
                        </div>
                    </div>
                    <button id="date_filter_trigger" class="flex items-center justify-center gap-[7.6px] h-[22.05px] px-[8.08px] md:px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors flex-shrink-0" title="Date">
                        <img src="{{ asset('images/solar_calendar-outline.svg') }}" alt="Date" class="w-3.5 h-3.5 md:w-3 md:h-3">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C] hidden md:inline">Date</span>
                    </button>
                    <button class="flex items-center justify-center gap-[7.6px] h-[22.05px] px-[8.08px] md:px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors flex-shrink-0" title="Share">
                         <img src="{{ asset('images/Send.svg') }}" alt="Share" class="w-3.5 h-3.5 md:w-3 md:h-3">
                        <span class="text-[10px] font-medium leading-[100%] text-[#53545C] hidden md:inline">Share</span>
                    </button>
                    <div class="relative" id="bulk-action-container">
                        <button id="bulk-action-button" class="flex items-center justify-center gap-[7.6px] h-[22.05px] px-[8.08px] md:px-[6.08px] border-[0.76px] border-[#53545C] rounded-[20px] hover:bg-slate-50 text-slate-600 transition-colors flex-shrink-0" title="Bulk">
                            <span class="text-[10px] font-medium leading-[100%] text-[#53545C] hidden md:inline">Bulk Action</span>
                            <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div id="bulk-dropdown" class="hidden absolute top-full mt-2 right-0 w-32 bg-white border border-slate-200 rounded-lg shadow-lg z-20 overflow-hidden">
                            <button id="bulk-edit-btn" class="w-full text-left px-4 py-2 text-[11px] text-slate-600 hover:bg-slate-50 border-b border-slate-100 flex items-center gap-2">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                Edit
                            </button>
                            <button id="bulk-delete-btn" class="w-full text-left px-4 py-2 text-[11px] text-red-600 hover:bg-red-50 flex items-center gap-2">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto flex-1">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-white border-y-[0.76px] border-[#E1E2E9] font-inter font-normal text-[10.65px] leading-[100%] tracking-[0] text-[#2C2D33]">
                    <tr>
                        <th class="px-6 h-[40px]">
                            <div class="flex items-center gap-[16.73px] h-full">
                                <label class="relative cursor-pointer inline-flex items-center group">
                                    <input type="checkbox" id="header-checkbox" class="peer sr-only">
                                    <div class="w-[18.25px] h-[18.25px] flex items-center justify-center border border-[#CFD3D5] rounded-[4px] bg-white peer-checked:bg-[#F0F9FF] peer-checked:border-[#F0F9FF] transition-all [&>img]:opacity-0 peer-checked:[&>img]:opacity-100">
                                        <img src="{{ asset('images/tick.svg') }}" alt="Tick" class="w-3 h-3 transition-opacity">
                                    </div>
                                </label>
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
                    <tr class="action-table-row h-[37px] border-b-[0.76px] border-[#E1E2E9] hover:bg-slate-50 transition-colors" data-status="{{ $row['status'] }}">
                        <td class="px-6 h-[37px] font-inter font-normal text-[10.65px] leading-[100%] text-[#5E6366]">
                            <div class="flex items-center gap-[16.73px]">
                                <label class="relative cursor-pointer inline-flex items-center group">
                                    <input type="checkbox" class="peer sr-only row-checkbox">
                                    <div class="w-[18.25px] h-[18.25px] flex items-center justify-center border border-[#CFD3D5] rounded-[4px] bg-white peer-checked:bg-[#F0F9FF] peer-checked:border-[#F0F9FF] transition-all [&>img]:opacity-0 peer-checked:[&>img]:opacity-100">
                                        <img src="{{ asset('images/tick.svg') }}" alt="Tick" class="w-3 h-3 transition-opacity">
                                    </div>
                                </label>
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
    <div id="edit-modal" class="fixed inset-0 bg-black/60 z-[9999] hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-[16px] shadow-2xl w-[95%] max-w-[500px] overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-white">
                <h3 class="text-[18px] font-semibold text-[#303030]">Edit Entry</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-6 space-y-4">
                <div class="space-y-1">
                    <label class="block text-[12px] font-bold text-gray-500 uppercase tracking-wide">Task Name</label>
                    <input type="text" id="edit-task" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all text-gray-800">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="block text-[12px] font-bold text-gray-500 uppercase tracking-wide">Category</label>
                        <input type="text" id="edit-cat" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all text-gray-800">
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[12px] font-bold text-gray-500 uppercase tracking-wide">Patient/Ref</label>
                        <input type="text" id="edit-pat" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all text-gray-800">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                     <div class="space-y-1">
                        <label class="block text-[12px] font-bold text-gray-500 uppercase tracking-wide">Priority</label>
                         <select id="edit-prio" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all text-gray-800 appearance-none bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22none%22%20viewBox%3D%220%200%2024%2024%22%20stroke%3D%22currentColor%22%3E%3Cpath%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%222%22%20d%3D%22M19%209l-7%207-7-7%22%2F%3E%3C%2Fsvg%3E')] bg-[length:1.25em_1.25em] bg-[right_0.75rem_center] bg-no-repeat">
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                            <option>Urgent</option>
                            <option>Pick Up</option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[12px] font-bold text-gray-500 uppercase tracking-wider">Assigned To</label>
                        <input type="text" id="edit-assign" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all text-gray-800">
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 bg-gray-50 flex justify-end gap-3">
                <button id="cancel-edit" class="px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">Cancel</button>
                <button id="save-edit" class="px-6 py-2 text-sm font-semibold text-white bg-[#45464E] hover:bg-black rounded-lg transition-all shadow-sm">Save Changes</button>
            </div>
        </div>
    </div>
    <div id="message-modal" class="fixed inset-0 bg-black/60 z-[9999] hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-[16px] shadow-2xl w-[90%] max-w-[400px] overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-[18px] font-semibold text-[#303030]">Notice</h3>
                <button id="close-message-modal" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
            <div class="px-6 py-10">
                <p class="text-[15px] text-[#6A6969] font-medium leading-relaxed" id="message-text"></p>
            </div>
            <div class="px-6 py-4 flex justify-end">
                <button id="message-ok-btn" class="px-10 py-2 bg-[#45464E] text-white rounded-[8px] font-bold text-[14px] hover:bg-black transition-all">OK</button>
            </div>
        </div>
    </div>
    <div id="confirm-modal" class="fixed inset-0 bg-black/60 z-[9999] hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-[16px] shadow-2xl w-[90%] max-w-[400px] overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-[18px] font-semibold text-[#303030]">Confirm Action</h3>
                <button id="close-confirm-modal" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
            <div class="px-6 py-10">
                <p class="text-[15px] text-[#6A6969] font-medium leading-relaxed" id="confirm-text"></p>
            </div>
            <div class="px-6 py-4 flex justify-end gap-3 bg-gray-50">
                <button id="confirm-cancel-btn" class="px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">Cancel</button>
                <button id="confirm-yes-btn" class="px-6 py-2 text-sm font-semibold text-white bg-red-600 hover:bg-red-700 rounded-lg shadow-sm transition-all active:scale-95">Confirm</button>
            </div>
        </div>
    </div>
</div>
<style>
    .component-scroll, .hidden-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .component-scroll::-webkit-scrollbar, .hidden-scrollbar::-webkit-scrollbar { display: none; }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#date_filter_trigger", {
            dateFormat: "Y-m-d",
            allowInput: true,
            disableMobile: true,
            position: "below",
            onOpen: function(selectedDates, dateStr, instance) {
                setTimeout(() => {
                    const calendar = instance.calendarContainer;
                    if (!calendar) return;
                    
                    const input = instance.element;
                    const rect = input.getBoundingClientRect();
                    const scrollTop = window.scrollY || document.documentElement.scrollTop;
                    const zoomFactor = 0.8; // Hardcoded zoom from global CSS
                    
                    // Manually force top position correcting for zoom
                    const topPos = (rect.bottom + scrollTop) / zoomFactor;
                    
                    calendar.style.top = `${topPos + 5}px`;
                    calendar.style.bottom = 'auto'; // Prevent flipping to top
                }, 0);
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const headerCheckbox = document.getElementById('header-checkbox');
        const rowCheckboxes = document.querySelectorAll('.row-checkbox');
        if(headerCheckbox) {
            headerCheckbox.addEventListener('change', function() {
                const isChecked = this.checked;
                rowCheckboxes.forEach(cb => {
                    cb.checked = isChecked;
                });
            });
        }
        rowCheckboxes.forEach(cb => {
            cb.addEventListener('change', function() {
                const allChecked = Array.from(rowCheckboxes).every(c => c.checked);
                if(headerCheckbox) {
                    headerCheckbox.checked = allChecked;
                }
            });
        });
        const searchInput = document.getElementById('action-search-input');
        const tableRows = document.querySelectorAll('.action-table-row');
        const filterButton = document.getElementById('filter-button');
        const filterDropdown = document.getElementById('filter-dropdown');
        const filterRadios = document.querySelectorAll('input[name="status-filter"]');
        let currentSearch = '';
        let currentStatus = 'All';
        function applyFilters() {
            tableRows.forEach(row => {
                const text = row.innerText.toLowerCase();
                const status = row.getAttribute('data-status');
                const matchesSearch = text.includes(currentSearch);
                const matchesStatus = currentStatus === 'All' || status === currentStatus;
                if (matchesSearch && matchesStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                currentSearch = e.target.value.toLowerCase().trim();
                applyFilters();
            });
        }
        if (filterButton && filterDropdown) {
            filterButton.addEventListener('click', function(e) {
                e.stopPropagation();
                filterDropdown.classList.toggle('hidden');
            });
            document.addEventListener('click', function(e) {
                if (!filterDropdown.contains(e.target) && !filterButton.contains(e.target)) {
                    filterDropdown.classList.add('hidden');
                }
            });
            filterRadios.forEach(radio => {
                radio.addEventListener('change', function(e) {
                    currentStatus = e.target.value;
                    const span = filterButton.querySelector('span');
                    if (currentStatus === 'All') {
                        span.textContent = 'Filter';
                    } else {
                        span.textContent = 'Filter : ' + currentStatus;
                    }
                    applyFilters();
                    filterDropdown.classList.add('hidden'); 
                });
            });
        }
        const bulkButton = document.getElementById('bulk-action-button');
        const bulkDropdown = document.getElementById('bulk-dropdown');
        const bulkEditBtn = document.getElementById('bulk-edit-btn');
        const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
        const editModal = document.getElementById('edit-modal');
        const closeModal = document.getElementById('close-modal');
        const cancelEdit = document.getElementById('cancel-edit');
        const saveEdit = document.getElementById('save-edit');
        let editingRow = null;
        const messageModal = document.getElementById('message-modal');
        const messageText = document.getElementById('message-text');
        const closeMessageBtn = document.getElementById('close-message-modal');
        const messageOkBtn = document.getElementById('message-ok-btn');
        const confirmModal = document.getElementById('confirm-modal');
        const confirmText = document.getElementById('confirm-text');
        const closeConfirmBtn = document.getElementById('close-confirm-modal');
        const confirmCancelBtn = document.getElementById('confirm-cancel-btn');
        const confirmYesBtn = document.getElementById('confirm-yes-btn');
        let confirmCallback = null;
        function showMessage(msg) {
            if(messageText && messageModal) {
                messageText.textContent = msg;
                messageModal.classList.remove('hidden');
            }
        }
        function showConfirm(msg, callback) {
            if(confirmText && confirmModal) {
                confirmText.textContent = msg;
                confirmCallback = callback;
                confirmModal.classList.remove('hidden');
            }
        }
        function hideMessage() { if(messageModal) messageModal.classList.add('hidden'); }
        function hideConfirm() { if(confirmModal) confirmModal.classList.add('hidden'); confirmCallback = null; }
        [closeMessageBtn, messageOkBtn].forEach(b => b?.addEventListener('click', hideMessage));
        [closeConfirmBtn, confirmCancelBtn].forEach(b => b?.addEventListener('click', hideConfirm));
        if(confirmYesBtn) {
            confirmYesBtn.addEventListener('click', () => {
                if(confirmCallback) confirmCallback();
                hideConfirm();
            });
        }
        if (bulkButton && bulkDropdown) {
            bulkButton.addEventListener('click', function(e) {
                e.stopPropagation();
                bulkDropdown.classList.toggle('hidden');
            });
            document.addEventListener('click', function(e) {
                if (!bulkDropdown.contains(e.target) && !bulkButton.contains(e.target)) {
                    bulkDropdown.classList.add('hidden');
                }
            });
        }
        if (bulkDeleteBtn) {
            bulkDeleteBtn.addEventListener('click', function() {
                const checkedBoxes = document.querySelectorAll('.row-checkbox:checked');
                bulkDropdown.classList.add('hidden');
                if (checkedBoxes.length === 0) {
                    showMessage('Please select at least one row to delete.');
                    return;
                }
                showConfirm(`Are you sure you want to delete ${checkedBoxes.length} item(s)?`, () => {
                    checkedBoxes.forEach(box => {
                        const row = box.closest('tr');
                        row.remove();
                    });
                    const headerCheckbox = document.getElementById('header-checkbox');
                    if(headerCheckbox) headerCheckbox.checked = false;
                });
            });
        }
        if (bulkEditBtn) {
            bulkEditBtn.addEventListener('click', function() {
                const checkedBoxes = document.querySelectorAll('.row-checkbox:checked');
                bulkDropdown.classList.add('hidden');
                if (checkedBoxes.length !== 1) {
                    showMessage('Please select exactly one row to edit.');
                    return;
                }
                editingRow = checkedBoxes[0].closest('tr');
                const cells = editingRow.querySelectorAll('td');
                const taskName = cells[0].querySelector('span').innerText;
                const category = cells[1].innerText;
                const patient = cells[2].innerText;
                const priority = cells[3].innerText;
                const assigned = cells[4].innerText;
                document.getElementById('edit-task').value = taskName;
                document.getElementById('edit-cat').value = category;
                document.getElementById('edit-pat').value = patient;
                document.getElementById('edit-prio').value = priority;
                document.getElementById('edit-assign').value = assigned;
                editModal.classList.remove('hidden');
            });
        }
        const hideModal = () => {
            editModal.classList.add('hidden');
            editingRow = null;
        };
        if(closeModal) closeModal.addEventListener('click', hideModal);
        if(cancelEdit) cancelEdit.addEventListener('click', hideModal);
        if(saveEdit) {
            saveEdit.addEventListener('click', function() {
                if(!editingRow) return;
                const cells = editingRow.querySelectorAll('td');
                cells[0].querySelector('span').innerText = document.getElementById('edit-task').value;
                cells[1].innerText = document.getElementById('edit-cat').value;
                cells[2].innerText = document.getElementById('edit-pat').value;
                cells[3].innerText = document.getElementById('edit-prio').value;
                cells[4].innerText = document.getElementById('edit-assign').value;
                hideModal();
            });
        }
    });
</script>