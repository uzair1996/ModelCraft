<?php
include_once("db.php");
session_start();
$select_product = "select * from product_main_table";
$select_product_result = mysqli_query($connection,$select_product);
$counter = 0;
if($select_product_result){
    while ($rows = mysqli_fetch_array($select_product_result)) {
      $product_id[$counter] = $rows['product_id'];
      $product_name[$counter] = $rows['product_name'];
      $url[$counter] = $rows['screenshots'];
      $price[$counter] = $rows['price'];
      $color[$counter] = $rows['color'];
      $m_name[$counter] = $rows['manufacturer_name'];
      $description[$counter] = $rows['description'];
      $specification[$counter] = $rows['specification'];
      $counter++;
   }
  }
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Augmented Shopping</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
</head>
<body>
	<section class="header-container">
		<div class="header">
			<header>
				<div class="logo">
					<img src="logos/islogo.png" alt="websitelogo">
				</div>
				<div class="navigation">
					<h3>Augmented Shopping</h3>
					<nav>
						<ul class="main-nav">
							<li><a href="">Home</a></li>
							<li><a href="">Feature</a></li>
							<li><a href="">Shop</a></li>
							<li><a href="">Contect Us</a></li>
						</ul>
					</nav>
				</div>
			
				<div class="right-navigation">
					<nav>
						<ul class="main-nav">
							<?php if(isset($_SESSION['user_name'])){ ?>
							<li><button class="login-logout" onclick="gotourllogout()"><i class="fa fa-sign-out"></i></bittun></li>
							<?php }else{ ?>
							<li><button class="login-logout" id="myBtn"><i class="fa fa-user"></i></bittun></li>
							<?php } ?>
							<li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
		<div class="headings-tags">
			<h1>Shop Here too Easily.</h1>
			<h2>See product's in &nbsp<span>AR</span>&nbsp View</h2>
		</div>

		<div id="myModal" class="modal">
  			<div class="modal-content">
  				<div class="modal-header">
      				<span class="close">&times;</span>
    			</div>
    			<div class="form-logo">
    				<img src="logos/islogo.png">
    			</div>

    			<div class="login-form">
    				<form action="login.php" method="POST">
    					<div class="input-type">
    					<i class="fa fa-user">&nbsp &nbsp&nbsp<input type="email" name="c_email" required placeholder="Email" required></i>
    						
    					</div>
    					<div class="input-type">
    						<i class="fa fa-key">&nbsp &nbsp&nbsp<input type="password" name="c_password" required placeholder="Password" required></i>
    					</div>
    					<input type="submit" name="c_login" value="Login">
    					<a href="">Forgot Password ?</a>
    					<p><?php if (isset($_GET['msg'])) {
    						echo $_GET['msg'];
    					} ?></p>
    				</form>
    			</div>
    			<div class="reg-button">
    				<a href="register.php">SingUp</a>		
    			</div>
  			</div>

		</div>

	</section>

	<section class="product-section">
		<div class="product-upper-section">
			<h4>Product's</h4>
		</div>
		<div class="product-lower-setcion">
			<?php for ($x = 0; $x < $counter; $x++) {
				echo "<div class=product-div>";
				echo "<img src=images/";if(isset($url[$x])) {
                        echo $url[$x];
                        }
                echo  " alt=object image>";
                echo "<div class=hover-div>";
                echo "<button onclick=gotourl(";if(isset($product_id[$x])) {
                        echo $product_id[$x];
                        }
                echo ")>Detail" .'<i class="fa fa-eye"></i>';
                echo "</button>";
				echo "<button onclick=window.open('3dviewsfile/sn.html','jbnWindow','width=600,height=400,left=10,top=10,scrollbars=yes,menubar=no'); return false;>3D" .'<i class="fa fa-eye"></i> ';
				echo "</button>";
				echo "<button class=ar>AR" .'<i class="fa fa-eye"></i>' ;
				echo "</button>";
				echo "</div>";	
				echo "<hr>";
				echo "<h5>";if (isset($product_name[$x])) {
                      	echo $product_name[$x];
                      	}
				echo "</h5>";
				echo "</div>";
				}
			?>
		</div>
	</section>

	<footer>
		<div class="footer-left foo">
			<h5>Menu</h5>
			</br>
			<a>about this </a> &nbsp &nbsp &nbsp <a> Contact us</a>
		</div>
		<div class="footer-middle foo">
			<h5>NewsLetter &nbsp SINGUP</h5>
			<input type="email" name="serch" placeholder="Email:">
			<a> join </a>
		</div>
		<div class="footer-right foo">
			<h5>SOCIAL LINK</h5>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-youtube"></i>

		</div>
		<div class="aouther-line">
			<p>Copyright © 2018 Augmented Shopping • Using Augmented Reality • Ecommerce Software by Table Number 3</p>
		</div>

	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/resources.js"></script>
	<!-- <script language="javascript" type="text/javascript">
    	window.location.href="login.jsp?backurl="+window.location.href;
	</script> -->
</body>
</html>