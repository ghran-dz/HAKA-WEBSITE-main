<style>
    .swiper {
        margin-top: 15%;
    }

    .swiper-slide {
        display: flex;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .swiper-slide img {
        display: block;
        height: 350px;
        object-fit: cover;
        object-position: center;
    }

    .swiper-slide-active img {
        transform: scale(1.2);
        opacity: 1;
    }

    .swiper-slide-next img {
        opacity: 0.5;
    }

    .swiper-slide-prev img {
        opacity: 0.5;
    }
</style>

<?php
$carousels = [
    ["image" => "images/slideshows/home-m1.png"],
    ["image" => "images/slideshows/home-m2.png"],
    ["image" => "images/slideshows/home-m3.png"],
    ["image" => "images/slideshows/home-m4.png"],
];
?>

<div class="w-full relative" style="background: rgba(230, 230, 255, 1);">
    <img id="bg-slider" src="images/cars/bgcar.png" alt="Background Image" id="bg-image" class="w-full h-auto">
    <div class="w-full absolute inset-0">
        <div class="swiper homeCarSwiper flex justify-center items-center">
            <div id="banner-wrapper-container" class="swiper-wrapper">
                <?php foreach ($carousels as $index => $val): ?>
                    <div class="swiper-slide">
                        <img src="<?= $val['image'] ?>" alt="Slide <?= $index + 1 ?>" class="object-cover object-center">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".homeCarSwiper", {
        slidesPerView: 1.9,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        centeredSlides: true,
        effect: 'coverflow', // Adding coverflow effect
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/homepage-banner`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const dataBackground = data.data.find(element => element.type === 'bg_banner_2')

                    if (dataBackground?.images?.length > 0) {
                        document.getElementById('bg-slider').src = dataBackground?.images[0].url_path
                    }
                    const carousel = data.data.find(element => element.type === 'detail_banner_2')
                    if (carousel?.images?.length > 0) {
                        const container = document.getElementById('banner-wrapper-container')
                        container.innerHTML = ''

                        carousel.images.forEach(element => {
                            const swiperSlide = document.createElement('div')
                            swiperSlide.classList.add('swiper-slide')
                            swiperSlide.innerHTML = `<img src="${element.url_path}" alt="${element?.image_description ?? getImageFileName(element.url_path) ?? ""}" class="object-cover object-center">`
                            container.appendChild(swiperSlide)
                        });
                    }
                }
            } catch (error) {
                console.log(error);
            }
        };
        getData()
    });
</script>