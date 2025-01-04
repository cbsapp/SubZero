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
<form name="form">
<?php
include 'config.php';
?>
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
    <td colspan="4"><script type="text/javascript" src="adminjs/menu.js"></script></td>
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
        <th width="147" height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Today Total Reminder</span></th>
        <th width="65" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">To Add Reminder Click Here </span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Statistics </th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Lab Attended </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2/10</span></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Class Attended </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">8/10</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Anything Wrong Click Here </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Practise Exam </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style22" scope="row">Click Here To Write Pactice Exam </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Exam</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Click Her To Write Exam </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Tutorials</th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Wonderful Tutorial Step By Step </th>
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
        <th width="581" height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">Exam </th>
      </tr>
      <tr>
        <th colspan="4" align="left" scope="row"><div align="center" class="style2" id="msg" >
          <label>          </label>
          <table width="744" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <th width="146" height="23" align="left" bgcolor="#C5E7F5" scope="col">Total Questions : </th>
              <th width="172" height="23" align="left" bgcolor="#C5E7F5" scope="col">&nbsp;</th>
              <th width="132" height="23" align="left" bgcolor="#C5E7F5" scope="col">Marks Secured : </th>
              <th height="23" colspan="2" align="left" bgcolor="#C5E7F5" scope="col">&nbsp;</th>
              </tr>
            <tr>
              <th height="23" colspan="5" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="col">Question No : </th>
              </tr>
            <tr>
              <th height="23" colspan="5" align="left" bgcolor="#C5E7F5" scope="col">A Tool Used as a pen?
                <label></label></th>
              </tr>
            <tr>
              <th height="23" colspan="5" align="left" bgcolor="#C5E7F5" scope="col">&nbsp;</th>
              </tr>
            <tr>
              <th height="23" colspan="5" align="left" bgcolor="#C5E7F5" scope="col">&nbsp;</th>
              </tr>
            <tr>
              <th height="23" colspan="5" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="col">Answers : </th>
              </tr>
            <tr>
              <th height="23" align="left" bgcolor="#C5E7F5" scope="col"><label>
                <input name="radiobutton" type="radio" value="radiobutton" tabindex="1" />
              </label> 
                magic wand </th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><input name="radiobutton" type="radio" value="radiobutton" tabindex="1" />
                Erase Tool </th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><input name="radiobutton" type="radio" value="radiobutton" tabindex="1" />
                Line Tool </th>
              <th width="150" align="left" bgcolor="#C5E7F5" scope="col"><input name="radiobutton" type="radio" value="radiobutton" tabindex="1" /> 
                Pen Tool </th>
              <th width="128" align="center" bgcolor="#C5E7F5" scope="col"><a href="Viewtutorial.php?<?php echo $idd; ?>">
                <label></label>
              </a></th>
            </tr>
          </table>
        </div></th>
        </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th width="158" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
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
