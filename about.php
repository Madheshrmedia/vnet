<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <title>VNET PROFESSIONAL SERVICES</title>
    <link rel="icon" type="image/x-icon" href="/image/favicon.png">

    <style>
        #banner {
            background: url(./image/abtbanner.webp) no-repeat center center;
            background-size: cover;
            height: 325px;
            width: 100%;
            margin-top: 2rem;
            border-radius: 20px;
            padding-left: 5rem;
            display: grid;
            align-items: center;
        }

        .breadcrumb-item.active,
        .breadcrumb-item+.breadcrumb-item::before {
            color: white !important;
        }

        .breadcrumb-item a {
            color: #FFFFFF;
        }

        #frame1 {
            margin: 2rem auto;
        }

        #frame1 img {
            width: 100%;
        }

        #frame1 h2,
        .cardframe h2,
        #founder h2,
        .coreframe h2 {
            color: #002A5C;
            font-size: 52px;
        }

        #frame1 h5,
        .cardframe h5 {
            color: #034833;
        }

        #frame1 p {
            color: #5A5A5A;
        }

        #frame1 span,
        .cardframe span,
        #founder span,
        .coreframe span {
            color: #009688;
        }

        #frame2 {
            margin: 3rem auto;
            width: 85%;
        }

        .bi-check {
            background-color: #4CAF50;
            border-radius: 5px;
        }

        .icon-text {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cardheading {
            color: #002A5C;
            font-size: 30px;
            font-weight: 700;
        }

        .card {
            border: 1px solid #009688 !important;
            border-radius: 20px !important;
            padding: 2rem;
        }

        .cardframe {
            background: url(./image/cardbanner.webp) no-repeat center center;
            background-size: cover;
            /* Ensures the image scales to cover the container */
            height: auto;
            width: 100%;
            /* Ensures the banner spans the full width */
            text-align: center;
            padding: 4rem;
            border-radius: 25px;
            border: 1px solid #E3DBD8;
        }

        .greencard {

            text-align: left;
            background-color: #4CAF50;
            color: #FFFFFF;
            padding: 2rem !important;
            border-radius: 13px;
        }

        #cardrow {
            margin-top: 2rem;
        }

        .greencard h3 {

            font-weight: bold;
            color: transparent;
            /* Hide the fill color */
            -webkit-text-stroke: 1px #FFFFFF;
            /* Outline width and color */
            text-stroke: 3px #000;
            /* Standard syntax */
            margin: 0;
        }

        .greencard h4 {
            font-size: 20px;
            margin: 10px 0;
        }

        .scroll-container {
            margin: 3rem 0;
            display: flex;
            align-items: center;
            position: relative;
        }

        .cardcontainer {
            display: flex;
            overflow-x: auto;
            margin: auto;
            scroll-behavior: smooth;
            white-space: nowrap;
            padding: 20px;

            width: 100%;
            /* Ensures container uses the full width of the parent */
            max-width: 1200px;
            /* Adjust the maximum width to hold more cards */
            /* Hide the scrollbar */
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        .cardcontainer::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
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

        .horzcard1 {
            background-color: #FFFFFF;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            text-align: left;
            margin-top: 1rem;
        }

        .horzcard h3 {
            margin: 10px 0;
        }

        .horzcard p {
            font-size: 14px;
            color: #555;
            margin: 0;
            max-height: 4.5em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Number of lines to show */
            -webkit-box-orient: vertical;
        }

        .horzcard:hover {
            transform: scale(1.05);
        }

        .horzcard1:hover {
            transform: scale(1.05);
        }

        .scroll-btn {
            /* Hide the buttons initially */
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            z-index: 1;
            top: 50%;
            transform: translateY(-50%);
        }

        .scroll-btn.left {
            left: 0;
        }

        .scroll-btn.right {
            right: 0;
        }

        .paddgreencard,
        .coreframe {
            margin-top: 3rem;
        }

        #founder {
            margin: 3rem auto;
        }

        #founder img {
            height: 100%;
            width: 100%;

        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .cardcontainer {
                width: 100%;
                padding: 10px;
            }

            .paddgreencard {
                margin-top: 0rem;
            }

            .horzcard {
                width: 150px;
                height: 100px;
                padding: 10px;
            }

            .horzcard h3 {
                font-size: 16px;
            }

            .horzcard p {
                font-size: 12px;
            }

            #frame2 h2,
            .cardframe h2,
            #founder h2,
            .coreframe h2 {
                font-size: 37px;
            }

            .cardheading {
                font-size: 24px;
            }

            p {
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .cardcontainer {
                padding: 5px;
            }

            #frame1 img {
                width: 100%;
            }

            .card {
                margin-bottom: 1rem;
            }

            .horzcard {
                width: 120px;
                height: 90px;
                padding: 8px;
                margin-right: 10px;
            }

            .horzcard h3 {
                font-size: 14px;
            }

            .horzcard p {
                font-size: 10px;
            }

            .margintop {
                margin-top: 1rem;
            }

            .greencard {
                margin-top: 1rem;
            }

            .slidecontent {
                box-shadow: none !important;
            }

            #banner {
                height: 150px;
            }

            #frame2 h2,
            .cardframe h2,
            #founder h2,
            .coreframe h2 {
                font-size: 28px;
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
    <div class="container" id="banner">
        <div class="bannercontent">
            <h1>About Us </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- frame 1 -->
    <div class="container" id="frame1">
        <div class="frame1content" id="frame2">
            <div class="row">
                <div class="col-md-6 col-sm-6 my-auto">
                    <img src="./image/certificates.webp" class="my-auto" alt="certificate">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h5 style="text-transform: uppercase;">About Us</h5>
                    <h2>A trusted <span>Compliance Partner</span></h2>
                    <p>Vnet Professional Services Private Limited is incorporated in January 2025 as a Startup from
                        DPIIT under the Startup India initiative of Government of India. Vnet is an emerging consultancy
                        and advisory firm specializing in helping businesses implement skill development programs under
                        key government initiatives such as NAPS, NATS, PMKVY, and others, aimed at enhancing
                        employability and entrepreneurship. Vnet also have expertise in obtaining various
                        certifications, including ISO, SA, GOTS, and more, to help organizations maintain compliance
                        with social, health, and safety standards. And also the services extend to comprehensive HR
                        solutions, including payroll management, statutory compliance (PF, ESI, PT), recruitment &
                        staffing solutions, POSH training and compliance services and corporate insurance offerings to
                        protect both employees and businesses. Vnet is committed to promoting quality, sustainability,
                        and social accountability across industries.</p>
                    <h2>Vnet Professional Services Pvt Ltd: <span>An ISO 9001:2015 Certified Organization</span></h2>
                    <p>Our rigorous processes, commitment to deliver quality services, and client satisfaction have
                        enabled us to get accredited with this certification. This certification is an affirmation of
                        our vision to deliver solutions that exceed expectations and foster lasting client success.</p>
                    <span class="cardheading" style="color:#002A5C">This certification demonstrates our:</span>
                    <ul>
                        <li>Proficiency in consistently meeting project requirements and adhering to service agreements
                            through our well-established quality management protocols.
                        </li>
                        <li>Capacity to identify and mitigate risks and assure the integrity of deliverables.</li>
                        <li>Competence in designing efficient processes that translate into positive client experiences.
                        </li>
                        <li>Ability to monitor performance and results proactively and make continual improvements that
                            benefit clients.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- frame 2 -->

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-6 margintop ">
                <div class="card">
                    <div class="icon-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>
                        <span class="cardheading">Our Vision:</span>
                    </div>
                    <p class="pt-3">To be a leading provider of innovative consultancy in implementing Apprenticeship
                        and skill
                        development programs, comprehensive HR & recruitment solutions, empowering businesses to achieve
                        excellence, compliance, and sustainability while fostering a skilled workforce for India's
                        growing economy.<span style="visibility:hidden">Lorem Lorem Lorem Lorem Lorem LoremLorem
                            Lorem</span></p>

                </div>

            </div>
            <div class="col-md-6 col-sm-6 margintop">
                <div class="card">
                    <div class="icon-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>
                        <span class="cardheading">Our Mission: </span>
                    </div>
                    <ul>
                        <p class="pt-3">
                            To align with the Government’s goal of engaging 50 lakh skilled apprentices in the country,
                            compared to the current number of 3.5 lakh apprentices, as part of its major HRD
                            initiatives. To
                            be a pioneer in providing expert consultation to MSMEs, helping them avail the benefits of
                            the
                            Government’s development initiatives and enabling workforce empowerment.
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5">
        <!-- Swiper -->
        <div class="swiper partner_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide my-auto"><img src="./image/partn1.gif" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn2.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn3.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn4.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn5.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn6.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn7.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn8.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn9.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn10.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn11.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn12.png" class="img-fluid"
                        alt="best institute near me">
                </div>
                <div class="swiper-slide my-auto"><img src="./image/partn13.png" class="img-fluid"
                        alt="best institute near me">
                </div>
            </div>
        </div>
    </div>
    <!-- frame 4 -->
    <div class="container">
        <div class="cardframe">
            <h5 style="text-transform: uppercase;">Our core services</h5>
            <h2>What We <span>Offer</span></h2>
            <div class="row" id="cardrow">
                <div class="swiper slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="greencard">
                                <h3>01</h3>
                                <h4>Implementation of NAPS & NATS</h4>

                                <ul>
                                    <li>Expert guidance on The Apprentices Act 1961, Apprenticeship Rules and
                                        Regulations 1992
                                        and all the recent reforms & compliances.
                                    </li>
                                    <li>End-to-end implementation solutions of Apprenticeship schemes NAPS & NATS
                                        from
                                        registration, contract generation, monthly payroll management and getting
                                        the financial
                                        benefits from ministry.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="greencard paddgreencard">
                                <h3>02</h3>
                                <h4>HR Services & Compliance</h4>

                                <ul>
                                    <li>Comprehensive HR services, including payroll management, PF & ESI and labor laws
                                        compliance.
                                    </li>
                                    <li>Specialized recruitment and talent advisory services enabling the firms to build
                                        strong
                                        and highly qualified teams for a sustainable growth.
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="greencard">
                                <h3>03</h3>
                                <h4>POSH Training & Compliance</h4>

                                <ul>
                                    <li>Expert guidance on navigating the complexities of POSH compliance via drafting
                                        POSH
                                        policies, ICC formation, appointing external member and annual reports
                                    </li>
                                    <li>Tailored training solutions meticulously designed, addressing the specific needs
                                        of
                                        industry and organization.

                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="greencard paddgreencard">
                                <h3>04</h3>
                                <h4>Insurance</h4>

                                <ul>
                                    <li>One stop destination for all individual insurance needs like Life Insurance,
                                        Health
                                        Insurance, Motor Insurance, Travel Insurance, Marine Insurance, Commercial
                                        Insurance,
                                        Home & Property Insurance.
                                    </li>
                                    <li>Advanced technology platforms and digitization in availing all insurance
                                        products for
                                        individual and corporates with group insurance and workmen compensation.

                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="greencard">
                                <h3>05</h3>
                                <h4>Registrations & Certifications</h4>

                                <ul>
                                    <li>Expert consultation for applying quality management standards ISO, SA & GOTS
                                        certifications.

                                    </li>
                                    <li>Registration and renewal of factory, boiler and labor licenses along with buyer
                                        and
                                        quality audits.

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- frame 5 -->
    <div class="container" id="founder">
        <h5 style="text-transform: uppercase;">Meet Our Management</h5>
        <h2 style="width:80%"><span>Leaders Driving Excellence</span> at Vnet Professional Services</h2>
        <swiper-container class="mySwiper" navigation="true">
            <swiper-slide>
                <div class="row" style="width:100%">
                    <div class="col-md-11 mx-auto my-auto">
                        <div class="row">
                            <div class="col-md-3 col-sm-12" style="padding-right:0" id="centerdiv">
                                <img src="./image/slideimgs1.webp" alt="slideimg1">
                            </div>
                            <div class="col-md-9 col-sm-12" id="centerdiv">
                                <div class="slidecontent">
                                    <h5>Suresh Kumar S- Director</h5>
                                    <p>B.E, MSW holder with 21 years of experience. Started his career in
                                        Telecommunication
                                        sector working in
                                        major MNCs namely Nokia Siemens and Ericsson, shifted his interest in providing
                                        consultation in the
                                        Skill Development industry and provided consultations for United Nations
                                        Development
                                        Program (UNDP),
                                        CII (Confederation of Indian Industries), Electronics City Industries
                                        Association
                                        (ELCIA) and Skill
                                        development Entrepreneurship & Livelihood (SDEL), Government of Karnataka.
                                        Currently
                                        leading the organization
                                        as Director handling Business development, HR Compliance and Industry Relations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="row" style="width:100%">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-3 col-sm-12" style="padding-right:0">
                                <img src="./image/slideimgs2.webp" alt="slideimg1">
                            </div>
                            <div class="col-md-9 col-sm-12" id="centerdiv">
                                <div class="slidecontent">
                                    <h5>Jyothsna P S- Director</h5>
                                    <p>BA, PGD in Print Media design & illustration with over 11yrs of experience.
                                        Started
                                        her
                                        career
                                        in Advertising and worked with clients in multiple sectors such as Retail,
                                        Publishing, F&B, Packaging design; and more. Currently handling the Corporate
                                        Insurance
                                        and HR verticals </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="row" style="width:100%">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-3 col-sm-12" style="padding-right:0">
                                <img src="./image/slideimgs3.webp" alt="slideimg1">
                            </div>
                            <div class="col-md-9 col-sm-12" id="centerdiv">
                                <div class="slidecontent">
                                    <h5>Vijayakumar K- Director</h5>
                                    <p>Diploma in Electronics Communication Engineering with 23 years of experience.
                                        Started his
                                        career in manufacturing sector namely Salzer Electronics, Data Tech, shifted
                                        to Telecommunication sector working in major MNCs namely Nokia Siemens,
                                        Ericsson and Huawei. Currently leading the organization as Director
                                        handling operations and Industry Relations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>

        </swiper-container>
        <style>
            #centerdiv {
                display: flex;
                align-items: center;
                padding-left: 0;
            }

            swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            swiper-container {
                margin: 4rem auto;
            }

            .slidecontent {
                text-align: left;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                padding: 3rem;
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
            }

            .slidecontent p {
                font-size: 15px;
            }
        </style>
        <!-- <div class="row">
           <div class="col-md-4 col-sm-6">
           <img src="./image/photo.webp" alt="photo">
           </div>
           <div class="col-md-8 col-sm-6">
<div class="row"  style="height:100% !important">
<div class="col-md-12 col-sm-6">
<div class="row"  id="bordergreen">
<div class="col-md-8 col-sm-6" id="padtop">
<h2>A Message from Our  <span>Founder</span></h2>
<p>At Vnet Professional Services, we believe that education is the most powerful tool for change. Our mission is to create opportunities, break barriers, and empower individuals and organizations to reach new heights. We are proud to be a part of your journey and look forward to helping you succeed.</p>
<span class="rightside">
– [Founder Name], Founder & CEO, Vnet Professional Services
</span>
</div>
<style>
    .rightside{
        text-align: right;
        color:#4CAF50;
    }
    #bordergreen{
        border: 1px solid #DCDCDC;
        border-radius: 8px;
    }
    #padtop{
        padding:2rem 0 0 2rem;
    }
    #greencardtop{
margin-top:1rem;
    }
</style>
<div class="col-md-4 col-sm-6">
<img src="./image/frame.webp" alt="frame">
</div>
</div>
</div>
<div class="col-md-12 col-sm-6 greencard" id="greencardtop">
<h4>Leadership at Vnet Professional Services</h4>
<p>Our leadership team comprises seasoned professionals with years of expertise in education consultancy, HR services, and compliance management. With their vision and dedication, they have steered Vnet towards becoming a trusted partner for students and organizations alike.

</p>
</div>
</div>
</div>
           </div> -->
    </div>
    <!-- frame 4 -->
    <div class="container">
        <div class="coreframe">
            <h2>Our Core <span>Values</span></h2>
            <div class="row" id="faq">
                <div class="col-md-6 col-sm-6">
                    <div class="horzcard1">
                        <h4>Accessibility</h4>
                        <p>Making education and professional services available to all.</p>
                    </div>
                    <div class="horzcard1">
                        <h4>Integrity</h4>
                        <p>Maintaining transparency and reliability in all our interactions.</p>
                    </div>
                    <div class="horzcard1">
                        <h4>Excellence</h4>
                        <p>Striving for the highest quality in our services and solutions.</p>
                    </div>
                    <div class="horzcard1">
                        <h4>Innovation</h4>
                        <p>Continuously adopting modern practices and technologies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="./image/core.webp" alt="core">
                </div>
            </div>
        </div>
    </div>
    <style>
        .coreframe {
            text-align: center;
        }

        .coreframe img {
            width: 100%;
            height: 90%;
        }

        #faq {
            margin-top: 3rem;
        }
    </style>
    <!-- frame 4 -->
    <div class="greenframe">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>Need Our support</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <h2><i class="fas fa-phone-alt me-3"></i>+91 98765 43210</h2>
            </div>
        </div>
    </div>
    <style>
        .greenframe {
            background-color: #4CAF50;
            color: #FFFFFF;
            text-align: center;
            padding: 2rem 0;
            overflow-x: hidden;

        }

        .greenframe h2 {
            font-size: 3rem;
        }

        @media (max-width: 768px) {
            .cardframe h2 {
                font-size: 43px;
            }

            .greenframe h2 {
                font-size: 2rem;
            }
        }
    </style>
    <!-- frame 4 -->
    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script>
        // partner slider
        var swiper = new Swiper(".partner_slider", {
            slidesPerView: 5,
            spaceBetween: 30,
            freeMode: true,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // 6 seconds interval
                disableOnInteraction: false, // Keeps autoplay active after user interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
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

</html>