<div class="w-full bg-white mb-20 px-5 pt-20 sm:mb-20 sm:pr-14 sm:pl-10 lg:pr-24 lg:pl-20 lg:pt-32 lg:mb-[14rem] xl:mb-40">
    <div class="w-full flex flex-wrap">
        <div class="w-full mb-4 sm:w-5/12 sm:mb-0">
            <img src="images/form-inquiry-image.png" alt="BYD HAKA AUTO incuiri consultation" class="w-full rounded-lg object-cover object-center" />
        </div>
        <form id="registerForm" onsubmit="return submitQuiry(event);" class="w-full sm:w-6/12 py-3">
            <div class="block h-full sm:pl-10" style="font-family: 'Kanit', sans-serif;">
                <div class="text-gray-600 font-black leading-3 lg:text-4xl">INQUIRY</div>
                <div class="text-gray-600 font-black leading-3 mb-2 lg:text-4xl">CONSULTATION</div>
                <div class="text-xxs text-gray-500 mb-4 sm:mb-10">Please fill in your personal data in the form below so you can consult with us.</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
                    <div>
                        <label for="name" id="name-label" class="text-xs ml-2 text-title">Name</label>
                        <div class="mb-4 mt-1">
                            <input type="text" id="name" placeholder="Input your name" class="px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <div id="name-error" class="ml-2 text-red-500 hidden kanit text-xxs">Name is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="email" id="email-label" class="text-xs ml-2 text-title">Email</label>
                        <div class="mb-4 mt-1">
                            <input type="text" id="email" placeholder="Input your email" class="px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <div id="email-error" class="ml-2 text-red-500 hidden kanit text-xxs">Email is required</div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="phone" id="phone-label" class="text-xs ml-2 text-title">Number Phone</label>
                    <div class="mb-4 mt-1">
                        <input type="text" id="phone" placeholder="Input your phone number" class="px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <div id="phone-error" class="ml-2 text-red-500 hidden kanit text-xxs">Number phone is required</div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                    <div>
                        <label for="type-cars" id="type-cars-label" class="text-xs ml-2 text-title">Type Cars</label>
                        <div class="mb-4 mt-1">
                            <select id="type-cars" class="w-full px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </select>
                            <div id="type-cars-error" class="ml-2 text-red-500 hidden kanit text-xxs">Type Cars is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="dealer" id="dealer-label" class="text-xs ml-2 text-title">Dealer</label>
                        <div class="mb-4 mt-1">
                            <select id="dealer" class="w-full px-3 bg-formInput border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </select>
                            <div id="dealer-error" class="ml-2 text-red-500 hidden kanit text-xxs">Dealer is required</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-xs ml-2 text-title">Payment</label>
                        <div class="mt-2 flex justify-start items-center gap-5">
                            <div class="flex items-center gap-2">
                                <input type="radio" id="cash" class="payment" value="cash" checked />
                                <label for="cash" class="text-xxs font-light">Cash</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="credit" class="payment" value="credit" />
                                <label for="credit" class="text-xxs font-light">Credit</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="payment" class="text-xs ml-2">Information Product</label>
                        <div class="mt-2 flex justify-start items-center gap-5">
                            <div class="flex items-center gap-2">
                                <input type="radio" id="yes" class="information-product" value="1" checked />
                                <label for="yes" class="text-xxs font-light">Ya</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="no" class="information-product" value="0" />
                                <label for="no" class="text-xxs font-light">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                    <div class="mt-4">
                        <label for="payment" class="text-xs ml-2">Estimated time of car purchase</label>
                        <div class="mt-2 flex justify-start items-center gap-5">
                            <div class="flex items-center gap-2">
                                <input type="radio" id="estimate-3" class="estimated-time" value="0-3 Month" checked />
                                <label for="estimate-3" class="text-xxs font-light">0-3 Month</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="estimate-6" class="estimated-time" value="0-6 Month" />
                                <label for="estimate-6" class="text-xxs font-light">0-6 Month</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="estimate-12" class="estimated-time" value="0-12 Month" />
                                <label for="estimate-12" class="text-xxs font-light">0-12 Month</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-xs ml-2">Check</label>
                        <!-- <div class="mt-2 flex justify-start items-center gap-5">
                            <div class="flex items-start gap-2">
                                <input type="radio" id="authorizer" />
                                <label for="authorize" id="authorize-label" class="text-xxs font-light">I authorize BYD and its partners to contact me to assist in the process of purchasing. By providing my email and mobile number, I agree to receive all notifications via these contact details.</label>
                            </div>
                        </div> -->
                        <div class="flex justify-start items-center gap-3 mb-3">
                            <label class="custom-checkbox mt-1">
                                <input type="checkbox" id="authorize" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="flex items-start gap-2 ">
                                <label for="authorize" id="authorize-label" class="checkmart text-xxs font-light text-tnc select-none">I authorize BYD and its partners to contact me to assist in the process of purchasing. By providing my email and mobile number, I agree to receive all notifications via these contact details.</label>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit" style="background-color: #068774;" class="w-full py-2 text-xxs font-medium text-white bg-blue-700 mt-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply Request</button>
            </div>
        </form>
    </div>
</div>

<div id="modal-success-inquiry" class="hidden inset-0 px-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6 relative mx-auto text-center">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-20 h-20 fill-green-500 absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2" viewBox="0 0 60 60">
            <circle cx="30" cy="30" r="29" data-original="#5edd60" />
            <path fill="#fff"
                d="m24.262 42.07-6.8-6.642a1.534 1.534 0 0 1 0-2.2l2.255-2.2a1.621 1.621 0 0 1 2.256 0l4.048 3.957 11.353-17.26a1.617 1.617 0 0 1 2.2-.468l2.684 1.686a1.537 1.537 0 0 1 .479 2.154L29.294 41.541a3.3 3.3 0 0 1-5.032.529z"
                data-original="#ffffff" />
        </svg>

        <div class="my-12">
            <h3 class="text-gray-800 text-2xl font-bold flex-1">Success</h3>
            <p class="text-sm text-gray-600 mt-3">Thank you! Your inquiry has been successfully submitted. Our team at Haka BYD will review your request and get back to you shortly.</p>

            <button id="close-success-modal" type="button" class="px-6 py-2.5 mt-8 w-full rounded-md text-white text-sm font-semibold tracking-wide border-none outline-none bg-green-500 hover:bg-green-600">Ok</button>
        </div>
    </div>
</div>

<script>
    const nameLabel = document.querySelector('#name-label');
    const name = document.querySelector('#name');
    const nameError = document.querySelector('#name-error');
    const emailLabel = document.querySelector('#email-label');
    const email = document.querySelector('#email');
    const emailError = document.querySelector('#email-error');
    const phoneNumberLabel = document.querySelector('#phone-label');
    const phoneNumber = document.querySelector('#phone');
    const phoneNumberError = document.querySelector('#phone-error');
    const modelLabel = document.querySelector('#type-cars-label');
    const model = document.querySelector('#type-cars');
    const modelError = document.querySelector('#type-cars-error');
    const dealerLabel = document.querySelector('#dealer-label');
    const dealer = document.querySelector('#dealer');
    const dealerError = document.querySelector('#dealer-error');
    const terms = document.querySelector('#authorize');
    const termsLabel = document.querySelector('#authorize-label');
    const payments = document.querySelectorAll('.payment');
    const informatonProducts = document.querySelectorAll('.information-product');
    const estimatedTimes = document.querySelectorAll('.estimated-time');
    const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')


    payments.forEach(rPayment => {
        rPayment.addEventListener('change', (event) => {
            payments.forEach(e => e.checked = false);
            event.target.checked = true;
        });
    });

    informatonProducts.forEach(rInfo => {
        rInfo.addEventListener('change', (event) => {
            informatonProducts.forEach(e => e.checked = false);
            event.target.checked = true;
        });
    });

    estimatedTimes.forEach(rEstimate => {
        rEstimate.addEventListener('change', (event) => {
            estimatedTimes.forEach(e => e.checked = false);
            event.target.checked = true;
        });
    });

    name.addEventListener('change', (event) => {
        this.value = event.target.value
        nameLabel.classList.remove('text-red-500')
        nameLabel.classList.add('text-title')
        name.classList.remove('border-red-500', 'bg-red-100', "dark:bg-red-100")
        name.classList.add('border-none', 'bg-formInput', "dark:bg-formInput")
        nameError.classList.add('hidden')
    })
    email.addEventListener('change', (event) => {
        this.value = event.target.value
        emailLabel.classList.remove('text-red-500')
        emailLabel.classList.add('text-title')
        email.classList.remove('border-red-500', 'bg-red-100', "dark:bg-red-100")
        email.classList.add('border-none', 'bg-formInput', "dark:bg-formInput")
        emailError.classList.add('hidden')
        emailError.innerHTML = 'Email is required'
    })
    phoneNumber.addEventListener('change', (event) => {
        this.value = event.target.value
        phoneNumberLabel.classList.remove('text-red-500')
        phoneNumberLabel.classList.add('text-title')
        phoneNumber.classList.remove('border-red-500', 'bg-red-100', "dark:bg-red-100")
        phoneNumber.classList.add('border-none', 'bg-formInput', "dark:bg-formInput")
        phoneNumberError.classList.add('hidden')
        phoneNumberError.innerHTML = 'Phone number is required'
    })
    model.addEventListener('change', (event) => {
        this.value = event.target.value
        modelLabel.classList.remove('text-red-500')
        modelLabel.classList.add('text-title')
        model.classList.remove('border-red-500', 'bg-red-100', "dark:bg-red-100")
        model.classList.add('border-none', 'bg-formInput', "dark:bg-formInput")
        modelError.classList.add('hidden')
    })
    dealer.addEventListener('change', (event) => {
        this.value = event.target.value
        dealerLabel.classList.remove('text-red-500')
        dealerLabel.classList.add('text-title')
        dealer.classList.remove('border-red-500', 'bg-red-100', "dark:bg-red-100")
        dealer.classList.add('border-none', 'bg-formInput', "dark:bg-formInput")
        dealerError.classList.add('hidden')
    })
    terms.addEventListener('change', (event) => {
        this.value = event.target.value
        termsLabel.classList.remove('text-red-500')
        termsLabel.classList.add('text-tnc')
    })

    const getProduct = async () => {
        try {
            const response = await fetch(`${BASE_URL}/product`);
            const data = await response.json();

            if (data?.data?.length > 0) {
                const selectTypeCar = document.querySelector('#type-cars')
                const optionDefault = document.createElement('option')
                optionDefault.value = ""
                optionDefault.innerHTML = "Pilih Tipe"
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

    const getDealer = async (on) => {
        try {
            const response = await fetch(`${BASE_URL}/branch`);
            const data = await response.json();
            if (data?.data?.length > 0) {
                const dealer = document.querySelector('#dealer')
                const optionDefault = document.createElement('option')
                optionDefault.value = ""
                optionDefault.innerHTML = "Pilih Dealer"
                dealer.appendChild(optionDefault)
                const sortData = data.data.sort((a, b) => a.branch_name.localeCompare(b.branch_name))
                sortData.forEach((branch, i) => {
                    const option = document.createElement('option')
                    option.value = branch?.id
                    option.innerHTML = branch?.branch_name
                    dealer.append(option)
                });
            }
        } catch (error) {
            console.log(error);
        }
    };

    getProduct()
    getDealer()

    const setFocus = (section) => {
        section.focus()
        // section.scrollIntoView({
        //     behavior: 'smoth'
        // })
    }

    function submitQuiry(event) {
        event.preventDefault();

        const isValidEmail = emailRegex.test(email.value);
        const isValidPhone = phoneNumberRegex.test(phoneNumber.value);

        if (!name.value || !isValidEmail || !isValidPhone || !model.value || !dealer.value || !terms.checked) {
            let firstFocus = []
            if (!name.value) {
                nameLabel.classList.remove('text-title')
                nameLabel.classList.add('text-red-500')
                name.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                name.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                nameError.classList.remove('hidden')
                firstFocus.push(name)
            }

            if (!isValidEmail) {
                emailLabel.classList.remove('text-title')
                emailLabel.classList.add('text-red-500')
                email.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                email.classList.add('border-red-500', 'bg-red-100', 'dark:bg-red-100')
                emailError.classList.remove('hidden')
                firstFocus.push(email)
                if (email.value) {
                    emailError.innerHTML = 'Format email not valid'
                }
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

            if (!model.value) {
                modelLabel.classList.remove('text-title')
                modelLabel.classList.add('text-red-500')
                model.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                model.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                modelError.classList.remove('hidden')
                firstFocus.push(model)
            }
            if (!dealer.value) {
                dealerLabel.classList.remove('text-title')
                dealerLabel.classList.add('text-red-500')
                dealer.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                dealer.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                dealerError.classList.remove('hidden')
                firstFocus.push(dealer)
            }
            if (!terms.checked) {
                termsLabel.classList.remove('text-tnc')
                termsLabel.classList.add('text-red-500')
            }
            if (firstFocus?.length > 0) {
                setFocus(firstFocus[0])
            }
        } else {
            const checkedTypeCar = document.querySelector('#type-cars');
            const checkedDealer = document.querySelector('#dealer');
            const checkedPayments = document.querySelector('.payment:checked')
            const checkedInfoProducts = document.querySelector('.information-product:checked')
            const checkedEstimateTimes = document.querySelector('.estimated-time:checked')

            const url = `${BASE_URL}/v1/inquiry`
            const formData = {
                full_name: name.value,
                email: email.value,
                phone_number: phone.value,
                product_id: checkedTypeCar.value,
                branch_id: checkedDealer.value,
                payment_type: checkedPayments.value,
                information_product: checkedInfoProducts.value,
                estimated_time_purchase: checkedEstimateTimes.value,
            }

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
                    document.getElementById('modal-success-inquiry').classList.add('fixed')
                    document.getElementById('modal-success-inquiry').classList.remove('hidden')
                    document.getElementById('close-success-modal').addEventListener('click', () => {
                        document.getElementById('modal-success-inquiry').classList.remove('fixed')
                        document.getElementById('modal-success-inquiry').classList.add('hidden')
                        name.value = ""
                        email.value = ""
                        phoneNumber.value = ""
                        model.value = ''
                        dealer.value = ''
                        terms.checked = false

                    })
                })
                .catch((error) => {
                    console.error('Error:', error);
                });

        }
    }
</script>