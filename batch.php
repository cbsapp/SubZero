<?
include 'config.php';
include 'db.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$batchtime=$_GET['batchtime'];
echo $batchtime;
$i=1;
$sts="Active";
$type="faculty";
$query = " SELECT * FROM n_login WHERE type='$type' AND status='$sts' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$z=0;
while($i<$num)
{
$unamee=mysql_result($result,$i,"uname");
$query1 = " SELECT * FROM n_batch WHERE faculty='$unamee' AND time='$batchtime' ORDER BY id DESC";
$result1=mysql_query($query1) or die('Error, query failed');
$num1=mysql_numrows($result1);
if($num1<1)
{
$facul[$z]=$unamee;
$z++;
}
$i++;
}
mysql_close();  
//Header("Location: addcurriculum3.php?course=$coursename");
?>
<select name="faculty" class="style2" id="faculty" tabindex="1">
  <option value="none">---None---</option>
  <?php
$y=0;
while ($y<$z)
{
$fname=$facul[$y];
?>
  <option value="<?php echo $fname; ?>"><?php echo $fname; ?></option>
  <?php
$y++;
}
 ?>
</select>