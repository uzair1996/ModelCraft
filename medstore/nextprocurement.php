<?php 
include_once('config.php');
if (isset($_POST['get'])) {
	$id = $_POST['hidden'];
	$qty = $_POST['qty'];
	$sql = "select * from buyproductinfo where id = $id";
  		$result = mysqli_query($connection,$sql);
  		if ($result) {
  			$rows = mysqli_fetch_array($result);
  			$imgurl = $rows['imgur'];
  			$medicin_name = $rows['imagename'];
  			$company_name = $rows['company_name'];
  			$mfg_date = $rows['mfg_date'];
  			$exp_date = $rows['exp_date'];
  			$price = $rows['price'];
  			$description = $rows['description'];

  			$insert = "insert into productinfo(imgurl, imagename, price, qty, mfg_date, exp_date, description, company_name)values('$imgurl','$medicin_name','$price','$qty','$mfg_date','$exp_date','$description','$company_name')";
        	$result = mysqli_query($connection,$insert);
        	if ($result) {
        		header('location: procurement.php');
        	}else{
        		$message = "not uploaded";
        		echo "not";
        }

  		}else{
  			echo "not";
  		}
  		
}
 ?>