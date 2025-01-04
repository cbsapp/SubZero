<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="751" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td width="255" height="23" align="center" background="images/bar3.gif" class="style1">Skills</td>
    <td width="147" align="center" background="images/bar3.gif" class="style1">Proficiency</td>
    <td width="224" align="center" background="images/bar3.gif" class="style1">Specialization</td>
    <td width="112" align="center" background="images/bar3.gif" class="style1">Delete</td>
  </tr>
  <?php
include 'config.php';
$skillslist=$_GET['skillslist'];
$specialist=$_GET['specialist'];
$proficiency=$_GET['proficiency'];
session_start();
$uname=$_SESSION["uname"];
$status="Active";
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO n_skills VALUES ('','$uname','$skillslist','$proficiency','$specialist','$status')";
mysql_query($query);
$query = " SELECT * FROM n_skills WHERE susername='$uname' AND status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while($i<$num)
{
$id=mysql_result($result,$i,"id");
$skills=mysql_result($result,$i,"skills");
$proficiency=mysql_result($result,$i,"proficiency");
$specialization=mysql_result($result,$i,"specialization");
?>
  <tr>
    <td height="24" bgcolor="#C5E7F5"><?php echo $skills; ?></td>
    <td bgcolor="#C5E7F5"><?php echo $proficiency; ?></td>
    <td bgcolor="#C5E7F5"><?php echo $specialization; ?></td>
    <td align="center" bgcolor="#C5E7F5"><a href="javascript: skillsdelete('<?php echo $id; ?>');">Delete</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
