<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNET PROFESSIONAL SERVICES</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="icon" type="image/x-icon" href="/image/favicon.png">

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
            padding-left: 100px;
            position: absolute;
            margin-top: 30px;
            color: white;
        }

        .slider-row {
            position: relative !important;
            margin-top: -530px !important;
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

        .ell_text {
            font-size: 13px;
        }

        .banner_slider {
            padding: 0px !important;
        }

        .satis_client {
            margin-top: 7rem;
            margin-bottom: 3rem;
        }

        .satis_img {
            height: 350px !important;
            border-radius: 7px;
        }

        .count_text {
            font-size: 30px;
            font-weight: 500;
        }

        .count_img {
            width: 50px;
            height: 50px;
        }

        .card_brd {
            border-color: #009688 !important;
        }

        .partus {
            color: #002A5C;
            font-size: 30px;
        }

        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        .testi_col {
            /* background-color: #F5F5F5 !important; */
            border-radius: 20px !important;
            background-image: url("./image/tt_back.webp");
            background-size: cover;
        }

        .testi_title {
            color: #002A5C !important;
            font-size: 30px;
        }

        .testi_color {
            color: #009688 !important;
        }



        .t_img {
            width: 60px !important;
            border-radius: 50px;
        }

        .ts_img {
            width: 70px !important;
        }

        .testi_card {
            background-color: #4CAF50 !important;
            color: white !important;
        }

        .tspara {
            text-align: left;
        }

        .tspara span {
            font-size: 12px !important;
        }

        .tt_img {
            width: 55px !important;
        }

        .test_carbdy {
            text-align: left !important;
        }

        .fcta {
            background-color: #4CAF50;
            color: white;
        }

        .ots-top-head {
            font-size: 30px;
        }

        .banner-section-ots {
            margin: 3rem !important;
        }

        .mobots-mob {
            display: none;
        }

        .brd_span {
            display: block;
        }

        .ab-main {
            font-size: 30px;
        }

        .ab-content {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .partner_slider {
            margin-top: 30px;
            border-top: 1px solid;
            border-bottom: 1px solid;
        }

        .banner_img {
            margin-top: 30px;
            border-radius: 20px;
        }

        @media only screen and (max-width: 600px) {
            .banner-section-ots {
                position: unset;
                margin: auto !important;
                margin-top: 350px !important;
            }

            .hab-img {
                width: 37px !important;
                height: 37px !important;
            }

            .brd_span {
                display: none;
            }

            .banner-cont-ots {
                display: none;
            }

            .mobots-mob {
                display: block;
            }

            .ts_img {
                display: none !important;
            }

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
    <div class="container banner_slider">

        <!-- Swiper -->
        <div class="swiper slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./image/Vnet Website Banners-1.png" alt="best institute"
                        class="img-fluid banner_img"></div>
                <div class="swiper-slide"><img src="./image/Vnet Website Banners-2.png" alt="best institute"
                        class="img-fluid banner_img"></div>
                <div class="swiper-slide"><img src="./image/Vnet Website Banners-3.png" alt="best institute"
                        class="img-fluid banner_img"></div>
                <div class="swiper-slide"><img src="./image/Vnet Website Banners-4.png" alt="best institute"
                        class="img-fluid banner_img"></div>
                <div class="swiper-slide"><img src="./image/Vnet Website Banners-5.png" alt="best institute"
                        class="img-fluid banner_img"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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
                            One stop solutions
                            <span>for all the industry compliances</span>
                        </h1>
                        <p class="ab-content ">
                            We are leading consultancy offering a comprehensive range of services including
                            implementation of NAPS, NATS & other Government Skill Development programs, HR Serves &
                            Statutory compliances, Recruitment for IT/ITes sector, Insurance, POSH Compliance and
                            Industry certifications
                        </p>

                        <div class=" d-flex">
                            <div class="hab-btn">
                                <a href="./about.php" class="btn btn-outline-dark">Learn More &#8594;</a>
                            </div>
                            <!-- <a class="my-auto" href="#">Contact Us</a> -->
                            <div class="hab-card d-flex">
                                <img src="./image/hab-i.png" class="hab-img" alt="">
                                <p class="hab-cont">Need help? <br><span>+91 99019 20043</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end aboutus overview -->

    <!-- Our top servicesur  -->

    <div class="container-fluid mobots-mob">
        <p class="mobots-cont">
            Our top services
        </p>
        <h1 class="mobots-top-head">
            Services Highlights
        </h1>
    </div>
    <div class="container-fluid">
        <div class="banner-section-ots">
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
                                    <img src="./image/Ellipse.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text ell_text">Implementation of NAPS & NATS</p>
                                        <a href="./service.php" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="./image/Ellipse1.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">HR Services</h5>
                                        <p class="card-text ell_text">Payroll Management, PF & ESI
                                            Statutory Compliance
                                        </p>
                                        <a href="./hrservice.php" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="./image/Ellipse2.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Insurance Services</h5>
                                        <p class="card-text ell_text">Vehicle, Health & Corporate group insurance
                                            Workmen Compensation
                                        </p>
                                        <a href="./insurance.php" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="./image/Ellipse3.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Registration & Certifications</h5>
                                        <p class="card-text ell_text">ISO, SA, GOTS
                                            Labor License, Factory License & Others
                                        </p>
                                        <a href="./register.php" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                    <img src="./image/Ellipse4.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">POSH Compliance</h5>
                                        <p class="card-text ell_text">POSH Training to employees & Management
                                            ICC Constitution and filing

                                        </p>
                                        <a href="./posh.php" class="btn btn-outline-light">Learn More &#8594;</a>
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

    <!-- satis client -->
    <div class="container satis_client">
        <div class="row">
            <div class="col-md-7 mb-3">

                <div class="swiper slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./image/tes1.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes2.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes3.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes4.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes5.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes6.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>
                        <div class="swiper-slide"><img src="./image/tes7.webp" class="img-fluid satis_img"
                                alt="best-institute">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card card_brd">
                            <div class="card-body d-flex align-items-center">
                                <img src="./image/sas1.png" class="count_img" alt="best-institute">
                                <div class="count_card ps-3">
                                    <div id="counter" class="counter count_text"></div>
                                    Satisfied <span class="brd_span"></span> Clients
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card card_brd">
                            <div class="card-body d-flex align-items-center">
                                <img src="./image/sas2.png" class="count_img" alt="best-institute">
                                <div class="count_card ps-3">
                                    <div id="counter2" class="counter count_text"></div>
                                    Locations Across India
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card card_brd">
                            <div class="card-body d-flex align-items-center">
                                <img src="./image/sas3.png" class="count_img" alt="best-institute">
                                <div class="count_card ps-3">
                                    <div id="counter3" class="counter count_text"></div>
                                    Apprentices Registered
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end satis client -->

    <!-- partnered frame -->
    <div class="container">
        <h3 class="partus">
            Partnered with
        </h3>
    </div>



    <!-- slider -->
    <div class="container">
        <!-- Swiper -->
        <div class="swiper partner_slider ">
            <div class="swiper-wrapper">
                <div class="swiper-slide my-auto"><img src="./image/partn1.gif" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn2.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn3.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn4.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn5.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn6.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn7.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn8.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn9.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn10.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn11.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn12.png" class="part_img"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn13.png" class="part_img"
                        alt="best institute near me">
                </div>
            </div>
        </div>
    </div>
    <!-- slider end -->


    <!-- testimonial -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-10 mx-auto testi_col p-5 ">
                <p class="testi_head">
                    TESTIMONIAL
                </p>
                <h1 class="testi_title">
                    Hear From Those <span class="testi_color">Who Trust Us</span>
                </h1>

                <div class="row">
                    <div class="col-md-12">

                        <div class="swiper testimonial_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            Vnet has been a game-changer for our organization. Their expertise in
                                            Apprenticeship
                                            compliance
                                            is unparalleled! They have simplified our NAPS & NATS implementation,
                                            ensuring we stay
                                            compliant
                                            while benefiting from government incentives.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara"> Mr.
                                                Vasu <br> <span>Ennovi Mobility Solutions</span></p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            With Vnet’s guidance, we successfully onboarded apprentices through NAPS,
                                            creating a skilled workforce while optimizing costs.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/femaleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara"> Ms. Annapurna <br> <span>Sireesh Auto
                                                    Private Limited</span></p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            Vnet's deep understanding of labor laws and apprenticeship programs has
                                            greatly benefited our organization.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara"> Mr. Sathish <br> <span>TVS- Sirius Controls
                                                    Pvt Ltd</span></p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            Implementing NAPS & NATS was made easy with Vnet’s structured approach and
                                            expert assistance.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/femaleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara"> Ms. Mamatha <br> <span>Big Bags
                                                    International Pvt Ltd</span></p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            Vnet has provided us with expert guidance on apprenticeship schemes. Their
                                            support has helped us stay compliant while building a strong, skilled
                                            workforce through NAPS & NATS.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara"> Mr. Ramesh <br> <span>Grassroots BPO</span>
                                            </p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            We were looking for a reliable partner to manage our apprenticeship
                                            programs, and Vnet exceeded our expectations.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara">Mr. Umesh <br> <span>Hinduja Global
                                                    Solutions</span>
                                            </p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            The team at Vnet made our transition to NAPS & NATS incredibly smooth. Their
                                            in-depth knowledge of HR regulations and compliance ensures our business
                                            remains legally sound and efficient.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara">Mr. Xavier<br> <span>Sayyam Investments Pvt
                                                    Ltd</span>
                                            </p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            From apprenticeship implementation to HR statutory compliance, Vnet has been
                                            an essential partner in our growth. Their structured solutions have helped
                                            us optimize costs and workforce management with ease.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara">Mr. Poornesh<br> <span>Accutech</span>
                                            </p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mt-4 testi_card">
                                        <div class="card-body test_carbdy m-3">
                                            <img src="./image/tt1.png" class="tt_img" alt="best institute">
                                            Vnet’s expert assistance in HR services and apprenticeship programs has
                                            brought immense value to our company. Their guidance has streamlined our
                                            processes, helping us maintain efficiency and compliance at every step.
                                        </div>
                                        <footer class="footer d-flex ps-3 m-3">
                                            <img src="./image/maleava.jpg" class="t_img" alt="best institute">
                                            <p class="ps-3 my-auto tspara">Mr. Rambhilash<br> <span>Jayshree Spun
                                                    Bound</span>
                                            </p>

                                            <img src="./image/ts1.png" class="ts_img mx-auto" alt="best institute">
                                        </footer>
                                        <hr class="mx-auto mb-5" width="90%">
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->






    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

        // partner slider
        var swiper = new Swiper(".partner_slider", {
            slidesPerView: 8,
            spaceBetween: 30,
            freeMode: true,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
        });
        var swiper = new Swiper(".testimonial_slider", {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // When the viewport is 768px or larger
                768: {
                    slidesPerView: 2, // Show 3 slides per view
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

        // counter
        const counter = new countUp.CountUp('counter', 100, {
            duration: 30,
            suffix: "+"  // Add "+" at the end of the count
        });

        const counter2 = new countUp.CountUp('counter2', 10, {
            duration: 30,
            suffix: "+"  // Add "+" at the end of the count
        });

        const counter3 = new countUp.CountUp('counter3', 6000, {
            duration: 30,
        });

        if (!counter.error) counter.start();
        if (!counter2.error) counter2.start();
        if (!counter3.error) counter3.start();

        var swiper = new Swiper(".slider", {
            loop: true, // Enable looping
            autoplay: {
                delay: 6000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
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