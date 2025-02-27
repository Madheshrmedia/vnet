
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <title>Contact</title>
       <!-- Bootstrap CSS v5.2.1 -->
       <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    <style>
 #banner {
    background: url(./image/contact.webp) no-repeat center center;
    background-size: cover; /* Ensures the image scales to cover the container */
    height: 325px;
    width: 100%; /* Ensures the banner spans the full width */
    margin-top:2rem;
    border-radius: 20px;
    padding-left:5rem;
    display: grid;
    align-items: center;
}
.breadcrumb-item a{
    color: #FFFFFF;
}
#frame1{
    margin: 2rem auto;
}
#frame1 img{
    width:80%;
}
#frame1  h2{
    color: #002A5C;
    font-size:52px;
}
#frame1  h5{
    color: #034833;
}
#frame1  p{
    color: #5A5A5A;
}
#frame1  span{
    color: #009688;
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
    <div class="row">
        <div class="col-md-6 col-sm-12">
        <img src="./image/contactimg.webp" alt="contactimg">  
        </div>
        <div class="col-md-6 col-sm-12">
        <h5 style="text-transform: uppercase;">Meet Our Management</h5>
        <h2 style="width:80%"><span>Leaders Driving Excellence</span> at Vnet Professional Services</h2>
</div>
    </div>
</div>
        <!-- frame2 -->
      <!-- footer -->
    <?php
    include_once "./footer.php";
    ?>
    <!-- footer end --> 
      <!-- Bootstrap JavaScript Libraries -->
      <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
  </body>
  </html>

  