<?php
include 'db.php';
include 'config.php';
$datee=date("Y-m-d");
$sname=$_POST['softname'];
$duration=$_POST['softduration'];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
///@mysql_select_db($database) or die( "Unable to select database");
$i=0;
while($i<$duration)
{
$comment=$_POST[$i];
$query = "INSERT INTO n_softwares VALUES ('','$sname','$duration','$datee','$uname','$comment')";
mysql_query($query);
$i++;
}
echo "The Software Has Been Successfully Added";
?>
