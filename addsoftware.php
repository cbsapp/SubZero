<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="adminjs/stmenu.js"></script>
<script type="text/javascript" src="js/addsoftware.js"></script>
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
<SCRIPT language="JavaScript">
function submittt()
{
  document.form1.submit();
}
</SCRIPT> 
<form id="form1" name="form1" method="post" action="addsoftware_save.php">
<table width="973" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="5"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="5"><script type="text/javascript" src="adminjs/menu.js"></script></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Welcome,</td>
    <td width="2" rowspan="28" bgcolor="#064377">&nbsp;</td>
    <td colspan="2" background="images/bar3.gif"><span class="style1">Add Software </span></td>
  </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#C5E7F5" class="style4">Ashok</td>
    <td colspan="2" align="center" bgcolor="#C5E7F5"><div align="center" class="style2" id="msg"> </div></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Todays Date </td>
    <td width="128" bgcolor="#C5E7F5" class="style2">Software Name </td>
    <td width="631" align="left" valign="top" nowrap="nowrap" bgcolor="#C5E7F5"><table width="574" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <th width="153" align="left" scope="col"><input name="softname" onchange="doWork();" type="text" class="style2" id="softname" tabindex="1" size="25" /></th>
          <th width="414" scope="col"><div align="left" class="style2" id="output1"> </div></th>
        </tr>
      </table></td>
    </tr>
  <tr>
    <td height="24" colspan="2" bgcolor="#C5E7F5" class="style2">2008-06-07</td>
    <td bgcolor="#C5E7F5" class="style2">Software Duration </td>
    <td bgcolor="#C5E7F5"><input name="softduration" type="text" class="style2" id="softduration" tabindex="1" size="15" onchange="doWork2();" /></td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">&nbsp;</td>
    <td colspan="2" align="left"><div align="left" id="addd"></div>
       </td>
  </tr>
  <tr>
    <td height="24" colspan="2" background="images/bar3.gif" class="style1">Todays Reminder </td>
    <td colspan="2" align="right" bgcolor="#C5E7F5"><a href="javascript: submittt()"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
    <td width="151" bgcolor="#C5E7F5"><span class="style2">Casual Leave </span></td>
    <td width="53" bgcolor="#C5E7F5" class="style2">2</td>
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
