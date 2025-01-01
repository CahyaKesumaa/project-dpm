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
                    <img class="rounded-xl mx-auto mb-4"
                        src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                    <h3 class="text-sm font-medium text-gray-800">David Forren</h3>
                    <p class="text-xs text-gray-600">Founder / CEO</p>
                </div>
                <div class="text-center bg-gray-200 border border-gray-200 shadow-sm rounded-lg p-4">
                    <img class="rounded-xl mx-auto mb-4"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                    <h3 class="text-sm font-medium text-gray-800">Amil Evara</h3>
                    <p class="text-xs text-gray-600">UI/UX Designer</p>
                </div>
                <div class="text-center bg-gray-200 border border-gray-200 shadow-sm rounded-lg p-4">
                    <img class="rounded-xl mx-auto mb-4"
                        src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
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
