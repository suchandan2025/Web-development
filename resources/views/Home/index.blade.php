@extends('Layout.main')

@section('container')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #0a103d;
        color: #ffffff;
        margin: 0;
        padding: 0;
    }

    /* Custom shadows and border radius for the cards */
    .card {
        min-width: 320px;
        max-width: 420px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        border-radius: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: default;
        background: white;
    }

    .card.inactive {
        opacity: 0.3;
        cursor: default;
        box-shadow: none;
        transform: none;
        user-select: none;
    }

    /* Quote icon styling to match the image */
    .quote-icon {
        width: 22px;
        height: 22px;
        stroke: #8f9bb3;
    }

    .slider-container {
        perspective: 1000px;
    }

    #Feedback_Section {
        position: relative;
        min-height: 400px;
        /* adjust as needed */
        padding: 40px 20px;
    }
</style>
<style>
    #hero .carousel-item {
        padding: 100px 0;
        /* background-color: #000; or use your background image */
        color: #fff;
    }

    .btn-custom-yellow {
        background-color: #ffc107;
        color: #000;
    }

    .btn-custom-dark {
        background-color: #212529;
        color: #fff;
    }

    .yellow {
        color: #ffc107;
    }

    .tech-carousel-container {
        width: 100%;
        overflow: hidden;
        height: 100px;
        display: flex;
        align-items: center;
    }

    .tech-carousel-track {
        display: flex;
        animation: scroll-left 40s linear infinite;
        width: max-content;
    }

    .tech-carousel-track img {
        height: 80px;
        width: 100px;
        /* ✅ Fixed width ensures seamless loop */
        flex-shrink: 0;
        margin-right: 2rem;
        transition: transform 0.3s ease;
    }

    .tech-carousel-track img:hover {
        transform: scale(1.3);
        z-index: 2;
    }

    /* Pause on hover */
    .tech-carousel-container:hover .tech-carousel-track {
        animation-play-state: paused;
    }

    /* Scroll animation */
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    #technologies {
        background-color: #f8f9fa;
        /* Optional light background for the section */
        border-radius: 20px;
        /* adjust the curve as needed */
        padding: 60px 30px;
        margin: 40px auto;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    #why-choose {
        background-color: #fff;
        padding: 80px 0;
        text-align: center;
    }

    #why-choose h2 {
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 10px;
    }

    #why-choose .subheading {
        font-size: 1rem;
        color: #555;
        margin-bottom: 40px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .dotted-line {
        width: 100%;
        height: 1px;
        border-top: 2px dashed #ddd;
        margin: 20px 0 40px;
    }

    .why-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    .why-card {
        background-color: #f2f2f2;
        padding: 30px 20px;
        width: 300px;
        border-radius: 15px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        cursor: pointer;
        color: #333;
    }

    .why-card i {
        font-size: 2.5rem;
        color: #ff9c00;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .why-card h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .why-card p {
        font-size: 0.9rem;
        color: #969593;
        transition: color 0.3s ease;
    }

    /* Yellow card default */
    .highlight-yellow {
        background-color: #ffc107;
    }

    /* Hover effect for all cards */
    .why-card:hover {
        background-color: #000000;
        /* Yellowish on hover */
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Color change for text and icon on hover */
    .why-card:hover i,
    .why-card:hover h5,
    .why-card:hover p {
        color: #000;

    }

    .service-card h5,
    .service-card p {
        color: #000 !important;
        /* Force black text */
    }

    #about-us .row {
        align-items: center;
        bottom: -20px;
        position: relative;
    }

    .why-card:hover .hover-icon {
        color: #ffffff !important;
    }
</style>

<!-- Hero Section -->
<section id="hero" class="text-start">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <p class="text-uppercase fw-light" style="color: #ced4da; font-size: 0.875rem;">
                        Boost Your Business with Digital Excellence
                    </p>
                    <h1>
                        Stunning Websites & <br />
                        Result-Driven <br />
                        <span class="yellow">Growth</span>
                    </h1>
                    <p class="lead">
                        From planning to performance, Tapworx empowers your business to grow online...
                    </p>
                    <button class="btn btn-custom-yellow">Get a Free Quote</button>
                    <button class="btn btn-custom-dark">View Portfolio</button>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container">
                    <p class="text-uppercase fw-light" style="color: #ced4da; font-size: 0.875rem;">
                        Boost Your Business with Digital Excellence
                    </p>
                    <h1>
                        Stunning Websites & <br />
                        Result-Driven <br />
                        <span class="yellow">Leads</span>
                    </h1>
                    <p class="lead">
                        From planning to performance, Tapworx empowers your business to grow online...
                    </p>
                    <button class="btn btn-custom-yellow">Get a Free Quote</button>
                    <button class="btn btn-custom-dark">View Portfolio</button>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="container">
                    <p class="text-uppercase fw-light" style="color: #ced4da; font-size: 0.875rem;">
                        Boost Your Business with Digital Excellence
                    </p>
                    <h1>
                        Stunning Websites & <br />
                        Result-Driven <br />
                        <span class="yellow">Visibility</span>
                    </h1>
                    <p class="lead">
                        From planning to performance, Tapworx empowers your business to grow online...
                    </p>
                    <button class="btn btn-custom-yellow">Get a Free Quote</button>
                    <button class="btn btn-custom-dark">View Portfolio</button>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="container">
                    <p class="text-uppercase fw-light" style="color: #ced4da; font-size: 0.875rem;">
                        Boost Your Business with Digital Excellence
                    </p>
                    <h1>
                        Stunning Websites & <br />
                        Result-Driven <br />
                        <span class="yellow">We Deliver Conversions</span>
                    </h1>
                    <p class="lead">
                        From planning to performance, Tapworx empowers your business to grow online...
                    </p>
                    <button class="btn btn-custom-yellow">Get a Free Quote</button>
                    <button class="btn btn-custom-dark">View Portfolio</button>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button> --}}

        <!-- Carousel Indicators -->
        {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div> --}}
    </div>
</section>

<!-- Services Section -->
<section id="services" class="container">
    <div class="row text-center" id="services_conten">
        <div class="col-md-3 mb-4">
            <div class="service-card">
                <i class="fa-solid fa-cloud service-icon"></i>
                <h5 class="mb-1 fw-bold">Cloud Based Services</h5>
                <p class="mb-0 text-muted small">Secure, on-demand access to data and tools across devices.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="service-card ">
                <i class="fa-solid fa-paintbrush service-icon"></i>
                <h5 class="mb-1 fw-bold">UI/UX Design Strategy</h5>
                <p class="mb-0 small">Intuitive interfaces focused on speed, style, and usability.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="service-card">
                <i class="fa-solid fa-shield-halved service-icon"></i>
                <h5 class="mb-1 fw-bold">Cyber Security</h5>
                <p class="mb-0 small">Real-time protection against evolving digital threats.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="service-card">
                <i class="fa-solid fa-puzzle-piece service-icon"></i>
                <h5 class="mb-1 fw-bold">Digital Experience</h5>
                <p class="mb-0 small">Consistent, responsive engagement across web and mobile.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section -->
<section id="about-us" aria-label="About Xeroic - Innovation & Technology Transforming Brands">
    <div class="row gx-5">
        <div class="col-md-5 image-wrapper" aria-hidden="true">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/836f4fc2-ee07-4cc2-afa9-03829d7c0069.png"
                alt="Professional woman focused on digital interface, working late" loading="lazy" />
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1fae007d-6c25-41ad-a357-2af144967c7c.png"
                alt="Futuristic digital network connections illustrating technology and innovation" loading="lazy" />
        </div>
        <div class="col-md-7" id="about-us-content">
            <h3 style="color: #ffffff">About</h3>
            <h4>Transforming Brands Through Innovation & Technology</h4>
            <p>If you are right now on a journey of digital transformation, you need to collaborate with a visionary
                business
                who loves to redefine digital excellence and ensures seamless innovation and a superior professional
                relationship, making sure that the change is seamless.<br /><br />
                Xeroic is poised on a journey of digital innovation and excellence, transforming your business by
                leveraging
                emerging technologies while always focused on the client’s needs. We bring clarity to the digital
                transformation process.</p>
            <button type="button" class="btn">Discover More</button>
        </div>
    </div>
</section>
{{--
<!-- About Section -->
<section id="about" class="container d-lg-flex align-items-center justify-content-between gap-5">
    <div class="about-images position-relative flex-shrink-0 mb-4 mb-lg-0">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/67f97a22-7740-40ee-a9cb-9381243ef4b0.png"
            alt="Businesswoman analysing data on tablet device in modern office with dark ambiance, rays of light"
            class="top-image shadow-lg" loading="lazy"
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/acd9b909-8b5c-4083-9359-4b811893fd65.png'" />
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e9d6cf01-316b-4b2d-8cb7-3f5bd50194b7.png"
            alt="Closeup shot of data network technology with digital connections and light bokeh background"
            class="bottom-image shadow-lg" loading="lazy"
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/74da3e98-8230-4027-8c21-cf5cb803dd4b.png'" />
    </div>
    <div class="about-content flex-grow-1">
        <p class="mb-1 small text-uppercase text-muted">About Us</p>
        <h3>Transforming Brands Through Innovation & Technology</h3>
        <p class="lead text-muted mb-4">If you are going to use a passage of Lorem Ipsum, you need to be
            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
            internet tend to repeat predefined chunks as necessary, making this the first true generator.
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
            hidden in the middle of text. All the Lorem Ipsum generators on the internet tend to repeat predefined
            chunks as necessary, making this the the true generator.</p>
        <button class="btn btn-discover" type="button">Discover More</button>
    </div>
</section> --}}
<!-- Technologies Behind Your Success -->
<section id="technologies" aria-label="Technologies behind your success">
    <p class="section-title">Technologies Behind</p>
    <h5>Your Success</h5>

    <div class="tech-carousel-container">
        <div class="tech-carousel-track">
            <!-- Original set -->
            <img src="{{ asset('assets/images/php.png') }}" alt="PHP1 logo" />
            <img src="{{ asset('assets/images/Node.png') }}" alt="Node logo" />
            <img src="{{ asset('assets/images/laravel.png') }}" alt="Python logo" />
            <img src="{{ asset('assets/images/Google.png') }}" alt="Google logo" />
            <img src="{{ asset('assets/images/WordPress.png') }}" alt="WordPress logo" />
            <img src="{{ asset('assets/images/javascript.png') }}" alt="javascript logo" />
            <img src="{{ asset('assets/images/HTML5.png') }}" alt="HTML5 logo" />
            <img src="{{ asset('assets/images/cPanel (1).png') }}" alt="cPanel logo" />
            <img src="{{ asset('assets/images/sql.png') }}" alt="sql logo" />
            <img src="{{ asset('assets/images/bootstrap.png') }}" alt="bootstrap logo" />
            <img src="{{ asset('assets/images/oraca.png') }}" alt="oraca logo" />




            <!-- Duplicate full set to loop seamlessly -->
            <img src="{{ asset('assets/images/php.png') }}" alt="PHP1 logo" />
            <img src="{{ asset('assets/images/Node.png') }}" alt="Node logo" />
            <img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel logo" />
            <img src="{{ asset('assets/images/Google.png') }}" alt="Google logo" />
            <img src="{{ asset('assets/images/WordPress.png') }}" alt="WordPress logo" />
            <img src="{{ asset('assets/images/javascript.png') }}" alt="javascript logo" />
            <img src="{{ asset('assets/images/HTML5.png') }}" alt="HTML5 logo" />
            <img src="{{ asset('assets/images/cPanel (1).png') }}" alt="cPanel logo" />
            <img src="{{ asset('assets/images/sql.png') }}" alt="sql logo" />
            <img src="{{ asset('assets/images/bootstrap.png') }}" alt="bootstrap logo" />
            <img src="{{ asset('assets/images/oraca.png') }}" alt="oraca logo" />
        </div>
    </div>
</section>

<!-- Best Digital Marketing Services -->
<section id="marketing-services" aria-label="Best Digital Marketing Services">
    <div class="container">
        <h5>Best Digital <span style="color:#f0ad4e;">Marketing Services</span></h5>
        <p class="lead">Focus on growing your revenue & brand. Learn how we excel in fast marketing automation, digital
            sales funnels & conversion optimization.</p>

        <div id="marketing-cards" role="list">
            <article class="card" role="listitem" tabindex="0" aria-label="Website Development service">
                <i class="fa-solid fa-code"></i>
                <h6>Website Development</h6>
                <p>Have an awesome website today via expert code & design to accelerate your business growth.</p>
            </article>
            <article class="card" role="listitem" tabindex="0" aria-label="Graphic Design service">
                <i class="fa-solid fa-paintbrush"></i>
                <h6>Graphic Design</h6>
                <p>Boost your brand with professional graphic design to captivate your target audience first look.</p>
            </article>
            <article class="card" role="listitem" tabindex="0" aria-label="Digital Marketing service">
                <i class="fa-solid fa-bullhorn"></i>
                <h6>Digital Marketing</h6>
                <p>We experts accelerate your brand growth via strategic digital marketing campaigns & cost control.</p>
            </article>
            <article class="card" role="listitem" tabindex="0" aria-label="SEO & Content Writing service">
                <i class="fa-solid fa-file-lines"></i>
                <h6>SEO & Content Writing</h6>
                <p>Drive more new traffic via best SEO practices while leveraging quality content & audience voice.</p>
            </article>
            <article class="card" role="listitem" tabindex="0" aria-label="SEO & Content Writing service">
                <i class="fa-solid fa-file-lines"></i>
                <h6>SEO & Content Writing</h6>
                <p>Drive more new traffic via best SEO practices while leveraging quality content & audience voice.</p>
            </article>
            <article class="card" role="listitem" tabindex="0" aria-label="SEO & Content Writing service">
                <i class="fa-solid fa-file-lines"></i>
                <h6>SEO & Content Writing</h6>
                <p>Drive more new traffic via best SEO practices while leveraging quality content & audience voice.</p>
            </article>
        </div>
        <button class="btn btn-discover" type="button" aria-label="Discover more digital marketing services">Discover
            More
        </button>
    </div>
</section>
{{--
<!-- Best Digital Marketing Services -->
<section id="best-marketing" class="text-center">
    <div class="container">
        <h2>
            Best Digital <br />
            <span class="highlight">Marketing Services</span>
        </h2>
        <p class="description mx-auto">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the internet tend to
            repeat</p>
        <div class="row g-4 justify-content-center">
            <div class="col-md-2 col-6">
                <div class="card">
                    <i class="fa-solid fa-code card-icon"></i>
                    <h5 class="mb-2">Website Development</h5>
                    <p class="small">When an unknown printer took a galley of type and scrambled it to make a type
                        specimen book.</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="card highlight-yellow">
                    <i class="fa-solid fa-paintbrush card-icon"></i>
                    <h5 class="mb-2">Graphic Design</h5>
                    <p class="small">When an unknown printer took a galley of type and scrambled it to make a type
                        specimen book.</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="card">
                    <i class="fa-solid fa-bullhorn card-icon"></i>
                    <h5 class="mb-2">Digital Marketing</h5>
                    <p class="small">When an unknown printer took a galley of type and scrambled it to make a type
                        specimen book.</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="card">
                    <i class="fa-solid fa-file-lines card-icon"></i>
                    <h5 class="mb-2">SEO & Content Writing</h5>
                    <p class="small">When an unknown printer took a galley of type and scrambled it to make a type
                        specimen book.</p>
                </div>
            </div>
        </div>
        <button class="btn btn-discover-more">Discover More</button>
    </div>
</section> --}}

<!-- Why Choose Us Section -->
<section id="why-choose">
    <div class="container">
        <h2>Where Expertise Meets<br />Exceptional Results</h2>
        <p class="subheading">Tapworx integrates advanced IT solutions and data-driven marketing strategies to solve
            complex business challenges and fuel sustainable growth.</p>
        <div class="dotted-line"></div>
        <div class="why-cards">
            <div class="why-card">
                <i class="fa-solid fa-gears hover-icon"></i>

                <h5>Cutting-Edge Tools & Techniques</h5>
                <p>We've delivered measurable success for startups, enterprises, and everything in between – helping
                    brands grow, scale, and lead in the digital space.</p>
            </div>
            <div class="why-card highlight-yellow">
                <i class="fa-solid fa-comments hover-icon"></i>
                <h5>Transparency & Communication</h5>
                <p>We’ve delivered measurable success for startups, enterprises, and everything in between – helping
                    brands grow, scale, and lead in the digital space.</p>
            </div>
            <div class="why-card">
                <i class="fa-solid fa-chart-line hover-icon"></i>
                <h5>Proven Track Record</h5>
                <p>We’ve delivered measurable success for startups, enterprises, and everything in between – helping
                    brands grow, scale, and lead in the digital space.</p>
            </div>
        </div>
    </div>
</section>

<!-- Client Feedback Section -->
<section class="min-h-screen flex flex-col justify-center items-center px-6 py-12" id="Feedback_Section">
    <div class="text-center max-w-xl mb-10 select-none">
        <p class="text-sm font-semibold mb-2">Client Feedback</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight">
            Hear What Our Clients Say<br />
            <span class="text-yellow-400">About Working With Us</span>
        </h2>
    </div>

    <div class="slider-container relative w-full max-w-5xl flex justify-center select-none" aria-live="polite"
        aria-atomic="true" aria-relevant="additions removals">
        <!-- Dynamic Cards injected via JS -->
    </div>

    <div id="dots" class="mt-8 flex space-x-3"></div>
</section>



<!-- Latest Blog Section -->
<section id="latest-blog">
    <div class="container">
        <h3>Latest News & Articles</h3>
        <p class="subheading">Discover how digital agencies work hand-in-hand to setting up e-commerce platforms for
            online selling</p>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="blog-card">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/384098d0-85e4-4514-8c72-aa4bdbdb8164.png"
                        alt="Colorful digital illustration showing an envelope surrounded by clouds, eyes and mail icons"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b1b65391-5d88-4a14-a3c5-a6a47b6964ac.png'" />
                    <div class="blog-card-body">
                        <div class="blog-meta">27 August | comment</div>
                        <h5 class="blog-title">Representation on Digital platforms.</h5>
                        <p class="blog-excerpt">Plan an unknown printer took galley type and scrambled it.</p>
                        <a href="#" class="blog-readmore">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-card">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ead73579-69e3-47b7-b90f-7a588ed6afdf.png"
                        alt="Illustrative vector image of a businessman using cloud computing services with document icons around"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://placehold.co/600x400?text=Image+not+available'" />
                    <div class="blog-card-body">
                        <div class="blog-meta">27 August | comment</div>
                        <h5 class="blog-title">Representation on Digital platforms.</h5>
                        <p class="blog-excerpt">Plan an unknown printer took galley type and scrambled it.</p>
                        <a href="#" class="blog-readmore">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-card">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/15db0665-7f68-464c-aa84-97e3836065b2.png"
                        alt="Vibrant digital marketing ecommerce concept with shopping carts, gifts and digital icons"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://placehold.co/600x400?text=Image+not+available'" />
                    <div class="blog-card-body">
                        <div class="blog-meta">27 August | comment</div>
                        <h5 class="blog-title">Representation on Digital platforms.</h5>
                        <p class="blog-excerpt">Plan an unknown printer took galley type and scrambled it.</p>
                        <a href="#" class="blog-readmore">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Email Newsletter -->
<section id="email-newsletter" aria-label="Subscribe to email newsletter">
    <div class="container">
        <h5>Email <span style="color:#f0ad4e;">Newsletter!</span></h5>
        <form aria-label="Subscribe to newsletter form"
            onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
            <input type="email" aria-label="Email address" placeholder="Enter your email address" required />
            <button type="submit" aria-label="Subscribe to newsletter">Subscribe</button>
        </form>
    </div>
</section>
<!-- Bootstrap Bundle JS CDN (Popper + Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    // Simple testimonial carousel logic
    (() => {
      const testimonials = [
        {
          text: "Randomised words whdon’t look even slightly believable. If you are going to use ssage of Lorem ipsum, you.",
          client: "Steven Nelson",
          role: "Designer",
          img: "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6265c93e-9476-431b-8fda-bd14d9593f7e.png"
        },
        {
          text: "Randomised words who don’t look even slightly believable. Lorem ipsum is simply dummy text for layout.",
          client: "Jessica Brown",
          role: "Marketing Expert",
          img: "https://placehold.co/50x50?text=Photo"
        },
        {
          text: "Randomised filler text that looks believable and natural. Best digital marketing agency feedback testimonial.",
          client: "Samuel Lee",
          role: "Client",
          img: "https://placehold.co/50x50?text=Photo"
        }
      ];

      const slide = document.getElementById('testimonial-slide');
      const indicators = document.getElementById('client-feedback-carousel-indicators').children;

      let currentIndex = 0;

      function updateTestimonial(index) {
        if (index < 0 || index >= testimonials.length) return;
        currentIndex = index;
        const t = testimonials[index];
        slide.innerHTML = `
          <p>${t.text}</p>
          <div class="client-info">
            <img src="${t.img}" alt="Portrait of ${t.client}, client testimonial avatar" loading="lazy" onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/74fe2d89-0c8f-4442-8f58-c3a705b605b2.png'"/>
            <div>${t.client}<br><small>${t.role}</small></div>
          </div>
        `;
        for (let btn of indicators) {
          btn.classList.remove('active');
        }
        indicators[index].classList.add('active');
      }

      for (let btn of indicators) {
        btn.addEventListener('click', e => {
          const index = parseInt(e.target.dataset.index, 10);
          updateTestimonial(index);
        });
      }

      // Auto cycle every 8s
      setInterval(() => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
      }, 8000);

      // Initialize first testimonial
      updateTestimonial(0);
    })();
</script>

<script>
    const sliderContainer = document.querySelector('.slider-container');
    const dotsContainer = document.getElementById('dots');

    // Data for client feedback - could be extended or loaded dynamically
    const clients = [
      {
        text: "Randomised words whdon't look even slightly believable. If you are going to use ssage of Lorem Ipsum, you",
        name: "Steven Nelson",
        role: "Designer",
        imgSrc: "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/af538e40-cbac-4459-9868-728a010cd59f.png",
        imgAlt: "Portrait of Steven Nelson, designer, with light hair and smiling expression"
      },
      {
        text: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
        name: "Jessica Parker",
        role: "Marketing Head",
        imgSrc: "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4b8b57f6-735f-413e-932b-49c746e6a1c9.png",
        imgAlt: "Portrait of Jessica Parker, marketing head, with dark hair in a professional business outfit"
      },
      {
        text: "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.",
        name: "Mike Johnson",
        role: "Product Manager",
        imgSrc: "https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0fc68b01-3965-401c-8366-ea348b8873c8.png",
        imgAlt: "Portrait of Mike Johnson, product manager, with short hair and glasses"
      }
    ];

    let currentIndex = 0;

    function createCard(client, isActive) {
      const card = document.createElement('div');
      card.className = `card px-8 py-6 mx-4 relative flex flex-col justify-center text-gray-700 transition-all duration-300 ease-in-out `;
      if(!isActive) card.classList.add('inactive');

      // Quote icon SVG
      const quoteIcon = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      quoteIcon.setAttribute("xmlns","http://www.w3.org/2000/svg");
      quoteIcon.setAttribute("viewBox","0 0 24 24");
      quoteIcon.setAttribute("fill","none");
      quoteIcon.setAttribute("stroke","#8f9bb3");
      quoteIcon.setAttribute("stroke-width","1.5");
      quoteIcon.setAttribute("stroke-linecap","round");
      quoteIcon.setAttribute("stroke-linejoin","round");
      quoteIcon.classList.add("quote-icon","mb-4");
      quoteIcon.innerHTML = `
        <path d="M9 19H5a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5h1"></path>
        <path d="M17 19h4a2 2 0 0 0 2-2v-1a5 5 0 0 0-5-5h-1"></path>
      `;

      // Text with bold style for first part
      const paragraph = document.createElement('p');
      paragraph.className = "text-sm text-gray-700";
      // Simulate bold for the first part based on example
      const splitIndex = client.text.indexOf('believable.') + 10;
      if(splitIndex > 10 && splitIndex < client.text.length) {
        paragraph.innerHTML = `<strong>${client.text.slice(0, splitIndex)}</strong>${client.text.slice(splitIndex)}`;
      } else {
        paragraph.textContent = client.text;
      }

      // Client info container
      const clientInfo = document.createElement('div');
      clientInfo.className = "mt-6 flex items-center gap-3";

      const img = document.createElement('img');
      img.src = client.imgSrc;
      img.alt = client.imgAlt;
      img.width = 40;
      img.height = 40;
      img.className = "rounded-full flex-shrink-0 shadow-md";
      img.onerror = () => { img.style.display = 'none'; };

      const nameRoleDiv = document.createElement('div');
      nameRoleDiv.className = "text-gray-800";

      const nameEl = document.createElement('p');
      nameEl.className = "font-semibold text-[14px] text-gray-900";
      nameEl.textContent = client.name;

      const roleEl = document.createElement('p');
      roleEl.className = "text-[12px]";
      roleEl.textContent = client.role;

      nameRoleDiv.appendChild(nameEl);
      nameRoleDiv.appendChild(roleEl);

      clientInfo.appendChild(img);
      clientInfo.appendChild(nameRoleDiv);

      card.appendChild(quoteIcon);
      card.appendChild(paragraph);
      card.appendChild(clientInfo);

      return card;
    }

    // Render slider cards
    function renderSlider() {
      sliderContainer.innerHTML = '';
      const total = clients.length;

      // We will show 3 cards horizontally
      // Center card is active, others are inactive with lower opacity.
      // If clients < 3, just show those.

      const prevIndex = (currentIndex - 1 + total) % total;
      const nextIndex = (currentIndex + 1) % total;

      // Wrapper container to simulate blur behind main card
      const backgroundWrapper = document.createElement('div');
      backgroundWrapper.className = "absolute inset-0 flex justify-center items-center gap-8 opacity-30";

      // Left inactive card
      const leftCard = createCard(clients[prevIndex], false);
      leftCard.classList.add("transform", "scale-95");
      backgroundWrapper.appendChild(leftCard);

      // Right inactive card
      const rightCard = createCard(clients[nextIndex], false);
      rightCard.classList.add("transform", "scale-95");
      backgroundWrapper.appendChild(rightCard);

      sliderContainer.appendChild(backgroundWrapper);

      // The active main card on top with shadow
      const activeCard = createCard(clients[currentIndex], true);
      activeCard.classList.add("z-10", "relative");
      sliderContainer.appendChild(activeCard);

      renderDots();
    }

    // Render navigation dots
    function renderDots() {
      dotsContainer.innerHTML = '';
      for(let i=0; i < clients.length; i++) {
        const dot = document.createElement('button');
        dot.setAttribute('aria-label', `Go to slide ${i+1}`);
        dot.className = `w-3 h-3 rounded-full transition-colors duration-300 ${i === currentIndex ? 'bg-yellow-400' : 'bg-white'}`;
        dot.addEventListener('click', () => {
          currentIndex = i;
          renderSlider();
        });
        dotsContainer.appendChild(dot);
      }
    }

    // Auto slide every 5 seconds
    setInterval(() => {
      currentIndex = (currentIndex + 1) % clients.length;
      renderSlider();
    }, 5000);

    // Initial render
    renderSlider();
</script>

</body>

</html>


@endsection
