<?php
session_start();
$categoryid = $_GET["category"];
require_once("connection.php");
$mysql = new Devalien();
$words = $mysql->getRandCategoryWords($categoryid);
$category = $mysql->getCategory($categoryid);
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php")?>
<body class="text-center" data-gr-c-s-loaded="true">
<!--header-->
<?php require_once("header.php"); ?>
<!-- header-end -->

    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-left title"><?php echo $category[0]?></h2>
                </div>
            <!--flashcards-->
            <div class="col-xl-6 col-lg-6">

                <!--carousel-->
                <div class="owl-carousel">

               
                    <!--word-->
                    <?php foreach($words as $key => $value) {
                        # code...
                       
                   
                   echo '<div class="word-card text-center" style="height:16em;">
                        <div class="card front">
                            <div class="card-body d-flex align-items-center justify-content-center">'.$value['word_pl'].'</div>
                        </div>
                        <div class="card back ">
                            <div class="card-body d-flex align-items-center justify-content-center">
                            <input name="wordenid[]" type="hidden" value="'.$value["word_en_id"].'">
                            '.$value['word_en'].'</div>
                        </div>
                        </div>';
                    
                    }
                    //?>
                   <!--word end -->
                    
                    

            </div>
                <!--carousel end-->
            <div class="nav-container d-flex justify-content-between">
                    <div class="carausel-counter"></div>
            </div>

            </div>
            <!--flashcard end-->

            <div class="col-xl-3 col-lg-3">
                <!--onthers games-->
                <div class="single_course text-left">
                    <p><?php echo $category[0]?></p>
                    
                    <p><i class="fa  fa-file-text"></i><a href="game3.php?category=<?php echo $categoryid?>" class=""> Test</a></p>
                    <p><i class="fa  fa-sticky-note-o "></i><a href="game1.php?category=<?php echo $categoryid?>" class=""> Fiszki</a></p>
                    <p><i class="fa  fa-braille"></i><a href="game2.php?category=<?php echo $categoryid?>" class=""> Memorize</a></p>

                </div>
                <!--onthoers games-->
                <!--percentage-->
                <div class="percentage">
                    <div class="progress">
                        <div class="progress-bar color-1" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                 <!--percentage-->

                <?php if(isset($_SESSION["User"]["user_id"])):?>
                <input type="button" name="save" class="btn btn-primary my-2" disabled="" value="Zapisz zaliczone">
                <?php endif;?>
                       
            </div>

           

        </div>
    </div>
</div>
    
<?php 
require_once("footer.php");
include_once('forms.php');
require_once("../hooks/boostrap_4_js.php");
require_once("jsbeforebodyclosingtag.php") ?>
    
    <script>

                    
    //effect flip 
    $(".word-card").flip({
        axis: 'x',
        trigger: 'click',
        reverse: true,
      });
    

    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.nav-container',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter //When the translation of the stage has finished.
    });

    
    function counter(event) {
    var element   = event.target;         // DOM element, in this example .owl-carousel
    var items     = event.item.count;     // Number of items
    var item      = event.item.index+1;     // Position of the current item
  $('.carausel-counter').html(item+"/"+items);
  $('.progress-bar').css("width",(item)/items*100+'%').fadeIn("slow");
}

    <?php if(isset($_SESSION["User"]["user_id"])):?>
        $(".word-card").after('<i aria-hidden="true" style="backface-visibility: hidden;float: right;padding:20px;color:red;" class="fa fa-heart-o text-right dev-heart"></i>');

        var favorite = <?php $result = $mysql->getUserFavorite($_SESSION["User"]["user_id"]);
            $favorite = [];
            foreach ($result as $key => $value) {
                $favorite[$key] = $value['word_en_id'];
            }
            echo json_encode($favorite);
        ?>;
        $(".dev-heart").each(function(el,l){
            var parent = $(l).parent().children()[0];
            var id = $(parent).find("input[type='hidden']").val();
            if(favorite.includes(id))
            {
                $(l).addClass("fa-heart").removeClass("fa-heart-o")   
            }
        })
        //favorite = JSON.parse(favorite);
      

        $(".fa-heart-o").on("click",function(){
        var parent = $(this).parent().children()[0];
        var id = $(parent).find("input[type='hidden']").val();
        $.post("favoritewords.php",{wordid: id},function(r){
            $(this).addClass("fa-heart");
            $(this).removeCLass("fa-heart-o");
            })
        })

        function checkInput()
        {
            var width = $(".progress-bar").css("width");
            var widthparent = $(".progress-bar").parent().css("width");
            if(width == widthparent)
            {
                $("input[name='save']").attr("disabled",false);
            }
            
        }
        
       $(".owl-next").on("click",function(){

            //if($(this).attr("disabled"))
            var len = $(".owl-item").length;
            if($(".owl-item").eq(len-1).hasClass("active"))
            {
                setTimeout(function(){checkInput()}, 1000);
                console.log("tak");
                
            }
            
       });
       $("input[name='save']").on("click",function(){
        var toSave= [];
            $("input[name='wordenid[]']").each(function(i,el){
                toSave.push($(el).val());
        });
        var data = JSON.stringify(toSave);
        $.post("insertlearned.php",{userwords: data},function(res){
        console.log(res);
        })
       
    });
    <?php endif;?>
    </script>

</body>
</html>