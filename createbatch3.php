<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
//require('logincheck.php');
$stos="Batch";
$query = " SELECT * FROM n_student WHERE status='$stos' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while($i<$num)
{
$sname=mysql_result($result,$i,"studentname");
$comm=",";
if($students=="")
{
$students="$students$sname";
}
else
{
$students="$students$comm$sname";
}
$i++;
}
$batchname=$_POST['batchname'];
$subject=$_POST['subject'];
$sbatchtime=$_POST['sbatchtime'];
$faculty=$_POST['faculty'];
$status="Active";
$query = "INSERT INTO n_batch VALUES ('','$taskid','$batchname','$totalsubject','$balancesubject','$sbatchtime','$faculty','$subject','$students','$subject','$status')";
mysql_query($query);
$status="Batch Allocated";
$query = " UPDATE n_student SET batch='$batchname',faculty='$faculty' WHERE status='$stos'";
mysql_query($query);
$query = " UPDATE n_student SET status='$status' WHERE status='$stos'";
mysql_query($query);
Header("Location: createbatch.php");
?>