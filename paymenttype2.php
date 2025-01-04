<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
//require('logincheck.php');
$totalamount=$_POST['totalamount'];
$intialamount=$_POST['intialamount'];
$noinstallment=$_POST['noinstallment'];
$installmentamt=$_POST['installmentamt'];
$datee=date("Y-m-d");
$status="Active";
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
//$taskid='8659';
$query = "INSERT INTO n_payment VALUES ('','$taskid','$totalamount','$intialamount','$noinstallment','$installmentamt','$status')";
mysql_query($query);
mysql_close();
echo "You have Successfully Submited";
?>