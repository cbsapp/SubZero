<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'config.php';
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
//require('logincheck.php');
$tono=$_POST['tono'];
$i=0;
$z=0;
//echo $tono;
//echo "ashok";
$status="Batch";
while($i<$tono)
{
$chec="checkbox";
$checc="$chec$i";
$task=$_POST[$checc];
if ($task=="")
{
}
else
{
$taskid[$z]=$task;
$query = "UPDATE n_student SET status='$status' WHERE taskid='$taskid[$z]'";
mysql_query($query);
$z++;
}
$i++;
}
$numm=count($taskid);
//echo $numm;

////$taskid='8659';
//if($statusss=="Joined")
//{
//$status="Joined";

//$crdate=date('Y-m-d');
//}
//if($statusss=="Lost")
//{
//$status="Lost";
//$query = "UPDATE n_followup SET status='$status' WHERE taskid='$taskid'";
//mysql_query($query);
//}
//if($statusss=="none")
//{
//$status="In Transit";
//}
//$query = "INSERT INTO n_followup VALUES ('','$taskid','$enquiryname','$phone','$mobile','$datee','$comment','$nfudate','$status','$crdate')";
//mysql_query($query);
//$query = "UPDATE n_councelling SET status='$status' WHERE taskid='$taskid'";
//mysql_query($query);
//mysql_close();
//echo "You have Successfully Submited";
Header("Location: createbatch2.php");
?>