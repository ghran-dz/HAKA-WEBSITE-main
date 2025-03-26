<div class="w-full">
    <img id="product-banner" src="" alt="cover" class="w-full h-auto" />
</div>

<!-- BYD Type -->
<div class="w-full mx-auto flex flex-wrap flex-between items-center py-10 lg:py-20 px-5 xl:max-w-screen-lg 2xl:pr-10 2xl:max-w-screen-xl">
    <div class="sm:mr-auto">
        <div id="product-detail-title" class="montserrat w-full text-xl text-title mb-2 uppercase font-bold text-stretched text-center lg:text-left lg:text-3xl lg:mb-4">type byn dolphin</div>
        <div class="open-sans text-xxs text-secondary uppercase italic tracking-[.60em] text-center lg:text-left">elevate mobility</div>
    </div>
    <div class="sm:w-60 max-w-sm ml-auto">
        <select id="countries" class="open-sans bg-formInput border border-black text-title text-sm italic rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1 sm:p-2 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </select>
    </div>
</div>

<!-- Product Thumbnile Area -->
<div id="thumbnile-model" class="w-full max-w-4xl mx-auto grid grid-cols-1 mb-10 pr-5 md:grid-cols-2 gap-5 sm:gap-10 lg:mb-14 lg:px-0"></div>

<style>
    .color-wrapper {
        border: 2px solid gray;
    }

    .color-wrapper.active {
        border: 2px solid gray !important;
    }

    .player-icon-wrapper {
        width: 100px;
        height: 100px;
        padding-left: 5px;
    }

    .player-icon-wrapper img {
        width: 40px;
        height: 40px;
    }

    .player-icon-wrapper:hover {
        width: 105px;
        height: 105px;
    }

    .player-icon-wrapper:hover img {
        width: 48px;
        height: 48px;
    }

    .tab-button-spec {
        color: gray;
        border-bottom: none;
        padding-bottom: 20px;
        position: relative;
    }

    .tab-button-spec::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background-color: black;
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: center;
    }

    .tab-button-spec.active {
        color: black;
    }

    .active::before {
        transform: scaleX(1);
    }

    .tab-button-spec:hover {
        color: black;
    }

    @media (max-width: 480px) {
        .player-icon-wrapper {
            width: 50px;
            height: 50px;
            padding-left: 5px;
        }

        .player-icon-wrapper img {
            width: 20px;
            height: 20px;
        }

        .player-icon-wrapper:hover {
            width: 60px;
            height: 60px;
        }
    }
</style>

<!-- Feature -->
<?php require_once "components/product/feature.php"; ?>
<!-- Change Car Color -->
<?php require_once "components/product/car-color.php"; ?>
<!-- Doenload Brochure -->
<?php require_once "components/product/brochure.php"; ?>
<!-- Technical Specification -->
<?php require_once "components/product/technical-specification.php"; ?>
<!-- List Specification -->

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
    <div class="w-full mx-auto px-2 sm:px-5 xl:max-w-screen-lg 2xl:max-w-screen-xl">
        <div id="spec-title" class="montserrat w-full text-2xl text-specTitle text-center font-bold mb-3 uppercase sm:text-4xl sm:mb-7 pt-10 lg:mb-10 lg:pt-14">SPECIFICATION </div>
        <div class="flex items-center justify-center my-5 sm:my-10 px-5 sm:px-2 lg:px-0 lg:pt-10">
            <div id="model-tab-container" class="bg-skewTab pt-4 px-6 w-full flex justify-around items-center -skew-x-20" style="background: #D9D9D999;">
                <button id="model-tab-left" class="montserrat tab-button-spec font-bold relative active hover:text-black focus:outline-none transition-all duration-300">
                    DOLPHIN PREMIUM
                </button>
                <div class="w-px h-8 bg-gray-400"></div>
                <button id="model-tab-right" class="montserrat tab-button-spec font-bold relative hover:text-black focus:outline-none transition-all duration-300">
                    DOLPHIN DYNAMICS
                </button>
            </div>
        </div>
        <div class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl">DIMENSI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Panjang ( mm )</div>
                        <div id="length" class="font-bold text-sm lg:text-base">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Lebar ( mm )</div>
                        <div id="width" class="font-bold text-sm lg:text-base">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Tinggi ( mm )</div>
                        <div id="height" class="font-bold text-sm lg:text-base">4290</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Ground Clearance ( mm )</div>
                        <div id="ground-clearance" class="font-bold text-sm lg:text-base">4290</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Whellbase ( mm )</div>
                        <div id="wheelbase" class="font-bold text-sm lg:text-base">4290</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap">ENGINE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Type</div>
                        <div id="engine_type" class="font-bold text-sm lg:text-base">ELectric</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Max Power ( PS )</div>
                        <div id="max-power" class="font-bold text-sm lg:text-base">150</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Max Troque ( N.m )</div>
                        <div id="max-torque" class="font-bold text-sm lg:text-base">310</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap">TRANSMISI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div class="w-full ">
                    <div class="mb-1 text-sm lg:text-base">Transmission</div>
                    <div id="transmision" class="font-bold text-sm lg:text-base">A/T</div>
                </div>
            </div>
        </div>
        <div id="suspension" class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap uppercase">SUSPENSI</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="col-span-1 col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Front Suspension</div>
                        <div id="front-suspension" class="font-bold text-sm lg:text-base">Macpherseon Strut</div>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Rear Suspension</div>
                        <div id="rear-suspension" class="font-bold text-sm lg:text-base">Multi_link</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="whell-size" class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap uppercase">WHEEL SIZE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="wheelsize" class="w-full ">
                    <div class="mb-1 text-sm lg:text-base">Wheelsize</div>
                    <div id="wheel-size" class="font-bold text-sm lg:text-base">215/60 R17</div>
                </div>
            </div>
        </div>
        <div id="capacity" class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap uppercase">KAPASITAS</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="sm:mb-10 lg:mb-14 col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Passenger Capacity ( Person )</div>
                        <div id="passenger-capacity" class="font-bold text-sm lg:text-base">5-seaters</div>
                    </div>
                    <div class="sm:mb-10 lg:mb-14 col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Battery Capacity ( Kwh )</div>
                        <div id="battery-capacity" class="font-bold text-sm lg:text-base">60,48</div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Range ( Km )</div>
                        <div id="range" class="font-bold text-sm lg:text-base">490</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="brake-style" class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap uppercase">BRAKE STYLE</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="dimension" class="w-full grid grid-cols-3">
                    <div class="col-span-2">
                        <div class="mb-1 text-sm lg:text-base">Front Brake</div>
                        <div id="front-brake" class="font-bold text-sm lg:text-base">Ventilated Disc</div>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-1 text-sm lg:text-base">Rear Brake</div>
                        <div id="rear-brake" class="font-bold text-sm lg:text-base">Disc</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature" class="pb-7">
            <div class="w-full flex justify-start items-center pl-7 mb-5 sm:pl-10">
                <div class="w-4 h-4 -skew-x-12 bg-product">
                </div>
                <div class="text-product montserrat italic text-lg font-bold ml-2 sm:text-xl text-nowrap uppercase">FITUR</div>
                <div class="w-full h-1 border-b border-white ml-3"></div>
            </div>
            <div class="w-full block rounded-xl p-7 mb-1 sm:mb-5 text-white lg:mb-10 lg:p-14 open-sans" style="background: rgba(0, 0, 0, 0.5);">
                <div id="feature" class="w-full">
                    <div class="mb-1 text-sm lg:text-base">Fitur Keselamatan</div>
                    <div id="other-feature" class="font-bold text-sm lg:text-base">ADAS, Airbag, Camera 360, Ultrasonic Parking Sensor</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="product-detail-video" class="product-detail-video w-full lg:-mb-16" onclick="handleCLick()">
    <div class="relative">
        <img id="bg-video-wrapper" src="images/product/bg_video.png" alt="BYD HAKA AUTO" class="shadow-lg" data-video-url="https://www.youtube.com/embed/JyGROfuXggk">
        <div class="absolute inset-0 flex justify-center items-center" style="background: rgba(0, 0, 0, 0.46);">
            <div class="player-icon-wrapper rounded-full border-2 flex justify-center items-center" style="background: rgba(0, 0, 0, 0.5); border: 3px solid rgba(217, 217, 217, 1)">
                <img src="images/player-icon.svg" alt="player icon" />
            </div>
        </div>
    </div>
</div>

<!-- Popup Video Player -->
<div id="popup" class="popup-overlay">
    <div class="popup-content">
        <!-- <span id="popup-close" class="popup-close">&times;</span> -->
        <iframe id="video-frame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const queryString = window.location.search; // Get the query string from the URL
        const searchParams = new URLSearchParams(queryString);
        const model = searchParams.get('model');
        const modelParams = decodeParams(model) ?? ""
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
        document.getElementById('spec-title').innerHTML = `SPECIFICATIONS ${modelParams}`
        document.getElementById('product-detail-title').innerHTML = `TYPE ${modelParams}`

        const selectLocation = document.querySelector('select')

        selectLocation.addEventListener('change', (e) => {
            selectLocation.value = e.target.value

            setTimeout(() => {
                getData()
            }, 100);
        })

        function getFirstFourItems(arr) {
            return arr.slice(0, 4);
        }

        const getProductModel = async () => {
            try {
                const response = await fetch(`${BASE_URL}/product-model?model=${modelParams.toUpperCase()}`);
                const data = await response.json();

                if (data?.banner) {
                    document.getElementById('product-banner').src = data?.banner ?? ""
                    document.getElementById('product-banner').alt = data?.image_description ?? getImageFileName(data?.banner) ?? ""
                    document.getElementById('modal-download-brochure').dataset.catalog = data.document_specification
                }
            } catch (error) {
                console.log(error);
            }
        }

        const getData = async () => {
            try {

                const selectedValue = document.getElementById('countries')

                const response = await fetch(`${BASE_URL}/product?product_model=${modelParams}${selectedValue.value ? "&product_location_id=" + selectedValue.value : ""}`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const thumbnileModel = document.getElementById('thumbnile-model')
                    const modelTabContainer = document.getElementById('model-tab-container')
                    const length = document.getElementById('length')
                    const width = document.getElementById('width')
                    const height = document.getElementById('height')
                    const groundClearance = document.getElementById('ground-clearance')
                    const wheelbase = document.getElementById('wheelbase')
                    const engine_type = document.getElementById('engine_type')
                    const maxPower = document.getElementById('max-power')
                    const maxTorque = document.getElementById('max-torque')
                    const transmision = document.getElementById('transmision')
                    const frontSuspension = document.getElementById('front-suspension')
                    const rearSuspension = document.getElementById('rear-suspension')
                    const wheelSize = document.getElementById('wheel-size')
                    const passengerCapacity = document.getElementById('passenger-capacity')
                    const batteryCapacity = document.getElementById('battery-capacity')
                    const range = document.getElementById('range')
                    const frontBrake = document.getElementById('front-brake')
                    const rearBrake = document.getElementById('rear-brake')
                    const otherFeature = document.getElementById('other-feature')

                    const SpecElement = [thumbnileModel, modelTabContainer, length, width, height, groundClearance, wheelbase, engine_type, maxPower, maxTorque, transmision,
                        frontSuspension, rearSuspension, wheelSize, passengerCapacity,
                        batteryCapacity, range, frontBrake, rearBrake, otherFeature
                    ]
                    SpecElement.forEach(el => el.innerHTML = '')

                    data.data.forEach((product, index) => {
                        const backgroundVideo = document.getElementById('bg-video-wrapper')
                        const containerVideo = document.getElementById('product-detail-video')

                        containerVideo.dataset[`${product.product_name.split(" ").join('').toLowerCase()}`] = product.link

                        if (index === 0) {
                            backgroundVideo.setAttribute('data-video-url', product.link)
                        }


                        const select = document.querySelector('select')
                        let price = 0

                        if (product?.product_price?.length > 0) {
                            price = product?.product_price?.find(e => e.product_location_id === select.value)?.product_price ?? 0
                        }

                        const thumbnile = document.createElement('div')
                        thumbnile.classList.add('bg-white', 'overflow-hidden', 'relative')
                        thumbnile.innerHTML = `<img src="${product.images}" alt="${product?.image_description ?? getImageFileName(product?.images) ?? ""}" class="w-full h-auto object-cover obect-center">
                                <div class="montserrat italic text-title text-sm text-center font-extrabold uppercase">${product.product_name}</div>
                                <div class="open-sans italic text-sm text-gray-400 text-center">Price : <span class="text-title font-semibold">${"Rp " + formatRupiah(price) }</span></div>`
                        thumbnileModel.appendChild(thumbnile)

                        const newButtonTab = document.createElement('button')
                        newButtonTab.classList.add('tab-button-spec', 'font-bold', 'relative', index === 0 && 'active', 'hover:text-black', 'focus:outline-none', 'transition-all', 'duration-300', 'text-xs', 'sm:text-lg', 'transform', 'skew-x-20')
                        newButtonTab.innerHTML = product.product_name

                        Object.entries({
                            length: product.length,
                            width: product.width,
                            height: product.height,
                            ground_clearance: product.ground_clearance,
                            wheelbase: product.wheelbase,
                            engine_type: product.engine_type,
                            max_power: product.max_power,
                            max_torque: product.max_torque,
                            transmision: product.transmision,
                            front_suspension: product.front_suspension,
                            rear_suspension: product.rear_suspension,
                            wheel_size: product.wheel_size,
                            passenger_capacity: product.passenger_capacity,
                            battery_capacity: product.battery_capacity,
                            range: product.range,
                            frontBrake: product.front_brake,
                            rearBrake: product.rear_brake,
                            other_feature: product.other_feature
                        }).forEach(([key, value]) => {
                            newButtonTab.dataset[key] = value
                        });

                        length.innerHTML = product.length
                        width.innerHTML = product.width
                        height.innerHTML = product.height
                        groundClearance.innerHTML = product.ground_clearance
                        wheelbase.innerHTML = product.wheelbase
                        engine_type.innerHTML = product.engine_type
                        maxPower.innerHTML = product.max_power
                        maxTorque.innerHTML = product.max_torque
                        transmision.innerHTML = product.transmision
                        frontSuspension.innerHTML = product.front_suspension
                        rearSuspension.innerHTML = product.rear_suspension
                        wheelSize.innerHTML = product.wheel_size
                        passengerCapacity.innerHTML = product.passenger_capacity
                        batteryCapacity.innerHTML = product.battery_capacity
                        range.innerHTML = product.range
                        frontBrake.innerHTML = product.front_brake
                        rearBrake.innerHTML = product.rear_brake
                        otherFeature.innerHTML = product.other_feature


                        if (index === 0) {
                            newButtonTab.id = 'model-tab-left'
                        } else {
                            newButtonTab.id = 'model-tab-right'
                        }

                        newButtonTab.addEventListener('click', function() {
                            const specTabs = document.querySelectorAll('.tab-button-spec')
                            specTabs.forEach(b => b.classList.remove('active'));
                            this.classList.add('active');

                            backgroundVideo.setAttribute('data-video-url', containerVideo.dataset[`${product.product_name.split(" ").join('').toLowerCase()}`])

                            length.innerHTML = this.dataset.length
                            width.innerHTML = this.dataset.width
                            height.innerHTML = this.dataset.height
                            groundClearance.innerHTML = this.dataset.ground_clearance
                            wheelbase.innerHTML = this.dataset.wheelbase
                            engine_type.innerHTML = this.dataset.engine_type
                            maxPower.innerHTML = this.dataset.max_power
                            maxTorque.innerHTML = this.dataset.max_torque
                            transmision.innerHTML = this.dataset.transmision
                            frontSuspension.innerHTML = this.dataset.front_suspension
                            rearSuspension.innerHTML = this.dataset.rear_suspension
                            wheelSize.innerHTML = this.dataset.wheel_size
                            passengerCapacity.innerHTML = this.dataset.passenger_capacity
                            batteryCapacity.innerHTML = this.dataset.battery_capacity
                            range.innerHTML = this.dataset.range
                            frontBrake.innerHTML = this.dataset.front_brake
                            rearBrake.innerHTML = this.dataset.rear_brake
                            otherFeature.innerHTML = this.dataset.other_feature
                        })
                        modelTabContainer.appendChild(newButtonTab)
                        if (index < (data.data.length - 1)) {
                            let slesh = document.createElement('div')
                            slesh.innerHTML = `<div class="w-px h-10 bg-gray-700 mb-2"></div>`
                            modelTabContainer.appendChild(slesh)
                        }

                    });
                }
            } catch (error) {
                console.log(error);
            }
        };

        const getLocation = async (on) => {
            try {
                const response = await fetch(`${BASE_URL}/product-location`);
                const data = await response.json();
                if (data?.data?.length > 0) {
                    const select = document.querySelector('select')
                    const sortData = data.data.sort((a, b) => a.location.localeCompare(b.location))
                    sortData.forEach((location, i) => {
                        if (i === 0) {
                            select.value = location.id
                        }
                        const option = document.createElement('option')
                        option.value = location?.id
                        option.classList.add('open-sans', 'italic', 'text-xxs')
                        option.innerHTML = location?.location
                        select.append(option)
                    });
                    getData()
                }
            } catch (error) {
                console.log(error);
            }
        };

        getLocation()

        if (model) {
            getData()
            getProductModel()
        }
    });
</script>


<script>
    const maintenanceWrapper = document.querySelector('.product-detail-video');

    function handleCLick() {
        const videoUrl = document.getElementById('bg-video-wrapper').getAttribute('data-video-url');
        document.getElementById('video-frame').src = videoUrl;
        document.getElementById('popup').style.display = 'flex';
    }

    document.getElementById('popup').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.getElementById('video-frame').src = '';
        }
    });
</script>