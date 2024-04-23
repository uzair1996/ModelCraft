<?php
session_start();
if (isset($_POST['payment'])) {
  // session_start();
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$user_id = $_SESSION['user_id'];
$_SESSION['id'] = $id = $_SESSION['id'];
$_SESSION['user_id'] = $user_id = $_SESSION['user_id'];
$_SESSION['address'] = $address = $_POST['address'];
$_SESSION['qty'] = $qty = $_POST['qty'];
$_SESSION['Phone-no'] = $Phone_no = $_POST['Phone-no'];
if(!$user_name){
  header("location: login.php");
}else{
  include_once("config.php");
$sql_product = "select * from productinfo where id= '".$id."'";
  $result_product = mysqli_query($connection,$sql_product);
  while ($rows = mysqli_fetch_array($result_product)) {
    $imgurl1 = $rows['imgurl'];
    $imgname = $rows['imagename'];
    $imgprice = $rows['price'];
    $company_name = $rows['company_name'];
    $mfg_date = $rows['mfg_date'];
    $exp_date = $rows['exp_date'];
    $description = $rows['description'];
  }
  $_SESSION['total_price'] =  $total_price = $imgprice;
  if($qty=='1' || $qty=='0'){
  $total_price = $imgprice;   
  }else{
    while ($qty>'1') {
    $total_price = $total_price + $imgprice;
    $qty--;
  }
  $_SESSION['total_price'] =$total_price;
  }
}
}elseif (isset($_POST['payment1'])) {
  $user_name = $_SESSION['user_name'];
  $email = $_SESSION['email'];
  $user_id = $_SESSION['user_id'];

  // session_start();  
  $counter = 0;
  include_once("config.php");
  $sql_product = "select * from $user_name";
  $result_product = mysqli_query($connection,$sql_product);
  while ($rows = mysqli_fetch_array($result_product)) {
    $medicin_qty[$counter] = $rows['qty'];
    $medicin_price[$counter] = $rows['price'];
    
    $total_price[$counter] = $rows['qty'] * $rows['price'];
    $counter++;
    // $imgurl1 = $rows['imgurl'];
    // $imgname = $rows['imagename'];
    // $imgprice = $rows['price'];
    // $company_name = $rows['company_name'];
    // $mfg_date = $rows['mfg_date'];
    // $exp_date = $rows['exp_date'];
    // $description = $rows['description'];
  }
  $loop = 1;
  $counter1=0;
  $query_for_select_from_both_table = "select * from productinfo where id in(select medicin_id from $user_name)";
  $resul_for_both_table = mysqli_query($connection,$query_for_select_from_both_table);
  while ($rows = mysqli_fetch_array($resul_for_both_table)) {
    $imgurl1[$counter1] = $rows['imgurl'];
    $imgname[$counter1] = $rows['imagename'];
    $imgprice[$counter1] = $rows['price'];
    $company_name[$counter1] = $rows['company_name'];
    $mfg_date[$counter1] = $rows['mfg_date'];
    $exp_date[$counter1] = $rows['exp_date'];
    $description[$counter1] = $rows['description'];
    $counter1++;
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
<div id="middle_area">
<h2>Here Is Your Bill....</h2>
 <div class="table-title">
<h3>Bill</h3>
</div> 

<table class="table-fill">
<?php if (isset($loop)) {
  for ($i=0; $i <$counter1 ; $i++) {

echo "<thead>";
echo "<tr>";
echo "<th class=text-left>Medicin Name</th>";
echo "<th class=text-left>";
if (isset($imgname[$i])) {
    echo $imgname[$i];
  }
echo "</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody class=table-hover>";
echo "<tr>";
echo "<th class=text-left>Company Name</th>";
echo "<th class=text-left>";
  if (isset($company_name[$i])) {
  echo $company_name[$i];
  }  

echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Mfg Date</td>";
echo "<td class=text-left>"; 
if (isset($mfg_date[$i])) {
    echo $mfg_date[$i];
  }
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Exp Date</td>";
echo "<td class=text-left>";
if (isset($exp_date[$i])) {
    echo $exp_date[$i];
  }
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Price for 1</td>";
echo "<td class=text-left>";
if (isset($imgprice[$i])) {
    echo $imgprice[$i];
  }
echo "</td>";
echo "<tr>";
echo "<td class=text-left>Quantity</td>";
echo "<td class=text-left>";
if (isset($loop)) {
  echo $medicin_qty[$i];
  }elseif (isset($_POST['qty'])) {
    if ($_POST['qty'] == 0) {
    echo "1";
    }else{
    echo $_POST['qty'];
    }  
  }
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td class=text-left>Total Amout</td>";
echo "<td class=text-left>";
if (isset($total_price[$i])) {
    echo $total_price[$i];
  }
echo "</td>";
echo "</tr>";
echo "</tbody>";
  }
}else{

  echo "<thead>";
echo "<tr>";
echo "<th class=text-left>Medicin Name</th>";
echo "<th class=text-left>";
if (isset($imgname)) {
    echo $imgname;
  }
echo "</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody class=table-hover>";
echo "<tr>";
echo "<td class=text-left>Company Name</td>";
echo "";  if (isset($company_name)) {
  echo $company_name;
  }  
  
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Mfg Date</td>";
echo "<td class=text-left>"; 
if (isset($mfg_date)) {
    echo $mfg_date;
  }
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Exp Date</td>";
echo "<td class=text-left>";
if (isset($exp_date)) {
    echo $exp_date;
  }
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=text-left>Price for 1</td>";
echo "<td class=text-left>";
if (isset($imgprice)) {
    echo $imgprice;
  }
echo "</td>";
echo "<tr>";
echo "<td class=text-left>Quantity</td>";
echo "<td class=text-left>";
if (isset($_POST['qty'])) {
  if ($_POST['qty'] == 0) {
    echo "1";
  }else{
    echo $_POST['qty'];
  }
  }
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td class=text-left>Total Amout</td>";
echo "<td class=text-left>";
if (isset($total_price)) {
    echo $total_price;
  }
echo "</td>";
echo "</tr>";
echo "</tbody";

  } ?>
</table>
<div class="table-title">
<h3>Customer Info</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Customer Name</th>
<th class="text-left"><?php if (isset($user_name)) {
    echo $user_name;
  }?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Customer Email</td>
<td class="text-left"><?php if (isset($email)) {
    echo $email;
  }?></td>
</tr>
<tr>
<td class="text-left">Customer Address</td>
<form method="post" action="order.php">
<td class="text-left"><?php if (isset($address)) {
    echo $address;
  }?></td>
</tr>
<input type="submit" name="order" value="Order" class="order_button">
</form>
</tbody>
</table>

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