<style>
    .slider-container {
        display: flex;
        overflow: hidden;
        width: 100%;
        margin: auto;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide {
        min-width: 38%;
        margin-left: 5%;
        transition: transform 0.5s ease;
    }

    .slider img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .arrow {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        z-index: 1;
        width: 52px;
        height: 52px;
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .arrow-left {
        left: 10px;
    }

    .arrow-right {
        right: 10px;
    }

    .slider-wrapper {
        position: relative;
        width: 100%;
    }

    /* Responsive adjustments */
    @media (max-width: 450px) {
        .slide {
            min-width: 50%;
            margin-left: 5%;
            transition: transform 0.5s ease;
        }

        .arrow {
            transform: translateY(-50%);
            font-size: 1.5rem;
            padding: 5px;
            width: 40px;
            height: 40px;
        }
    }
</style>
<?php

$data = [
    "title" => "technologies",
    "sub_title" => "BYD keeps driving technological advancement with a “technology-based, innovation-oriented” mindset and approach.",
];

?>
<div class="w-full bg-white py-10 sm:py-20 mx-auto">
    <div class="montserrat w-full text-3xl text-center text-stretched font-bold mb-7 uppercase px-5 sm:px-0 sm:text-6xl"><?php echo htmlspecialchars($data['title']) ?? "" ?></div>
    <div class="open-sans text-sm text-center font-light uppercase italic mb-5 px-5 lg:px-0 lg:mb-20"><?php echo htmlspecialchars($data['sub_title']) ?? "" ?></div>
    <div class="block slider-wrapper">
        <button id="slide-left" class="arrow arrow-left rounded-full">&#10094;</button>
        <div class="slider-container">
            <div class="slider" id="slider">
            </div>
        </div>
        <button id="slide-right" class="arrow arrow-right">&#10095;</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const width = window.innerWidth
        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/about-data`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const sliderContainer = document.getElementById('slider')
                    sliderContainer.innerHTML = ''
                    const technologies = data?.data?.filter(e => e.type === 'technology')

                    if (technologies?.length > 0) {
                        technologies.forEach(technology => {
                            const swiperSlide = document.createElement('div')
                            swiperSlide.classList.add('slide')
                            swiperSlide.innerHTML = `<img src="${technology?.url_path}" alt="${technology?.image_description ?? getImageFileName(technology?.url_path) ?? ""}" class="object-cover object-center">
                             <div class="w-full px-3 sm:pl-3 lg:pl-5 lg:pt-4">
                                <div class="lg:h-16">
                                    <div class="text-black text-xs text-stretched uppercase montserrat sm:text-lg xl:text-3xl">${technology?.title}</div>
                                </div>
                                <div class="italic text-xxs text-secondary2 font-light open-sans sm:text-base">${technology?.description}</div>
                            </div>`

                            sliderContainer.appendChild(swiperSlide)
                        });

                        updateFirstSlider()
                        let currentIndex = 0;
                        const slides = document.querySelectorAll('.slide');
                        const totalSlides = slides.length;
                        const slider = document.getElementById('slider');

                        function updateFirstSlider() {
                            const translate = width <= 450 ? 50 : 38.5
                            const offset = -1 * translate;

                            sliderContainer.style.transform = `translateX(${offset}%)`;
                        }

                        function updateLastSlider() {
                            const range = width <= 450 ? 55 : 43
                            const translate = width <= 450 ? -50 : -38.5
                            const offset = 1 * translate;

                            sliderContainer.style.transform = `translateX(${offset}%)`;
                        }

                        document.getElementById('slide-left').addEventListener('click', () => {
                            const range = width <= 450 ? 55 : 43
                            const translate = width <= 450 ? -50 : -38.5

                            if (currentIndex === -1) {
                                return
                            }
                            currentIndex += -1;

                            if (currentIndex === -1) {
                                sliderContainer.style.transform = `translateX(${0}%)`;
                            } else if (currentIndex >= 0) {
                                sliderContainer.style.transform = `translateX(${translate  - (currentIndex * range)}%)`;
                            }
                        })
                        document.getElementById('slide-right').addEventListener('click', () => {
                            const stopSlideIndex = width <= 450 ? technologies.length - 2 : 2
                            const range = width <= 450 ? 55 : 43
                            const translate = width <= 450 ? -50 : -38.5

                            if (currentIndex === stopSlideIndex) {
                                return
                            }
                            currentIndex += 1;
                            if (currentIndex === 0) {
                                updateFirstSlider()
                            } else if (currentIndex >= 1 && currentIndex <= stopSlideIndex) {
                                sliderContainer.style.transform = `translateX(${translate  - (currentIndex * range)}%)`;
                            }
                        })
                    }
                }
            } catch (error) {
                console.log(error);
            }
        };
        getData()
    })
</script>