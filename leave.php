<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="calendarDateInput.js"></script>
<script type="text/javascript" src="menu/stmenu.js"></script>
<script type="text/javascript" src="scw.js"></script>
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
.style31 {	color: #FFFFFF;
	font-weight: bold;
}
.style23 {font-size: 12px; font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif;}
-->
</style></head>

<body>
<form name="form" action="leave_1.php">
<?php
include 'config.php';
include 'logincheck.php';
$datee=date("Y-m-d");
?>
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
        <th height="24" align="left" background="images/bar3.gif" class="style1" scope="col">Leave</th>
      </tr>
      <tr>
        <th bgcolor="#C5E7F5" scope="row"><div align="left" class="style2" id="msg" >
          <label>          </label>
        </div></th>
        </tr>
	  <tr>
        <th height="24" bgcolor="#FFFFFF" scope="row"><div align="left" class="style2" id="msg1" >
          <label> </label>
          <table width="747" border="0">
            <tr>
              <td width="155" height="23" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Name</td>
              <td width="210" align="left" bgcolor="#C5E7F5" class="style23"><?php echo $uname; ?></td>
              <td width="155" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Date</td>
              <td width="209" align="left" bgcolor="#C5E7F5" class="style23"><?php echo $datee; ?></td>
            </tr>
            <tr>
              <td height="23" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Nature of Leave </td>
              <td align="left" bgcolor="#C5E7F5" class="style31"><label>
                <select name="natureofleave" class="style2" id="natureofleave" tabindex="3">
                  <option value="Casual Leave">Casual Leave</option>
                  <option value="Sick Leave">Sick Leave</option>
                  <option value="Compensation Leave">Compensation Leave</option>
                </select>
              </label></td>
              <td align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Leave Type </td>
              <td align="left" bgcolor="#C5E7F5" class="style31"><label>
                <select name="leavetype" class="style2" id="leavetype" tabindex="3" onchange="leave()">
                  <option value="none" selected="selected">--None--</option>
                  <option value="fn">FN-Half Day</option>
                  <option value="an">AN-Half Day</option>
                  <option value="day">1 Day</option>
                  <option value="moree">More than a Day</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td height="23" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">From Date </td>
              <td align="left" bgcolor="#C5E7F5" class="style2"><script>DateInput('fdate', true, 'YYYY-MM-DD')</script></td>
              <td align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">To Date </td>
              <td align="left" bgcolor="#C5E7F5" class="style2"><script>DateInput('tdate', true, 'YYYY-MM-DD')</script></td>
            </tr>
            <tr>
              <td height="23" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">No of  Days </td>
              <td align="left" bgcolor="#C5E7F5" class="style31"><label>
                <input name="nodays" type="text" class="style2" id="nodays" />
              </label></td>
              <td align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Contact No </td>
              <td align="left" bgcolor="#C5E7F5" class="style31"><label>
                <input name="contactno" type="text" class="style2" id="contactno" />
              </label></td>
            </tr>
            <tr bgcolor="#84CEFF">
              <td height="23" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1">Reason</td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#C5E7F5"><table width="692" border="0">
                  <tr>
                    <td width="686" align="center" bgcolor="#C5E7F5"><label>
                      <textarea name="reason" cols="60" rows="3" class="style2" id="reason"></textarea>
                    </label></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </div></th>
      </tr>
      <tr>
        <th align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: submittt();">
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
