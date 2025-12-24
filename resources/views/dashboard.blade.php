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
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
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
    </style>
</head>
<body class="text-slate-800 antialiased overflow-x-hidden">

    <x-sidebar />

    <main class="main-content pl-20 transition-all duration-300 bg-[#F9FEFF]">
        <div class="max-w-[1600px] mx-auto px-4 pb-4 md:px-8 md:pb-8">
            
            <x-header />

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <x-kpi-card title="Patients Ready" value="42" subtext="31 discharges pending" color="green" icon="<img src='{{ asset('images/tick.svg') }}'>" />
                <x-kpi-card title="Pending Disclosures" value="8" subtext="Awaiting Review" color="orange" icon="<img src='{{ asset('images/pending.svg') }}'>" />
                <x-kpi-card title="Open Tasks" value="123" subtext="86 Critical" color="blue" icon="<img src='{{ asset('images/Open_task.svg') }}'>" />
                <x-kpi-card title="Low Inventory Alerts" value="3" subtext="Critical Items Low" color="red" icon="<img src='{{ asset('images/red_alert.svg') }}'>" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <x-analytics-card title="Patient Flow">
                    <div id="patient-flow-chart" class="min-h-[160px] w-full"></div>
                </x-analytics-card>

                <x-analytics-card title="Task Status Distribution">
                    <div class="flex flex-col h-full">
                        <div class="flex justify-center items-center py-2">
                            <div class="relative w-[155px] h-[151px]">
                                <div id="task-status-chart" style="width: 155px; height: 151px;"></div>
                                <!-- Custom Data Labels with Ellipse Background -->
                                <div class="absolute top-[20px] left-[10px] w-[34px] h-[32px] flex items-center justify-center bg-contain bg-no-repeat bg-center" style="background-image: url('{{ asset('images/Ellipse 1.svg') }}');">
                                    <span class="text-[10px] font-bold text-slate-900 pt-1">20%</span>
                                </div>
                                <div class="absolute top-[20px] right-[10px] w-[34px] h-[32px] flex items-center justify-center bg-contain bg-no-repeat bg-center" style="background-image: url('{{ asset('images/Ellipse 1.svg') }}');">
                                    <span class="text-[10px] font-bold text-slate-900 pt-1">20%</span>
                                </div>
                                <div class="absolute bottom-[10px] left-1/2 -translate-x-1/2 w-[34px] h-[32px] flex items-center justify-center bg-contain bg-no-repeat bg-center" style="background-image: url('{{ asset('images/Ellipse 1.svg') }}');">
                                    <span class="text-[10px] font-bold text-slate-900 pt-1">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto px-4 pb-2 space-y-2">
                            <div class="flex items-center justify-between text-[12px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#A8BBA3]"></div>
                                    <span class="font-semibold text-slate-600">Completed</span>
                                </div>
                                <span class="font-bold text-slate-800">60%</span>
                            </div>
                            <div class="flex items-center justify-between text-[12px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#B87C4C]"></div>
                                    <span class="font-semibold text-slate-600">Inprogress</span>
                                </div>
                                <span class="font-bold text-slate-800">20%</span>
                            </div>
                            <div class="flex items-center justify-between text-[12px]">
                                <div class="flex items-center gap-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#EBD9D1]"></div>
                                    <span class="font-semibold text-slate-600">Pending</span>
                                </div>
                                <span class="font-bold text-slate-800">20%</span>
                            </div>
                        </div>
                    </div>
                </x-analytics-card>

                <x-analytics-card title="Inventory Usage Trend">
                    <div id="inventory-usage-chart" class="min-h-[160px] w-full"></div>
                </x-analytics-card>

                <x-analytics-card title="Sales Performance">
                    <div class="flex flex-col h-full justify-between">
                        <div id="sales-performance-chart" class="min-h-[160px] w-full"></div>
                        <div class="px-2 pb-2">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl font-bold text-slate-800">30%</span>
                                <p class="text-[10px] text-slate-500 font-medium leading-tight">
                                    Your sales performance is 30%<br>better compare to last month
                                </p>
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

    <div class="fixed bottom-0 left-0 right-0 bg-white/80 backdrop-blur-md border-t border-slate-100 p-4 flex justify-around items-center md:hidden z-50">
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg><span class="text-[4px] font-bold">SEARCH</span></button>
        <button onclick="toggleSidebar()" class="-mt-10 w-14 h-14 bg-slate-900 text-white rounded-full shadow-lg flex items-center justify-center border-4 border-white active:scale-95 transition-transform"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
        <button class="text-slate-400 flex flex-col items-center gap-1"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span class="text-[4px] font-bold">PROFILE</span></button>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                    name: 'Patients',
                    data: [85, 110, 75, 95, 112, 80, 60]
                }],
                chart: {
                    type: 'area',
                    height: 200,
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
                    colors: ['#B87C4C']
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        type: 'vertical',
                        colorStops: [
                            { offset: 0, color: "#EBD9D1", opacity: 0.6 },
                            { offset: 100, color: "#A8BBA3", opacity: 0.2 }
                        ]
                    }
                },
                xaxis: {
                    type: 'category',
                    categories: [['Mon', '15'], ['Tue', '16'], ['Wed', '17'], ['Thu', '18'], ['Fri', '19'], ['Sat', '20'], ['Sun', '21']],
                    position: 'top',
                    labels: {
                        show: true,
                        style: {
                            colors: '#2E2E30',
                            fontSize: '12px',
                            fontWeight: 700
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
                    borderColor: '#B1B1B1',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: { lines: { show: true } },
                    yaxis: { lines: { show: false } },
                    padding: { top: 20, right: 0, bottom: 0, left: 0 }
                },
                annotations: {
                    xaxis: [{
                        x: '19',
                        borderColor: '#001DFF',
                        borderWidth: 1.5,
                        label: {
                            show: false
                        }
                    }],
                    points: [{
                        x: '19',
                        y: 112,
                        marker: {
                            size: 0
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
                            offsetY: -10
                        }
                    }]
                },
                tooltip: {
                    enabled: true,
                    custom: function({series, seriesIndex, dataPointIndex, w}) {
                        return '<div class="px-3 py-1 bg-white border border-[#E8E7E7] rounded-lg shadow-sm text-[11px] font-bold text-[#B87C4C]">' +
                            series[seriesIndex][dataPointIndex] + ' Patients' +
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
                series: [60, 20, 20],
                chart: {
                    type: 'donut',
                    height: 151,
                    width: 155,
                    animations: { enabled: false },
                    sparkline: { enabled: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif'
                },
                labels: ['Completed', 'Inprogress', 'Pending'],
                colors: ['#A8BBA3', '#B87C4C', '#EBD9D1'],
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
                        startAngle: 72,
                        expandOnClick: false,
                        donut: {
                            size: '70%',
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontSize: '14px',
                                    fontWeight: 600,
                                    color: '#939393',
                                    offsetY: 20
                                },
                                value: {
                                    show: true,
                                    fontSize: '32px',
                                    fontWeight: 800,
                                    color: '#2E2E30',
                                    offsetY: -15,
                                    formatter: function (val) { return '156' }
                                },
                                total: {
                                    show: true,
                                    label: 'Total',
                                    color: '#939393',
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
                    data: [45, 70, 47, 65, 85, 40]
                }, {
                    name: 'Used Yesterday',
                    data: [25, 55, 30, 50, 65, 25]
                }],
                chart: {
                    type: 'bar',
                    height: 200,
                    toolbar: { show: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif'
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '30%',
                        borderRadius: 2,
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
                    categories: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6'],
                    labels: {
                        show: false
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
                            colors: '#767676',
                            fontSize: '10px',
                            fontWeight: 500
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
                    padding: { top: 0, right: 0, bottom: 0, left: 10 }
                },
                legend: {
                    show: true,
                    position: 'top',
                    horizontalAlign: 'left',
                    fontSize: '11px',
                    fontWeight: 600,
                    markers: {
                        width: 8,
                        height: 8,
                        radius: 12,
                        offsetY: 0
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 0
                    },
                    onItemClick: {
                        toggleDataSeries: true
                    },
                    onItemHover: {
                        highlightDataSeries: true
                    }
                },
                tooltip: {
                    enabled: true,
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(val) {
                            return val + ' units';
                        }
                    },
                    style: {
                        fontSize: '11px',
                        fontWeight: 600
                    }
                }
            };

            var inventoryChart = new ApexCharts(document.querySelector("#inventory-usage-chart"), inventoryOptions);
            inventoryChart.render();

            var salesOptions = {
                series: [{
                    name: 'Background',
                    type: 'bar',
                    data: [100, 100, 100, 100, 100, 100, 100]
                }, {
                    name: 'Performance',
                    type: 'line',
                    data: [45, 75, 35, 60, 35, 55, 25]
                }],
                chart: {
                    type: 'line',
                    height: 160,
                    toolbar: { show: false },
                    fontFamily: 'Plus Jakarta Sans, sans-serif'
                },
                plotOptions: {
                    bar: {
                        columnWidth: '80%',
                        borderRadius: 4
                    }
                },
                stroke: {
                    curve: 'smooth',
                    width: [0, 3]
                },
                fill: {
                    opacity: [1, 1]
                },
                colors: ['#FCF8F6', '#B87C4C'], 
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    labels: {
                        show: true,
                        style: {
                            colors: '#767676',
                            fontSize: '11px',
                            fontWeight: 500
                        },
                        rotate: 0
                    },
                    axisBorder: { show: false },
                    axisTicks: { show: false }
                },
                yaxis: {
                    show: false,
                    max: 100
                },
                grid: {
                    show: false
                },
                legend: {
                    show: false
                },
                annotations: {
                    points: [{
                        x: 'May',
                        y: 35,
                        marker: {
                            size: 4,
                            fillColor: '#fff',
                            strokeColor: '#B87C4C',
                            strokeWidth: 2,
                            radius: 2
                        },
                        label: {
                            borderColor: '#E8E7E7',
                            style: {
                                color: '#B87C4C',
                                background: '#fff',
                                fontSize: '10px', 
                                fontWeight: 700,
                                padding: { left: 8, right: 8, top: 4, bottom: 4 }
                            },
                            text: '4500: Low sales in May',
                            offsetY: -30
                        }
                    }]
                },
                tooltip: {
                    enabled: true,
                    style: {
                        fontSize: '11px'
                    }
                }
            };

            var salesChart = new ApexCharts(document.querySelector("#sales-performance-chart"), salesOptions);
            salesChart.render();
        });
    </script>
</body>
</html>
