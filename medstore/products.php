<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore | Products</title>
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
          <li class="current"><a href="products.php">Products</a></li>
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
<div id="content">
  <div class="container_12 bot-1">
    <ul class="list-project">
    <div id="box">
    <form action="buy.php" method="post">
      <li class="grid_3" id="box"> <img id="imginbox" src="images/asacol.jpeg" alt="">
        <h4>Asacol </h4>
          Price 56 Rs. <br>
        <input type="hidden" name="hidden" value="1">
        <input type="submit" id="btnnew" name="cart" value="cart">
        <input type="submit" id="btnnew" value="Buy"></li>
</form>
</div>
    <form action="buy.php" method="post">
      <li class="grid_3" id="box"> <img id="imginbox" src="images/avodart.jpeg" alt="">
        <h4>Avodart</h4>
          Price 52 Rs.<br>
          <input type="hidden" name="hidden" value="2">
        <input type="submit" id="btnnew" name="cart" value="cart">
        <input type="submit" id="btnnew" value="Buy"></li>
</form>
    <form action="buy.php" method="post">
      <li class="grid_3" id="box"> <img id="imginbox" src="images/creon.jpeg" alt="">
        <h4>Creon</h4>
        Price 90 Rs.<br>
         <input type="hidden" name="hidden" value="3">
        <input type="submit" id="btnnew" name="cart" value="cart">
        <input type="submit" id="btnnew" value="Buy"></li>
</form>
    <form action="buy.php" method="post">      
      <li class="grid_3" id="box"> <img id="imginbox" src="images/tagment.jpeg" alt="">
        <h4>Tagment</h4>
        Price 110 Rs.<br>
        <input type="hidden" name="hidden" value="4">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">      
      <li class="grid_3" id="box"> <img id="imginbox" src="images/pepcid.jpeg" alt="">
        <h4>Pepcid </h4>
        Price 30 Rs. <br>
        <input type="hidden" name="hidden" value="5">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_5" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">
      <li class="grid_3" id="box"> <img id="imginbox" src="images/bentyl.jpeg" alt="">
        <h4>Bentyl</h4>
        Price 72 Rs.<br>
        <input type="hidden" name="hidden" value="6">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_6" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">
      <li class="grid_3" id="box"> <img id="imginbox" src="images/azulfidine.jpeg" alt="">
        <h4>Azulfidine</h4>
        Price 50 Rs.<br>
        <input type="hidden" name="hidden" value="7">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_7" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">      
      <li class="grid_3" id="box"> <img id="imginbox" src="images/canasa.jpeg" alt="">
        <h4>Canasa </h4>
        Price 80 Rs.<br>
        <input type="hidden" name="hidden" value="8">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_8" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">      
      <li class="grid_3" id="box"> <img id="imginbox" src="images/carafate.jpeg" alt="">
        <h4>Carafate </h4>
        Price 46 Rs.<br>
        <input type="hidden" name="hidden" value="9">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_9" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">  
      <li class="grid_3" id="box"> <img id="imginbox" src="images/cytotec.jpeg" alt="">
        <h4>Cytotec </h4>
        Price 56 Rs.<br>
        <input type="hidden" name="hidden" value="10">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_10" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">  
      <li class="grid_3" id="box"> <img id="imginbox" src="images/dipentum.jpeg" alt="">
        <h4>Dipentum </h4>
        Price 16 Rs.<br>
        <input type="hidden" name="hidden" value="11">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_11" value="Buy" ></li>
</form>
    <form action="buy.php" method="post">  
      <li class="grid_3" id="box"> <img id="imginbox" src="images/levbid.jpeg" alt="">
        <h4>Levbid </h4>
        Price 186 Rs.<br>
        <input type="hidden" name="hidden" value="12">
        <input type="submit" id="btnnew" name="btn_12" value="Cart">
        <input type="submit" id="btnnew" name="btn_12" value="Buy" ></li>
</form>
    </ul>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_8"> <span>Medstore &copy; 2045 | Privacy Policy | Design by <a href="http://www.Table-no3.com/">Table-no3.com</a></span> </div>
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