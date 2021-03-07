<?php

include 'dbconnection.php';

if(isset($_POST['patients-login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $check_query = "SELECT * FROM `patients-login` WHERE `Email`='$email' AND `Password`='$password'";
    $result = mysqli_query($conn, $check_query);
    
    if(mysqli_num_rows($result) === 0) {
        echo "Not logged in";
        header("Location: login-patient.html");

    }
    else {
        echo "Logged in";
        header("Location: C_interface.html");
    }
}


?>