<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="calendarDateInput.js"></script>
<script type="text/javascript" src="menu/stmenu.js"></script>
<script type="text/javascript" src="js/counc.js"></script>
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
<?php
include 'db.php';
include 'config.php';
?>
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
        <th height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">New Enquiry </th>
      </tr>
      <tr>
        <th colspan="4" bgcolor="#C5E7F5" scope="row"><div align="center" class="style2" id="msg" >
          <label>
          
          </label>
        </div></th>
        </tr>
		
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Personal Details </th>
        </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Enquiry Name </th>
        <th width="193" height="24" align="left" bgcolor="#C5E7F5" scope="row"><input name="enquiryname" type="text" class="style22" id="enquiryname" tabindex="1" size="30" /></th>
        <th width="154" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Phone</th>
        <th width="234" align="left" bgcolor="#C5E7F5" scope="row"><input name="phone" type="text" class="style22" id="phone" tabindex="2" size="25" /></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Street Address </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="streetaddress" type="text" class="style22" id="streetaddress" tabindex="2" size="35" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Mobile</th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="mobile" type="text" class="style22" id="mobile" tabindex="2" size="35" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Area</th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style30">
          <input name="address2" type="text" class="style22" id="address2" tabindex="2" size="35" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">E-Mail</th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="email" type="text" class="style22" id="email" tabindex="2" size="35" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">City </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="city" type="text" class="style22" id="city" tabindex="2" size="20" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Date of Birth </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row" class="style2"><label class="style2"><script>DateInput('dateofbirth', true, 'YYYY-MM-DD')</script>
          
        </label></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">State</th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="state" type="text" class="style22" id="state" tabindex="2" size="25" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Pin Code </th>
        <th height="24" align="left" bgcolor="#C5E7F5" scope="row"><span class="style1">
          <input name="pincode" type="text" class="style22" id="pincode" tabindex="2" size="30" />
        </span></th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">I am Currently </th>
        </tr>
		<tr>
        <th height="24" colspan="4" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2"> Student
            <input name="currently" type="radio" id="currently" tabindex="11" value="student" onclick="unemployed();"/>
            <label></label>
Unemployed
<input name="currently" type="radio" id="radio3" tabindex="11" value="unemployed" onclick="unemployed();"/>
Employed
<input name="currently" type="radio" id="radio2" tabindex="11" value="employed"  onclick="employed();"/>
Self Employed
<label></label>
<input name="currently" type="radio" id="radio" tabindex="11" value="self employed" onclick="employed();"/>
        </span></th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Qualification</th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Under Graduate
                <input name="qualification" type="radio" id="qualification" tabindex="11" value="undergraduate" />
Graduate
<input name="qualification" type="radio" id="radio7" tabindex="11" value="graduate" />
Post
             
            Graduate
<input name="qualification" type="radio" id="radio6" tabindex="11" value="postgraduate" />
Professional
<input name="qualification" type="radio" id="radio5" tabindex="11" value="professional" />
Diploma
<input name="qualification" type="radio" id="radio4" tabindex="11" value="diploma" />
        </span></th>
        </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">School/College Name</span></th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="college" type="text" class="style22" id="college" tabindex="2" size="40" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Discipline</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="discipline" type="text" class="style22" id="discipline" tabindex="2" size="30" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Year</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="year" type="text" class="style22" id="year" tabindex="2" size="25" />
        </span></th>
      </tr>
      
      <tr>
        <th height="21" colspan="4" align="left" bgcolor="#C5E7F5" scope="row"><div align="left" class="style2" id="msg1"><span class="style1">
          <input name="officephoneno" type="hidden" id="officephoneno" />
        </span><span class="style1">
        <input name="designation" type="hidden" id="designation" />
        </span><span class="style1">
        <input name="companyname" type="hidden" id="companyname" />
        </span></div></th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row"><span class="style1">Parent Information</span></th>
        </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Parent /Guardian Name</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="parent" type="text" class="style22" id="parent" tabindex="2" size="35" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Company Name </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="pcompanyname" type="text" class="style22" id="pcompanyname" tabindex="2" size="35" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Designation</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="pdesignation" type="text" class="style22" id="pdesignation" tabindex="2" size="35" />
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Phone No </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="pphoneno" type="text" class="style22" id="pphoneno" tabindex="2" size="35" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Mobile No</span></th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="pmobileno" type="text" class="style22" id="pmobileno" tabindex="2" size="30" />
        </span></th>
      </tr>
      <tr>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row"><span class="style1">Area Of Interest</span></th>
        <th height="24" colspan="2" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row"><span class="style1">Advertisement Mode</span></th>
        </tr>
      <tr>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><select name="interest" class="style2" id="interest" tabindex="1">
          <option value="none" selected="selected">------None------</option>
          <option value="Graphics">Graphics</option>
          <option value="2D Animation">2D Animation</option>
          <option value="3D Animation">3D Animation</option>
          <option value="Post Production (Combustion)">Post Production (Combustion)</option>
          <option value="Web">Web</option>
          <option value="Corporate Presentation">Corporate Presentation</option>
          <option value="Special Efx">Special Efx</option>
          <option value="Adv Animation (Maya)">Adv Animation (Maya)</option>
                        </select></th>
        <th height="24" colspan="2" align="left" bgcolor="#C5E7F5" scope="row"><table width="367" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <th width="153" align="left" scope="col"><span class="style2">
              <select name="advert" class="style2" tabindex="1" onchange="advertmode();">
                <option value="none" selected="selected">------None------</option>
                <option value="Paper Insert">Paper Insert</option>
                <option value="Banner">Banner</option>
                <option value="News Paper">News Paper</option>
                <option value="Hoarding">Hoarding</option>
                <option value="Friends/Relatives">Friends/Relatives</option>
                <option value="Other (Specify)">Other (Specify)</option>
                                                                      </select>
            </span></th>
            <th width="207" scope="col"><div align="left" class="style2" id="msg2"><span class="style1">
              <input name="other" type="hidden" id="other" />
            </span> </div></th>
          </tr>
        </table></th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row"><span class="style1">Are you interested in Placements</span></th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#C5E7F5" scope="row"><span class="style2">
          <input type="radio" name="placement" value="checkbox" tabindex="11" />
Yes
<input type="radio" name="placement" value="checkbox" tabindex="11" />
No </span></th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" scope="row"><span class="style1">Office Use</span></th>
        </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29"> Counselor Attended </span></th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1"><?php echo $uname; ?>
            <input name="counselorattended" type="hidden" id="counselorattended" value="<?php echo $uname; ?>" />
        </span></th>
      </tr>
      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Enquiry Status :
            <input name="enquiry" type="radio" id="enquiry" tabindex="11" value="p" />
P
<input type="radio" name="enquiry" value="sp" tabindex="11" />
SP
<input type="radio" name="enquiry" value="np" tabindex="11" />
NP
<input type="radio" name="enquiry" value="f" tabindex="11" />
F </span></th>
        </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Course Suggested</span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <label>
		  
          <select name="coursesuggested" class="style2" id="coursesuggested" tabindex="1">
		              <option value="none">--None--</option>
					  <?php
					  include 'db.php';
					  include 'config.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query3 = " SELECT * FROM n_courses ORDER BY id DESC";
$result3=mysql_query($query3) or die('Error, query failed');
$num3=mysql_numrows($result3);
$y=0;
while($y<$num3)
{
$coursename=mysql_result($result3,$y,"coursename");
$nosubject=mysql_result($result3,$y,"nosubject");
$duration=mysql_result($result3,$y,"duration");
$query2 = " SELECT * FROM n_courses WHERE coursename='$coursename' ORDER BY id DESC";
$result2=mysql_query($query2) or die('Error, query failed');
$num2=mysql_numrows($result2);

		  ?>
		  <option value="<?php echo $coursename; ?>"><?php echo $coursename; ?></option>
		  <?php
		  $y=$y+$num2;
			}
		  ?>
          </select>
          </label>
        </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Batch Date </span></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="batchdate" type="text" class="style22" id="batchdate" tabindex="2" size="25" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Remarks</span></th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style1">
          <input name="remarks" type="text" class="style22" id="remarks" tabindex="2" size="60" />
        </span></th>
      </tr>
      <tr>
        <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style29">Follow Up Date </span></th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><span class="style2"><script>DateInput('followdate', true, 'YYYY-MM-DD')</script>
          </span></th>
      </tr>
      <tr>
        <th width="158" align="left" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" scope="row">&nbsp;</th>
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
