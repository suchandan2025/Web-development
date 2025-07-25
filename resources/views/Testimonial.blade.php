@extends('Layout.main')

@section('container')
<script src="https://cdn.tailwindcss.com"></script>
<style>
    /* body {
        background-color: #fffeea;
        color: #fff;
    } */

    .testimonial-header {
        background: url("assets/images/banner3.png") center/cover no-repeat;
        padding: 100px 0 60px;
        text-align: center;
        position: relative;
    }

    .testimonial-header h2 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .breadcrumb-custom {
        color: #fff;
        text-align: right;
        font-size: 14px;
        margin-top: 10px;
    }

    .section-title {
        text-align: center;
        padding: 40px 20px 10px;
    }

    .section-title h5 {
        color: orange;
        letter-spacing: 1px;
        font-weight: bold;
    }

    .section-title h2 {
        font-weight: 700;
        color: #fff;
    }

    .video-gallery {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 30px 15px;
    }

    .video-gallery video {
        width: 250px;
        height: 440px;
        object-fit: cover;
        background-color: #000;
        border: 1px solid #333;
    }

    @media (max-width: 768px) {
        .video-gallery video {
            width: 100%;
            height: auto;
        }
    }
</style>
<!-- Header Section -->
<section class="testimonial-header">
    <h2>Clients Testimonials</h2>
    <div class="breadcrumb-custom pe-4">
        Home / Clients Testimonials
    </div>
</section>

<!-- Testimonials Section -->
<section style="background-color: #fffeea;
        color: #fff;">
    <div class="section-title">
        <h5>TESTIMONIALS</h5>
        <h2 style="color: #000">HEAR DIRECTLY FROM OUR<br>HAPPY CLIENTS!</h2>
    </div>

    <div class="video-gallery">
        <video controls>
            <source src="videos/client1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="videos/client2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="videos/client3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="videos/client4.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

</body>

</html>
@endsection
