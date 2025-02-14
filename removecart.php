<?php
include 'connect.php';

if (isset($_GET['remove'])) {
    $delete_id = $_GET['remove'];

    // Sanitize input to prevent SQL injection (VERY IMPORTANT)
    $delete_id = mysqli_real_escape_string($conn, $delete_id);  // Crucial security step

    $delete_query = mysqli_query($conn, "DELETE FROM `cart` WHERE id = $delete_id");

    if ($delete_query) {
        echo "Product deleted";
        header('location:cart.php');


    } else {
       
    echo "Product not deleted";
    header('location:cart.php');
}
}
?>