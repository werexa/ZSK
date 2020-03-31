<!--header-->

<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area" <?php if(strpos($_SERVER['SCRIPT_NAME'], 'index.php') === false) echo 'style="background: linear-gradient(to right,#34bec8 0%, #f4367d 100%)"'?>>
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img class="img-fluid" src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a <?php if(strpos($_SERVER['SCRIPT_NAME'], 'index.php') == true) echo 'class="active"' ?> href="index.php">Strona Główna</a></li>
                                       <!-- <li><a href="Courses.html">Zestawy</a></li>-->
                                        <li><a href="index.php#courses">Zestawy</a></li>
                                        <li><a href="index.php#adress">Kontakt</a></li>
                                        <?php if(isset($_SESSION["User"])):?>
                                        <li><a <?php if(strpos($_SERVER['SCRIPT_NAME'], 'index.php') === false) echo 'class="active"' ?> href="profile.php">Profil <i class="ti-angle-down"></i></a>
                                            <ul class="submenu nav ">
                                                <li class="nav-item"><a class="nav-link" href="profile.php#user_settings">Ustawienia</a></li>
                                                <li class="nav-item"><a class="nav-link" href="profile.php#user_words">Twoje slowka</a></li>
                                            </ul>
                                        </li>
                                        <?php endif;?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <?php if(!isset($_SESSION["User"])):?>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="fa fa-user"></i>
                                    <span>log in</span>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
