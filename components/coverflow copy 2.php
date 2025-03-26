<style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
    }


    .swiper-slide img {
        display: block;
        width: 100%;
    }

    .swiper-slide-active {
        transform: scale(1.2);
        opacity: 1;
        width: 60% !important;
        height: 450px;
    }

    .swiper-slide-next img {
        opacity: 0.5;
    }

    .swiper-slide-prev img {
        opacity: 0.5;
    }

    .player-icon-wrapper {
        width: 100px;
        height: 100px;
        padding-left: 5px;
    }

    .player-icon-wrapper img {
        width: 40px;
        height: 40px;
    }

    .player-icon-wrapper:hover {
        width: 105px;
        height: 105px;
    }

    .player-icon-wrapper:hover img {
        width: 48px;
        height: 48px;
    }
</style>

<div class="w-full">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <div class="absolute rounded-2xl inset-0 flex justify-center items-center border-2 border-white" style="background: rgba(0, 0, 0, 0.46);">
                    <div class="player-icon-wrapper rounded-full border-2 flex justify-center items-center" style="background: rgba(0, 0, 0, 0.5); border: 3px solid rgba(217, 217, 217, 1)">
                        <img src="images/player-icon.svg" alt="player icon" />
                    </div>
                </div>
                <iframe id="videoFrame" class="rounded-2xl" width="100%" height="100%" src="https://www.youtube.com/embed/jfA-ioZmNT8" title="The New 2024 BYD YangWang U9 EV Walkaround | Chinese supercar | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>