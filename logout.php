<?
include 'config.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$timee = date('h:i A',time()+(3600*5.5));
$query = "UPDATE loginlogout SET logouttime1='$timee' WHERE username='$uname'";
mysql_query($query);
mysql_close();

session_unset();
session_destroy();

Header("Location: index.htm");
?>