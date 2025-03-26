<div id="top-banner-container" class="relative w-full h-52 sm:h-[26.5rem] md:h-[28rem] lg:h-[36rem] xl:h-screen slideshow">

    <div id="swiper-button" class="absolute bottom-0 left-0 mb-14 ml-14">
        <div class="arrow-button-slideshow left z-[1]">
            <span class="arrow">&#10094;</span>
        </div>
        <div class="arrow-button-slideshow right z-[1]">
            <span class="arrow">&#10095;</span>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const topBannerCarousel = document.getElementById("top-banner-container")

        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/product-banner`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    if (data.data[0]?.images?.length > 0) {
                        if (data.data[0]?.images?.length === 1) {
                            document.getElementById('swiper-button').style.display = 'none'
                        }

                        data.data[0]?.images.sort((a,b) => a.images.localeCompare(b.images))?.forEach((image, i) => {
                            const bannerImage = document.createElement('div');
                            if (i === 0) {
                                bannerImage.id = 'image-slider'
                                bannerImage.classList.add("absolute", "inset-0", "bg-cover", "bg-center", "transition-opacity", "duration-500");
                                bannerImage.style.opacity = 1;
                            } else {
                                bannerImage.id = 'image-slider'
                                bannerImage.classList.add("absolute", "inset-0", "bg-cover", "bg-center", "transition-opacity", "duration-500", "opacity-0");
                                bannerImage.style.opacity = 0;
                            }
                            bannerImage.innerHTML = `<img src="${image.images}" alt="${image?.image_description ?? getImageFileName(image.images) ?? ""}" class="w-full height-auto object-cover object-center"/>`

                            topBannerCarousel.appendChild(bannerImage);
                        });
                    } else {
                        topBannerCarousel.classList.add('hidden')
                    }
                }
            } catch (error) {
                console.log(error);
            }
        };
        getData()

        let currentSlide = 0;
        let slideInterval;
        let timeoutID;

        function showSlide(index) {
            const slides = document.querySelectorAll('#image-slider');

            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });
        }

        document.querySelector('.arrow-button-slideshow.left').addEventListener('click', () => {
            showSlide(currentSlide);
        })

        document.querySelector('.arrow-button-slideshow.right').addEventListener('click', () => {
            showSlide(currentSlide);
        })

        function nextSlideshowSlide() {
            const slides = document.querySelectorAll('#image-slider');

            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlideshowSlide() {
            const slides = document.querySelectorAll('#image-slider');

            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);

        }

        function startSlideShow() {
            slideInterval = setInterval(nextSlideshowSlide, 5000);
        }

        function stopSlideShow() {
            clearInterval(slideInterval);
        }

        function resetTimeout() {
            if (timeoutID) {
                clearTimeout(timeoutID);
            }
            timeoutID = setTimeout(startSlideShow, 2000); // Add a 2-second delay before restarting the slideshow
        }

        document.querySelector('.arrow-button-slideshow.right').addEventListener('click', () => {
            stopSlideShow();
            nextSlideshowSlide();
            resetTimeout();
        });

        document.querySelector('.arrow-button-slideshow.left').addEventListener('click', () => {
            stopSlideShow();
            prevSlideshowSlide();
            resetTimeout();
        });

        // Ensure any existing interval is cleared before starting a new one
        function resetSlideShow() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
            startSlideShow();
        }

        // Initial setup
        showSlide(currentSlide);
        startSlideShow();

        // Add event listener for visibility change to handle tab switch
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopSlideShow();
            } else {
                resetSlideShow();
            }
        });
    })
</script>