<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'config.php';
//require('logincheck.php');
$servicetax=$_POST['servicetax'];
$educess=$_POST['educess'];
$highercess=$_POST['highercess'];
$datee=date("Y-m-d");
$status="Active";
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$taskid='9000';
$query = " UPDATE n_taxallocation SET servicetax='$servicetax',educess='$educess',highercess='$highercess' WHERE taskid='$taskid'";
mysql_query($query);
mysql_close();
echo "You have Successfully Submited";
Header("Location: tax.php");
?>