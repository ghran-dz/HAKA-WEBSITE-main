<div class="w-full px-2 px-5 lg:mx-auto pt-28 mb-16 lg:px-10 xl:px-0 xl:max-w-screen-lg">
    <p class="montserrat text-3xl sm:text-5xl mb-10">Careers</p>
    <img id="career-banner" src="" alt="banner career" class="w-full h-auto mb-7" />
    <p class="w-full text-base sm:text-xl text-justify open-sans mb-14">A career at HAKA AUTO can be an exciting experience in your life. Not only will you have opportunity to build a successfull career in our company, you will also have the opportunity to be part of the team that creates a world-class community and lifestyle of the future</p>
    <p class="w-full text-lg sm:text-2xl text-title text-center montserrat mb-14">So, is this the right place for you?</p>



    <div class="relative overflow-x-auto mb-20">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-white dark:bg-gray-800 dark:text-white dark:border-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-sm sm:text-xl text-nowrap border border-t-0 border-b-0 border-gray-500">
                        Expired Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm sm:text-xl text-nowrap border border-t-0 border-b-0 border-gray-500">
                        Department
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm sm:text-xl text-nowrap border border-t-0 border-b-0 border-gray-500">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm sm:text-xl text-nowrap border border-t-0 border-b-0 border-gray-500">
                        Location
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm sm:text-xl text-nowrap border border-t-0 border-b-0 border-gray-500">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody id="table-body"></tbody>
        </table>
    </div>
    <div id="pagination-container" class="hidden w-full flex space-x-1 justify-center"></div>
    <div id="page-of" class="hidden text-sm pt-4 text-gray-400 text-center"></div>

</div>

<script>
    const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
    document.getElementById('pagination-container').dataset.page = 1
    const limit = 10

    const getFirstParagraph = (desc) => {
        let result = `${desc.substr(0,600)} <span class="text-black">Read more...</span></p>`
        return result
    }

    const getBanner = async () => {
        try {
            let response = await fetch(`${BASE_URL}/career-banner?page=${1}&limit=${1}&sort_by=created_at&sort_order=asc`);
            let data = await response.json();

            if (data?.data?.length > 0 && data.data[0]?.images?.length > 0) {
                const bannerContainer = document.getElementById('career-banner')
                bannerContainer.src = data.data[0].images[0].images
                bannerContainer.alt = data.data[0].images[0].image_description ?? getImageFileName(data.data[0].images[0].images) ?? ""
            }
        } catch (error) {
            console.log(error);
        }
    }

    const getData = async (first) => {
        let currentPage = document.getElementById('pagination-container').dataset.page
        const btnPagination = document.querySelectorAll('#pagination');

        try {
            let response = await fetch(`${BASE_URL}/career-job?page=${currentPage}&limit=${limit}&sort_by=created_at&sort_order=desc`);
            let data = await response.json();

            const tableBody = document.getElementById('table-body');
            const pageContainer = document.getElementById('pagination-container');
            // tableBody.innerHTML = '';
            pageContainer.innerHTML = '';

            const {
                current_page,
                prev_page_url,
                next_page_url,
                total,
                per_page
            } = data;

            const totalPages = Math.ceil(total / per_page);
            document.getElementById('page-of').innerHTML = `page ${currentPage} of ${totalPages}`

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

                if (totalPages > 1) {
                    pageContainer.appendChild(paginationButton);
                }

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
                    for (let i = 0; i < sortData.length; i++) {
                        const job = sortData[i];
                        const tableRow = document.createElement('tr');
                        tableRow.classList.add('bg-white', 'border-b', 'dark:bg-gray-800', 'dark:border-gray-700')
                        tableRow.innerHTML = `<th scope="row" class="px-6 py-4 font-medium text-sm sm:text-lg text-gray-400 whitespace-nowrap dark:text-white">${formatDateInd(job.expired_date)}
                                            </th>
                                            <td class="px-6 py-4 font-medium text-sm sm:text-lg text-gray-400 whitespace-nowrap dark:text-white">${job.career_department.department_name}
                                            </td>
                                            <td class="px-6 py-4 font-medium text-sm sm:text-lg text-gray-700 whitespace-nowrap dark:text-white">${job.title}
                                            </td>
                                            <td class="px-6 py-4 font-medium text-sm sm:text-lg text-gray-400 whitespace-nowrap dark:text-white">${job.career_location.location}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="career-detail?title=${job.title}&id=${job.id}">
                                                    <button class="btn-detail-career rounded-full px-4 py-2 text-sm open-sans">Detail</button>
                                                </a>
                                            </td>`
                        tableBody.appendChild(tableRow);
                    }
                }
            }
        } catch (error) {
            console.log(error);
        }
    };
    getBanner()
    getData()
</script>