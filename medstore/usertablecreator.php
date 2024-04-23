<?php
    echo "strinasdasdg";

// include_once("db.php");
// session_start(); 
    echo "string";
	
	$id = $_GET['id'];
    echo $id;

    echo "string";

	$user_id = $_SESSION['user_id'];
  	$user_name = $_SESSION['user_name'];
  	$email = $_SESSION['email'];

  	$sql = "select * from productinfo where id=$id";
  	$select_product = "select * from product_main_table where product_id = $id";
	$select_product_result = mysqli_query($connection,$select_product);
	
	$counter = 0;
	
	if($select_product_result){
    while ($rows = mysqli_fetch_array($select_product_result)) {
      $product_id[$counter] = $rows['product_id'];
      $product_name[$counter] = $rows['product_name'];
      $url[$counter] = $rows['screenshots'];
      $price[$counter] = $rows['price'];
      $color[$counter] = $rows['color'];
      $m_name[$counter] = $rows['manufacturer_name'];
      $description[$counter] = $rows['description'];
      $specification[$counter] = $rows['specification'];
      $counter++;
   }
  }
    echo "string";
  	
  	$create_table = "CREATE TABLE $user_name(
   	user_id   INT              NOT NULL,
   	product_id   INT              NOT NULL,
   	url   VARCHAR (25)     NOT NULL,
   	productname  VARCHAR(25)              NOT NULL,
   	qty  INT                 NOT NULL,
   	price   INT              NOT NULL
	)";

	$create_table_result = mysqli_query($connection,$create_table);
  	if($create_table_result){
    $qty = 1;
    $insert_table = "insert into $user_name(user_id, product_id, url, productname, qty, price)values('$user_id', $product_id[0] , $url[0] ,'$product_name[0]','$qty','$price[0]')";
    $insert_table_result = mysqli_query($connection,$insert_table);
    echo "string";

    header('location: cart.php');
  }else{
    echo "string";
    $select_for_insert = "select product_id from $user_name where product_id=$id";

    $select_for_insert_result = mysqli_query($connection,$select_for_insert);
    while ($check_rows = mysqli_fetch_array($select_for_insert_result)) {
      if($id == $check_rows['product_id']){
        $checking_medicin_id = $check_rows['product_id'];
      }
    }
    if(isset($checking_medicin_id)){
      $select_for_qty = "select qty from $user_name where user_id=$user_id and product_id =$id";
    $select_for_qty_result = mysqli_query($connection,$select_for_qty);
    while ($row_value = mysqli_fetch_array($select_for_qty_result)) {
      $qty_value = $row_value['qty'];
    }
    if($qty_value >= 0){
      $qty = $qty_value + 1;
    }else{
      $qty = 1;
    }
    $update_table = "UPDATE $user_name ". "SET qty = $qty ". 
               "WHERE product_id = $id";
    $update_table_result = mysqli_query($connection,$update_table);
    header('location: cart.php');
    }else{
      $qty = 1;
    $insert_table = "insert into $user_name(user_id, product_id, url, productname, qty, price)values('$user_id', $product_id[0] , $url[0] ,'$product_name[0]','$qty','$price[0]')";
    $insert_table_result = mysqli_query($connection,$insert_table);
    header('location: cart.php');
  }
    
  }
?>