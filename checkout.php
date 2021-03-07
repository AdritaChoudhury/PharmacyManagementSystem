<?php

include 'dbconnection.php';

$totamt = $_GET['total'];
$status = "PAID";
$time = date("Y-m-d")." ".date("h:i:s");
$insert_query = "INSERT INTO `checkout`(`total-amt`, `status`, `time`) VALUES ('$totamt', '$status', '$time')";
$run = mysqli_query($conn, $insert_query);

header("Location: finalcart.php");

?>