<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Xerotic - Digital Marketing & Web Solutions</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <style>
        /* --------- Custom Global Variables & Fonts --------- */
        :root {
            --yellow: #ffc107;
            --dark-blue: #1f2a50;
            --blue: #27346a;
            --light-blue: #0f1342;
            --gray-light: #f9f9f9;
            --gray-dark: #adb5bd;
            --gray-mid: #dee2e6;
            --white: #fff;
            --highlight-yellow: #fdc504;
            --button-bg-yellow: #ffcb05;
            --button-bg-blue: #203559;
            --card-yellow-bg: #ffdf00;
        }

        /* body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-blue);
            background-color: var(--white);
        } */

        /* --------- Top Bar --------- */
        /* #topbar {
            background-color: var(--dark-blue);
            color: var(--white);
            font-size: 0.875rem;
            font-weight: 500;
            height: 45px;
            line-height: 28px;
        }

        #topbar a.social-link {
            color: var(--white);
            margin-left: 15px;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        #topbar a.social-link:hover {
            color: var(--yellow);
            text-decoration: none;
        } */




        /* --------- Hero Section --------- */
        #hero {
            background: url("assets/images/banner2.png") center/cover no-repeat;
            color: var(--white);
            padding: 7rem 0 5rem 0;
            position: relative;
            overflow: hidden;
        }

        #hero::before {
            content: "";
            position: absolute;
            inset: 0;
            /* background: linear-gradient(90deg, rgba(33, 44, 85, 0.9) 40%, rgba(33, 44, 85, 0.6) 100%); */
            z-index: 0;
        }

        /*
        #hero .container {
            position: relative;
            z-index: 2;
        } */

        #hero h1 {
            font-weight: 700;
            font-size: clamp(1.8rem, 6vw, 3rem);
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }

        #hero h1 span.yellow {
            color: var(--yellow);
        }

        #hero p.lead {
            max-width: 520px;
            font-size: 1rem;
            margin-bottom: 2rem;
            color: #d7d7d7;
        }

        #hero .btn-custom-yellow {
            background-color: var(--button-bg-yellow);
            color: var(--dark-blue);
            font-weight: 700;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            border: none;
            margin-right: 1rem;
            transition: background 0.3s ease;
        }

        #hero .btn-custom-yellow:hover {
            background-color: #e6b800;
            color: var(--white);
        }

        #hero .btn-custom-dark {
            background-color: var(--button-bg-blue);
            color: var(--white);
            font-weight: 700;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            border: none;
            transition: background 0.3s ease;
        }

        #hero .btn-custom-dark:hover {
            background-color: #12243b;
            color: var(--yellow);
        }

        /* Carousel dots for hero if needed (dummy placeholder) */
        #hero-carousel-indicators {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        #hero-carousel-indicators button {
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            width: 12px;
            height: 12px;
            margin: 0 5px;
            cursor: pointer;
        }

        #hero-carousel-indicators button.active {
            background-color: var(--yellow);
        }

        /* --------- Services Section --------- */
        #services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 31px;
            margin-top: -80px;
            margin-bottom: 40px;
            position: relative;
            z-index: 2;
            padding: 1rem;
            /* bottom: -935px; */
        }

        .service-card {
            box-shadow: 0 4px 15px rgb(34 41 47 / 10%);
            background: #ffffff;
            padding: 2rem 1.5rem;
            transition: box-shadow 0.3s ease;
            height: 100%;
            border-style: solid;
            border-color: #ffc107;
            border-width: 0px 2px 0px 2px;


        }

        #services_conten>.col-md-3 {
            padding-left: 0;
            padding-right: 0;
        }

        .service-card:hover {
            transform: scale(1.05);
            /* Zoom in */
            background-color: #ffc107;
            /* Change background */
            color: #fff;
            /* Change text color */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .service-card:hover .service-icon {
            color: #fff;
            /* change icon color on hover */
        }

        .service-card h5,
        .service-card p {
            transition: color 0.3s ease;
        }

        .service-icon {
            color: #ffc107;
            font-size: 2rem;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        /* --------- About Us Section --------- */
        #about {
            padding: 5rem 0;
            background-color: var(--gray-light);
            overflow: hidden;
        }

        #about .about-images {
            position: relative;
            max-width: 400px;
            margin: auto;
        }

        #about .about-images img {
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgb(0 0 0 / 0.1);
            object-fit: cover;
        }

        #about .about-images .top-image {
            width: 260px;
            position: absolute;
            top: 30px;
            left: -50px;
            border-radius: 1rem;
            box-shadow: 0 15px 35px rgb(0 0 0 / 0.15);
            z-index: 10;
            transition: transform 0.3s ease;
        }

        #about .about-images .bottom-image {
            width: 360px;
            position: relative;
            margin-left: 80px;
            border-radius: 1rem;
            box-shadow: 0 15px 35px rgb(0 0 0 / 0.15);
            transition: transform 0.3s ease;
        }

        #about .about-content h3 {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        #about .btn-discover {
            background-color: var(--button-bg-blue);
            color: var(--white);
            font-weight: 600;
            padding: 0.5rem 1.3rem;
            border-radius: 6px;
            border: none;
            transition: background 0.3s ease;
        }

        #about .btn-discover:hover {
            background-color: var(--highlight-yellow);
            color: var(--dark-blue);
        }

        /* --------- Best Digital Marketing Services Section --------- */
        #best-marketing {
            background-color: #615c6a;
            color: var(--white);
            padding: 5rem 0 6rem;
        }

        #best-marketing h2 {
            font-weight: 700;
            font-size: 2.1rem;
            margin-bottom: 0.7rem;
        }

        #best-marketing h2 .highlight {
            color: var(--yellow);
        }

        #best-marketing p.description {
            max-width: 580px;
            margin-bottom: 3rem;
            opacity: 0.8;
        }

        #best-marketing .card {
            border: none;
            box-shadow: none;
            border-radius: 0.7rem;
            text-align: center;
            padding: 2rem 1.5rem;
            cursor: default;
            transition: transform 0.25s ease;
            background-color: #3a3650;
        }

        #best-marketing .card:hover {
            background-color: var(--button-bg-yellow);
            color: var(--dark-blue);
            transform: translateY(-10px);
        }

        #best-marketing .card .card-icon {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            color: var(--yellow);
            transition: color 0.25s ease;
        }

        #best-marketing .card:hover .card-icon {
            color: var(--dark-blue);
        }

        #best-marketing .highlight-yellow {
            background-color: var(--button-bg-yellow);
            color: var(--dark-blue);
        }

        #best-marketing .btn-discover-more {
            margin-top: 2.8rem;
            background-color: var(--button-bg-yellow);
            color: var(--dark-blue);
            font-weight: 700;
            padding: 0.6rem 1.8rem;
            border-radius: 4px;
            border: none;
            transition: background 0.3s ease;
            display: inline-block;
        }

        #best-marketing .btn-discover-more:hover {
            background-color: #e6b800;
            color: var(--white);
            text-decoration: none;
        }

        /* --------- Why Choose Us Section --------- */
        #why-choose {
            padding: 6rem 0 5rem;
            background-color: #f1f1f7;
            text-align: center;
        }

        #why-choose h2 {
            font-weight: 700;
            font-size: 2.25rem;
            margin-bottom: 0.2rem;
            color: black;
        }

        #why-choose p.subheading {
            max-width: 620px;
            margin: auto;
            color: black;
            margin-bottom: 3rem;
        }

        #why-choose .why-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            max-width: 960px;
            margin: auto;
            position: relative;
        }

        #why-choose .why-card {
            background-color: #ffcb05;
            padding: 2rem 1.5rem;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgb(0 0 0 / 0.1);
            flex: 1 1 280px;
            max-width: 320px;
            transition: background-color 0.3s ease;
            min-height: 160px;
            color: var(--dark-blue);
            position: relative;
            z-index: 1;
        }

        #why-choose .highlight-yellow {
            background-color: var(--button-bg-yellow);
            color: var(--dark-blue);
            box-shadow: 0 8px 25px rgb(253 197 4 / 0.5);
            z-index: 2;
        }

        #why-choose .why-card i {
            font-size: 2rem;
            margin-bottom: 0.7rem;
            color: var(--yellow);
        }

        /* Decorative dotted line behind cards */
        #why-choose .dotted-line {
            position: absolute;
            width: 80vw;
            height: 2px;
            background: repeating-linear-gradient(to right, var(--gray-mid) 0, var(--gray-mid) 4px, transparent 4px, transparent 8px);
            top: 45px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 0;
            border-radius: 2px;
        }


        #client-feedback {
            background: #4c6ef5;
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .testimonial-wrapper {
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            margin: 40px auto;
            position: relative;
        }

        .testimonial-track {
            display: flex;
            transition: transform 1s ease;
            will-change: transform;
        }

        .testimonial-card {
            flex: 0 0 320px;
            margin: 0 10px;
            background: white;
            color: black;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            opacity: 0.3;
            filter: blur(2px);
            transition: all 0.5s ease;
            text-align: left;
        }

        .testimonial-card.center {
            opacity: 1;
            filter: none;
            transform: scale(1.05);
            z-index: 2;
        }

        .client-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .client-info img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* --------- Latest Blog Section --------- */
        #latest-blog {
            padding: 4rem 0;
            background-color: var(--gray-light);
            text-align: center;
        }

        #latest-blog h3 {
            font-weight: 700;
            font-size: 1.9rem;
            margin-bottom: 0.3rem;
            color: black;
        }

        #latest-blog p.subheading {
            max-width: 600px;
            margin: 0 auto 3rem;
            color: var(--dark-blue);
            opacity: 0.8;
        }

        .blog-card {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 10px 25px rgb(0 0 0 / 0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgb(0 0 0 / 0.1);
        }

        .blog-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .blog-card-body {
            padding: 1.2rem 1rem 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .blog-meta {
            font-size: 0.8rem;
            color: var(--dark-blue);
            opacity: 0.6;
            margin-bottom: 0.5rem;
            user-select: none;
        }

        .blog-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
            color: var(--dark-blue);
            text-align: left;
        }

        .blog-excerpt {
            font-size: 0.9rem;
            color: var(--dark-blue);
            opacity: 0.8;
            flex-grow: 1;
            text-align: left;
            margin-bottom: 1rem;
        }

        .blog-readmore {
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--yellow);
            text-align: right;
            text-decoration: none;
            user-select: none;
            transition: color 0.3s ease;
            align-self: flex-end;
        }

        .blog-readmore:hover {
            color: var(--button-bg-blue);
            text-decoration: underline;
        }

        /* --------- Responsive Adjustments --------- */
        @media (max-width: 991px) {
            #about .about-images .top-image {
                width: 200px;
                left: -35px;
                top: 20px;
            }

            #about .about-images .bottom-image {
                width: 260px;
                margin-left: 50px;
            }
        }

        @media (max-width: 767px) {
            #why-choose .why-cards {
                flex-direction: column;
            }

            #why-choose .dotted-line {
                display: none;
            }

            #best-marketing .card {
                margin-bottom: 1.5rem;
            }

            #about .about-images {
                max-width: 100%;
                margin-bottom: 2rem;
            }
        }

        /* Make the dropdown look custom and vertical */
        .custom-dropdown-menu {
            padding-left: 1rem;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            background-color: #fff;
            min-width: 250px;
        }

        /* List item bullets like your screenshot */
        .custom-dropdown-menu .dropdown-item::before {
            content: "●";
            color: orange;
            font-size: 0.6rem;
            margin-right: 8px;
            vertical-align: middle;
        }

        /* Hover effect */
        .custom-dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #f5a803;
        }

        /* Optional: orange text for main dropdown */
        .text-orange {
            color: orange !important;
        }

        #technologies .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ffc107;
            /* Optional: yellow or accent color */
            margin-bottom: 0.5rem;
        }

        #technologies h5 {
            font-size: 1.4rem;
            font-weight: 400;
            margin-bottom: 2rem;
        }
    </style>
    <style>
        .top-bar img {
            width: 16px;
            height: auto;
        }

        .top-bar a {
            text-decoration: none;
            transition: 0.3s;
        }

        .top-bar a:hover {
            color: #f0ad4e;
        }
    </style>

</head>

<body>
    <!-- Topbar -->
    {{-- <div id="topbar" class="d-flex justify-content-between align-items-center px-3">
        <div class="text-start small">
            Provide High Quality & Cost Effective Service
            <span><img src="{{ asset('assets/images/usa-flag.png') }}">3024124102</span>
            <span>sales@xeroictech.com</span>
        </div>
        <div class="text-end">
            Follow Us On
            <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
    </div> --}}
    <!-- Top Info Bar -->
    <div class="bg-dark text-white py-1 small">
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
            <!-- Left Side Info -->
            <div class="d-flex align-items-center flex-wrap gap-3">
                <span>We Provide High Quality &amp; Cost Effective Services</span>

                <span class="d-flex align-items-center gap-1 border-start ps-2">
                    <img src="{{ asset('assets/images/indian-flag.png') }}" alt="India" style="width: 16px;">
                    (+91) 98624-76791
                </span>
                <span class="d-flex align-items-center gap-1 border-start ps-2">
                    <img src="{{ asset('assets/images/australia-flag.png') }}" alt="Australia" style="width: 16px;">
                    302412-4102
                </span>
                <span class="d-flex align-items-center gap-1 border-start ps-2">
                    <img src="{{ asset('assets/images/usa-flag.png') }}" alt="USA" style="width: 16px;">
                    302412-4102
                </span>
                <span class="d-flex align-items-center gap-1 border-start ps-2">
                    <img src="{{ asset('assets/images/email.png') }}" alt="EMAIL" style="width: 16px;">
                    sales@xeroictech.com
                </span>
            </div>

            <!-- Right Side Social Icons -->
            <div class="d-flex align-items-center gap-2">
                <span class="me-2">Follow Us On:</span>
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" height="50">
        </a>
        <div class="container">


            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('website.development') }}">Website
                                    Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('graphic.designing') }}">Graphic Designing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('digital.marketing') }}">Digital Marketing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('UI/UX.designing') }}">UI/UX Designing</a></li>
                            <li><a class="dropdown-item" href="{{ route('app.development') }}">App Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('SEO.Content') }}">SEO & Content Writing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('AI.Services') }}">AI Services</a></li>
                            <li><a class="dropdown-item" href="{{ route('Game.Development') }}">Game Development</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('Big.data') }}">Big Data</a></li>
                            <li><a class="dropdown-item" href="{{ route('CRM.ERP.Solution') }}">CRM & ERP Solution</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('Cloud.Hosting') }}">Cloud Hosting</a></li>
                            <li><a class="dropdown-item" href="{{ route('IT.Support') }}">IT Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Client Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('Contact') }}">Contact Us</a></li>
                </ul>
                <button class="btn btn-login ms-lg-3 my-2 my-lg-0" type="button">Log-in</button>
            </div>
        </div>
    </nav>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.nav-item.dropdown');

            dropdown.addEventListener('mouseover', function() {
                const menu = dropdown.querySelector('.dropdown-menu');
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                if (!menu.classList.contains('show')) {
                    new bootstrap.Dropdown(toggle).show();
                }
            });

            dropdown.addEventListener('mouseleave', function() {
                const menu = dropdown.querySelector('.dropdown-menu');
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                if (menu.classList.contains('show')) {
                    new bootstrap.Dropdown(toggle).hide();
                }
            });
        });
    </script>
