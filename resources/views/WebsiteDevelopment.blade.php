@extends('Layout.main')

@section('container')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Website Development</title>
    <style>
        /* Reset & basic */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* body {
            background: #fff;
            color: #333;
            font-size: 14px;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        } */

        /* Header */
        .header {
            width: 100%;
            background-image: url("https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7c23a9b5-3d74-4095-b2fa-104aa29172f2.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 20px;
            position: relative;
            font-weight: 600;
        }

        .header .title-main {
            font-size: 1.8rem;
            font-weight: 700;
            max-width: 1280px;
            margin: 0 auto;
            text-align: left;
        }

        .header .breadcrumb {
            position: absolute;
            bottom: 12px;
            right: 20px;
            font-size: 0.75rem;
            font-weight: 400;
            opacity: 0.8;
            user-select: none;
            max-width: 1280px;
            margin: 0 auto;
        }

        .header .breadcrumb a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
        }

        .header .breadcrumb a:hover {
            text-decoration: underline;
            opacity: 1;
        }

        /* Layout main container */
        main.container {
            max-width: 100%;
            width: 100%;
            padding: 40px 20px 80px 20px;
            display: flex;
            gap: 40px;
            margin: 0 auto;
            flex-wrap: wrap;
            justify-content: center;
            background: #faf9e8;
        }

        /* Sidebar left */
        aside.sidebar {
            flex-shrink: 0;
            width: 300px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* Services List */
        .services-list {
            background: #f4f7fb;
            padding: 20px 25px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 600;
            color: #1c1c1c;
            user-select: none;
            box-shadow: 1px 2px 6px rgb(0 0 0 / 0.05);
        }

        .services-list h3 {
            font-weight: 700;
            margin-bottom: 16px;
            font-size: 14px;
            border-bottom: 1px solid #cbd6e2;
            padding-bottom: 8px;
        }

        .services-list ul {
            list-style: none;
        }

        .services-list ul li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            border-bottom: 1px solid #e0e7f1;
            font-weight: 400;
            font-size: 13px;
            cursor: pointer;
            transition: color 0.15s ease-in-out;
        }

        .services-list ul li:last-child {
            border-bottom: none;
        }

        .services-list ul li:hover {
            color: #f97316;
        }

        .services-list ul li span.arrow {
            font-weight: 600;
            font-size: 14px;
            color: #a1aab8;
            margin-left: 6px;
            user-select: none;
        }

        .services-list ul li:hover span.arrow {
            color: #f97316;
        }

        /* Working Hours Box */
        .working-hours {
            background: #f4f7fb;
            padding: 20px;
            border-radius: 5px;
            font-size: 12px;
            box-shadow: 1px 2px 6px rgb(0 0 0 / 0.05);
        }

        .working-hours h3 {
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 18px;
            color: #1c1c1c;
            border-bottom: 1px solid #cbd6e2;
            padding-bottom: 8px;
        }

        .working-hours ul {
            list-style: none;
            padding-left: 0;
        }

        .working-hours ul li {
            display: flex;
            align-items: center;
            margin-bottom: 13px;
            font-weight: 400;
            font-size: 13px;
            color: #555d68;
        }

        .working-hours ul li:last-child {
            margin-bottom: 0;
        }

        .working-hours ul li .circle {
            border: 1px solid #ddd;
            border-radius: 50%;
            height: 15px;
            width: 15px;
            display: inline-block;
            margin-right: 12px;
            flex-shrink: 0;
            position: relative;
            background: #fff;
        }

        .working-hours ul li.closed .circle {
            opacity: 0.4;
        }

        .working-hours ul li.closed {
            color: #a2a6ad;
            font-style: italic;
        }

        /* Question Box */
        .question-box {
            position: relative;
            background-image: url("https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/18e95188-3866-418e-8da9-08a2812d21ca.png");
            background-size: cover;
            background-position: center;
            border-radius: 5px;
            padding: 36px 20px 24px;
            color: white;
            font-weight: 700;
            text-shadow: 0 1px 5px rgb(0 0 0 / 0.6);
            width: 300px;
            box-shadow: inset 0 0 0 1000px rgb(11 30 58 / 0.65);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 14px;
            user-select: none;
        }

        .question-box p {
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 900;
        }

        .question-box button {
            background-color: #f97316;
            border: none;
            border-radius: 3px;
            padding: 10px 18px;
            color: white;
            font-weight: 700;
            cursor: pointer;
            font-size: 13px;
            box-shadow: 0 4px 14px rgb(249 115 22 / 0.4);
            transition: background-color 0.2s ease-in-out;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 6px;
            width: max-content;
        }

        .question-box button:hover {
            background-color: #dc6803;
            box-shadow: 0 6px 20px rgb(220 104 3 / 0.5);
        }

        .question-box button::after {
            content: "→";
            font-weight: 900;
            font-size: 16px;
            user-select: none;
        }

        /* Content Section */
        .content-section {
            flex: 1 1 600px;
            max-width: 880px;
            display: flex;
            flex-direction: column;
            gap: 28px;
        }

        .content-image-container {
            width: 100%;
            height: 250px;
            box-shadow: 0 2px 12px rgb(0 0 0 / 0.15);
            border-radius: 4px;
            overflow: hidden;
        }

        .content-image-container img {
            width: 100%;
            height: 106%;
            object-fit: contain;
            object-position: center;
            display: block;
            background: #f0f2f7;
        }

        .content-section h2 {
            font-size: 18px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .content-section p {
            color: #66676b;
            font-weight: 400;
            font-size: 14px;
            max-width: 100%;
            text-align: left;
        }

        .content-section p strong {
            color: #f97316;
            font-weight: 700;
        }

        .content-section p a {
            color: #f97316;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .content-section p a:hover {
            text-decoration: underline;
        }

        /* Highlighted tech span styling */
        .highlight-tech {
            color: #f97316;
            font-weight: 700;
        }

        /* Floating chat/email button bottom right */
        .floating-contact {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 48px;
            height: 48px;
            background-color: #f97316;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgb(249 115 22 / 0.7);
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: box-shadow 0.15s ease-in-out;
            z-index: 9999;
            user-select: none;
        }

        .floating-contact:hover {
            box-shadow: 0 5px 16px rgb(249 115 22 / 0.9);
        }

        .floating-contact svg {
            width: 20px;
            height: 20px;
            fill: white;
        }

        /* Responsive */
        @media (max-width: 1140px) {
            main.container {
                flex-direction: column;
                align-items: center;
                padding-bottom: 50px;
            }

            aside.sidebar {
                width: 100%;
                max-width: 500px;
                gap: 24px;
            }

            .content-section {
                max-width: 100%;
            }

            .question-box,
            .working-hours,
            .services-list {
                width: 100%;
            }

            .header .breadcrumb {
                bottom: 8px;
                right: 12px;
                font-size: 0.65rem;
            }
        }
    </style>
    <style>
        .process-step-number {
            background-color: #fb7f2e;
            width: 32px;
            height: 32px;
            border-radius: 9999px;
            color: white;
            font-weight: 700;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: -10px;
            right: -10px;
            box-shadow: 0 0 6px rgb(251 127 46 / 0.6);
            user-select: none;
            z-index: 10;
        }

        .process-arrow {
            stroke: #d1d9ff;
            stroke-width: 3;
            opacity: 0.5;
        }

        /* Arrow animations or repeated style */
        .arrow {
            max-width: 120px;
            width: 100%;
            margin: 0 2.5rem;
        }

        .footer-divider {
            border-color: #fb7f2e;
        }

        /* Custom scroll to top button */
        #scrollTopBtn {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background-color: #fb7f2e;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 8px rgb(251 127 46 / 0.75);
            transition: background-color 0.3s ease;
            z-index: 100;
        }

        #scrollTopBtn:hover {
            background-color: #e96f00;
        }

        #scrollTopBtn svg {
            stroke: white;
            stroke-width: 2;
        }
    </style>


</head>

<body>
    <header class="header" role="banner" aria-label="Website Development Header with background image">
        <h1 class="title-main">Website Development</h1>
        <nav class="breadcrumb" aria-label="Breadcrumb navigation">
            <a href="#" tabindex="0">Home</a> / Website Development
        </nav>
    </header>

    <main class="container">

        <aside class="sidebar" role="complementary" aria-label="Sidebar services and info">

            <section class="services-list" aria-labelledby="services-list-title">
                <h2 id="services-list-title">All Services</h2>
                <ul>
                    <li tabindex="">Website Development <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">Graphic Designing <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">Digital Marketing <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">UI/UX Designing <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">App Development <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">SEO & Content Writing <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">AI Services <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">Game Development <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0"><strong>Big Data</strong> <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">CRM & ERP Solution <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">Cloud Hosting <span class="arrow" aria-hidden="true">→</span></li>
                    <li tabindex="0">IT Support <span class="arrow" aria-hidden="true">→</span></li>
                </ul>
            </section>

            <section class="working-hours" aria-labelledby="working-hours-title">
                <h2 id="working-hours-title">Working Hours</h2>
                <ul>
                    <li tabindex="0"><span class="circle" aria-hidden="true"></span>Mon – Fri 09.00 – 06.00 pm</li>
                    <li class="closed" tabindex="0"><span class="circle" aria-hidden="true"></span>Saturday closed</li>
                    <li class="closed" tabindex="0"><span class="circle" aria-hidden="true"></span>Sunday closed</li>
                </ul>
            </section>

            <section class="question-box" aria-label="Question request form call to action">
                <p>Have a <br /><strong>Question?</strong></p>
                <button type="button" aria-label="Request a Quote button">Request a Quote</button>
            </section>

        </aside>

        <article class="content-section" role="main" aria-labelledby="content-title">

            <div class="content-image-container" aria-hidden="true">
                <img src="{{ asset('assets/images/web.png') }}"
                    alt="Hands typing on a laptop keyboard. Overlaid icons of HTML5, JavaScript, and PHP appear in front of glowing code snippets in the background. Digital tech concept" />
            </div>

            <h2 id="content-title">Website Development</h2>
            <p>
                At <strong>XeroicTech</strong>, we specialize in delivering end-to-end website development solutions
                tailored to meet diverse business needs, whether you're just starting with a simple informational site
                or aiming for a complex web application. Our approach combines creativity, cutting-edge technology, and
                industry best practices to build websites that are visually compelling, functional, and user-friendly.
            </p>
            <p>
                We start by understanding your goals and audience to create intuitive designs that reflect your brand
                identity. Our design philosophy prioritizes clean layouts, responsive interfaces, and seamless
                navigation to provide visitors with an engaging experience across all devices — desktops, tablets, and
                smartphones. By following mobile-first principles and accessibility standards, we maximize your site’s
                reach and usability.
            </p>
            <p>
                Our development expertise spans a wide range of technologies. On the front-end, we leverage modern
                frameworks such as <a href="#" class="highlight-tech">React.js</a>, <a href="#"
                    class="highlight-tech">Angular</a>, and <a href="#" class="highlight-tech">Vue.js</a> to build
                dynamic, interactive user interfaces. For back-end development, we use powerful platforms like <a
                    href="#" class="highlight-tech">Node.js</a>, <a href="#" class="highlight-tech">PHP</a>, <a href="#"
                    class="highlight-tech">Python</a>, and <a href="#" class="highlight-tech">Ruby on Rails</a>,
                ensuring scalable and secure server-side applications. We expertly manage databases with <a href="#"
                    class="highlight-tech">MySQL</a>, <a href="#" class="highlight-tech">MongoDB</a>, and <a href="#"
                    class="highlight-tech">PostgreSQL</a> for reliable data handling.
            </p>
            <p>
                For content management, we offer solutions based on popular CMS platforms like <a href="#"
                    class="highlight-tech">WordPress</a>, <a href="#" class="highlight-tech">Drupal</a>, and <a href="#"
                    class="highlight-tech">Joomla</a>, or custom-built CMS tailored to your workflow. These systems
                allow you to easily manage your content without technical skills.
            </p>
            <p>
                Security and performance are core to our development process. We implement SSL encryption, secure
                authentication, and regular audits to protect your website and user data. We optimize speed using
                caching, image compression, and Content Delivery Networks (CDNs), improving user experience and search
                rankings.
            </p>
            <p>
                For advanced needs, we integrate APIs for payment gateways, social media, CRM, and other services,
                enabling seamless workflows. We develop custom eCommerce platforms with <a href="#"
                    class="highlight-tech">Shopify</a>, <a href="#" class="highlight-tech">WooCommerce</a>, and <a
                    href="#" class="highlight-tech">Magento</a>, or build bespoke online stores tailored to your
                products and sales process.
            </p>
            <p>
                After launch, we provide ongoing support, maintenance, and analytics monitoring to keep your website
                performing at its best. Our SEO specialists ensure your site is optimized for organic traffic through
                on-page SEO, structured data, and technical enhancements.
            </p>
            <p>
                Whether you are launching a new website or upgrading an existing one, <strong><a href="#"
                        class="highlight-tech">XeroicTech</a></strong> delivers innovative, scalable, and reliable website
                development solutions that empower your business online.
            </p>

        </article>

    </main>
    <!-- Our Process Section -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="Our" style="background: #faf9e8;
    max-width: 100%; padding: 2%;">
        <div class="text-center mb-14">
            <p class="text-sm  font-semibold tracking-wider mb-2 uppercase">How we work</p>
            <h2 class="text-3xl font-extrabold text-gray-900">Our Process</h2>
        </div>

        <div class="flex flex-col sm:flex-row justify-center items-start gap-16 relative">
<style>
    .hover-card {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .hover-card:hover {
        background-color: #fef3c7; /* soft yellow bg */
    }

    .hover-card img {
        transition: transform 0.3s ease;
    }

    .hover-card:hover img {
        transform: scale(1.1);
    }
</style>

<!-- Step 1 -->
<div class="relative flex flex-col items-center max-w-xs mx-auto sm:mx-0">
    <div class="hover-card relative bg-white shadow-md rounded-md p-6 flex justify-center items-center">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e6830a98-c519-4dd3-8591-c2d951b0ddf0.png"
            alt="Orange line style lightbulb icon representing idea and consultation" width="64" height="64" />
        <div class="process-step-number absolute top-2 right-2 text-sm font-bold text-gray-600">01</div>
    </div>
    <h3 class="mt-6 text-center font-semibold text-lg text-gray-900">Initial Consultation</h3>
    <p class="mt-2 text-center text-gray-500 text-sm leading-relaxed max-w-xs">
        We begin by understanding your needs through a detailed discussion to align our approach with your vision.
    </p>
</div>

            <!-- Arrow 1 -->
            <svg class="hidden sm:block arrow" fill="none" viewBox="0 0 103 40" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" focusable="false">
                <path d="M1 20C10.5 20 37 20 52 20C78.5 20 100 20 100 20" class="process-arrow" />
                <path d="M93 13L100 20L93 27" class="process-arrow" />
            </svg>

            <!-- Step 2 -->
            <div class="relative flex flex-col items-center max-w-xs mx-auto sm:mx-0">
                <div class="relative bg-white shadow-md rounded-md p-6 flex justify-center items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/3b4b4632-ef84-4d22-9703-731b15c37aed.png"
                        alt="Orange line style planning tool icon representing strategy and planning" width="64"
                        height="64" />
                    <div class="process-step-number">02</div>
                </div>
                <h3 class="mt-6 text-center font-semibold text-lg text-gray-900">Strategy & Planning</h3>
                <p class="mt-2 text-center text-gray-500 text-sm leading-relaxed max-w-xs">
                    Our team designs a clear roadmap tailored to your goals, timelines, and resources to ensure focused
                    execution.
                </p>
            </div>

            <!-- Arrow 2 -->
            <svg class="hidden sm:block arrow" fill="none" viewBox="0 0 103 40" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" focusable="false">
                <path d="M1 20C10.5 20 37 20 52 20C78.5 20 100 20 100 20" class="process-arrow" />
                <path d="M93 13L100 20L93 27" class="process-arrow" />
            </svg>

            <!-- Step 3 -->
            <div class="relative flex flex-col items-center max-w-xs mx-auto sm:mx-0">
                <div class="relative bg-white shadow-md rounded-md p-6 flex justify-center items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a7ed9d43-cb0e-4d5e-9d59-8f37374a9baa.png"
                        alt="Orange line style developer icon representing execution and delivery" width="64"
                        height="64" />
                    <div class="process-step-number">03</div>
                </div>
                <h3 class="mt-6 text-center font-semibold text-lg text-gray-900">Execution & Delivery</h3>
                <p class="mt-2 text-center text-gray-500 text-sm leading-relaxed max-w-xs">
                    We put the plan into action with precision, keeping you updated and involved as we bring your
                    project to
                    life.
                </p>
            </div>
        </div>
    </section>
    <!-- Floating email/contact button -->
    <button class="floating-contact" aria-label="Contact Email Button">
        <svg viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20 4H4a2 2 0 0 0-2 2v12c0 1.105.895 2 2 2h16a2 2 0 0 0 2-2V6c0-1.105-.895-2-2-2zm0 2v.511l-8 5-8-5V6h16zm-16 12V8.772l7.516 4.698a1 1 0 0 0 1.059 0L20 8.772V18H4z" />
        </svg>
    </button>
</body>

</html>
@endsection
