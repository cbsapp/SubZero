<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include 'db.php';
include 'config.php';
include 'logincheck.php';
include 'tipjoke.php';
include 'menudeceider.php';
?>
<script type="text/javascript" src="calendarDateInput.js"></script>
<script type="text/javascript" src="menu/stmenu.js"></script>
<script type="text/javascript" src="js/follow.js"></script>
<script type="text/javascript" src="js/scw.js"></script>
<?php echo $headd; ?>
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
.style31 {
	color: #074D82;
	font-size: 12px;
}
.style32 {
	color: #074D82;
	font-size: 11px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>
<form name="form">
<SCRIPT language="JavaScript">
function sform()
{
alert("ashok");
yy=document.form.followdate.value;
alert(yy);
}
</SCRIPT> 
<table width="982" height="142" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="4"><img src="images/nucleus.gif" width="977" height="117" /></td>
  </tr>
  <tr>
    <td colspan="4"><?php echo $menuu; ?></td>
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
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Statistics </th>
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
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Permission </th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">2</th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Late Available </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">2</span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Tip of The Day </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Click Here To Add </th>
        </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Joke of The Day </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Click Here To Add </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Joke of The Day </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">Click Here To Add </span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row">Feedback </th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">For Your Feedback Click Here</span></th>
      </tr>
    </table></td>
    <td width="1" bgcolor="#064377">&nbsp;</td>
    <td width="751" colspan="2" valign="top"><table width="752" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <th height="24" align="left" background="images/bar3.gif" class="style1" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="22" bgcolor="#C5E7F5" scope="row"><div align="left" class="style2" id="msg" >
          <label>          </label>
        </div></th>
        </tr>
	  <tr>
        <th height="24" bgcolor="#C5E7F5" scope="row"><table width="718" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <th height="122" colspan="3" scope="col"><table width="639" height="90" border="0" cellpadding="1" cellspacing="1">
              <tr>
                <th width="597" height="88" align="right" valign="middle" background="images/announcement.gif" scope="col"><p>&nbsp;</p>
                   <table width="580" border="0" cellspacing="1" cellpadding="1">
                  <tr>
                    <th width="592" class="style32" scope="col"><?php echo $acco; ?></th>
                  </tr>
                </table></th>
              </tr>
            </table></th>
            </tr>
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th width="312" height="122" background="images/mayihelpyou.gif" scope="col"><table width="240" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="236" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" class="style32" scope="row">Click Here To Get Help </th>
                </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
            <th width="84" scope="col">&nbsp;</th>
            <th width="312" background="images/tipoftheday.gif" scope="col"><table width="250" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="246" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" scope="row"><span class="style32"><?php echo $tip; ?></span></th>
                </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="122" background="images/feedback.gif" scope="row"><table width="250" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="246" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" class="style32" scope="row">Click Here To Add Feedback </th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
            <th scope="row">&nbsp;</th>
            <th background="images/jokeoftheday.gif" scope="row"><table width="250" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="246" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" scope="row"><span class="style32"><?php echo $joke; ?></span></th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="122" background="images/customer.gif" scope="row"><table width="250" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="246" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" scope="row"><span class="style32"><?php echo $customer; ?></span></th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
            <th scope="row">&nbsp;</th>
            <th background="images/thoughtoftheday.gif" scope="row"><table width="250" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <th width="246" height="37" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th bgcolor="#FFFFFF" scope="row"><span class="style32"><?php echo $thought; ?></span></th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table></th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        </table></th>
	  </tr>
      <tr>
        <th align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: submitt();"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
