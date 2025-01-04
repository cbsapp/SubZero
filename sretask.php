<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/curriculumjs.js"></script>
<script type="text/javascript" src="accounts/stmenu.js"></script>
<script type="text/javascript" src="js/sre.js"></script>
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
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: none;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #333333;
}
-->
</style></head>

<body>
<?php
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="sre2.php">
<script>
function submitt()
{
document.form.submit()
}
</script>
<?php
$st3="Closed";
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM n_complaints WHERE status!='$st3'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
echo $num;
?>

<table width="982" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="4"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="4"><script type="text/javascript" src="accounts/menu.js"></script></td>
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
        <th width="733" height="24" colspan="6" align="left" background="images/bar3.gif" class="style1" scope="col">Student Complaints</th>
      </tr>
      <tr>
        <th colspan="6" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        </tr>
		    
      <tr>
        <th height="24" colspan="6" align="left" bgcolor="#FFFFFF" class="style1" scope="row"><div align="center" class="style2" id="crr" >
          <label> </label>
          <table width="750" border="0" cellpadding="1" cellspacing="1">
            <tr>
              <td width="73" height="23" align="center" background="images/bar3.gif" class="style1">Case ID</td>
              <td width="150" align="center" background="images/bar3.gif" class="style1">Student Name</td>
              <td width="126" align="center" background="images/bar3.gif" class="style1">Faculty</td>
              <td width="157" align="center" background="images/bar3.gif" class="style1">Batch</td>
              <td width="123" align="center" background="images/bar3.gif" class="style1">Date</td>
              <td width="102" align="center" background="images/bar3.gif" class="style1">Status</td>
            </tr>
			<?php
	 while($i<$num)
{
$caseid=mysql_result($result,$i,"caseid");
$studentname=mysql_result($result,$i,"studentname");
$faculty=mysql_result($result,$i,"faculty");
$batch=mysql_result($result,$i,"batch");
$datee=mysql_result($result,$i,"datee");
$status=mysql_result($result,$i,"status");
	 ?>
            <tr>
              <td bgcolor="#C5E7F5" class="style2"><a href="javascript: sre('<?php echo $caseid; ?>');"><?php echo $caseid; ?></a></td>
              <td bgcolor="#C5E7F5" class="style2"><a href="javascript: sre('<?php echo $caseid; ?>');"><?php echo $studentname; ?></a></td>
              <td bgcolor="#C5E7F5" class="style2"><a href="javascript: sre('<?php echo $caseid; ?>');"><?php echo $faculty; ?></a></td>
              <td height="23" bgcolor="#C5E7F5"><a href="javascript: sre('<?php echo $caseid; ?>');" class="style2"><?php echo $batch; ?></a></td>
              <td align="center" bgcolor="#C5E7F5" class="style2"><a href="javascript: sre('<?php echo $caseid; ?>');"><?php echo $datee; ?></a></td>
              <td align="center" bgcolor="#C5E7F5" class="style2"><a href="javascript: sre('<?php echo $caseid; ?>');"><?php echo $status; ?></a></td>
            </tr>
			<?php
	  $i++;
}
?>
          </table>
        </div></th>
      </tr>
	  <tr>
        <th height="24" colspan="6" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
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
