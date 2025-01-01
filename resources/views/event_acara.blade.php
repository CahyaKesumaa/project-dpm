@section('page-title', 'Berita Acara')
@extends('layout.layout-main')
@section('main')
<H1 class="text-xl font-bold text-black-800 text-center pt-6"> BERITA ACARA KEGIATAN </H1>
  <!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card -->
      <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
            </a>
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 text-center">
            Pelantikan Ormawa
          </h3>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Tampilkan Kegiatan
          </a>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
            </a>
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 text-center">
            LKMM
          </h3>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Tampilkan Kegiatan
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
            </a>
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 text-center">
            Dies Natalis ( Jalan Sehat)
          </h3>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Tampilkan Kegiatan
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
            </a>
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 text-center">
            D2S
          </h3>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Tampilkan Kegiatan
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl pt-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
            </a>
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 text-center">
            Pemilu Raya ( PEMIRA )
          </h3>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Tampilkan Kegiatan
          </a>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Blog -->
@endsection