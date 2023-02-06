
<?php
if (isset( $_POST[ "submit" ])){
$to = "leads@adiroha.com";
$subject = "Corporate Training";
$message = "
<html>
<head>
<title>Plans</title>
</head>
<body>
<p>User Info</p>
<table>

<th>Name</th>
<td>".$_POST["name"]."</td>
</tr>

<tr>
<th>Message</th>
<td>".$_POST["email"]."</td>
</tr>
<tr>

<th>Phone Number</th>
<td>".$_POST["phone"]."</td>
</tr>
<tr>
<th>Current Occupation</th>
<td>".$_POST["co"]."</td>
</tr>
<tr>
<th>Experience</th>
<td>".$_POST["exp"]."</td>
</tr>
<th>Message</th>
<td>".$_POST["message"]."</td>
</tr>



</table>
</body> 
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// $headers .= "From: info.pioneeronline@gmail.com" . "\r\4n";

$headers .= "From: leads@adiroha.com" . "\r\4n";

if(mail($to,$subject,$message,$headers)){
    echo "<script> alert('Submited Successfully')</script>";
}else{
     echo "<script> alert('failed')</script>";
}
}

?>

<html lang="en">
<head>
    <title>Adiroha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>-->
    <!--    <script src="scripts/pace.js"></script>-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style_sheets/owl.carousel.min.css">

    <link rel="stylesheet" href="style_sheets/owl.theme.default.min.css">

    <link rel="stylesheet" href="style_sheets/style.css">

</head>

<body>
    
    <nav class="navbar navbar-expand-sm fixed-top p-4 d-none d-xl-block">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="style_sheets/pictures/logo.png" class="logo" width="40%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navsec" id="mynavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item d-flex navmargin">
                        <a class="nav-link" href="">Home</a>
<!--                        <div class="mt-2 c1">|</div>-->
                    </li>
                    <li class="nav-item d-flex navmargin">
                        <a class="nav-link" href="profile">Profile</a>
<!--                        <div class="mt-2 c1">|</div>-->
                    </li>

                    <li class="nav-item droper navmargin">
                        <span class="dropdown">

                            <button class="c1 dropbtn "><a class="nav-link" href="" class="">Services <span class="dropdown-toggle c1"></span></a></button>
                            <div class="dropdown-content">
                                <a href="services/application_security">application security</a>
                                <a href="services/network_penetration_testing">network penetration testing</a>
                                <a href="services/cloud_penetration_testing">cloud penetration testing</a>
                                <a href="services/iot_security_testing">iot security testing</a>
                                <a href="services/secure_code_review">secure code review</a>
                                <a href="services/server_hardening">server hardening</a>
                                <a href="services/compilance">compliance</a>
                                <a href="services/risk">risk advisory</a>
                                <a href="services/iam">identity and access control</a>

                            </div>
                        </span>
                    </li>
                    <li class="nav-item d-flex  navmargin">
                        <a class="nav-link" href="training">Training</a>
<!--                        <div class="mt-2 c1">|</div>-->
                    </li>
                    <li class="nav-item d-flex navmargin">
                        <a class="nav-link" href="careers">Careers</a>
<!--                        <div class="mt-2 c1">|</div>-->
                    </li>
                    <li class="nav-item d-flex navmargin">
                        <a class="nav-link" href="blog">Blog</a>
<!--                        <div class="mt-2 c1">|</div>-->
                    </li>


                    <li class="nav-item d-flex navmargin">
                        <a class="nav-link" href="contact">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-ite mx-5">
                        <a href="book-demo.html" type="button" class="nav-link bad" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book a demo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <nav class="navbarsm d-xl-none">
        <div id="mainbox" onclick="openFunction()">&#9776;</div>
        <div id="menu" class="sidemenu">
            <a href="" id="link1" class="fon1">Home</a>
            <a href="profile" id="link" class="fon1">Profile</a>



            <span class="dropdown">

                <button class="c1 dropbtn "><a class="" class="">Services <span class="dropdown-toggle c1"></span></a></button>
                <div class="dropdown-contentsm ">
                    <a href="services/application_security">application security</a>
                    <hr>
                    <a href="services/network_penetration_testing">network penetration testing</a>
                    <hr>
                    <a href="services/cloud_penetration_testing">cloud penetration testing</a>
                    <hr>
                    <a href="services/iot_security_testing">iot security testing</a>
                    <hr>
                    <a href="services/secure_code_review">secure code review</a>
                    <hr>
                    <a href="services/server_hardening">server hardening</a>
                    <a href="services/compilance">compliance</a>
                    <hr>
                    <a href="services/risk">risk advisory</a>
                    <hr>
                    <a href="services/iam">identity and access control</a>

                </div>
            </span>



            <a href="training" id="link" class="fon1">Traininings</a>
            <a href="careers" id="link" class="fon1">Careers</a>
            <a href="blog" id="link" class="fon1">Blog</a>
            <a href="contact" id="link" class="fon1">Contact Us</a>

            <div class="col-sm-10 mx-auto pt-5 m-5 navlogo">
                <img src="style_sheets/pictures/logo.png" width="100%" class="">
            </div>
            <div class="closebtn" onclick="closeFunction()">&times;</div>
        </div>
    </nav>


  


             <!-- --------------------------- Codes Start's From Here ----------------------------------->


    <section id="sec1">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pt-5 cpttxt">
                    <div class="h1 c1 ctp col-sm-10 mx-3 fon1 ">Cyber Security Training Programs </div>
                    <div class="c1 pt-3 cptpara col-sm-10 mx-3 fon1">Stay ahead in the ever-evolving cybersecurity field with our training programs. Whether you're looking to switch to a career in security, or want to enhance your skills in your current role, our courses are designed to meet your needs. Our experienced instructors will provide you with the knowledge and hands-on experience needed to stay ahead in the industry. Take the first step in advancing your cybersecurity career today</div>

                </div>
                <div class="col-lg-5 mx-1 mx-auto ">
                         <img src="style_sheets/pictures/cir.png" class="cir1">
                    <div class="p1cptform bgc1 p-5"> 
                        <div class="h3 fon1"><b>Let's Talk</b></div>
                    <form class="pt-3" method="post" action="corporate_training.php">
                        <input type="text" name="name" class="form-control p-1 mt-2" placeholder="Name" >
                        <input type="text" name="email" class="form-control p-1 mt-3 mt-2" placeholder="Email" >
                        <input type="text" name="pone" class="form-control p-1 mt-3 mt-2" placeholder="Phone" >
                        <input type="text" name="co" class="form-control p-1 mt-3 mt-2" placeholder="Current Occupation" >
                        <input type="text" name="exp" class="form-control p-1 mt-3 mt-2" placeholder="Experience" >

                        <div class="pt-3"><b>Anything else to add?</b></div>
                        <textarea name="message" class="col-sm-12"  rows="2"></textarea>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-5 btn-block col-sm-12">
                        
                    </form>
                    </div>


                </div>
            </div>
        </div>
        
        
    </section>   

    <section id="p1sec2" >
        <div class="container-fluid pt-5">
            <div class="h2 text-center head fon1 "><span class="c3">Students</span> Successfully Hired By </div>
            <div class="row">
                <div class="owl-carousel owl-theme" id="owl1">

                    <div class="item col-sm-2 pt-5 mx-auto d-block ">
                        <img src="style_sheets/pictures/capgemini.png" width="100%">
                    </div>

                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/secureye.png" width="100%"></div>
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/pwc.png" width="100%"></div>
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/aujas.png" width="100%"></div>


                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/ey.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/accenture.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/tcs.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/happiest-minds.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/sacumen.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/paramount_software.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/genisys.png" width="100%"></div>

                    
                    <div class="item col-sm-2 pt-5 mx-auto d-block "><img src="style_sheets/pictures/infosys.png" width="100%"></div>

                  


                </div>

            </div>
        </div>
        
    </section>   

    <section id="sec3" class="fon1 pt-5">
        <div class="h2  text-center pt-5">Our Approach</div>
        <div class="container">
            <div class="row">

                <div class="col-sm-3 mx-auto pt-5">
                    <div class="box pt-5 pb-5">
                        <img src="style_sheets/pictures/s1.png" width="" class="mx-auto d-block col-sm-4">
                        <div class="text-center p-3"><b>Customizable syllabus</b></div>
                        <div class="pb-2 text-center">Our syllabus can be tailored to meet your individual needs and career goals, ensuring you receive the most relevant training possible.</div>
                    </div>
                </div> 
                <div class="col-sm-3 mx-auto pt-5">
                    <div class="box pt-5 pb-5">
                        <img src="style_sheets/pictures/s2.png" width="" class="mx-auto d-block col-sm-4">
                        <div class="text-center p-3"><b>One-on-one and group classes</b></div>
                        <div class="pb-2 text-center">We offer both one-on-one and group classes, so you can choose the format that works best for you and your learning style</div>
                    </div>
                </div> 
                <div class="col-sm-3 mx-auto pt-5">
                    <div class="box pt-5 pb-5">
                        <img src="style_sheets/pictures/s3.png" width="" class="mx-auto d-block col-sm-4">
                        <div class="text-center p-3"><b>Flexible Schedule</b></div>
                        <div class="pb-2 text-center">We offer flexible scheduling options, allowing you to balance your training with your work and personal commitments.</div>
                    </div>
                </div> 
                <div class="col-sm-3 mx-auto pt-5">
                    <div class="box pt-5 pb-5">
                        <img src="style_sheets/pictures/s4.png" width="" class="mx-auto d-block col-sm-4">
                        <div class="text-center p-3"><b>Hands-on Training</b></div>
                        <div class=" pb-2 text-center">Our hands-on training allows you to gain practical experience, enhancing your ability to succeed in your cybersecurity career.</div>
                    </div>
                </div> 

                <div class="btn btn-primary col-sm-2 mt-5 p-3 mx-auto d-block">Explore Features</div>
               


            </div>
        </div>
</section>

<img src="style_sheets/pictures/semicir.png" class="semicir">
    
        <section id="sec4" class="fon1">
        <div class="h2  text-center">Frequently Asked Questions</div>
        <div class="p-3 text-center">Our support team ready to help you, please contact with them</div>
        <div class="container pt-5">
            <div class="col-sm-8 mx-auto border p-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <b>What makes your training program unique compared to others?</b>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Our training program offers a comprehensive and customizable curriculum, hands-on experience, experienced instructors, and flexible scheduling options. These unique features set us apart from other training programs and ensure that our graduates receive the best possible education.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <b>Can I receive one-on-one attention from instructors?</b>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Yes, we offer both one-on-one and group classes, so you can receive personalized attention from our instructors if needed. Our instructors are committed to helping you succeed in your cybersecurity career.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <b>What are the prerequisites for taking your training program?</b>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Our training program is designed to be accessible to everyone, regardless of their prior knowledge of cybersecurity. Whether you are a working professional or a recent graduate, or simply someone who is new to the field, you can have a successful learning journey with us. While a basic understanding of computer science or a related field may be helpful, it is not a requirement for enrollment in our program.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
        <b>Is your training program recognized or certified by any organizations?</b>
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Yes, our training program is recognized by leading organizations in the field and prepares you for industry-standard certifications that are recognized globally. By completing our program, you will have the skills and knowledge needed to succeed in your cybersecurity career, no matter where your career takes you</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseOne">
        <b>How does the hands-on experience benefit me?</b>
      </button>
    </h2>
    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Hands-on experience allows you to apply your knowledge to real-world situations and gain practical skills that you can take with you into your cybersecurity career. This approach enhances your ability to succeed in the field and sets you apart from others</div>
    </div>
  </div>


</div>
</div>
<img src="style_sheets/pictures/semicir2.png" class="semicir2">


</section>
    
    
    
<footer class="footer pt-5">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">privacy policy</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="">application security</a></li>
                        <li><a href="">network penetration testing</a></li>
                        <li><a href="">cloud penetration testing</a></li>
                        <li><a href="">iot security testing</a></li>




                        <li>
                            <a data-bs-toggle="collapse" data-target="#showservice" href="#showservice" role="button" aria-expanded="false" aria-controls="showservice">
                                <span class="c5">Show More </span>
                            </a>
                        </li>


                        <div class="collapse" id="showservice">


                            <li><a href="">secure code review</a></li>
                            <li><a href="">server hardening</a></li>
                            <li><a href="">compliance</a></li>
                            <li><a href="">risk advisory</a></li>
                            <li><a href="">identity and access control</a></li>

                        </div>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center cpy mt-4 pb-2">Copyright © 2022 by Adiroha Solutions. All Rights Reserved.</div>
    </footer>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                                <!----------------------------- Codes End's Here ----------------------------------->
        <script>
var currentUrl = window.location.href;
var newUrl = currentUrl.replace(/\.[^/.]+$/, "");
history.pushState({}, "", newUrl);
    </script>
    
    
      <div class="btn p-3 upbtn">
                <i class="fa fa-caret-up" aria-hidden="true"></i>
            </div>
            <script type="text/javascript">

$('#owl1').owlCarousel({
                dots: false,
                // rtl:true,
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayTimeout: 1000,
                responsive: {
                    0: {
                        items: 1,
                        loop: true
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5,

                    }
                }
            });







            $('.upbtn').click(function() {
                $('html,body').animate({
                    scrollTop: $('#sec1').offset().top
                }, 200);
            });

                $(document).ready(function() {
                            $(window).scroll(function() {
                                var upbtn = $(window).scrollTop()
                                var nav = $(window).scrollTop()
                                if (upbtn > 80) {
                                    $(".upbtn").css("opacity", "1");
                                    $(".upbtn").css("transition", ".5s");
                                    $(".upbtn").css("cursor", "pointer");
                                    $(".logo").css("width", "25%");
                                    $(".logo,.nav-link").css("transition", ".5s");
                                    $(".nav-link").css("font-size", "16px");
                
                                } else {
                                    $(".upbtn").css("opacity", "0");
                                    $(".upbtn").css("transition", ".5s");
                                    $(".upbtn").css("cursor", "context-menu");
                                    $(".logo").css("width", "40%");
                                    $(".logo,.nav-link").css("transition", ".5s");
                                    $(".nav-link").css("font-size", "18px");
                                }
                            });
                        });
                        $(document).ready(function() {
                            $(window).scroll(function() {
                                var upbtn = $(window).scrollTop();
                                if (upbtn > 0) {
                        $(".navbar,.navbarsm").css("background", "#020202");
                            $(".navbar,.navbarsm").css("transition", ".5s");
                        } else {
                            $(".navbar,.navbarsm").css("background", "transparent");
                            $(".navbar,.navbarsm").css("transition", ".5s");
                                }
                            });
                        });
                
                
                    </script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="scripts/owl.carousel.min"></script>    
    <script type="text/javascript" src="scripts/main.js"></script>
</body></html>
