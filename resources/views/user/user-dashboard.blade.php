@extends('layouts.user-layout')

@section('content')
<div class="relative px-4 mb-5">
    <div class="max-h-full md:flex">
        <div class="flex-1">
            <div class="flex items-center justify-between mb-5">
                <span class="toggle-button text-white text-4xl top-5 left-4 cursor-pointer lg:hidden">
                    <img src="../asset/image/img/home_icon.svg">
                </span>
                <div class="flex items-center justify-start hidden lg:flex">
                    <h1 class="font-semibold text-3xl">Hi, Jacob</h1>
                </div>
                <div class="flex items-center justify-end">
                    <p class="font-medium text-[13px] me-2">02 Sepetember 2023</p>
                    <img src="../asset/image/img/home_icon.svg" />
                </div>
            </div>
            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center justify-start lg:hidden">
                    <h1 class="font-semibold text-3xl lg:text-\[40px\]]">Hi, Jacob</h1>
                </div>
                <div class="w-full hidden lg:flex">
                    <p class="text-center text-base">
                        Pantau kondisi lingkungan di sekitar perkebunanmu sekarang!
                    </p>
                </div>
                <div class="flex items-center justify-end">
                    <div class="relative w-[124px] h-[25px]">
                        <select id="filter" name="filter" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-1 px-1 rounded-lg leading-tight focus:outline-none focus:border-blue-500 text-center text-xs font-semibold">
                            <option value="L001">L001</option>
                            <option value="L002">L002</option>
                            <option value="L003">L003</option>
                            <option value="L004">L004</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M5 8l5 5 5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mb-5 lg:hidden">
                <p class="text-center text-[10px]">
                    Pantau kondisi lingkungan di sekitar perkebunanmu sekarang!
                </p>
            </div>

            <div class="min-w-full mx-auto bg-white p-6 hidden md:block">
                <div class="grid grid-cols-3 gap-5">
                    <!-- Item 1 -->
                    <div class="bg-blue-200 p-4 rounded-md">Item 1</div>

                    <!-- Item 2 -->
                    <div class="bg-green-200 p-4 rounded-md">Item 2</div>

                    <!-- Item 3 -->
                    <div class="bg-yellow-200 p-4 rounded-md">Item 3</div>

                    <!-- Item 4 -->
                    <div class="bg-pink-200 p-4 rounded-md">Item 4</div>

                    <!-- Item 5 -->
                    <div class="bg-purple-200 p-4 rounded-md">Item 5</div>

                    <!-- Item 6 -->
                    <div class="bg-orange-200 p-4 rounded-md">Item 6</div>
                </div>
            </div>
        </div>

        <div class="w-[275px] h-[229px] mx-auto bg-white p-6 rounded-md shadow-md bg-slate-400 md:flex-none md:ms-9 md:w-[340px] md:h-[308px]">
            <h2 class="text-2xl font-bold mb-4">John Doe</h2>
            <p class="text-gray-700 mb-2">Web Developer</p>
            <p class="text-gray-600 mb-4">Email: john.doe@example.com</p>
        </div>

        <div class="max-w-xs mx-auto bg-white p-6 md:hidden">
            <div class="grid grid-cols-2 gap-10">
                <!-- Item 1 -->
                <div class="bg-blue-200 p-4 rounded-md">Item 1</div>

                <!-- Item 2 -->
                <div class="bg-green-200 p-4 rounded-md">Item 2</div>

                <!-- Item 3 -->
                <div class="bg-yellow-200 p-4 rounded-md">Item 3</div>

                <!-- Item 4 -->
                <div class="bg-pink-200 p-4 rounded-md">Item 4</div>

                <!-- Item 5 -->
                <div class="bg-purple-200 p-4 rounded-md">Item 5</div>

                <!-- Item 6 -->
                <div class="bg-orange-200 p-4 rounded-md">Item 6</div>
            </div>
        </div>
    </div>

    <div class="min-w-full">
        <div class="items-center justify-between mt-5 hidden md:flex">
            <div class="flex items-center justify-start">
                <p>Pertinjau</p>
            </div>
            <div class="flex items-center justify-end">
                <p class="font-medium text-[13px] me-1">lihat selengkapnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
        </div>
        <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] md:mt-7 hidden md:flex">
            <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px]">
                <img src="../asset/image/img/user-36-02.jpg" class="w-full h-full" />
            </div>
            <div class="flex-col flex-1 md:flex md:flex-row justify-between">
                <div class="flex items-center justify-between md:flex-col">
                    <div class="flex items-center justify-start">
                        <p>Suhu saat ini</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <p class="font-medium text-[13px]">27*</p>
                    </div>
                </div>

                <div class="flex items-center justify-between md:flex-col">
                    <div class="flex items-center justify-start">
                        <p>Suhu saat ini</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <p class="font-medium text-[13px]">27*</p>
                    </div>
                </div>

                <div class="flex items-center justify-between md:flex-col">
                    <div class="flex items-center justify-start">
                        <p>Suhu saat ini</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <p class="font-medium text-[13px]">27*</p>
                    </div>
                </div>

                <div class="flex items-center justify-between md:flex-col">
                    <div class="flex items-center justify-start">
                        <p>Suhu saat ini</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <p class="font-medium text-[13px]">27*</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-full">
        <div class="items-center justify-between mt-5 hidden md:flex">
            <div class="flex items-center justify-start">
                <p>Sensor</p>
            </div>
            <div class="flex items-center justify-end">
                <p class="font-medium text-[13px] me-1">lihat selengkapnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
        </div>

        <div class="w-full mt-7 hidden md:block">
            <!--Graph Card-->
            <div class="bg-white border-transparent rounded-lg shadow-xl">
                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                    <h class="font-bold uppercase text-gray-600">Suhu</h>
                </div>
                <div class="p-5">
                    <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>
                        new Chart(document.getElementById("chartjs-7"), {
                            type: "bar",
                            data: {
                                labels: ["January", "February", "March", "April"],
                                datasets: [{
                                        label: "Page Impressions",
                                        data: [10, 20, 30, 40],
                                        borderColor: "rgb(255, 99, 132)",
                                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                                    },
                                    {
                                        label: "Adsense Clicks",
                                        data: [5, 15, 10, 30],
                                        type: "line",
                                        fill: false,
                                        borderColor: "rgb(54, 162, 235)",
                                    },
                                ],
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                        },
                                    }, ],
                                },
                            },
                        });
                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>
    </div>
</div>

@endsection