<?php

include_once("config.php");
  $sql_product = "select id from productinfo where id in(select medicin_id from furkan)";
  $result_product = mysqli_query($connection,$sql_product);
  $row = mysqli_fetch_array($result_product);
  
  if ($result_product) {
    echo "okkkk";
  }else{
    echo "notokkk";
  }
if (isset($_POST['str'])) {
  echo "hidden";
}elseif (isset($_POST['bdr'])) {
  echo "this IS SET";
}elseif (isset($_POST['that'])) {
  echo "That IS SET";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>just testing</title>
</head>
<body>
<form action="testing.php" method="post">
<input type="hidden" name=<?php ; if (isset($var)){
  echo "str";
} 
else{
echo "bdr";  
}
?> value=hidden>

<input type="submit" name="this" value="this"></form>
<form action="testing.php" method="post"><input type="submit" name="that" value="that"></form>
</body>
</html>
