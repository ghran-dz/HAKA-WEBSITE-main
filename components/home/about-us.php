<div class="w-full max-w-6xl mx-auto flex flex-wrap pt-10 mb-10 flex-col-reverse sm:pt-20 sm:mb-20 sm:flex-row sm:px-10 lg:mb-40 lg:pt-40">
    <div class="w-full sm:w-1/2 p-4">
        <div id="home-about-us-title" class="sm:-ml-8 sm:mb-8"></div>
        <div id="about-us-description" class="w-full text-seconday text-justify open-sans"></div>
        <a href="about-us">
            <button class="bg-green-800 hover:bg-green-600 text-gray-100 rounded-3xl mt-6 mr-2 kanit py-1.5 px-6 text-sm sm:mt-12 sm:mb-6 lg:py-3 lg:px-12 lg:text-base" style="background: rgba(6, 135, 116, 1);">
                SEE MORE
            </button>
        </a>
    </div>
    <div class="w-full sm:w-1/2 px-2 grid grid-cols-2 gap-1 sm:gap-2 sm:p-4 lg:gap-4">
        <img id="about-us-image-right" src="" alt="Image 1" class="w-full h-auto  mb-8">
        <img id="about-us-image-left" src="" alt="Image 2" class="w-full h-auto mt-8">
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('home-about-us-title').innerHTML = generateTitle('HAKA AUTO', 'ABOUT US', 'italic !lg:text-3xl')
        const topBannerCarousel = document.getElementById("top-banner-container")

        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/about-us`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const dataBanner = data.data[0]
                    const imageLeft = document.getElementById("about-us-image-left")
                    const imageRight = document.getElementById("about-us-image-right")
                    imageLeft.src = `${BASE_URL.replace('/api/v1','')}/${dataBanner.images_1}`
                    imageLeft.alt = dataBanner?.image_description_1 ?? getImageFileName(dataBanner.images_1) ?? ""
                    imageRight.src = `${BASE_URL.replace('/api/v1','')}/${dataBanner.images_2}`
                    imageRight.alt = dataBanner?.image_description_1 ?? getImageFileName(dataBanner.images_2) ?? ""
                    document.getElementById('about-us-description').innerHTML = dataBanner.about_us;

                }
            } catch (error) {
                console.log(error);
            }
        };
        getData()

    })
</script>