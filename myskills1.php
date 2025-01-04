<?php
include 'config.php';
include 'db.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$skills=$_POST['skills'];
$skilllevel=$_POST['skilllevel'];
$query = "INSERT INTO n_user_skills VALUES ('','$taskid','$uname','$skills','$skilllevel')";
mysql_query($query);
$query = " SELECT * FROM n_user_skills WHERE username='$uname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
?>
<table width="748" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="445" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Skills</th>
    <th width="140" height="24" align="center" bgcolor="#C5E7F5" class="style22" scope="row"><label class="style2">Skill Level </label></th>
    <th width="153" align="center" bgcolor="#C5E7F5" class="style2" scope="row">Options</th>
  </tr>
  <?php
  $i=0;
while($i<$num)
{
$skills=mysql_result($result,$i,"skills");
$skilllevel=mysql_result($result,$i,"skilllevel");
$id=mysql_result($result,$i,"id");
  ?>
  <tr>
    <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style22"><?php echo $skills; ?></span></th>
    <th height="24" align="center" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style22"><?php echo $skilllevel; ?></span></th>
    <th bgcolor="#C5E7F5" class="style1" scope="row"><span class="style22"><a href="skilldelete.php?idd=<?php echo $id; ?>">Delete</a></span></th>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
