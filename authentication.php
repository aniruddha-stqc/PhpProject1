<?php

require_once 'header/connection.php';
//Start new or resume existing session
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql ="Select * from users where email='$email' and password = '$password' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 1) {
    
    $_SESSION['loggedIn'] = true;
    header('location: dashboard.php');
    exit();
} else {
    $response->message =  "Incorrect credentials";
    echo json_encode($response);
}
$conn->close();
?>