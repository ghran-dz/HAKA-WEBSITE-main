<div class="w-full relative -mt-1">
    <img src="images/product/bg_brosur.png" alt="BYD HAKA AUTO Brochure" class="w-full object-cover object-center h-40 sm:h-52 lg:h-auto" />
    <div class="w-full absolute inset-0 flex flex-col justify-around items-center">
        <div class="mt-5 sm:mt-10">
            <div class="text-product text-xl text-center font-bold montserrat italic mb-1 sm:text-3xl">TECHNICAL SPECIFICATION</div>
            <div class="text-product text-center text-xxs font-extralight open-sans italic tracking-[.35em] sm:text-xs">DOWNLOAD THE BYD BROCHURE</div>
        </div>
        <button type="button" id="open-brochure" class="text-title text-xxs bg-product hover:bg-product py-1.5 px-6 rounded-3xl md:mr-12 open-sans italic font-bold sm:text-xs sm:py-3 sm:px-12">
            DOWNLOAD BROCHURE
        </button>
    </div>

    <div id="modal-download-brochure" class="hidden fixed inset-0 z-50 bg-black bg-opacity-75 flex justify-center items-start px-5 lg:px-0 lg:pt-10">
        <div class="w-full max-w-4xl mx-auto bg-white rounded-xl px-10 py-10 sm:px-20">
            <div class="montserrat text-2xl text-title font-semibold mb-7 sm:mb-14">Please fillin the data to download the brochure </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
                <div>
                    <label for="firstName" class="montserrat text-sm ml-2 text-title font-semibold">First Name</label>
                    <div class="open-sans mb-4 mt-1">
                        <input type="text" id="firstName" name="first_name" placeholder="Input yout first name" maxlength="100" class="border border-none text-form text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                        <div id="firstName-error" class="ml-2 text-red-500 hidden kanit text-xxs">First name is required</div>
                    </div>
                </div>
                <div>
                    <label for="lastName" class="montserrat text-sm ml-2 text-title font-semibold">Last Name</label>
                    <input type="text" id="lastName" name="last_name" placeholder="Input yout last name" class="border border-none text-form text-xs rounded open-sans mb-4 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                </div>
                <div>
                    <label for="email" class="montserrat text-sm ml-2 text-title font-semibold">Email</label>
                    <div class="open-sans mb-4 mt-1">
                        <input type="email" id="email" name="email" placeholder="Input yout email" class="border border-none text-form text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                        <div id="email-error" class="hidden text-red-500 kanit text-xxs">Email is required</div>
                    </div>
                </div>
                <div>
                    <label for="phone" class="montserrat text-sm ml-2 text-title font-semibold">Phone Number</label>
                    <div class="open-sans mb-4 mt-1">
                        <input type="text" id="phone" name="phone-number" placeholder="Input yout phone number" class="border border-none text-form text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="background: #E9E9E9;" />
                        <div id="phone-error" class="hidden text-red-500 kanit text-xxs">Phone number is required</div>
                    </div>
                </div>
            </div>
            <div class="mt-2 flex justify-start items-center gap-3">
                <label class="custom-checkbox">
                    <input type="checkbox" id="authorize" />
                    <span id="checkmark" class="checkmark"></span>
                </label>
                <div class="flex items-start gap-2 ">
                    <label for="authorize" class="open-sans checkmart text-xxs font-light text-tnc">I authorize BYD and its partners to contact me to assist in the process of purchasing a BYD car. By providing my email and mobile number, I have agreed to receive all notifications via BYD.</label>
                </div>
            </div>
            <div id="authorize-error" class="open-sans hidden text-red-500 kanit text-xxs">Checked authority is required</div>
            <button type="button" style="background-color: #068774;" id="download" class=" w-full py-3.5 text-sm font-medium text-white bg-blue-700 mt-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Brochure</button>
        </div>
    </div>
</div>

<script>
    const openBrochure = document.getElementById('open-brochure');
    const modal = document.getElementById('modal-download-brochure');
    const btnDownload = document.getElementById('download');
    const firstName = document.querySelector('#firstName')
    const lastName = document.querySelector('#lastName')
    const email = document.querySelector('#email')
    const phone = document.querySelector('#phone')
    const authorize = document.querySelector('#authorize')

    if (user) {
        firstName.value = user?.first_name ?? ""
        lastName.value = user?.last_name ?? ""
        email.value = user?.email ?? ""
        phone.value = user?.phone_number ?? ""

    }

    openBrochure.addEventListener('click', (e) => {
        modal.classList.remove('hidden'); // Add hidden class to hide modal
    });
    modal.addEventListener('click', (e) => {
        if (e.target === modal) { // Only close the modal if the click is outside the image/content
            e.preventDefault();
            modal.classList.add('hidden'); // Add hidden class to hide modal
        }
    });

    function checkAfterPseudoElementExist(selector) {
        const element = document.querySelector(selector);

        if (!element) {
            console.error("Element not found.");
            return false;
        }

        const afterStyle = window.getComputedStyle(element, '::after');

        return afterStyle.content !== 'none' && afterStyle.content !== '';
    }
    btnDownload.addEventListener('click', async (e) => {
        e.preventDefault();


        const isValidEmail = emailRegex.test(email.value);
        const isValidPhone = phoneNumberRegex.test(phone.value);


        if (!firstName.value || !email.value || !isValidEmail || !isValidPhone || !authorize.checked) {
            if (!firstName.value) {
                firstName.classList.remove('border-none')
                firstName.classList.add('border-red-500')
                document.getElementById('firstName-error').classList.remove('hidden')
            } else {
                firstName.classList.add('border-none')
                firstName.classList.remove('border-red-500')
                document.getElementById('firstName-error').classList.add('hidden')
            }
            if (!isValidEmail) {
                email.classList.remove('border-none')
                email.classList.add('border-red-500')
                document.getElementById('email-error').classList.remove('hidden')
                if (email.value) {
                    document.getElementById('email-error').innerHTML = 'Format email not valid'
                }
            } else {
                email.classList.add('border-none')
                email.classList.remove('border-red-500')
                document.getElementById('email-error').classList.add('hidden')
                document.getElementById('email-error').innerHTML = 'Email is required'
            }
            if (!isValidPhone) {
                phone.classList.remove('border-none')
                phone.classList.add('border-red-500')
                document.getElementById('phone-error').classList.remove('hidden')
                if (phone.value) {
                    document.getElementById('phone-error').innerHTML = 'Phone number is not valid'
                }
            } else {
                phone.classList.add('border-none')
                phone.classList.remove('border-red-500')
                document.getElementById('phone-error').classList.add('hidden')
                document.getElementById('phone-error').innerHTML = 'Phone number is required'

            }
            if (!authorize.checked) {
                document.getElementById('authorize-error').classList.remove('hidden')
            } else {
                document.getElementById('authorize-error').classList.add('hidden')
            }
        } else {
            try {
                const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
                const url = `${BASE_URL}/catalogue`
                const data = {
                    first_name: firstName.value,
                    last_name: lastName.value,
                    email: email.value,
                    phone_number: phone.value
                };

                const options = {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                };

                fetch(url, options)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        const pdfUrl = modal.dataset.catalog;

                        const newTab = window.open(pdfUrl, '_blank');
                        modal.classList.add('hidden');


                        newTab.onload = () => {
                            const a = document.createElement('a');
                            a.href = pdfUrl;
                            a.download = 'byd-catalog.pdf';
                            a.click();
                        };
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            } catch (error) {
                console.log(error);
                alert(error)

            }
        }

    });
</script>