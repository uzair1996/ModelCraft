<!DOCTYPE html>
<html>
<head>
	<title>Augmented Shopping</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/detail.css">
  <link rel="stylesheet" type="text/css" href="css/shipcss.css">
</head>

<section class="checkout">
<div class="checkoutleft">
  <h4 class="checkout-heading">Augmented Shopping</h4>
  <!-- <h6 class="subtitle">cart &nbsp;<i class="fa fa-angle-right"></i>&nbsp; customer information</h6><br> -->
  <h5>Shipping Information</h5><hr>
  <form action="#" method="post">
    <input type="text" placeholder="Enter your Address" name="address" required/><br><br>
    <input type="text" placeholder="Apt, suite etc" name="add" required/><br><br>
    <input type="text" placeholder="city" name="city" required/><br><br>
    <select placeholder="country" class="select-country" name="countrylist">
      <option selected hidden>country</option>
      <option value="india">India</option>
      <option value="usa">USA</option>
      <option value="europe">Europe</option>
      <option value="uae">UAE</option>
    </select>
    <select placeholder="state" class="select-state" name="statelist">
      <option selected hidden>state</option>
      <option value="maharashtra">Maharashtra</option>
      <option value="goa">Goa</option>
      <option value="simla">Simla</option>
      <option value="hp">Himachal Pradesh</option>
    </select>
    <input type="number" placeholder="pincode" name="pincode" required/>
    <br><br>
    <input type="number" class="phone" placeholder="phone" name="phone" required/>
    <br><br>
    <input type="checkbox"> 	Save this information for next time<br><br>
    <input type="submit" class="beautifulbtn" value="Submit" name="submit"/>
  </form>
</div>
<div class="checkoutright">

</div>
</section>
</html>
