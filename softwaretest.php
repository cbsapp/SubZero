<?php
include 'db.php';
include 'config.php';
$sname=$_GET['sname'];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_softwares where name='$sname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
if ($num==0)
{
echo '<img src="images/right.gif" width="18" height="14">';
}
else
{
echo "The Name is Already Exists";
}
?>
