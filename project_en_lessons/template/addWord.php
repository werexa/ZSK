<?php 
    session_start();
    require_once("connection.php");
    $mysql = new Devalien();
    //$mysql->set_charset("utf8");
    //$category = $mysql->query("SELECT `category_id`,`category_name` FROM `dev_categories`" );
    $category = $mysql->getCategories();
    //$package =  $mysql->query("SELECT `pack_id`,`pack_name` FROM `dev_word_packages` where `pack_author` = ".$_SESSION["User"]["user_id"]);
    $package =  $mysql->getUserPackages($_SESSION["User"]["user_id"]);
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
                    <h2 class="text-middle title my-3">Dodaj słowko</h2>
                </div>
                <div id="summary"></div>
                <div class="col-xl-12 col-lg-12">
                    <form action="" method="post" name="addword">
                        <div class="col-xl-12 col-md-12">
                                <div class="form-group">
                                    <label for="wordpl">Dodaj tłumacznie po angielsku</label>
                                    <input id="wordpl" type="text" placeholder="Dodaj słówko po polsku" name="wordpl" class="form-control" >
                                </div>  
                               
                                <div class="form-group">
                                    <label for="worden">Dodaj tłumacznie po angielsku</label>
                                    <input id="worden" type="text" placeholder="Dodaj słówko po angielsku" name="worden" class="form-control" >
                                </div>

                            <div class="form-group">
                                <label>Poziom</label>
                                <div class="progress" style="height:3rem;margin-bottom:20px;font-size:large">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">A2</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategoria</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="devcat">
                                <?php
                                foreach ($category as $key => $value) {
                                    echo "<option value=".$value['category_id'].">".$value['category_name']."</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Dodaj do istniejącego pakietu lub stwórz nowy np. klasa 1</label>
                                <input list="package" class="form-control" name="package">
                                <datalist id="package" >
                                    <?php 
                                    foreach ($package as $key => $value) {
                                        echo "<option data-value=".$value['pack_id']." value=".$value['pack_name']."></option>";
                                    }
                                    ?>
                                    <option data-value="1" value="klasa5"></option>
                                </datalist>
                            </div>
                            
                        </div>
                       

                        <div class="col-xl-12 col-md-6 col-lg-5">
                                <input type="button" name="wordclick" class="boxed_btn" value="Dodaj">
                        </div>
                        
                    </form>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-middle title my-3">Twoje Słówka</h2>
                </div>
                

                <div class="col-xl-12 col-lg-12" >
                
                <div class="row d-flex justify-content-between word-content" >
                        <?php require_once("wordcontent.php")?>
                        </div>
                </div>

        </div>
    </div>
</div>
    
   <?php require_once("jsbeforebodyclosingtag.php") ?>
    
    <script>
        $( document ).ready( function () {
            $("form[name='addword']").validate({
                rules: {
                    worden:{required:true},
                    wordpl:{required:true},
                    package:{required:true},
                },
                messages: {
                    worden: "Please enter your word in polish",
                    wordpl: "Please enter your word in english",
                    package: "Please enter your word in english",
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
            });
            })

        function processtext(percentage,selekor){
            switch (percentage) {
                case 25:
                    $(selekor).text("A2")
                    break;
                case 50:
                    $(selekor).text("B2")
                    break;
                case 75:
                    $(selekor).text("C1")
                    break;
                case 100:
                    $(selekor).text("C2")
                    break;      
                default:
                    break;
            }
        }
        var data = {};
        $("#package option").each(function(i,el) {  
        data[$(el).data("value")] = $(el).val();
        });


        $(".progress").on("click",function(){
            var child = $(this).children().css("width");
            var parent = $(this).css("width");
            var percentage = 100 * parseFloat(child) / parseFloat(parent) ;
            if(percentage == 100)
                percentage = 25;
            else
                percentage = percentage+25;

            $(this).children().css("width",percentage+'%');
            processtext(percentage,$(this).children())
        })

        $.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
        } );
        
        

        

        $("input[name='wordclick']").on("click",function(){

            var valpackage = $('input[name="package"]').val();
            var existpackage = $('#package [value="' + valpackage + '"]').data('value');
            if(existpackage != undefined)
                valpackage = existpackage;
                
            console.log(valpackage);
            var wordpl = $("input[name='wordpl']").val();
            var worden = $("input[name='worden']").val();
            var lvl = $(".progress").children().text();
            var category = $("option:selected").val();
            console.log(wordpl,worden,lvl,category,valpackage);
            if($("form[name='addword']").valid() )
            {
                $.post("ajax.php",{wordpl: wordpl,worden: worden, lvl: lvl, categoryid: category,package:valpackage}, function(response) {
                    $("input[name='wordpl']").val("");
                    $("input[name='worden']").val("");
                    $(".progress").children().css("width",'25%');
                    $(".word-content").append(`<!--word-->
                                                <div class="col-xl-3 col-lg-3 col-sm-3 word-card my-2" style="display:none;">
                                                    <div class="card front">
                                                        <div class="card-body">`+wordpl+`</div>
                                                    </div>
                                                    <div class="card back">
                                                        <div class="card-body ">`+worden+`</div>
                                                    </div>
                                                </div>
                                            <!--word-->`)
                        $('.word-card').fadeIn();
                        //effect flip 
                        $(".word-card").flip({
                            axis: 'x',
                            trigger: 'click',
                            reverse: true,
                        });
                        if(response.indexOf("option"))
                        {
                            $("#package").append(response);
                        }
                    })
            
            
            }
            else{
                
                
               
                /*var validator = $("form[name='addword']").validate();
               var  errors = { worden: "Wpisz tłumaczenie po angielsku",wordpl:"Wpisz tłumaczenie po polsku", package:"Dodaj lub wybierz z istniejących nazwę pakietu" };
                validator.showErrors(errors); */
               
            }
            
        });
           
        

    //effect flip 
    $(".word-card").flip({
        axis: 'x',
        trigger: 'click',
        reverse: true,
      });

      $(".word-content").fadeIn(1000, function(){
        console.log("I showed up");   
        });
    </script>

</body>
</html>