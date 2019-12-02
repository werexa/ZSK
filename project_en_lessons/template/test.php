<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevAlien</title>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

      <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!--<link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/circle.scss">
    
    <?php 
    require_once("../hooks/bootstrap_4.php");
    ?> 
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
                                    <li><a  href="index.php">Strona Główna</a></li>
                                    <li><a href="#courses">Zestawy</a></li>
                                    <li><a href="#adress">Kontakt</a></li>
                                    <li><a class="active" href="profile.php">Profil <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="profile.php/#user_settings">Ustawienia</a></li>
                                            <li><a href="profile.php/#user_words">Twoje slowka</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="fa fa-user"></i>
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


 <!-- bradcam_area_start -->
 <div class="courses_details_banner">
         <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                     <div class="course_text">
                            <h3>Systemy operacyjne I<br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h3>
                            <div class="rating">
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <span>(4.5)</span>
                            </div>
                            <div class="hours">
                                <div class="video">
                                     <div class="single_video">
                                            <i class="fa fa-th-list"></i> <span>Słóweka</span>
                                     </div>
                                </div>
                            </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!-- bradcam_area_end -->
    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses">
                        <h3>Warto wiedzieć</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                        Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                        Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                        Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
                        </p>
                    <h3 class="second_title">Tryby</h3>
                    </div>
                    <div class="outline_courses_info">
                            <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-sticky-note-o"></i>Fiszki
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                               <a href="game1.php"><img class="img-fluid" src="img/fiszki.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <i class="fa fa-braille"></i>Memory</span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <img class="img-fluid" src="img/memory.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-pencil-square-o"></i>Test
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               <img src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <!--author-->
                <div class="col-xl-5 col-lg-5">
                    <div class="courses_sidebar">
                        <div class="video_thumb">
                            <img class="img-fluid shadow" src="img/courses/about_1.png" alt="">
                        </div>
                        <div class="author_info">
                            <div class="auhor_header">
                                <div class="thumb">
                                        <img class="img-fluid" src="img/author.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Weronika Nowak</h3>
                                    <p>Software developer</p>
                                </div>
                            </div>
                            <p class="text_info">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                            </p>
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="ti-linkedin"></i> </a></li>
                            </ul>
                        </div>
                       <!--author end-->

                        <div class="feedback_info">
                            <h3>Write your feedback</h3>
                            <p>Your rating</p>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <i class="flaticon-mark-as-favorite-star"></i>
                            
                        <form action="#">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Write your feedback"></textarea>
                                <button type="submit" class="boxed_btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script> <!--sprawdzanie czy są nowe technologie-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!--<script src="js/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script> <!--karuzela/ slider-->
    <script src="js/isotope.pkgd.min.js"></script><!--do filtorwania elementow-->
    <script src="js/ajax-form.js"></script>
    <!--<script src="js/waypoints.min.js"></script>-->
    <script src="js/jquery.counterup.min.js"></script><!--animacja do liczb-->
    <script src="js/imagesloaded.pkgd.min.js"></script><!--loading do obrazkow-->
    <script src="js/scrollIt.js"></script><!--do płynnego scrollowania-->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!--<script src="js/wow.min.js"></script>-->
    <!--<script src="js/nice-select.min.js"></script>-->
    <script src="js/jquery.slicknav.min.js"></script><!-- do zmiany menu na mobilny-->
    <script src="js/jquery.magnific-popup.min.js"></script><!--popup do loginu-->
    <script src="js/plugins.js"></script><!-- dodatkowe klasy do jquery-->
   <!-- <script src="js/gijgo.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>-->
    <script src="js/jquery.flip.js"></script>
    

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>