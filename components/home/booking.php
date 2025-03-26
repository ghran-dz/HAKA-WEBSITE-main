<div class="relative w-full mt-8 pb-12" style="background: rgba(230, 230, 255, 1);">
    <img id="booking-image" class="w-full h-auto object-cover object-center" src="images/provide.png" alt="">
    <div class="absolute inset-0 flex flex-col justify-end px-4 sm:pb-4">
        <div class="flex flex-col justify-end">
            <div class="w-full lg:w-1/2 mb-0 lg:mb-4">
                <div class="flex flex-col items-center sm:items-start">
                    <div class="sm:ml-10 xl:ml-24 2xl:ml-28">
                        <a href="form-test-drive">
                            <button class="text-xs bg-green-800 hover:bg-green-600 text-white rounded-3xl mr-2 kanit py-1.5 px-6 mb-1 lg:text-sm lg:py-3 lg:px-12 lg:mb-6 ">
                                BOOKING TEST DRIVE
                            </button>
                        </a>
                        <button class="text-xs bg-white hover:bg-green-600 border-solid border-2 border-green-600 text-green-600 rounded-3xl kanit hover:text-white py-1.5 px-6 mb-1 lg:text-sm lg:py-3 lg:px-12 lg:mb-6 ">
                            LEARN MORE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/homepage-banner`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    const dataBanner = data.data.find(element => element.type === 'bg_banner_1')
                    if (dataBanner?.images?.length > 0) {
                        const bannerImage = document.getElementById('booking-image')
                        bannerImage.src = dataBanner?.images[0].url_path
                        bannerImage.alt = dataBanner?.images[0].image_description ?? getImageFileName(dataBanner?.images[0].url_path) ?? ""
                    }
                }
            } catch (error) {
                console.log(error);
            }
        };
        getData()
    });
</script>