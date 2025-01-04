<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/feespay.js"></script>
<script type="text/javascript" src="accounts/stmenu.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<script type="text/javascript" src="js/fees.js"></script>	
<script type="text/javascript" src="js/cheque.js"></script>	
<script type="text/javascript" src="js/fine.js"></script>	
<script type="text/javascript" src="js/oth.js"></script>

<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="i_hate_IE.css" />
<![endif]-->
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
.button_style1 {
	font-family: Arial, Helvetica, sans-serif;
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
include 'config.php';
include 'logincheck.php';
?>
<form name="form" method="post" action="feespay2.php">
<script>
function clea()
{
var ss="";
document.getElementById("fees").innerHTML = ss;
}
function fee()
{
alert("ashok");
fes()
}
/////////////////////////////////////////////////////////////////
function finee()
{
var pfor=document.form.paymentfor.options[document.form.paymentfor.selectedIndex].value;
if (pfor == "Fine")
{
fine();
}
else
{
oth();
}
}
function che()
{
//var a=this.form.text_content.value
var pymode=document.form.paymentmode.options[document.form.paymentmode.selectedIndex].value;
if (pymode == "Cheque")
{
cheque();
}
if (pymode == "Credit Card")
{
ccard();
}
if (pymode == "DD")
{
dd();
}
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
        <th height="24" colspan="4" align="left" background="images/bar3.gif" class="style1" scope="col">Fees Pay </th>
      </tr>
      <tr>
        <th height="20" colspan="4" align="left" bgcolor="#FFFFFF" scope="row"><table width="749" border="0" cellpadding="1" cellspacing="1" bordercolor="#C5E7F5">
          <tr>
            <td width="126" bgcolor="#C5E7F5" class="style2">Search By </td>
            <td width="212" bgcolor="#C5E7F5"><label>
              <select name="searchby" class="style2" id="searchby" tabindex="1">
                <option value="studentname" selected="selected">Name</option>
                <option value="rollno">Roll No</option>
                <option value="invoiceno">Invoice No</option>
              </select>
            </label></td>
            <td width="160" height="23" bgcolor="#C5E7F5" class="style2">Search </td>
            <td width="238" bgcolor="#C5E7F5">
              <input type="text" name="text_content" class="style2" tabindex="1" id="text_content" size="30" onfocus="clea();" onkeyup="getScriptPage('box','text_content');"/>
            <div id="box"></div></td>
            </tr>
        </table></th>
        </tr>
		

      <tr>
        <th height="24" colspan="4" align="left" bgcolor="#FFFFFF" class="style1" scope="row"><div align="left" class="style2" id="fees" ></div></th>
        </tr>
      <tr>
        <th height="24" colspan="4" align="left" background="images/bar3.gif" bgcolor="#C5E7F5" class="style1" scope="row">Payment Details </th>
        </tr>
      <tr>
        <th width="173" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Payment Mode  </th>
        <th width="164" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label class="style2">
          <select name="paymentmode" class="style2" id="paymentmode" tabindex="1" onchange="che();" >
            <option value="Cash" selected="selected">Cash</option>
            <option value="Cheque">Cheque</option>
            <option value="Credit Card">Credit Card</option>
            <option value="DD">DD</option>
          </select>
        </label></th>
        <th width="202" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Amount</th>
        <th width="200" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="amount" type="text" class="style2" id="amount" tabindex="1" size="20" onfocus="fees();"/></th>
      </tr>
      <tr>
        <th height="23" colspan="4" align="left" bgcolor="#FFFFFF" class="style2" scope="row"><div align="left" class="style2" id="payment" >
          </div></th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Discount</th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
          <select name="discount" class="style2" id="discount" tabindex="1">
            <option value="0" selected="selected">0%</option>
            <option value="10">10%</option>
            <option value="25">25%</option>
            <option value="50">50%</option>
            <option value="75">75%</option>
            <option value="100">100%</option>
          </select>
        </label></th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Comment</th>
        <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
          <input name="comment" type="text" class="style2" id="comment" tabindex="1" size="60" />
        </label></th>
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
        <th bgcolor="#C5E7F5" scope="row"><a href="javascript: feespay3();"></a></th>
        <th colspan="3" align="right" bgcolor="#C5E7F5" scope="row"><a href="javascript: fee();">
          <label>
          <input name="Submit" type="submit" class="style2" tabindex="1" value="Submit" />
          </label>
          <img src="images/submit.gif" alt="submit" width="73" height="25" border="0" class="button_style1" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
