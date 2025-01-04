<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
//require('logincheck.php');
$bookname=$_POST['bookname'];
$deliverydate=$_POST['deliverydate'];
$batchname=$_POST['batchname'];
$datee=date("Y-m-d");
$status="Active";
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO n_book VALUES ('','$taskid','$bookname','$datee','$uname','$deliverydate','$delivereddate','$balance','$batchname','$status')";
mysql_query($query);
mysql_close();
//echo "You have Successfully Submited";
Header("Location: bookrequest.php");
?>