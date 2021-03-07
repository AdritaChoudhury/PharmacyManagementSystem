<?php

$dbuser = "root";
$dbname = "pms";
$dbpass = "";
$dbhost = "localhost";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connection Failed".mysqli_connect_error());

?>