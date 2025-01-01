<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DPM-PM STIKOM</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <!-- ========== HEADER ========== -->
<header class="bg-white border-b border-gray-200 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
  <nav class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-2">
    <!-- Logo w/ Collapse Button -->
    <div class="flex items-center justify-between">
      <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="/" aria-label="Brand">
          <img class="h-[50px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
      </a>

      <!-- Collapse Button -->
      <div class="md:hidden">
        <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic" aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
      </div>
      <!-- End Collapse Button -->
    </div>
    <!-- End Logo w/ Collapse Button -->

    <!-- Collapse -->
    <div id="hs-header-classic" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-classic-collapse">
      <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
        <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
          <a class="p-2 flex items-center text-sm text-blue-600 hover:text-blue-500 focus:outline-none focus:text-blue-600" href="/" aria-current="page">
            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
            Dashboard
          </a>

          <a class="p-2 flex items-center text-sm text-gray-800 hover:text-blue-500 focus:outline-none focus:text-blue-500" href="/peraturan">
            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Peraturan
          </a>

          <!-- Dropdown -->
          <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
            <button id="hs-header-classic-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:text-blue-500 focus:outline-none focus:text-blue-500" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
              Event
              <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-classic-dropdown">
              <div class="py-1 md:px-1 space-y-0.5">
                <a class="py-1.5 px-2 flex items-center text-sm text-gray-800 hover:text-blue-500 focus:outline-none focus:text-gray-500" href="beritaacara">
                  Berita Acara
                </a>

                <a class="py-1.5 px-2 flex items-center text-sm text-gray-800 hover:text-blue-500 focus:outline-none focus:text-gray-500" href="sertifikat">
                  Certificate
                </a>
              </div>
            </div>
          </div>
          <a class="p-2 flex items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500" href="#">
            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
            FAQ
          </a>
          <!-- End Dropdown -->

          <!-- Button Group -->
          <div class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5 mt-1 md:mt-0 md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2">
            <a class="p-2 w-full flex items-center text-sm text-gray-800 hover:text-blue-500 focus:outline-none focus:text-blue-500" href="#">
              <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              Log in
            </a>
          </div>
          <!-- End Button Group -->
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->
    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-6">
      <!-- Hero as Card View -->
      <div class="bg-white border border-gray-200 shadow-lg rounded-xl p-6 md:p-8 lg:p-12">
        <div class="grid md:grid-cols-2 gap-6 lg:gap-10 items-center">
          <!-- Hero Content -->
          <div>
            <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">
              Dewan Perwakilan Mahasiswa <span class="text-blue-600">DPM-PM</span>
            </h1>
            <p class="mt-4 text-lg text-gray-600">
              Merupakan satu struktur organisasi kemahasiswaan di perguruan tinggi yang berfungsi untuk menjalankan roda pemerintahan mahasiswa.
            </p>
            <!-- Buttons -->
            <div class="mt-6 flex gap-4">
              <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" href="#">
                About Us
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
              </a>
              <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50" href="#jajaran">
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
    

  <!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid md:grid-cols-2 gap-12">
    <div class="lg:w-3/4">
      <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl">
        Dewan Perwakilan Mahasiswa ( DPM - PM) ITB STIKOM Bali
      </h2>
      <p class="mt-3 text-gray-800">
        Visi dan Misi kami merupakan pedoman lanjutan dari AD/ART Pemerintahan Mahasiswa yang sudah disepakati berdasarkan hasil musyawarah mufakat.
      </p>
      <p class="mt-5">
        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
          Visi DPM-PM
          <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
      </p>
      <p class="mt-5">
        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
          Misi DPM-PM
          <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
      </p>
    </div>
    <!-- End Col -->

    <div class="space-y-6 lg:space-y-10">
      <!-- Icon Block -->
      <div class="flex gap-x-5 sm:gap-x-8">
        <!-- Icon -->
        <span class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
          <svg fill="#000000" width="800px" height="800px" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M16.417 9.579A7.917 7.917 0 1 1 8.5 1.662a7.917 7.917 0 0 1 7.917 7.917zm-6.37 2.817a.317.317 0 0 0-.316-.317H4.15a.318.318 0 0 0-.317.317v.715a.318.318 0 0 0 .317.317h5.58a.317.317 0 0 0 .317-.317zM5.362 8.655l2.362 2.362a.396.396 0 0 0 .56-.56L5.921 8.096a.396.396 0 1 0-.56.56zm8.05 3.235-3.285-3.285.81-.81L8.593 5.45 6.398 7.644l2.345 2.344.823-.823 3.285 3.285a.396.396 0 1 0 .56-.56zM9.056 4.96l2.363 2.362a.396.396 0 1 0 .56-.56L9.615 4.4a.396.396 0 1 0-.56.56z"/></svg>
        </span>
        <div class="grow">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800">
            Legislasi
          </h3>
          <p class="mt-1 text-gray-600">
            Dalam Dewan Perwakilan Mahasiswa (DPM) merujuk pada proses penyusunan, pembahasan, dan pengesahan aturan atau kebijakan yang berlaku di lingkungan organisasi kemahasiswaan, seperti peraturan internal, tata tertib, dan keputusan strategis.
          </p>
        </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex gap-x-5 sm:gap-x-8">
        <!-- Icon -->
        <span class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
          <svg fill="#000000" width="800px" height="800px" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M16.417 9.583A7.917 7.917 0 1 1 8.5 1.666a7.917 7.917 0 0 1 7.917 7.917zm-4.339-3.332a.794.794 0 0 0-.791-.792h-.268v.767A1.11 1.11 0 0 1 9.91 7.334H6.99a1.11 1.11 0 0 1-1.11-1.108v-.767h-.267a.794.794 0 0 0-.792.792v7.403a.794.794 0 0 0 .792.792h5.673a.794.794 0 0 0 .791-.792zm-1.077 2.522H5.787v.792h5.214zm0 1.713H5.787v.792h5.214zm0 1.713H5.787v.791h5.214zM6.673 6.226a.318.318 0 0 0 .317.317h2.92a.318.318 0 0 0 .317-.317v-.914a.318.318 0 0 0-.316-.317h-.557v-.843a.318.318 0 0 0-.317-.316H7.864a.318.318 0 0 0-.317.316v.843H6.99a.318.318 0 0 0-.317.317zm1.384-1.581a.396.396 0 1 1 .396.396.396.396 0 0 1-.396-.396z"/></svg>
        </span>
        <div class="grow">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800">
            Pengawasan
          </h3>
          <p class="mt-1 text-gray-600">
            Salah satu fungsi utama yang dilakukan untuk memastikan kegiatan, kebijakan, dan keputusan organisasi mahasiswa dijalankan sesuai dengan aturan dan tujuan yang telah ditetapkan. Fungsi pengawasan ini bertujuan untuk menciptakan akuntabilitas, transparansi, dan efektivitas dalam organisasi kemahasiswaan. 
          </p>
        </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex gap-x-5 sm:gap-x-8">
        <!-- Icon -->
        <span class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
          <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 300 300" xml:space="preserve">
<g>
	<g>
		<g>
			<rect x="96.05" y="116.882" width="86.018" height="15.562"/>
			<rect x="96.05" y="145.708" width="86.018" height="15.559"/>
			<path d="M149.997,0C67.157,0,0,67.159,0,150c0,82.838,67.157,150,149.997,150C232.841,300,300,232.838,300,150
				C300,67.159,232.841,0,149.997,0z M170.609,62.068l25.075,28.027h-25.075V62.068z M159.666,214.335H93.56
				c-9.456,0-17.115-7.659-17.115-17.113V71.027c0-9.454,7.659-17.115,17.115-17.115h61.487v51.743h47.598v63.489
				c-0.163-0.005-0.322-0.026-0.488-0.026c-7.441,0-14.436,1.924-20.534,5.294H96.05v15.562h69.53
				c-3.815,6.378-6.046,13.808-6.046,21.768C159.534,212.618,159.615,213.474,159.666,214.335z M202.158,243.988
				c-1.084,0-2.155-0.054-3.211-0.163c-0.371-0.036-0.724-0.112-1.089-0.158c-0.682-0.091-1.362-0.176-2.031-0.314
				c-0.438-0.086-0.861-0.208-1.294-0.314c-0.576-0.143-1.152-0.272-1.714-0.441c-0.469-0.143-0.918-0.319-1.377-0.482
				c-0.503-0.176-1.012-0.35-1.504-0.552c-0.482-0.197-0.947-0.425-1.419-0.648c-0.444-0.207-0.892-0.41-1.323-0.638
				c-0.488-0.259-0.962-0.542-1.437-0.82c-0.384-0.228-0.773-0.456-1.146-0.7c-0.49-0.319-0.965-0.664-1.439-1.014
				c-0.327-0.239-0.656-0.477-0.975-0.729c-0.488-0.384-0.954-0.791-1.419-1.201c-0.272-0.244-0.547-0.488-0.812-0.739
				c-0.477-0.456-0.934-0.921-1.38-1.403c-0.22-0.239-0.441-0.477-0.656-0.724c-0.456-0.521-0.897-1.058-1.32-1.611
				c-0.171-0.223-0.345-0.451-0.511-0.68c-0.431-0.594-0.843-1.201-1.235-1.823c-0.13-0.207-0.254-0.415-0.379-0.622
				c-0.394-0.664-0.773-1.343-1.123-2.036c-0.088-0.176-0.174-0.366-0.262-0.542c-0.355-0.739-0.685-1.484-0.983-2.249
				c-0.057-0.153-0.109-0.303-0.166-0.456c-0.298-0.807-0.573-1.626-0.809-2.461c-0.034-0.112-0.057-0.223-0.088-0.335
				c-0.236-0.887-0.446-1.779-0.607-2.69c-0.013-0.06-0.018-0.122-0.031-0.182c-0.163-0.962-0.296-1.94-0.376-2.928
				c-0.067-0.856-0.132-1.717-0.132-2.594c0-8.393,3.25-16.023,8.525-21.768c0.537-0.589,1.097-1.154,1.675-1.701
				c0.091-0.086,0.187-0.166,0.278-0.254c0.542-0.501,1.097-0.993,1.675-1.46c5.517-4.412,12.496-7.068,20.093-7.068
				c0.163,0,0.322,0.021,0.488,0.026c8.774,0.132,16.711,3.779,22.456,9.594c0.039,0.041,0.067,0.08,0.106,0.117
				c0.674,0.695,1.325,1.408,1.935,2.158c0.083,0.101,0.156,0.213,0.236,0.314c0.555,0.695,1.092,1.408,1.587,2.148
				c0.124,0.182,0.226,0.379,0.345,0.563c0.436,0.68,0.864,1.362,1.245,2.072c0.153,0.283,0.275,0.584,0.42,0.871
				c0.319,0.633,0.641,1.266,0.918,1.919c0.163,0.389,0.288,0.801,0.438,1.196c0.215,0.578,0.449,1.149,0.633,1.748
				c0.153,0.49,0.259,1.004,0.386,1.504c0.135,0.521,0.29,1.032,0.399,1.567c0.13,0.638,0.205,1.292,0.298,1.945
				c0.057,0.41,0.145,0.814,0.184,1.232c0.112,1.079,0.166,2.173,0.166,3.278C234.404,229.521,219.937,243.988,202.158,243.988z"/>
			<path d="M201.992,206.326c-4.884-0.586-7.363-1.255-7.363-3.307c0-3.26,4.897-3.613,7-3.613c3.141,0,6.601,1.499,7.716,3.341
				l0.599,0.993l7.895-3.652l-0.584-1.19c-2.596-5.304-7.143-6.979-10.73-7.672v-4.746h-9.22v4.713
				c-7.61,1.263-12.112,5.626-12.112,11.827c0,10.312,9.581,11.386,15.917,12.092c5.413,0.638,8.045,1.943,8.045,3.986
				c0,4.075-5.921,4.391-7.734,4.391c-4.049,0-8.084-2.059-9.194-4.689l-0.506-1.198l-8.546,3.623l0.508,1.196
				c2.267,5.309,7.078,8.678,13.624,9.573v5.099h9.22v-5.348c6.339-0.871,12.372-4.993,12.372-12.652
				C218.9,208.403,208.728,207.151,201.992,206.326z"/>
		</g>
	</g>
</g>
</svg>
        </span>
        <div class="grow">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800">
            Administrasi dan Keuangan
          </h3>
          <p class="mt-1 text-gray-600">
            Merupakan aspek penting yang mendukung operasional DPM agar berjalan secara terstruktur, transparan, dan akuntabel. Administrasi memastikan pengelolaan dokumen, informasi, dan kegiatan berjalan dengan baik, sedangkan keuangan mengelola dana organisasi secara bertanggung jawab.
          </p>
        </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex gap-x-5 sm:gap-x-8">
        <!-- Icon -->
        <span class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
          <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 490.594 490.594" xml:space="preserve">
<g>
	<g>
		<path d="M383.537,4.194l-30.6,37.1c-3.9,4.7-3.4,11.5,1,15.7c4.8,4.6,12.6,4.1,16.8-1l30.6-37.1c3.9-4.7,3.4-11.5-1-15.7
			C395.537-1.406,387.837-1.006,383.537,4.194z"/>
		<path d="M437.737,51.794c-3.1-5.6-10.1-7.6-15.6-4.5l-41.4,22.7c-5.6,3.1-7.6,10.1-4.5,15.6l0.1,0.3c3.1,5.6,10.1,7.6,15.6,4.6
			l41.4-22.7c5.6-3.1,7.6-10.1,4.6-15.6L437.737,51.794z"/>
		<path d="M148.937,382.994l-107.9,58.4c-5.9,3.2-9.6,9.4-9.6,16.1v22.1c0,6.1,4.9,11,11,11h98.9c8,0,15.8-2,22.8-5.9l71.9-39.5
			c12-5.2,31.9-14.2,50.8-25.2c12.6-5.7,25.5-12.6,34.5-20.4c30.6-26.4,8.7-45.8,8.7-45.8c11-24.3-9.3-36-9.3-36
			c7.1-26.4-17.2-32-17.2-32s1.3-18.9-16.1-23.1c-14.7-3.6-35.1,9.1-46.8,17.7l-28.6-30.7l24.6-13.5l-5.5-9.9
			c31.5-11.2,86.1-25.2,136.9-11.9c3.6,5.7,11.3,7.4,17.1,3.4c5-3.6,6.2-10.6,3.2-16l-33.7-61.3c10.7-12.4,13.1-30.5,4.8-45.7
			c-8.3-15.2-25-22.8-41.2-20.5l-33.4-60.8c-3-5.4-9.5-8.2-15.2-5.9c-6.5,2.7-9.2,10.1-6.3,16.2c-16,50-57.1,88.5-83.5,109.2
			l-5.5-9.9l-66.2,36.4c-13.2,7.2-18,23.7-10.7,36.9l5.8,10.6l-7.2,4c-4.4,2.4-6,8-3.6,12.4l16.4,29.8c2.4,4.4,8,6,12.4,3.6l7.2-4
			l5,9.2c7.2,13.2,23.7,18,36.9,10.7l6.1-3.3l23,25.1c-24,9.2-35.7,44.7-35.7,44.7c-1.8,6.7-1.7,13-1.2,17.8l0,0
			c0.1,1.2,0.3,2.3,0.5,3.3c0.1,1.5-0.3,3.9-1.1,6.7C160.037,373.794,155.237,379.494,148.937,382.994z"/>
		<path d="M388.637,120.194c1.2,5.9,6.7,10,12.7,9.2l47.7-6c6.6-0.8,11.2-7.1,9.9-13.6c-1.2-5.9-6.7-10-12.7-9.2l-47.7,6
			C391.837,107.394,387.337,113.594,388.637,120.194z"/>
	</g>
</g>
</svg>
        </span>
        <div class="grow">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800">
            Aspirasi
          </h3>
          <p class="mt-1 text-gray-600">
            Merujuk pada proses penyerapan, pengelolaan, dan penyampaian pendapat, ide, atau keluhan mahasiswa untuk kemudian diperjuangkan sebagai kebijakan, program, atau solusi yang bermanfaat. Sebagai perwakilan mahasiswa, DPM memiliki peran penting dalam menjadi penghubung antara mahasiswa dengan pihak kampus atau organisasi lain.
          </p>
        </div>
      </div>
      <!-- End Icon Block -->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Icon Blocks -->

<!-- Team -->
<div id="jajaran" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <a class="text-2xl font-bold md:text-4xl md:leading-tight" href="#anggota">
      <h2>Anggota DPM-PM</h2>
      <h2>2025</h2>
    </a>
  </div>
  <!-- End Title -->

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide grid grid-cols-3 gap-4">
        <div class="text-center bg-gray-200 border border-gray-200 shadow-sm rounded-lg p-4">
          <img class="rounded-xl mx-auto mb-4" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
          <h3 class="text-sm font-medium text-gray-800">David Forren</h3>
          <p class="text-xs text-gray-600">Founder / CEO</p>
        </div>
        <div class="text-center bg-gray-200 border border-gray-200 shadow-sm rounded-lg p-4">
          <img class="rounded-xl mx-auto mb-4" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
          <h3 class="text-sm font-medium text-gray-800">Amil Evara</h3>
          <p class="text-xs text-gray-600">UI/UX Designer</p>
        </div>
        <div class="text-center bg-gray-200 border border-gray-200 shadow-sm rounded-lg p-4">
          <img class="rounded-xl mx-auto mb-4" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
          <h3 class="text-sm font-medium text-gray-800">Ebele Egbuna</h3>
          <p class="text-xs text-gray-600">Support Consultant</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Navigation -->
  <div class="swiper-button flex justify-around ">
  <div class="swiper-button-prev">Preview</div>
  <div class="swiper-button-next">Next</div>
  </div>
</div>
<!-- End Swiper -->
</div>
<div>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 25,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 1,
        },
      },
    });
  </script>
  <!-- More Slide -->
</div>
<!-- End Team -->

<!-- Testimonials -->
<div class="relative overflow-hidden">
  <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex -z-[1] absolute start-0">
      <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px]"></div>
    </div>
    <!-- End Gradients -->

    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
      <div class="hidden lg:block lg:col-span-2">
        <img class="rounded-xl" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Avatar">
      </div>
      <!-- End Col -->

      <div class="lg:col-span-4">
        <H1>News</H1>
          <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal">
            Berita DPM terkini.....
          </p>

          <footer class="mt-6">
            <div class="flex items-center">
              <div class="lg:hidden shrink-0">
                <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
              </div>
              <div class="ms-4 lg:ms-0">
                <p class="font-medium text-gray-800">
                  Nicole Grazioso
                </p>
                <p class="text-sm text-gray-600">
                  Pers - ITB STIKOM Bali
                </p>
              </div>
            </div>
          </footer>
        </blockquote>
        <!-- End Blockquote -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->

<!-- ========== FOOTER ========== -->
<footer class="relative overflow-hidden bg-neutral-900">
  <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-neutral-700/50" stroke="currentColor"/>
  </svg>

  <div class="relative z-10">
    <div class="w-full max-w-5xl px-4 xl:px-0 py-10 lg:pt-16 mx-auto">
      <div class="inline-flex items-center">
        <!-- Logo -->
      <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
          <img class="h-[75px]" src="{{ asset("img/MASTER LOGO ITB.png") }}" alt="">
      </a>
      <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
          <img class="h-[100px]" src="{{ asset("img/LOGO DPM-PM.png") }}" alt="">
      </a>
        <!-- End Logo -->

        <div class="border-s border-neutral-700 ps-5 ms-5">
          <p class="text-sm text-neutral-400">
            © 2024 DPM - PM.
          </p>
          <p class="text-sm text-neutral-200">
            ITB STIKOM Bali
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- ========== END FOOTER ========== -->
</body>
</html>