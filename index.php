<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vnet</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* swiper js code */

        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* swiper js code end */

        .banner-head {
            padding-left: 175px;
            font-size: 64px;
            position: absolute;
            margin-top: 125px;
            color: white;
        }

        .btn-session a {
            font-size: 16px;
            margin-left: 25px;
            font-weight: 300;
            color: white;
            text-decoration: none;
        }

        .btn-outline-light {
            border-radius: 20px !important;
        }

        .ab-head {
            text-transform: uppercase;
            color: #034833;
        }

        .ab-main span {
            color: #009688;
            font-weight: bold;
        }

        .ab-main {
            font-size: 48px;
            font-weight: bold;
        }

        .hab-img {
            width: 37px !important;
            height: fit-content !important;
        }

        .hab-cont {
            padding-left: 10px;
            font-size: 14px;
        }

        .hab-cont span {
            font-weight: 700;
        }

        .hab-card {
            padding-left: 30px;
        }

        .btn-outline-dark {
            --bs-btn-border-color: #4CAF50 !important;
            color: #4CAF50 !important;
            --bs-btn-hover-border-color: #4CAF50 !important;
            --bs-btn-hover-bg: #4CAF50 !important;

        }

        .btn-outline-dark:hover {
            color: white !important;
        }

        .banner-cont-ots {
            padding-left: 125px;

            position: absolute;
            margin-top: 75px;
            color: white;
        }

        .slider-row {
            position: relative !important;
            margin-top: -510px !important;
        }

        .ots-top-cont {
            text-transform: uppercase;
        }

        .ots-card {
            background: transparent !important;
            border: transparent !important;
            text-align: center;
        }

        .ots-cardbdy {
            background: #4CAF50 !important;
            margin-top: -110px !important;
            padding-top: 150px !important;
            color: white !important;
            padding-left: 25px !important;
            padding-right: 25px !important;
            padding-bottom: 50px !important;
            border-radius: 15px !important;
        }

        .card-img-top-ots {
            width: 257px !important;
            z-index: 1;
        }
    </style>
</head>

<body>

    <!-- header -->
    <?php
    include_once "./header.php";
    ?>
    <!-- header end -->


    <!-- banner -->
    <div class="container-fluid">
        <div class="banner-section m-5">
            <div class="banner-content">
                <h1 class="banner-head">
                    Empowering <br> Careers, Simplifying <br> Processes
                    <br>
                    <span class="d-flex btn-session mt-4">
                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                        <a class="my-auto" href="#">Contact Us</a>
                    </span>
                </h1>
            </div>
            <img src="./image/banner.webp" alt="best institute" class="img-fluid">
        </div>
    </div>
    <!-- banner end -->



    <!-- aboutus overview -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto  my-5">
                <div class="row">
                    <div class="col-md-5">
                        <img src="./image/hab.webp" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-7">
                        <p class="ab-head">
                            Why Choose Us
                        </p>
                        <h1 class="ab-main">
                            Where Wanderlust Meets <br>
                            <span>Dream Destinations</span>
                        </h1>
                        <p class="ab-content mt-3">
                            We are a leading consultancy offering a comprehensive range of <br> services including
                            education
                            guidance, HR compliance, certifications,<br> and skill development.
                        </p>

                        <div class=" d-flex">
                            <div class="hab-btn">
                                <button type="button" class="btn btn-outline-dark">Learn More &#8594;</button>
                            </div>
                            <!-- <a class="my-auto" href="#">Contact Us</a> -->
                            <div class="hab-card d-flex">
                                <img src="./image/hab-i.png" class="hab-img" alt="">
                                <p class="hab-cont">Need help? <br><span>(808) 555-0111</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end aboutus overview -->

    <!-- Our top servicesur  -->
    <div class="container-fluid">
        <div class="banner-section-ots m-5">
            <div class="banner-cont-ots">
                <p class="ots-top-cont">
                    Our top services
                </p>
                <h1 class="ots-top-head">
                    Services Highlights
                </h1>




            </div>
            <img src="./image/otb-bg.webp" class="img-fluid" alt="">
            <div class="row slider-row">
                <div class="col-md-10 mx-auto">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto"
                                        alt="...">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto"
                                        alt="...">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto"
                                        alt="...">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto"
                                        alt="...">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our top services -->




    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script>
        var swiper = new Swiper(".ots_slider", {
            slidesPerView: 1,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script> -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // When the viewport is 768px or larger
                768: {
                    slidesPerView: 3, // Show 3 slides per view
                },
                // When the viewport is 576px or larger
                576: {
                    slidesPerView: 2, // Show 2 slides per view
                },
                // When the viewport is less than 576px (mobile devices)
                0: {
                    slidesPerView: 1, // Show 1 slide per view on mobile
                }
            }
        });
    </script>
</body>

</html>