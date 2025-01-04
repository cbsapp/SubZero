<?php
include 'db.php';
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;

include 'config.php';
require('logincheck.php');
$uname=$_SESSION["uname"];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$gender=$_GET['gender'];
$placeofbirth=$_GET['placeofbirth'];
$maritalstatus=$_GET['maritalstatus'];
$bloodgroup=$_GET['bloodgroup'];
$sonof=$_GET['sonof'];
$dateofbirth=$_GET['dateofbirth'];
$presentaddress=$_GET['presentaddress'];
$permanentaddress=$_GET['permanentaddress'];
$emcontactno=$_GET['emcontactno'];
$mailid=$_GET['mailid'];


$timee = date('h:i A',time()+(3600*5.5));
$datee=date("Y-m-d");
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = "UPDATE n_login SET firstname='$firstname',lastname='$lastname',gender='$gender',placeofbirth='$placeofbirth',maritalstatus='$maritalstatus',bloodgroup='$bloodgroup',sonof='$sonof',dateofbirth='$dateofbirth',presentaddress='$presentaddress',permanentaddress='$permanentaddress',emcontactno='$emcontactno',mailid='$mailid' WHERE uname='$uname'";
mysql_query($query);
mysql_close();
echo $firstname;

//Header("Location: sre_mytask_addcomment.php");
?>