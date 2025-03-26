<div class="w-full py-12" style="background: rgba(230, 230, 255, 1);">
    <div class="coverflow-container">
        <div class="coverflow" id="coverflow">https://youtube.com/shorts/C9KIi7Ovt8E?si=HGX0N0BfJHjdmXOS
            <div class="image-wrapper">
                <img src="images/coverflow/img1_.png" alt="Gallery Image 1" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/JyGROfuXggk">
                <svg class="play-icon" viewBox="0 0 24 24" fill="white">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
            <div class="image-wrapper">
                <img src="images/coverflow/img2_.png" alt="Gallery Image 2" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/50PU-cQx7j0">
                <svg class="play-icon" viewBox="0 0 24 24" fill="white">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
            <div class="image-wrapper">
                <!-- <img src="images/coverflow/img1_.png" alt="Gallery Image 1" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfA-ioZmNT8"> -->
                <iframe width="315" height="560" src="https://www.youtube.com/embed/jfA-ioZmNT8" title="The New 2024 BYD YangWang U9 EV Walkaround | Chinese supercar | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <svg class="play-icon" viewBox="0 0 24 24" fill="white">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
            <div class="image-wrapper">
                <img src="images/coverflow/img3_.png" alt="Gallery Image 3" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/fl7hQ6-2Bjc">
                <svg class="play-icon" viewBox="0 0 24 24" fill="white">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </div>
        <div class="arrow-button-coverflow left" onclick="prevCoverflow()">
            <span class="arrow">&#10094;</span>
        </div>
        <div class="arrow-button-coverflow right" onclick="nextCoverflow()">
            <span class="arrow">&#10095;</span>
        </div>
    </div>
    <div class="flex justify-center mt-4 space-x-2">
        <button class="position-button" onclick="showCoverflowImage(0)"></button>
        <button class="position-button" onclick="showCoverflowImage(1)"></button>
        <button class="position-button" onclick="showCoverflowImage(2)"></button>
    </div>
</div>

<!-- Popup Video Player -->
<div id="popup" class="popup-overlay">
    <div class="popup-content">
        <span id="popup-close" class="popup-close">&times;</span>
        <iframe id="video-frame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>


<script>
    const coverflow = document.getElementById('coverflow');
    const imageWrappers = coverflow.querySelectorAll('.image-wrapper');
    let currentCoverflowIndex = Math.floor(imageWrappers.length / 2);

    function showCoverflowImage(index) {
        const wrapperWidth = imageWrappers[0].offsetWidth;
        const centerX = coverflow.offsetWidth / 2 - wrapperWidth / 2;

        imageWrappers.forEach((wrapper, i) => {
            const offset = i - index;
            const zIndex = imageWrappers.length - Math.abs(offset);
            let scale, left, rotateY;

            wrapper.classList.remove('active');

            if (offset === 0) {
                scale = 1.3;
                left = centerX;
                rotateY = 0;
                wrapper.classList.add('active');
                wrapper.onclick = () => {
                    const videoUrl = wrapper.querySelector('img').getAttribute('data-video-url');
                    document.getElementById('video-frame').src = videoUrl;
                    document.getElementById('popup').style.display = 'flex';
                };
            } else {
                scale = 1 - Math.abs(offset) * 0.3;
                left = centerX + (offset * (wrapperWidth * 0.6)); /* Adjust position to keep images visible */
                rotateY = offset < 0 ? 45 : -45;
                wrapper.onclick = () => showCoverflowImage(i);
            }

            wrapper.style.zIndex = zIndex;
            wrapper.style.transform = `rotateY(${rotateY}deg) scale(${scale})`;
            wrapper.style.left = `${left}px`;
        });

        const buttons = document.querySelectorAll('.position-button');
        buttons.forEach((button, i) => {
            button.classList.toggle('active', i === index);
        });

        currentCoverflowIndex = index;
    }

    function nextCoverflow() {
        currentCoverflowIndex = (currentCoverflowIndex + 1) % imageWrappers.length;
        showCoverflowImage(currentCoverflowIndex);
    }

    function prevCoverflow() {
        currentCoverflowIndex = (currentCoverflowIndex - 1 + imageWrappers.length) % imageWrappers.length;
        showCoverflowImage(currentCoverflowIndex);
    }

    showCoverflowImage(currentCoverflowIndex);

    window.addEventListener('resize', () => showCoverflowImage(currentCoverflowIndex));

    document.getElementById('popup-close').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('video-frame').src = '';
    });

    document.getElementById('popup').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.getElementById('video-frame').src = '';
        }
    });
</script>