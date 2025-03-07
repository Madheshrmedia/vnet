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
            background: url(./image/hrservice.webp) no-repeat center center;
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

        .right-column h2 {
            margin: 1rem 0 !important;
        }

        .breadcrumb-item a {
            color: #FFFFFF;
        }

        .breadcrumb-item.active {
            color: #FFFFFF !important;
        }

        h2 {
            font-size: 52px !important;
            color: #002A5C !important;
            margin: 2rem 0 1rem 0 !important;
        }

        .left-column h4 {
            font-size: 2rem;
            color: #002A5C !important;
            margin: 2rem 0 !important;
        }

        .right-column h4 {
            font-size: 2.5rem;
            color: #002A5C !important;
            margin: 1rem 0 !important;
        }

        h5 {
            line-height: 30px !important;
            font-size: 1.15rem !important;
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
            <h1>HR Services & Compliance</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">HR Services & Compliance</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- frame 1 -->
    <div class="container" id="apprcontainer">
        <div class="left-column">
            <div class="leftcontent">


                <img src="./image/hrservice1.webp" alt="groupphoto" class="hrservice1">

                <h2 id="apprenticeship">HR Services & Recruitment</h2>
                <p>At Vnet Professional Services, we understand that efficient human resource management is essential
                    for business success. Our comprehensive HR services are tailored to streamline your payroll
                    operations, ensure compliance with statutory regulations, and support you in managing complex
                    labor laws. We also offer expert filing services to handle your tax obligations, allowing you to
                    focus on growing your business.</p>
                <h4>Our HR Services</h4>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Payroll Management: </h5>
                        <ul>
                            <li>Accurate and timely payroll processing.</li>
                            <li>Salary computation, deductions, and reimbursements.</li>
                            <li>Payslip generation and employee record management.</li>
                            <li>Customized payroll reports for business insights.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Statutory Compliance: </h5>
                        <ul>
                            <li>Assistance with Provident Fund (PF), Employee State Insurance (ESI), and other mandatory
                                contributions.</li>
                            <li>Regular audits to ensure compliance with evolving regulations.</li>
                            <li>Guidance on legal documentation and filing requirements.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Labor Law Advisory:</h5>
                        <ul>
                            <li>Expert consultation on labor law policies and amendments.</li>
                            <li>Grievance redressal support and policy formulation.</li>
                            <li>Legal representation and dispute resolution services.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Recruitment Solutions:</h5>
                        <ul>
                            <li>Talent acquisition strategies customized to your industry needs.</li>
                            <li>Screening, interviewing, and onboarding support.</li>
                            <li>Building long-term employee engagement strategies.</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="leftcontent">


                <img src="./image/hrservice2.webp" alt="groupphoto" class="image">

                <h2 id="naps">Expert Filing Services</h2>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Tax Deducted at Source (TDS) Filings:</h5>
                        <ul>
                            <li>Accurate calculation and timely filing of TDS returns</li>
                            <li>Compliance with the latest Income Tax Act regulations.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Professional Tax (PT) Filings:</h5>
                        <ul>
                            <li>Hassle-free PT registration and filing services for organizations across states.</li>
                            <li>Ensuring timely submission to avoid penalties.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Goods and Services Tax (GST) Filings: </h5>
                        <ul>
                            <li>GST registration and compliance services.</li>
                            <li>Assistance with GSTR-1, GSTR-3B, and annual filings.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Business Tax Filings:</h5>
                        <ul>
                            <li>Expert support for corporate income tax filings.</li>
                            <li>Strategic tax planning to optimize your financial liabilities.</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- ------- -->
            <div class="leftcontent">


                <img src="./image/hrservice3.webp" alt="groupphoto" class="image">

                <h2 id="nats">Why Choose Vnet for HR & Filing Services?</h2>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>End-to-End Support: </h5>
                        <p>From payroll management to recruitment and filing services.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Compliance Assurance:</h5>
                        <p>Stay on top of statutory regulations without stress.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Tailored Solutions: </h5>
                        <p>Customized services to fit your business size and industry.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5><i class="fa fa-check"></i>Expert Team: </h5>
                        <p>A dedicated team of professionals ensuring precision and efficiency.</p>
                    </div>
                </div>


            </div>
            <!-- ------- -->
        </div>
        <div class="right-column">
            <div class="box1">
                <a href="#apprenticeship">
                    <div class="horzcard1">
                        <h4>Our HR Services</h4>
                    </div>
                </a>
                <a href="#naps">
                    <div class="horzcard1">
                        <h4>Expert Filing Services </h4>
                    </div>
                </a>
                <a href="#nats">
                    <div class="horzcard1">
                        <h4>Why Choose Vnet </h4>
                    </div>
                </a>
            </div>
            <div class="box2">
                <img src="./image/phone.png" alt="groupphoto">
                <p>Get a Free Consultation</p>
                <p>+91 98765 43210</p>
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
            font-size: 27px !important;
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
            width: 370px;
            position: sticky;
            top: 0;
            /* Sticks to the top */
            padding: 20px;
            height: 106vh;
            /* Covers full viewport height */
            overflow-y: auto;
            /* Enables scrolling if content overflows */
        }

        .image1 {
            width: 100%;
        }

        .horzcard1 {
            background-color: #FFFFFF;
            padding: 10px 18px;
            border: 1px solid #ddd;
            border-radius: 38px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            text-align: left;
            margin-top: 1rem;
        }

        .horzcard1:hover {
            transform: scale(1.05);
        }

        .horzcard1 h4 {
            font-size: 20px;
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
    <!-- frame 4 -->
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