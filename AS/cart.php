<?php
include_once("db.php");
session_start();

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $select_product = "select * from $user_name";
    $select_product_result = mysqli_query($connection,$select_product);
    $counter = 0;
    if($select_product_result){
      while ($rows = mysqli_fetch_array($select_product_result)) {
      $product_id[$counter] = $rows['product_id'];
      $product_name[$counter] = $rows['productname'];
      $url[$counter] = $rows['url'];
      $price[$counter] = $rows['price'];
      $qty[$counter] = $rows['qty'];
      $counter++;
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Augmented Shopping</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <link rel="stylesheet" type="text/css" href="css/othermediaquery.css">


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
      
    <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
              <span class="close">&times;</span>
          </div>
          <div class="form-logo">
            <img src="logos/islogo.png">
          </div>

          <div class="login-form">
            <form action="" method="POST">
              <div class="input-type">
                <img src="logos/islogo.png">
                <input type="text" name="c_email" required placeholder="Name:">
              </div>
              <div class="input-type">
                <img src="logos/islogo.png">
                <input type="text" name="c_name" required placeholder="Email:">
              </div>
              <input type="submit" name="c_submit" value="Login">
              <a href="">Forgot Password ?</a>
            </form>
          </div>
          <div class="reg-button">
            <a href="#0">SingUp</a>
          </div>
        </div>

    </div>
  </section>

  <section class="cart-upper-section">
    <h4><a href="index.php">Home &nbsp <span> >> </span> &nbsp </a>Your Shopping cart</h4>
    <h3>My Cart</h3>
    <div class="cart-table-div">
      <table class="customers">
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>
        </tr>
        
          <?php for ($x = 0; $x < $counter; $x++) {
            echo "<tr>";
            echo "<td><img src=images/";if (isset($url[$x])) {
              echo $url[$x];
            }
          echo "></td>";
          echo "<td>"; if (isset($price[$x])) {
            echo $price[$x];
          }
          echo "</td>";
          echo "<td>"; if (isset($qty[$x])) {
            echo $qty[$x];
          }
          echo "</td>";
          echo "<td>"; if (isset($price[$x])) {
            echo $price[$x] * $qty[$x];
          }
          echo "<a href=itemdelet.php?id=";echo $product_id[$x];
          echo "><span class=close>&times;</span></a></td></tr>";
        }
        ?>
      </table>
    </div>
    <div class="right-side-view">
      <button class="buttons" onclick="gotoshipping()">Check Outs</button>
      <img src="logos/cards.png">
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

</body>
</html>
