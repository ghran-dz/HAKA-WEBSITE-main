<div class="w-full min-w-80 bg-white mb-20 px-5 pt-20 sm:mb-20 sm:pr-14 sm:pl-10 lg:pr-24 lg:pl-20 lg:pt-32 lg:mb-[22.5rem] xl:mb-40">
    <div class="w-full flex flex-wrap">
        <div class="w-full mb-4 sm:mb-0 md:w-5/12">
            <img src="images/form-calculator-image.png" alt="BYD HAKA AUTO installement calculator" class="w-full rounded-lg object-cover object-center" />
        </div>
        <form id="registerForm" onsubmit="return handleRegister(event);" class="w-full sm:w-6/12">
            <div class="block h-full sm:pl-10" style="font-family: 'Kanit', sans-serif;">
                <div class="font-black leading-3 lg:text-4xl">INSTALLMENT</div>
                <div class="font-black leading-3 mb-1 lg:text-4xl">CALCULATOR</div>
                <div class="text-xxs text-gray-500 font-light">The calculator is a simulation an is not the final price</div>
                <div class="font-bold text-red-500 leading-3 mb-4 lg:text-3xl">UNDER CONSTRUCTION</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
                    <div>
                        <label for="location" class="text-xs ml-2 text-title">Locations</label>
                        <select id="location" class="w-full px-3 border border-none text-title text-xxs rounded mb-3 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;">
                            <option value="" class="text-xxs text-gray-300">All Locations</option>
                        </select>
                    </div>
                    <div>
                        <label for="model" class="text-xs ml-2 text-title">Model</label>
                        <select id="model" class="w-full px-3 border border-none text-title text-xxs rounded mb-3 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;">
                            <option value="">Select Model</option>
                        </select>
                    </div>
                    <div>
                        <label for="vehicle-type" class="text-xs ml-2 text-title">Type</label>
                        <select id="vehicle-type" class="w-full px-3 border border-none text-title text-xxs rounded mb-3 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;">
                            <option value="">Select Type</option>
                        </select>
                    </div>
                    <div>
                        <label for="price" class="text-xs ml-2 text-title">Price OTR</label>
                        <input type="text" id="price" placeholder="Price OTR" class="px-3 border border-none text-title text-xxs rounded mb-2 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                    </div>
                    <div>
                        <label for="tenor" class="text-xs ml-2 text-title">Tenor</label>
                        <select id="tenor" class="w-full px-3 border border-none text-title text-xxs rounded mb-3 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;">
                            <option value="">Select Tenor</option>
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                        </select>
                    </div>
                    <div>
                        <label for="down-payment" class="text-xs ml-2 text-title">Down Payment</label>
                        <input type="text" id="down-payment" placeholder="Down Payment" class="px-3 border border-none text-title text-xxs rounded mb-2 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                    </div>
                </div>
                <div class="flex justify-start items-center gap-3 mb-3">
                    <label class="custom-checkbox mt-1">
                        <input type="checkbox" id="authorize" />
                        <span class="checkmark"></span>
                    </label>
                    <div class="flex items-start gap-2 ">
                        <label for="authorize" class="checkmart text-xxs font-light text-tnc">I authorize BYD and its partners to contact me to assist in the process of purchasing a BYD car. By providing my email and mobile number, I have agreed to receive all notifications via BYD.</label>
                    </div>
                </div>
                <button type="submit" style="background-color: #068774;" class="w-full py-2 text-xxs font-medium text-white bg-blue-700 mb-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Count Estimate</button>
                <div class="text-xxs text-gray-500 mb-4 ml-2 font-light">The calculator is a simulation an is not the final price</div>
                <label for="installements" class="text-xs ml-2">Monthly Installements</label>
                <textarea rows="2" id="installements" class="px-3 border border-none text-gray-900 text-xxs rounded mb-2 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;"></textarea>
            </div>
        </form>
    </div>
</div>

<script>
    const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')

    const getLocation = async (on) => {
        try {
            const response = await fetch(`${BASE_URL}/product-location`);
            const data = await response.json();
            if (data?.data?.length > 0) {
                const select = document.querySelector('select#location')
                const sortData = data.data.sort((a, b) => a.location.localeCompare(b.location))
                sortData.forEach((location, i) => {
                    const option = document.createElement('option')
                    option.value = location?.id
                    option.innerHTML = location?.location
                    select.append(option)
                });
            }
        } catch (error) {
            console.log(error);
        }
    };
    const getModel = async () => {
        try {
            const response = await fetch(`${BASE_URL}/product-model?page=1&limit=100&sort_by=created_at&sort_order=asc`);
            const data = await response.json();

            if (data?.data?.length > 0) {
                const selectModelCar = document.querySelector('#model')
                const optionDefault = document.createElement('option')
                data.data.sort((a, b) => a.model.localeCompare(b.model)).forEach(element => {
                    const option = document.createElement('option')
                    option.value = element.id
                    option.innerHTML = element.model
                    selectModelCar.appendChild(option)
                });
                selectModelCar.addEventListener('change', (event) => {
                    if (event.target.value) {
                        getType(event.target.value)
                    }
                })
            }
        } catch (error) {
            console.log(error);
        }
    };

    const getType = async (id) => {
        const selectTypeCar = document.querySelector('#vehicle-type')
        selectTypeCar.innerHTML = ""
        const optionDefault = document.createElement('option')
        optionDefault.innerHTML = "Select Type"
        optionDefault.value = ""

        try {
            const response = await fetch(`${BASE_URL}/product?product_model_id=${id}`);
            const data = await response.json();

            if (data?.data?.length > 0) {
                selectTypeCar.appendChild(optionDefault)
                data.data.sort((a, b) => a.product_name.localeCompare(b.product_name)).forEach(element => {
                    const option = document.createElement('option')
                    option.value = element.id
                    option.innerHTML = element.product_name
                    selectTypeCar.appendChild(option)
                });
            }
        } catch (error) {
            console.log(error);
        }
    }
    getLocation()
    getModel()
</script>