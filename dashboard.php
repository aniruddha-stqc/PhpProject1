<?php
//Start new or resume existing session
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SESSION['loggedIn'] ) {
    //Shows welcome message along with the username fetched in previous page
    $response->message = "Welcome ". $_SESSION['username'] ;
    //$user_agent = $_SERVER['HTTP_USER_AGENT'];
    //$response->user_agent = $user_agent;
    
    if(preg_match('/Android/i',$user_agent)) {
               //Code to issue tokens to Android Agents comes here
               
            }
} else {
    /* Redirect browser */
    header('Location: unauthorized.php');
    /* Make sure that code below does not get executed when we redirect. */
    exit;
}

echo json_encode($response);
?>

<!DOCTYPE html>
<!--
Redirect to home page on logout
-->
<html>
<p><a href="index.php">Logout</a> </p>
</html>