<?php
//Start new or resume existing session
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SESSION['loggedIn'] ) {
    


echo $myJSON;
    $response->message = "Welcome";
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $response->user_agent = $user_agent;
    
    if(preg_match('/Android/i',$user_agent)) {
               //Code to issue tokens to Android Agents comes here
               
            }
} else {
    $response->message = "Unauthorized";
    header('Location:./index.php');
}

echo json_encode($response);
?>

