
    <!-- form login-->
    <div id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img class="img-fluid"src="img/logo.png" alt="">
                    </a>
                </div>
                <h3>Zaloguj się</h3>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email" name="loginemail">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password" name="loginpass">
                        </div>
                        <div class="col-xl-12">
                        <input type="submit" class="boxed_btn" name="login" value="Zaloguj się">
                        </div>
                    </div>
                    <?php echo @$answer ?>
                </form>
                <p class="doen_have_acc">Nie mam konta? <a class="dont-hav-acc" href="#test-form2">Rejestracja</a>
                </p>
                <p class="doen_have_acc">Nie pamiętam hasła? <a class="dont-hav-acc" href="#test-form3">Odzyskanie hasła</a>
                </p>
            </div>
        </div>
</div>
    <!-- form login  end -->

    <!-- form  register-->
    <div id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <h3>Rejestracja</h3>
                <form action="#"  method="post">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email" name="registeremail">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" placeholder="Enter name" name="registername">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password" name="registerpass">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password" name="registerpassconfirm">
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn" name="register" value="Zarejestruj się">
                        </div>
                    
                        <?php 
                            if(!empty($answer))
                            {
                                echo htmlspecialchars($answer);
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
</div>
    <!-- form register end -->

    <!-- form  recover pass-->
    <div id="test-form3" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <h3>Odzyskanie hasła</h3>
                <form action="#"  method="post" >
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email" name="recoveremail">
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn" name="register" value="Odzyskaj">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
    <!-- form recover pass -->
