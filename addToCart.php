<?php

include 'dbconnection.php';

$id = $_GET['id'];
$fetch_query = "SELECT * FROM `shoppingcart` WHERE id='$id'";
$result = mysqli_query($conn, $fetch_query);
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $image = $row['image'];
    $price = $row['price'];
    $insert_query = "INSERT INTO `finalcart`(`id`, `name`, `code`, `image`, `price`) VALUES ('$id', '$name', '$code', '$image', '$price')";
    $run = mysqli_query($conn, $insert_query);
}


header("Location: shopping_cart.php");

?>
*/