<style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 60%;
        /* Adjusted width for active slide */
        height: 450px;
        /* Increased height for active slide */
        transition: transform 0.3s ease;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures proper scaling for images */
    }

    .swiper-slide-active {
        transform: scale(1.1);
        opacity: 1;
    }

    .swiper-slide-next,
    .swiper-slide-prev {
        opacity: 0.5;
        transform: scale(0.8);
        /* Smaller size for next/previous slides */
    }

    /* Play button styles */
    .player-icon-wrapper {
        width: 80px;
        height: 80px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        z-index: 10;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: all 0.3s ease;
        border: 3px solid rgba(255, 255, 255, 0.8);
    }

    .player-icon-wrapper img {
        width: 40px;
        height: 40px;
    }

    .player-icon-wrapper:hover {
        width: 90px;
        height: 90px;
    }

    .swiper-pagination-bullet {
        background: #000;
    }

    .swiper-pagination-bullet-active {
        background: #fff;
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
                <iframe id="videoFrame" class="rounded-2xl" width="100%" height="100%" src="https://www.youtube.com/embed/jfA-ioZmNT8" title="The New 2024 BYD YangWang U9 EV Walkaround | Chinese supercar | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide relative">
                <div class="absolute rounded-2xl inset-0 flex justify-center items-center border-2 border-white" style="background: rgba(0, 0, 0, 0.46);">
                    <div class="player-icon-wrapper rounded-full border-2 flex justify-center items-center" style="background: rgba(0, 0, 0, 0.5); border: 3px solid rgba(217, 217, 217, 1)">
                        <img src="images/player-icon.svg" alt="player icon" />
                    </div>
                </div>
                <iframe id="videoFrame" class="rounded-2xl" width="100%" height="100%" src="https://www.youtube.com/embed/jfA-ioZmNT8" title="The New 2024 BYD YangWang U9 EV Walkaround | Chinese supercar | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide relative">
                <div class="absolute rounded-2xl inset-0 flex justify-center items-center border-2 border-white" style="background: rgba(0, 0, 0, 0.46);">
                    <div class="player-icon-wrapper rounded-full border-2 flex justify-center items-center" style="background: rgba(0, 0, 0, 0.5); border: 3px solid rgba(217, 217, 217, 1)">
                        <img src="images/player-icon.svg" alt="player icon" />
                    </div>
                </div>
                <iframe id="videoFrame" class="rounded-2xl" width="100%" height="100%" src="https://www.youtube.com/embed/jfA-ioZmNT8" title="The New 2024 BYD YangWang U9 EV Walkaround | Chinese supercar | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    // Initialize Swiper
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
            clickable: true,
        },
    });

    // Play Button Click Event
    document.querySelector('.player-icon-wrapper').addEventListener('click', function() {
        const iframe = document.getElementById('videoFrame');
        let videoSrc = iframe.src;

        if (!videoSrc.includes('autoplay=1')) {
            iframe.src = videoSrc + "&autoplay=1"; // Add autoplay to video URL
        }
    });
</script>