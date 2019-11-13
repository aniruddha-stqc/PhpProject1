<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$response->message = "Unauthorized Access Attempt";
echo json_encode($response);

?>

<!DOCTYPE html>
<!--
Redirect to home page
-->
<html>
<p><a href="index.php">Home</a> </p>
</html>