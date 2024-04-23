<?php
session_start();
if (isset($_POST['cart'])) {
  $user_id = $_SESSION['user_id'];
  $user_name = $_SESSION['user_name'];
  $email = $_SESSION['email'];
  if(!$user_name){
    header("location: login.php");
  }else{
    include_once("config.php");
  if(isset($_POST['hidden'])){
    $id = $_POST['hidden'];
    $_SESSION['id'] = $_POST['hidden'];
    $sql = "select * from productinfo where id=$id";
    $result = mysqli_query($connection,$sql);
    while ($rows = mysqli_fetch_array($result)) {
      $_SESSION['imgurl'] = $imgurl1 = $rows['imgurl'];
      $_SESSION['imgname'] = $imgname = $rows['imagename'];
      $_SESSION['price'] = $imgprice = $rows['price'];
    }

  }   
    // include_once("config.php");
  $create_table = "CREATE TABLE $user_name(
   user_id   INT              NOT NULL,
   medicin_id   INT              NOT NULL,
   imgurl   VARCHAR (25)     NOT NULL,
   imgname  VARCHAR(25)              NOT NULL,
   qty  INT                 NOT NULL,
   price   INT              NOT NULL

)";
  $create_table_result = mysqli_query($connection,$create_table);
  if($create_table_result){
    $qty = 1;
    $insert_table = "insert into $user_name(user_id, medicin_id, imgurl, imgname, qty, price)values('$user_id','$id','$imgurl1','$imgname','$qty','$imgprice')";
    $insert_table_result = mysqli_query($connection,$insert_table);
    header('location: products.php');
  }else{
    
    $select_for_insert = "select medicin_id from $user_name where medicin_id=$id";

    $select_for_insert_result = mysqli_query($connection,$select_for_insert);
    while ($check_rows = mysqli_fetch_array($select_for_insert_result)) {
      if($id == $check_rows['medicin_id']){
        $checking_medicin_id = $check_rows['medicin_id'];
      }
    }
    if(isset($checking_medicin_id)){
      $select_for_qty = "select qty from $user_name where user_id=$user_id and medicin_id =$id";
    $select_for_qty_result = mysqli_query($connection,$select_for_qty);
    while ($row_value = mysqli_fetch_array($select_for_qty_result)) {
      $qty_value = $row_value['qty'];
    }
    if($qty_value >= 0){
      $qty = $qty_value + 1;
    }else{
      $qty = 1;
    }
    $update_table = "UPDATE $user_name ". "SET qty = $qty ". 
               "WHERE medicin_id = $id";
    $update_table_result = mysqli_query($connection,$update_table);
    header('location: products.php');
    }else{
      $qty = 1;
    $insert_table = "insert into $user_name(user_id, medicin_id, imgurl, imgname, qty, price)values('$user_id','$id','$imgurl1','$imgname','$qty','$imgprice')";
    $insert_table_result = mysqli_query($connection,$insert_table);
    header('location: products.php');
  }
    
  }
}


}elseif (isset($_POST['hidden'])){
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
if(!$user_name){
  header("location: login.php");
}else{
  include_once("config.php");
if(isset($_POST['hidden'])){
  $id = $_POST['hidden'];
  
  $_SESSION['id'] = $_POST['hidden'];
  $sql = "select * from productinfo where id=$id";
  $result = mysqli_query($connection,$sql);
  while ($rows = mysqli_fetch_array($result)) {
    $_SESSION['imgurl'] = $imgurl1 = $rows['imgurl'];
    $_SESSION['imgname'] = $imgname = $rows['imagename'];
    $_SESSION['price'] = $imgprice = $rows['price'];
    $_SESSION['company_name'] = $company_name = $rows['company_name'];
    $_SESSION['mfg_date'] = $mfg_date = $rows['mfg_date'];
    $_SESSION['exp_date'] = $exp_date = $rows['exp_date'];
    $_SESSION['description'] = $description = $rows['description'];
  }
}

}  
}elseif (isset($_POST['orderall'])){
  $user_name = $_SESSION['user_name'];
  $email = $_SESSION['email'];
  include_once("config.php");
  $counter = 0;
  $select_for_display = "select medicin_id from $user_name";
  $result = mysqli_query($connection,$select_for_display);
  while ($rows = mysqli_fetch_array($result)) {
    $medicin_id[$counter] = $rows['medicin_id'];
    $counter++;
  }
  $loop = 1;
  for ($i=0; $i <$counter ; $i++) { 

  $sql = "select * from productinfo where id=$medicin_id[$i]";
  $result = mysqli_query($connection,$sql);
  while ($rows = mysqli_fetch_array($result)) {
    $_SESSION['imgurl'] = $imgurl1[$i] = $rows['imgurl'];
    $_SESSION['imgname'] = $imgname[$i] = $rows['imagename'];
    $_SESSION['price'] = $imgprice[$i] = $rows['price'];
    $_SESSION['company_name'] = $company_name[$i] = $rows['company_name'];
    $_SESSION['mfg_date'] = $mfg_date[$i] = $rows['mfg_date'];
    $_SESSION['exp_date'] = $exp_date[$i] = $rows['exp_date'];
    $_SESSION['description'] = $description[$i] = $rows['description'];
    }
  }
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | Buy</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/buy.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<!-- <script src="js/jquery.equalheights.js"></script> -->
<script src="js/jquery.ui.totop.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
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
<div id="middle_area">
<h2>Youer Selected Product</h2>
<?php if (isset($loop)) {
  for ($i=0; $i <$counter ; $i++) { 
    echo "<div class=left_area>";
    echo "<div class=left_image_box>";
    echo "<img src=";
    if (isset($imgurl1[$i])) {
      echo $imgurl1[$i];
    }echo ">";
    echo "</div>";
    echo "<div class=right_area>";
    echo "<h4> Name :";
    if (isset($imgname[$i])) {
    echo $imgname[$i];
    }
    echo "</h4><br>";
    echo "<h4> Price :";
    if (isset($imgprice[$i])) {
    echo $imgprice[$i];
    }
    echo "</h4><br>";
    echo "<h4> mfg Date :";
    if (isset($mfg_date[$i])) {
    echo $mfg_date[$i];
    }
    echo "Exp Date :";
    if (isset($exp_date[$i])) {
    echo $exp_date[$i];
    }
    echo "</h4><br>";
    echo "<h4> Company :";
    if (isset($company_name[$i])) {
    echo $company_name[$i];
    }
    echo "</h4><br>";
    echo "<h4> Description :";
    echo "</h4>";
    echo "<p>";
    if (isset($description[$i])) {
    echo $description[$i];
    }
    echo "</p>";
    echo "</div>";
  }
}else{
  echo "<div class=left_area>";
    echo "<div class=left_image_box>";
    echo "<img src=";
    if (isset($imgurl1)) {
      echo $imgurl1;
    }echo ">";
    echo "</div>";
    echo "<div class=right_area>";
    echo "<h4> Name :";
    if (isset($imgname)) {
    echo $imgname;
    }
    echo "</h4><br>";
    echo "<h4> Price :";
    if (isset($imgprice)) {
    echo $imgprice;
    }
    echo "</h4><br>";
    echo "<h4> mfg Date :";
    if (isset($mfg_date)) {
    echo $mfg_date;
    }
    echo "Exp Date :";
    if (isset($exp_date)) {
    echo $exp_date;
    }
    echo "</h4><br>";
    echo "<h4> Company :";
    if (isset($company_name)) {
    echo $company_name;
    }
    echo "</h4><br>";
    echo "<h4> Description :";
    echo "</h4>";
    echo "<p>";
    if (isset($description)) {
    echo $description;
    }
    echo "</p>";
    echo "";
}
?>
  <!-- <div class="left_area">
    <div class="left_image_box"><img src="<?php //if (isset($imgurl1)) {
  //    echo $imgurl1;
  //  }?>"></div>
  <div class="right_area">

  <h4> Name :  <?php //if (isset($imgname)) {
   // echo $imgname;
  //}?></h4><br>

  <h4> Price :  <?php //if (isset($imgprice)) {
   //echo $imgprice;
  //}?> </h4><br>

  
  <h4> mfg Date : <?php //if (isset($mfg_date)) {
   // echo $mfg_date;

  //}?>  Exp Date : <?php// if (isset($exp_date)) {
   // echo $exp_date;
  //}?>     </h4><br>

  
  <h4> Company : <?php //if (isset($company_name)) {
   // echo $company_name;
  //}?></h4><br>

  <h4>Description : </h4> <p> <?php //if (isset($description)) {
   //echo $description;
  //}?></p>
 -->
  <form method="post" action="payment.php" >
    <h4 class="uniq">Qty : <input id="qty" type="number" name="qty" min="0" max="20">  Phone-no : <input id="Phone-no" type="text" name="Phone-no"> </h4> <br>
    
    <td class="text-left"><input type="text" name="address" id="address" placeholder="Your Address:"></td><br>
    <input type="submit" id="payment" name=<?php if (isset($loop)){
  echo "payment1";
} 
else{
echo "payment";  
}
?> value="Payment">
  </form>
  </div>
</div>
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