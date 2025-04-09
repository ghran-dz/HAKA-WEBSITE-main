<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAKA BYD</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        p {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;

            font-style: normal;
        }


        header a,
        .kanit {
            font-family: "Kanit", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .coverflow-container {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .coverflow {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 1000px;
        }

        .coverflow img {
            position: absolute;
            width: 300px;
            height: 200px;
            transition: all 0.5s ease;
            object-fit: cover;
            cursor: pointer;
        }

        .header-gradient {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        }

        .position-button {
            width: 100px;
            height: 10px;
            border-radius: 20%;
            background-color: white;
            transition: background-color 0.3s;
            border: solid 2px #666666;
        }

        .position-button.active {
            background-color: #065447;
        }

        .arrow-button-slideshow,
        .arrow-button-carousel,
        .arrow-button-coverflow {
            position: absolute;
            bottom: 20px;
            background-color: rgb(255 255 255 / 60%);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .arrow-button-slideshow:hover,
        .arrow-button-carousel:hover,
        .arrow-button-coverflow:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .arrow-button-slideshow.left {
            left: 20px;

        }

        .arrow-button-slideshow.right {
            left: 70px;

        }

        .arrow-button-carousel.left {
            left: 48%;
            background-color: rgba(0, 0, 0, 0);
        }

        .arrow-button-carousel.right {
            left: 52%;
            background-color: rgba(0, 0, 0, 0);
        }

        .arrow-button-coverflow.left {
            left: 48%;
            color: #000;
            display: none;
        }

        .arrow-button-coverflow.right {
            left: 52%;
            color: #000;
            display: none;
        }

        .arrow {
            font-size: 24px;
            color: white;
        }

        .coverflow-container .arrow-button {
            background-color: rgba(0, 0, 0, 0.5);
            border: 2px solid black;
        }

        .coverflow-container .arrow-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .coverflow-container .arrow {
            color: white;
        }

        .footer-diagonal {
            height: 400px;
            padding-top: 110px;
            background-color: #068774;
            clip-path: polygon(0 15%, 100% 0%, 100% 100%, 0% 100%);
        }

        .footer-diagonal-copy {
            margin-top: -50px;
            padding-top: 30px;
            height: 60px;
            text-align: center;
            color: #fff;
            font-size: 0.7rem;
            background-color: #065447;
            clip-path: polygon(0% 0%, 100% 60%, 100% 100%, 0% 100%);
        }

        .side-menu {
            position: fixed;
            top: 50%;
            right: 0;
            width: 90px;
            z-index: 999;
            padding-right: 15px;
        }

        .side-menu img {
            margin-top: -200px;
        }

        .container {
            max-width: 1200px !important;
        }

        .login-menu {
            background-color: #068774;
            color: #fff;
            padding: 5px 15px;
            border-radius: 12px;
        }

        .logo-top {
            max-height: 40px;
            width: auto;
        }

        .logo-byd {
            max-height: 25px;
            width: auto;
        }

        header li {
            margin-left: 35px !important;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            display: none;
        }

        .popup-content {
            position: relative;
            width: 100%;
            max-width: 800px;
            padding: 20px;
            border-radius: 10px;
        }

        .popup-content iframe {
            width: 100%;
            height: 400px;
        }

        .popup-close {
            position: absolute;
            top: -20px;
            right: -20px;
            cursor: pointer;
            font-size: 50px;
            color: #ffffff;
        }

        .logo-footer {
            max-width: 130px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>

    <style>
        :root {
            --carousel-small-scale: 0.8;
            --carousel-big-scale: 1.3;
            --carousel-transition-duration: 1s;
            --carousel-stay-duration: 3000ms;
        }

        .carousel {
            display: flex;
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;
            width: 100%;
            height: 70%;
            margin-top: 80px;
        }

        .carousel-track {
            display: flex;
            transition: transform var(--carousel-transition-duration) ease-in-out;
            width: calc(100% * 4);
        }

        .carousel-item {
            flex: none;
            transition: transform var(--carousel-transition-duration) ease-in-out, opacity var(--carousel-transition-duration) ease-in-out, z-index 0s;
            width: calc(100% / 2);
            opacity: 0.4;
            transform: scale(var(--carousel-small-scale));
            z-index: 1;
        }

        .carousel-item.active {
            transform: scale(var(--carousel-big-scale));
            opacity: 1;
            z-index: 2;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .bg-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-container img {
            width: 100%;
            height: auto;
        }

        .carousel-wrapper {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .arrow-button {
            position: absolute;
            bottom: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border: 2px solid black;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .arrow-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .arrow-button.left {
            right: 70px;
        }

        .arrow-button.right {
            right: 20px;
        }

        .arrow {
            font-size: 24px;
            color: white;
        }
    </style>


    <style>
        .group-hover\:scale-110:hover img {
            transform: scale(1.1);
        }
    </style>
    <style>
        .social-media-icons {
            display: flex;
            gap: 10px;
        }

        .social-media-icons a {
            text-decoration: none;
            color: inherit;
            margin-right: 20px;
        }

        .social-media-icons svg {
            width: 20px;
            height: 24px;
            fill: #ffffff;
            /* Default icon color */
            transition: fill 0.3s;
        }

        .social-media-icons a:hover svg {
            fill: #a8a8a8;
            /* Change to desired hover color */
        }

        .jamkerja-title {
            display: block;
            font-size: 1rem;
        }

        .jamkerja-desc {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 16px;
        }

        footer a {
            font-size: 0.9rem !important;

        }

        footer .contact-footer p {
            margin-top: 18px !important;

        }

        footer li {

            margin-bottom: 5px !important;
        }

        footer p {
            font-size: 0.9rem !important;
        }

        .page-links-footer a {
            font-size: 0.8rem !important;
        }

        .sc {
            margin-right: 0px !important;
        }

        .follow {
            margin-left: 120px;
            ;
        }
    </style>


</head>

<body class="font-sans">
    <!-- Header -->
    <header class="header-gradient text-black p-4 fixed w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold"><img class="logo-top" src="images/logo/logo_haka.png" alt=""></div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-600">HOME</a></li>
                    <li><a href="#" class="hover:text-gray-600">ABOUT HAKA</a></li>
                    <li><a href="#" class="hover:text-gray-600">PRODUCT</a></li>
                    <li><a href="#" class="hover:text-gray-600">SERVICE</a></li>
                    <li><a href="#" class="hover:text-gray-600">FIND US</a></li>
                    <li><a href="#" class="hover:text-gray-600">NEWS ROOM</a></li>
                    <li><a href="#" class="login-menu">LOGIN</a></li>
                    <li><a href="#" class=""><img class="logo-byd" src="images/logo/logo_byd.png" alt=""></a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="burger-button" class="text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <ul class="flex flex-col space-y-4 p-4">
                <li><a href="#" class="hover:text-gray-600">HOME</a></li>
                <li><a href="#" class="hover:text-gray-600">ABOUT HAKA</a></li>
                <li><a href="#" class="hover:text-gray-600">PRODUCT</a></li>
                <li><a href="#" class="hover:text-gray-600">SERVICE</a></li>
                <li><a href="#" class="hover:text-gray-600">FIND US</a></li>
                <li><a href="#" class="hover:text-gray-600">NEWS ROOM</a></li>
                <li><a href="#" class="login-menu">LOGIN</a></li>
                <li><a href="#" class=""><img class="logo-byd" src="images/logo/logo_byd.png" alt=""></a></li>
            </ul>
        </nav>
    </header>

    <!-- Fullscreen Image Slideshow -->
    <div class="relative h-screen slideshow">
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-500" style="background-image: url('images/slideshows/slide1.png');"></div>
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-500 opacity-0" style="background-image: url('images/slideshows/slide2.jpg');"></div>
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-500 opacity-0" style="background-image: url('images/slideshows/3.jpg');"></div>
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-500 opacity-0" style="background-image: url('images/slideshows/4.jpg');"></div>
        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-500 opacity-0" style="background-image: url('images/slideshows/5.jpg');"></div>

        <div class="absolute bottom-0 left-0 mb-4 ml-4">
            <div class="arrow-button-slideshow left" onclick="prevSlideshowSlide()">
                <span class="arrow">&#10094;</span>
            </div>
            <div class="arrow-button-slideshow right" onclick="nextSlideshowSlide()">
                <span class="arrow">&#10095;</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-wrap mt-8">
        <div class="w-full md:w-1/2 p-4">
            <img class="-ml-8 mb-8" src="images/about/Group54.png" alt="">
            <p class="mb-4">HAKA Auto is a Mega Dealer in Indonesia in marketing BYD Auto products, will establish Branches/Dealers (VSP - Vehicle, Service, Parts) spread across almost all major cities in Java (including DKI Jakarta), Sulawesi, Kalimantan and Papua.

                Not only focusing on selling car units but also on After Sales Services, namely Workshop (vehicle repair) and Spare Parts (supply of spare parts).</p>
            <div class="mt-4">
                <button class="bg-green-800 hover:bg-green-600 text-white py-3 px-12 rounded-3xl mt-12 mr-2 mb-6 kanit">
                    SEE MORE
                </button>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4">
            <div class="flex justify-between">
                <img src="images/about/Group53.png" alt="Image 2" class=" mb-8 mr-4" style="margin-top: 0.25rem;">
                <!-- <img src="https://picsum.photos/200/200?random=1" alt="Image 1" class="w-1/2 mt-8"> -->
            </div>
        </div>
    </div>

    <div class="relative w-full" style="padding-top: 56.25%;">
        <img class="absolute inset-0 w-full h-full object-contain" src="images/provide.png" alt="">
        <div class="absolute inset-0 flex flex-col justify-end px-4 pb-4">
            <div class="flex flex-wrap items-end justify-center">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <div class="flex flex-col items-center">
                        <div>
                            <button class="bg-green-800 hover:bg-green-600 text-white py-3 px-12 rounded-3xl mr-2 mb-6 mr-12 kanit">
                                SIMULATION
                            </button>
                            <button class="bg-white hover:bg-green-600 border-solid border-2 border-green-600 text-green-600 hover:text-white py-3 px-12 mb-6 rounded-3xl kanit">
                                LEARN MORE
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-wrapper mt-12">
        <div class="bg-container">
            <img src="images/cars/bgcar.png" alt="Background Image">
        </div>
        <div class="carousel relative flex items-center justify-center">
            <div class="carousel-track">
                <div class="carousel-item p-4 active">
                    <img src="images/cars/car1.png" alt="Image 1" class="object-contain rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="images/cars/car2.png" alt="Image 2" class="object-contain rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="images/cars/car3.png" alt="Image 3" class="object-contain rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="images/cars/car4.png" alt="Image 4" class="object-contain rounded-lg">
                </div>
            </div>
            <div class="arrow-button-carousel left" onclick="prevCarouselSlide()">
                <span class="arrow">&#10094;</span>
            </div>
            <div class="arrow-button-carousel right" onclick="nextCarouselSlide()">
                <span class="arrow">&#10095;</span>
            </div>
        </div>
    </div>

    <div class="mx-auto my-12">
        <div class="coverflow-container">
            <div class="coverflow" id="coverflow">
                <img src="https://picsum.photos/300/200?random=1" alt="Gallery Image 1" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfKfPfyJRdk">
                <img src="https://picsum.photos/300/200?random=2" alt="Gallery Image 2" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfKfPfyJRdk">
                <img src="https://picsum.photos/300/200?random=3" alt="Gallery Image 3" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfKfPfyJRdk">
                <img src="https://picsum.photos/300/200?random=4" alt="Gallery Image 4" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfKfPfyJRdk">
                <img src="https://picsum.photos/300/200?random=5" alt="Gallery Image 5" class="rounded-lg shadow-lg" data-video-url="https://www.youtube.com/embed/jfKfPfyJRdk">
            </div>
            <div class="arrow-button-coverflow left" onclick="prevCoverflow()">
                <span class="arrow">&#10094;</span>
            </div>
            <div class="arrow-button-coverflow right" onclick="nextCoverflow()">
                <span class="arrow">&#10095;</span>
            </div>
        </div>
        <div class="flex justify-center mt-4 space-x-2">
            <button class="position-button" onclick="showCoverflowImage(0)"></button>
            <button class="position-button" onclick="showCoverflowImage(1)"></button>
            <button class="position-button" onclick="showCoverflowImage(2)"></button>
            <button class="position-button" onclick="showCoverflowImage(3)"></button>
            <button class="position-button" onclick="showCoverflowImage(4)"></button>
        </div>
    </div>

    <div class="side-menu">
        <img src="images/menu_sidebar.png" alt="">
    </div>

    <!-- Popup Video Player -->
    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span id="popup-close" class="popup-close">&times;</span>
            <iframe id="video-frame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="relative">
            <div id="carousel" class="overflow-hidden">
                <div id="slider" class="flex transition-transform duration-300 ease-in-out">
                    <div class="w-1/4 flex-shrink-0 px-2">
                        <a href="#blog1" class="block relative h-64 rounded-lg overflow-hidden group">
                            <img src="https://picsum.photos/600/400?random=1" alt="Blog 1" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                <span class="text-white text-xs">Jan 1, 2024</span>
                                <h3 class="text-white text-lg font-bold mt-1">Blog Post Title 1</h3>
                                <p class="text-gray-300 text-sm mt-1">Short description of the blog post goes here.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/4 flex-shrink-0 px-2">
                        <a href="#blog2" class="block relative h-64 rounded-lg overflow-hidden group">
                            <img src="https://picsum.photos/600/400?random=2" alt="Blog 2" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                <span class="text-white text-xs">Feb 15, 2024</span>
                                <h3 class="text-white text-lg font-bold mt-1">Blog Post Title 2</h3>
                                <p class="text-gray-300 text-sm mt-1">Another short description for the second blog post.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/4 flex-shrink-0 px-2">
                        <a href="#blog3" class="block relative h-64 rounded-lg overflow-hidden group">
                            <img src="https://picsum.photos/600/400?random=3" alt="Blog 3" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                <span class="text-white text-xs">Mar 30, 2024</span>
                                <h3 class="text-white text-lg font-bold mt-1">Blog Post Title 3</h3>
                                <p class="text-gray-300 text-sm mt-1">Yet another short description for the third blog post.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/4 flex-shrink-0 px-2">
                        <a href="#blog4" class="block relative h-64 rounded-lg overflow-hidden group">
                            <img src="https://picsum.photos/600/400?random=4" alt="Blog 4" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                <span class="text-white text-xs">Apr 15, 2024</span>
                                <h3 class="text-white text-lg font-bold mt-1">Blog Post Title 4</h3>
                                <p class="text-gray-300 text-sm mt-1">A short description for the fourth blog post.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/4 flex-shrink-0 px-2">
                        <a href="#blog5" class="block relative h-64 rounded-lg overflow-hidden group">
                            <img src="https://picsum.photos/600/400?random=5" alt="Blog 5" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4">
                                <span class="text-white text-xs">May 1, 2024</span>
                                <h3 class="text-white text-lg font-bold mt-1">Blog Post Title 5</h3>
                                <p class="text-gray-300 text-sm mt-1">A short description for the fifth blog post.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <!-- <button id="prevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 text-gray-800 font-bold py-2 px-4 rounded-r">
                &lt;
            </button>
            <button id="nextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 text-gray-800 font-bold py-2 px-4 rounded-l">
                &gt;
            </button> -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-diagonal text-white">
            <div class="container mx-auto flex flex-wrap justify-between">
                <div class="w-full md:w-2/5 mb-4 md:mb-0 pr-8">
                    <img class="logo-footer" src="images/logo/logo-footer.png" alt="">
                    <h3 class="font-bold mb-3">Headquarter Office</h3>
                    <p>Jl. Alternatif Cibubur No.41, Jatikarya, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435</p>
                </div>
                <div class="w-full md:w-1/5 mb-4 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">Jam Kerja</h3>
                    <ul>
                        <span class="jamkerja-title">Head Office</span>
                        <span class="jamkerja-desc">Senin - Jumat : 08 - 17:00</span>

                        <span class="jamkerja-title">Cabang</span>
                        <span class="jamkerja-desc">Senin - Minggu : 08 - 17:00</span>
                    </ul>
                </div>
                <div class="w-full md:w-1/5 mb-4 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">Home</h3>
                    <ul>
                        <li><a href="#" class="hover:text-gray-300">Promo & Event</a></li>
                        <li><a href="#" class="hover:text-gray-300">Order Now!</a></li>
                        <li><a href="#" class="hover:text-gray-300">Services</a></li>
                        <li><a href="#" class="hover:text-gray-300">Testing</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/5 contact-footer">
                    <h3 class="text-xl font-bold mb-2">Contact Us</h3>
                    <p>+62 812 3456 7890</p>
                    <p>+62 21 3456 789</p>
                    <p>haka@bydhaka.co.id</p>
                </div>

                <div class="horizontal-links mt-4">
                    <div class="page-links-footer social-media-icons mt-4">
                        <a class="mr-6" href="">Privacy Policy</a>
                        <a class="mr-6" href="">Terms of Use</a>
                        <a class="mr-6" href="">Cookie</a>
                        <a class="mr-12" href="">RMI Info</a>


                        <a class="mr-12 follow ml-12" href="">Follow Us</a>

                        <a class="sc" href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.31h3.128V8.625c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.243h-1.918c-1.504 0-1.794.715-1.794 1.763v2.311h3.587l-.468 3.395h-3.12V24h6.116C23.407 24 24 23.407 24 22.675V1.325C24 .593 23.407 0 22.675 0z" />
                            </svg>
                        </a>
                        <a class="sc" href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.564-2.005.974-3.127 1.195-.896-.959-2.173-1.559-3.59-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.043.765.127 1.124C7.69 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.708.869 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.062c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.415-1.68 1.319-3.809 2.107-6.102 2.107-.39 0-.779-.023-1.17-.067 2.189 1.397 4.768 2.21 7.548 2.21 9.142 0 14.307-7.721 14.307-14.417 0-.219-.004-.436-.013-.653.986-.712 1.842-1.597 2.523-2.607z" />
                            </svg>
                        </a>
                        <a class="sc" href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.31 3.608 1.285.975.975 1.223 2.242 1.285 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.31 2.633-1.285 3.608-.975.975-2.242 1.223-3.608 1.285-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.31-3.608-1.285-.975-.975-1.223-2.242-1.285-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.062-1.366.31-2.633 1.285-3.608.975-.975 2.242-1.223 3.608-1.285 1.265-.058 1.645-.07 4.849-.07M12 0C8.741 0 8.332.013 7.053.072 5.775.131 4.548.372 3.466 1.454 2.384 2.536 2.144 3.763 2.085 5.041 2.026 6.32 2.013 6.729 2.013 10s.013 3.68.072 4.959c.059 1.278.3 2.505 1.382 3.587 1.082 1.082 2.309 1.322 3.587 1.382 1.278.059 1.687.072 4.959.072s3.68-.013 4.959-.072c1.278-.059 2.505-.3 3.587-1.382 1.082-1.082 1.322-2.309 1.382-3.587.059-1.278.072-1.687.072-4.959s-.013-3.68-.072-4.959c-.059-1.278-.3-2.505-1.382-3.587-1.082-1.082-2.309-1.322-3.587-1.382C15.68.013 15.271 0 12 0zm0 5.838c-3.403 0-6.162 2.758-6.162 6.162 0 3.403 2.758 6.162 6.162 6.162 3.403 0 6.162-2.758 6.162-6.162 0-3.403-2.758-6.162-6.162-6.162zm0 10.162c-2.206 0-4-1.794-4-4 0-2.206 1.794-4 4-4 2.206 0 4 1.794 4 4 0 2.206-1.794 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.441 0 .796.645 1.441 1.441 1.441.796 0 1.441-.645 1.441-1.441 0-.796-.645-1.441-1.441-1.441z" />
                            </svg>
                        </a>
                        <a class="sc" href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.792 0 0 .77 0 1.72v20.56C0 23.23.792 24 1.77 24h20.46C23.208 24 24 23.23 24 22.28V1.72C24 .77 23.208 0 22.23 0zM7.12 20.452H3.56V9.02h3.56v11.432zM5.34 7.623c-1.145 0-2.074-.93-2.074-2.075 0-1.145.93-2.075 2.075-2.075 1.145 0 2.075.93 2.075 2.075 0 1.145-.93 2.075-2.075 2.075zM20.452 20.452h-3.56v-5.784c0-1.38-.025-3.16-1.93-3.16-1.933 0-2.23 1.507-2.23 3.063v5.88h-3.56V9.02h3.42v1.56h.049c.475-.897 1.636-1.84 3.365-1.84 3.598 0 4.263 2.37 4.263 5.448v6.264z" />
                            </svg>
                        </a>

                    </div>
                </div>


            </div>






        </div>
        <div class="footer-copy footer-diagonal-copy"> Copyright by HAKA BYD</div>
    </footer>

    <script>
        document.getElementById('burger-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        let currentSlide = 0;
        const slides = document.querySelectorAll('.slideshow .bg-cover');
        let slideInterval;
        let timeoutID;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });
        }

        function nextSlideshowSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlideshowSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function startSlideShow() {
            slideInterval = setInterval(nextSlideshowSlide, 5000);
        }

        function stopSlideShow() {
            clearInterval(slideInterval);
        }

        function resetTimeout() {
            if (timeoutID) {
                clearTimeout(timeoutID);
            }
            timeoutID = setTimeout(startSlideShow, 2000); // Add a 2-second delay before restarting the slideshow
        }

        document.querySelector('.arrow-button-slideshow.right').addEventListener('click', () => {
            stopSlideShow();
            nextSlideshowSlide();
            resetTimeout();
        });

        document.querySelector('.arrow-button-slideshow.left').addEventListener('click', () => {
            stopSlideShow();
            prevSlideshowSlide();
            resetTimeout();
        });

        // Ensure any existing interval is cleared before starting a new one
        function resetSlideShow() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
            startSlideShow();
        }

        // Initial setup
        showSlide(currentSlide);
        startSlideShow();

        // Add event listener for visibility change to handle tab switch
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopSlideShow();
            } else {
                resetSlideShow();
            }
        });


        // Coverflow carousel
        const coverflow = document.getElementById('coverflow');
        const images = coverflow.querySelectorAll('img');
        let currentCoverflowIndex = Math.floor(images.length / 2); // Start with the centered image

        function showCoverflowImage(index) {
            const centerX = coverflow.offsetWidth / 2 - 150; // 150 is half of the image width
            const centerY = coverflow.offsetHeight / 2 - 100; // 100 is half of the image height

            images.forEach((img, i) => {
                const offset = i - index;
                const zIndex = images.length - Math.abs(offset);
                let scale, left, rotateY;

                if (offset === 0) {
                    // Center image
                    scale = 1.5; // Enlarge the center image
                    left = centerX;
                    rotateY = 0;
                    img.onclick = () => {
                        const videoUrl = img.getAttribute('data-video-url');
                        document.getElementById('video-frame').src = videoUrl;
                        document.getElementById('popup').style.display = 'flex';
                    };
                } else {
                    // Gradual scaling for side images
                    scale = 1 - Math.abs(offset) * 0.25; // Gradually decrease size
                    left = centerX + (offset * 150); // Adjust the spacing between the images
                    rotateY = offset < 0 ? 45 : -45;
                    img.onclick = null;
                }

                img.style.zIndex = zIndex;
                img.style.transform = `rotateY(${rotateY}deg) scale(${scale})`;
                img.style.left = `${left}px`;
                img.style.top = `${centerY}px`;
            });

            // Update position buttons
            const buttons = document.querySelectorAll('.position-button');
            buttons.forEach((button, i) => {
                button.classList.toggle('active', i === index);
            });
        }

        function nextCoverflow() {
            currentCoverflowIndex = (currentCoverflowIndex + 1) % images.length;
            showCoverflowImage(currentCoverflowIndex);
        }

        function prevCoverflow() {
            currentCoverflowIndex = (currentCoverflowIndex - 1 + images.length) % images.length;
            showCoverflowImage(currentCoverflowIndex);
        }

        // Initial setup
        showCoverflowImage(currentCoverflowIndex);

        // Adjust coverflow on window resize
        window.addEventListener('resize', () => showCoverflowImage(currentCoverflowIndex));

        // Close Popup
        document.getElementById('popup-close').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('video-frame').src = '';
        });

        document.getElementById('popup').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
                document.getElementById('video-frame').src = '';
            }
        });

        // Carousel functionality
        const carouselTrack = document.querySelector('.carousel-track');
        let carouselItems = Array.from(document.querySelectorAll('.carousel-item'));
        const totalItems = carouselItems.length;
        let index = 0;
        let autoPlayInterval;
        let delayTimeout;

        function setPositionByIndex() {
            const currentTranslate = index * -50 + 25; // Adjust to center the active item and show half item on the right
            carouselTrack.style.transform = `translateX(${currentTranslate}%)`;
        }

        function updateCarousel() {
            carouselItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.add('active');
                    item.style.zIndex = 2;
                } else {
                    item.classList.remove('active');
                    item.style.zIndex = 1;
                }
            });

            setPositionByIndex();
        }

        function nextCarouselSlide() {
            clearTimeout(delayTimeout);
            index = (index + 1) % totalItems;
            updateCarousel();
            delayTransition();
        }

        function prevCarouselSlide() {
            clearTimeout(delayTimeout);
            index = (index - 1 + totalItems) % totalItems;
            updateCarousel();
            delayTransition();
        }

        function delayTransition() {
            clearInterval(autoPlayInterval);
            delayTimeout = setTimeout(() => {
                autoPlayInterval = startAutoPlay();
            }, parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--carousel-stay-duration')));
        }

        function startAutoPlay() {
            return setInterval(nextCarouselSlide, parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--carousel-stay-duration')));
        }

        autoPlayInterval = startAutoPlay();

        carouselTrack.addEventListener('mouseover', () => clearInterval(autoPlayInterval));
        carouselTrack.addEventListener('mouseout', () => autoPlayInterval = startAutoPlay());

        // Set initial position
        updateCarousel();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('slider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            let scrollAmount = 0;
            const scrollStep = slider.getElementsByClassName('w-1/4')[0].offsetWidth;

            prevBtn.addEventListener('click', function() {
                if (scrollAmount > 0) {
                    scrollAmount -= scrollStep;
                    slider.style.transform = `translateX(-${scrollAmount}px)`;
                }
            });

            nextBtn.addEventListener('click', function() {
                if (scrollAmount < slider.scrollWidth - slider.clientWidth) {
                    scrollAmount += scrollStep;
                    slider.style.transform = `translateX(-${scrollAmount}px)`;
                }
            });
        });
    </script>

</body>

</html>
