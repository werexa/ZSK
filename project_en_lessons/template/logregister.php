<?php 

require_once("connection.php");


function LogIn($email,$pass)
{
    $mysqli = connect();
    /*$('.popup-with-form').magnificPopup(*/
    
    /*$hashpass = password_hash(trim($pass),PASSWORD_ARGON2I);
    $pos = strpos($hashpass,"p=")+2;
    $hashpass = substr($hashpass, $pos);*/
    $hashpass = md5(trim($pass));
    if ($mysqli->query("Select * from dev_users where user_mail = \"$email\"")->num_rows > 0)
    {
        if($mysqli->query("Select * from dev_users where user_mail = \"$email\" and user_password = \"$hashpass\"")->num_rows > 0)
        {
            $mysqli->query("UPDATE users
            SET user_status = 1
            where user_mail = \"$email\" and user_password = \"$hashpass\"");

            $result = $mysqli->query("SELECT `user_id`,`user_mail`,`user_name`,`user_status`,`user_type`,`user_avatar` FROM `dev_users` where user_mail = \"$email\" and user_password = \"$hashpass\"") ;

                /* fetch object array */
                while ($row = $result->fetch_assoc()) {
                    $_SESSION["ser"]= "zolty";
                    $_SESSION["User"]["user_id"] = $row['user_id'];
                    $_SESSION["User"]["user_mail"] = $row['user_mail'];
                    $_SESSION["User"]["user_name"] = $row['user_name'];
                    $_SESSION["User"]["user_status"] = $row['user_status'];
                    $_SESSION["User"]["user_type"] = $row['user_type'];
                    $_SESSION["User"]["user_avatar"] = $row['user_avatar'];
                }
            
                /* free result set */
                $result->close();
            
            
            return true;
        }
        else
        {
           // var_dump("Select * from users where user_mail = \"$email\" and user_password = \"$hashpass\"");
            return "Złe hasło. Chcesz je odzyskać? <a class=\"dont-hav-acc\" href=\"#test-form3\">Odzyskanie hasła</a>";
            
        }
    }
    else
    {
        return "Chyba się u nas jeszcze nie rejestrowałeś ? -_-";
       
    }
}


function register($email, $pass, $name)
{
    $mysqli = connect();
    /*$hashpass = password_hash(trim($pass),PASSWORD_ARGON2I);
    $pos = strpos($hashpass,"p=")+2;
    $hashpass = substr($hashpass, $pos);*/

    $hashpass = md5(trim($pass));

    if ($mysqli->query("Select * from dev_users where user_mail = \"$email\"")->num_rows === 0)
    {
        
        $answer = $mysqli->query("
            INSERT INTO 
                dev_users(`user_mail`,`user_password`,`user_name`, `user_status`, `user_type`)
            VALUES
                (\"$email\", \"$hashpass\", \"$name\", 0, 2)");
        
        if($answer === true)
        {
            registerMail($email,$name,$answer);
            
            return "Gratulacje możesz się zalogować";
        }
        else
        {
            echo("Error description: " . $mysqli -> error);
        }
       

    }
    else
    {
        return "mail $email jest już zarejestrowany.";
    }

}

function registerMail($email, $name,$answer)
{  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    //mail.mydomain.com
        $from  = "From: werexa@gmail.com\r\n";
        $from .= 'MIME-Version: 1.0'."\r\n";
        $from .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
        $adress = $email;
        $title = "Potwierdzenie rejestracji";
        $message = "<html>
        <head>
        </head>
        <body>
        <b>Witamy serdecznie!</b><br/>
        Dziękujemy za rejestrację.<br>
        Zapraszam na stronę: <a href=\"$url\">Kurs PHP</a>   
        </body>
        </html>";
    
        

        // użycie funkcji mail
        
        if (mail($adress, $title, $message, $from)) {
            echo "Email successfully sent to $adress...";
        } else {
            echo "Email sending failed...";
        }
    
    }



            ?>