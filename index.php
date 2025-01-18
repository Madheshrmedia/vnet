<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vnet</title>
    <style>
        /* swiper js code */

        .swiper {
            width: 100%;
            height: 100%;
            background: #000;
        }

        .swiper-slide {
            font-size: 18px;
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        .swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        .swiper-slide .subtitle {
            font-size: 21px;
        }

        .swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
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
                        <button type="button" class="btn btn-outline-light">Learn More &#8594;</button>
                        <a class="my-auto" href="#">Contact Us</a>
                    </span>
                </h1>

            </div>

            <img src="./image/banner.webp" alt="best institute" class="img-fluid">


        </div>
    </div>
    <!-- banner end -->

    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            speed: 600,
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>