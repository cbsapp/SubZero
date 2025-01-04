<?
include 'config.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$courseyear=$_POST['courseyear'];
$coursename=$_POST['coursename'];
$semester=$_POST['semester'];
$coursedisplay="$coursename$courseyear";
$i=1;
$semester++;
while($i<$semester)
{
$ss="subject";
$sss="$ss$i";
$subject=$_POST[$sss];
$subjects=explode(",",$subject);
$num=count($subjects);
$z=0;
$sem=$i;
$status="Not Completed";
while($z<$num)
{
$query = "INSERT INTO n_courses VALUES ('','$coursedisplay','$coursename','$courseyear','$subjects[$z]','$sem','$duration','$skilllevel','$status')";
mysql_query($query);
$z++;
}
$i++;
}
mysql_close();  
Header("Location: addcurriculum3.php?course=$coursename");
?>