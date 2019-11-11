<?php
//Start new or resume existing session
session_start();


$cookie_name = "site_visit_count";
$count = 1;
setcookie( $cookie_name,$count, time() + (10 * 365 * 24 * 60 * 60) );

if(!isset($_COOKIE[$cookie_name])) {

    echo "First visit to this page<br><br>";
} else { 
    echo "You have already visited this page ". $_COOKIE[$cookie_name] . " times<br><br>";
    $count = $_COOKIE[$cookie_name];
    $count++;
    setcookie($cookie_name,  $count, time() + (10 * 365 * 24 * 60 * 60) );
}
?>

<!DOCTYPE html>
<!--
Front Page of Website.
-->
<html>
    <body>
        <form action="authentication.php" method="post">
            EMAIL: <input type="text" name="email"><br>
            PASSWORD: <input type="password" name="password"><br>
            <button name="user_action" type="submit" >Login</button>
        </form>
    </body>
</html>
