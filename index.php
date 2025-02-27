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
            padding-top: 15rem;
    width: 56%;
    padding-left: 43px;
    font-size: 33px;
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

    <div class="container" id="banner">
    <div class="bannercontent1">
<button type="button" class="btn btn-secondary whitebutton">Do you know you can utilize your CSR funds for paying stipend of your apprentices?</button><br>
<button type="button" class="btn btn-secondary whitebutton">Do you want to reduce your employee salary costs?</button><br>
<button type="button" class="btn btn-secondary whitebutton">Do you want to get exemption of PF & ESI?</button><br>
</div>
<div class="bannercontent">
<h1>Enroll your company under NAPS & NATS Apprenticeship training program and avail 
Funding support from Central Government
 </h1>
 <button type="button" class="btn btn-secondary" >Get free consultation  +91 - 990 192 0043</button>
</div>

</div>
<style>
    .whitebutton{
        background-color: #FFFFFF !important;
        color:#000000 !important;
        text-align: left;
        margin: 2rem 0 !important;
        
    }
     #banner {
        background: url(./image/homebanner.webp) no-repeat;
        background-size: cover;
    height: auto;
    width: 100%; /* Ensures the banner spans the full width */
   
    border-radius: 20px;
    padding-left:3rem;
    display: grid;
    align-items: center;
}
.bannercontent{
    color: #FFFF;
    width: 50%;
    /* padding-top: 22rem; */
}
.bannercontent h1{
    font-size:32px !important;
    line-height: 3rem;

}
.btn-secondary {
    margin:3rem 0;
    background-color: #4CAF50;
    border-radius: 25px;
    color: #FFFFFF;
    font-size:24px;
    font-weight:bold;
}
</style>
    
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
                                    <img src="./image/Ellipse.webp" class="card-img-top card-img-top-ots mx-auto"
                                        alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                <img src="./image/Ellipse1.webp" class="card-img-top card-img-top-ots mx-auto"
                                alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                <img src="./image/Ellipse2.webp" class="card-img-top card-img-top-ots mx-auto"
                                alt="image_Apprenticeship">
                                    <div class="card-body ots-cardbdy">
                                        <h5 class="card-title">Apprenticeship</h5>
                                        <p class="card-text">Hands-on training opportunities for youth</p>
                                        <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ots-card">
                                <img src="./image/Ellipse1.webp" class="card-img-top card-img-top-ots mx-auto"
                                alt="image_Apprenticeship">
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
     <style>
        #imageframe img{
            width:100%;
            height: 100%;
        }
        .icon-text {
    display: flex;
    align-items: center;  
    gap:23px;
    justify-content: center;
}
        .cardheading{
            color: #002A5C;
            font-size:30px;
            font-weight:700 ;
        }
        .card{
            border: 1px solid #009688 !important;
            border-radius: 20px !important;
            padding: 2rem;
        }
     #secrow{
        margin-top:1rem;
     }
     </style>
     <div class="container">
     <div class="row">
    <div class="col-md-6 col-sm-12" id="imageframe">
    <img src="./image/imageframe.webp" alt="imageframe">
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="row">
        <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="icon-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF"  class="bi bi-check" viewBox="0 0 16 16" style="background-color: #4CAF50;border-radius: 40px;">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg>
<div class="content">
<p style="margin-bottom: 0;font-size:40px;font-weight:bold">100+ </p> 
<span style="font-size:15px;font-weight:bold">Satisfied Clients</span>
</div>
   
  
</div>


                </div>
        </div>
        <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="icon-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF"  class="bi bi-check" viewBox="0 0 16 16" style="background-color: #4CAF50;border-radius: 40px;">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg>
<div class="content">
<p style="margin-bottom: 0;font-size:40px;font-weight:bold">10+ </p> 
<span style="font-size:15px;font-weight:bold">Locations Across India</span>
</div>
</div>
</div>         
        </div>
        </div>
        <div class="row" id="secrow">
            <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="icon-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF"  class="bi bi-check" viewBox="0 0 16 16" style="background-color: #4CAF50;border-radius: 40px;">
      <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
    </svg>
    <div class="content">
    <p style="margin-bottom: 0;font-size:40px;font-weight:bold">100+ </p> 
    <span style="font-size:15px;font-weight:bold">Satisfied Clients</span>
    </div>
       
      
    </div>
    
    
                    </div>
            </div>
    
            </div>
        </div>
</div>
     </div>



    <!-- end Our top services -->
    <div id="partner" >
     <div class="container" >
     <div class="scroll-container">
        <div class="cardcontainer">
            <div class="horzcard">
            <img src="./image/logo1.png" alt="logo1">
            </div>
            <div class="horzcard">
            <img src="./image/logo2.png" alt="logo2">
            </div>
            <div class="horzcard">
            <img src="./image/logo3.png" alt="logo3">
            </div>
            <div class="horzcard">
            <img src="./image/logo4.png" alt="logo4">
            </div>
            <div class="horzcard">
            <img src="./image/logo5.png" alt="logo5">
            </div>
    
        </div>
    </div>
     </div>
     </div>
    <style>
        #partner{
    border-top: 1px solid #CBCBCB;
    border-bottom: 1px solid #CBCBCB;
    margin:2rem 0;
        }
        .cardcontainer {
    display: flex;
    overflow-x: auto;
    margin:auto;
    scroll-behavior: smooth;
    white-space: nowrap;
    padding: 20px;
   
    width: 100%; /* Ensures container uses the full width of the parent */
    max-width: 1200px; /* Adjust the maximum width to hold more cards */
    /* Hide the scrollbar */
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE and Edge */
}
.cardcontainer::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

.horzcard {
    flex: 0 0 auto;
    width: 250px;
    height: 90px;
    margin-right: 20px;
    padding: 10px;
    background-color: #fafafa;
    border: 1px solid #ddd;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
    position: relative;
    overflow: hidden;
}
    </style>
    <script>
        function navigateToPage(pageUrl) {
    window.location.href = pageUrl;
}

document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.cardcontainer');

    // Define scroll speed and interval
    const scrollSpeed = 5; // Adjust scroll speed (higher value for faster scrolling)
    const scrollInterval = 30; // Adjust scroll interval in milliseconds
    let scrollDirection = 'right'; // Initial scroll direction

    // Function to scroll container automatically
    function autoScroll() {
        if (scrollDirection === 'right') {
            container.scrollLeft += scrollSpeed;
            // Check if reached end of scroll
            if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
                scrollDirection = 'left';
            }
        } else if (scrollDirection === 'left') {
            container.scrollLeft -= scrollSpeed;
            // Check if scrolled back to start
            if (container.scrollLeft <= 0) {
                scrollDirection = 'right';
            }
        }
    }

    // Start auto-scrolling
    let scrollIntervalId = setInterval(autoScroll, scrollInterval);

    // Stop auto-scrolling when mouse enters container
    container.addEventListener('mouseenter', () => {
        clearInterval(scrollIntervalId);
    });

    // Resume auto-scrolling when mouse leaves container
    container.addEventListener('mouseleave', () => {
        scrollIntervalId = setInterval(autoScroll, scrollInterval);
    });

    // Optional: Stop auto-scrolling when clicking on a card
    const cards = document.querySelectorAll('.horzcard');
    cards.forEach(card => {
        card.addEventListener('click', () => {
            clearInterval(scrollIntervalId);
        });
    });
});
    </script>
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