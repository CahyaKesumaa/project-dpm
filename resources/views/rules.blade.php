@section('page-title', 'Peraturan')
@extends('layout.layout-main')
@section('main')
    <H1 class="text-xl font-bold text-black-800 text-center pt-6"> PERATURAN </H1>
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#"
                        aria-label="Brand">
                        <img class="h-[50px]" src="{{ asset('img/MASTER LOGO ITB.png') }}" alt="">
                    </a>
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600">
                        AD/ART Pemerintahan Mahasiswa
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800">
                        AD/ART-PM
                    </h3>
                    <p class="mt-3 text-gray-500">
                        AD/ART PM merupakan pedoman dalam menjalankan pemerintahan mahasiswa yang sudah disepakati setiap
                        periodenya.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        View Dokumen
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#"
                        aria-label="Brand">
                        <img class="h-[50px]" src="{{ asset('img/LOGO DPM-PM.png') }}" alt="">
                    </a>
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600">
                        AD/ART Dewan Perwakilan Mahasiswa
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800">
                        AD/ART DPM-PM
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Merupakan AD/ART yang menjadi pedoman dalam melakukan kegiatan dan keputusan yang ada di DPM-PM.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        View Dokumen
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#"
                        aria-label="Brand">
                        <img class="h-[50px]" src="{{ asset('img/LOGO DPM-PM.png') }}" alt="">
                    </a>
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-500">
                        Peraturan Pemerintahan Mahasiswa
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800">
                        PPM
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Dalam setiap kegiatan yang dijalankan selalu mengacu pada PPM yang sudah ditetapkan. PPM disusun
                        berdasarkan AD/ART PM dengan terfokus pada tujuan yang ingin dicapai.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        View Dokumen
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#"
                        aria-label="Brand">
                        <img class="h-[50px]" src="{{ asset('img/LOGO DPM-PM.png') }}" alt="">
                    </a>
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-500">
                        Ketetapan DPM
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800">
                        TAP-DPM
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Merupakan ketetapan - ketetapan yang mengacu pada AD/ART Pemerintahan mahasiswa sesuai dengan fungsi
                        dan tujuannya.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        View Dokumen
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#"
                        aria-label="Brand">
                        <img class="h-[50px]" src="{{ asset('img/LOGO DPM-PM.png') }}" alt="">
                    </a>
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-500">
                        Kebijakan - kebijakan dalam DPM
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800">
                        Kebijakan DPM-PM
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Kebijakan yang disusun berdasarkan dengan AD/ART DPM yang dapat menjadi acuan dalam mengambil
                        keputusan yang ada dalam DPM sesuai dengan kebutuhkannya.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        View Dokumen
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Download PDF
                    </a>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
@endsection
