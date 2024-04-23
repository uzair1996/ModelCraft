<?php
// ini_set('display_errors', '1');

include_once("config.php");
session_start();
if (isset($_POST['rigister_btn'])) {
  if(!empty($_POST['user_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['medicalname']) && !empty($_POST['repassword'])){
  session_start();
  $user_name = mysql_real_escape_string($_POST['user_name']);
  $email = mysql_real_escape_string($_POST['email']);
  $medicalname =mysql_real_escape_string($_POST['medicalname']);
  $password =mysql_real_escape_string($_POST['password']);
  $repassword =mysql_real_escape_string($_POST['repassword']);
    if ($password==$repassword) {
      $sql = "insert into registered_users(user_name, medicalname, email, password, repassword)values('$user_name','$medicalname','$email','$password','$repassword')";
      $result = mysqli_query($connection, $sql);
      if($result){
        if($result['email'] != $_POST['email']){
          header('location: login.php');
        $_SESSION['message'] = 'Yout are Now Logged in';
        }else{
          $message = "This is email is already exist ";
        }
      }else{
        $message = "Sorry there is an error";
      }
      
    }
    else{
      $pmessage = "Two password dosen't  Match";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Medstore | Register</title>
<meta charset="utf-8">
<link rel="icon" href=i"mages/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/register.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<!-- <script src="js/registercheck.js"></script> -->
<!-- <script src="js/forms.js"></script> -->
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
          <li ><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a>
            <ul>
              <li><a href="#">OUR TEAM</a></li>
            </ul>
          </li>
          <li><a href="products.php">Products</a></li>
          <li class="current"><a href="register.php">REGISTER</a></li>
           <li><?php if(isset($_SESSION['user_name'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a>
<?php }else{ ?>
  <a class="link" href="login.php" style="text-decoration:none">login</a>
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
      <h2 class="indent-2">Register Here...</h2>
    </div>
    <div class="grid_5">
      
        <div class="text-info">All fields with an * are required</div>
        <div class="success">Register form submitted!<br>
          <strong>You Can Buy here...</strong> </div>
      <form id="form" action="register.php" method="post" name="vform" onsubmit="return Validate()">
        <fieldset>
          <label class="name"> <span class="title">Name*</span>
            <input type="text" name="user_name" class="textInput" id="inputs">
            <div id="name_error" class="val_error"></div>
            <br class="clear">
            </label>
          
          
          <label class="medical"> <span class="title">Medical Name*</span>
            <input type="text"  name="medicalname" class="textInput" id="inputs">
            <div id="medicalname_error" class="val_error"></div>
            <br class="clear">
            </label>
          
          <label class="email"> <span class="title">E-mail*</span>
            <input type="email"  name="email" class="textInput" id="inputs">
            <div id="email_error" class="val_error"></div>
            <br class="clear">
            </label>
          
          <label class="password"> <span class="title">Password*</span>
            <input type="password" name="password" class="textInput" id="inputs">
            <div id="password_error" class="val_error"></div>
            <br class="clear">
          
          <label class="password"> <span class="title">Re-Enter Password*</span>
            <input type="password" name="repassword" class="textInput" id="inputs">
            <div id="repassword_error" class="val_error"></div>
            <br class="clear">  
            </label>
          <div class="clear"></div><br>
          <input type="submit" class="btnn" name="rigister_btn" value="Register">
          
        </fieldset>
      </form>
    </div>
    <div class="grid_6 push_1">
      <div class="map">
        <img src="images/register-online.jpg">
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
var user_name = document.forms["vform"]["user_name"];
var email = document.forms["vform"]["email"];
var medicalname = document.forms["vform"]["medicalname"];
var password= document.forms["vform"]["password"];
var repassword = document.forms["vform"]["repassword"];


var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var medicalname_error = document.getElementById("medicalname_error");
var password_error = document.getElementById("password_error");
var repassword_error = document.getElementById("repassword_error");

user_name.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
medicalname.addEventListener("blur", medicalnameVerify, true);
password.addEventListener("blur", passwordVerify, true);
repassword.addEventListener("blur", repasswordVerify, true);

function Validate(){
  if (user_name.value == "") {
    user_name.style.border = "1px solid red";
    name_error.textContent = "user_name is required";
    user_name.focus();
    return false;
  }

  if (email.value == "") {
    email.style.border = "1px solid red";
    email_error.textContent = "email is required";
    email.focus();
    return false;
  }
  if (medicalname.value == "") {
    medicalname.style.border = "1px solid red";
    medicalname_error.textContent = "medicalname is required";
    medicalname.focus();
    return false;
  }
  if (password.value == "") {
    password.style.border = "1px solid red";
    password_error.textContent = "password is required";
    password.focus();
    return false;
  }
  if (repassword.value == "") {
    repassword.style.border = "1px solid red";
    repassword_error.textContent = "repassword is required";
    repassword.focus();
    return false;
  }

  if (repassword.value != password.value) {
    repassword.style.border = "1px solid red";
    repassword_error.textContent = "!!!!!!The Two password Is Not match!!!!!!";
    repassword.focus();
    return false;
  }
  
}
function nameVerify(){
  if (user_name.value !=  "") {
    user_name.style.border = "1px solid #5E6E66";
    user_name_error.innerHTML = "";
    return true;
  }
}
function emailVerify(){
  if (email.value !=  "") {
    email.style.border = "1px solid #5E6E66";
    emailerror.innerHTML = "";
    return true;
  }
}function medicalnameVerify(){
  if (medicalname.value !=  "") {
    medicalname.style.border = "1px solid #5E6E66";
    medicalname_error.innerHTML = "";
    return true;
  }
}function passwordVerify(){
  if (password.value !=  "") {
    password.style.border = "1px solid #5E6E66";
    password_error.innerHTML = "";
    return true;
  }
}
function repasswordVerify(){
  if (repassword.value !=  "") {
    repassword.style.border = "1px solid #5E6E66";
    repassword_error.innerHTML = "";
    return true;
  }
}
</script>