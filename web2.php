
<?php
if (isset( $_POST[ "submit" ])){
$to = "leads@adiroha.com";
$subject = "Web development 2";
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

<th>Message</th>
<td>".$_POST["query"]."</td>
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

    <style>
        .navbar,
        .navbarsm {
            background: rgba(0, 0, 0, 0.5);
        }

    </style>

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
                        <a class="nav-link" href="">Profile</a>
                        <!--                        <div class="mt-2 c1">|</div>-->
                    </li>

                    <li class="nav-item droper navmargin">
                        <span class="dropdown">

                            <button class="c1 dropbtn "><a class="nav-link" href="/" class="">Services <span class="dropdown-toggle c1"></span></a></button>
                            <div class="dropdown-content">
                                <a href="application_security">application security</a>
                                <a href="network_penetration_testing">network penetration testing</a>
                                <a href="cloud_penetration_testing">cloud penetration testing</a>
                                <a href="iot_security_testing">iot security testing</a>
                                <a href="secure_code_review">secure code review</a>
                                <a href="server_hardening">server hardening</a>
                                <a href="compilance">compliance</a>
                                <a href="risk">risk advisory</a>
                                <a href="iam">identity and access control</a>

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
                    <a href="/application_security">application security</a>
                    <hr>
                    <a href="/network_penetration_testing">network penetration testing</a>
                    <hr>
                    <a href="/cloud_penetration_testing">cloud penetration testing</a>
                    <hr>
                    <a href="/iot_security_testing">iot security testing</a>
                    <hr>
                    <a href="/secure_code_review">secure code review</a>
                    <hr>
                    <a href="/server_hardening">server hardening</a>
                    <a href="/compilance">compliance</a>
                    <hr>
                    <a href="/risk">risk advisory</a>
                    <hr>
                    <a href="/iam">identity and access control</a>

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

    <section id="p4sec1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <div class="h1 pwd fon1 col-sm-12 c1 pb-5" style="padding-left:40px ;"><b>Professional Website Design at affordable prices</b></div>
                </div>
                <div class="col-lg-5">
                    <div class="p3cptform card bg-light p-4 mt-1"> 
                                        <form method="post" actiion="web.php" class="pt-2">
                        <input type="text" name="name" class="form-control mt-2" placeholder="Full Name" >
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email" >
                        <input type="number" name="phone" class="form-control mt-3" placeholder="Phone No" >
                        <textarea class="col-sm-12" name="query"  rows="2" placeholder="Query"></textarea>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary mt-5 btn-block col-sm-12" >
                        <div class="text-center tctxt p-4">After clicking “Get started” button you agree with our <a href="">Terms and Conditions.</a></div>
                    </form>
                    </div>
        
        
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="p4sec2">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-5 pt-5">
                    <div class="h1 fon1 col-sm-8 c2"><b>We design<br> websites </br>
                            that deliver results </b></div>

                    <div class="col-lg-10 c2">We at Adiroha solutions combine design and technology to help our clients achieve their goal in this ever evolving digital era. We are committed to design compelling websites, applications and out unique brand innovating to help you dominate the competition.</div>
                    <div class="d-flex pt-2">
                        <div class="btn btn-primary m-3"><b>Get Started</b></div>
                        <div class="btn btn-light m-3"><b>How it works</b></div>
                    </div>
                </div>



                <div class="col-sm-7 pt-5">
                    <img src="style_sheets/pictures/mockup.gif" width="100%" class="bs">
                </div>


            </div>
    </section>


    <section id="p3sec3">
        <div class="container p-5">
            <div class="row">

                <div class="col-lg-3 col-md-6 mt-3">
                    <div class="wdbox pb-5">
                        <img src="style_sheets/pictures/settngs.gif" class="img-fluid rounded mx-auto">
                        <div class="h6 pt-3 text-center wd"><b>Website Development</b></div>
                        <p class="text-center">Web Apps that Decrease Downtime & Increase Efficiency.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-3">
                    <div class="wdbox pb-4">
                        <img src="style_sheets/pictures/desiging.gif" class="img-fluid rounded mx-auto">
                        <div class="h6 pt-3 text-center wd"><b>Website Redesigning</b></div>
                        <p class="text-center">Concept Based minimal & Futuristic Designs.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-3">
                    <div class="wdbox pb-5">
                        <img src="style_sheets/pictures/hosting.gif" class="img-fluid rounded mx-auto">
                        <div class="h6 pt-3 text-center wd"><b>Website Hosting</b></div>
                        <p class="text-center">We Create Brand's that world Loves.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-3">
                    <div class="wdbox pb-5">
                        <img src="style_sheets/pictures/maintanance.gif" class="img-fluid rounded mx-auto">
                        <div class="h6 pt-3 text-center wd"><b>Website Maintenance</b></div>
                        <p class="text-center">We design Graphics That visualizes the Organization Goals.</p>
                    </div>
                </div>



            </div>
        </div>

    </section>

    <section id="p4sec4" class="fon1">
        <div class="container pt-5 bgc1">
            <div class="row p-5">


                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-solid fa-mobile-screen-button r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>Responsive Design </b></div>
                        <p class="text-center col-sm-10 mx-auto">Fully responsive design of the website to reach all audience</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-solid fa-magnifying-glass r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>SEO Friendly </b></div>
                        <p class="text-center col-sm-10 mx-auto">Websites are designed for easy search engine ranking </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-regular fa-window-restore r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>Fully Customized </b></div>
                        <p class="text-center col-sm-10 mx-auto">An organized layout which matches with your business and user</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-regular fa-envelope r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>Support</b></div>
                        <p class="text-center col-sm-10 mx-auto">We provide support for all needs during and after delivery of the project</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-solid fa-indian-rupee-sign r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>Affordable</b></div>
                        <p class="text-center col-sm-10 mx-auto">economically feasible for start up businessness </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="r2wdbox2 p-4">
                        <i class="fa-regular fa-clock r2wdicon2 text-center mx-auto d-block"></i>
                        <div class="h4 text-center pt-3"><b>Quick Delivery </b></div>
                        <p class="text-center col-sm-10 mx-auto">Our web experts make sure to deliver the design with the shortest delivery time working round the clock </p>

                    </div>
                </div>

            </div>

        </div>

        <div class="container p-5">
            <div class="row c1">
                <div class="col-sm-4 mx-auto texttop">
                    <div class="h4 col-sm-8"><b>Stay in touch with your teammates where ever you are!</b></div>
                    <div class="">We knows remote teams are working in a diffeent way. Stay and communicate with your team when ever you are with Chatter mobile app for <span class="c5">Android</span> and <span class="c5">iOS</span> devices.</div>
                    <div class="btn btn-light mt-3"><b>How it works</b></div>

                </div>
                <div class="col-sm-5 mx-auto">
                    <img src="style_sheets/pictures/mobile.png" width="100%" class="p-5">
                </div>
            </div>
        </div>


        <div class="container p-5">
            <div class=" text-center h1 c1"><b>helps +156.000 people <br>communicate efficiently</b></div>


            <div class="row pt-5">

                <div class="col-lg-4 mt-2 col-md-6">
                    <div class="wdbox3 card p-5">
                        <i class="fa-solid fa-quote-left mx-auto d-block text-center r2wdicon2"></i>
                        <div class="text-center mx-auto">It’s not easy, even in an early stage of startups, where your budget is low, to findout a chat tool where all your history is not paid. Chatter helped us to solve this! I am extremly happy with this solution.</div>
                        <b class="text-center">Pavel Toleta</b>

                        <div class="text-center">CEO <span class="c5">Acmee company</span></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-2 col-md-6">
                    <div class="wdbox3 card p-5">
                        <i class="fa-solid fa-quote-left mx-auto d-block text-center r2wdicon2"></i>
                        <div class="text-center mx-auto">Chatter solves real problem for free! I just can say thank you the whole team for making it real!</div>
                        <b class="text-center">Pavel Toleta</b>

                        <div class="text-center">CEO <span class="c5">Acmee company</span></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-2 col-md-6">
                    <div class="wdbox3 card p-5">
                        <i class="fa-solid fa-quote-left mx-auto d-block text-center r2wdicon2"></i>
                        <div class="text-center mx-auto">Inbox is one of the best thing on Chatter. Every day I am on the point. Must admit, it’s really game changing tool!</div>
                        <b class="text-center">Pavel Toleta</b>

                        <div class="text-center">CEO <span class="c5">Acmee company</span></div>
                    </div>
                </div>



            </div>
        </div>

<!--

        <div class="container">
            <div class="text-center c5 h1 "><b>Chatter</b></div>
            <div class="text-center c1 h1 col-sm-6 mx-auto fw "><b>Join Chatter today <br>
                    Stay in the best company</b>
           <div class="form-control">
		      <input type="text" class="n-input" placeholder="Enter e-mail adress" />
		      <button class="n-btn">Subscribe</button>
	       </div>
            </div>

            <div class="text-center tctxt p-2 c1">After clicking “Get started” button you agree with our <a href="">Terms and Conditions.</a></div>

            <div class="row pt-3 justify-content-center">
                <div class="col-sm-1  mx-3">
                    <img src="style_sheets/pictures/acmee.png" class="mx-auto d-block pb-2">
                </div>
                <div class="col-sm-1 mx-3">
                    <img src="style_sheets/pictures/acmee.png" class="mx-auto d-block pb-2">
                </div>
                <div class="col-sm-1 mx-3">
                    <img src="style_sheets/pictures/acmee.png" class="mx-auto d-block pb-2">
                </div>
            </div>

            <div class="text-center c5 pt-3 pb-5">Meet Chatter customers</div>

        </div>
-->


    </section>

    <div class="p-4 bgc1"></div>


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










    <div class="btn p-3 upbtn">
        <i class="fa fa-caret-up" aria-hidden="true"></i>
    </div>
      <script>
var currentUrl = window.location.href;
var newUrl = currentUrl.replace(/\.[^/.]+$/, "");
history.pushState({}, "", newUrl);
    </script>

    <script type="text/javascript">
        $('.upbtn').click(function() {
            $('html,body').animate({
                scrollTop: $('#p2sec1').offset().top
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
                    $(".navbar,.navbarsm").css("background", "rgba(0,0,0,0.7)");
                    $(".navbar,.navbarsm").css("transition", ".5s");
                }
            });


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

        });

    </script>
    <script>
        new WOW().init();

    </script>

    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>
