<!DOCTYPE html>
<html lang="en">
<head>
<title>Medstore | Login</title>
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
          <li class="current"><a href="products.php">Login</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </nav>
</header>
<div id="content">
  <div class="container_12 bot-1">
    <div class="grid_12">
      <h2 class="indent-2">please Login to proceed</h2>
    </div>
    <div class="grid_5">
      <form id="form" action="reallogin.php" method="post" name="vform" onsubmit="return Validate()">
        <div class="success">Login successful<br>
          <strong>You Can Buy here...</strong> </div>
        <fieldset>
          <label class="email"> <span class="title">E-mail*</span>
            <input type="email" name="email">
            <div id="email_error"></div>
            <br class="clear">
            </label>
          <label class="password"> <span class="title">Password*</span>
            <input type="password" name="password">
            <div id="password_error"></div>
            <br class="clear">  
            </label>
          <div class="clear"></div><br>
          <input type="submit" id="btn" name="login_btn" value="Login">
          <span><?php if(isset($_GET['msg'])){
            echo $_GET['msg'];
            }?></span>
        </fieldset>
      </form>
      <br>
      <label>Forgot password<a href="Forgot.php"><h3>Forgot</h3></a></label><br>
      <label>If Not Register Then Click For----><a href="register.php"><h>REGISTER</h></a></label>
    </div>
    <div class="grid_6 push_1">
      <div class="map">
        <img src="images/login.jpg">
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

<script type="text/javascript">
  var email = document.forms["vform"]["email"];
  var password= document.forms["vform"]["password"];

  var email_error = document.getElementById("email_error");
  var password_error = document.getElementById("password_error");

  email.addEventListener("blur", emailVerify, true);
  password.addEventListener("blur", passwordVerify, true);

  function Validate(){

    if (email.value == "") {
    email.style.border = "1px solid red";
    email_error.textContent = "email is required";
    email.focus();
    return false;
  }

  if (password.value == "") {
    password.style.border = "1px solid red";
    password_error.textContent = "password is required";
    password.focus();
    return false;
  }

}function emailVerify(){
  if (email.value !=  "") {
    email.style.border = "1px solid #5E6E66";
    emailerror.innerHTML = "";
    return true;
  }
}

  function passwordVerify(){
  if (password.value !=  "") {
    password.style.border = "1px solid #5E6E66";
    password_error.innerHTML = "";
    return true;
  }
}
</script>