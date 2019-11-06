<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
  MySQL connection creation
 */

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "clientserver";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_errno) {
    die("Failed to connect to MySQL:  " . $conn->connect_error);
}
?>