
<?php 

foreach ($words as $key => $value) {
   echo '<!--word-->
    <div class="col-xl-3 col-lg-3 col-sm-4 word-card my-3">
    <div class="card front">
        <div class="card-body">'. $value['wen'] .'</div>
    </div>
    <div class="card back">
        <div class="card-body ">'.$value['epl'] .'</div>
    </div>
</div>
<!--word-->';
}
?>


