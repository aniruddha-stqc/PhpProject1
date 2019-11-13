<?php

//Connect to the data base. PHP will check if the file has already been
//included, and if so, not include (require) it again
require_once 'header/connection.php';
//Start new or resume existing session
session_start();

//Check if POST parameters are set
if (isset($_POST['email']) && isset($_POST['password'])) {
    //receive the post parameters of email and password
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Check if credentials are blank
    if (empty($email) || empty($password)) {
        $response->message = "email or password is mandatory";
        echo json_encode($response);
    } else {
        //check if the credential matches entry in database
        $sql = "Select * from users where email='$email' and password = '$password' ";
//Execute the query to the MySQL data base
        $result = mysqli_query($conn, $sql);
//If exactly one row is fetched
        if ($result->num_rows == 1) {
            //Set session "loggedIn" to TRUE
            $_SESSION['loggedIn'] = true;
            //Keep the username for use in subsequent pages
            $_SESSION['username'] = $email;
            /* Redirect browser */
            header('location: dashboard.php');
            /* Make sure that code below does not get executed when we redirect. */
            exit();
        } else {
            $response->message = "Incorrect credentials";
            echo json_encode($response);
        }
    }
} else {
    /* Redirect browser */
    header('Location: unauthorized.php');
    /* Make sure that code below does not get executed when we redirect. */
    exit;
}


//Closes a previously opened database connection
$conn->close();
?>

<!DOCTYPE html>
<!--
Redirect to home page
-->
<html>
<p><a href="index.php">Home</a> </p>
</html>