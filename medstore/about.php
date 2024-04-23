<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Medstore | About</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
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
          <li class="current"><a href="about.php">ABOUT</a>
            <ul>
              <li><a href="#">OUR TEAM</a></li>
            </ul>
          </li>
          <li ><a href="products.php">Produtcs</a></li>
          <li><a href="register.php">REGISTER</a></li>
           <li><?php if(isset($_SESSION['username'])){ ?>
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
    <div class="grid_12">
      <h2 class="indent-2">Company</h2>
    </div>
    <div class="grid_6"> <span class="lead">MedStore.com, India Ki Pharmacy, is brought to you by the Table-no3 & Company – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines. At MedStore.com, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in India. You can buy from any corner of the country - with just a few clicks of the mouse.</div>
    <div class="grid_3"> <img src="images/qmark.jpeg" alt=""> </div>
    <div class="grid_3"> <img src="images/page2-img2.jpg" alt=""> </div>
    <div class="clear"></div>
  </div>
  <div class="bg-3 bot-1">
    <div class="container_12">
      <div class="grid_12">
        <h2 class="indent-2">People</h2>
      </div>
      <div class="grid_6">  Heavy traffic, lack of parking, monsoons, shop closed, forgetfulness… these are some of the reasons that could lead to skipping of vital medications. Since taking medicines regularly is a critical component of managing chronic medical conditions, it’s best not to run out of essential medicines. Just log on to MedStore.com, place your order online and have your medicines delivered to you – without leaving the comfort of your home.

        What’s more, with easy access to reliable drug information, you get to know all about your medicine at MedStore.com, and once you’re a MedStore customer, you’ll get regular refill reminders, so you’ll never again come up short of medicines. 
        <div class="lists">
          <div> <strong class="text-info">Manager</strong>
            <ul class="list">
              <li><a href="#">Uzair Riyaz</a></li>
              <li><a href="#">MM Furkan</a></li>
            </ul>
          </div>
          <div> <strong class="text-info">Director</strong>
            <ul class="list">
              <li><a href="#">Sk Sameer</a></li>
              <li><a href="#">Maria Khedwala</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="grid_6">
        <ul class="list-people">
          <li><img src="images/human1.jpg" alt=""></li>
          <li><img src="images/human2.jpg" alt=""></li>
          <li><img src="images/human3.jpg" alt=""></li>
          <li><img src="images/human4.jpg" alt=""></li>
          <li><img src="images/human6.jpg" alt=""></li>
          <!-- <li><img src="images/page2-img8.jpg" alt=""></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="container_12 bot-1">
    <div class="grid_12">
      <h2 class="indent-2">Clients</h2>
    </div>
    <div class="grid_6">At MedStore.com, we not only provide you with a wide range of medicines listed under various categories, we also offer a wide choice of OTC products including wellness products, vitamins, diet/fitness supplements, herbal products, pain relievers, diabetic care kits, baby/mother care products, beauty care products and surgical supplies.
    MedStore.com continues a legacy of 100 years of success in the pharmaceutical industry. We are committed to provide safe, reliable and affordable medicines as well as a customer service philosophy that is worthy of our valued customers’ loyalty. We offer a superior online shopping experience, which includes ease of navigation and absolute transactional security.</div>
    <div class="grid_2"><a href="#"><img src="images/retv.png" alt=""></a></div>
    <div class="grid_2"><a href="#"><img src="images/rogers.jpg" alt=""></a></div>
    <div class="grid_2"><a href="#"><img src="images/vtt.jpg" alt=""></a></div>
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
