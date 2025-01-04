<?php

$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
//require('logincheck.php');
$comment=$_POST['comment'];
$susername=$_POST['susername'];
$nfudate=$_POST['nfudate'];
$enquiryname=$_POST['enquiryname'];
$mobile=$_POST['mobile'];
$phone=$_POST['phone'];
$taskid=$_GET['taskid'];
$statusss=$_GET['status'];
$coursesuggested=$_GET['coursesuggested'];
$datee=date("Y-m-d");
$datereceived=date("Y-m-d");
$datereceived="$fyear-$fmonth-$fday";
$timereceived="$thr:$tmin";
//$status="Not Viewed";
//echo $perr;
//echo $taskno;
//echo $comment;
//echo $nfudate;
//echo $susername;
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
//$taskid='8659';
if($statusss=="Registered")
{
$status="Joined";
}
$query1 = " SELECT * FROM n_courses WHERE coursename='$coursesuggested' ORDER BY id DESC";
$result=mysql_query($query1) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while($i<$num)
{
$subjectname=mysql_result($result,$i,"subjectname");
$comm=",";
if($subjectnames=="")
{
$subjectnames="$subjectnames$subjectname";
}
else
{
$subjectnames="$subjectnames$comm$subjectname";
}
$i++;
}
echo $query;
$query2 = "INSERT INTO n_student VALUES ('','$taskid','$susername','$enquiryname','$mobile','$datee','$subjectnames','$subjectnames','$batch','$faculty','$coursesuggested','$status')";
mysql_query($query2);

$query3 = "UPDATE n_followup SET status='$status' WHERE taskid='$taskid'";
mysql_query($query3);
$crdate=date('Y-m-d');
}

echo $query2;
echo $query3;
if($statusss=="Joined")
{
$status="Joined";
$query4 = " SELECT * FROM n_courses WHERE coursename='$coursesuggested' ORDER BY id DESC";
$result=mysql_query($query4) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while($i<$num)
{
$subjectname=mysql_result($result,$i,"subjectname");
$comm=",";
if($subjectnames=="")
{
$subjectnames="$subjectnames$subjectname";
}
else
{
$subjectnames="$subjectnames$comm$subjectname";
}
$i++;
}
$query5 = "INSERT INTO n_student VALUES ('','$taskid','$susername','$enquiryname','$mobile','$datee','$subjectnames','$subjectnames','$batch','$faculty','$coursesuggested','$status')";
mysql_query($query5);

$query6 = "UPDATE n_followup SET status='$status' WHERE taskid='$taskid'";
mysql_query($query6);

}

if($statusss=="Lost")
{
$status="Lost";

$query7 = "UPDATE n_followup SET status='$status' WHERE taskid='$taskid'";
mysql_query($query7);
}
if($statusss=="none")
{
$status="In Transit";
}
$query8 = "INSERT INTO n_followup VALUES ('','$taskid','$enquiryname','$phone','$mobile','$datee','$comment','$nfudate','$status','$crdate')";
mysql_query($query8);
$query9 = "UPDATE n_councelling SET status='$status' WHERE taskid='$taskid'";
mysql_query($query9);
mysql_close();

echo "You have Successfully Submited";

//Header("Location: councelling_mytask_add.php?msg=Your Report has been Successfully Added");
?>