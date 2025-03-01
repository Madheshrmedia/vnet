
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <title>About</title>
       <!-- Bootstrap CSS v5.2.1 -->
       <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    <style>
 #banner {
    background: url(./image/abtbanner.webp) no-repeat center center;
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
#frame1  h2,.cardframe h2,#founder h2,.coreframe h2{
    color: #002A5C;
    font-size:52px;
}
#frame1  h5,.cardframe h5{
    color: #034833;
}
#frame1  p{
    color: #5A5A5A;
}
#frame1  span,.cardframe span,#founder span,.coreframe span{
    color: #009688;
}
#frame2{
    margin:3rem auto;
    width:85%;
}
.bi-check{
            background-color: #4CAF50;  
            border-radius: 5px;
        }
        .icon-text {
    display: flex;
    align-items: center;  
    gap:8px;
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
        .cardframe{
            background: url(./image/cardbanner.webp) no-repeat center center;
    background-size: cover; /* Ensures the image scales to cover the container */
    height: auto;
    width: 100%; /* Ensures the banner spans the full width */
            text-align: center;
            padding:4rem ;
            border-radius: 25px;
            border: 1px solid #E3DBD8;
        }
        
        .greencard{
          
            text-align: left;
            background-color: #4CAF50;
            color:#FFFFFF;
            padding:2rem !important ;
            border-radius: 13px;
        }
       #cardrow{
        margin-top:2rem;
       }
       .greencard h3 {
    
    font-weight: bold;
    color: transparent; /* Hide the fill color */
    -webkit-text-stroke: 1px #FFFFFF; /* Outline width and color */
    text-stroke: 3px #000; /* Standard syntax */
    margin: 0;
}
.greencard h4 {
    font-size:20px;
    margin:10px 0;
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
.horzcard1{
    background-color: #FFFFFF;
    padding:1rem;
    border: 1px solid #ddd;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
    text-align: left;
    margin-top:1rem;
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
    -webkit-line-clamp: 3; /* Number of lines to show */
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
.paddgreencard,.coreframe{
    margin-top: 3rem;
}
#founder{
    margin: 3rem auto;
}
#founder img{
    width: 100%;
  
}
/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .cardcontainer {
        width: 100%;
        padding: 10px;
    }
    .paddgreencard{
    margin-top:0rem;
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
    #frame2 h2,.cardframe h2,#founder h2,.coreframe h2{
        font-size: 37px;
    }
 
    .cardheading{
        font-size: 24px;
    }
    p{
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
.card{
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
    .margintop{
        margin-top:1rem;
    }
    .greencard{
        margin-top:1rem;
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
            <div class="col-md-6 col-sm-6">
            <img src="./image/certificate.webp" alt="certificate">
            </div>
            <div class="col-md-6 col-sm-6">
<h5 style="text-transform: uppercase;">About Us</h5>
<h2>Welcome to Vnet <span>Professional Services</span></h2>
<p>At <span style="color:#5A5A5A;font-weight:bold">Vnet Professional Services Private Limited</span>, we believe education is the foundation for growth, innovation, and empowerment. Established with a vision to make education accessible and compliance hassle-free, Vnet has emerged as a trusted partner for individuals, institutions, and organizations seeking professional growth and streamlined processes.</p>
<p>We specialize in <span style="color:#5A5A5A;font-weight:bold">Distance Education, Skill Development Programs, Apprenticeship Schemes, HR Compliance Services, Registrations & Certifications</span>, and much more. Our holistic approach ensures that we meet the diverse needs of our clients, paving the way for their success.</p>
</div>
        </div>
        </div>
     
</div>
     <!-- frame 2 -->
    
     <div class="container" >
      
        <div class="row">
         
            <div class="col-md-6 col-sm-6 margintop ">
            <div class="card">
            <div class="icon-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg>
    <span class="cardheading">Our Vision:</span>
</div>
<p>To empower individuals and organizations through accessible education, professional development, and compliance solutions, enabling them to achieve their goals and make a positive impact in the world.<span style="visibility:hidden">Lorem Lorem Lorem Lorem Lorem LoremLorem Lorem</span></p>

                </div>
            
            </div>
            <div class="col-md-6 col-sm-6 margintop">
            <div class="card">
            <div class="icon-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg>
    <span class="cardheading">Our Mission: </span>
</div>
<ul>
    <li>To provide affordable and flexible distance education opportunities that cater to the diverse needs of learners.</li>
    <li>To bridge the gap between education and employment through innovative apprenticeship programs.</li>
</ul>
                </div>
            </div>
        </div>
</div>
   <!-- frame 3 -->
   <div class="scroll-container">
        <div class="cardcontainer">
            <div class="horzcard">
            <img src="./image/Companylogo1.png" alt="Companylogo1">
            </div>
            <div class="horzcard">
            <img src="./image/Companylogo2.png" alt="Companylogo2">
            </div>
            <div class="horzcard">
            <img src="./image/Companylogo3.png" alt="Companylogo3">
            </div>
            <div class="horzcard">
            <img src="./image/Companylogo4.png" alt="Companylogo4">
            </div>
            <div class="horzcard">
            <img src="./image/Companylogo5.png" alt="Companylogo5">
            </div>
    
        </div>
    </div>
 
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
       <!-- frame 4 -->
        <div class="container">
        <div class="cardframe">
        <h5 style="text-transform: uppercase;">Our core services</h5>
        <h2>What We <span>Offer</span></h2>
<div class="row" id="cardrow">
    <div class="col-md-3 col-sm-6 ">
        <div class="greencard">
        <h3>01</h3>
<h4>Professional Services</h4>

<ul>
    <li>Partnering with top universities to offer a wide range of courses tailored for working professionals and stude</li>
    <li>Flexible schedules, affordable fee structures, and secure payment gateways to ensure a seamless learning experience</li>
</ul> 
        </div>



    </div>
    <div class="col-md-3 col-sm-6 ">
    <div class="greencard paddgreencard">
 <h3>02</h3>
<h4>Professional Services</h4>

<ul>
    <li>Comprehensive HR services, including payroll management and compliance with statutory and labor laws</li>
    <li>Assistance with registrations and certifications such as Factory Licenses, ISO certifications, and more</li>
</ul> 

</div>
    </div>
    <div class="col-md-3 col-sm-6 ">
    <div class="greencard">
 <h3>03</h3>
<h4>Skill Development and Apprenticeship Programs</h4>

<ul>
    <li>Enabling individuals to enhance their employability through government-backed initiatives like PMKVY, NAPS, and Samarth</li>
</ul> 

</div>
    </div>
    <div class="col-md-3 col-sm-6 ">
    <div class="greencard paddgreencard">
 <h3>04</h3>
<h4>Corporate Insurance Solutions</h4>

<ul>
    <li>Offering tailored group and health insurance solutions to protect businesses and their employees</li>
</ul> 

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
            <div class="col-md-6 col-sm-12" style="padding-right:0">
            <img src="./image/slideimg1.webp" alt="slideimg1">
            </div>
            <div class="col-md-6 col-sm-12" id="centerdiv">
<div class="slidecontent">
    <h5>Suresh Kumar S- Director</h5>
    <p>B.E, MSW holder with 21 years of experience. Started his career in Telecommunication sector working in 
        major MNCs namely Nokia Siemens and Ericsson, shifted his interest in providing consultation in the 
        Skill Development industry and provided consultations for United Nations Development Program (UNDP), 
        CII (Confederation of Indian Industries), Electronics City Industries Association (ELCIA) and Skill 
        development Entrepreneurship & Livelihood (SDEL), Government of Karnataka. Currently leading the organization 
        as Director handling Business development, HR Compliance and Industry Relations.</p>
</div>
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="row" style="width:100%">
            <div class="col-md-6 col-sm-12" style="padding-right:0">
            <img src="./image/slideimg1.webp" alt="slideimg1">
            </div>
            <div class="col-md-6 col-sm-12" id="centerdiv">
<div class="slidecontent">
    <h5>Jyothsna P S- Director</h5>
    <p>BA, PGD in Print Media design & illustration with over 11yrs of experience. Started her career 
        in Advertising and worked with clients in multiple sectors such as Retail, 
        Publishing, F&B, Packaging design; and more. Currently handling the Corporate Insurance and HR verticals </p>
</div>
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="row" style="width:100%">
            <div class="col-md-6 col-sm-12" style="padding-right:0">
            <img src="./image/slideimg1.webp" alt="slideimg1">
            </div>
            <div class="col-md-6 col-sm-12" id="centerdiv">
<div class="slidecontent">
    <h5>Vijayakumar K- Director</h5>
    <p>Diploma in Electronics Communication Engineering with 23 years of experience. Started his 
        career in manufacturing sector namely Salzer Electronics, Data Tech, shifted 
        to Telecommunication sector working in major MNCs namely Nokia Siemens, 
        Ericsson and Huawei. Currently leading the organization as Director 
        handling operations and Industry Relations.
    </p>
</div>
            </div>
        </div>
    </swiper-slide>
   
  </swiper-container>
  <style>
    #centerdiv{
        display: flex;
    align-items: center;
    padding-left:0;
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
    swiper-container{
        margin:4rem auto;
    }
    .slidecontent{
        text-align: left;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 3rem;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .slidecontent p{
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
                <h2>Our Core  <span>Values</span></h2>
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
                .coreframe{
                    text-align: center;
                }
                .coreframe img{
                    width:100%;
                    height:90%;
                }
                #faq{
                    margin-top:3rem;
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
                        .greenframe{
                            background-color: #4CAF50;
                            color:#FFFFFF;
                            text-align: center;
                            padding:2rem 0;
                            overflow-x:hidden;
                           
                        }
                        .greenframe h2{
                            font-size:3rem;
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

  