<?php
include_once('payment.php');
$msg = Your Medicin ."imgname". is ordered successfully Total amount is :- ."$total_price". order will be delever in 2 day;
include('way2sms-api.php');
$uid = 9028822717;
$pass = "furkan123";
$phone = $_POST['phone'];
$message = $msg;
sendWay2SMS($uid,$pass,$phone,$message);
