<?php
include_once("db.php");
session_start();
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
$delete_query = "DELETE FROM $user_name WHERE product_id = $id";
    $update_table_result = mysqli_query($connection,$delete_query);
    header('location: cart.php');
?>