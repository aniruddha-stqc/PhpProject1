<?php
//Start new or resume existing session
session_start();
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
