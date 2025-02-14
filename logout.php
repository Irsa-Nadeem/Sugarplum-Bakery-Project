<?php include 'connect.php';
session_start();
session_unset();
session_destroy();
$delete_query=mysqli_query($conn,"DELETE from `cart`");
header('location:login.php');
?>

