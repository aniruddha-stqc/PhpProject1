<?php
//Connect to the data base. PHP will check if the file has already been 
//included, and if so, not include (require) it again
require_once 'header/connection.php';
//Start new or resume existing session
session_start();

//receive the post parameters of email and password
$email = $_POST['email'];
$password = $_POST['password'];
//check if the credential matches entry in database
$sql ="Select * from users where email='$email' and password = '$password' ";
//Execute the query to the MySQL data base
$result = mysqli_query($conn, $sql);
//If exactly one row is fetched
if ($result->num_rows == 1) {
    //Set session "loggedIn" to TRUE
    $_SESSION['loggedIn'] = true;
    /* Redirect browser */
    header('location: dashboard.php');
    /* Make sure that code below does not get executed when we redirect. */
    exit();
} else {
    $response->message =  "Incorrect credentials";
    echo json_encode($response);
}
//Closes a previously opened database connection
$conn->close();
?>