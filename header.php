<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- count api -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.umd.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Outfit:wght@100..900&display=swap"
    rel="stylesheet">


<style>
    * {
        font-family: "Lato", sans-serif;
    }



    .header-logo {
        width: 404px;
    }

    .nav-item {
        margin-right: 25px;
    }

    .dropdown-item {
        font-weight: 300 !important;
        color: #002A5C !important;
        font-size: 14px !important;
    }

    .header-icon {
        width: 25px;
        margin-right: 10px;
    }

    .booknow-btn {
        text-decoration: none;
        padding: 8px 17px;
        background: #4CAF50;
        color: white;
        margin-left: 30px;
        border-radius: 30px;
        font-size: 20px;
    }

    .dropdown-menu {
        --bs-dropdown-link-active-bg: none !important;
    }

    .fcta {
        background-color: #4CAF50;
        color: white;
    }

    .fcta_img {
        width: 60px;
    }

    @media (max-width: 576px) {
        .header-logo {
            width: 100%;
            padding-bottom: 1rem;
        }

        .navbar-brand {
            width: 80%;
        }

        .navbar {
            padding: 0px !important;
        }

        .booknow-btn {
            margin-left: 0px;
            margin-bottom: 5px;
        }

        .ab-main {
            font-size: 28px;
        }

        #banner {
            height: 150px;
        }

        /* .h5,
        h5 {
            font-size: 18px !important;
        } */
    }
</style>
<header class="header header-sticky" id="headerall">


    <nav class="navbar navbar-expand-lg navbar-light shadow px-5  sticky-top">
        <div class="container-fluid nav-container">
            <a class="navbar-brand" href="./index.php"><img src="./image/logo.png" alt="cogni logo"
                    class="header-logo"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span><i class="fas fa-bars" style="color:black"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./product.php">Services</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./service.php">Apprenticeship</a></li>
                            <li><a class="dropdown-item" href="./hrservice.php">HR Services & Compliance</a></li>
                            <li><a class="dropdown-item" href="./posh.php">POSH Training & Compliance</a></li>
                            <li><a class="dropdown-item" href="./insurance.php">Insurance</a></li>
                            <li><a class="dropdown-item" href="./register.php">Registrations & Certifications</a></li>

                        </ul>
                    </li>
                    <li class="nav-item mobile_dis">
                        <a class="nav-link" href="./contact.php">Contact us </a>
                    </li>
                    <li class="nav-item mobile_dis">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                <div class="d-flex header-cont align-items-center">


                    <a href="tel:+919901920043" target="_blank" class="booknow-btn">
                        <i class="fas fa-phone-square-alt"></i>
                        +91 99019 20043
                    </a>

                </div>
            </div>
        </div>
    </nav>
</header>