<?php
$skeletons = [1, 2, 3]
?>
<style>
    .news-detail-description p {
        font-family: 'Open Sans', sans-serif !important;
    }
</style>
<div class="w-full pt-20 mb-16 px-5 xl:px-0 lg:mx-auto xl:max-w-5xl 2xl:max-w-screen-xl">
    <div id="skeleton-loader" role="news-detail-image" class="w-full h-auto max-h-96 mb-5 lg:mb-10 space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
        <div class="flex items-center justify-center w-full bg-gray-300 rounded dark:bg-gray-700 h-52 sm:h-80 lg:h-96" style="border-radius: 35px;">
            <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
            </svg>
        </div>
    </div>
    <img id="news-detail-image" src="" alt="" class="hidden w-full h-auto object-cover object-center mb-5 lg:mb-10 lg:max-h-96" style="border-radius: 35px;" />
    <div id="news-detail-title" class="w-full text-title text-4xl tracking-wide font-extrabold montserrat italic mb-5"></div>
    <div class="flex items-center justify-start mb-4 gap-2">
        <div id="news-detail-date" class="text-md text-date open-sans"></div>
        <i id="news-detail-category" class="text-md text-date open-sans italic font-semibold"></i>
    </div>
    <div id="news-detail-description" class="news-detail-description text-justify text-description mb-5 open-sans">
    </div>
    <div class="text-2xl font-bold montserrat italic text-title mb-4">Lates News</div>

    <div id="news-other-skeleton" role="status" class="space-y-8 animate-pulse md:space-y-0 sm:grid sm:grid-cols-3 sm:gap-5">
        <?php foreach ($skeletons as $key => $value): ?>
            <div class="w-full">
                <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded mb-2 sm:max-w-72 dark:bg-gray-700">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="pl-4">
                    <div class="w-1/2 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 mb-2"></div>
                    <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-64 mb-2.5"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <div id="news-detail-other" class="hidden grid grid-cols-1 sm:grid-cols-3 gap-5">

    </div>
</div>
<?php require_once "components/booking-banner.php"; ?>


<script>
    const queryString = window.location.search; // Get the query string from the URL
    const searchParams = new URLSearchParams(queryString);
    const newsTitle = searchParams.get('title');
    const paramsTitle = decodeParams(newsTitle) ?? ""

    const newsDetailImage = document.getElementById('news-detail-image');
    const skeletonLoader = document.getElementById('skeleton-loader');
    skeletonLoader.style.display = 'block'; // Show skeleton loader
    newsDetailImage.classList.add('hidden'); // Hide image initially

    function loadImage(imageSrc, imageAlt) {

        newsDetailImage.src = imageSrc; // Set the new image source
        newsDetailImage.alt = imageAlt ?? getImageFileName(imageSrc); // Set the new image source

        newsDetailImage.onload = function() {
            skeletonLoader.style.display = 'none'; // Hide skeleton loader once image loads
            newsDetailImage.classList.remove('hidden'); // Show the actual image
        };

        newsDetailImage.onerror = function() {
            // Handle image loading error if needed
            console.error('Failed to load image');
        };
    }

    const getData = async () => {
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

        try {
            let responseDetail = await fetch(`${BASE_URL}/news-detail?title=${paramsTitle}`)
            let detail = await responseDetail.json()

            if (detail) {
                loadImage(detail.images, detail.image_description);
                document.getElementById('news-detail-title').innerHTML = detail?.title ?? "News Title"
                const descriptionWrapper = document.getElementById('news-detail-description')
                descriptionWrapper.innerHTML = detail?.description ?? ""
                document.getElementById('news-detail-date').innerHTML = `${formatDate(detail?.created_at ?? new Date())}`
                document.getElementById('news-detail-category').innerHTML = detail?.category_list?.length > 0 ? ` - ${detail?.category_list?.map((val) => val?.category?.category ?? "").join(" / ") ?? ""}` : ""
            }

            let response = await fetch(`${BASE_URL}/news?page=1&limit=9&sort_by=created_at&sort_order=desc`)
            let data = await response.json()

            if (data?.data?.length > 0) {

                const otherData = data.data.filter(e => e.id !== detail?.id)

                if (otherData?.length > 0) {
                    document.getElementById('news-detail-other').classList.remove('hidden')
                    document.getElementById('news-other-skeleton').style.display = 'none'

                    const sortData = otherData.sort((a, b) => b.created_at - a.created_at)
                    const newsOtherContainer = document.getElementById('news-detail-other')
                    newsOtherContainer.innerHTML = ''
                    newsOtherContainer.innerHTML = ''
                    let lengthThree = sortData.length > 3 ? 3 : sortData.length
                    for (let i = 0; i < lengthThree; i++) {
                        const news = sortData[i];
                        const boxNews = document.createElement('a')
                        boxNews.href = `news-detail?title=${encodeParams(news.title)}`
                        boxNews.classList.add('w-full')
                        const altImage = news?.image_description ?? getImageFileName(news.images)
                        boxNews.innerHTML = `<img src="${news.images}" alt="news other image" class="w-full h-40 mb-4 rounded object-cover object-center" />
                                <div class="montserrat text-secondary font-light sm:text-lg lg:text-lg"><span class="font-medium text-title">Mobil Listrik: </span >${news.title}</div>`
                        newsOtherContainer.appendChild(boxNews)
                    }
                }

            }
        } catch (error) {
            console.log(error);
        }
    }
    if (paramsTitle) {
        getData()
    }
</script>