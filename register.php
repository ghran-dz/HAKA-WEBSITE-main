<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAKA BYD</title>
    <link rel="icon" type="image/x-icon" href="fav/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="fav/site.webmanifest">
    <link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Dealer BYD (Haka Motors) Jelajahi masa depan mobilitas dengan BYD, pilihan terbaik untuk kendaraan listrik yang menggabungkan kinerja unggul dengan desain yang ">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: false, // Disable dark mode
            theme: {
                extend: {
                    fontSize: {
                        'xxs': '10px', // Add custom font size 10px
                    },
                    colors: {
                        clifford: '#da373d',
                        customGreen: '#62D0B0',
                        customTeal: '#268EA0',
                        title: "#464545",
                        bigTitle: 'rgba(70, 69, 69, 0.12)',
                        secondary: "#33333399",
                        date: "#5D5D5D",
                        description: "#3E3A3A",
                        grayService: "#7D7D7D",
                        product: "#DBFFFA",
                        form: "#A4A4A6",
                        tnc: "#5E5E5E",
                        specTitle: "#EFEFEF",
                        formInput: "#E9E9E9",
                    }
                }
            },
            // plugins: [require("@tailwindcss/forms")],
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        /* Hide the default checkbox */
        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
        }

        /* Create a custom checkbox */
        .custom-checkbox .checkmark {
            width: 20px;
            height: 20px;
            background-color: #e0e0e0;
            /* Light gray background */
            border: 2px solid #d1d1d1;
            /* Light gray border */
            border-radius: 6px;
            /* Rounded corners */
            display: inline-block;
            cursor: pointer;
            position: relative;
        }

        /* Change background color when checkbox is checked */
        .custom-checkbox input[type="checkbox"]:checked+.checkmark {
            background-color: #575D69;
            /* Darker background when checked */
            border-color: #575D69;
            /* Change border color when checked */
        }

        /* Optional: Style the checkmark inside the checkbox */
        .custom-checkbox .checkmark::after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        /* Show the checkmark when checkbox is checked */
        .custom-checkbox input[type="checkbox"]:checked+.checkmark::after {
            display: block;
        }

        .kanit {
            font-family: "Kanit", sans-serif;
            /* font-style: italic; */
        }

        .text-title {
            color: #464545;
        }

        .text-xxs {
            font-size: 10px;
        }

        .bg-form-input {
            background: #E9E9E9;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pathname = window.location.pathname;
            const token = window.localStorage.getItem('token')
            const stringUser = window.localStorage.getItem('haka-user')
            const user = stringUser ? JSON.parse(stringUser) : null

            if (token && user?.id) {
                window.location.href = 'index'
            }
        });
    </script>

</head>

<body>
    <div class="w-full p-5">
        <a href="index" class="w-full flex justify-end mb-4 sm:hidden">
            <img src="images/haka-auto.png" alt="haka auto" class="w-28" />
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="relative mb-4 sm:pt-[4.5rem] sm:mb-0 lg:pt-0">
                <div class="absolute top-28 left-0 w-full flex justify-center">
                    <img src="images/login/byd-seal.png" alt="byd-seal" class="w-3/5" />
                </div>
                <img src="images/login/login_slide_1.png" alt="login image" class="rounded-lg object-contain" />
            </div>
            <form id="registerForm" onsubmit="return handleRegister(event);">
                <a href="index" class="w-full hidden justify-end sm:flex">
                    <img src="images/haka-auto.png" alt="haka auto" class="w-28" />
                </a>
                <div class="sm:p-10 lg:p-20 lg:mr-5">
                    <img src="images/login/create-an-account.png" alt="please login" class="mb-4 w-3/5" />
                    <div class="text-xs text-gray-500 mb-7 font-semibold">Already have an acoount ? <a href="login"><strong>Login</strong></a></div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                        <div>
                            <label for="firstName" id="firstName-label" class="ml-2 mb-1 kanit text-title text-sm font-base">First Name</label>
                            <div class="mb-5 mt-3">
                                <input type="text" id="firstName" class="w-full h-10 border border-none text-black text-sm italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-form-input" />
                                <div id="firstName-error" class="ml-2 text-red-500 hidden kanit text-xxs">First name is required</div>
                            </div>
                        </div>
                        <div>
                            <label for="lastName" id="lastName-label" class="ml-2 mb-1 kanit text-title text-sm font-base">Last Name</label>
                            <div class="mb-5 mt-3">
                                <input type="text" id="lastName" class="w-full h-10 border border-none text-black text-sm italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-form-input" />
                                <div id="lastName-error" class="ml-2 text-red-500 hidden kanit text-xxs">Last name is required</div>
                            </div>
                        </div>
                        <div>
                            <label for="email" id="email-label" class="ml-2 mb-1 kanit text-title text-sm font-base">Email</label>
                            <div class="mb-5 mt-3">
                                <input type="text" id="email" class="w-full h-10 border border-none text-black text-sm italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-form-input" />
                                <div id="email-error" class="ml-2 text-red-500 hidden kanit text-xxs">Email is required</div>
                            </div>
                        </div>
                        <div>
                            <label for="phoneNumber" id="phoneNumber-label" class="ml-2 mb-1 kanit text-title text-sm font-base">Phone Number</label>
                            <div class="mb-5 mt-3">
                                <input type="tel" id="phoneNumber" class="w-full h-10 border border-none text-black text-sm italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-form-input" />
                                <div id="phoneNumber-error" class="ml-2 text-red-500 hidden kanit text-xxs">Phone number is required</div>
                            </div>
                        </div>
                    </div>
                    <label for="password" id="password-label" class="ml-2 mb-1 kanit text-sm font-base">Password</label>
                    <div class="mb-6 mt-4">
                        <div class="relative">
                            <input type="password" id="password" class="pl-3 pr-12 border border-none text-black text-xs rounded focus:!ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-2.5 dark:bg-form-input dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0" />
                            <div class="w-10 h-full absolute right-0 top-0 flex items-center">
                                <svg id="hide-password" class="eye-icon w-5 h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm9.4 130.3C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5l-41.9-33zM192 256c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5z" />
                                </svg>
                                <svg id="show-password" class="eye-icon hidden w-5 h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                </svg>
                            </div>
                        </div>
                        <div id="password-wording" class="ml-2 text-title font-light kanit text-xxs">Please enter atleast 8 character with number, symbol, small and capital letter</div>
                        <div id="password-error" class="ml-2 text-red-500 hidden hidden kanit text-xxs">Password is required</div>
                    </div>
                    <div class="flex justify-start items-center mb-6 gap-3">
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox" id="authorize" />
                            <span class="checkmark"></span>
                        </label>
                        <div class="flex items-start gap-2 ">
                            <label for="authorize" id="authorize-label" class="checkmart text-xs font-light text-tnc kanit">I agree with the Therm & Conditions</label>
                        </div>
                    </div>
                    <button type="submit" style="background-color: #068774;" class="w-full py-2.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modal-success-register" class="hidden inset-0 px-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
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
                <p class="text-sm text-gray-600 mt-3">Check your email for registration confirmation</p>

                <button id="close-success-modal" type="button" class="px-6 py-2.5 mt-8 w-full rounded-md text-white text-sm font-semibold tracking-wide border-none outline-none bg-green-500 hover:bg-green-600">Got
                    it</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('#hide-password').addEventListener('click', (event) => {
            document.querySelectorAll('.eye-icon').forEach(icon => icon.classList.remove('hidden'))
            document.querySelector('#hide-password').classList.add('hidden')
            document.querySelector('#password').setAttribute('type', 'text')
        })
        document.querySelector('#show-password').addEventListener('click', (event) => {
            document.querySelectorAll('.eye-icon').forEach(icon => icon.classList.remove('hidden'))
            document.querySelector('#show-password').classList.add('hidden')
            document.querySelector('#password').setAttribute('type', 'password')
        })

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
        const passwordLabel = document.querySelector('#password-label');
        const password = document.querySelector('#password');
        const passwordError = document.querySelector('#password-error');
        const passwordWording = document.querySelector('#password-wording');
        const terms = document.querySelector('#authorize');
        const termsLabel = document.querySelector('#authorize-label');

        firstName.addEventListener('change', (event) => {
            this.value = event.target.value
            firstNameLabel.classList.remove('text-red-500')
            firstNameLabel.classList.add('text-title')
            firstName.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            firstName.classList.add('border-none', 'bg-form-input', 'dark:bg-form-input')
            firstNameError.classList.add('hidden')
        })
        lastName.addEventListener('change', (event) => {
            this.value = event.target.value
            lastNameLabel.classList.remove('text-red-500')
            lastNameLabel.classList.add('text-title')
            lastName.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            lastName.classList.add('border-none', 'bg-form-input', 'dark:bg-form-input')
            lastNameError.classList.add('hidden')
        })
        email.addEventListener('change', (event) => {
            this.value = event.target.value
            emailLabel.classList.remove('text-red-500')
            emailLabel.classList.add('text-title')
            email.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            email.classList.add('border-none', 'bg-form-input', 'dark:bg-form-input')
            emailError.classList.add('hidden')
            emailError.innerHTML = 'Email is required'
        })
        phoneNumber.addEventListener('change', (event) => {
            this.value = event.target.value
            phoneNumberLabel.classList.remove('text-red-500')
            phoneNumberLabel.classList.add('text-title')
            phoneNumber.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            phoneNumber.classList.add('border-none', 'bg-form-input', 'dark:bg-form-input')
            phoneNumberError.classList.add('hidden')
            phoneNumberError.innerHTML = 'Phone number is required'
        })
        password.addEventListener('change', (event) => {
            this.value = event.target.value
            passwordLabel.classList.remove('text-red-500')
            passwordLabel.classList.add('text-title')
            password.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            password.classList.add('border-none', 'bg-form-input', 'dark:bg-form-input')
            passwordError.classList.add('hidden')
            passwordWording.classList.remove('hidden')
            passwordError.innerHTML = 'Password is required'
        })

        terms.addEventListener('change', (event) => {
            this.value = event.target.value
            termsLabel.classList.remove('text-red-500')
            termsLabel.classList.add('text-tnc')
        })

        const setFocus = (section) => {
            section.focus()
            // section.scrollIntoView({
            //     behavior: 'smoth'
            // })
        }

        function handleRegister(event) {
            event.preventDefault();

            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phoneNumberRegex = /^\+?(\d{1,3})?[-.\s]?(\(?\d{1,4}\)?)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,}$/;
            const isValidEmail = emailRegex.test(email.value);
            const isValidPhone = phoneNumberRegex.test(phoneNumber.value);
            const isValidPassword = passwordRegex.test(password.value);

            if (!firstName.value || !lastName.value || !isValidEmail || !isValidPhone || !password || !terms.checked) {
                let firstFocus = []
                if (!firstName.value) {
                    firstNameLabel.classList.remove('text-title')
                    firstNameLabel.classList.add('text-red-500')
                    firstName.classList.remove('border-none', 'bg-form-input', 'dark:bg-form-input')
                    firstName.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    firstNameError.classList.remove('hidden')
                    firstFocus.push(firstName)
                }

                if (!lastName.value) {
                    lastNameLabel.classList.remove('text-title')
                    lastNameLabel.classList.add('text-red-500')
                    lastName.classList.remove('border-none', 'bg-form-input', 'dark:bg-form-input')
                    lastName.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    lastNameError.classList.remove('hidden')
                    firstFocus.push(lastName)
                }

                if (!isValidEmail) {
                    emailLabel.classList.remove('text-title')
                    emailLabel.classList.add('text-red-500')
                    email.classList.remove('border-none', 'bg-form-input', 'dark:bg-form-input')
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
                    phoneNumber.classList.remove('border-none', 'bg-form-input', 'dark:bg-form-input')
                    phoneNumber.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    phoneNumberError.classList.remove('hidden')
                    phoneNumberError.classList.remove('hidden')
                    firstFocus.push(phoneNumber)
                    if (phoneNumber.value) {
                        phoneNumberError.innerHTML = 'Phone number is not valid'
                    }
                }

                if (!isValidPassword) {
                    passwordLabel.classList.remove('text-title')
                    passwordLabel.classList.add('text-red-500')
                    password.classList.remove('border-none', 'bg-form-input', 'dark:bg-form-input')
                    password.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    passwordWording.classList.add('hidden')
                    passwordError.classList.remove('hidden')
                    firstFocus.push(password)
                    if (password.value) {
                        passwordError.innerHTML = 'Password is not valid, Password must contain atleast 8 character with number, symbol, small and capital letter'
                    }
                }

                if (!terms.checked) {
                    termsLabel.classList.remove('text-tnc')
                    termsLabel.classList.add('text-red-500')
                }
                if (firstFocus?.length > 0) {
                    setFocus(firstFocus[0])
                }

            } else {

                const url = `https://cms.bydhaka.co.id/api/v1/register`
                const formData = {
                    first_name: firstName.value,
                    last_name: lastName.value,
                    email: email.value,
                    phone_number: phoneNumber.value,
                    password: password.value,
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
                        document.getElementById('modal-success-register').classList.add('fixed')
                        document.getElementById('modal-success-register').classList.remove('hidden')
                        document.getElementById('close-success-modal').addEventListener('click', () => {
                            document.getElementById('modal-success-register').classList.remove('fixed')
                            document.getElementById('modal-success-register').classList.add('hidden')
                            window.location.href = `login?username=${email.value}`
                        })
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
        }
    </script>

</body>