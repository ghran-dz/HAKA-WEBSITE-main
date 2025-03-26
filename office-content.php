<style>
    .active-tab {
        color: black;
        border-bottom: 2px solid black !important;
    }

    .inactive-tab {
        color: gray;
        border-bottom: none;
    }

    .tab-button-office {
        color: gray;
        border-bottom: none;
        padding-bottom: 20px;
        position: relative;
    }

    .tab-button-office::before {
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

    .active::before {
        transform: scaleX(1);
    }

    .tab-button-office:hover {
        color: black;
    }
</style>
<div class="w-full">
    <div class="w-full mb-5 sm:mb-10 lg:px-8 lg:mb-20 lg:pt-28">
        <div class="w-full relative">
            <img id="office-banner" src="" alt="banner address" class="w-full h-auto lg:rounded-2xl" />
            <div class="w-full h-1/2 absolute top-50 bottom-0 right-0 flex flex-col justify-end items-end pr-4 pb-2 sm:pr-7 sm:pb-10 lg:rounded-bl-2xl lg:rounded-br-2xl" style="background: linear-gradient(0deg, #000000 -39.81%, rgba(0, 0, 0, 0) 93.89%);">
                <div class="w-40 sm:w-80">
                    <div id="office-branch_name" class="montserrat italic text-sm text-white text-center font-bold mb-1 uppercase sm:text-center sm:text-3xl"></div>
                    <div id="office-branch_address" class="open-sans text-[8px] text-white text-center sm:text-center sm:text-xs"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full px-5 mx-auto lg:max-w-6xl lg:px-10 2xl:max-w-screen-xl">
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 sm:gap-x-5 xl:gap-x-20">
            <div class="w-full pt-5 sm:pt-2 order-2 sm:order-1">
                <div id="office-top-title"></div>
                <div class="lg:ml-6">
                    <div id="office-title" class="montserrat text-title text-lg mb-2 font-semibold lg:mb-10 lg:text-3xl"></div>
                    <div id="office-description" class="open-sans text-justify sm:text-xs lg:text-sm">
                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </P>
                    </div>
                </div>
            </div>
            <img id="office-thumbnile" src="" class="w-full h-auto" />
        </div>
    </div>
    <div id="office-tabs-containes" class="flex items-center justify-center px-5 my-10 mx-auto lg:px-14 lg:my-20 lg:max-w-6xl 2xl:max-w-screen-xl">
        <div class="bg-gray-200 pt-4 px-6 w-full flex justify-around items-center -skew-x-20" style="background: #D9D9D999;">
            <button id="facility-tab" class="montserrat italic tab-button-office text-xxs font-bold relative active hover:text-black focus:outline-none transition-all duration-300 sm:text-base">
            </button>
            <div class="w-px h-8 bg-gray-400"></div>
            <button id="gallery-tab" class="montserrat italic tab-button-office text-xxs font-bold relative hover:text-black focus:outline-none transition-all duration-300 sm:text-base">
            </button>
        </div>
    </div>

    <div class="w-full mx-auto sm:px-5 mb-10 lg:mb-20 lg:px-10 lg:max-w-6xl 2xl:max-w-screen-xl">
        <div id="facility-content" class="w-full grid grid-cols-1 sm:gap-3 sm:grid-cols-2 lg:grid-cols-3 ">
        </div>
        <div id="gallery-content" class="w-full grid grid-cols-1 sm:gap-3 sm:grid-cols-2 lg:grid-cols-3">
        </div>
    </div>
    <div class="w-full max-w-5xl mx-auto mb-20 sm:rounded-2xl lg:mb-40 lg:px-10 lg:max-w-6xl 2xl:max-w-screen-xl">
        <iframe id="office-maps" class="w-full sm:rounded-2xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1416631593747!2d106.91049497316978!3d-6.375706662362139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69930008f19b3f%3A0x4997add21746b7ce!2sBYD%20Haka%20Auto%20Cibubur!5e0!3m2!1sid!2sid!4v1726889528674!5m2!1sid!2sid" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<Script>
    document.getElementById('office-top-title').innerHTML = generateTitle('HAKA AUTO', 'GENERAL INFORMATION')
    const queryString = window.location.search; // Get the query string from the URL
    const searchParams = new URLSearchParams(queryString);
    const branchName = searchParams.get('branch');
    const branchParams = decodeParams(branchName) ?? "";
    const facilityTab = document.getElementById("facility-tab");
    const galleryTab = document.getElementById("gallery-tab");
    const facilityContent = document.getElementById("facility-content");
    const galleryContent = document.getElementById("gallery-content");

    const getData = async () => {
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

        try {
            let response = await fetch(`${BASE_URL}/branch?branch_name=${branchParams}`)
            const data = await response.json();

            if (data?.id) {
                document.getElementById('office-banner').src = data?.images_1
                document.getElementById('office-banner').alt = data?.image_description_1 ?? getImageFileName(data?.images_1) ?? ""
                document.getElementById('office-branch_name').innerHTML = data?.branch_name
                document.getElementById('office-branch_address').innerHTML = data?.branch_address
                document.getElementById('office-thumbnile').src = data?.images_2
                document.getElementById('office-thumbnile').alt = data?.image_description_2 ?? getImageFileName(data?.images_2) ?? ""
                document.getElementById('office-title').innerHTML = data?.title
                document.getElementById('office-description').innerHTML = ""
                document.getElementById('office-description').innerHTML = data?.description
                document.getElementById('office-maps').src = data?.url_maps

                const tabsContainer = document.getElementById('office-tabs-containes')
                facilityContent.dataset.facilities = data.facility
                galleryContent.dataset.galleries = data.gallery
                facilityContent.innerHTML = ''
                galleryContent.innerHTML = ''

                if (data.facility?.length > 0) {
                    data.facility.forEach((item, index) => {
                        const box = document.createElement('div')
                        box.classList.add('w-full', 'relative')
                        box.innerHTML = `
                                <img src="${BASE_URL.replace('/api/v1','')}/${item?.images}" alt="${item?.image_description ?? getImageFileName(`${BASE_URL.replace('/api/v1','')}/${item?.images}`) ?? ""}" class="w-full h-auto" />
                                <div class="w-full h-auto absolute inset-0 flex flex-col justify-end items-start px-5 pb-3" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 47.37%, #000000 121.26%);">
                                    <div class="montserrat italic text-sm text-white text-left font-bold uppercase">${item.title}</div>
                                    <div class="open-sans italic text-xxs text-white text-left font-light">${item.description}</div>
                                </div>`
                        facilityContent.appendChild(box)
                    });
                }

                if (data.gallery?.length > 0) {

                    data.gallery.forEach((element, index) => {
                        const box = document.createElement('div')
                        box.classList.add('w-full', 'relative')
                        box.innerHTML = `<img src="${BASE_URL.replace('/api/v1','')}/${element?.images}" alt="${item?.image_description ?? getImageFileName(`${BASE_URL.replace('/api/v1','')}/${element?.images}`) ?? ""}" class="w-full h-auto object-cover object-center sm:h-52 lg:h-52" />`
                        galleryContent.appendChild(box)

                    });
                }
            }

        } catch (error) {
            console.log(error);

        }
    }
    if (branchName) {
        facilityTab.innerHTML = ""
        facilityTab.innerHTML = `FACILITY ${branchParams.toUpperCase()}`
        galleryTab.innerHTML = ""
        galleryTab.innerHTML = `GALLERY ${branchParams.toUpperCase()}`

        getData()
    }

    facilityTab.classList.add("active");
    galleryContent.classList.add("hidden");

    const tabs = document.querySelectorAll('.tab-button-office');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));

            tab.classList.add('active');

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