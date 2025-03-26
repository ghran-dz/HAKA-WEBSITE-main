<div class="w-full px-2 px-5 lg:mx-auto pt-20 mb-16 lg:px-10 xl:px-0 xl:max-w-5xl 2xl:max-w-screen-xl">
    <div id="news-title"></div>
    <!-- <div class="italic font-black text-gray-200 text-3xl lg:text-5xl montserrat">BLOG & NEWS</div>
    <div class="italic font-black text-gray-700 ml-5 mb-10 text-xl -mt-5 lg:ml-8 lg:-mt-6 lg:text-3xl montserrat">NEWSROOM</div> -->
    <a id="news-latest-link" href="#" class="w-full hidden">
        <div class="w-full flex flex-wrap justify-start items-center sm:gap-x-5 sm:mb-10 sm:flex-nowrap lg:mb-16 lg:gap-x-12">
            <img id="news-latest-image" src="" alt="" class="w-full sm:w-1/2 lg:min-w-96 h-auto object-cover object-center rounded-lg" />
            <div class="w-full py-5 sm:w-1/2 lg:pr-20 xl:pr-0 2xl:pr-10">
                <div id="news-latest-title" class="montserrat !normal mb-4 text-title lg:text-4xl"></div>
                <div id="news-latest-date" class="open-sans text-xs text-date font-light mb-3 sm:text-base"></div>
                <div id="news-latest-description" class="open-sans text-xs text-secondary2 text-justify sm:text-base"></div>
            </div>
        </div>
    </a>
    <div id="news-data-container" class="grid grid-cols-1 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-10 2xl:pr-10">

    </div>
    <div id="pagination-container" class="w-full flex space-x-1 justify-center mt-10">
    </div>
</div>
<?php require_once "components/booking-banner.php"; ?>

<script>
    document.getElementById('news-title').innerHTML = generateTitle('BLOG & NEWS', 'NEWSROOM', 'italic lg:text-3xl')
    document.getElementById('pagination-container').dataset.page = 1
    const limit = 9

    const getFirstParagraph = (desc) => {
        let result = `${desc.substr(0,600)} <span class="text-black">Read more...</span></p>`
        return result
    }

    const getData = async (first) => {
        const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

        let latestId = ""
        if (first) {
            try {
                let response = await fetch(`${BASE_URL}/top-news`)
                let data = await response.json()

                if (data?.id) {
                    document.getElementById('news-latest-link').classList.remove('hidden')
                    if (data?.category?.category && data?.tag_list?.length > 0) {
                        document.getElementById('news-latest-link').href = `${data.category.category}/news-detail/${data?.tag_list.map((val) => encodeURIComponent(val.tag.tag)).join('/')}?title=${encodeParams(data.title)}`
                    } else {
                        document.getElementById('news-latest-link').href = `news-detail?title=${encodeParams(data.title)}`
                    }
                    document.getElementById('news-latest-image').src = data.images
                    document.getElementById('news-latest-image').alt = data.image_description ?? getImageFileName(data.images) ?? ""
                    document.getElementById('news-latest-image').dataset.id = data.id
                    document.getElementById('news-latest-title').innerHTML = data.title
                    document.getElementById('news-latest-description').innerHTML = `${getFirstParagraph(data.description)}`
                    document.getElementById('news-latest-date').innerHTML = formatDateToDateString(data.created_at)
                    latestId = data.id
                }
            } catch (error) {
                console.log(error);
            }
        }

        let currentPage = document.getElementById('pagination-container').dataset.page
        const btnPagination = document.querySelectorAll('#pagination');

        try {
            let response = await fetch(`${BASE_URL}/news?page=${currentPage}&limit=${limit}&sort_by=created_at&sort_order=desc`);
            let data = await response.json();

            const newsDataContainer = document.getElementById('news-data-container');
            const pageContainer = document.getElementById('pagination-container');
            newsDataContainer.innerHTML = '';
            pageContainer.innerHTML = '';

            const {
                current_page,
                prev_page_url,
                next_page_url,
                total,
                per_page
            } = data;

            const totalPages = Math.ceil(total / per_page);

            let firstPage = Math.max(1, currentPage - (limit / 2));
            let lastPage = Math.min(totalPages, currentPage + (limit / 2));

            if (lastPage - firstPage < limit && lastPage < totalPages) {
                firstPage = Math.max(1, lastPage - limit + 1);
            }

            if (total > 1 && currentPage > 1) {
                const previousButton = document.createElement('button');
                previousButton.classList.add('rounded-full', 'border', 'border-slate-300', 'py-2', 'px-3', 'text-center', 'text-sm', 'transition-all', 'shadow-sm', 'hover:shadow-lg', 'text-slate-600', 'hover:text-white', 'hover:bg-slate-800', 'hover:border-slate-800', 'focus:text-white', 'focus:bg-slate-800', 'focus:border-slate-800', 'active:border-slate-800', 'active:text-white', 'active:bg-slate-800', 'disabled:pointer-events-none', 'disabled:opacity-50', 'disabled:shadow-none', 'ml-2');
                previousButton.innerHTML = "Prev";
                previousButton.disabled = currentPage === 1;
                previousButton.addEventListener('click', () => {
                    document.getElementById('pagination-container').dataset.page = currentPage - 1;
                    getData();
                });
                pageContainer.appendChild(previousButton);
            }

            for (let i = firstPage; i <= lastPage; i++) {
                const paginationButton = document.createElement('button');
                paginationButton.id = "pagination";
                paginationButton.innerHTML = i;
                paginationButton.setAttribute('data-page', i);

                if (typeof currentPage === 'string') {
                    currentPage = parseInt(currentPage)
                }

                if (currentPage === i) {
                    paginationButton.classList.add('min-w-9', 'rounded-full', 'bg-slate-800', 'text-white', 'border-transparent', 'border', 'py-2', 'px-3.5', 'text-center', 'text-sm', 'transition-all', 'shadow-sm', 'hover:shadow-lg', 'ml-2');
                } else {
                    paginationButton.classList.add('min-w-9', 'rounded-full', 'border', 'border-slate-300', 'py-2', 'px-3.5', 'text-black', 'text-sm', 'transition-all', 'shadow-sm', 'hover:shadow-lg', 'hover:text-white', 'hover:bg-slate-800', 'hover:border-slate-800', 'ml-2');
                }

                // Pagination button click event
                paginationButton.addEventListener('click', (event) => {
                    if (document.querySelectorAll('#pagination').length === 1 || currentPage === parseInt(event.target.getAttribute('data-page'))) {
                        return
                    }
                    currentPage = parseInt(event.target.getAttribute('data-page'));
                    document.getElementById('pagination-container').dataset.page = currentPage
                    getData();
                });

                pageContainer.appendChild(paginationButton);
            }

            // Add next button
            if (total > 1 && currentPage != totalPages) {
                const nextButton = document.createElement('button');
                nextButton.classList.add('min-w-9', 'rounded-full', 'border', 'border-slate-300', 'py-2', 'px-3', 'text-center', 'text-sm', 'transition-all', 'shadow-sm', 'hover:shadow-lg', 'text-slate-600', 'hover:text-white', 'hover:bg-slate-800', 'hover:border-slate-800', 'focus:text-white', 'focus:bg-slate-800', 'focus:border-slate-800', 'active:border-slate-800', 'active:text-white', 'active:bg-slate-800', 'disabled:pointer-events-none', 'disabled:opacity-50', 'disabled:shadow-none', 'ml-2');
                nextButton.innerHTML = "Next";
                nextButton.disabled = currentPage === totalPages;
                nextButton.addEventListener('click', () => {
                    document.getElementById('pagination-container').dataset.page = currentPage + 1;
                    getData();
                });
                pageContainer.appendChild(nextButton);
            }

            if (data?.data?.length > 0) {
                let sortData = data.data.sort((a, b) => b.created_at - a.created_at);
                if (sortData?.length > 0) {

                    if (!first) {
                        latestId = document.querySelector('#news-latest-image').dataset.id
                    }
                    if (latestId) {
                        sortData = sortData.filter(element => element.id !== latestId);
                    }
                    for (let i = 0; i < sortData.length; i++) {
                        const news = sortData[i];
                        const boxNews = document.createElement('a');

                        if (news?.category?.category && news?.tag_list?.length > 0) {
                            boxNews.href = `news-detail/${news.category.category}/${news?.tag_list.map((val) => encodeParams(val.tag.tag.split(' ').join('-'))).join('/')}?title=${encodeParams(news.title)}`;
                        } else {
                            boxNews.href = `news-detail?title=${encodeParams(news.title)}`;
                        }
                        boxNews.classList.add('w-full');
                        const altImage = news?.image_description ?? getImageFileName(news.images) ?? ""
                        boxNews.innerHTML = `<img src="${news.images}" alt="${altImage}" class="w-full h-52 mb-4 rounded object-cover object-center" />
                            <div class="montserrat text-base sm:text-xl lg:text-2xl"><span class="font-semibold">Mobil Listrik: </span>${news.title}</div>`;
                        newsDataContainer.appendChild(boxNews);
                    }
                }
            }
        } catch (error) {
            console.log(error);
        }
    };

    getData('first')
</script>