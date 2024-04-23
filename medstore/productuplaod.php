<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | upload</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/buy.css"> -->
<link rel="stylesheet" href="css/uploadfile.css">

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
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
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
          <li class="current"><a href="prodcutupload.php">upload</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </nav>
</header>

<div class="message"><br><br><br><br>
<form action="procurement.php" method="post">
<div class="imagepreview">
  <img id="output_image"/>
</div>
<div class="upload-box">
  <input type="file" accept="image/*" name="imgurl" onchange="preview_image(event) ">
</div>
<div class="upload-details"></div>

  <div class="medicin-name" id="textedit">Name :<input type="text" name="medicin-name"><br></div>
  <div class="company-name"  id="textedit">Company Name :<input type="text" name="company-name"><br></div>
  <div class="mfd-date" id="textedit">mfg-Date :<input type="Date" name="mfg-Date"><br></div>
  <div class="exp-date" id="textedit">Exp-Date :<input type="Date" name="exp-date"><br></div>
  <div class="medicin-price" id="textedit">Price for 1 :<input type="number" name="price"><br></div>
  <div class="medicin-description" id="textedit">Description :<input type="text" name="description"><br></div>
  <input type="submit" name="procurement" value="upload">
</form>
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