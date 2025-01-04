<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/curriculumjs.js"></script>
<script type="text/javascript" src="adminjs/stmenu.js"></script>
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
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="addcurriculum2.php">
<script>
function submitt()
{
document.form.submit()
}
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
function cc2()
{
var no=document.getElementById("sec2")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject2").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject2").value=txt
}
function cc3()
{
var no=document.getElementById("sec3")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject3").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject3").value=txt
}
function cc4()
{
var no=document.getElementById("sec4")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject4").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject4").value=txt
}
function cc5()
{
var no=document.getElementById("sec5")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject5").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject5").value=txt
}
function cc6()
{
var no=document.getElementById("sec6")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject6").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject6").value=txt
}
function cc7()
{
var no=document.getElementById("sec7")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject7").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject7").value=txt
}
function cc8()
{
var no=document.getElementById("sec8")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject8").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject8").value=txt
}
function cc9()
{
var no=document.getElementById("sec9")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject9").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject9").value=txt
}
function cc10()
{
var no=document.getElementById("sec10")
var option=no.options[no.selectedIndex].text
var txt=document.getElementById("subject10").value
ttt=","
if (txt=="")
(
txt=txt + option
)
else
(
txt=txt + ttt + option
)
document.getElementById("subject10").value=txt
}
</script>
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
        <th height="24" colspan="2" align="left" background="images/bar3.gif" class="style1" scope="col">My Profile </th>
      </tr>
      <tr>
        <th colspan="2" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        </tr>
		
      <tr>
        <th width="150" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">Curriculum Year </span></th>
        <th width="595" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><select name="courseyear" class="style2" id="courseyear" tabindex="1">
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009" selected="selected">2009</option>
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
        </select></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">Course Name</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="coursename" type="text" class="style2" id="coursename" tabindex="1" size="25" /></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">No of Semester </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><select name="semester" class="style2" id="semester" tabindex="1" onchange="submittt()">
          <option value="0" selected="selected">0</option>
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
        </select></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#FFFFFF" class="style1" scope="row"><div align="center" class="style2" id="crr" >
          <label> </label>
        </div></th>
      </tr>
	  <tr>
        <th height="24" colspan="2" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        <th align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: submitt();"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
