<style>
    .banner-product {
        opacity: 1;
        transition: opacity 0.5s ease;
    }
</style>
<?php require_once "components/product/banner.php"; ?>

<div class="w-full p-2 pt-10 sm:px-5 sm:py-14">
    <div class="montserrat w-full text-lg text-title text-stretched text-center font-bold mb-2 uppercase sm:text-4xl sm:mb-7 lg:mb-2">ALL PRODUCT BYD</div>
    <div class="open-sans text-xxs text-title text-center uppercase italic tracking-[.70em] font-bold">elevate mobility</div>
</div>

<style>
    .model-tabs-container li button {
        border-bottom: none;
    }

    .model-tabs-container li button.active {
        border-bottom: 2px solid black !important;
        color: black !important;
    }
</style>

<div class="w-full px-5 lg:px-0 lg:max-w-4xl lg:mx-auto">
    <div class="w-full flex space-between flex-wrap items-center mb-10 gap-2 sm:flex-nowrap lg:mb-20 lg:gap-4 lg:pl-14">
        <div class="w-full sm:w-10/12 mb-4 sm:mb-10 border-b-2 border-black dark:border-gray-700">
            <ul class="model-tabs-container flex flex-wrap text-sm font-medium text-center sm:gap-x-4" id="vehicle-model-tab" data-tabs-toggle="#vehicle-model-tab-content" role="tablist">
                <li id="all-vehicle-model" class="tab-1" role="presentation">
                    <button class="open-sans tab text-xxs active inline-block p-2 border-b-2 rounded-t-lg text-gray-500 italic hover:text-black hover:border-black dark:hover:text-gray-300 sm:text-sm lg:text-base" id="vehicle-tab" data-category-id="all" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All Cars</button>
                </li>
            </ul>
        </div>
        <form class="w-full sm:w-2/12 max-w-sm mx-auto">
            <select id="location" class="open-sans bg-white border border-black text-gray-900 text-xs sm:text-sm italic rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background-color: #FFFFFF;">
            </select>
        </form>
    </div>
    <div id="product-thumbnile-container" class="grid grid-cols-1 md:grid-cols-2 mb-10 gap-20 sm:24 lg:mb-32"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const defaultTab = document.getElementById('all-vehicle-model')
        const buttonDefaultTab = defaultTab.querySelector('button')
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')


        buttonDefaultTab.addEventListener('click', () => {
            const activeButton = document.querySelector('button.active');
            if (activeButton) {
                activeButton.classList.remove('active');
            }

            buttonDefaultTab.classList.add('active');
            setTimeout(() => {
                fetchThumbnile();
            }, 100);
        })

        const selectLocation = document.querySelector('select')

        selectLocation.addEventListener('change', (e) => {
            selectLocation.value = e.target.value

            setTimeout(() => {
                fetchThumbnile()
            }, 100);
        })

        const fetchThumbnile = async () => {
            try {
                const activeTab = document.querySelector("button.active");
                const selectedValue = document.getElementById('location')
                const idSelectedTab = activeTab.getAttribute('data-category-id')
                let filters = idSelectedTab !== 'all' ? "category_id=" + idSelectedTab : ""

                if (selectedValue.value) {
                    filters = filters ? filters + "&" : filters
                    filters = filters + "location=" + selectedValue.value
                }
                const response = await fetch(`${BASE_URL}/product-model?page=1&limit=100&sort_by=created_at&sort_order=asc&${filters}`);
                const data = await response.json();

                const thumbnileContainer = document.getElementById("product-thumbnile-container")
                thumbnileContainer.innerHTML = ''
                if (data?.data?.length > 0) {
                    if (data?.data?.length > 0) {
                        data.data.forEach((data, i) => {
                            const thumbnile = document.createElement('a')
                            thumbnile.href = `product-detail?model=${encodeParams(data.model)}`
                            thumbnile.innerHTML = `<div class="bg-white overflow-hidden relative flex flex-col">
                                                    <img src="${data?.thumbnail}" alt="${data?.image_description ??  getImageFileName(data?.thumbnail) ?? ""}" class="w-full h-auto">
                                                    <img src="${BASE_URL.replace('/api/v1','')}/${data.logo}" class="object-contain object-center h-7 mb-1" alt="${data.model}"/>
                                                    <div class="open-sans italic text-sm text-gray-400 text-center">Price : <span class="text-black font-semibold sm:text-base">${formatRupiah(data.price_start) + " - " + formatRupiah(data.price_end) }</span></div>
                                                </div>`;
                            thumbnileContainer.appendChild(thumbnile)
                        });
                    }
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
                        const option = document.createElement('option')
                        option.value = location?.id
                        option.classList.add('open-sans', 'italic', 'text-xxs')
                        option.innerHTML = location?.location
                        select.append(option)
                    });
                    fetchThumbnile()
                }
            } catch (error) {
                console.log(error);
            }
        };
        const getTabs = async (on) => {
            try {
                const response = await fetch(`${BASE_URL}/product-category`);
                const data = await response.json();
                if (data?.data?.length > 0) {
                    const vehicleContainer = document.getElementById('vehicle-model-tab')
                    data.data.forEach((item) => {
                        const tabLi = document.createElement('li');
                        tabLi.innerHTML = `
                            <button class="open-sans vehicle-tab text-xxs inline-block p-2 border-b-2 rounded-t-lg text-gray-500 italic hover:text-black hover:border-black dark:hover:text-gray-300 sm:text-base" 
                                    id="${item?.category?.toLowerCase() ?? ""}" 
                                    data-category-id="${item?.id}" 
                                    data-tabs-target="#${item?.category?.toLowerCase() ?? ""}" 
                                    type="button" role="tab" 
                                    aria-controls="${item?.category?.toLowerCase() ?? ""}" 
                                    aria-selected="false">
                                ${item?.category}
                            </button>`;

                        const button = tabLi.querySelector('button');
                        button.addEventListener('click', () => {
                            const activeButton = document.querySelector('button.active');
                            if (activeButton) {
                                activeButton.classList.remove('active');
                            }

                            button.classList.add('active');

                            setTimeout(() => {
                                fetchThumbnile();
                            }, 100);
                        });

                        vehicleContainer.appendChild(tabLi);

                    });
                }
            } catch (error) {
                console.log(error);
            }
        };
        getTabs()
        getLocation()
        fetchThumbnile()
    })
</script>


<?php require_once "components/coverflow.php"; ?>
<?php require_once "components/booking-banner.php"; ?>