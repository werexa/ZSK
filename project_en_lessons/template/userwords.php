<?php 

if(!empty($_POST["userwords"]))
{
    $data = json_decode($_POST["userwords"]);
    var_dump($data);

}

?>