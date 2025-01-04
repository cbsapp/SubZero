<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
$uname=$_SESSION["uname"];
$pword=$_SESSION["pword"];
include 'config.php';
//require('logincheck.php');
$reply=$_POST['reply'];
$caseid=$_POST['caseid'];
$datee=date("Y-m-d");
$status="Open";
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM n_complaints WHERE caseid='$caseid'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$issue=mysql_result($result,$i,"issue");
$col=" : ";
$iss="Solution";
$brr="</br>";
$issuee="$issue$brr$brr$iss$col$datee$brr$reply";
$query = " UPDATE n_complaints SET srename='$uname',issue='$issuee',status='$status' WHERE caseid='$caseid'";
mysql_query($query);
mysql_close();
echo "You have Successfully Paid";
?>