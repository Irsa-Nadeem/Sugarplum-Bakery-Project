<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Sanitize input to prevent SQL injection (VERY IMPORTANT)
    $delete_id = mysqli_real_escape_string($conn, $delete_id);  // Crucial security step

    $delete_query = mysqli_query($conn, "DELETE FROM `spic` WHERE id = $delete_id");

    if ($delete_query) {
        echo "Product deleted";
        header('location:viewsweet.php');


    } else {
       
    echo "Product not deleted";
    header('location:viewsweet.php');
}
}
?>