<?php

session_start();
//Destroy old sessions on visit to index page
session_destroy(); 
//session_regenerate_id();

$cookie_name = "site_visit_count";
$count = 1;
//Set initial value to Cookie for counting site visits
setcookie( $cookie_name,$count, time() + (10 * 365 * 24 * 60 * 60) );

//Check if cookie is not set    
if(!isset($_COOKIE[$cookie_name])) {

    echo "First visit to this page<br><br>";
} else { 
    //If cookie is set then display the count of visits
    echo "You have already visited this page ". $_COOKIE[$cookie_name] . " times<br><br>";
    $count = $_COOKIE[$cookie_name];
    $count++;
    //Update the count and update the cookie value
    setcookie($cookie_name,  $count, time() + (10 * 365 * 24 * 60 * 60) );
}


?>

<!DOCTYPE html>
<!--
Front Page of Web site.
-->
<html>
    <body>
        <form action="authentication.php" method="post">
            EMAIL: <input type="text" name="email"><br>
            PASSWORD: <input type="password" name="password"><br>
            <button name="user_action" type="submit" value="Login" >Login</button>
        </form>
    </body>
</html>
