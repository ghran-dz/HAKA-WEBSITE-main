<style>
    /* Animasi untuk transition smooth */
    .carousel-item {
        transition: transform 0.5s ease-in-out;
    }

    .close-modal-container:hover {
        width: 60px;
        height: 60px;
    }

    .close-modal-container:hover i {
        font-size: 20px;
    }

    @media (max-width: 480px) {
        .close-modal-container:hover i {
            font-size: 15px;
        }
    }
</style>
<div class="w-full sm:mb-20 lg:mb-40">
    <!-- Dynamic gallery grid -->
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 sm:gap-1">
        <!-- Dynamic content will be inserted here -->
    </div>
</div>

<div id="carouselModal" class="hidden fixed inset-0 z-50 bg-black bg-opacity-75 flex justify-center items-start pt-10">
    <div class="w-full max-w-3xl mx-auto">
        <div id="carouselContent" class="flex justify-center mb-7">
            <img id="carouselImage" src="" alt="Image" class="w-full h-auto max-h-96 object-cover object-center">
        </div>
        <div id="close-modal" class="close-modal-container absolute top-14 right-7 w-10 h-10 sm:w-14 sm:h-14 flex justify-center items-center border-2 border-white cursor-pointer rounded-full"><i class="fas fa-times text-lg text-white"></i></div>
        <div id="btn-navigate-modal" class="flex justify-center items-center gap-5">
            <button id="leftArrow" class="w-10 h-10 bg-gray-500 rounded-full flex justify-center items-center">
                <i class="fas fa-chevron-left text-base font-bold text-white"></i> <!-- Font Awesome icon for left arrow -->
            </button>

            <button id="rightArrow" class="w-10 h-10 bg-gray-500 rounded-full flex justify-center items-center">
                <i class="fas fa-chevron-right text-base font-bold text-white"></i> <!-- Font Awesome icon for right arrow -->
            </button>
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        updateCarouselImage();
        modal.classList.remove('hidden');
    }

    function getDatasetImages() {
        const datasetImages = document.getElementById('carouselModal').dataset.images
        const dataImages = datasetImages ? JSON.parse(datasetImages) : []
        return dataImages
    }

    function updateCarouselImage() {
        const datasetImages = document.getElementById('carouselModal').dataset.images
        const dataImages = getDatasetImages()
        if (dataImages?.length <= 1) {
            document.getElementById('btn-navigate-modal').classList.add('hidden')
        } else {
            document.getElementById('btn-navigate-modal').classList.remove('hidden')
        }
        carouselImage.src = dataImages[currentIndex];
    }

    function renderGallery(images) {
        const gallery = document.getElementById('gallery');
        gallery.innerHTML = ''; // Clear existing content

        // Create top row, with half image on the right
        const topRow = document.createElement('div')
        topRow.classList.add('grid', 'grid-cols-2', 'lg:grid-cols-7', 'sm:gap-1');
        for (let i = 0; i < images.length && i < 4; i++) {
            const imgWrapper = document.createElement('div');
            imgWrapper.classList.add('relative', 'overflow-hidden', 'col-span-2');
            if (i === 3) {
                imgWrapper.classList.add('col-span-2', 'lg:col-span-1', 'lg:col-start-7');
            }

            const imgElement = document.createElement('img');
            imgElement.src = images[i]?.url_path ?? "";
            imgElement.alt = images[i]?.image_description ?? getImageFileName(images[i].file_name) ?? "";
            imgElement.classList.add('w-full', 'lg:h-48', 'object-cover', 'object-left');

            // Add click event listener to open modal
            imgElement.addEventListener('click', () => {
                openModal(i); // Buka modal dengan indeks gambar yang diklik
            });

            imgWrapper.appendChild(imgElement);

            topRow.appendChild(imgWrapper);
        }
        gallery.appendChild(topRow);

        // Create bottom row, with half image on the left
        const bottomRow = document.createElement('div');
        bottomRow.classList.add('grid', 'grid-cols-2', 'lg:grid-cols-7', 'sm:gap-1');
        for (let i = 4; i < images.length && i < 8; i++) {
            const imgWrapper = document.createElement('div');
            imgWrapper.classList.add('relative', 'overflow-hidden', 'col-span-2');
            if (i === 4) {
                imgWrapper.classList.add('col-span-2', 'lg:col-span-1', 'lg:col-start-1');
            }

            const imgElement = document.createElement('img');
            imgElement.src = images[i].url_path;
            imgElement.alt = images[i]?.image_description ?? getImageFileName(images[i].file_name) ?? "";
            imgElement.classList.add('w-full', 'lg:h-48', 'object-cover', 'object-left');

            // Add click event listener to open modal
            imgElement.addEventListener('click', () => {
                openModal(i); // Buka modal dengan indeks gambar yang diklik
            });

            imgWrapper.appendChild(imgElement);
            bottomRow.appendChild(imgWrapper);
        }
        gallery.appendChild(bottomRow);
    }

    const getData = async () => {

        try {
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
            const response = await fetch(`${BASE_URL}/about-gallery`);
            const data = await response.json();


            if (data?.data?.length > 0) {
                if (data?.data[0]?.images?.length > 0) {
                    let images = []
                    data?.data[0]?.images.forEach((element, index) => {
                        images.push(element.url_path)
                    });
                    document.getElementById('carouselModal').dataset[`images`] = JSON.stringify(images)
                    renderGallery(data.data[0].images);
                }
            }
        } catch (error) {
            console.log(error);
        }
    }

    getData()
</script>

<script>
    const modal = document.getElementById('carouselModal');
    const carouselImage = document.getElementById('carouselImage');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');
    const closeModal = document.getElementById('close-modal');

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    })

    // Event listeners for arrows
    leftArrow.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const datasetImages = getDatasetImages()
        carouselImage.src = datasetImages[currentIndex];
        currentIndex = (currentIndex === 0) ? datasetImages.length - 1 : currentIndex - 1;
        updateCarouselImage();
    });

    rightArrow.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const datasetImages = getDatasetImages()
        currentIndex = (currentIndex === datasetImages.length - 1) ? 0 : currentIndex + 1;
        updateCarouselImage();
    });

    // Event listener to close modal
    modal.addEventListener('click', (e) => {
        if (e.target === modal) { // Only close the modal if the click is outside the image/content
            e.preventDefault();
            modal.classList.add('hidden'); // Add hidden class to hide modal
        }
    });
</script>
</div>