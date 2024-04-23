<?php
session_start();
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$id = $_SESSION['user_id'];
include_once("config.php");
$count = 0;
$counter = 0;
  $select_for_user = "select * from $user_name where user_id = $id";
  $select_for_user_result = mysqli_query($connection,$select_for_user);
  if($select_for_user_result){
    while ($rows = mysqli_fetch_array($select_for_user_result)) {
      $medicin_id[$counter] = $rows['medicin_id'];
      $imgurl[$counter] = $rows['imgurl'];
      $imgname[$counter] = $rows['imgname'];
      $qty[$counter] = $rows['qty'];
      $price[$counter] = $rows['price'];
      $counter++;
    if($id==$rows['user_id']){
      $count = 1;
    }
  }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | Cart</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/buy.css">
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
<br>
<div class="cart"><br>
<?php if ($count == 1) {
  for ($i=0; $i < $counter ; $i++) {

  echo "<div class=selected-item>";
  echo "<div class=medicin-images>";
  echo "<img src=";
  if (isset($imgurl)) {
      echo $imgurl[$i];
  }
  echo "></div>";
  echo"<div class=medicin-name>Name :"; 
  if (isset($imgname)) {
  echo $imgname[$i];}
  echo "</div>";
  echo "<form action=delete.php method=post><div class=medicin-qty><input type=edittext name=edt placeholder=Enter Quantity></div><div class=qty-submit-button>";
  echo "<input type=hidden name=hidden value=";if (isset($medicin_id)) {
    echo $medicin_id[$i];
  }
  echo ">";
  echo "<input type=submit name=submit value=Update></div></form>";
  echo "<div class=medicin-price>";
  if (isset($price)) {
    echo "Rs:".$price[$i];
  }
  echo "</div>";
  echo "<form action=buy.php method=post>";
  echo "<div class=medicin-order-button>";
  echo "<input type=hidden name=hidden value=";if (isset($medicin_id)) {
    echo $medicin_id[$i];
  }
  echo ">";
  echo ";<input type=submit name=order value=Order></div>";
  echo "</form>";
  echo "<a href=delete.php?id=";if (isset($medicin_id)) {
    echo $medicin_id[$i];
  }
  echo " class=close></a>";
  echo "</div><br>";  
  } 

}else{
  echo "<div class=empty-cart>Your Card Is Empty !!!</div></div>";
}
?>
</div>
<div class="all-order">
  <form action="buy.php" method="post">
  <div class="medicin-orderall-button"><input type="submit" name="orderall" value="Order-All"></div>
  </form>;
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