<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
$uname=$_SESSION["uname"];
$pword=$_SESSION["pword"];
include 'db.php';
include 'config.php';
//require('logincheck.php');
////////////////////////Task ID Generation///////////////////////////////////
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM caseid ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$caseid=mysql_result($result,$i,"caseid");
$id=mysql_result($result,$i,"id");
$caseno=$caseid;
$caseid++;
$query = " UPDATE caseid SET caseid='$caseid' WHERE id='$id'";
mysql_query($query);
$ao="AR";
$caseid="$ao$caseno";
/////////////////////////////End Of Task ID Generation///////////////////////
////////////////////////Task ID Generation///////////////////////////////////
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM taskid ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$taskid=mysql_result($result,$i,"taskid");
$id=mysql_result($result,$i,"id");
$taskno=$taskid;
$taskid++;
$query = " UPDATE taskid SET taskid='$taskid' WHERE id='$id'";
mysql_query($query);
/////////////////////////////End Of Task ID Generation///////////////////////
$issue=$_POST['issue'];
$deliverydate=$_POST['deliverydate'];
$batchname=$_POST['batchname'];
$datee=date("Y-m-d");
$status="New";
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM n_student WHERE susername='$uname'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$tracker=0;
$studentname=mysql_result($result,$i,"studentname");
$phone=mysql_result($result,$i,"phone");
$batch=mysql_result($result,$i,"batch");
$faculty=mysql_result($result,$i,"faculty");
$col=" : ";
$iss="Issue";
$brr="</br>";
$issuee="$iss$col$datee$brr$issue";
$query = "INSERT INTO n_complaints VALUES ('','$taskno','$caseid','$studentname','$uname','$faculty','$batch','$issuee','$datee','$srename','$solution','$status','$tracker')";
mysql_query($query);
mysql_close();
echo "You have Successfully Submited";
Header("Location: complaints.php");
?>