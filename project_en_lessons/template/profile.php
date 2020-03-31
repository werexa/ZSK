<?php 
session_start();
if(isset($_SESSION["User"]["user_name"])):
    require_once("connection.php");
    $dev = new Devalien;
    var_dump($dev->getCategories());
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php")?>
<body class="text-center" data-gr-c-s-loaded="true" >
<!--header-->
<?php require_once("header.php"); ?>

<!-- bradcam_area_end -->
<div class="courses_details_info" >
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
                            <h3>
                             </h3>
                            <p>Początkujący</p>
                        </div>
                        <div class="d-flex justify-content-center col-xl-12">
                            <div class="c100 p30">
                                <span>25%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-40">
                        <a  href="#test-form" class="genric-btn medium popup-with-form">Ustawienia</a>
                        <a data-scroll-goto="0" href="#user_words" class="genric-btn medium ">Ulubione słówka</a>
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
                    <!-- card-->
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
                            <h3 id="user_words">Twoje ulubione słówka</h3>
                        </div>
                    </div>
                    <!--title for words-->
                    

                    <!-- favorite words-->
                    

                    <!--favorite wordsend-->
                </div>
            </div>
        </div>
 </div>
</div>

<?php 
require_once("profileset.php");
require_once("jsbeforebodyclosingtag.php") ?> 

   
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
<?php 
else:
    header("Location: index.php");
endif;
?>