<?php
session_start();
include_once("config.php");

if (isset($_POST['login_btn'])) {
  if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['company-name'])){
    $email = mysql_real_escape_string($_POST['email']);
    $password =mysql_real_escape_string($_POST['password']);
    $company_name = mysql_real_escape_string($_POST['company-name']);  
    $sql = "select * from registered_users where email='".$email."' and password='".$password."' and medicalname='".$company_name."'";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    $user_name = $row['user_name'];
    if($count){    
      $msg = "Welcome ".$user_name;
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['company_name'] = $row['medicalname'];
      header("location: index.php?msg=$msg");
      exit();
    }
  }elseif (!empty($_POST['email']) && !empty($_POST['password'])) {
      $email = mysql_real_escape_string($_POST['email']);
      $password =mysql_real_escape_string($_POST['password']);
      
      $sql = "select * from registered_users where email='".$email."' and password='".$password."'";
      $result = mysqli_query($connection,$sql);
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result);
      $user_name = $row['user_name'];
      if($count){    
        $msg = "Welcome ".$user_name;
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['user_id'];
        header("location: index.php?msg=$msg");
    }else{
      $msg = "!!!!  Invalid Login   !!!!";
      header("location: login.php?msg=$msg");
      $msg = "";
      
      }
    }
}
?>
