<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
//require('logincheck.php');
$tono=$_POST['tono'];
$batchname=$_POST['batchname'];
$batchtime=$_POST['batchtime'];
$currentclass=$_POST['currentclass'];
$faculty=$_POST['faculty'];
$datee=date("Y-m-d");
$type="Attanance";
$valuee="Present";
$i=0;
$z=0;
//echo $tono;
//echo "ashok";
$status="Batch";
while($i<$tono)
{
$chec="checkbox";
$checc="$chec$i";
$student=$_POST[$checc];
if ($student=="")
{
}
else
{
$studentname[$z]=$student;
$query = "INSERT INTO n_attanance VALUES ('','$studentname[$z]','$batchname','$batchtime','$currentclass','$faculty','$type','$valuee','$comment','$datee')";
mysql_query($query);
//$query = "UPDATE n_student SET status='$status' WHERE taskid='$taskid[$z]'";
//mysql_query($query);
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

//$query = "UPDATE n_councelling SET status='$status' WHERE taskid='$taskid'";
//mysql_query($query);
//mysql_close();
//echo "You have Successfully Submited";
Header("Location: attanance.php");
?>