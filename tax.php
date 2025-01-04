<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/curriculumjs.js"></script>
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
-->
</style></head>

<body>
<?php
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="tax2.php">
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
        <th height="24" colspan="2" align="left" background="images/bar3.gif" class="style1" scope="col">My Profile </th>
      </tr>
      <tr>
        <th colspan="2" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        </tr>
		
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Service Tax  </th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="servicetax" type="text" class="style2" id="servicetax" tabindex="1" size="20" /></th>
      </tr>
      <tr>
        <th width="150" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">Education Cess </span></th>
        <th width="595" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="educess" type="text" class="style2" id="educess" tabindex="1" size="15" /></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">Higher Cess </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="highercess" type="text" class="style2" id="highercess" tabindex="1" size="10" /></th>
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
