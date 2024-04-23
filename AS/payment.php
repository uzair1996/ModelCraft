<!DOCTYPE html>
<html>
<head>
	<title>Augmented Shopping</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/detail.css">
  <link rel="stylesheet" type="text/css" href="css/payment.css">
</head>

<section class="checkout">
<div class="checkoutleft">
  <h4 class="checkout-heading">Augmented Shopping</h4>
  <!-- <h6 class="subtitle">cart &nbsp;<i class="fa fa-angle-right"></i>&nbsp; customer information</h6><br> -->
  <h5>Payment Method</h5><hr>
  <form action="#" method="post">
    <div class="tablelike">
      <table>
        <caption>Credit card</caption>
        <tr><td colspan="3"><input id="ccnumber" type="number" placeholder="Card number" name="ccnumber" required/></td></tr>
        <tr>
          <td><input type="text" placeholder="Card holder name" name="ccname" required/></td>
          <td><input type="date" data-date="" data-date-format="MM YYYY" placeholder="MM/YY" name="ccdate" required/></td>
          <td><input id="cvvvv" type="number" placeholder="CVV" name="cvv" required/></td>
        </tr>
      </table>
    </div>
    <br>
    <input type="submit" class="beautifulbtn" value="Submit" name="submit"/>
  </form>
</div>
<div class="checkoutright">

</div>
</section>
</html>
