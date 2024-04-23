<?php 
  include_once("config.php");
  if (isset($_POST['procurement'])) {
  	if(!empty($_POST['imgurl']) && !empty($_POST['medicin-name']) && !empty($_POST['company-name']) && !empty($_POST['mfg-Date']) && !empty($_POST['exp-date']) && !empty($_POST['price']) && !empty($_POST['description'])){
  		$imgurl = $_POST['imgurl'];
  		$medicin_name = $_POST['medicin-name'];
  		$company_name = $_POST['company-name'];
  		$mfg_date = $_POST['mfg-Date'];
  		$exp_date = $_POST['exp-date'];
  		$price = $_POST['price'];
  		$description = $_POST['description'];

  		$sql = "insert into buyproductinfo(imgurl, imagename, company_name, price, mfg_date, exp_date, description)values('$imgurl','$medicin_name','$company_name','$price','$mfg_date','$exp_date','$description')";
        $result = mysqli_query($connection,$sql);
        if ($result) {
        	header('location: procurement.php');
        }else{
        	$message = "not uploaded";
        	echo "not";
        }

  	}
  }else{

  		$counter = 0;
  		$sql = "select * from buyproductinfo ORDER BY price";
  		$result = mysqli_query($connection,$sql);
  		if ($result) {
  			while($rows = mysqli_fetch_array($result)){
  			$id[$counter] = $rows['id'];
  			$imgurl[$counter] = $rows['imgurl'];
  			$medicin_name[$counter] = $rows['imagename'];
  			$company_name[$counter] = $rows['company_name'];
  			$mfg_date[$counter] = $rows['mfg_date'];
  			$exp_date[$counter] = $rows['exp_date'];
  			$price[$counter] = $rows['price'];
  			$description[$counter] = $rows['description'];
  			$counter++;
  		}
  		}else{
  			echo "not";
  			// echo "string";
  		}
  		
  	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | Procurements</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/box.css">
<script src="js/jquery.js"></script>
<!-- <script src="js/jquery.easing.1.3.js"></script> -->
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
          <li ><a href="products.php">Products</a></li>
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
		  <li class="current"><a href="procurement.php">Procurement</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </nav>
</header>
<div class="cart"><br>
<?php 
  for ($i=0; $i < $counter ; $i++) {
  	echo "<div class=cartlayout>";
  	echo "<form action=nextprocurement.php method=post>";
  	echo "<div class=imagepreview>";
  	echo "<img src=images/";
  if (isset($imgurl)) {
      echo $imgurl[$i];
  }
  echo "></div>";
  echo "<div class=detail>";
  echo "<div class=medicin-name id=detail-view>Name : ";if (isset($medicin_name)) {
  	echo $medicin_name[$i];
  }
  echo "</div>";
  echo "<div class=company-name id=detail-view> Company Name : ";if (isset($company_name)) {
  	echo $company_name[$i];
  }
  echo "</div>";
  echo "<div class=mfg-Date id=detail-view> MFG DATE : ";if (isset($mfg_date)) {
  	echo $mfg_date[$i];
  }
  echo "</div>";
  echo "<div class=exp-date id=detail-view> EXP DATE :";if (isset($exp_date)) {
  	echo $exp_date[$i];
  }
  echo "</div>";
  echo "<div class=price id=detail-view> PRICE :";if (isset($price)) {
  	echo "Rs :".$price[$i];
  }
  echo "</div>";
  echo "<div class=exp-date id=detail-view> Description :";if (isset($description)) {
  	echo $description[$i];
  }
  echo "<input type=number name=qty id=enter-qty placeholder=qty>";
  echo "<input type=hidden name=hidden value=";if (isset($id)) {
  	echo $id[$i];
  }
  echo ">";
  echo "<input type=submit name=get value=Get>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</form>";
  echo "</br>";
    
 } 
?>
</div>
<div class="all-order">
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