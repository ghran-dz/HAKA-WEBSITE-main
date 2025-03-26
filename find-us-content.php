<div id="find-us-map-container" class="w-full relative">
    <img id="find-us-banner" src="images/find-us/indonesia.png" alt="BYD HAKA Location" class="w-full object-cover object-center h-auto pt-20 mb-10 px-5 pb-0 sm:pt-24 sm:px-5 sm:pb-0 lg:px-5 lg:mb-28 xl:px-9" />
</div>

<?php require_once "components/booking-banner.php"; ?>

<style>
    .map-contain:hover .branch-name {
        display: block !important;
    }
</style>

<Script>
    const getData = async () => {
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
        const screenWidth = window.innerWidth
        const mobile = screenWidth < 768
        const tab = screenWidth >= 768 && screenWidth < 1024
        const tabLarge = screenWidth >= 1024 && screenWidth < 1280
        const twelve = screenWidth >= 1280 && screenWidth < 1536
        const fivtin = screenWidth >= 1536

        try {
            let response = await fetch(`${BASE_URL}/branch`)
            const data = await response.json();

            if (data?.data?.length > 0) {
                const container = document.getElementById('find-us-map-container')
                data.data.forEach((find, index) => {
                    const contain = document.createElement('a')
                    contain.href = `office?branch=${encodeParams(find.branch_name)}`

                    if (find.branch_name.toLowerCase().includes('balikpapan')) {
                        contain.classList.add('map-contain', 'absolute', `top-[${53}%]`, `left-[${46}%]`, `sm:top-[${44}%]`, `sm:left-[${45.5}%]`, `lg:top-[${44}%]`, `lg:left-[${46.5}%]`, `2xl:top-[${43}%]`, `2xl:left-[${47}%]`, 'flex', 'flex-col', 'items-center', 'cursor-pointer')
                    } else if (find.branch_name.toLowerCase().includes('suprapto')) {
                        contain.classList.add('map-contain', 'absolute', `bottom-[${12}%]`, `left-[${37}%]`, `sm:bottom-[${13}%]`, `sm:left-[${36}%]`, `lg:bottom-[${15}%]`, `lg:left-[${37}%]`, 'flex', 'flex-col', 'items-center', 'cursor-pointer')
                    } else if (find.branch_name.toLowerCase().includes('karebosi')) {
                        contain.classList.add('map-contain', 'absolute', `bottom-[${21}%]`, `left-[${51}%]`, `sm:bottom-[${25}%]`, `sm:left-[${51}%]`, `lg:bottom-[${27}%]`, `lg:left-[${52.5}%]`, `2xl:bottom-[${29}%]`, `2xl:left-[${52.7}%]`, 'flex', 'flex-col', 'items-center', 'cursor-pointer')
                    } else if (find.branch_name.toLowerCase().includes('bintaro')) {
                        contain.classList.add('map-contain', 'absolute', `bottom-[${16}%]`, `left-[${25}%]`, `sm:bottom-[${20}%]`, `sm:left-[${25}%]`, `lg:bottom-[${21}%]`, `lg:left-[${25}%]`, `2xl:bottom-[${22}%]`, `2xl:left-[${25}%]`, 'flex', 'flex-col', 'items-center', 'cursor-pointer')
                    } else if (find.branch_name.toLowerCase().includes('cibubur')) {
                        contain.classList.add('map-contain', 'absolute', `bottom-[${14}%]`, `left-[${29}%]`, `sm:bottom-[${17}%]`, `sm:left-[${29.5}%]`, `lg:bottom-[${19}%]`, `lg:left-[${28}%]`, `2xl:bottom-[${20}%]`, `2xl:left-[${27}%]`, 'flex', 'flex-col', 'items-center', 'cursor-pointer')
                    }

                    contain.innerHTML = `<div class="relative"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5 sm:w-10 sm:h-10 opacity-70">
                                            <path fill="red" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                        </svg>
                                        <div class="branch-name absolute -bottom-[3rem] -left-[5.5rem] hidden bg-white px-7 py-2 montserrat italic shadow-sm rounded select-none text-nowrap">${find.branch_name}</div></div>`
                    container.appendChild(contain)
                });
            }

        } catch (error) {
            console.log(error);
        }
    }
    getData()
</Script>