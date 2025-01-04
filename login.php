<?php
include 'config.php';
include 'db.php';
session_start();
$uname=$_POST['uname'];
$pword=$_POST['pword'];
//$ip = $_SERVER['REMOTE_ADDR'];

//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
include 'db.php';

$query="SELECT * FROM $db_login WHERE uname='$uname' AND pword='$pword'";
$result=mysql_query($query);
$num=mysql_numrows($result);
//echo $num;

if ($num==1)
{
session_start();
$i=0;

$query="SELECT * FROM $db_login WHERE uname='$uname'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$type=mysql_result($result,$i,"type");
$myhome=mysql_result($result,$i,"myhome");
$fromtime=mysql_result($result,$i,"fromtime");
$totime=mysql_result($result,$i,"totime");
$_SESSION["uname"] = $uname;
$_SESSION["pword"] = $pword;
$_SESSION["type"] = $type;
$_SESSION["ip"] = $ip;
$_SESSION["ipp"] = $ipp;
if($stss=="first")
{
Header("Location: mypersonal.php");
}
else
{
Header("Location: main.php?from=$fromtime&myhome=$myhome&to=$totome");
}
}
//echo "Login Success";
if ($num==0)
{
mysql_close();
echo "Login Is Invalid";
Header("Location: invalidlogin.php");
}
?>