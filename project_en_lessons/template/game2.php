<?php
if(!empty($_GET['category'])):
session_start();

$categoryid = $_GET["category"];
require_once("connection.php");
$mysql = new Devalien();
$result = $mysql->getRandUnionCategoryWords($categoryid);
$category = $mysql->getCategory($categoryid);

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php") ?>
<body class="text-center" data-gr-c-s-loaded="true">
<?php require_once("header.php") ?>
    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12" >
                    <h2 class="text-left title mx-2"><?php echo $category[0]?></h2>
                </div>
            <!--memorize-->
            <div class="col-xl-10 col-lg-10">

                <!--grid-->
                <div class="justify-content-between row mx-2">

                <?php 
                foreach ($result as $key => $value):
                ?>
                    <!--word-->
                    <div class="word-card col-sm-3 shadow">
                        <div class="card front ">
                            <div class="card-body "></div>
                        </div>
                        <div class="card back " data-id="<?php echo $value["id"]?>" >
                            <div class="card-body "><?php echo $value["word"]?></div>
                        </div>
                    </div>
                    <!--word-->

                <?php endforeach;?>
                   
            </div>
                <!--carousel end-->
            <div class="nav-container d-flex justify-content-between">
                    <div class="carausel-counter"></div>
            </div>

            </div>
            <!--flashcard end-->

            <div class="col-xl-2 col-lg-2">
                <!--onthers games-->
                <div class="single_course text-left">
                    <p>Systemy opearcyjne</p>
                    
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
                <input type="button" name="save" class="btn btn-primary my-2" disabled="true" value="Zapisz zaliczone">
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

      function checkInput()
        {
            var width = $(".progress-bar").css("width");
            var widthparent = $(".progress-bar").parent().css("width");
            if(width == widthparent)
            {
                $("input[name='save']").attr("disabled",false);
            }
            
        }


        var item = 0;
        const items = $(".word-card").length;
      $(".word-card").on('flip:done',function(){
          $(this).addClass("isshowing");
          if($(".isshowing").length==2)
          {
              if($(".isshowing").eq(0).find(".back").data("id")==$(".isshowing").eq(1).find(".back").data("id"))
              {
                $(".isshowing").addClass("animated bounceIn");
                $(".isshowing").off(".flip");
                item+=2;
                $('.progress-bar').css("width",item/items*100+'%').fadeIn("slow");
                if($(".bounceIn").length == items)
                {
                    setTimeout(function(){checkInput()}, 1000);   
                }
              }
              else
              {
                $(".isshowing").flip(false);
              }

              $(".isshowing").removeClass("isshowing");  
          }

      });

    
    $("input[name='save']").on("click",function(){
        var toSave= [];
            $(".back").each(function(i,el){
                toSave.push($(el).data("id"));
        });
        toSave = Array.from(new Set(toSave));
        var data = JSON.stringify(toSave);
        $.post("insertlearned.php",{userwords: data},function(res){
        console.log(res);
        })
       
    })
      
      

    
    </script>

</body>
</html>
<?php 
else:
$url =  "oyaoya.php";

//print_r(get_headers($url)); 
header("Location: $url",true,302);

endif;
?>