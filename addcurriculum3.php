<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="menu/stmenu.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nucleus</title>
<style type="text/css">
<!--
body {
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-top: 0px;
}
.style1 {
	font-size: 11px;
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #333333;
	font-size: 11px;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #333333; font-size: 12px; }
.style22 {font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
.style30 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
a:link {
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0066FF;
}
a:hover {
	text-decoration: none;
	color: #0066FF;
}
a:active {
	text-decoration: none;
	color: #0066FF;
}
-->
</style></head>

<body>
<?php
include 'db.php';
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="addcurriculum4.php">
<script>
function submitt()
{
document.form.submit()
}
</script>
<table width="982" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="4"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="4"><script type="text/javascript" src="menu/menu.js"></script></td>
  </tr>
  <tr>
    <td width="220" height="24" valign="top" class="style1"><table width="219" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" scope="col">Welcome,</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style4"><?php echo $uname; ?></span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" scope="row">Todays Date</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2008-06-07</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Todays Reminder </th>
      </tr>
      <tr>
        <th width="159" height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Today Total Reminder</span></th>
        <th width="53" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">To Add Reminder </span><span class="style30"><a href="reminders.php">Click Here</a></span><span class="style2"> </span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Leave Statistics </th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Casual Leave </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Sick Leave </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Late Statistics </th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Late Available </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Permission Statistics </th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Permission</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Feedback</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">For Your Feedback <a href="feedback.php">Click Here</a></span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Add Your Joke of the Day </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2"><a href="joke.php">Click Here To Add </a></span></th>
      </tr>
    </table></td>
    <td width="1" bgcolor="#064377">&nbsp;</td>
    <td width="751" colspan="2" valign="top"><table width="752" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">Add Curriculum  </th>
      </tr>
      <tr>
        <th colspan="4" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        </tr>
      <tr>
        <th width="150" height="24" align="center" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Course Name </th>
        <th width="174" height="24" align="center" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Subject Name </th>
        <th width="178" align="center" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Semester</th>
        <th width="237" align="center" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Duration</th>
      </tr>
<?php
include 'db.php';
$coursename=$_GET['course'];
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_courses WHERE coursename='$coursename' ORDER BY id";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while ($i<$num)
{
$coursedisplay=mysql_result($result,$i,"coursedisplay");
$subject=mysql_result($result,$i,"subjectname");
$semester=mysql_result($result,$i,"semester");
$idd=mysql_result($result,$i,"id");
	  ?>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $coursedisplay; ?></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $subject; ?></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $semester; ?></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><label>
          <input name="duration<?php echo $i; ?>" type="text" class="style2" tabindex="1" size="10" maxlength="5" />
          <input name="idd<?php echo $i; ?>" type="hidden" value="<?php echo $idd; ?>" />
        </label></th>
      </tr>
	  <?php
	  $i++;
	  }
	  ?>
	  <tr>
        <th height="24" colspan="4" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row"><input name="noo" type="hidden" value="<?php echo $num; ?>" /></th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: submitt();"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      </tr>
    </table></td>
  </tr>
  
    <td height="24" colspan="4" align="center" bgcolor="#064377" class="style1">Todays Joke </td>
  </tr>
  <tr>
    <td height="24" colspan="4" align="center" bgcolor="#C5E7F5" class="style2">An Ant says i am pragnent and the father of my child is Elephant. </td>
  </tr>
  <tr>
    <td height="24" colspan="4" align="center" bgcolor="#064377" class="style1">Copyright &copy; 2008 All Rights Reserved. Website Designed And Hosted By Vmaxhost.com </td>
  </tr>
  
</table>
</form>
</body>
</html>
