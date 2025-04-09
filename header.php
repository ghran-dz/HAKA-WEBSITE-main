<!DOCTYPE html>
<html lang="en">

<head>
            <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZNYRYPDTTY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZNYRYPDTTY');
    </script>

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


    <!-- <meta name="description" content="Dealer BYD (Haka Motors) Jelajahi masa depan mobilitas dengan BYD, pilihan terbaik untuk kendaraan listrik yang menggabungkan kinerja unggul dengan desain yang "> -->
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        function getImageFileName(url) {
            const regex = /([^/]+\.(?:png|jpg|jpeg|gif))$/;
            const matches = url.match(regex);

            if (!matches) return "";

            let fileName = matches[1].split('-').join(' ').replace(/\.(?:png|jpg|jpeg|gif)$/, '');

            const words = fileName.split(' ');
            if (words.length > 1) {
                words.pop(); // Hapus paragraf terakhir
                fileName = words.join(' ');
            }


            return fileName
        }
    </script>

    <script>
        const baseUrl = 'https://cms.bydhaka.co.id/api/v1';

        function setMeta(meta_title, meta_description, url_key, meta_keywords) {
            document.title = meta_title || "BYD HAKA AUTO";

            setMetaTag('meta[name="description"]', 'content', meta_description);
            setMetaTag('meta[property="og:image"]', 'content', url_key);
            // <link rel="canonical" href="https://example.com/news/sport/football/pemain-sepakbola-handal">


            // Handle Meta Keywords
            const keywords = meta_keywords?.split(',').map(kw => kw.trim());
            if (keywords) {
                keywords.forEach(keyword => {
                    const metaKeywordTag = document.createElement('meta');
                    metaKeywordTag.name = 'keywords';
                    metaKeywordTag.content = keyword;
                    document.head.appendChild(metaKeywordTag);
                });
            }
        }

        async function getDetailOfficeSeo() {
            const urlParams = new URLSearchParams(window.location.search);
            const branchName = urlParams.get('branch');
            const id = urlParams.get('id');

            const detailOfficeUrl = `branch?branch_name=${encodeURIComponent(branchName)}`
            const apiEndpoint = `${baseUrl}/${detailOfficeUrl}`;

            try {
                const response = await fetch(apiEndpoint);
                if (!response.ok) throw new Error("Failed to fetch SEO data");

                const data = await response.json();

                const {
                    meta_title,
                    meta_description,
                    url_key,
                    meta_keywords
                } = data;

                setMeta(meta_title, meta_description, url_key, meta_keywords)
            } catch (error) {
                console.error('Error fetching SEO data:', error);
            }

        }

        async function getDetailNewsSeo() {
            const urlParams = new URLSearchParams(window.location.search);
            const detailNewsTitle = urlParams.get('title');

            const detailOfficeUrl = `news-detail?title=${encodeURIComponent(detailNewsTitle)}`
            const apiEndpoint = `${baseUrl}/${detailOfficeUrl}`;

            try {
                const response = await fetch(apiEndpoint);
                if (!response.ok) throw new Error("Failed to fetch SEO data");

                const data = await response.json();

                const {
                    meta_title,
                    meta_description,
                    url_key,
                    meta_keywords
                } = data;

                setMeta(meta_title, meta_description, url_key, meta_keywords)
            } catch (error) {
                console.error('Error fetching SEO data:', error);
            }

        }

        async function getDetailProductSeo() {
            const urlParams = new URLSearchParams(window.location.search);
            const branchName = urlParams.get('model');
            const id = urlParams.get('id');

            const detailOfficeUrl = `product-model?model=${encodeURIComponent(branchName)}`
            const apiEndpoint = `${baseUrl}/${detailOfficeUrl}`;

            try {
                const response = await fetch(apiEndpoint);
                if (!response.ok) throw new Error("Failed to fetch SEO data");

                const data = await response.json();

                const {
                    meta_title,
                    meta_description,
                    url_key,
                    meta_keywords
                } = data;

                setMeta(meta_title, meta_description, url_key, meta_keywords)
            } catch (error) {
                console.error('Error fetching SEO data:', error);
            }

        }

        async function getDetailCareerSeo() {
            const urlParams = new URLSearchParams(window.location.search);
            const title = urlParams.get('title');
            const id = urlParams.get('id');

            const detailCareerUrl = `career-job?title=${encodeURIComponent(title)}&id=${id}`
            const apiEndpoint = `${baseUrl}/${detailCareerUrl}`;

            try {
                const response = await fetch(apiEndpoint);
                if (!response.ok) throw new Error("Failed to fetch SEO data");

                const data = await response.json();

                const {
                    meta_title,
                    meta_description,
                    url_key,
                    meta_keywords
                } = data;

                setMeta(meta_title, meta_description, url_key, meta_keywords)
            } catch (error) {
                console.error('Error fetching SEO data:', error);
            }

        }

        async function getDefaultSeo() {
            const pathname = window.location.pathname;
            const apiEndpoint = `${baseUrl}/seo`;
            const pathMapping = {
                'about-us': 'about-haka',
                'form-inquiry': 'inquiry-consultation',
                'form-service': 'booking-service',
                'form-test-drive': 'test-drive',
                'service': 'service',
            };
            let slug = 'homepage';

            for (let key in pathMapping) {
                if (pathname.includes(key)) {
                    slug = pathMapping[key];
                    break; // Jika ditemukan, keluar dari loop
                }
            }

            try {
                const response = await fetch(apiEndpoint);
                if (!response.ok) throw new Error("Failed to fetch SEO data");

                const data = await response.json();
                const seoData = data.data.find(item => item.slug === slug);

                if (seoData && seoData.metadata) {
                    const {
                        meta_title,
                        meta_description,
                        url_key,
                        meta_keywords
                    } = seoData.metadata;

                    setMeta(meta_title, meta_description, url_key, meta_keywords)
                }
            } catch (error) {
                console.error('Error fetching SEO data:', error);
            }
        }

        async function getProductSeo() {
            const data = {
                "meta_title": "BYD HAKA AUTO - Mobil Listrik Berteknologi Tinggi dan Ramah Lingkungan",
                "meta_description": "Temukan BYD HAKA AUTO, mobil canggih dengan teknologi terbaru yang hemat energi dan ramah lingkungan. Cocok untuk Anda yang menginginkan kenyamanan dan performa maksimal.",
                "url_key": "byd-haka-auto-product",
                "meta_keywords": "BYD HAKA AUTO, mobil listrik, kendaraan hemat energi, mobil ramah lingkungan, mobil berteknologi tinggi, otomotif masa depan"
            }
            setMeta(data.meta_title, data.meta_description, data.url_key, data.meta_keywords)
        }
        async function getFindUsSeo() {
            const data = {
                "meta_title": "Temukan Lokasi Kami - BYD HAKA AUTO",
                "meta_description": "Cari tahu lokasi showroom dan dealer resmi BYD HAKA AUTO terdekat di kota Anda. Dapatkan layanan terbaik untuk pembelian dan perawatan kendaraan Anda.",
                "url_key": "find-us",
                "meta_keywords": "lokasi BYD HAKA AUTO, dealer BYD, showroom BYD, temukan kami"
            }

            setMeta(data.meta_title, data.meta_description, data.url_key, data.meta_keywords)
        }
        async function getNewsSeo() {
            const data = {
                "meta_title": "Berita Terbaru - BYD HAKA AUTO",
                "meta_description": "Dapatkan informasi terbaru mengenai produk, inovasi, dan kegiatan BYD HAKA AUTO. Ikuti perkembangan otomotif terkini bersama kami.",
                "url_key": "news",
                "meta_keywords": "berita BYD HAKA AUTO, berita otomotif, inovasi mobil listrik, berita terbaru"
            }
            setMeta(data.meta_title, data.meta_description, data.url_key, data.meta_keywords)
        }
        async function getCareerSeo() {
            const data = {
                "meta_title": "Karir di BYD HAKA AUTO - Bergabunglah dengan Tim Kami",
                "meta_description": "Jelajahi peluang karir di BYD HAKA AUTO dan kembangkan potensi Anda bersama tim yang inovatif. Temukan posisi yang sesuai dengan keahlian Anda.",
                "url_key": "career",
                "meta_keywords": "karir BYD HAKA AUTO, lowongan kerja otomotif, peluang karir, kerja di BYD"
            }
            setMeta(data.meta_title, data.meta_description, data.url_key, data.meta_keywords)
        }

        // Helper to set or create meta tags
        function setMetaTag(selector, attribute, value) {
            let tag = document.querySelector(selector);
            if (!tag) {
                tag = document.createElement('meta');
                document.head.appendChild(tag);
            }
            tag.setAttribute(attribute, value);
        }
        let currentPath = window.location.pathname
        if (currentPath.includes('career-detail')) {
            getDetailCareerSeo()
        } else if (currentPath.includes('office')) {
            getDetailOfficeSeo()
        } else if (currentPath.includes('product-detail')) {
            getDetailProductSeo()
        } else if (currentPath.includes("news-detail")) {
            getDetailNewsSeo()
        } else if (currentPath.includes("product")) {
            getProductSeo()
        } else if (currentPath.includes("find-us")) {
            getFindUsSeo()
        } else if (currentPath.includes("news")) {
            getNewsSeo()
        } else if (currentPath.includes("career")) {
            getCareerSeo()
        } else {
            getDefaultSeo();
        }
    </script>

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
                        secondary2: "#333333",
                        date: "#5D5D5D",
                        description: "#3E3A3A",
                        grayService: "#7D7D7D",
                        product: "#DBFFFA",
                        form: "#A4A4A6",
                        tnc: "#5E5E5E",
                        specTitle: "#EFEFEF",
                        formInput: "#E9E9E9",
                    },
                    background: {
                        product: "#DBFFFA",
                        formError: "#E9E9E9",
                        skewTab: "#D9D9D999",
                        buttonGreen: "#068774"
                    },
                    height: {
                        '110': '28rem',
                        '120': '30rem',
                        '128': '32rem',
                    },
                    skew: {
                        '17': '17deg',
                        '20': '20deg',
                    },
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">


    <style>
        :root {
            --carousel-small-scale: 0.8;
            --carousel-big-scale: 1.3;
            --carousel-transition-duration: 1s;
            /* Transition duration */
            --carousel-stay-duration: 3000ms;
            /* Stay duration */
        }

        header {
            transition: background-color 0.5s ease;
        }

        .mobile-menu {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        header a {
            font-weight: 500;
        }

        .text-stretched {
            display: inline-block;
            transform: scaleY(0.7);
        }

        .text-stretched-half {
            display: inline-block;
            transform: scaleY(0.5);
        }

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

        .carousel {
            display: flex;
            overflow-x: hidden;
            overflow-y: auto;
            /* Make carousel scrollable vertically */
            position: relative;
            width: 100%;
            height: 100%;
            /* Make the carousel take up the full height of the wrapper */
            margin-top: 80px;
        }

        .carousel-track {
            display: flex;
            /* justify-content: center;
            align-items: center; */
            transition: transform var(--carousel-transition-duration) ease-in-out;
            width: calc(100% * 4);
            /* Adjust this to the number of items */
        }

        .carousel-item {
            flex: none;
            transition: transform var(--carousel-transition-duration) ease-in-out, opacity var(--carousel-transition-duration) ease-in-out, z-index 0s;
            width: calc(100% / 2);
            /* Show max two items */
            opacity: 0.4;
            transform: scale(var(--carousel-small-scale));
            /* Apply smaller scale for non-active items */
            z-index: 1;
            /* background-color: red; */
            /* Default z-index */
        }

        .carousel-item.active {
            transform: scale(var(--carousel-big-scale));
            /* Apply big scale */
            opacity: 1;
            z-index: 2;
            /* Highest z-index */
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            /* Ensure images maintain aspect ratio */
        }

        /* Responsive adjustments */
        /* @media (max-width: 768px) {
            .carousel {
                margin-top: 80px;
            }
        } */

        /* @media (max-width: 480px) {
            .carousel {
                margin-top: 40px;
            }

            .carousel .arrow-button .arrow {
                font-size: 16px;
                color: white;
            }

        } */

        .bg-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: -1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(230, 230, 255, 1);
        }

        .bg-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .carousel-wrapper {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-copy {
            text-align: center !important;
        }
    </style>


    <style>
        /* p {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        } */

        header a,
        .kanit,
        h5 {
            font-family: "Kanit", sans-serif;
            /* font-weight: 500; */
            font-style: italic;
        }

        header a,
        .montserrat,
        h5 {
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .open-sans {
            font-family: "Open Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
        }



        .header-gradient {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        }

        .position-button {
            width: 60px;
            height: 10px;
            border-radius: 50%;
            background-color: white;
            transition: background-color 0.3s;
            border: solid 1px #666666;
        }

        .position-button.active {
            background-color: #000000;
        }

        .arrow-button-slideshow {
            position: absolute;
            top: 45%;
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

        .arrow-button-carousel,
        .arrow-button-coverflow {
            position: absolute;
            top: 45%;
            background-color: rgb(255 255 255 / 60%);
            border: 1px solid black;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .arrow-button-coverflow span.arrow {
            color: black;
        }

        .arrow-button-slideshow:hover,
        .arrow-button-carousel:hover,
        .arrow-button-coverflow:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .arrow-button-coverflow:hover span.arrow {
            color: white;
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
            left: 30px;
            color: #000;
        }

        .arrow-button-coverflow.right {
            right: 30px;
            color: #000;
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

        /* Responsive adjustments */
        @media (max-width: 1280px) {

            .arrow-button-carousel,
            .arrow-button-coverflow {
                width: 40px;
                height: 40px;
            }

            .arrow-button-coverflow.left {
                left: 10px;
            }

            .arrow-button-coverflow.right {
                right: 10px;
            }
        }

        @media (max-width: 480px) {
            .arrow-button-coverflow {
                width: 20px;
                height: 20px;
            }

            .arrow-button-coverflow span.arrow {
                font-size: 10px;
            }

            .arrow-button-coverflow.left {
                left: 5px;
            }

            .arrow-button-coverflow.right {
                right: 5px;
            }
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }



        .side-menu {
            position: fixed;
            top: 20%;
            right: 30px;
            width: 110px;
            z-index: 8;
        }

        .side-menu .menu-box {
            width: 110px;
            height: 110px;
            background: #252528D1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            line-height: 16px;
            font-size: 12px;
        }

        .side-menu .menu-box svg {
            font-size: 12px;
            width: 30px;
            height: 30px;
            margin-bottom: 5px;
        }

        .side-menu .menu-box:hover {
            background: #898989D1;
        }

        .side-menu .menu-box.active {
            background: #898989D1;
        }

        .side-menu .menu-box.test-drive {
            padding-top: 15px;
            clip-path: polygon(0 25%, 100% 0%, 100% 100%, 0% 100%);
        }

        .side-menu .menu-box.live-chat {
            padding-bottom: 15px;
            clip-path: polygon(0 0%, 100% 0%, 100% 75%, 0% 100%);
        }

        .container {
            max-width: 1280px !important;
        }

        /* Responsive adjustments */
        @media (max-width: 1280px) {
            .container {
                max-width: 1200px !important;
            }

            .side-menu {
                top: 15%;
                right: 20px;
                width: 90px;
                padding-right: 15px;
            }

            .side-menu .menu-box {
                width: 90px;
                height: 90px;
                line-height: 14px;
                font-size: 10px;
            }
        }

        .login-menu {
            background-color: #068774;
            color: #fff;
            padding: 5px 40px;
            border-radius: 20px;
        }

        .btn-detail-career {
            background-color: #068774;
            color: #fff;
            padding: 5px 30px;
            border-radius: 20px;
        }

        .logo-top {
            max-height: 38px;
            width: auto;
        }

        .logo-byd {
            max-height: 38px;
            width: auto;
        }

        header li {
            margin-left: 35px !important;
        }



        .logo-footer {
            max-width: 130px;
            height: auto;
            margin-bottom: 20px;
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




        .footer-diagonal {
            height: 400px;
            padding-top: 110px;
            /* margin-top: -60px; */
            background-color: #068774;
            /* clip-path: polygon(0 15%, 100% 0%, 100% 100%, 0% 100%); */
            text-align: left;
            /* Align content to the left */
        }

        .footer-diagonal-copy {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            text-align: center;
            color: #fff;
            font-size: 0.7rem;
            background-color: #065447;
            /* clip-path: polygon(0% 0%, 100% 60%, 100% 100%, 0% 100%); */
        }

        .social-media-icons {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
            /* Align icons to the left */
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
            transition: fill 0.3s;
        }

        .social-media-icons a:hover svg {
            fill: #a8a8a8;
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



        /* Responsive adjustments */
        @media (max-width: 1563px) {
            .follow {
                margin-left: 158px;
            }
        }

        @media (max-width: 1280px) {
            .follow {
                margin-left: 125px;
            }
        }

        @media (max-width: 1024px) {
            .footer-diagonal {
                height: 400px;
            }

            .footer-diagonal .w-full {
                margin-bottom: 20px;
                padding: 0 10px;
                /* Adjust padding for smaller screens */
            }

            .follow {
                margin-left: 58px;
            }

            header li {
                margin-left: 15px !important;
            }

            .logo-top {
                max-height: 32px;
                width: auto;
            }

            .logo-byd {
                max-height: 32px;
                width: auto;
            }
        }

        @media (max-width: 820px) {
            .footer-diagonal {
                height: auto;
                padding-top: 50px;
                clip-path: none;
                /* Remove clip-path for small screens */
                text-align: left;
                /* Ensure text is left-aligned on small screens */
            }

            .footer-diagonal-copy {
                margin-top: 0;
                padding-top: 20px;
                clip-path: none;
                /* Remove clip-path for small screens */
                text-align: left;
                /* Ensure text is left-aligned on small screens */
            }

            .footer-diagonal .container {
                flex-direction: column;
                /* Stack the content vertically */
                align-items: flex-start;
                /* Align content to the left */
            }

            .footer-diagonal .w-full {
                margin-bottom: 20px;
                padding: 0 10px;
                /* Adjust padding for smaller screens */
            }

            .social-media-icons {
                justify-content: flex-start;
                /* Left-align social icons */
            }

            .follow {
                margin-left: 120px;
            }

            .logo-top {
                max-height: 25px;
                width: auto;
            }

            .logo-byd {
                max-height: 25px;
                width: auto;
            }
        }

        @media (max-width: 480px) {
            .footer-diagonal {
                padding-top: 30px;
            }

            .footer-diagonal-copy {
                padding-top: 15px;
                font-size: 0.6rem;
            }

            .social-media-icons svg {
                width: 16px;
                height: 20px;
            }

            .footer-diagonal h3 {
                font-size: 1.2rem;
            }

            .footer-diagonal p,
            .footer-diagonal a {
                font-size: 0.8rem !important;
            }

            .follow {
                margin-left: 0;
            }

            .logo-top {
                max-height: 20px;
                width: auto;
            }

            .logo-byd {
                max-height: 20px;
                width: auto;
            }
        }

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
            transition: fill 0.3s;
        }

        .social-media-icons a:hover svg {
            fill: #a8a8a8;
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

        /* .follow {
            margin-left: 120px;
        } */
    </style>

    <style>
        #service-maintenance-video:hover img.icon {
            width: 20px;
            height: 20px;
        }
    </style>

    <style>
        .coverflow-container {
            position: relative;
            height: 520px;
            /* Original height for desktop */
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

        .coverflow .image-wrapper {
            position: absolute;
            width: 850px;
            height: auto;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        .coverflow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 25px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            transition: all 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        .image-wrapper.active .play-icon {
            opacity: 1;
        }

        .image-wrapper.active:hover .play-icon {
            width: 60px;
            height: 60px;
        }

        .position-button {
            width: 60px;
            height: 7px;
            border-radius: 20px;
            background-color: white;
            transition: background-color 0.3s;
            border: solid 1px #666666;
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
            width: 80%;
            /* Adjust this value to change the width */
            max-width: 1200px;
            /* Optional: set a max-width if needed */
            aspect-ratio: 16 / 9;
            /* Maintains 16:9 aspect ratio */
            background: #000;
            overflow: hidden;
        }

        .popup-content iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            z-index: 1;
        }


        .arrow-button.left {
            right: 51%;
            bottom: 180px;
            border: none;
            background-color: transparent;
        }

        .arrow-button.right {
            right: 48%;
            bottom: 180px;
            border: none;
            background-color: transparent;
        }

        /* Responsive Adjustments */
        @media (max-width: 1280px) {
            .coverflow-container {
                height: 450px;
            }

            .coverflow .image-wrapper {
                width: 730px;
                height: auto;
            }

            .position-button {
                width: 60px;
                height: 7px;
            }

            .arrow-button.left {
                bottom: 150px;
            }

            .arrow-button.right {
                bottom: 150px;
            }

        }

        @media (max-width: 1024px) {
            .coverflow-container {
                height: 360px;
            }

            .coverflow .image-wrapper {
                width: 590px;
                height: auto;
            }

            .position-button {
                width: 30px;
                height: 8px;
            }

            .arrow-button.left {
                bottom: 120px;
            }

            .arrow-button.right {
                bottom: 120px;
            }

        }

        @media (max-width: 768px) {
            .coverflow-container {
                height: 260px;
            }

            .coverflow .image-wrapper {
                width: 420px;
                height: auto;
            }

            .play-icon {
                width: 40px;
                height: 40px;
            }

            .image-wrapper.active:hover .play-icon {
                width: 50px;
                height: 50px;
            }

            .position-button {
                width: 25px;
                height: 6px;
            }

            .carousel .arrow-button.left {
                bottom: 90px;
            }

            .carousel .arrow-button.right {
                bottom: 90px;
            }
        }

        @media (max-width: 480px) {
            .coverflow-container {
                height: 150px;
            }

            .coverflow .image-wrapper {
                width: 210px;
                height: auto;
            }

            .play-icon {
                width: 30px;
                height: 30px;
            }

            .image-wrapper.active:hover .play-icon {
                width: 40px;
                height: 40px;
            }

            .position-button {
                width: 20px;
                height: 5px;
            }

            .carousel {
                margin-top: 40px;
            }

            .carousel .arrow-button.left {
                bottom: 40px;
            }

            .carousel .arrow-button.right {
                bottom: 40px;
            }

            .carousel .arrow-button .arrow {
                font-size: 10px;
            }
        }
    </style>

    <style>
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }
    </style>
    <style>
        /* Custom styles for smooth scrolling and carousel animations */
        .about-carousel {
            scroll-snap-type: x mandatory;
            overflow-x: scroll;
            display: flex;
            scroll-behavior: smooth;
        }

        .about-carousel-item {
            scroll-snap-align: start;
            /* flex: 0 0 100%; */
            transition: transform 0.5s ease-in-out;
        }

        .about-carousel-item img {
            width: 100%;
            border-radius: 8px;
        }
    </style>

</head>

<body id="body-contain" class="font-sans" data-base-url="https://cms.bydhaka.co.id/api/v1">
    <!-- Header -->
    <header class="text-black p-4 fixed w-full z-10 transition-all duration-500 ">
        <div class="container mx-auto flex justify-between items-center">
            <div class="hidden lg:block text-2xl font-bold"><img class="logo-top" src="images/logo/logo_byd.png" alt=""></div>
            <nav id="header-menu-desktop" class="hidden lg:block">
                <ul class="flex space-x-4">
                    <li><a id="top-bar" href="index" class="text-sm text-title font-semibold montserrat" data-url="/index">HOME</a></li>
                    <li><a id="top-bar" href="about-us" class="text-sm text-title font-semibold montserrat text-nowrap" data-url="/about-us">ABOUT HAKA</a></li>
                    <li><a id="top-bar" href="product" class="text-sm text-title font-semibold montserrat" data-url="/product">PRODUCT</a></li>
                    <li><a id="top-bar" href="service" class="text-sm text-title font-semibold montserrat" data-url="/service">SERVICE</a></li>
                    <li><a id="top-bar" href="find-us" class="text-sm text-title font-semibold montserrat text-nowrap" data-url="/find-us">FIND US</a></li>
                    <li><a id="top-bar" href="news" class="text-sm text-title font-semibold montserrat text-nowrap" data-url="/news">NEWS ROOM</a></li>
                    <li><a id="top-bar" href="career" class="text-sm text-title font-semibold montserrat text-nowrap" data-url="/career">CAREER</a></li>
                    <li id="login-menu" class=""><a href="login" class="login-menu">LOGIN</a></li>
                    <li id="profile-menu" class="flex justify-center items-center !ml-4 relative">
                        <a id="profile-icon" href="#" class="profile-menu w-7 h-7 rounded-full flex justify-center items-center cursor-pointer bg-formInput hover:!shadow-none">
                            <svg class="w-4 h-4 text-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div id="dropdown-menu" class="hidden absolute top-full mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg right-0">
                            <ul class="py-1">
                                <li class="cursor-pointer">
                                    <div id="logout-btn" class="block px-4 py-2 text-sm text-title dark:text-title montserrat">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="index" class="hidden lg:block"><img class="logo-byd" src="images/logo/logo_haka.png" alt=""></a>
            <a href="index" class="lg:hidden flex justify-start items-center">
                <img class="logo-top" src="images/logo/logo_byd.png" alt="">
                <span class="w-1 h-7 border-r border-gray-500 mx-2"></span>
                <img class="logo-byd" src="images/logo/logo_haka.png" alt="">
            </a>
            <div class="lg:hidden">
                <button id="burger-button" class="text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <nav id="mobile-menu" class="mobile-menu opacity-0 max-h-0 hidden overflow-hidden lg:hidden bg-white transition-all duration-700 ease-in-out z-20 relative">
            <ul class="flex flex-col space-y-4 p-4">
                <li><a href="index" class="montserrat hover:text-gray-600" data-url="/index">HOME</a></li>
                <li><a href="about-us" class="montserrat hover:text-gray-600" data-url="/about-us">ABOUT HAKA</a></li>
                <li><a href="product" class="montserrat hover:text-gray-600" data-url="/product">PRODUCT</a></li>
                <li><a href="service" class="montserrat hover:text-gray-600" data-url="/service">SERVICE</a></li>
                <li><a href="find-us" class="montserrat hover:text-gray-600" data-url="/find-us">FIND US</a></li>
                <li><a href="news" class="montserrat hover:text-gray-600" data-url="/news">NEWS ROOM</a></li>
                <li><a href="career" class="montserrat hover:text-gray-600" data-url="/career">CAREER</a></li>
                <li id="login-menu" class=""><a href="login" class="login-menu">LOGIN</a></li>
                <!-- <li><a href="index" class=""><img class="logo-byd" src="images/logo/logo_byd.png" alt=""></a></li> -->
                <li id="profile-menu" class="flex justify-start items-center relative">
                    <a id="profile-icon-mobile" href="#" class="profile-menu-mobile w-7 h-7 rounded-full flex justify-center items-center cursor-pointer bg-formInput hover:!shadow-none">
                        <svg class="w-4 h-4 text-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                    </a>

                    <!-- Dropdown Menu -->
                    <div id="dropdown-menu-mobile" class="hidden absolute top-[-16px] mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg right-0">
                        <ul class="py-1">
                            <li class="cursor-pointer">
                                <div id="logout-btn-mobile" class="block px-4 py-2 text-sm text-title dark:text-title kanit">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileIcon = document.getElementById('profile-icon');
            const dropdownMenu = document.getElementById('dropdown-menu');
            const logoutBtn = document.getElementById('logout-btn');
            const profileIconMobile = document.getElementById('profile-icon-mobile');
            const dropdownMenuMobile = document.getElementById('dropdown-menu-mobile');
            const logoutBtnMobile = document.getElementById('logout-btn-mobile');
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')


            // Toggle dropdown on profile icon click
            profileIcon.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenu.classList.toggle('hidden');
            });

            // Toggle dropdown on profile icon mobile click
            profileIconMobile.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenuMobile.classList.toggle('hidden');
            });

            // Hide the dropdown if user clicks outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = profileIcon.contains(event.target) || dropdownMenu.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });

            function signOut() {
                fetch(`${BASE_URL}/logout`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            "Authorization": `Bearer ${window.localStorage.getItem('token')}`
                        },
                        body: ""
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            window.localStorage.removeItem('token')
                            window.localStorage.removeItem('user')
                            window.location.href = 'login';
                        } else {
                            console.error('Logout failed:', data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Handle logout button click
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                signOut()
            });
            // Handle logout button mobile click
            logoutBtnMobile.addEventListener('click', function(e) {
                e.preventDefault();
                signOut()
            });
        });
    </script>
    <script>
        const pathname = window.location.pathname;
        const token = window.localStorage.getItem('token')
        const stringUser = window.localStorage.getItem('haka-user')
        const user = stringUser ? JSON.parse(stringUser) : null

        const navElements = document.querySelectorAll('nav');

        navElements.forEach((nav) => {
            nav.querySelectorAll('.text-title').forEach((element) => {
                element.classList.remove('text-white');
                element.classList.add('text-title');
            });
            nav.querySelectorAll('a').forEach(element => element.classList.add('!border-b-0'))
            nav.querySelectorAll('a').forEach(element => {
                element.addEventListener('mouseover', () => {
                    element.classList.remove('!border-b-0', 'font-semibold')
                    element.classList.add('hover:text-black', 'hover:border-b-2', 'hover:border-b-black', 'font-bold')
                })
                if (pathname.includes(element.getAttribute('data-url'))) {
                    element.classList.remove('!border-b-0', 'border-b-white', 'text-title', 'font-semibold')
                    element.classList.add('border-b-2', 'border-b-black', 'text-black', 'font-bold')
                }
            })
        })

        // }

        function generateThumbnail(username) {
            // Define colors for different starting letters
            const colors = {
                A: '#FF5733',
                B: '#33FF57',
                C: '#3357FF',
                D: '#FF33B8',
                E: '#B833FF',
                F: '#33FFF2',
                G: '#FF8F33',
                H: '#DFFF33',
                I: '#FF3333',
                J: '#33D4FF',
                K: '#C133FF',
                L: '#FF3380',
                M: '#FFB833',
                N: '#33FFB3',
                O: '#8033FF',
                P: '#FF8F33',
                Q: '#33FF40',
                R: '#FF3333',
                S: '#3373FF',
                T: '#F333FF',
                U: '#AFFF33',
                V: '#FF5733',
                W: '#33FF80',
                X: '#A833FF',
                Y: '#FF3364',
                Z: '#33C8FF'
            };

            // Extract first character from username, uppercase it


            const firstLetter = username[0].toUpperCase();
            const backgroundColor = colors[firstLetter] || '#CCCCCC'; // Default if not in map

            // Abbreviate username, take first and last 
            const splitNames = username.split(' ')
            let abbreviation = `${splitNames[0].substr(0,1)}${splitNames?.length >= 1 ? splitNames[1].substr(0,1)  : ""}`

            document.querySelector('.profile-menu').style.background = 'black'
            document.querySelector('.profile-menu').innerHTML = `<h1 class="text-white normal">${abbreviation.toUpperCase()}</h1>`
            document.querySelector('.profile-menu-mobile').style.background = 'black'
            document.querySelector('.profile-menu-mobile').innerHTML = `<h1 class="text-white normal">${abbreviation.toUpperCase()}</h1>`
        }

        if (token && user?.id) {
            document.querySelectorAll('#login-menu').forEach(element => element.classList.add('hidden'))
            document.querySelectorAll('#profile-menu').forEach(element => element.classList.remove('hidden'))
            generateThumbnail(`${user.first_name}${user?.last_name ? " " + user.last_name : ""}`)
        } else {
            document.querySelectorAll('#login-menu').forEach(element => element.classList.remove('hidden'))
            document.querySelectorAll('#profile-menu').forEach(element => element.classList.add('hidden'))
        }

        document.getElementById('burger-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');

            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.classList.remove('max-h-0', 'opacity-0');
                    menu.classList.add('max-h-screen', 'opacity-100');
                }, 10);
            } else {
                menu.classList.remove('max-h-screen', 'opacity-100');
                menu.classList.add('max-h-0', 'opacity-0');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 500);
            }
        });

        function formatRupiah(value) {
            const number = typeof value === 'string' ? parseFloat(value) : value;
            if (isNaN(number)) {
                return value;
            }
            return number.toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });
        }

        function encodeParams(str) {
            return encodeURIComponent(str)
        }

        function decodeParams(str) {
            return decodeURIComponent(str)
        }

        function formatDate(date) {
            const options = {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            };
            return new Date(date).toLocaleDateString('en-US', options);
        }

        function formatDateInd(date) {
            const options = {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            };
            return new Date(date).toLocaleDateString('id-ID', options);
        }

        function formatDateYYYYMMDD(dateString) {
            const newDate = new Date(dateString);

            const year = newDate.getFullYear();
            const month = String(newDate.getMonth() + 1).padStart(2, '0'); // getMonth() dimulai dari 0, jadi tambahkan 1
            const day = String(newDate.getDate()).padStart(2, '0');

            return `${year}-${month}-${day}`;
        }

        function formatDateToDateString(dateString) {
            const date = new Date(dateString);
            const now = new Date();
            const timeDiff = Math.abs(now - date); // Get time difference in milliseconds

            // Helper constants
            const minute = 60 * 1000;
            const hour = 60 * minute;
            const day = 24 * hour;
            const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            // Time ago logic
            let timeAgo = '';
            if (timeDiff < minute) {
                timeAgo = 'Just now';
            } else if (timeDiff < hour) {
                const minutesAgo = Math.floor(timeDiff / minute);
                timeAgo = `${minutesAgo} minute${minutesAgo > 1 ? 's' : ''} ago`;
            } else if (timeDiff < day) {
                const hoursAgo = Math.floor(timeDiff / hour);
                timeAgo = `${hoursAgo} hour${hoursAgo > 1 ? 's' : ''} ago`;
            } else if (timeDiff < day * 7) {
                const daysAgo = Math.floor(timeDiff / day);
                timeAgo = `${daysAgo} day${daysAgo > 1 ? 's' : ''} ago`;
            }

            // Specific date format
            const dayOfMonth = date.getDate();
            const month = monthNames[date.getMonth()];
            const year = date.getFullYear();
            const formattedDate = `${month} ${dayOfMonth}, ${year}`;

            return `${timeAgo ? timeAgo + "; " : " "}${formattedDate}`;
        }

        function generateTitle(top, bottom, classBottom) {
            return `<div class="italic font-black text-bigTitle text-3xl lg:text-6xl montserrat">${top}</div>
    <div class="${classBottom ?? ""} font-[800] text-title ml-5 mb-10 text-xl -mt-5 lg:ml-8 lg:-mt-6 lg:text-2xl montserrat">${bottom}</div>`
        }

        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const phoneNumberRegex = /^\+?(\d{1,3})?[-.\s]?(\(?\d{1,4}\)?)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;
    </script>
