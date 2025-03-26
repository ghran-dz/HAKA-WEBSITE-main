<div class="w-full min-w-80 bg-white mb-20 px-5 pt-20 sm:mb-20 sm:pr-14 sm:pl-10 lg:pr-24 lg:pl-20 lg:pt-32 lg:mb-[14rem] xl:mb-40">
    <div class="w-full flex flex-wrap">
        <div class="w-full mb-4 sm:mb-0 md:w-5/12">
            <img src="images/form-service-image.png" alt="login image" class="w-full rounded-lg object-cover object-center" />
        </div>
        <form id="registerForm" onsubmit="return submmitBookingService(event);" class="w-full sm:w-6/12">
            <div class="block h-full sm:pl-10" style="font-family: 'Kanit', sans-serif;">
                <div class="font-black leading-3 lg:text-4xl">SERVICE</div>
                <div class="font-black leading-3 mb-1 lg:text-4xl">REQUEST FORM</div>
                <div class="text-xxs text-gray-500 mb-2">Experience Full Self-Driving (Supervised), Learn About Charging and Get AllYour Question Answered</div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                    <div>
                        <label for="firstName" id="firstName-label" class="text-xs ml-2 text-title">First Name</label>
                        <div class="mb-2 mt-1">
                            <input type="text" id="firstName" placeholder="Input your first name" autofocus class="px-3 border border-none text-title text-xs rounded focus:!ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="firstName-error" class="ml-2 text-red-500 hidden kanit text-xxs">First name is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="lastName" id="lastName-label" class="text-xs ml-2 text-title">Last Name</label>
                        <div class="mb-2 mt-1">
                            <input type="text" id="lastName" placeholder="Input your last name" autofocus class="px-3 border border-none text-title text-xs rounded focus:!ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="lastName-error" class="ml-2 text-red-500 hidden kanit text-xxs">Last name is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="email" id="email-label" class="text-xs ml-2 text-title">Email Address</label>
                        <div class="mb-2 mt-1">
                            <input type="text" id="email" placeholder="Input your name" class="px-3 border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="email-error" class="ml-2 text-red-500 hidden kanit text-xxs">Email address is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="phoneNumber" id="phoneNumber-label" class="text-xs ml-2 text-title">Phone Number</label>
                        <div class="mb-2 mt-1">
                            <input type="tel" id="phoneNumber" placeholder="Number phone" class="px-3 border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="phoneNumber-error" class="ml-2 text-red-500 hidden kanit text-xxs">Phone number is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="model" id="model-label" class="text-xs ml-2 text-title">Car Model</label>
                        <div class="mb-3 mt-1">
                            <select id="model" placeholder="Select Model" class="w-full border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput">
                            </select>
                            <div id="model-error" class="ml-2 text-red-500 hidden kanit text-xxs">Car model is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="branch" id="branch-label" class="text-xs ml-2 text-title">Branch</label>
                        <div class="mb-3 mt-1">
                            <select id="branch" placeholder="Select Branch" class="w-full border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput">
                            </select>
                            <div id="branch-error" class="ml-2 text-red-500 hidden kanit text-xxs">Branch is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="date" id="date-label" class="text-xs ml-2 text-title">Date</label>
                        <div class="mb-2 mt-1">
                            <input type="date" id="date" placeholder="dd/mm/yyyy" class="w-full  px-3 border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="date-error" class="ml-2 text-red-500 hidden kanit text-xxs">Date is required</div>
                        </div>
                    </div>
                    <div>
                        <label for="time" id="time-label" class="mb-1 text-xs ml-2 text-title">Time</label>
                        <div class="mb-2 mt-1">
                            <input type="time" id="time" placeholder="00:00" class="w-full  px-3 border border-none text-title text-xs italic rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput" />
                            <div id="time-error" class="ml-2 text-red-500 hidden kanit text-xxs">Date is required</div>
                        </div>
                    </div>
                </div>
                <label for="problem" id="problem-label" class="text-xs ml-2 text-title">Car Problem</label>
                <div class="mt-1 mb-4">
                    <textarea rows="5" id="problem" class=" px-3 border border-none text-title text-xs rounded focus:ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-1.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-formInput"></textarea>
                    <div id="problem-error" class="ml-2 text-red-500 hidden kanit text-xxs mb-2">Problem is required</div>
                </div>
                <div class="flex justify-start items-center gap-3 mb-4">
                    <label class="custom-checkbox">
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

<div id="modal-success-service" class="hidden inset-0 px-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
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
            <p class="text-sm text-gray-600 mt-3">Your booking request has been successfully submitted. Thank you for choosing HAKA BYD. Our team will contact you shortly to confirm your service appointment.</p>

            <button id="close-success-modal" type="button" class="px-6 py-2.5 mt-8 w-full rounded-md text-white text-sm font-semibold tracking-wide border-none outline-none bg-green-500 hover:bg-green-600">Ok</button>
        </div>
    </div>
</div>


<script>
    const firstNameLabel = document.querySelector('#firstName-label');
    const firstName = document.querySelector('#firstName');
    const firstNameError = document.querySelector('#firstName-error');
    const lastNameLabel = document.querySelector('#lastName-label');
    const lastName = document.querySelector('#lastName');
    const lastNameError = document.querySelector('#lastName-error');
    const emailLabel = document.querySelector('#email-label');
    const email = document.querySelector('#email');
    const emailError = document.querySelector('#email-error');
    const phoneNumberLabel = document.querySelector('#phoneNumber-label');
    const phoneNumber = document.querySelector('#phoneNumber');
    const phoneNumberError = document.querySelector('#phoneNumber-error');
    const modelLabel = document.querySelector('#model-label');
    const model = document.querySelector('#model');
    const modelError = document.querySelector('#model-error');
    const branchLabel = document.querySelector('#branch-label');
    const branch = document.querySelector('#branch');
    const branchError = document.querySelector('#branch-error');
    const dateLabel = document.querySelector('#date-label');
    const date = document.querySelector('#date');
    const dateError = document.querySelector('#date-error');
    const timeLabel = document.querySelector('#time-label');
    const time = document.querySelector('#time');
    const timeError = document.querySelector('#time-error');
    const problemLabel = document.querySelector('#problem-label');
    const problem = document.querySelector('#problem');
    const problemError = document.querySelector('#problem-error');
    const terms = document.querySelector('#authorize');
    const termsLabel = document.querySelector('#authorize-label');

    firstName.addEventListener('change', (event) => {
        this.value = event.target.value
        firstNameLabel.classList.remove('text-red-500')
        firstNameLabel.classList.add('text-title')
        firstName.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        firstName.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        firstNameError.classList.add('hidden')
    })
    lastName.addEventListener('change', (event) => {
        this.value = event.target.value
        lastNameLabel.classList.remove('text-red-500')
        lastNameLabel.classList.add('text-title')
        lastName.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        lastName.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        lastNameError.classList.add('hidden')
    })
    email.addEventListener('change', (event) => {
        this.value = event.target.value
        emailLabel.classList.remove('text-red-500')
        emailLabel.classList.add('text-title')
        email.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        email.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        emailError.classList.add('hidden')
        emailError.innerHTML = 'Email is required'
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
    model.addEventListener('change', (event) => {
        this.value = event.target.value
        modelLabel.classList.remove('text-red-500')
        modelLabel.classList.add('text-title')
        model.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        model.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        modelError.classList.add('hidden')
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
    problem.addEventListener('change', (event) => {
        this.value = event.target.value
        problemLabel.classList.remove('text-red-500')
        problemLabel.classList.add('text-title')
        problem.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
        problem.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
        problemError.classList.add('hidden')
    })
    terms.addEventListener('change', (event) => {
        this.value = event.target.value
        termsLabel.classList.remove('text-red-500')
        termsLabel.classList.add('text-tnc')
    })

    const getProduct = async () => {
        try {
            const response = await fetch(`https://cms.bydhaka.co.id/api/v1/product`);
            const data = await response.json();

            if (data?.data?.length > 0) {
                const selectTypeCar = document.querySelector('#model')
                const optionDefault = document.createElement('option')
                optionDefault.value = ""
                optionDefault.innerHTML = "Select Model"
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
            const response = await fetch('https://cms.bydhaka.co.id/api/v1/branch');
            const data = await response.json();
            if (data?.data?.length > 0) {
                const dealer = document.querySelector('#branch')
                const optionDefault = document.createElement('option')
                optionDefault.value = ""
                optionDefault.innerHTML = "Select Branch"
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

    function submmitBookingService(event) {
        event.preventDefault(); 

        const isValidEmail = emailRegex.test(email.value);
        const isValidPhone = phoneNumberRegex.test(phoneNumber.value);

        if (!firstName.value || !lastName.value || !isValidEmail || !isValidPhone || !model.value || !branch.value || formatDateYYYYMMDD(date.value).includes('NaN') || !time.value || !problem.value || !terms.checked) {
            let firstFocus = []
            if (!firstName.value) {
                firstNameLabel.classList.remove('text-title')
                firstNameLabel.classList.add('text-red-500')
                firstName.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                firstName.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                firstNameError.classList.remove('hidden')
                firstFocus.push(firstName)
            }

            if (!lastName.value) {
                lastNameLabel.classList.remove('text-title')
                lastNameLabel.classList.add('text-red-500')
                lastName.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                lastName.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                lastNameError.classList.remove('hidden')
                firstFocus.push(lastName)
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
            if (!problem.value) {
                problemLabel.classList.remove('text-title')
                problemLabel.classList.add('text-red-500')
                problem.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                problem.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                problemError.classList.remove('hidden')
                firstFocus.push(problem)

            }

            if (!terms.checked) {
                termsLabel.classList.remove('text-tnc')
                termsLabel.classList.add('text-red-500')
            }
            if (firstFocus?.length > 0) {
                setFocus(firstFocus[0])
            }

        } else {
            const url = `https://cms.bydhaka.co.id/api/v1/booking-service`
            const formData = {
                first_name: firstName.value,
                last_name: lastName.value,
                email: email.value,
                phone_number: phoneNumber.value,
                product_id: model.value,
                branch_id: branch.value,
                service_date: formatDateYYYYMMDD(date.value),
                service_time: time.value,
                problem: problem.value
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
                    document.getElementById('modal-success-service').classList.add('fixed')
                    document.getElementById('modal-success-service').classList.remove('hidden')
                    document.getElementById('close-success-modal').addEventListener('click', () => {
                        document.getElementById('modal-success-service').classList.remove('fixed')
                        document.getElementById('modal-success-service').classList.add('hidden')
                        firstName.value = ""
                        lastName.value = ""
                        phoneNumber.value = ""
                        email.value = ''
                        model.value = ''
                        branch.value = ''
                        date.value = ''
                        time.value = ''
                        problem.value = ''
                        terms.checked = false

                    })
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    }
</script>