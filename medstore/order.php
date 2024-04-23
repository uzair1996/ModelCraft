<?php
session_start();
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$phone_no = $_SESSION['Phone-no'];
$quantity = $_SESSION['qty'];
$address = $_SESSION['address'];
$imgname= $_SESSION['imgname'];
$total_price = $_SESSION['total_price'];
if(!$user_name){
  header("location: login.php");

}else{
  include_once("config.php");
  
  $select_query = "select qty from productinfo where id ='".$id."'";
  $select_result = mysqli_query($connection,$select_query);
  $row = mysqli_fetch_array($select_result);
  $number = $row['qty'];
  if($number > "1"){
//  	echo $number;
  	$insertqty = $number-$quantity;
  	$update_query = "update productinfo set qty = '".$insertqty."' where id ='".$id."'";
  	$update_query_result = mysqli_query($connection,$update_query);
  	if ($update_query_result) {
  		$messager = "Ordered successfully and You will Recieve a message";
  	}else{
  		echo "not";
  	}
  	if(isset($_POST['order'])){

 	 $msg = "MEDSTORE Hi '".$user_name."' Your Medicin '".$imgname."'is ordered successfully Total amount is :- '".$total_price."' order will be delever in next 2 day";
	  include('way2sms-api.php');
	  $uid = '9028822717';
	  $pass = "furkan123";
	  $phone = $phone_no;
	  $message = $msg;
	  sendWay2SMS($uid,$pass,$phone,$message);

  		}	
  
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | Bill</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/buy.css">

<link rel="stylesheet" href="css/payment.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.ui.totop.js"></script>


</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1> <a href="index.php"> MedStore </a></h1>
      <h2>  India Ka Smart Pharmacy</h2>
    </div>
  </div>
  <nav>
   <div class="container_12">
      <div class="grid_12">
        <ul class="sf-menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a>
            <ul>
              <li><a href="#">OUR TEAM</a></li>
            </ul>
          </li>
          <li><a href="products.php">Products</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><?php if(isset($_SESSION['user_name'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a>
<?php }else{ ?>
  <a class="link" href="login.php" style="text-decoration:none">login</a>
<?php } ?></li>
          <li><?php if(isset($_SESSION['user_name'])){ ?>
  <a class="link" href="cart.php" style="text-decoration:none">Cart</a>
<?php }else{ ?>
<?php } ?></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </nav>
</header>

<div class="message"><br><br><br><br>

<h4>Name : <?php if (isset($user_name)) {
    echo $user_name;
  }?></h4><br>


<h4>Email :<?php if (isset($email)) {
    echo $email;
  }?></h4><br>


<h4>Phone-no :<?php if (isset($phone_no)) {
    echo $phone_no;
  }?></h4><br>


<h4>Address :<?php if (isset($address)) {
    echo $address;
  }?></h4><br><br><br>	

<h4><?php if (isset($messager)) {
    echo $messager;
  }?></h4><br>	
</div>

<footer>
  <div class="container_12">
    <div class="grid_8"> <span>MedStore &copy; 2045 | Privacy Policy | Design by <a href="http://www.Table-no3.com/">Table-no3.com</a></span> </div>
    <div class="grid_4">
      <ul class="soc-icon">
        <li><a href="#"><img src="images/icon-3.png" alt=""></a></li>
        <li><a href="#"><img src="images/icon-2.png" alt=""></a></li>
        <li><a href="#"><img src="images/icon-1.png" alt=""></a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>