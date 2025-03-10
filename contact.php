<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <title>VNET PROFESSIONAL SERVICES</title>
    <link rel="icon" type="image/x-icon" href="/image/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        #banner {
            background: url(./image/contact.webp) no-repeat center center;
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
        }

        .breadcrumb-item a {
            color: #FFFFFF;
        }

        #frame1 {
            margin: 2rem auto;
        }

        #frame1 img {
            width: 80%;
        }

        #frame1 h2 {
            color: #002A5C;
            font-size: 52px;
        }

        #frame1 h5 {
            color: #034833;
        }

        #frame1 p {
            color: #5A5A5A;
        }

        #frame1 span {
            color: #009688;
        }

        #service {
            appearance: none;
            /* Hides the default dropdown arrow */
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>');
            /* Custom arrow */
            background-repeat: no-repeat;
            background-position: right 10px center;
            /* Adjust position */
            background-size: 16px;
            padding-right: 30px;
            /* Adjust padding to avoid text overlap */
            color: #585c5e;
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
            <h1>Contact Us </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- frame2 -->
    <div class="container">
        <!-- start contact frame -->
        <style>
            .formcontainer {
                border: 1px solid #E3E3E3;
                border-radius: 12px;
                padding: 2rem;
                margin: 2rem 0;
                color: #002A5C;
                text-align: left;
            }

            #contactform {
                text-align: left;

            }

            .map-container {
                width: 100%;
                height: 200px !important;
            }
        </style>
        <div class="container" id="centercontent_form">

            <div class="row">
                <div class="col-md-5 col-sm-12">

                </div>
                <div class="col-md-7 col-sm-12" id="contactimg">
                    <div class="cardframe">
                        <h5 style="text-transform: uppercase;">CONTACT US</h5>
                        <h2>Get Started with <span> Vnet Professional Services</span></h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12" id="contactimg">
                    <!-- <div class="cardframe" style="visibility:hidden">
                        <h5 style="text-transform: uppercase;">CONTACT US</h5>
                        <h2>Get Started with <span> Vnet Professional Services</span></h2>
                    </div> -->
                    <img src="./image/contactimg.webp" alt="contactimg">
                </div>
                <div class="col-md-7 col-sm-12" id="contactform">
                    <!-- <div class="cardframe">
                        <h5 style="text-transform: uppercase;">CONTACT US</h5>
                        <h2>Get Started with <span> Vnet Professional Services</span></h2>
                    </div> -->


                    <!-- ---------------- -->
                    <style>
                        .cardframe h2 {
                            color: #002A5C;
                            font-size: 30px;
                        }

                        .cardframe span {
                            color: #009688;
                        }

                        #centercontent_form {
                            margin: 4rem auto;
                        }

                        #contactimg img {
                            width: 100%;
                            height: 100%;
                        }

                        .container {
                            max-width: 1230px;
                            width: 100%;
                        }

                        h1 {
                            font-weight: 700;
                            font-size: 30px;
                            font-family: 'Roboto', sans-serif;
                        }


                        #description {
                            font-size: 24px;
                        }

                        .form-wrap {
                            background: #F1F5EB;
                            width: 100%;
                            max-width: 850px;
                            padding: 30px 50px;
                            margin: 0 auto;
                            position: relative;
                            -webkit-border-radius: 10px;
                            -moz-border-radius: 10px;
                            border-radius: 10px;

                        }

                        .form-group {
                            margin-bottom: 12px;
                            text-align: left;
                        }

                        .form-group>label {
                            display: block;
                            margin-bottom: 6px;
                        }

                        .form-control {
                            height: 40px;
                            background: #FFFFFF;
                            border-color: #E3DBD8;
                            border-radius: 30px;
                            padding: 0 15px;
                            -webkit-transition: all 0.3s ease-in-out;
                            -moz-transition: all 0.3s ease-in-out;
                            -o-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .form-control1 {
                            width: 100%;
                            height: 40px;
                            background: #FFFFFF;
                            border-color: #E3DBD8;
                            border-radius: 30px;
                            padding: 0 15px;
                            -webkit-transition: all 0.3s ease-in-out;
                            -moz-transition: all 0.3s ease-in-out;
                            -o-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .form-control:focus,
                        .form-control1:focus {
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        textarea.form-control {
                            height: 90px;
                            padding-top: 15px;
                            resize: none;
                        }

                        .btn {
                            padding: .657rem .75rem;
                            font-size: 18px;
                            letter-spacing: 0.050em;
                            -webkit-transition: all 0.3s ease-in-out;
                            -moz-transition: all 0.3s ease-in-out;
                            -o-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .btn-primary {
                            color: #fff;
                            background-color: #00bcd9;
                            border-color: #00bcd9;
                        }

                        .btn-primary:hover {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        .btn-primary:focus,
                        .btn-primary.focus {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        .btn-primary:not(:disabled):not(.disabled):active,
                        .btn-primary:not(:disabled):not(.disabled).active,
                        .show>.btn-primary.dropdown-toggle {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                        }

                        .btn-primary:not(:disabled):not(.disabled):active:focus,
                        .btn-primary:not(:disabled):not(.disabled).active:focus,
                        .show>.btn-primary.dropdown-toggle:focus {
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        #submit,
                        #submits {
                            width: 100%;
                            background-color: #4CAF50;
                            border-radius: 40px;
                            border: none;
                        }
                    </style>
                    <div class="container" id="form-wrap">


                        <div class="form-wrap">
                            <form action="send_mail.php" method="post" enctype="multipart/form-data" id="survey-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="compname">Company name</label>
                                            <input type="text" name="compname" id="compname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" name="email" id="email" placeholder="Your Email"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Your Phone *</label>
                                            <input type="number" name="phone" id="phone" placeholder="Your Phone"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="service">Services Offered *</label>

                                            <select name="service" id="service" class="form-control1">
                                                <option value="Implementation of NAPS & NATS">Implementation of NAPS &
                                                    NATS</option>
                                                <option value="HR Services & Compliance">HR Services & Compliance
                                                </option>
                                                <option value="POSH Training & Compliance">POSH Training & Compliance
                                                </option>
                                                <option value="Insurance">Insurance </option>
                                                <option value="Registrations & Certifications">Registrations &
                                                    Certifications </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Write your message</label>
                                            <textarea id="comments" class="form-control" name="comment"
                                                placeholder="Write Message.." required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 address">
                                        <button type="submit" id="submit" class="btn btn-primary btn-block">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <!-- Popup Modal -->
                        <div id="success-modal1" class="modal1">
                            <div class="modal-content1">
                                <span class="close1">&times;</span>
                                <p id="modal-message1"></p>
                            </div>
                        </div>
                        <style>
                            #form-wrap {
                                padding-left: 0;
                                padding-right: 0;
                            }

                            .modal,
                            .modal1 {
                                display: none;
                                position: fixed;
                                z-index: 1;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0, 0, 0, 0.4);
                            }

                            .modal-content,
                            .modal-content1 {
                                background-color: white;
                                margin: 15% auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 40%;
                                text-align: center;
                            }

                            .close,
                            .close1 {
                                float: right;
                                font-size: 24px;
                                cursor: pointer;
                            }
                        </style>
                        <script>
                            document.getElementById("survey-form").addEventListener("submit", function (event) {
                                event.preventDefault(); // Prevent default form submission

                                var formData = new FormData(this); // Create FormData object

                                fetch("send_mail.php", {
                                    method: "POST",
                                    body: formData
                                })
                                    .then(response => response.text())
                                    .then(data => {
                                        let modal = document.getElementById("success-modal1");
                                        let message = document.getElementById("modal-message1");

                                        if (data.includes("Mail sent successfully!")) {
                                            message.innerHTML = "Email Sent Successfully!";
                                            message.style.color = "green";
                                            document.getElementById("survey-form").reset();

                                        } else {
                                            message.innerHTML = "Failed to send email. " + data;
                                            message.style.color = "red";
                                        }

                                        modal.style.display = "block";

                                    })
                                    .catch(error => {
                                        alert("Error: " + error);
                                    });

                                document.querySelector(".close1").addEventListener("click", function () {
                                    document.getElementById("success-modal1").style.display = "none";
                                });

                                window.onclick = function (event) {
                                    let modal = document.getElementById("success-modal1");
                                    if (event.target == modal) {
                                        modal.style.display = "none";

                                    }
                                };
                            });
                        </script>

                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


                    <!-- ----------------------- -->


                    <!-- ----------------------- -->

                </div>
            </div>
        </div>



        <!-- end contact frame -->
    </div>
    <!-- frame2 -->
    <!-- start contact frame -->
    <style>
        .formcontainer {
            border: 1px solid #E3E3E3;
            border-radius: 12px;
            padding: 2rem;
            margin: 2rem 0;
            color: #002A5C;
            text-align: left;
        }

        #contactform {
            text-align: center;

        }

        .map-container {
            width: 100%;
            height: 400px;
        }
    </style>
    <div class="container" id="centercontent_form">

        <h1 class="mt-4 co-head text-center">
            Visit us
        </h1>
        <div class="formcontainer">
            <div class="row">
                <div class="col-md-5 col-sm-12">

                    <p><i class="fas fa-phone me-3"></i> +91 - 9901920043, 8197241032</p>
                    <p><i class="fas fa-envelope me-3"></i>contact@vnetpro.in
                        | director@vnetpro.in

                    </p>
                    <p> <i class="fas fa-home me-3"></i>No-8, 2nd Floor, YRL B. Sardar Basha Tower, Hemavathi Block,
                        Bettadasanapura, Electronic City Phase-1, Bangalore-560100
                    </p>


                </div>
                <div class="col-md-7 col-sm-12" id="contactform">
                    <div class="map-container">

                        <!-- <iframe style="width:100%"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124442.34398106135!2d77.51451445795041!3d12.919079063299051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6bfbc9d90b85%3A0x458d2211da69683a!2sVincerenet%20Solutions!5e0!3m2!1sen!2sin!4v1738732692960!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="50%"
                            height="100%" style="border:0;height: 100%;" allowfullscreen="" loading="lazy"></iframe> -->


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.984684386685!2d77.6348361!3d12.844265599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6b0637a4b413%3A0xeaa942719531d21!2sVnet%20Professional%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1741585721690!5m2!1sen!2sin"
                            width="50%" height="100%" style="border:0;height: 100%;width:100%" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- ---------------- -->

                    <div class="container">




                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


                    <!-- ----------------------- -->


                    <!-- ----------------------- -->

                </div>
            </div>
        </div>

    </div>

    <!-- end contact frame -->
    <!-- CTA -->
    <!-- <div class="container-fluid fcta">
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
    </div> -->
    <!-- end CTA -->
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
    <!-- frame2 -->
    <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

</body>

</html>