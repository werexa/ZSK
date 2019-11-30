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
            <div id="sticky-header" class="main-header-area" style="background: linear-gradient(to right,#34bec8 0%, #f4367d 100%);">
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
                                        <li><a  href="index.html">Strona Główna</a></li>
                                       <!-- <li><a href="Courses.html">Zestawy</a></li>-->
                                        <li><a href="#">Zestawy</a></li>
                                        <li><a href="about.html">Teachers</a></li>
                                        <li><a href="contact.html">Kontakt</a></li>
                                        <li><a class="active" href="#">Profil <i class="ti-angle-down"></i></a>
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


    <!-- bradcam_area_end -->
    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                
                <!--user-->
                <div class="col-xl-3 col-lg-3">
                        <div class="author_info">
                            <div class="auhor_header">
                                <div class="thumb">
                                        <img src="img/logo.png" alt="" class="avatar img-circle img-thumbnail">
                                </div>
                                <div class="name">
                                    <h3>Janusz Nowak</h3>
                                    <p>Początkujący</p>
                                </div>
                                <div class="d-flex justify-content-center col-xl-12">
                                <div class=" c100 p30">
                                <span>25%</span>
                                <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                                </div>
                                </div>
                                </div>
                                <div class=" mt-40">
                                    <a href="#user_words" class="genric-btn medium">Ustawienia</a>
                                    <a data-scroll-goto="0" href="#user_settings" class="genric-btn medium">Ulubione słówka</a>
                                </div>
                            </div>
                        </div>
                       </div>
                       <!--user end-->
                <div class="col-xl-9 col-lg-9">
                
                <div class="row d-flex justify-content-between">
                <!--title for cards-->
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3>Twoje zestawy</h3>
                        </div>
                    </div>
               
                <!--title for cards-->
                <!-- card -->
                 <div class="card col-xl-3 col-lg-3 col-md-5 my-2">
                        <img src="img\courses\1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Systemy operacyjne</h5>
                            
                            <!--percentage-->
                            <div class="percentage">
								<div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
								</div>
                            </div>
                            <!--percentage-->

                            <!--star-->
                            <div class="star">
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <span>(4.5)</span>
                            </div>
                            <!--star-->
                        </div>
                    </div>
                <!--card--> 
                 <!-- card -->
                 <div class="card col-xl-3 col-lg-3 col-md-5 my-2">
                        <img src="img\courses\3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Utk</h5>
                            
                            <!--percentage-->
                            <div class="percentage">
								<div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
								</div>
                            </div>
                            <!--percentage-->

                            <!--star-->
                            <div class="star">
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <span>(4.5)</span>
                            </div>
                            <!--star-->
                        </div>
                    </div>
                <!--card--> 
                 <!-- card -->
                 <div class="card col-xl-3 col-lg-3 col-md-5 my-2">
                        <img src="img\courses\2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Sieci</h5>
                            
                            <!--percentage-->
                            <div class="percentage">
								<div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
								</div>
                            </div>
                            <!--percentage-->

                            <!--star-->
                            <div class="star">
                            <i class="flaticon-mark-as-favorite-star"></i>
                            <span>(4.5)</span>
                            </div>
                            <!--star-->
                        </div>
                    </div>
                <!--card--> 

                <!--title for words-->
                <div class="col-xl-12 border-top mt-5 my-2">
                        <div class="section_title text-center mt-5">
                            <h3 id="user_words">Twoje słówka</h3>
                        </div>
                    </div>
               
                <!--title for words-->

                <!-- favorite words-->
                <!--word-->
                <div class="col-xl-3 col-lg-3 col-sm-4 word-card my-2">
                    <div class="card front">
                        <div class="card-body">Computer</div>
                    </div>
                    <div class="card back">
                        <div class="card-body ">Komputer</div>
                    </div>
                </div>
                <!--word-->
                <!--word-->
                <div class="col-xl-3 col-lg-3 col-sm-4 word-card my-2">
                    <div class="card front">
                        <div class="card-body">Tools</div>
                    </div>
                    <div class="card back">
                        <div class="card-body ">Narzędzia</div>
                    </div>
                </div>
                <!--word-->
                <!--word-->
                <div class="col-xl-3 col-lg-3 col-sm-4 word-card my-2">
                    <div class="card front">
                        <div class="card-body">Network</div>
                    </div>
                    <div class="card back">
                        <div class="card-body ">Sieć</div>
                    </div>
                </div>
                <!--word-->
                <!--favorite words-->

                <!--settings-->
                 <!--title for setting-->
                 <div class="col-xl-12 border-top mt-5 my-2">
                        <div class="section_title text-center mt-5">
                            <h3 id="user_settings">Ustawienia</h3>
                        </div>
                    </div>
               
                <!--title for settings-->
                <!--settings end -->
                </div>
                </div>


            </div>
        </div>
    </div>

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
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.flip.js"></script>
    
        <!--contact js-->
     <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    <script>
    //effect flip 
    $(".word-card").flip({
        axis: 'x',
        trigger: 'click',
        reverse: true,
      });
    </script>
    
</body>
</html>