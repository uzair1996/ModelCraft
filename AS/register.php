<!DOCTYPE html>
<html>
<head>
	<title>Augmented Shopping</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/detail.css">
</head>

<section class="checkout">
<div class="checkoutleft">
  <h4 class="checkout-heading">Augmented Shopping</h4>
  <!-- <h6 class="subtitle">cart &nbsp;<i class="fa fa-angle-right"></i>&nbsp; customer information</h6><br> -->
  <p class="small">Already have an account? <a class="loginlink" href="index.php">Log in</a></p>
  <h5>Contact information</h5><hr>
  <form action="register.php" method="post">
    <input type="email" placeholder="Email" name="email" required/><br><br>
    <input type="checkbox"> Keep me up to date on news and exclusive offers<br>
    <input class="reginput" type="text" placeholder="First name" name="c_firstname" required/>
    <input class="reginput" type="text" placeholder="Last name" name="c_lastname" required/>
    <input type="password" placeholder="password" name="c_password" required/>
    <input type="password" placeholder="confirm password" name="c_confirmpassword" required/>
    <input type="submit" class="beautifulbtn" value="Register" name="submit"/>
  </form>
</div>

<?php
include "db.php";
global $conn;
if(isset($_POST['submit'])){
  $email =  mysqli_real_escape_string($conn, $_POST['email']) ;
  $f_name =  mysqli_real_escape_string($conn,$_POST['c_firstname']);
  $l_name = mysqli_real_escape_string($conn, $_POST['c_lastname']);
  $password = mysqli_real_escape_string($conn,  $_POST['c_password']);
  $c_password = mysqli_real_escape_string($conn, $_POST['c_confirmpassword']) ;

  $uery_insert = "INSERT INTO customer_register(c_firstname, c_lastname, c_email, c_password, c_confirmpassword) VALUES ('$f_name', '$l_name', '$email','$password', '$c_password')";



  $result = mysqli_query($conn, $query_insert);

  if(!$result){
    echo 'server error';
  }else{
   header("location:index.php");
  }






}


?>

<div class="checkoutright">

</div>
</section>
</html>
