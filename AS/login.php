<?php
include_once("db.php");
if (isset($_POST['c_login'])) {
  echo "stringasas";
   if (!empty($_POST['c_email']) && !empty($_POST['c_password'])) {
      $email = mysql_real_escape_string($_POST['c_email']);
      $password =mysql_real_escape_string($_POST['c_password']);
      echo "string";
      $sql = "select * from customer_register where c_email='".$email."' and c_password='".$password."'";
      $result = mysqli_query($connection,$sql);
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result);
      $user_name = $row['user_name'];
      if($count){
        session_start();    
        $msg = "Welcome ".$user_name;
        $_SESSION['user_name'] = $row['c_firstname'];
        $_SESSION['email'] = $row['c_email'];
        $_SESSION['user_id'] = $row['c_id'];
        header("location: index.php?msg=$msg");
    }else{
      $msg = "!!!!  Invalid Login   !!!!";
      header("location: login.php?msg=$msg");
      $msg = "";      
    }
}
 }else{

 }
?>