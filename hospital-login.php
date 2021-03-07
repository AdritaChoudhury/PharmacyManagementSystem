<?php

include 'dbconnection.php';

if(isset($_POST['hospital-login']))
{
    $hosID = $_POST['HospitalId'];
    $hosName = $_POST['Name'];
    
    $check_query = "SELECT * FROM `hospital-login` WHERE `ID`='$hosID' AND `Name`='$hosName'";
    $result = mysqli_query($conn, $check_query);
    
    if(mysqli_num_rows($result) === 0) {
        echo "Not logged in";
        header("Location: login-hospital.html");
    }
    else {
        echo "Logged in";
        header("Location: H_interface.html");
    }
}



?>