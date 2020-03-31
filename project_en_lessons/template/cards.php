 <!--displayed carts-->
 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">

            <?php 
            require_once("connection.php");
            $mysql = new Devalien();
            //$mysql->set_charset("utf8");
            //$categories = $mysql->query("SELECT category_id, category_name, category_en FROM dev_categories");
            $categories = $mysql->getCategories();
            foreach ($categories as $key => $value): ?>
                
            <!-- card-->
                <div class="col-xl-4 col-lg-4 ">
                    <div class="single_courses">
                        <div class="thumb">
                            <a href="test.php?category=<?php echo $value['category_id']?>">
                                <img src="img/courses/<?php echo $value['category_id'] ?>.png" alt="">
                            </a>
                        </div>
                        <div class="courses_info">
                            <span><?php echo $value['category_name'] ?></span>
                            <h3><a href="test.php"><?php echo $value['category_en'] ?></a></h3>
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
            <!--End Card-->
            <?php endforeach;?>

<!--more courses btn -->
<div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">More Courses</a>
                                        </div>
                                    </div>
                                    <!-- more courses btn end-->


    </div>
</div>