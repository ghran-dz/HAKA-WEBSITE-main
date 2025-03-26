<?php
function slugify($text)
{
    // Replace non-letter or digits by hyphens
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // Transliterate (optional, for removing accents/diacritics)
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // Trim leading/trailing hyphens
    $text = trim($text, '-');

    // Lowercase
    $text = strtolower($text);

    // Remove duplicate hyphens
    $text = preg_replace('~-+~', '-', $text);

    // Return the final slug
    return $text;
}
?>
<div id="newsroom" class="w-full pb-40 hidden" style="background: rgba(230, 230, 255, 1);">
    <div class="w-full lg:ml-auto py-2 px-2 sm:py-8 xl:max-w-5xl 2xl:max-w-screen-xl 2xl:pl-14">
        <div class="flex justify-between items-center flex-wrap lg:pr-24">
            <div id="home-newsroom-title" class="mb-2 sm:mb-0">
            </div>
            <a href="news">
                <button class="bg-green-800 hover:bg-green-600 text-white py-2 px-6 rounded-3xl lg:mr-12 kanit font-bold text-xxs sm:py-3 sm:px-12 sm:text-xs" style="background: rgba(6, 135, 116, 1);
    ">
                    SEE MORE
                </button>
            </a>
        </div>
    </div>

    <div class="w-full lg:ml-auto pt-8 -mb-16 lg:pb-40 xl:max-w-5xl 2xl:max-w-screen-xl 2xl:pl-14">
        <div class="relative">
            <div id="carousel" class="overflow-hidden">
                <div id="news-room-container" class="flex flex-wrap transition-transform duration-300 ease-in-out">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('home-newsroom-title').innerHTML = generateTitle('BLOG & NEWS', 'NEWSROOM', 'italic !lg:text-3xl')

        function getFirstFourItems(arr) {
            return arr.slice(0, 4);
        }

        const getData = async () => {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const response = await fetch(`${BASE_URL}/news`);
                const data = await response.json();

                if (data?.data?.length > 0) {
                    document.getElementById("newsroom").classList.remove('hidden')
                    const container = document.getElementById('news-room-container')
                    container.innerHTML = ''
                    const firstFourItems = getFirstFourItems(data.data);

                    firstFourItems.forEach(element => {
                        const title = element.title?.length > 30 ? `${element.title.substr(0, 30)}...` : element.title
                        const newsBox = document.createElement('div')
                        newsBox.classList.add('w-full', 'sm:w-1/2', 'lg:w-1/4', 'flex-shrink-0', 'px-2', 'mb-4')
                        newsBox.innerHTML = `<a key="${element.id}" href="news-detail?name=${encodeParams(element.title)}" class="block relative h-64 overflow-hidden group">
                                <img src="${element.images}" alt="${element?.image_description ?? getImageFileName(element.images) ?? ""}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                    <span class="text-white text-xs">${formatDate(element.created_at)}</span>
                                    <h3 class="montserrat text-white text-lg font-bold mt-1">Mobil Listrik : <span class="text-gray-200 text-md mt-1 font-normal">${title}</span></h3>
                                </div>
                            </a>`
                        container.appendChild(newsBox)
                    });


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
                            swiperSlide.innerHTML = `<img src="${element.url_path}" alt="${element.image_description ?? getImageFileName(element.url_path) ?? ""}" class="object-cover object-center">`
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