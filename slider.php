<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
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
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .banner-cont-ots {
      padding-left: 125px;

      position: absolute;
      margin-top: 75px;
      color: white;
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
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="card ots-card">
          <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto" alt="...">
          <div class="card-body ots-cardbdy">
            <h5 class="card-title">Apprenticeship</h5>
            <p class="card-text">Hands-on training opportunities for youth</p>
            <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card ots-card">
          <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto" alt="...">
          <div class="card-body ots-cardbdy">
            <h5 class="card-title">Apprenticeship</h5>
            <p class="card-text">Hands-on training opportunities for youth</p>
            <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card ots-card">
          <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto" alt="...">
          <div class="card-body ots-cardbdy">
            <h5 class="card-title">Apprenticeship</h5>
            <p class="card-text">Hands-on training opportunities for youth</p>
            <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card ots-card">
          <img src="/image/ots-c1.png" class="card-img-top card-img-top-ots mx-auto" alt="...">
          <div class="card-body ots-cardbdy">
            <h5 class="card-title">Apprenticeship</h5>
            <p class="card-text">Hands-on training opportunities for youth</p>
            <a href="#" class="btn btn-outline-light">Learn More &#8594;</a>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>