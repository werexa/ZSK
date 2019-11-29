<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevAlien</title>
    <?php 
    require_once("../hooks/bootstrap_4.php");
    ?> 
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/circle.scss">

</head>
<body class="text-center" data-gr-c-s-loaded="true">
<!--header-->
<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img class="img-fluid" src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Strona Główna</a></li>
                                       <!-- <li><a href="Courses.html">Zestawy</a></li>-->
                                        <li><a href="#">Zestawy</a></li>
                                        <li><a href="about.html">Teachers</a></li>
                                        <li><a href="contact.html">Kontakt</a></li>
                                        <li><a href="#">Profil <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Ustawienia</a></li>
                                                <li><a href="single-blog.html">Twoje zestawy</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

        <!-- slider_area_start -->
        <div class="slider_area ">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>DevAlien<br>
                            nauka języka<br></h3>
                            <a href="#" class="boxed_btn">Wybierz zestaw</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <!-- slider_area_end -->

 <!-- popular_courses_start -->
 <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Zestawy</h3>
                        <p>Szlifuj swój język zestawami od naszych nauczycieli<br>Grind your language with packs from our teachers</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Wszystkie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab" data-toggle="tab" href="#Web" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab1" data-toggle="tab" href="#Web1" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab11" data-toggle="tab" href="#Web11" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab8" data-toggle="tab" href="#Adobe-XD8" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab9" data-toggle="tab" href="#Adobe-XD9" role="tab"
                                        aria-controls="design" aria-selected="false">kategoria</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">

                    <!--displayed carts-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Systemy operacyjne</span>
                                                <h3><a href="#">Operating Systems</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <!--<div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Sieci komputerowe</span>
                                                <h3><a href="#">Computer Networking</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <!--<div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Urządzenia komputerowe</span>
                                                <h3><a href="#">Computer Technology Devices</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <!--<div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Baza danych</span>
                                                <h3><a href="#">Database</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <!--<div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/5.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Aplikacje internetowe</span>
                                                <h3><a href="#">Specialized Internet Applications</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                   <!-- <div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Biznes</span>
                                                <h3><a href="#">Business</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                   <!-- <div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 ">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/7.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>Matematyka</span>
                                                <h3><a href="#">Mathematics</a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        <i class="flaticon-mark-as-favorite-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                   <!-- <div class="prise">
                                                        <span class="offer">$89.00</span>
                                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <!--more courses btn -->
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                    <!-- more courses btn end-->

                                </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->
 <!-- subscribe_newsletter_Start -->
 <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Chcę dostawać newsletter!</h3>
                        <p>Zapisz mnie do newslettera.</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        
                        <form action="#" class="newsletter_form">
                            <input type="checkbox" name=""><h4>Akceptuję politykę prywatności</h4>
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Zapisz mnie</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->
  <!-- footer -->
  <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                            Każdy głupiec może napisać kod zrozumiały dla komputera. Dobrzy programiści potrafią stworzyć kod zrozumiały dla ludzi.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Zestawy
                            </h3>
                            <ul>
                                <li><a href="#">Systemy operacyjne</a></li>
                                
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Źródła
                            </h3>
                            <ul>
                                <li><a href="#">lorem impsum</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Adres
                            </h3>
                            <p>
                                Poznań fredry 13<br>
                                +48 727 627 853<br>
                                weronika.nowak@uczen.zsk.poznan.pl
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib </a>(modified by Weronika Nowak)
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img class="img-fluid"src="img/logo.png" alt="">
                    </a>
                </div>
                <h3>Zaloguj się</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn">Zaloguj się</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Nie masz konta? <a class="dont-hav-acc" href="#test-form2">Rejestracja</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <h3>Rejestracja</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn">Rejestruj się</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

<?php 
require_once("../hooks/boostrap_4_js.php");
?>



    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>
</html>




