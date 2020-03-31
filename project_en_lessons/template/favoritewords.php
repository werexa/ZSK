<?php 

session_start();
require_once('connection.php');

if($_POST["wordid"] && isset($_SESSION["User"]["user_id"]))
{
    $mysql = new Devalien;
    $s = $mysql->insertUserFavorite($_SESSION["User"]["user_id"],$_POST["wordid"]);
}

?>