<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedStore</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        easing: 'easeOutQuad',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: 'fade',
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(
    function () {
        $('.carousel1').carouFredSel({
            auto: false,
            prev: '.prev1',
            next: '.next1',
            width: 960,
            items: {
                visible: {
                    min: 4,
                    max: 4
                },
            },
            responsive: false,
            scroll: 1,
            mousewheel: false,
            swipe: {
                onMouse: false,
                onTouch: false
            }
        });
    });
</script>
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
      <h2>    India Ka Smart Pharmacy</h2>
      <h3 class="welcome_name"><?php if (isset($_GET['msg'])) {
        echo $_GET['msg'];
      } ?></h2>
    </div>
  </div>
  <nav>
   <div class="container_12">
      <div class="grid_12">
        <ul class="sf-menu">
          <li class="current"><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a>
            <ul>
              <li><a href="#">OUR TEAM</a></li>
            </ul>
          </li>
          <li class=""><a href="products.php">Produtcs</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><?php if(isset($_SESSION['user_name'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a></li>
<?php }else{ ?>
  <a class="link" href="" style="text-decoration:none">login</a>
<?php } ?>
<ul class="sub">
        <li><a href="login.php">CUSTOMER</a></li>
        <li><a href="clogin.php">COMPANY</a></li>
        <li><a href="login.php">ADMIN</a></li>
      </ul>
</li>
          <li><?php if(isset($_SESSION['user_name'])){ ?>
  <a class="link" href="cart.php" style="text-decoration:none">Cart</a>
<?php }else{ ?>
<?php } ?></li>
			<li><?php if(isset($_SESSION['company_name'])){ ?>
  <a class="link" href="productuplaod.php" style="text-decoration:none">Upload</a>
<?php }else{ ?>
<?php } ?></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </nav>
</header>
<div id="content">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/medicine2.jpg" alt="" >
            <div class="banner">All Medicine Are Available Here</div>
          </li>
          <li><img src="images/medicine4.jpg" alt="" >
            <div class="banner">Buy A Medicine With Low Cost</div>
          </li>
          <li><img src="images/medicine3.jpg" alt="" >
            <div class="banner">It's Easy To Buy Here</div>
          </li>
          <li><img src="images/medicine5.jpg" alt="" >
            <div class="banner">Need To Login For Buying Medicine</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-2">
    <div class="container_12">
      <div class="grid_7">
        <div class="border-1">
          <h2 class="indent-1">About Us</h2>
          <div class="wrap box-2"> <img src="images/about-us.jpg" alt="">
            <p class="text-info"><a href="#">Click here</a> for more info about this website created by Table-no3.in </p>
            <p>Medstore, India Ka fastest Pharmacy, is brought to you by the NSDveloper and Team – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines. At netmeds.com, we help you look after your own health effortlessly as well as take care of loved ones wherever they may reside in India. You can buy and send medicines from any corner of the country - with just a few clicks of the mouse.</p>
            At Medstore, we make a wide range of prescription medicines and other health products conveniently available all across India. Even second and third tier cities and rural villages can now have access to the latest medicines. Since we also offer generic alternatives to most medicines, online buyers can expect significant savings.<br>
            <a href="#" class="btn">more</a> </div>
        </div>
      </div>
      <div class="grid_5">
        <h2 class="indent-1">Latest News</h2>
        <ul class="list-news">
          <li>
            <div class="wrap">
              <div class="badge">27<span>APR</span></div>
              <span class="text-info">Medstore to open 10 stores in Chennai</span><br>
              <a href="#">April 27.03.45</a> </div>
            Medstore, the healthcare ecommerce portal, is venturing into the brick-and-mortar space with the opening of 10 physical stores in Chennai. The company plans start off with Chennai and gradually expand its offline reach to other metro cities in the country. </li>
          <li>
            <div class="wrap">
              <div class="badge">29<span>APR</span></div>
              <span class="text-info">Technological tricks to ease medical appointments at 50</span><br>
              <a href="#">April 29.03.45</a> </div>
            Studies in the recent past have shown how prone people in their 50s are to an array of health-related issues, ranging from the common cold to a cardiac arrest. The quinquagenarian phase thus demands constant monitoring and medical check-ups. </li>
        </ul>
      </div>
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