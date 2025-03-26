<div class="w-full bg-white mb-20 px-5 pt-20 sm:mb-20 lg:pr-24 lg:pl-20 lg:pt-32 lg:mb-[22.5rem] xl:mb-40">
    <div class="w-full flex flex-wrap">
        <div class="w-full mb-4 sm:mb-0 md:w-5/12">
            <img src="images/form-test-drive-image.png" alt="BYD HAKA AUTO test drive" class="w-full rounded-lg object-cover object-center h-auto" />
        </div>
        <form id="registerForm" onsubmit="return handleSubmit(event);" class="w-full md:w-6/12 py-3">
            <div class="sm:pl-14" style="font-family: 'Kanit', sans-serif;">
                <div class="font-black leading-3 mb-2 lg:text-4xl lg:max-w-xs">TEST DRIVE REQUEST FORM</div>
                <div class="text-xxs text-gray-500 mb-4">Experience Full Self-Driving (Supervised), Learn About Charging and Get AllYour Question Answered</div>

                <label for="fullName" id="fullName-label" class="text-xs ml-2 text-title">Full Name</label>
                <div class="mb-3 mt-1">
                    <input type="text" id="fullName" placeholder="Input your full name" autofocus class="text-xs px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div id="fullName-error" class="ml-2 text-red-500 hidden kanit text-xxs">Full name is required</div>
                </div>

                <label for="phoneNumber" id="phoneNumber-label" class="text-xs ml-2 text-title">Number Phone</label>
                <div class="mb-3 mt-1">
                    <input type="tel" id="phoneNumber" placeholder="Number phone" class="text-xs px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div id="phoneNumber-error" class="ml-2 text-red-500 hidden kanit text-xxs">Number phone is required</div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
                    <div>
                        <label for="cars" id="cars-label" class="text-xs ml-2 text-title">Cars Model</label>
                        <div class="mb-3 mt-1">
                            <select id="cars" class="w-full bg-formInput border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </select>
                            <div id="cars-error" class="ml-2 text-red-500 hidden kanit text-xxs">Cars model is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="branch" id="branch-label" class="text-xs ml-2 text-title">Select Branch</label>
                        <div class="mb-3 mt-1">
                            <select id="branch" class="w-full bg-formInput border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </select>
                            <div id="branch-error" class="ml-2 text-red-500 hidden kanit text-xxs">Branch is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="date" id="date-label" class="text-xs ml-2 text-title">Date</label>
                        <div class="mb-3 mt-1">
                            <input type="date" id="date" class="w-full bg-formInput border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <div id="date-error" class="ml-2 text-red-500 hidden kanit text-xxs">Date is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="time" id="time-label" class="mb-1 text-xs ml-2 text-title">Time</label>
                        <div class="mb-3 mt-1">
                            <input type="time" id="time" placeholder="10:00" class="w-full bg-formInput border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <div id="time-error" class="ml-2 text-red-500 hidden kanit text-xxs">Time is required</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-center gap-3 mb-3">
                    <label class="custom-checkbox mt-1">
                        <input type="checkbox" id="authorize" />
                        <span class="checkmark"></span>
                    </label>
                    <div class="flex items-start gap-2 ">
                        <label for="authorize" id="authorize-label" class="checkmart text-xxs font-light text-tnc">I authorize BYD and its partners to contact me to assist in the process of purchasing a BYD car. By providing my email and mobile number, I have agreed to receive all notifications via BYD.</label>
                    </div>
                </div>
                <button type="submit" style="background-color: #068774;" class="w-full py-2 text-xxs font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
</div>

<div id="modal-success-test-drive" class="hidden inset-0 px-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6 relative mx-auto text-center">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-20 h-20 fill-green-500 absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2" viewBox="0 0 60 60">
            <circle cx="30" cy="30" r="29" data-original="#5edd60" />
            <path fill="#fff"
                d="m24.262 42.07-6.8-6.642a1.534 1.534 0 0 1 0-2.2l2.255-2.2a1.621 1.621 0 0 1 2.256 0l4.048 3.957 11.353-17.26a1.617 1.617 0 0 1 2.2-.468l2.684 1.686a1.537 1.537 0 0 1 .479 2.154L29.294 41.541a3.3 3.3 0 0 1-5.032.529z"
                data-original="#ffffff" />
        </svg>

        <div class="mt-12">
            <h3 class="text-gray-800 text-2xl font-bold flex-1">Success</h3>
            <p class="text-sm text-gray-600 mt-3">The test drive request has been successfully sent, within 1 x 24 hours you will be contacted by our CS, greetings HAKA BYD </p>

            <button id="close-success-modal" type="button" class="px-6 py-2.5 mt-8 w-full rounded-md text-white text-sm font-semibold tracking-wide border-none outline-none bg-green-500 hover:bg-green-600">Ok</button>
        </div>
    </div>
</div>

<script>
    const fullNameLabel = document.querySelector('#fullName-label');
    const fullName = document.querySelector('#fullName');
    const fullNameError = document.querySelector('#fullName-error');
    const phoneNumberLabel = document.querySelector('#phoneNumber-label');
    const phoneNumber = document.querySelector('#phoneNumber');
    const phoneNumberError = document.querySelector('#phoneNumber-error');
    const carsLabel = document.querySelector('#cars-label');
    const cars = document.querySelector('#cars');
    const carsError = document.querySelector('#cars-error');
    const branchLabel = document.querySelector('#branch-label');
    const branch = document.querySelector('#branch');
    const branchError = document.querySelector('#branch-error');
    const dateLabel = document.querySelector('#date-label');
    const date = document.querySelector('#date');
    const dateError = document.querySelector('#date-error');
    const timeLabel = document.querySelector('#time-label');
    const time = document.querySelector('#time');
    const timeError = document.querySelector('#time-error');
    const terms = document.querySelector('#authorize');
    const termsLabel = document.querySelector('#authorize-label');
    const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')


    fullName.addEventListener('change', (event) => {
        this.value = event.target.value
        fullNameLabel.classList.remove('text-red-500')
        fullNameLabel.classList.add('text-title')
        fullName.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        fullName.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        fullNameError.classList.add('hidden')
    })
    phoneNumber.addEventListener('change', (event) => {
        this.value = event.target.value
        phoneNumberLabel.classList.remove('text-red-500')
        phoneNumberLabel.classList.add('text-title')
        phoneNumber.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        phoneNumber.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        phoneNumberError.classList.add('hidden')
        phoneNumberError.innerHTML = 'Phone number is required'
    })
    cars.addEventListener('change', (event) => {
        this.value = event.target.value
        carsLabel.classList.remove('text-red-500')
        carsLabel.classList.add('text-title')
        cars.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        cars.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        carsError.classList.add('hidden')
    })
    branch.addEventListener('change', (event) => {
        this.value = event.target.value
        branchLabel.classList.remove('text-red-500')
        branchLabel.classList.add('text-title')
        branch.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        branch.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        branchError.classList.add('hidden')
    })
    date.addEventListener('change', (event) => {
        this.value = event.target.value
        dateLabel.classList.remove('text-red-500')
        dateLabel.classList.add('text-title')
        date.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        date.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        dateError.classList.add('hidden')
    })
    time.addEventListener('change', (event) => {
        this.value = event.target.value
        timeLabel.classList.remove('text-red-500')
        timeLabel.classList.add('text-title')
        time.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        time.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        timeError.classList.add('hidden')
    })
    terms.addEventListener('change', (event) => {
        this.value = event.target.value
        termsLabel.classList.remove('text-red-500')
        termsLabel.classList.add('text-tnc')
    })

    const getBranch = async () => {
        try {
            let response = await fetch(`${BASE_URL}/branch`)
            const data = await response.json();

            if (data?.data?.length > 0) {
                const selectCars = document.querySelector('#branch')
                selectCars.innerHTML = ''
                const defaultOption = document.createElement('option')
                defaultOption.value = ""
                defaultOption.innerHTML = "Pilih Branch"
                selectCars.appendChild(defaultOption)
                data.data.forEach(branch => {
                    const option = document.createElement('option')
                    option.value = branch.id
                    option.innerHTML = branch.branch_name
                    selectCars.appendChild(option)
                });
            }

        } catch (error) {

        }
    }
    const getProduct = async () => {
        try {
            let response = await fetch(`${BASE_URL}/product`)
            const data = await response.json();

            if (data?.data?.length > 0) {
                const selectCars = document.querySelector('#cars')
                selectCars.innerHTML = ''
                const defaultOption = document.createElement('option')
                defaultOption.classList.add('text-gray-400')
                defaultOption.value = ""
                defaultOption.innerHTML = "Select Cars"
                selectCars.appendChild(defaultOption)
                data.data.forEach(branch => {
                    const option = document.createElement('option')
                    option.value = branch.id
                    option.innerHTML = branch.product_name
                    selectCars.appendChild(option)
                });
            }

        } catch (error) {

        }
    }
    getProduct()
    getBranch()

    const setFocus = (section) => {
        section.focus()
        // section.scrollIntoView({
        //     behavior: 'smoth'
        // })
    }

    function handleSubmit(event) {
        event.preventDefault();
        const isValidPhone = phoneNumberRegex.test(phoneNumber.value);

        if (!fullName.value || !isValidPhone || !cars.value || !branch.value || formatDateYYYYMMDD(date.value).includes('NaN') || !time.value || !terms.checked) {
            let firstFocus = []
            if (!fullName.value) {
                fullNameLabel.classList.remove('text-title')
                fullNameLabel.classList.add('text-red-500')
                fullName.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                fullName.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                fullNameError.classList.remove('hidden')
                firstFocus.push(fullName)
            }

            if (!isValidPhone) {
                phoneNumberLabel.classList.remove('text-title')
                phoneNumberLabel.classList.add('text-red-500')
                phoneNumber.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                phoneNumber.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                phoneNumberError.classList.remove('hidden')
                firstFocus.push(phoneNumber)
                if (phoneNumber.value) {
                    phoneNumberError.innerHTML = 'Phone number is not valid'
                }
            }
            if (!cars.value) {
                carsLabel.classList.remove('text-title')
                carsLabel.classList.add('text-red-500')
                cars.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                cars.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                carsError.classList.remove('hidden')
                firstFocus.push(cars)
            }
            if (!branch.value) {
                branchLabel.classList.remove('text-title')
                branchLabel.classList.add('text-red-500')
                branch.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                branch.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                branchError.classList.remove('hidden')
                firstFocus.push(branch)
            }
            if (!date.value) {
                dateLabel.classList.remove('text-title')
                dateLabel.classList.add('text-red-500')
                date.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                date.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                dateError.classList.remove('hidden')
                firstFocus.push(date)

            }
            if (!time.value) {
                timeLabel.classList.remove('text-title')
                timeLabel.classList.add('text-red-500')
                time.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                time.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                timeError.classList.remove('hidden')
                firstFocus.push(time)

            }
            if (!terms.checked) {
                termsLabel.classList.remove('text-tnc')
                termsLabel.classList.add('text-red-500')
            }
            if (firstFocus?.length > 0) {
                setFocus(firstFocus[0])
            }

        } else {
            const url = `${BASE_URL}/test-drive`
            const formData = {
                full_name: fullName.value,
                phone_number: phoneNumber.value,
                product_id: cars.value,
                branch_id: branch.value,
                test_date: formatDateYYYYMMDD(date.value),
                test_time: time.value,
            };
            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            };

            fetch(url, options)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    document.getElementById('modal-success-test-drive').classList.add('fixed')
                    document.getElementById('modal-success-test-drive').classList.remove('hidden')
                    document.getElementById('close-success-modal').addEventListener('click', () => {
                        document.getElementById('modal-success-test-drive').classList.remove('fixed')
                        document.getElementById('modal-success-test-drive').classList.add('hidden')
                        fullName.value = ""
                        phoneNumber.value = ""
                        cars.value = ''
                        branch.value = ''
                        date.value = ''
                        time.value = ''
                        terms.checked = false
                    })
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    }
</script>