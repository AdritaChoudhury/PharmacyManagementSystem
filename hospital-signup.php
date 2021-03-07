<?php

include 'dbconnection.php';

if(isset($_POST['hospital-signup']))
{
    $hosId = $_POST['HospitalId'];
    $hosName = $_POST['HospitalName'];
    $hosAddress = $_POST['HospitalAddress'];
    $phone = $_POST['MobileNo'];
    
    $insert_query = "INSERT INTO `hospital-login`(`ID`, `Name`, `Address`, `Phone-No`) VALUES ('$hosID', '$hosName', '$hosAddress', '$phone')";
    $run = mysqli_query($conn, $insert_query);
}

header("Location: clickhereH.html");

?>