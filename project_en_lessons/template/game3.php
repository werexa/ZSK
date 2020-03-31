<?php

if(!empty($_GET['category'])):
session_start();
$category = $_GET["category"];
require_once("connection.php");
                
$mysql = new Devalien();

$words = $mysql->getRandCategoryWords($category,10);

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php") ?>
<body class="text-center" data-gr-c-s-loaded="true">
<?php require_once("header.php")?>

    <div class="courses_details_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-left title">Test</h2>
                </div>

            <div class="col-xl-6 col-lg-6">
                <form class="form-inline" method="post">
              
              <?php 
              
              $jswords =[];
              foreach($words as $key => $value):
                $jswords[$value["word_en_id"]] = $value["word_en"];
            ?> 
                <!--word-->
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only"><?php echo $value["word_pl"]?></label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?php echo $value["word_pl"]?>">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"><?php echo $value["word_pl"]?></label>
                    <input type="text" class="form-control" name="worden[]" id="inputPassword2" data-value="<?php echo $value["word_en_id"] ?>" >
                </div>
                <!--word end-->
              <?php endforeach; ?>
              <div class="col-xl-12 col-md-6 col-lg-5 my-4">
                                <input type="button" name="testclick" class="btn btn-primary" value="Sprawdz">
                                <input type="button" name="anew" class="btn btn-primary" value="Od nowa" onClick="window.location.reload()">
                        </div>
                </form>
            </div>

            <div class="col-xl-2 col-lg-2">
                <!--onthers games-->
                <div class="single_course text-left">
                    <p>Systemy opearcyjne</p>
                    
                    <p><i class="fa  fa-file-text"></i><a href="game3.php?category=<?php echo $category?>" class=""> Test</a></p>
                    <p><i class="fa  fa-sticky-note-o "></i><a href="game1.php?category=<?php echo $category?>" class=""> Fiszki</a></p>
                    <p><i class="fa  fa-braille"></i><a href="game2.php?category=<?php echo $category?>" class=""> Memorize</a></p>
                    
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
var words = `<?php echo json_encode($jswords)?>`;
words = JSON.parse(words);
console.log(words[13]);
function check(){

$("input[name='worden[]']").each(function(i,el){
    if(words[$(el).data('value')]== $(el).val())
    {
        console.log("tak",words[$(el).data('value')]+"="+$(el).val());
        $(el).addClass("is-valid").removeClass("is-invalid");
       
    }
    else
    {
        console.log("nie",words[$(el).data('value')]+"="+$(el).val());
        $(el).addClass("is-invalid").removeClass("is-valid");
    }

})

var countall =  $("input[name='worden[]']").length;
var countgood =  $(".is-valid").length;
if(countgood > 0)
    $("input[name='save']").attr("disabled", false);


var per = Math.round((countgood / countall)*100);
return per;


};

$("input[name='testclick']").on("click",function(){
    var per = check();
    $('.progress-bar').css("width",per+"%").fadeIn("slow");
    $(this).attr("disabled", true);
});


$("input[name='save']").on("click",function(){
    var toSave = {};
    $(".is-valid").each(function(i,el)
    {
        toSave[i] = $(el).data("value");
    })

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