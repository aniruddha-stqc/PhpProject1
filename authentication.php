<?php

require_once 'header/connection.php';
//Start new or resume existing session
session_start();
$sql = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    
    $_SESSION['loggedIn'] = true;
    header('location: dashboard.php');
    exit();
} else {
    echo "Incorrect credentials";
}
$conn->close();
?>