<!-- Fullscreen Image Slideshow -->
<?php require_once "components/home/banner.php"; ?>
<!-- Fullscreen About Us -->
<?php require_once "components/home/about-us.php"; ?>
<!-- Fullscreen Booking -->
<?php require_once "components/home/booking.php"; ?>
<!-- ini about us yang terintegrais dengan api -->
<div class="carousel-wrapper -mb-1">
    <div class="bg-container -ml-1">
        <img src="images/cars/bgcar.png" alt="Background Image" id="bg-image">
    </div>
    <div class="carousel relative flex items-center justify-center">
        <div id="carousel-track" class="carousel-track">
        </div>
        <div class="arrow-button left" onclick="prevSlide()">
            <span class="arrow">&#10094;</span>
        </div>
        <div class="arrow-button right" onclick="nextSlide()">
            <span class="arrow">&#10095;</span>
        </div>
    </div>
</div>
<!-- Fullscreen Coverflow -->
<?php require_once "components/coverflow-home.php"; ?>
<!-- Fullscreen News Room -->
<?php require_once "components/home/newsroom.php"; ?>

<script>
    // Set the height of the carousel-wrapper based on the background image's height

    function adjustCarouselHeight() {
        const carouselWrapper = document.querySelector('.carousel-wrapper');
        const bgImage = document.getElementById('bg-image');
        carouselWrapper.style.height = `${bgImage.height}px`;
    }

    // Adjust height on load and resize
    window.addEventListener('load', adjustCarouselHeight);
    window.addEventListener('resize', adjustCarouselHeight);

    const carouselTrack = document.querySelector('.carousel-track');
    let index = 0;
    let autoPlayInterval;
    let delayTimeout;

    function setPositionByIndex() {
        const currentTranslate = index * -50 + 25; // Adjust to center the active item and show half item on the right
        carouselTrack.style.transform = `translateX(${currentTranslate}%)`;
    }

    function updateCarousel() {
        let carouselItems = Array.from(document.querySelectorAll('.carousel-item'));

        carouselItems.forEach((item, i) => {
            if (i === index) {
                item.classList.add('active');
                item.style.zIndex = 2;
            } else {
                item.classList.remove('active');
                item.style.zIndex = 1;
            }
        });

        setPositionByIndex();
    }

    function nextSlide() {
        let carouselItems = Array.from(document.querySelectorAll('.carousel-item'));
        const totalItems = carouselItems.length;
        clearTimeout(delayTimeout);
        index = (index + 1) % totalItems;
        updateCarousel();
        delayTransition();
    }

    function prevSlide() {
        let carouselItems = Array.from(document.querySelectorAll('.carousel-item'));
        const totalItems = carouselItems.length;

        clearTimeout(delayTimeout);
        index = (index - 1 + totalItems) % totalItems;
        updateCarousel();
        delayTransition();
    }

    function delayTransition() {
        clearInterval(autoPlayInterval);
        delayTimeout = setTimeout(() => {
            autoPlayInterval = startAutoPlay();
        }, parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--carousel-stay-duration')));
    }

    function startAutoPlay() {
        return setInterval(nextSlide, parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--carousel-stay-duration')));
    }

    autoPlayInterval = startAutoPlay();

    carouselTrack.addEventListener('mouseover', () => clearInterval(autoPlayInterval));
    carouselTrack.addEventListener('mouseout', () => autoPlayInterval = startAutoPlay());

    // Set initial position
    updateCarousel();

    const getBanner2Carousel = async () => {
        try {
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
            const response = await fetch(`${BASE_URL}/homepage-banner`);
            const data = await response.json();

            if (data?.data?.length > 0) {
                const dataBackground = data.data.find(element => element.type === 'bg_banner_2')

                if (dataBackground?.images?.length > 0) {
                    document.getElementById('bg-image').src = dataBackground?.images[0].url_path
                    document.getElementById('bg-image').alt = dataBackground?.images[0].image_description ?? getImageFileName(dataBackground?.images[0].url_path) ?? ""
                }
                const carousel = data.data.find(element => element.type === 'detail_banner_2')
                if (carousel?.images?.length > 0) {
                    const container = document.getElementById('carousel-track')
                    container.innerHTML = ''

                    if (carousel.images?.length === 1) {
                        document.querySelectorAll('.arrow-button').forEach(e => e.classList.add('hidden'))
                    }

                    carousel.images.forEach((element, i) => {
                        const swiperSlide = document.createElement('div')
                        if (i === 0) {
                            swiperSlide.classList.add('carousel-item', 'p-4', 'active')
                        } else {
                            swiperSlide.classList.add('carousel-item', 'p-4')
                        }

                        swiperSlide.innerHTML = `<img src="${element.url_path}" alt="${element.image_description ?? getImageFileName(element.url_path) ?? ""}" class="object-contain rounded-lg">`
                        container.appendChild(swiperSlide)
                    });
                }
            }
        } catch (error) {
            console.log(error);
        }
    };
    getBanner2Carousel()
</script>