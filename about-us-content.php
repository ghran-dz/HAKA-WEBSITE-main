<div id="about-us-banner-container" class="w-full">
    <img id="about-us-banner" src="" alt="Full Width Image" class="w-full h-auto">
</div>


<div class="max-w-6xl mx-auto lg:px-8 xl:px-0 xl:max-w-7xl">
    <div class="w-full pt-10 px-5 pb-10 sm:py-20 xl:pt-40">
        <div class="grid grid-cols-1 md:grid-cols-2 sm:p-5 sm:gap-10 lg:gap-32">
            <div class="order-2 sm:order-first">
                <div id="about-us-title"></div>
                <div class="lg:pl-7">
                    <div id="info-title" class="montserrat w-full text-lg mb-2 lg:w-9/10 lg:text-3xl lg:mb-10"></div>
                    <div id="info-desc" class="open-sans text-justify mb-2 lg:mb-5"></div>
                    <div class="border-b border-black"></div>
                    <div class="flex items-center mt-10">
                        <div class="w-1/2 flex justify-start items-start gap-x-4">
                            <img src="images/about-us/icon1.png" alt="product sold" style="width: 46px;" />
                            <div>
                                <div id="product-sold" class="text-4xl font-medium text-title leading-none" style="line-height:40px">473</div>
                                <div class="text-md text-secondary">product sold</div>
                            </div>
                        </div>
                        <a href="find-us" class="w-1/2">
                            <div class="flex justify-start items-start gap-x-4">
                                <img src="images/about-us/icon2.png" alt="brand office" style="width: 46px;" />
                                <div>
                                    <div id="branch-office" class="text-4xl font-medium text-title leading-none" style=" line-height:40px">05</div>
                                    <div class="text-md text-secondary">Brand Office</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <img id="about-us-banner-general-info" src="" alt="haka auto image" class="mb-5 sm:mb-0" />
        </div>
    </div>
</div>

<?php require_once "components/about-us/vision-mission.php"; ?>

<?php require_once "components/about-us/founder.php"; ?>

<?php require_once "components/about-us/gallery.php"; ?>

<?php require_once "components/about-us/about-byd.php"; ?>

<div class="w-full py-7 sm:py-12 lg:py-20">
    <img src="images/about-us/haka_x_byd.png" alt="Haka Auto X BYD" class="w-full h-auto" />
</div>

<?php require_once "components/about-us/diversification.php"; ?>

<?php require_once "components/about-us/technologies.php"; ?>

<div id="about-us-globalization-container" class="w-full relative">
    <img id="about-us-banner-globalization" src="images/about-us/img_a.png" alt="Image Globalization" class="w-full h-auto object-cover object-center" />
    <div class="w-full absolute top-0 left-0 bottom-0 pt-10 sm:pt-20 lg:pt-32">
        <p class="open-sans italic w-full text-xxs text-center text-white italic sm:text-xs" style="letter-spacing:5px">400+ cities70+ countries 6 continents</p>
    </div>
</div>

<div id="about-us-banner-auto" class="relative w-full h-0 pb-[56.25%] p-5 aspec-auto bg-cover bg-center sm:px-0" style="">
</div>

<?php require_once "components/about-us/blade-battery.php"; ?>

<?php require_once "components/about-us/e-platform-3.php"; ?>

<?php require_once "components/about-us/byd-entertainment-system.php"; ?>

<?php require_once "components/about-us/cool-earth.php"; ?>

<?php require_once "components/booking-banner.php"; ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('about-us-title').innerHTML = generateTitle('HAKA AUTO', 'GENERAL INFORMATION')
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

        const getData = async () => {
            try {
                const response = await fetch(`${BASE_URL}/about-data?page=1&limit=100`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const dataTopBanner = data?.data?.filter(e => e.type === 'banner')
                    const dataAuto = data?.data?.filter(e => e.type === 'auto')
                    const dataCoolTheEart = data?.data?.filter(e => e.type === 'cool-the-earth')
                    const technologies = data?.data?.filter(e => e.type === 'technology')
                    const globalization = data?.data?.filter(e => e.type === 'globalization')
                    const entartainment = data?.data?.filter(e => e.type === 'byd-entertainment')

                    if (dataTopBanner?.length > 0) {
                        document.getElementById('about-us-banner').src = dataTopBanner[0]?.url_path ?? ""
                        document.getElementById('about-us-banner').alt = dataTopBanner[0]?.image_description ?? getImageFileName(dataTopBanner[0]?.url_path) ?? ""
                    } else {
                        document.getElementById('about-us-banner-container').classList.add('hidden')
                    }
                    if (dataAuto?.length > 0) {
                        document.getElementById('about-us-banner-auto').style.backgroundImage = `url(${dataAuto[0]?.url_path ?? ""})`
                    } else {
                        document.getElementById('about-us-banner-auto').classList.add('hidden')
                    }
                    if (globalization?.length > 0) {
                        document.getElementById('about-us-banner-globalization').src = globalization[0]?.url_path ?? ""
                        document.getElementById('about-us-banner-globalization').alt = globalization[0]?.image_description ?? getImageFileName(globalization[0]?.url_path) ?? ""
                    } else {
                        document.getElementById('about-us-globalization-container').classList.add('hidden')
                    }
                    if (dataCoolTheEart?.length > 0) {
                        document.getElementById('about-us-cool-earth').src = dataCoolTheEart[0]?.url_path ?? ""
                        document.getElementById('about-us-cool-earth').alt = dataCoolTheEart[0]?.image_description ?? getImageFileName(dataCoolTheEart[0]?.url_path) ?? ""
                    } else {
                        document.getElementById('about-us-cool-earth-container').classList.add('hidden')
                    }
                    if (entartainment?.length > 0) {
                        document.getElementById('about-us-entartainment-image').src = entartainment[0]?.url_path ?? ""
                        document.getElementById('about-us-entartainment-image').alt = entartainment[0]?.image_description ?? getImageFileName(entartainment[0]?.url_path) ?? ""
                    } else {
                        document.getElementById('about-us-entartainment-container').classList.add('hidden')
                    }

                }
            } catch (error) {
                console.log(error);
            }
            try {
                const response = await fetch(`${BASE_URL}/about-information`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    document.getElementById('about-us-banner-general-info').src = data.data[0]?.images ?? ""
                    document.getElementById('about-us-banner-general-info').alt = data.data[0]?.image_description ?? getImageFileName(data.data[0]?.images) ?? ""
                    document.getElementById('info-title').innerHTML = data.data[0].title
                    document.getElementById('info-desc').innerHTML = data.data[0].general_information
                    document.getElementById('product-sold').innerHTML = data.data[0]?.product_sold?.toString()?.length === 1 ? `0${data.data[0]?.product_sold}` : data.data[0]?.product_sold
                    document.getElementById('branch-office').innerHTML = data.data[0]?.branch_office?.toString()?.length === 1 ? `0${data.data[0]?.branch_office}` : data.data[0]?.branch_office
                }
            } catch (error) {
                console.log(error);
            }
        };
        const getDataBladBattery = async () => {
            try {
                const response = await fetch(`${BASE_URL}/about-blade-battery`);
                const data = await response.json();


                if (data?.data?.length > 0) {
                    document.getElementById('blad-battery-image').src = data?.data[0]?.images ?? ""
                    document.getElementById('blad-battery-image').alt = data?.data[0]?.image_description ?? getImageFileName(data?.data[0].images) ?? ""
                    document.getElementById('blad-battery-title').innerHTML = data?.data[0].title
                    if (data?.data[0]?.detail?.length > 0) {
                        const container = document.getElementById('blad-battery-detail')
                        container.innerHTML = ''
                        data?.data[0]?.detail.forEach((eDetail, index) => {
                            const box = document.createElement('div')
                            box.innerHTML = `<div class="montserrat text-xs text-center font-bold uppercase mb-1 sm:text-sm lg:mb-2 lg:text-xl">${eDetail.title}</div>
                        <div class="open-sans italic text-xxs text-center text-gray-700 font-normal italic mb-2 mx-auto sm:text-xs lg:text-base xl:max-w-screen-lg">${eDetail.description}</div>`
                            container.appendChild(box)
                        });
                    }
                }
            } catch (error) {
                console.log(error);
            }
        }

        const getDataEPlatform = async () => {
            try {
                const response = await fetch(`${BASE_URL}/about-e-platform`);
                const data = await response.json();


                if (data?.data?.length > 0) {
                    document.getElementById('e-platform-image').src = data?.data[0]?.images ?? ""
                    document.getElementById('e-platform-image').alt = data?.data[0]?.image_description ?? getImageFileName(data?.data[0].images) ?? ""
                    document.getElementById('e-platform-title').innerHTML = data?.data[0].title
                    if (data?.data[0]?.detail?.length > 0) {
                        const container = document.getElementById('e-platform-detail')
                        container.innerHTML = ''
                        data?.data[0]?.detail.forEach((eDetail, index) => {
                            const box = document.createElement('div')
                            box.innerHTML = `<div class="montserrat text-sm text-white font-semibold uppercase mb-1 lg:text-xl">${eDetail.title}</div>
                            <div class="open-sans w-full text-xs text-gray-300 text-justify font-extralight italic mb-2 lg:text-sm">${eDetail.description}</div>`
                            container.appendChild(box)
                        });
                    }
                }
            } catch (error) {
                console.log(error);
            }
        }

        getDataEPlatform()
        getDataBladBattery()
        getData()

    })
</script>