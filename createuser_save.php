<?php
include 'config.php';
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$username=$_GET['username'];
$password=$_GET['password'];
$section=$_GET['section'];
$ip=$_POST['ip'];
$levelcode=$_POST['levelcode'];
$reporting=$_POST['reporting'];
$officestart=$_POST['officestart'];
$officeend=$_POST['officeend'];
$lunchstart=$_POST['lunchstart'];
$lunchend=$_POST['lunchend'];
$casualleave=$_POST['casualleave'];
$permission=$_POST['permission'];
$sickleave=$_POST['sickleave'];
$late=$_POST['late'];
$statuss="Active";
$type="faculty";
$query = "INSERT INTO n_login VALUES ('','$username','$password','$section','$type','$ip','$levelcode','$reporting','$officestart','$officeend','$lunchstart','$lunchend','$permission','$late','$casualleave','$sickleave','$firstname','$lastname','$gender','$placeofbirth','$maritalstatus','$bloodgroup','$sonof','$dateofbirth','$presentaddress','$permanentaddress','$emcontactno','$mailid','$statuss')";
mysql_query($query);
//Header("Location: createuser.php");
?>
