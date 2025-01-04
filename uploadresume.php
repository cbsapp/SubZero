<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/skills.js"></script>
<script type="text/javascript" src="js/skillsdelete.js"></script>
<script type="text/javascript" src="accounts/stmenu.js"></script>
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
.style23 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	background-color: #CCCCCC;
	font-weight: bold;
}
.button_style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bolder;
	color: #FF0000;
	background-color: #FFFFCC;
	border: thin solid #FFFFFF;
	font-variant: small-caps;
	text-transform: capitalize;
}
-->
</style></head>

<body>
<?php
include 'db.php';
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="complaintssave.php">
<script>
function submitt()
{
document.form.submit()
}
function win1(idd) {
    window.open("window.php?id="+idd,"Window1","menubar=no,width=460,height=360,toolbar=no");
}
</script>
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
        <th height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">My Resume</th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Skills</th>
        </tr>
		
      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#FFFFFF" class="style2" scope="row"><div align="left" class="style2" id="skills" >
          <table width="751" border="0" cellpadding="1" cellspacing="1">
            <tr>
              <td width="255" height="23" align="center" background="images/bar3.gif" class="style1">Skills</td>
              <td width="147" align="center" background="images/bar3.gif" class="style1">Proficiency</td>
              <td width="224" align="center" background="images/bar3.gif" class="style1">Specialization</td>
              <td width="112" align="center" background="images/bar3.gif" class="style1">Delete</td>
            </tr>
            <?php
			include 'db.php';
include 'config.php';
$_SESSION["pagecode"]=$pagecode;
$uuname=$_SESSION["uname"];
$status="Active";
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_skills WHERE susername='$uuname' AND status='$status' ORDER BY id DESC";
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
</div></th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Skills Set  </th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">
          <label>
          <select name="skillslist" class="style2" id="no" onchange="sk();">
            <option value="None" selected="selected">-----None------</option>
            <?php
			include 'db.php';
//			mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM skillslist";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while ($i<$num)
{
$id=mysql_result($result,$i,"id");
$subject=mysql_result($result,$i,"list");
?>
            <option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
            <?php
	$i++;
}
	?>
          </select>
          </label>
          <label></label>
          </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">Proficiency Level </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><select name="proficiency" class="style2" id="proficiency" tabindex="1">
          <option value="none">-----None-----</option>
          <option value="Average">Average</option>
          <option value="Good">Good</option>
          <option value="Excellent">Excellent</option>
          <option value="No Knowledge">No Knowledge</option>
        </select></th>
      </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Specialization </th>
        <th width="224" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
          <select name="specialist" class="style2" id="select">
            <option value="None" selected="selected">-----None------</option>
            <?php

$query = " SELECT * FROM specialist";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while ($i<$num)
{
$id=mysql_result($result,$i,"id");
$subject=mysql_result($result,$i,"list");
?>
            <option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
            <?php
	$i++;
}
	?>
          </select>
          <input name="uuname" type="hidden" id="uuname" value="<?php echo $uuname; ?>" />
        </label></th>
        <th width="146" align="left" bgcolor="#C5E7F5" class="style2" scope="row">&nbsp;</th>
        <th width="223" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><a href="javascript: skills();"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a></th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Education Qualification </th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Qualification</th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
          <select name="select2" class="style2" tabindex="1">
            <option value="none" selected="selected">------None------</option>
            <option value="SSLC">SSLC</option>
            <option value="Plus 2">Plus 2</option>
            <option value="College">College</option>
            <option value="Post Graduate">Post Graduate</option>
          </select>
        </label></th>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">&nbsp;</th>
        <th align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Experience</th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="right" bgcolor="#FFFFFF" class="style2" scope="row"><div align="center" class="style2" id="div" >
          <label> </label>
          <table width="751" border="0" cellpadding="1" cellspacing="1">
            <tr>
              <td width="151" height="23" align="center" background="images/bar3.gif" class="style1">From</td>
              <td width="162" align="center" background="images/bar3.gif" class="style1">To</td>
              <td width="191" align="center" background="images/bar3.gif" class="style1">Position</td>
              <td width="117" align="center" background="images/bar3.gif" class="style1">Job Description </td>
              <td width="114" align="center" background="images/bar3.gif" class="style1">Delete</td>
            </tr>
            <?php
			include 'db.php';
include 'config.php';
$uuname=$_SESSION["uname"];
$status="Active";
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_experience WHERE susername='$uuname' AND status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while($i<$num)
{
$id=mysql_result($result,$i,"id");
$fromm=mysql_result($result,$i,"fromm");
$too=mysql_result($result,$i,"too");
$position=mysql_result($result,$i,"position");
$jobdescription=mysql_result($result,$i,"jobdescription");
?>
            <tr>
              <td height="24" bgcolor="#C5E7F5"><?php echo $fromm; ?></td>
              <td bgcolor="#C5E7F5"><?php echo $too; ?></td>
              <td bgcolor="#C5E7F5"><?php echo $position; ?></td>
              <td align="center" bgcolor="#C5E7F5"><a href="javascript: win1('<?php echo $id; ?>');">View</a></td>
              <td align="center" bgcolor="#C5E7F5"><a href="javascript: expdelete('<?php echo $id; ?>');">Delete</a></td>
            </tr>
            <?php
  $i++;
  }
  ?>
          </table>
        </div></th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">From</th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="pincode" type="text" class="style2" id="pincode" tabindex="6" size="20" /></th>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">To</th>
        <th align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="position" type="text" id="position" tabindex="12" size="30" /></th>
      </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style2">Position</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
          <select name="select3" tabindex="1">
          </select>
        </label></th>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Job Description </th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="skills" type="text" class="style2" id="skills" tabindex="13" size="90" /></th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Achievement</th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="skills2" type="text" class="style2" id="skills2" tabindex="13" size="90" /></th>
        </tr>
      <tr>
        <th height="24" align="right" bgcolor="#C5E7F5" class="style2" scope="row">Hobbies</th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="skills3" type="text" class="style2" id="skills3" tabindex="13" size="90" /></th>
      </tr>
      <tr>
        <th width="146" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Issue </th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#FFFFFF" class="style1" scope="row"><div align="center" class="style2" id="crr" >
          <label> </label>
        </div></th>
      </tr>
	  <tr>
        <th height="24" colspan="4" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row">&nbsp;</th>
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
