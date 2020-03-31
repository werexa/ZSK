<?php session_start();
require_once("logregister.php");

if(isset($_POST['login']) && !empty($_POST['loginemail']) && !empty($_POST['loginpass']))
{
    
    $answer = LogIn($_POST['loginemail'],$_POST['loginpass']);
    if(isset($_SESSION["User"]['user_status']) == 1)
    {
        
        if($_SESSION["User"]['user_status'] == 1)
        {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                $link = "https"; 
            else
                $link = "http"; 
        
            
            header("location: profile.php");
        }
        echo "user status 0";
    }
    
    
}


if(isset($_POST['register']) && !empty($_POST['registeremail']) && !empty($_POST['registername']) && !empty($_POST['registerpass']))
{
    $answer = register($_POST['registeremail'],$_POST['registerpass'],$_POST['registername']);

}



?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php")?>
<body class="text-center" data-gr-c-s-loaded="true">
<?php require_once("header.php"); ?>

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
                            <?php if(isset($_SESSION["User"]["user_id"])):?> <a href="addWord.php" class="boxed_btn">Dodaj słówka</a> <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <!-- slider_area_end -->

 <!-- popular_courses_start -->
 <div class="popular_courses" id="courses">
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
                    
                    <!--search-->
                    <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                                <input type="text" name="search" placeholder="search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
                    </div>
                    <!--search end -->
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
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_courses">
            <div class="container">
            
                <div class="tab-content" id="myTabContent">
                <?php require_once("cards.php") ?>
                    <!--displayed carts-->
                    

                    
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



   
<?php 
require_once("footer.php");
include_once('forms.php');
require_once("../hooks/boostrap_4_js.php");
require_once("jsbeforebodyclosingtag.php") ?>

    <?php 
if(isset($_POST['register']) || !isset($_SESSION["User"]))
{
    //$answer = register($_POST['registeremail'],$_POST['registerpass'],$_POST['registername']);

    echo "<script> 
    $( document ).ready(function() {
        $('.popup-with-form').trigger('click');
    });</script>";
    
}?>
</body>
</html>



