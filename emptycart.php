<?php

include 'dbconnection.php';
$delete_query = "DELETE FROM finalcart WHERE 1";
$run = mysqli_query($conn, $delete_query);

header("Location: finalcart.php");

?>