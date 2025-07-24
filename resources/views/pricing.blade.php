@extends('Layout.main')

@section('container')



 <script src="https://cdn.tailwindcss.com"></script>
 
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">










<style>
    li {
    color: black;
}
</style>

    <section class="fix" style="    background: #fbf9ee;">
        <div class="container-fluid">


            <div class="pricing-content">
                <div class="pricing-tab-header">


                    <ul class="nav nav-tabs mb-5" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-1" data-bs-toggle="tab" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="false" tabindex="-1">Google Marketing</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-2" data-bs-toggle="tab" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false" tabindex="-1">Web Packages</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-3" data-bs-toggle="tab" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false" tabindex="-1">SEO</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-4" data-bs-toggle="tab" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="true">SMO</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-5" data-bs-toggle="tab" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="false" tabindex="-1">Google Ads - PPC</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-6" data-bs-toggle="tab" href="#tabs-6" role="tab" aria-controls="tabs-6" aria-selected="false" tabindex="-1">Apps Development</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-7" data-bs-toggle="tab" href="#tabs-7" role="tab" aria-controls="tabs-7" aria-selected="false" tabindex="-1">Hosting</a>
                        </li>

                    </ul>

                </div>

            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="tabs-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Essential Plan</h4>
                                        <h2>$550 <sub>/ 6 Months</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/google.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Duration - 6 Months</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Radius - Up to 15 KMS</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> 3-5 Profitable Keywords</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Business Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Competitor Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Keywords Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Google Profile Page Setup</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Photos &amp; Videos Sharing</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Weekly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Profile Maintenance Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Admin Access Allowed</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Technical Support</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Single Point of Contact</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Report</span>
                                    </li>
                                    <li>
                                        <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Facebook Page Creation</span>
                                    </li>
                                    <li>
                                        <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Instagram Page Creation</span>
                                    </li>
                                    <li>
                                        <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Directory Listing</span>
                                    </li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Elite Plan</h4>
                                        <h2>$880 <sub>/ 9 Months</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/google.webp') }}"> alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Duration - 9 Months</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Radius - Up to 30 KMS</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> 7 Profitable Keywords</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Business Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Competitor Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Keywords Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Google Profile Page Setup</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Photos &amp; Videos Sharing</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Weekly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Profile Maintenance Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Admin Access Allowed</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Technical Support</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Single Point of Contact</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Report</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Directory Listing</span>
                                    </li>
                                    <li>
                                        <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Facebook Page Creation</span>
                                    </li>
                                    <li>
                                        <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Instagram Page Creation</span>
                                    </li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Business Plan</h4>
                                        <h2>$1100 <sub>/ 12 Months</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/google.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Duration - 12 Months</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Radius - Up to 40 KMS</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Business Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Competitor Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Keywords Analysis</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> 8-9 Profitable Keywords</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Google Profile Page Setup</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Photos &amp; Videos Sharing</span>
                                    </li>

                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Weekly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Monitoring Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Profile Maintenance Done</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Admin Access Allowed</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Technical Support</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Single Point of Contact</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Monthly Report</span>
                                    </li>

                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Facebook Page Creation</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Instagram Page Creation</span>
                                    </li>
                                    <li>
                                        <span class="price-1"><i class="far fa-check"></i> Directory Listing</span>
                                    </li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>







                    </div>
                </div>


                <div class="tab-pane fade website-pricing" id="tabs-2" role="tabpane2" aria-labelledby="tab-2">


                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>STARTER</h4>
                                        <h2>$1320 <sub>/ One Time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-programming.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 5 Pages</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 4 Royalty Images</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 2 Banners</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customized Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Enquiry Form</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact Us Page</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Map</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Management System</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Support For Latest Browsers</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Displaying Social Media Links</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Single Point Of Contact</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Post Go Live Support (45 Days)</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> SEO Friendly URL's</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Business Logo</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Basic SEO</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Services Management</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Tranquility</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>GROWTH</h4>
                                        <h2>$1650 <sub>/ One Time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-programming.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 7 Pages</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 8 Royalty Images</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 4 Banners</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customized Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Responsive Website Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Favicon</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Enquiry Form</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact Us Page</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Map</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> J Query Slider</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Management System</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Support For Latest Browsers</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Displaying Social Media Links</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Single Point Of Contact</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Post Go Live Support (45 Days)</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> SEO Friendly URL's</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Business Logo</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Basic SEO</span></li>
                                    <li><span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> Services Management</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Tranquility</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>ELITE</h4>
                                        <h2>$1980 <sub>/ One Time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-programming.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 12 Pages</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 15 Royalty Images</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 6 Banners</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customized Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Attractive Header</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Responsive Website Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Favicon</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Enquiry Form</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact Us Page</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Map</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> J Query Slider</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Management System</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> SEO Friendly URL's</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Business Logo</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Basic SEO</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Services Management</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Support For Latest Browsers</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Displaying Social Media Links</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Single Point Of Contact</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Post Go Live Support (45 Days)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Tranquility</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4 style="font-size:20px;">E-COMMERCE</h4>
                                        <h2>$5500 <sub>/ One Time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-programming.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 16 Pages</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 20 Royalty Images</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 8 Banners</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customized Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Shopping Cart</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Quick Search Feature</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Payment Gateway Integration</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Product Management System</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Log In / Sign Up</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Newsletter Management</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Basic SMO</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Bulk Uploader</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Attractive Header</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Responsive Website Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Favicon</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Enquiry Form</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact Us Page</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Map</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> J Query Slider</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Management System</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> SEO Friendly URL's</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Business Logo</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Basic SEO</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Services Management</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Support For Latest Browsers</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Displaying Social Media Links</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Single Point Of Contact</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Post Go Live Support (45 Days)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Tranquility</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Get Started Now <i class="far fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>





                <div class="tab-pane fade" id="tabs-3" role="tabpane3" aria-labelledby="tab-3">


                    <div class="row g-4">



                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>PRO</h4>
                                        <h2>$440 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/seo.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Number of Keywords: 5</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 6-9 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords Research and Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Duplicate Content Check</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Initial Rank Report Checking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Onpage Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Dealing with Duplicate Issues</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google/Bing Webmaster Tools Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Analytics Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> XML Sitemaps Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> HTML Sitemap Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Robots.txt</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Canonicalization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Header Tags Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Title/Meta Tags</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Image Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Anchor Tag Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Header Tags Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Creation of New Landing Pages (If Required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Writing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Web 2.0 Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Press Release Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Pages Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Business Listing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Classified Submissions</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Commenting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Post Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website URLs Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication And Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Rank Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>PREMIUM</h4>
                                        <h2>$550 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/seo.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Number of Keywords: 10</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 6-9 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website Analysis Recommendation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Competitor Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords Research and Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Duplicate Content Check</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Initial Rank Report Checking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Onpage Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Dealing with Duplicate Issues</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google/Bing Webmaster Tools Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Analytics Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> XML Sitemaps Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> HTML Sitemap Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Robots.txt</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Canonicalization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Header Tags Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Title/Meta Tags</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Image Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Anchor Tag Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Existing Content Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website Speed Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Creation of New Landing Pages (If Required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Writing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Pages Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Business Listing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Classified Submissions</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Commenting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Post Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website URLs Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication And Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Rank Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Elite</h4>
                                        <h2>$660 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/seo.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Number of Keywords: 15</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 9-12 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website Analysis Recommendation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Competitor Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords Research and Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Duplicate Content Check</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Initial Rank Report Checking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Onpage Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Dealing with Duplicate Issues</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google/Bing Webmaster Tools Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Analytics Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> XML Sitemaps Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> HTML Sitemap Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> RSS Feeds Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Robots.txt</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Canonicalization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Header Tags Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Optimizing Title/Meta Tags</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Image Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Anchor Tag Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Interlinking Suggestion</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Existing Content Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website Speed Analysis</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Creation of New Landing Pages (If Required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Writing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Web 2.0 Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Press Release Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Pages Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Infographic Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Installation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Business Listing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Classified Submissions</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Commenting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Post Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Website URLs Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Guest Blogging</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Quora Question &amp; Answering</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication And Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Rank Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>










                <div class="tab-pane fade active show" id="tabs-4" role="tabpane4" aria-labelledby="tab-4">

                    <div class="row g-4">


                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>GROWTH</h4>
                                        <h2>$385 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/bullhorn.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 3 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Business Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Calendar Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> No of Posts per Month: 10</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Post Type: Basic</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Account Set-Up</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Cover Photo Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication and Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Activities Monitoring</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Profile Improvement</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>SCALE</h4>
                                        <h2>$495 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/bullhorn.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 6 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Business Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Calendar Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> No of Posts per Month: 20</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Post Type: Creative</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> FB Profile Image Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> FB Business Page Cover Image Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Account Set-Up</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Cover Photo Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Page Followers Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Marketing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Profile Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Image Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Pinterest Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Create Boards on Pinterest</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Uploading Pins on Boards</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication and Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Activities Monitoring</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Profile Improvement</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>ULTIMATE</h4>
                                        <h2>$660 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/bullhorn.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract Period: 9 Months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Business Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Calendar Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> No of Posts per Month: 30</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Facebook Post Type: Creative</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> FB Profile Image Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> FB Business Page Cover Image Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Account Set-Up</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Cover Photo Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Page Followers Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Marketing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Page Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Twitter Profile Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Posting and Updates</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> YouTube Marketing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> YouTube Channel Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> YouTube Background Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Video Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Video Submission</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Image Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Pinterest Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Create Boards on Pinterest</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Uploading Pins on Boards</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Instagram Regular Posting (If Required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Off-Page and Other Activities</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Content Posting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Blog Post Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Bookmarking</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Communication and Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Report</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Social Activities Monitoring</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Profile Improvement</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>







                <div class="tab-pane fade" id="tabs-5" role="tabpane5" aria-labelledby="tab-5">

                    <div class="row g-4">

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>ESSENTIAL</h4>
                                        <h2>$550 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/adwords.webp')}}" alt="img">
                                    </div>
                                </div>

                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Ad Cost: $550</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Maintenance Charges: $330</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Campaign: Search Only</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad-Group: 3</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Texts: 10</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords: 10-20</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Targeted Location: 1</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Precise Campaign Targeting: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Bid Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Adding Negative Keywords: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Calculated Keyword Management: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Insightful Analysis: NA</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Custom Google Analytics Dashboard: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Conversion Tracking: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Extensions Setup: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Device Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact / Support: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Flat Set Fee (First Month Only): $100</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Projected Leads/Month: 10</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>ELITE</h4>
                                        <h2>$800 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/adwords.webp')}}" alt="img">
                                    </div>
                                </div>

                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Ad Cost: $800</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Maintenance Charges: $440</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Campaign: Search + Display</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad-Group: 5</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Texts: 15</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords: 20-30</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Targeted Location: 2</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Precise Campaign Targeting: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Bid Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Adding Negative Keywords: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Calculated Keyword Management: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Insightful Analysis: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Custom Google Analytics Dashboard: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Conversion Tracking: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Extensions Setup: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Device Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact / Support: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Flat Set Fee (First Month Only): $100</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Projected Leads/Month: 20</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>PREMIUM</h4>
                                        <h2>$1500 <sub>/ Month</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/adwords.webp')}}" alt="img">
                                    </div>
                                </div>

                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Monthly Ad Cost: $1500</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Maintenance Charges: $550</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Campaign: Search + Display + Remarketing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad-Group: 5+</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Texts: 15+</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Keywords: 30-50</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Targeted Location: 3+</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Precise Campaign Targeting: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Bid Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Adding Negative Keywords: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Calculated Keyword Management: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Insightful Analysis: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Custom Google Analytics Dashboard: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Conversion Tracking: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Ad Extensions Setup: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Device Optimization: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Contact / Support: Yes</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Flat Set Fee (First Month Only): $100</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Projected Leads/Month: 20</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="tab-pane fade" id="tabs-6" role="tabpane6" aria-labelledby="tab-6">

                    <div class="row g-4">

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>ANDROID APK</h4>
                                        <h2>$1500 <sub>/ One-time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/logo.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> App Design &amp; Development</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> APK File Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Interface (UI) Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Experience (UX) Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Play Store Publishing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Push Notifications Integration</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> In-App Purchases (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Testing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Admin Panel (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Maintenance for 6 months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support for 6 months</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>IOS APK</h4>
                                        <h2>$1800 <sub>/ One-time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/app-store.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> App Design &amp; Development</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> IPA File Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Interface (UI) Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Experience (UX) Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Store Publishing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Push Notifications Integration</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> In-App Purchases (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Testing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Admin Panel (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Maintenance for 6 months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support for 6 months</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>BOTH ANDROID &amp; IOS APK</h4>
                                        <h2>$3200 <sub>/ One-time</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/apk.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> App Design &amp; Development for both Platforms</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> APK &amp; IPA File Creation</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Interface (UI) Design</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> User Experience (UX) Optimization</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Google Play Store &amp; App Store Publishing</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Push Notifications Integration</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> In-App Purchases (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Testing for Both Platforms</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Admin Panel (if required)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> App Maintenance for 12 months</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Customer Support for 12 months</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>








                <div class="tab-pane fade" id="tabs-7" role="tabpane7" aria-labelledby="tab-7">

                    <div class="row g-4">

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Basic Hosting</h4>
                                        <h2>$330 <sub>/ Year</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-hosting.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 10 GB Disk Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 5 GB Email Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 5 Email Accounts</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free SSL</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 1 Website Hosting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 1 Domain Included</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 24/7 Customer Support</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Daily Backups</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 1-click App Installer</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 99.9% Uptime Guarantee</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Standard Hosting</h4>
                                        <h2>$440 <sub>/ Year</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-hosting.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> 25 GB Disk Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 10 GB Email Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 10 Email Accounts</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free SSL</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 2 Websites Hosting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 2 Domains Included</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 24/7 Customer Support</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Daily Backups</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Bandwidth</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 99.9% Uptime Guarantee</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 1-click App Installer</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> cPanel Access</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Email Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Website Builder</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-box-items">
                                <div class="pricing-header">
                                    <div class="content">
                                        <h4>Premium Hosting</h4>
                                        <h2>$770 <sub>/ Year</sub></h2>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/web-hosting.webp')}}" alt="img">
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Disk Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Email Space</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 100 Email Accounts</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free SSL</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Websites Hosting</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Domains Included</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 24/7 Customer Support</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Daily Backups</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Unlimited Bandwidth</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 99.9% Uptime Guarantee</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> 1-click App Installer</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> cPanel Access</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Email Account Setup</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Website Builder</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Priority Support</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Content Delivery Network (CDN)</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Enhanced Security Features</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Free Migration Service</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Email Protection &amp; Filtering</span></li>
                                    <li><span class="price-1"><i class="far fa-check"></i> Minimum Contract - 3 Years</span></li>
                                </ul>
                                <div class="price-button">
                                    <a href="mailto:sales@tapvera.io" class="theme-btn">Select Plan</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>





            </div>
        </div>
    </section>





    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("https://ipinfo.io/json?token=3dc5a3773d9804")
                .then(response => response.json())
                .then(data => {
                    const country = data.country;
                    const priceTags = document.querySelectorAll(".pricing-header h2");

                    if (country === "AU") {
                        // Australian users: show AUD prices (no change)
                        return;
                    } else if (country === "IN") {
                        // Indian users: Convert AUD to INR (static conversion rate: 1 AUD = 55 INR)
                        priceTags.forEach(el => {
                            const text = el.innerText;
                            const match = text.match(/\$([\d,\.]+)/);
                            if (match) {
                                const audPrice = parseFloat(match[1].replace(/,/g, ""));
                                const inrPrice = Math.round(audPrice * 55); // adjust rate as needed
                                const period = text.replace(/\$[\d,\.]+\s*/, ''); // keep subscription duration
                                el.innerText = `₹${inrPrice} ${period}`;
                            }
                        });
                    } else {
                        // All other countries: show "Get A Quote"
                        priceTags.forEach(el => {
                            el.innerText = "Get A Quote";
                        });
                    }
                })
                .catch(error => {
                    console.error("Geo lookup failed:", error);
                });
        });
    </script>










    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>



    

    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <!-- <script src="assets/js/app.min.js"></script> -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Layerslider -->
    <script src="assets/js/layerslider.utils.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- WOW.js Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Main Js File -->

    <script src="assets/js/main.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 4,
                itemsDesktop: [1000, 4],
                itemsDesktopSmall: [980, 2],
                itemsTablet: [768, 2],
                itemsMobile: [650, 1],
                pagination: true,
                navigation: false,
                slideSpeed: 1000,
                autoPlay: true
            });
        });





        // type js plugin
        let typeJsText = document.querySelector(".typeJsText");
        let textArray = typeJsText.dataset.typetext.split("");
        let counter = -1;

        typeJsText.innerHTML = "";

        function typeJs() {
            if (counter < typeJsText.dataset.typetext.length) {
                counter++;
                typeJsText.innerHTML += typeJsText.dataset.typetext.charAt(counter);
                textArray = typeJsText.dataset.typetext.split("");
            } else {
                textArray.pop();
                typeJsText.innerHTML = textArray.join("");
                if (textArray.length == 0) {
                    counter = -1;
                }
            }
        }

        setInterval(() => {
            typeJs();
        }, 100);
    </script>

</body>

</html>


@endsection
