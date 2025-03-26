<style>
    .fixed-bg {
        background-image: url("images/product/bg_spek.png");
        min-height: max-content;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="w-full fixed-bg">
    <div class="w-full max-w-4xl mx-auto sm:px-5">
        <div class="montserrat italic w-full text-4xl text-specTitle text-center font-bold mb-3 uppercase sm:text-4xl sm:mb-7 sm:pt-10 lg:mb-10 lg:pt-14">SPECIFICATION BYD <?= $_GET['name'] ?></div>
        <div class="flex items-center justify-center pt-10 sm:my-10 ">
            <div class="bg-skewTab py-4 px-6 w-full flex justify-around items-center -skew-x-20" style="background: #D9D9D999;">
                <button id="facility-tab" class="montserrat italic tab-button font-bold inactive-tab hover:text-black focus:outline-none transition-all duration-300">
                    DOLPHIN PREMIUM
                </button>
                <div class="w-px h-8 bg-gray-400"></div>
                <button id="gallery-tab" class="montserrat italic tab-button font-bold inactive-tab hover:text-black focus:outline-none transition-all duration-300">
                    DOLPHIN DYNAMICS
                </button>
            </div>
        </div>
        <div class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2">DIMENSI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1">Panjang ( mm )</div>
                        <div id="long" class="font-bold">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1">Lebar ( mm )</div>
                        <div id="wide" class="font-bold">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1">Tinggi ( mm )</div>
                        <div id="tall" class="font-bold">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1">Ground Clearance ( mm )</div>
                        <div id="ground-clearance" class="font-bold">4290</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1">Whellbase ( mm )</div>
                        <div id="whellbase" class="font-bold">4290</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="engine" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2">ENGINE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1">Type</div>
                        <div id="type" class="font-bold">ELectric</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1">Max Power ( PS )</div>
                        <div id="max-power" class="font-bold">150</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1">Max Troque ( N.m )</div>
                        <div id="max-troque" class="font-bold">310</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="transmisi" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2">TRANSMISI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="transmision" class="w-full ">
                    <div class="mb-1">Transmission</div>
                    <div id="transmission" class="font-bold">A/T</div>
                </div>
            </div>
        </div>
        <div id="suspension" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2 uppercase">SUSPENSI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="col-span-1 col-span-2">
                        <div class="mb-1">Front Suspension</div>
                        <div id="front-suspension" class="font-bold">Macpherseon Strut</div>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-1">Rear Suspension</div>
                        <div id="rear-suspension" class="font-bold">Multi_link</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="whell-size" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2 uppercase">WHEEL SIZE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="wheelsize" class="w-full ">
                    <div class="mb-1">Wheelsize</div>
                    <div id="whellsize" class="font-bold">215/60 R17</div>
                </div>
            </div>
        </div>
        <div id="capacity" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2 uppercase">KAPASITAS</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1">Passenger Capacity ( Person )</div>
                        <div id="passenger-capacity" class="font-bold">5-seaters</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1">Battery Capacity ( Kwh )</div>
                        <div id="battery-capacity" class="font-bold">60,48</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1">Range ( Km )</div>
                        <div id="range" class="font-bold">490</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="brake-style" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2 uppercase">BRAKE STYLE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="col-span-2">
                        <div class="mb-1">Front Brake</div>
                        <div id="front-brake" class="font-bold">Ventilated Disc</div>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-1">Rear Brake</div>
                        <div id="rear-brake" class="font-bold">Disc</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature" class="pb-7">
            <div class="w-full flex justify-start items-center pl-10 mb-5">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-xl font-bold ml-2 uppercase">FITUR</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-14 mb-10 text-white open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="feature" class="w-full">
                    <div class="mb-1">Fitur Keselamatan</div>
                    <div id="feature" class="font-bold">ADAS, Airbag, Camera 360, Ultrasonic Parking Sensor</div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const facilityTab = document.getElementById("facility-tab");
    const galleryTab = document.getElementById("gallery-tab");
    const facilityContent = document.getElementById("facility-content");
    const galleryContent = document.getElementById("gallery-content");

    // Atur tab facility sebagai tab aktif default
    facilityTab.classList.add("active-tab");
    galleryContent.classList.add("hidden");

    const tabs = document.querySelectorAll('.tab-button');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('active-tab');
                t.classList.add('inactive-tab');
            });

            // Set tab yang dipilih menjadi aktif
            tab.classList.add('active-tab');

            // Kondisi untuk menampilkan atau menyembunyikan konten berdasarkan tab yang diklik
            if (tab.id === 'facility-tab') {
                facilityContent.classList.remove('hidden');
                galleryContent.classList.add('hidden');
            } else if (tab.id === 'gallery-tab') {
                galleryContent.classList.remove('hidden');
                facilityContent.classList.add('hidden');
            }
        });
    });
</script>