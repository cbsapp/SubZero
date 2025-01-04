<?php
include 'config.php';
include 'db.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$user1name,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$course=$_POST['course'];
$university=$_POST['university'];
$passing=$_POST['passing'];
$percentage=$_POST['percentage'];
$query = "INSERT INTO n_user_profile VALUES ('','$taskid','$uname','$course','$university','$passing','$percentage')";
mysql_query($query);
$query = " SELECT * FROM n_user_profile WHERE username='$uname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
?>
<table width="748" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="157" align="center" bgcolor="#C5E7F5" class="style2" scope="row">Course</th>
    <th width="191" height="24" align="center" bgcolor="#C5E7F5" class="style22" scope="row"><label class="style2">University</label></th>
    <th width="154" align="center" bgcolor="#C5E7F5" class="style2" scope="row">Year of Passing </th>
    <th width="233" align="center" bgcolor="#C5E7F5" class="style2" scope="row">Percentage</th>
  </tr>
  <?php
  $i=0;
while($i<$num)
{
$course=mysql_result($result,$i,"course");
$university=mysql_result($result,$i,"university");
$passing=mysql_result($result,$i,"passing")
$percentage=mysql_result($result,$i,"percentage");
		   
  ?>
  <tr>
    <th align="center" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style22"><?php echo $course; ?></span></th>
    <th height="24" align="center" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style22"><?php echo $university; ?></span></th>
    <th bgcolor="#C5E7F5" class="style1" scope="row"><span class="style22"><?php echo $passing; ?></span></th>
    <th bgcolor="#C5E7F5" class="style1" scope="row"><span class="style22"><?php echo $percentage; ?></span></th>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
