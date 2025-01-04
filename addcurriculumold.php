<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="menu/stmenu.js"></script>
<script type="text/javascript" src="js/curriculumjs.js"></script>
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
-->
</style></head>

<body>
<script>
function cc1()
{
var no=document.getElementById("sec1")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject1").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject1").value=txt
}
</script>
<form name="form">
<table width="973" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="5"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="5"><script type="text/javascript" src="menu/menu.js"></script></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Welcome,</td>
    <td width="1" rowspan="29" bgcolor="#064377">&nbsp;</td>
    <td colspan="2" background="images/bar3.gif"><span class="style1">Add Curriculum </span></td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#C5E7F5" class="style4">Ashok</td>
    <td colspan="2" bgcolor="#C5E7F5">&nbsp;</td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Todays Date </td>
    <td width="141" bgcolor="#C5E7F5" class="style2">Curriculum Year </td>
    <td width="608" bgcolor="#C5E7F5">
      <label>
      <select name="courseyear" class="style2" id="courseyear" tabindex="1">
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008" selected="selected">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
      </label></td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#C5E7F5" class="style2">2008-06-07</td>
    <td bgcolor="#C5E7F5" class="style2">Course Name  </td>
    <td bgcolor="#C5E7F5"><input name="coursename" type="text" class="style2" id="coursename" tabindex="1" size="25" /></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">&nbsp;</td>
    <td bgcolor="#C5E7F5" class="style2">No of Semester </td>
    <td bgcolor="#C5E7F5"><label>
      <select name="semester" class="style2" id="semester" tabindex="1" onchange="submittt()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">&nbsp;</td>
    <td colspan="2" align="left" bgcolor="#FFFFFF"><div id="crr"></div></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Todays Reminder </td>
    <td colspan="2" align="right" bgcolor="#C5E7F5"><a href="javascript: submitform()"><img src="images/submit.gif" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="24" bgcolor="#C5E7F5" class="style2">Today Total Reminder </td>
    <td height="24" bgcolor="#C5E7F5" class="style2">2</td>
    <td colspan="2" background="images/bar3.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#C5E7F5" class="style2">To Add Reminder Click Here </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Leave Statistics </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="142" bgcolor="#C5E7F5"><span class="style2">Casual Leave </span></td>
    <td width="73" bgcolor="#C5E7F5" class="style2">2</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Sick Leave </td>
    <td bgcolor="#C5E7F5" class="style2">1</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Late Statistics </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Late Available </td>
    <td bgcolor="#C5E7F5" class="style2">2</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Permission Statistics </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Permission</td>
    <td bgcolor="#C5E7F5" class="style2">2</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Salary Statistics </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Basic</td>
    <td bgcolor="#C5E7F5" class="style2">5500</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">PF</td>
    <td bgcolor="#C5E7F5" class="style2">1000</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">HA</td>
    <td bgcolor="#C5E7F5" class="style2">1000</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Other </td>
    <td bgcolor="#C5E7F5" class="style2">500</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Gross Salary </td>
    <td bgcolor="#C5E7F5" class="style3">12000</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Experience Statistics </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">2 Years </td>
    <td bgcolor="#C5E7F5" class="style2">2 Month </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Feedback</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#C5E7F5" class="style2">For Your Feedback Click Here </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" background="images/bar3.gif" class="style1">Add Your Joke of the Day </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#C5E7F5" class="style2">Click Here To Add </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#C5E7F5" class="style2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="24" colspan="5" align="center" bgcolor="#064377" class="style1">Todays Joke </td>
  </tr>
  <tr>
    <td height="24" colspan="5" align="center" bgcolor="#C5E7F5" class="style2">An Ant says i am pragnent and the father of my child is Elephant. </td>
  </tr>
  <tr>
    <td height="24" colspan="5" align="center" bgcolor="#064377" class="style1">Copyright &copy; 2008 All Rights Reserved. Website Designed And Hosted By Vmaxhost.com </td>
  </tr>
</table>
</form>
</body>
</html>
