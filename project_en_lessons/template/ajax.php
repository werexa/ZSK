<?php 
require_once("connection.php");
session_start();


if(!empty($_POST["worden"]) && !empty($_POST["wordpl"]) && !empty($_POST["lvl"]) && !empty($_POST["categoryid"]) && !empty($_POST['package']) && !empty($_SESSION["User"]["user_id"]))
{
    
    $user = $_SESSION["User"]["user_id"];
    $worden = ucfirst($_POST["worden"]);
    $wordpl = ucfirst($_POST["wordpl"]);
    $lvl = $_POST["lvl"];
    $category = $_POST["categoryid"];
    $package = ucfirst($_POST['package']);
    $mysql = new Devalien();
    $mysql =  $mysql->mysql;
    //jesli jest liczbą to został poddany id jesli nie trzeba stworzyć package

    if(!is_numeric($package))
    {
        $answer = $mysql->query("INSERT INTO dev_word_packages(pack_name,pack_author) SELECT \"$package\",\"$user\" WHERE NOT EXISTS ( SELECT * FROM dev_word_packages where pack_name = \"$package\" and pack_author = \"$user\" )");
        $temp = $package;
        if($answer===true)
        {
            $package =($mysql->query("SELECT pack_id FROM dev_word_packages where pack_name = \"$package\" and pack_author = $user order by 1 desc limit 1"))->fetch_row()[0];
            echo "<option data-value=\"$package\" value=\"$temp\"></option>";
        }
        if($mysql->connect_errno)
        {
            echo "Failed to connect to MySQL: " . $mysql->connect_error;
            exit();
        }
       
        
    }
    $a = $mysql->query("INSERT INTO dev_word_en(word_en) select \"$worden\" WHERE NOT EXISTS ( SELECT * FROM dev_word_en WHERE word_en = \"$worden\")");

    if($a === true)
        $wordenID = ($mysql->query("SELECT word_id FROM dev_word_en where word_en = \"$worden\" order by 1 desc limit 1 "))->fetch_row()[0];

    $a2 = $mysql->query("INSERT INTO dev_word_pl(word_pl) select \"$wordpl\" WHERE NOT EXISTS ( SELECT * FROM dev_word_pl WHERE word_pl = \"$wordpl\")");

    if($a2 === true)
        $wordplID = ($mysql->query("SELECT word_id FROM dev_word_pl where word_pl = \"$wordpl\" order by 1 desc limit 1 "))->fetch_row()[0];

    echo $wordenID,$lvl,$package,$category;
    $mysql->query("INSERT INTO dev_words VALUES ($wordplID,$wordenID,\"$lvl\",\"\", $package, $category)");
    if($mysql->connect_errno)
    {
        echo "Failed to connect to MySQL: " . $mysql->connect_error;
        exit();
    }
     
    
   


}

?> 

