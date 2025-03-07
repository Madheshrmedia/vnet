<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNET PROFESSIONAL SERVICES</title>
    <link rel="icon" type="image/x-icon" href="/image/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #banner {
            background: url(./image/register.webp) no-repeat center center;
            background-size: cover;
            /* Ensures the image scales to cover the container */
            height: 325px;
            width: 100%;
            /* Ensures the banner spans the full width */
            margin-top: 2rem;
            border-radius: 20px;
            padding-left: 5rem;
            display: grid;
            align-items: center;
            color: #FFFFFF;
        }

        .breadcrumb-item a {
            color: #FFFFFF;
        }

        .breadcrumb-item.active {
            color: #FFFFFF !important;
        }

        h2 {
            font-size: 30px !important;
            color: #002A5C !important;
            margin: 2rem 0 1rem 0 !important;
        }

        .left-column h4 {
            font-size: 1.4rem;
    color: #002A5C !important;
    margin: 2rem 0 0.8rem 0 !important;
        }

        .right-column h4 {
            font-size: 2.5rem;
            color: #002A5C !important;
            margin:0 !important;
        }

        h5 {
            line-height: 30px !important;
            font-size: 17px !important;
            color: #002A5C !important;
            margin: 1rem 0 !important;
        }

        p {
            font-size: 17px;
            color: #5A5A5A !important;
        }

        .left-column li {
            font-size: 17px !important;
            color: #5A5A5A !important;
        }

        .fa-check:before {
            margin-right: 5px;
            border-radius: 5px;
            padding: 3px;
            background-color: #4CAF50;
            color: #FFFFFF;
            content: "\f00c";
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 32px !important;

            }

            h4 {
                font-size: 28px;

            }

            h5 {
                font-size: 23px;

            }

            p {
                font-size: 15px;

            }
        }

        @media (min-width: 768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 1250px !important;
            }

        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 657px;
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
            <h1>Registrations & Certifications</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registrations & Certifications</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- frame 1 -->
    <div class="container" id="apprcontainer">
        <div class="left-column">
            <div class="leftcontent">


                <img src="./image/registr1.webp" alt="groupphoto" class="registr1">

                <h2 id="apprenticeship">Your One-Stop Solution for Business Compliance and Certifications</h2>

                <p>Navigating the complex world of licenses and certifications is crucial for legal compliance and
                    business growth.
                    At Vnet Professional Services, we provide end-to-end support for securing and maintaining essential
                    business licenses and certifications.
                    Our team ensures smooth processes, timely filings,
                    and expert advisory services tailored to your business needs.</p>
                <h4>Our Services</h4>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Factory License Registration
                        </h5>
                        <ul>
                            <li>Comprehensive support for obtaining factory licenses as per the Factories Act, 1948.
                            </li>
                            <li>Assistance in documentation, site inspections, and regulatory compliance.</li>
                            <li>Ensuring operational safety and legal adherence.</li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Labor License Assistance
                        </h5>
                        <ul>
                            <li>Registration and renewal of labor licenses under the Contract Labour (Regulation &
                                Abolition) Act, 1970.</li>
                            <li>Management of employee records and labor law compliance.</li>
                            <li>Support for both principal employers and contractors.</li>

                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i> Trade License Application</h5>
                        <ul>
                            <li>Facilitation of trade licenses for business operations across various sectors.</li>
                            <li>Assistance with the preparation and submission of required documents.</li>
                            <li>Ensuring compliance with local municipal authority regulations.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>ISO Certification Support</h5>
                        <ul>
                            <li>Guidance for obtaining ISO certifications (9001, 14001, 27001, and more).</li>
                            <li>Assistance in preparing documentation and improving processes to meet ISO standards.
                            </li>
                            <li>Audit preparation and training support for maintaining compliance.</li>

                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i> GOTS (Global Organic Textile Standard) Certification</h5>
                        <ul>
                            <li>Comprehensive support for certification in organic textile production.</li>
                            <li>Assistance with compliance, labeling, and supply chain management.</li>
                            <li>Expert guidance to meet stringent global environmental and social standards.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>SA (Social Accountability) Certification</h5>
                        <ul>
                            <li>Assistance in obtaining SA8000 certification to ensure ethical working conditions.</li>
                            <li>Comprehensive compliance solutions for social accountability in the workplace.</li>
                            <li>Continuous monitoring and training for maintaining certification requirements.</li>

                        </ul>
                    </div>
                </div>


            </div>
            <div class="leftcontent">


                <img src="./image/registr2.webp" alt="groupphoto" class="image">

                <h2 id="naps">Why Choose Us for Registrations & Certifications?</h2>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Hassle-Free Process:</h5>
                        <p>We manage all the paperwork and formalities.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Compliance Experts:</h5>
                        <p>Stay legally compliant with our expert advisory services.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Customized Solutions:</h5>
                        <p>Tailored to your industry and specific operational needs.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Timely Approvals:</h5>
                        <p>Swift action to ensure your business operations remain uninterrupted.</p>
                    </div>
                </div>


            </div>
            <!-- ------- -->
            <div class="leftcontent">


                <img src="./image/registr3.webp" alt="groupphoto" class="image">

                <h2 id="nats">Industries We Serve</h2>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h5><i class="fa fa-check"></i>Manufacturing </h5>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5><i class="fa fa-check"></i>Textiles & Garments </h5>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5><i class="fa fa-check"></i>IT & Service Sectors </h5>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h5><i class="fa fa-check"></i>Retail & Trade Businesses </h5>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5><i class="fa fa-check"></i>Export-Import Firms</h5>

                    </div>


                </div>
            </div>
            <!-- ------- -->
        </div>
        <div class="right-column">
            <div class="box1">
                <a href="#apprenticeship">
                    <div class="horzcard1">
                        <h4>Registrations </h4>
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
                <a href="#naps">
                    <div class="horzcard1">
                        <h4>Certifications</h4>
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
                <a href="#nats">
                    <div class="horzcard1">
                        <h4>Industries we serve</h4>
                        <i class="fas fa-arrow-right"></i> 
                    </div>
                </a>
            </div>
            <div class="box2">
                <img src="./image/phone.png" alt="groupphoto">
                <p>Get a Free Consultation</p>
                <p>+91 9901920043 </p>
            </div>
        </div>
    </div>
    <style>
        #apprcontainer {
            margin: 2rem auto;
        }

        .box2 {
            border-radius: 10px;
            text-align: center;
            background-color: #4CAF50;
            padding: 2rem 0;
            margin-top: 1rem;
        }

        .box2 p {
            font-weight: 600;
            color: #FFFFFF !important;
            font-size: 20px !important;
        }

        .box2 img {
            margin-bottom: 13px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            /* Allows wrapping on smaller screens */
            gap: 20px;
            /* Adds spacing between columns */
        }

        .left-column {
            flex: 1;
            /* Takes available space */
            padding: 20px;
            width: 100%;
        }

        .left-column img {
            width: 100%;
        }

        .leftcontent:not(:first-of-type) img {
            margin-top: 3rem;
        }

        .right-column {
            padding-top: 20px;
            width: 280px;
            position: sticky;
            top: 0;
            height: 106vh;
            overflow-y: auto;
        }

        .image1 {
            width: 100%;
        }

        .horzcard1 {
            display: flex;
            align-items: center; 
            justify-content: space-between;
            background-color: #FFFFFF;
            padding: 10px 18px;
            border: 1px solid #ddd;
            border-radius: 38px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            text-align: left;
            margin-top: 1rem;
        }
        .horzcard1 i{
            color: #034833;
            border-radius: 10px;
    background-color: #F1F5EB;
    padding: 5px;
        }
        .horzcard1:hover {
            transform: scale(1.05);
        }
        .horzcard1:hover i {
            color: #FFFFFF;
    background-color: #4CAF50; 
}
        .horzcard1 h4 {
            font-size: 17px;
        }

        a {
            text-decoration: none;
        }

        .box1 {
            border-radius: 10px;
            padding: 1rem;
            background-color: #F1F5EB;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .container {
                flex-direction: column;
                /* Stack columns on smaller screens */
            }

            .right-column {
                width: 100%;
                /* Full width on small screens */
                height: auto;
                /* Adjust height */
                position: relative;
                /* Remove sticky on mobile */
            }
        }
    </style>
    <!-- frame 1 -->
    <!-- CTA -->
    <div class="container-fluid fcta">
        <div class="row pt-3">
            <div class="col-md-6">
                <h1 class="text-center">Need Our Support</h1>
            </div>
            <div class="col-md-6">
                <h1 class="text-center"> <img src="./image/fcta.png" class="fcta_img" alt="best institute"> +91
                    9901920043
                </h1>
            </div>
        </div>
    </div>
    <!-- end CTA -->
    <style>
        .greenframe {
            background-color: #4CAF50;
            color: #FFFFFF !important;
            text-align: center;
            padding: 1rem 0;
            overflow-x: hidden;

        }

        .greenframe h2 {
            font-size: 3rem !important;
            color: #FFFFFF !important;
        }

        @media (max-width: 768px) {
            .cardframe h2 {
                font-size: 43px;
            }

            .greenframe h2 {
                font-size: 2rem !important;
            }
        }
    </style>
    <!-- frame 4 -->
    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
</body>

</html>