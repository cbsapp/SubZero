<?
include 'config.php';
include 'db.php';
session_start();
$uname=$_SESSION["uname"];
$pword=$_SESSION["pword"];
$ip=$_SESSION["ip"];
$ipp=$_SESSION["ipp"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
if($ipp=="None")
{
$query="SELECT * FROM $db_login WHERE uname='$uname' AND pword='$pword'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$levelcode=mysql_result($result,$i,"levelcode");
}
else
{
$query="SELECT * FROM $db_login WHERE uname='$uname' AND pword='$pword' AND ip='$ip'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$levelcode=mysql_result($result,$i,"levelcode");
}
if ($num==1)
{
session_start();
$_SESSION["uname"] = $uname;
$_SESSION["pword"] = $pword;
$_SESSION["type"] = $type;
$_SESSION["ip"] = $ip;
}
else
{
Header("Location: invalidlogin.php");
}
mysql_close();  
?>