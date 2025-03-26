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
                        secondary: "#333333",
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

            if(token && user?.id) {
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
                <img src="images/login//login_slide_1.png" alt="login image" class="rounded-lg" />
            </div>
            <form onsubmit="return handleLogin(event);">
                <a href="index" class="w-full hidden justify-end sm:flex">
                    <img src="images/haka-auto.png" alt="haka auto" class="w-28" />
                </a>
                <div class="sm:p-10 lg:p-20 lg:mr-5">
                    <img src="images/login/please-login.png" alt="please login" class="mb-4 w-4/5" />
                    <div class="text-xs text-title font-semibold kanit mb-5 lg:mb-14">Don't have an account ? <a href="register"><strong>Register</strong></a></div>
                    <label for="username" id="username-label" class="ml-2 mb-1 text-title text-sm kanit">Username</label>
                    <div class="mb-5 mt-3">
                        <input type="text" id="username" class="w-full h-10 border border-none text-title text-sm italic rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-form-input" />
                        <div id="username-error" class="ml-2 text-red-500 hidden kanit text-xxs">First name is required</div>
                    </div>
                    <label for="password" id="password-label" class="ml-2 mb-1 text-sm kanit text-title">Password</label>
                    <div class="mb-6 mt-4">
                        <div class="relative">
                            <input type="password" id="password" class="pl-3 pr-12 border border-none text-title text-xs rounded focus:!ring-blue-500 focus:border-transparent focus:ring-0 block w-full p-2.5 dark:bg-formInput dark:border-gray-600 dark:placeholder-gray-400 dark:text-title dark:focus:ring-blue-500 dark:focus:border-transparent focus:ring-0 bg-form-input" />
                            <div class="w-10 h-full absolute right-0 top-0 flex items-center">
                                <svg id="hide-password" class="eye-icon w-5 h-5 z-10 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm9.4 130.3C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5l-41.9-33zM192 256c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5z" />
                                </svg>
                                <svg id="show-password" class="eye-icon hidden w-5 h-5 z-10 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                </svg>
                            </div>
                        </div>
                        <div id="password-error" class="ml-2 text-red-500 hidden kanit text-xxs">Password is required</div>
                    </div>

                    <div class="flex justify-start items-center mb-7 gap-3">
                        <label class="custom-checkbox mt-2">
                            <input type="checkbox" id="authorize" />
                            <span class="checkmark"></span>
                        </label>
                        <div class="flex items-start gap-2 ">
                            <label for="authorize" id="authorize-label" class="checkmart text-xs font-light text-tnc">I agree with the Therm & Conditions</label>
                        </div>
                    </div>
                    <button id="login" type="submit" style="background-color: #068774;" class="w-full py-2.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                </div>
            </form>
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

        const queryString = window.location.search; // Get the query string from the URL
        const searchParams = new URLSearchParams(queryString);
        const paramsUsername = searchParams.get('username');
        const usernameLabel = document.querySelector('#username-label');
        const username = document.querySelector('#username');
        const usernameError = document.querySelector('#username-error');
        const passwordLabel = document.querySelector('#password-label');
        const password = document.querySelector('#password');
        const passwordError = document.querySelector('#password-error');
        const passwordWording = document.querySelector('#password-wording');
        const terms = document.querySelector('#authorize');
        const termsLabel = document.querySelector('#authorize-label');

        if (paramsUsername) {
            document.getElementById('username').value = paramsUsername
        }

        username.addEventListener('change', (event) => {
            this.value = event.target.value
            usernameLabel.classList.remove('text-red-500')
            usernameLabel.classList.add('text-title')
            username.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            username.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
            usernameError.classList.add('hidden')
        })
        password.addEventListener('change', (event) => {
            this.value = event.target.value
            passwordLabel.classList.remove('text-red-500')
            passwordLabel.classList.add('text-title')
            password.classList.remove('border-red-500', 'bg-red-100', 'dark:bg-red-100')
            password.classList.add('border-none', 'bg-formInput', 'dark:bg-formInput')
            passwordError.classList.add('hidden')
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

        function handleLogin(event) {
            event.preventDefault();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const isValidEmail = emailRegex.test(username.value);

            if (!isValidEmail || !password.value || !terms.checked) {
                let firstFocus = []

                if (!isValidEmail) {
                    usernameLabel.classList.remove('text-title')
                    usernameLabel.classList.add('text-red-500')
                    username.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                    username.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    usernameError.classList.remove('hidden')
                    firstFocus.push(username)
                    if (username.value) {
                        usernameError.innerHTML = 'Format username not valid'
                    }
                }

                if (!password.value) {
                    passwordLabel.classList.remove('text-title')
                    passwordLabel.classList.add('text-red-500')
                    password.classList.remove('border-none', 'bg-formInput', 'dark:bg-formInput')
                    password.classList.add('border-red-500', "bg-red-100", "dark:bg-red-100")
                    passwordError.classList.remove('hidden')
                    firstFocus.push(password)
                }

                if (!terms.checked) {
                    termsLabel.classList.remove('text-tnc')
                    termsLabel.classList.add('text-red-500')
                }
                if (firstFocus?.length > 0) {
                    setFocus(firstFocus[0])
                }

            } else {

                const url = `https://cms.bydhaka.co.id/api/v1/login`
                const formData = {
                    email: username.value,
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
                            return response.json().then(errorResponse => {
                                throw new Error(errorResponse.error); // Extract and throw the error message
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        window.localStorage.setItem('token', data?.token)
                        window.localStorage.setItem('haka-user', JSON.stringify(data?.user))
                        const a = document.createElement('a');
                        a.href = 'index';
                        a.click();
                    })
                    .catch((error) => {
                        passwordError.classList.remove('hidden')
                        passwordError.innerHTML = error?.message
                        console.error('Error:', error?.message);
                    });
            }
        }
    </script>
</body>