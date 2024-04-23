<?php 
session_start();
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$id = $_SESSION['user_id'];

include_once('config.php');
if (isset($_GET['id'])) {
	$medicin_id = $_GET['id'];
	$delete_query = "DELETE FROM $user_name WHERE medicin_id = $medicin_id";
    $update_table_result = mysqli_query($connection,$delete_query);
    header('location: cart.php');
// }elseif (isset($_POST['orderall'])) {
// 	$medicin_id = $_POST['hidden'];
// 	$qty = $_POST['edt'];
// 	$update_table = "UPDATE $user_name ". "SET qty = $qty ". 
//                "WHERE medicin_id = $medicin_id";
//     $update_table_result = mysqli_query($connection,$update_table);
//     header('location: buy.php');
// }
}
 ?>