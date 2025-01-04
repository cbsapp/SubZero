<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'config.php';
require('logincheck.php');

$name=$_POST['name'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$natureofleave=$_POST['natureofleave'];
echo $natureofleave;
$leavetype=$_POST['leavetype'];
$reason=$_POST['reason'];
$contactno=$_POST['contactno'];
$manage=$_POST['manage'];
$nodays=$_POST['nodays'];
$fday=$_POST['fday'];
$fmonth=$_POST['fmonth'];
$fyear=$_POST['fyear'];
$tday=$_POST['tday'];
$tmonth=$_POST['tmonth'];
$tyear=$_POST['tyear'];
/*
$fhr=$_POST['fhr'];
$fmin=$_POST['fmin'];
$thr=$_POST['thr'];
$tmin=$_POST['tmin'];
*/
$ffdate=date("Y-m-d");
$ffdate=$_POST['fdate'];
$ttdate=date("Y-m-d");
$ttdate=$_POST['tdate'];
$status="Not Approved";
$crdate=date("Y-m-d");
$i=0;
if($tyear=="")
{
$ttdate=$ffdate;
}       
function datediff($dformat,$enddate,$begindate)
{
$date1=explode($dformat,$begindate);
$date2=explode($dformat,$enddate);
$start_date=gregoriantojd($date1[1],$date1[2],$date1[0]);
$end_date=gregoriantojd($date2[1],$date2[2],$date2[0]);
return $end_date-$start_date;
}
$noday=datediff("-",$ttdate,$ffdate);
$nodays=$noday+1;
echo $nodays;
if($nodays<0)
{
header("Location: error.php?msg='Some Error Occured in Date Please Try Again'");
}
//////////////////////task id//////////////////////
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
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
/////////////////////Task id////////////////////////////
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "SELECT * FROM n_login WHERE uname='$uname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed1');
$num=mysql_numrows($result);
$toplevel=mysql_result($result,$i,"toplevel");
$levelcode=mysql_result($result,$i,"levelcode");
$cc=",";
$perr="ashok";
$perr=$toplevel;
$permis=$toplevel;
$num=10;
//echo $perr;
while ($i<$num)
{
$query = "SELECT * FROM n_login WHERE levelcode='$toplevel' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed2');
$j=0;
$toplevel=mysql_result($result,$j,"toplevel");
if($toplevel=="")
{
}
else
{
$perr="$perr$cc$toplevel";
}
$i++;
}
//echo $perr;
if ($leavetype=="fn")
{
$nodays=0.5;
}
if ($leavetype=="an")
{
$nodays=0.5;
}
/*
$query = "SELECT * FROM leavepercredit WHERE username='$uname'";
$result=mysql_query($query) or die('Error, query failed2');
$j=0;
$casualleave=mysql_result($result,$j,"casualleave");
$sickleave=mysql_result($result,$j,"sickleave");

if($natureofleave=="Casual Leave")
{
$yyt=$casualleave-$nodays;
$query = "UPDATE leavepercredit SET casualleave='$yyt' WHERE username='$uname'";
mysql_query($query);
}
if($natureofleave=="Sick Leave")
{
$yyt=$sickleave-$nodays;
$query = "UPDATE leavepercredit SET sickleave='$yyt' WHERE username='$uname'";
mysql_query($query);
}
*/
if($nodays>0)
{
$sts=0;
$query = "INSERT INTO leave VALUES ('','$taskid','$uname','$designation','$department','$natureofleave','$leavetype','$nodays','$reason','$contactno','$status','$ffdate','$ttdate','$crdate','$modify','$perr','$permis','$status','$sts')";
mysql_query($query);
}
//header("Location: leave.php");
?>