<?php

include 'dbconnection.php';

if(isset($_POST['patients-signup']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $phone = $_POST['MobileNo'];
    $gender = $_POST['gender'];
    $hospitalname = $_POST['hospitalname'];
    
    $insert_query = "INSERT INTO `patients-login`(`First-name`, `Last-name`, `Email`, `Password`, `Age`, `Phone`, `Gender`, `Hospital-name`) VALUES ('$fname', '$lname', '$email', '$password', '$age', '$phone', '$gender', '$hospitalname')";
    $run = mysqli_query($conn, $insert_query);
}

header("Location: clickhereC.html");

?>