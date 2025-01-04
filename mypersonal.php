<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="calendarDateInput.js"></script>
<script type="text/javascript" src="menu/stmenu.js"></script>
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
<form name="form" action="mypersonal_save.php">
<SCRIPT language="JavaScript">
function sform()
{
alert("ashok");
yy=document.form.followdate.value;
alert(yy);
}

</SCRIPT> 
<SCRIPT language="JavaScript">
function submitform()
{
  document.form.submit();
}
</SCRIPT> 

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
        <th height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">Personal Information  </th>
      </tr>
      <tr>
        <th colspan="4" bgcolor="#C5E7F5" scope="row"><div align="center" class="style2" id="msg" >
          <label>          </label>
        </div></th>
        </tr>
		
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Stage 1of 4 </th>
        </tr>
      <tr>
        <th width="158" align="left" bgcolor="#C5E7F5" class="style2" scope="row">First Name </th>
        <th width="193" height="24" align="left" bgcolor="#C5E7F5" scope="row"><input name="firstname" type="text" class="style22" id="firstname" tabindex="1" size="30" /></th>
        <th width="154" align="left" bgcolor="#C5E7F5" class="style2" scope="row">S / o [Son of] </th>
        <th width="234" align="left" bgcolor="#C5E7F5" scope="row"><input name="sonof" type="text" class="style22" id="sonof" tabindex="1" size="25" /></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Last Name </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="lastname" type="text" class="style22" id="lastname" tabindex="1" size="35" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Place of Birth </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          
          <input name="placeofbirth" type="text" class="style22" id="placeofbirth" tabindex="1" size="20" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Gender</th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><label>
          <select name="gender" class="style22" id="gender" tabindex="1">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
          </select>
        </label></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Present Address </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="presentaddress" type="text" class="style22" id="presentaddress" tabindex="1" size="35" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Date of Birth  </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><script>DateInput('dateofbirth', true, 'YYYY-MM-DD')</script></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Permanent Address </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row" class="style2"><label class="style2">
          
            <span class="style1">
            <input name="permanentaddress" type="text" class="style22" id="permanentaddress" tabindex="1" size="35" />
            </span></label></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Marital Status </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><label>
          <select name="maritalstatus" class="style22" id="maritalstatus" tabindex="1">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
          </select>
        </label></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Emergency Contact No </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="emcontactno" type="text" class="style22" id="emcontactno" tabindex="1" size="25" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Blood Group </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="bloodgroup" type="text" class="style22" id="bloodgroup" tabindex="1" size="15" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Mail ID  </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="mailid" type="text" class="style22" id="mailid" tabindex="1" size="30" />
        </span></th>
      </tr>
	  <tr>
        <th height="24" colspan="4" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: submitform();"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
