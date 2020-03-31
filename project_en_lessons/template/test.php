<?php 
if(!empty($_GET['category'])):

$categoryid = $_GET['category'];
require_once("connection.php");

$mysql = new Devalien();
$category =  $mysql->getCategory($categoryid);
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php") ?>
<body class="text-center" data-gr-c-s-loaded="true">
<?php require_once("header.php") ?>



 <!-- bradcam_area_start -->
 <div class="courses_details_banner">
         <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                     <div class="course_text">
                            <h3><?php echo $category[0]?><br><?php echo $category[1]?></h3>
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
                                            <i class="fa fa-th-list"></i> <span>Słówka</span>
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
                                               <a href="game1.php?<?php echo "category=$categoryid" ?>"><img class="img-fluid" src="img/fiszki.jpg" alt=""></a>
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
                                            <a href="game2.php?<?php echo "category=$categoryid" ?>"><img class="img-fluid" src="img/memory.jpg" alt=""></a>
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
                                            <a href="game3.php?<?php echo "category=$categoryid" ?>"><img src="" alt=""></a>
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
                            <img class="img-fluid shadow" style="width:445px; height:445px" src="img/courses/<?php echo $categoryid?>.png" alt="">
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

    <?php require_once("jsbeforebodyclosingtag.php") ?>
    
</body>
</html>
<?php 
else:
    header("Location: oyaoya.php");
endif;
?>