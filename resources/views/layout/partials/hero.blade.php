<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <!-- Hero as Card View -->
    <div class="bg-gray-100 border border-gray-200 shadow-lg rounded-xl p-6 md:p-8 lg:p-12">
        <div class="grid md:grid-cols-2 gap-6 lg:gap-10 items-center">
            <!-- Hero Content -->
            <div>
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">
                    Dewan Perwakilan Mahasiswa <span class="text-blue-600">DPM-PM</span>
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Merupakan satu struktur organisasi kemahasiswaan di perguruan tinggi yang berfungsi untuk
                    menjalankan roda pemerintahan mahasiswa.
                </p>
                <!-- Buttons -->
                <div class="mt-6 flex gap-4">
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700"
                        href="{{ route('about') }}">
                        About Us
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        href="#jajaran">
                        Info Jajaran
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Hero Content -->

            <!-- Hero Image -->
            <div class="relative">
                <img class="w-full rounded-md object-cover" src="{{ asset('img/LOGO DPM-PM.png') }}" alt="Hero Image">
            </div>
            <!-- End Hero Image -->
        </div>
    </div>
    <!-- End Hero as Card View -->
</div>
