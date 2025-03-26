<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg flex">
        <!-- Left side (Image section) -->
        <div class="w-1/2">
            <img src="images/login/login_slide_1.png" alt="Car" class="object-cover h-full rounded-l-lg">
        </div>

        <!-- Right side (Form section) -->
        <div class="w-1/2 p-8">
            <h1 class="text-4xl font-bold mb-4">CREATE AN ACCOUNT</h1>
            <p class="text-sm text-gray-500 mb-4">Already have an account? <a href="#" class="text-green-500">Login</a></p>

            <!-- Registration Form -->
            <form id="registerForm" onsubmit="return handleRegister(event);" class="space-y-4">
                <div class="flex space-x-4">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required
                        class="border border-gray-300 rounded-md w-full p-2">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required
                        class="border border-gray-300 rounded-md w-full p-2">
                </div>
                <div class="flex space-x-4">
                    <input type="email" id="email" name="email" placeholder="Email" required
                        class="border border-gray-300 rounded-md w-full p-2">
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required
                        class="border border-gray-300 rounded-md w-full p-2">
                </div>
                <input type="password" id="password" name="password" placeholder="Password" required
                    class="border border-gray-300 rounded-md w-full p-2">
                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" required class="mr-2">
                    <label for="terms" class="text-sm">I agree to the Terms & Conditions</label>
                </div>
                <button type="submit" class="bg-green-500 text-white rounded-md w-full py-2">Register</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript for form submission
        function handleRegister(event) {
            event.preventDefault(); // Prevent the default form submission

            // Gather form data
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const password = document.getElementById('password').value;
            const terms = document.getElementById('terms').checked;

            // Create an object to send via AJAX
            const formData = {
                firstName,
                lastName,
                email,
                phoneNumber,
                password,
                terms
            };

            // Use fetch to send data to PHP for processing
            fetch('register.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Registration successful!');
                    } else {
                        alert('Registration failed: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while registering.');
                });
        }
    </script>
</body>

</html>