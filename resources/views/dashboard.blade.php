<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSL Labs | Dashboard Command Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Mulish:wght@500;600;700;800&family=Inter:wght@400;600&family=Instrument+Sans:wght@500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; zoom: 80%; }
        .sidebar-item-active { background-color: #f1f5f9; color: #1e293b; border-radius: 12px; }
        .custom-shadow { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03); }
        @media (max-width: 768px) {
            .main-content { padding-left: 0 !important; padding-bottom: 80px; }
        }
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
        @media (max-width: 640px) {
            .flatpickr-calendar {
                left: 50% !important;
                transform: translateX(-50%) !important;
            }
        }
        /* Specific styling for Patient Flow Chart X-Axis Labels */
        #patient-flow-chart .apexcharts-xaxis-label tspan:nth-of-type(1) {
            font-weight: 500;
            fill: #94a3b8; /* Slate 400 */
        }
        #patient-flow-chart .apexcharts-xaxis-label tspan:nth-of-type(2) {
            font-weight: 800 !important;
            fill: #1e293b !important; /* Slate 800 */
            font-size: 12px;
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .component-scroll::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .component-scroll {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="text-slate-800 antialiased overflow-x-hidden">

    <x-sidebar />

    <main class="main-content pl-20 transition-all duration-300 bg-[#F9FEFF]">
        <div class="max-w-[1600px] mx-auto px-4 pb-4 md:px-8 md:pb-8">
            
            <x-header />

            <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 py-4 sm:py-0 sm:mb-8 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:overflow-visible component-scroll">
                <x-kpi-card title="Patients Ready" value="42" subtext="31 discharges pending" color="green" icon="<img src='{{ asset('images/tick.svg') }}'>" class="min-w-full snap-center sm:min-w-0" />
                <x-kpi-card title="Pending Disclosures" value="8" subtext="Awaiting Review" color="orange" icon="<img src='{{ asset('images/pending.svg') }}'>" class="min-w-full snap-center sm:min-w-0" />
                <x-kpi-card title="Open Tasks" value="123" subtext="86 Critical" color="blue" icon="<img src='{{ asset('images/Open_task.svg') }}'>" class="min-w-full snap-center sm:min-w-0" />
                <x-kpi-card title="Low Inventory Alerts" value="3" subtext="Critical Items Low" color="red" icon="<img src='{{ asset('images/red_alert.svg') }}'>" class="min-w-full snap-center sm:min-w-0" />
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-[repeat(24,minmax(0,1fr))] gap-4 md:gap-6 mb-8 md:pb-0">
                <x-analytics-card title="Patient Flow" height="h-[340px]" class="col-span-2 md:col-span-1 lg:col-span-7">
                    <div id="patient-flow-chart" class="min-h-[220px] w-full -mt-2"></div>
                    <div class="flex justify-between items-center px-4 -mt-6 w-full">
                        <div class="flex items-center justify-between w-[45%] gap-2">
                            <span class="text-[12px] font-bold text-slate-800 whitespace-nowrap">Max</span>
                            <span class="text-[12px] font-bold text-slate-800 whitespace-nowrap">253</span>
                        </div>
                        <div class="flex items-center justify-between w-[45%] gap-2">
                            <span class="text-[12px] font-bold text-slate-800 whitespace-nowrap">Today</span>
                            <span class="text-[12px] font-bold text-slate-800 whitespace-nowrap">112</span>
                        </div>
                    </div>
                </x-analytics-card>

                <x-analytics-card title="Task Status Distribution" mobileTitleSize="text-[15px]" class="col-span-1 lg:col-span-5">
                    <div class="flex flex-col h-full">
                        <div class="flex justify-center items-center py-2">
                            <div class="relative w-[175px] h-[171px]">
                                <div id="task-status-chart" style="width: 175px; height: 171px; transform: scale(1.15);"></div>
                                <div class="absolute top-[6px] left-[4px] w-[34px] h-[34px] flex items-center justify-center bg-[#F2F5FA] rounded-full shadow-[0_2px_4px_rgba(0,0,0,0.15)] z-10 border-2 border-white">
                                    <span class="text-[11px] font-extrabold text-slate-800">20%</span>
                                </div>
                                <div class="absolute top-[6px] right-[4px] w-[34px] h-[34px] flex items-center justify-center bg-[#F2F5FA] rounded-full shadow-[0_2px_4px_rgba(0,0,0,0.15)] z-10 border-2 border-white">
                                    <span class="text-[11px] font-extrabold text-slate-800">20%</span>
                                </div>
                                <div class="absolute bottom-[-6px] left-1/2 -translate-x-1/2 w-[34px] h-[34px] flex items-center justify-center bg-[#F2F5FA] rounded-full shadow-[0_2px_4px_rgba(0,0,0,0.15)] z-10 border-2 border-white">
                                    <span class="text-[11px] font-extrabold text-slate-800">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto px-2 pb-1 w-full max-w-[190px] mx-auto">
                            <div class="flex items-center justify-between text-[13px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-[#A8BBA3]"></div>
                                    <span class="font-bold text-slate-600">Completed</span>
                                </div>
                                <span class="font-extrabold text-slate-800">60%</span>
                            </div>
                            <div class="flex items-center justify-between text-[13px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-[#B87C4C]"></div>
                                    <span class="font-bold text-slate-600">Inprogress</span>
                                </div>
                                <span class="font-extrabold text-slate-800">20%</span>
                            </div>
                            <div class="flex items-center justify-between text-[13px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-[#EBD9D1]"></div>
                                    <span class="font-bold text-slate-600">Pending</span>
                                </div>
                                <span class="font-extrabold text-slate-800">20%</span>
                            </div>
                        </div>
                    </div>
                </x-analytics-card>

                <x-analytics-card title="Inventory Usage Trend" mobileTitleSize="text-[15px]" class="col-span-1 lg:col-span-6">
                    <div class="flex items-center gap-2 md:gap-6 px-1 mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-2.5 rounded-full bg-[#B87C4C]"></div>
                            <span class="font-['Inter'] font-bold text-[7.85px] leading-none text-[#767676] md:text-[12px] md:font-['Plus_Jakarta_Sans'] md:text-[#94a3b8]">Used Today</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-2.5 rounded-full bg-[#EBD9D1]"></div>
                            <span class="font-['Inter'] font-bold text-[7.85px] leading-none text-[#767676] md:text-[12px] md:font-['Plus_Jakarta_Sans'] md:text-[#94a3b8]">Used Yesterday</span>
                        </div>
                    </div>
                    <div id="inventory-usage-chart" class="min-h-[160px] w-full"></div>
                </x-analytics-card>

                <x-analytics-card title="Sales Performance" class="col-span-2 md:col-span-1 lg:col-span-6">
                    <div class="flex flex-col h-full bg-white">
                        <div class="relative w-full h-[200px] mt-[-5px] group">
                            <div id="sales-performance-chart" class="w-full h-full"></div>
                        </div>
                        <div class="px-3 pb-4 flex justify-center">
                            <div class="flex items-center gap-1.5">
                                <span class="font-['Inter'] font-bold text-[20.07px] text-[#2E2E30] leading-none">30%</span>
                                <div class="flex flex-col">
                                    <p class="font-['Inter'] font-normal text-[12.04px] text-[#767676] leading-none">
                                        Your sales performance is 30%<br>better compare to last month
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-analytics-card>
            </div>

            <div class="mb-8">
                <x-action-table />
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                    name: 'Patients',
                    data: [95, 75, 55, 85, 112, 80]
                }],
                chart: {
                    type: 'area',
                    height: 220,
                    toolbar: { show: false },
                    zoom: { enabled: false },
                    sparkline: { enabled: false },
                    fontFamily: 'Mulish, sans-serif'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                    colors: ['#B87C4C'],
                    dropShadow: {
                        enabled: true,
                        top: 2,
                        left: 0,
                        blur: 4,
                        opacity: 0.25,
                        color: '#000000'
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100],
                        colorStops: [
                            { offset: 0, color: "#EBD9D1", opacity: 1 },
                            { offset: 100, color: "#A8BBA3", opacity: 1 }
                        ]
                    }
                },
                xaxis: {
                    type: 'category',
                    categories: [['Mon', '15'], ['Tue', '16'], ['Wed', '17'], ['Thu', '18'], ['Fri', '19'], ['Sat', '20']],
                    position: 'top',
                    labels: {
                        show: true,
                        style: {
                            colors: '#94a3b8',
                            fontSize: '11px',
                            fontWeight: 600
                        },
                        rotate: 0,
                        offsetY: 0
                    },
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                    tooltip: { enabled: false }
                },
                yaxis: {
                    show: false
                },
                grid: {
                    show: true,
                    borderColor: '#EEF0F2',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: { lines: { show: true } },
                    yaxis: { lines: { show: false } },
                    padding: { top: 20, right: 0, bottom: 0, left: 10 }
                },
                annotations: {
                    xaxis: [{
                        x: 'Fri',
                        borderColor: '#4361EE',
                        borderWidth: 1.5,
                        strokeDashArray: 0,
                        label: { show: false }
                    }],
                    points: [{
                        x: 'Fri',
                        y: 112,
                        marker: {
                            size: 4,
                            fillColor: '#fff',
                            strokeColor: '#B87C4C',
                            strokeWidth: 2
                        },
                        label: {
                            borderColor: '#E8E7E7',
                            borderWidth: 1,
                            borderRadius: 5,
                            text: '112: Patient Flow Today',
                            style: {
                                background: '#fff',
                                color: '#B87C4C',
                                fontSize: '11px',
                                fontWeight: 700,
                                padding: { left: 10, right: 10, top: 4, bottom: 4 }
                            },
                            offsetY: -6
                        }
                    }]
                },
                tooltip: {
                    enabled: true,
                    custom: function({series, seriesIndex, dataPointIndex, w}) {
                        return '<div class="px-3 py-1 bg-white border border-[#E8E7E7] rounded-lg shadow-sm text-[11px] font-bold">' +
                            '<span class="text-[#B87C4C]">' + series[seriesIndex][dataPointIndex] + ":" + '</span>' +
                            '<span class="text-[#939393]"> Patients Flow Today</span>' +
                            '</div>';
                    }
                },
                markers: {
                    size: 0,
                    hover: { size: 5, sizeOffset: 3 }
                },
                colors: ['#B87C4C']
            };

            var chart = new ApexCharts(document.querySelector("#patient-flow-chart"), options);
            chart.render();

            var taskOptions = {
                series: [20, 60, 20],
                chart: {
                    type: 'donut',
                    height: '100%',
                    width: '100%',
                    offsetX: 0,
                    offsetY: 0,
                    animations: { enabled: false },
                    sparkline: { enabled: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif'
                },
                labels: ['Inprogress', 'Completed', 'Pending'],
                colors: ['#B87C4C', '#A8BBA3', '#EBD9D1'],
                stroke: { width: 0 },
                states: {
                    hover: { filter: { type: 'none' } },
                    active: { filter: { type: 'none' } }
                },
                dataLabels: {
                    enabled: false
                },
                plotOptions: {
                    pie: {
                        startAngle: 0,
                        expandOnClick: false,
                        donut: {
                            size: '40%',
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontSize: '12px',
                                    fontWeight: 700,
                                    color: '#64748b',
                                    offsetY: 20
                                },
                                value: {
                                    show: true,
                                    fontSize: '22px',
                                    fontWeight: 800,
                                    color: '#1e293b',
                                    offsetY: -10,
                                    formatter: function (val) { return '156' }
                                },
                                total: {
                                    show: true,
                                    showAlways: true,
                                    label: 'Total',
                                    color: '#0f172a',
                                    fontSize: '12px',
                                    fontWeight: 700,
                                    formatter: function (w) { return '156' }
                                }
                            }
                        }
                    }
                },
                legend: { show: false },
                tooltip: { enabled: false }
            };

            var taskChart = new ApexCharts(document.querySelector("#task-status-chart"), taskOptions);
            taskChart.render();

            var inventoryOptions = {
                series: [{
                    name: 'Used Today',
                    data: [35, 70, 45, 60]
                }, {
                    name: 'Used Yesterday',
                    data: [25, 45, 30, 40]
                }],
                chart: {
                    type: 'bar',
                    height: 250,
                    toolbar: { show: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif'
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        borderRadius: 0,
                        borderRadiusApplication: 'end'
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ['transparent']
                },
                colors: ['#B87C4C', '#EBD9D1'],
                xaxis: {
                    categories: ['Medication', 'Supplies', 'Equipment', 'Usage'],
                    labels: {
                        show: true,
                        rotate: -45,
                        rotateAlways: true,
                        style: {
                            colors: '#94a3b8',
                            fontSize: '11px',
                            fontWeight: 600
                        },
                        offsetY: 5
                    },
                    axisBorder: { show: false },
                    axisTicks: { show: false }
                },
                yaxis: {
                    tickAmount: 2,
                    min: 0,
                    max: 100,
                    labels: {
                        show: true,
                        style: {
                            colors: '#94a3b8',
                            fontSize: '11px',
                            fontWeight: 600
                        },
                        formatter: function(val) {
                            return Math.round(val);
                        }
                    }
                },
                grid: {
                    show: true,
                    borderColor: '#EEF0F2',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: { lines: { show: false } },
                    yaxis: { lines: { show: true } },
                    padding: { top: 0, right: 0, bottom: 30, left: 10 }
                },
                legend: {
                    show: false
                },
                tooltip: {
                    enabled: true,
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(val) {
                            return val + ' units';
                        }
                    }
                }
            };

            var inventoryChart = new ApexCharts(document.querySelector("#inventory-usage-chart"), inventoryOptions);
            inventoryChart.render();

            var salesOptions = {
                series: [{
                    name: 'Background Standard',
                    type: 'bar',
                    data: [100, 100, 100, 100, 100, 0, 100]
                }, {
                    name: 'Highlight Solid',
                    type: 'bar',
                    data: [0, 0, 0, 0, 0, 100, 0]
                }, {
                    name: 'Performance',
                    type: 'line',
                    data: [45, 80, 40, 65, 45, 60, 35]
                }],
                chart: {
                    type: 'line',
                    height: 200,
                    stacked: true,
                    toolbar: { show: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif',
                    zoom: { enabled: false },
                    sparkline: { enabled: false }
                },
                plotOptions: {
                    bar: {
                        columnWidth: '94%',
                        borderRadius: 3,
                        borderRadiusApplication: 'end'
                    }
                },
                stroke: {
                    curve: 'smooth',
                    width: [0, 0, 2],
                    colors: ['transparent', 'transparent', '#B87C4C']
                },
                fill: {
                    type: ['solid', 'solid', 'solid'],
                    opacity: [1, 1, 1]
                },
                colors: ['#fbf7f4', '#f2e4db', '#B87C4C'], 
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    labels: {
                        show: true,
                        style: {
                            colors: ['#2E2E30', '#2E2E30', '#2E2E30', '#2E2E30', '#2E2E30', '#2E2E30', '#B87C4C'],
                            fontSize: '10.03px',
                            fontWeight: 400,
                            fontFamily: 'Inter, sans-serif'
                        },
                        formatter: function(val) {
                            if (['Jan', 'Mar', 'May', 'Jul'].includes(val)) return val;
                            return '';
                        },
                        rotate: 0,
                        offsetY: -5
                    },
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                    tooltip: { enabled: false }
                },
                yaxis: {
                    show: false,
                    max: 100,
                    min: 0
                },
                grid: {
                    show: false,
                    padding: { top: 0, bottom: 0, left: -12, right: -12 }
                },
                states: {
                    hover: { filter: { type: 'none' } },
                    active: { filter: { type: 'none' } }
                },
                legend: { show: false },
                tooltip: { 
                    enabled: true,
                    shared: false,
                    intersect: false,
                    custom: function({series, seriesIndex, dataPointIndex, w}) {
                        var value = w.config.series[2].data[dataPointIndex] * 100;
                        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'];
                        var month = months[dataPointIndex];
                        return '<div class="bg-white border border-slate-100 rounded-xl shadow-[0_4px_10px_rgba(0,0,0,0.08)] px-3 py-1.5 flex items-center gap-1 whitespace-nowrap">' +
                            '<span class="text-[#B87C4C] font-bold text-[12px] font-[\'Plus_Jakarta_Sans\']">' + value + ':</span>' +
                            '<span class="text-slate-400 font-bold text-[11px] ml-0.5 font-[\'Plus_Jakarta_Sans\']">Low sales in ' + month + '</span>' +
                            '</div>';
                    }
                },
                markers: { size: 0, hover: { size: 4, colors: ['#fff'], strokeColors: '#B87C4C', strokeWidth: 2 } },
                dataLabels: { enabled: false }
            };

            var salesChart = new ApexCharts(document.querySelector("#sales-performance-chart"), salesOptions);
            salesChart.render();
        });
    </script>
</body>
</html>
