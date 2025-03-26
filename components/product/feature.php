<style>
    .feature-container {
        background: #06877433;
        clip-path: polygon(0% 0%, 100% 10%, 100% 100%, 0% 100%);
    }

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
    @media (max-width: 1024px) {
        .feature-container {
            clip-path: polygon(0% 0%, 100% 7%, 100% 100%, 0% 100%);
        }
    }

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

<div class="w-full relative feature-container">
    <div class="w-full h-full mx-auto">
        <div class="w-full flex flex-col justify-center items-center pt-14 py-10 sm:py-20 2xl:py-28">
            <div>
                <div id="feature-title" class="montserrat w-full text-3xl text-black text-stretched-half text-center font-bold mb-1 uppercase sm:text-6xl lg:mb-3">FEATURE BYD DOLPHIN</div>
                <div class="open-sans text-sm text-title text-center uppercase italic tracking-[.50em] font-bold mb-14 lg:mb-24">elevate mobility</div>
            </div>
            <div class="block slider-wrapper">
                <button id="slide-left" class="arrow arrow-left rounded-full">&#10094;</button>
                <div class="slider-container">
                    <div class="slider" id="slider">
                    </div>
                </div>
                <button id="slide-right" class="arrow arrow-right">&#10095;</button>
            </div>
        </div>
    </div>
</div>
<script>
    const width = window.innerWidth

    const getProductModel = async () => {
        try {
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
            const response = await fetch(`${BASE_URL}/product-model?model=${decodeParams(model).toUpperCase()}`);
            const data = await response.json();
            if (data?.id) {
                const features = data?.feature ?? []

                if (features?.length > 0) {
                    const sliderContainer = document.getElementById('slider')
                    sliderContainer.innerHTML = ''
                    features.forEach((eFeature, index) => {
                        const newSLide = document.createElement('div')
                        newSLide.classList.add('slide')
                        newSLide.innerHTML = `<img src="${eFeature.images}" alt="${eFeature?.image_description ?? getImageFileName(eFeature.images) ?? ""}" class="object-cover object-center">
                            <div class="w-full pt-2 px-3 lg:pt-4">
                                <div class="lg:h-14">
                                    <div class="montserrat text-black uppercase font-bold text-stretched text-sm sm:text-xl">${eFeature.title}</div>
                                </div>
                                <div class="open-sans italic text-secondary text-xs font-light sm:text-base">${eFeature.description}</div>
                            </div>
                            `
                        sliderContainer.appendChild(newSLide)
                    });

                    updateFirstSlider()
                    let currentIndex = 0;
                    const slides = document.querySelectorAll('.slide');
                    const totalSlides = slides.length;

                    function updateFirstSlider() {
                        const translate = width <= 450 ? 50 : 38.5
                        const offset = -1 * translate;

                        sliderContainer.style.transform = `translateX(${offset}%)`;
                    }

                    function updateSlideLeft() {
                        const range = width <= 450 ? 55 : 43
                        const translate = width <= 450 ? -50 : -38.5

                        if (currentIndex === -1) {
                            return
                        }
                        currentIndex += -1;

                        if (currentIndex === -1) {
                            sliderContainer.style.transform = `translateX(${width <= 450 ? 5 : 0}%)`;
                        } else if (currentIndex >= 0) {
                            sliderContainer.style.transform = `translateX(${translate  - (currentIndex * range)}%)`;
                        }
                    }

                    function updateSlideRight() {
                        const stopSlideIndex = width <= 450 ? features.length - 2 : 2
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
                    }

                    document.getElementById('slide-left').addEventListener('click', updateSlideLeft)
                    document.getElementById('slide-right').addEventListener('click', updateSlideRight)
                }

            }
        } catch (error) {
            console.log(error);

        }
    }
    const queryString = window.location.search; // Get the query string from the URL
    const searchParams = new URLSearchParams(queryString);
    const model = searchParams.get('model');

    if (model) {
        const featureTitle = document.getElementById('feature-title')
        featureTitle.innerHTML = `FEATURE ${decodeParams(model).toUpperCase()}`
        getProductModel()
    }
</script>