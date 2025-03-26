<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        display: block;
        font-size: 18px;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center;
        border-radius: 20px;
    }
</style>
<div class="w-full mx-auto py-10 px-2 xl:px-0 lg:py-20 xl:max-w-screen-lg 2xl:max-w-screen-xl">
    <div class="swiper swiper-technical-sepec">
        <!-- Carousel Area -->
        <div id="tech-container" class="swiper-wrapper">
        </div>
    </div>
</div>
<script>
    var swiper = new Swiper(".swiper-technical-sepec", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        // centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<script>
    const getProductModelTech = async () => {
        try {
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

            const response = await fetch(`${BASE_URL}/product-model?model=${decodeParams(model).toUpperCase()}`);
            const data = await response.json();

            if (data?.id) {
                const technologies = data?.technology ?? []

                if (technologies?.length > 0) {
                    const techContainer = document.getElementById('tech-container')
                    techContainer.innerHTML = ''
                    technologies.forEach((car, index) => {
                        const box = document.createElement('div');
                        box.classList.add('swiper-slide')
                        box.innerHTML = ` <img src="${BASE_URL.replace('/api/v1','') + '/' + car?.images}" alt="${car?.image_description ?? getImageFileName(`${BASE_URL.replace('/api/v1','') + '/' + car?.images}`) ?? ""}" class="object-cover object-center">
                            <div class="w-full pl-2 pt-2 lg:pl-5 lg:pt-4 flex flex-col justify-start">
                        <div class="h-5 lg:h-12">
                            <div class="montserrat text-black text-xs uppercase font-extrabold text-stretched lg:text-xl">${car?.title}</div>
                        </div>
                        <div class="open-sans italic text-xxs text-secondary text-stretched sm:text-xs lg:text-sm font-light">${car?.description}</div>
                    </div>`
                        techContainer.appendChild(box)
                    })
                }
            }
        } catch (error) {
            console.log(error);
        }

    }
    if (model) {
        getProductModelTech()
    }
</script>