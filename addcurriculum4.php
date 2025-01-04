<?php
include 'db.php';
include 'config.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$num=$_POST['noo'];
$i=0;
$status="Completed";
while($i<$num)
{
$durat="duration";
$duratio="$durat$i";
$duration[$i]=$_POST[$duratio];
$id="idd";
$iddd="$id$i";
$idd[$i]=$_POST[$iddd];
$query = "UPDATE n_courses SET duration='$duration[$i]',status='$status' WHERE id='$idd[$i]'";
mysql_query($query);
$i++;
}
mysql_close();  
Header("Location: addcurriculum.php");
?>