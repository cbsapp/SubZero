<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="calendarDateInput.js"></script>
<script type="text/javascript" src="adminjs/stmenu.js"></script>
<script type="text/javascript" src="counc.js"></script>
<SCRIPT LANGUAGE="JavaScript" SRC="timepicker.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #FF0000; font-size: 11px; }
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #333333; font-size: 12px; }
.style22 {font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
.style29 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style30 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
-->
</style></head>

<body>
<form name="form" method="post" action="attanance2.php">
<?php
include 'db.php';
include 'config.php';
?>
<SCRIPT language="JavaScript">
function sform()
{
document.form.submit();
}
</SCRIPT> 
<SCRIPT language="JavaScript">
function sform()
{
alert("ashok");
yy=document.form.followdate.value;
alert(yy);
}
function mytaskper()
{
var no=document.getElementById("taskper")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("section").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("section").value=txt
}
</SCRIPT> 
<table width="982" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="4"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td width="220" height="24" valign="top" class="style1"><table width="219" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" scope="col">Welcome,</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style4">Ashok</span></th>
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
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">To Add Reminder Click Here </span></th>
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
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Experience Statistics </th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2 Years </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2 Month</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Feedback</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">For Your Feedback Click Here</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Add Your Joke of the Day </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Click Here To Add </span></th>
      </tr>
    </table></td>
    <td width="1" bgcolor="#064377">&nbsp;</td>
    <td width="751" colspan="2" valign="top"><table width="752" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th width="581" height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">Attanance </th>
      </tr>
      <tr>
        <th colspan="4" align="left" scope="row"><div align="center" class="style2" id="msg" >
          <label>          </label>
          <table width="744" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <th width="147" height="23" align="center" bgcolor="#C5E7F5" scope="col">Curriculam </th>
              <th width="173" align="center" bgcolor="#C5E7F5" scope="col">Semster</th>
              <th width="185" align="center" bgcolor="#C5E7F5" scope="col">Module</th>
               <th width="100" align="center" bgcolor="#C5E7F5" scope="col">Week </th>
               <th width="126" align="center" bgcolor="#C5E7F5" scope="col"><label>Present / Absent  </label></th>
            </tr>
			<?php
			include 'db.php';
			$batchname=$_GET['batchname'];
			include 'db.php';
//			mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_batch WHERE batchname='$batchname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$taskidd=mysql_result($result,$i,"taskid");
$students=mysql_result($result,$i,"students");
$batchtime=mysql_result($result,$i,"time");
$currentsubject=mysql_result($result,$i,"currentsubject");
$faculty=mysql_result($result,$i,"faculty");
$student=explode(",",$students);
$numm=count($student);
$i=0;
while($i<$numm)
{

			?>
            <tr>
              <th height="23" align="left" bgcolor="#C5E7F5" scope="col"><?php echo $student[$i]; ?></th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><?php echo $currentsubject; ?></th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><?php echo $batchname; ?></th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><?php echo $faculty; ?></th>
              <th align="center" bgcolor="#C5E7F5" scope="col"><a href="attance1.php">
                <label>
                <input type="checkbox" name="checkbox<?php echo $i; ?>" value="<?php echo $student[$i]; ?>" tabindex="1" />
                </label>
              </a> </th>
            </tr>
			<?php
			$i++;
			}
			?>
          </table>
        </div></th>
        </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row">Note : Tick Only Present Student </th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th width="158" bgcolor="#C5E7F5" scope="row"><input name="tono" type="hidden" id="tono" value="<?php echo $numm; ?>" />
          <input name="batchname" type="hidden" id="batchname" value="<?php echo $batchname; ?>" />
          <input name="faculty" type="hidden" id="faculty" value="<?php echo $faculty; ?>" />
          <input name="batchtime" type="hidden" id="batchtime" value="<?php echo $batchtime; ?>" />
          <input name="currentclass" type="hidden" id="currentclass" value="<?php echo $currentsubject; ?>" /></th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: sform();">
          <label>
          <input type="submit" name="Submit" value="Submit" tabindex="1" />
          </label>
          <img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
