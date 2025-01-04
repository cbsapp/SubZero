<?php
include 'config.php';
include 'db.php';
$datee=date("Y-m-d");
$sname=$_GET['sname'];
$duration=$_GET['sduration'];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO n_softwares VALUES ('','$sname','$duration','$datee','$uname')";
mysql_query($query);
echo "The Software Has Been Successfully Added";
?>
