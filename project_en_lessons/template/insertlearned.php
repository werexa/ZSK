<?php 
session_start();
if(!empty($_POST["userwords"]) && isset($_SESSION["User"]["user_id"]))
{
    $data = json_decode($_POST["userwords"]);
    $user = $_SESSION["User"]["user_id"];
    require_once("connection.php");
    $mysql = new Devalien;
    echo $mysql->insertUserLearned($user,$data);
     
    //$s = $mysql->insertUserFavorite($_SESSION["User"]["user_id"],$_POST["wordid"]);

}

?>