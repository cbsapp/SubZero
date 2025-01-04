<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome To Nucleus</title>
<style type="text/css">
<!--
body {
	background-color: #333333;
}
#Layer1 {
	position:absolute;
	width:45;
	height:45;
	z-index:1;
	left: 297px;
	top: 228px;
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; color: #FFFFFF; }
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; font-weight: bold; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {
	font-size: 8px;
	font-family: Arial, Helvetica, sans-serif;
}
.style22 {
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
.style24 {color: #FFFFFF}
.header_style {font-family: "Times New Roman", Times, serif;
	font-size: 24px;
	font-style: italic;
	font-weight: bold;
	color: #FFFF66;
}
-->
</style>
</head>

<body>
<script>
function main() {
window.location = "main.php";
}
</script>
<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
include 'logincheck.php';
///$timee=date("h:i");
$timee = date('h:i A',time()+(3600*5.5));
$datee=date("Y-m-d");
$msg=$_GET['msg'];
?>
<form id="form1" name="form1" method="post" action="assignfaculty_save.php">
  <table width="916" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="100" colspan="2"><img src="images/top.jpg" alt="top" width="933" height="98" /></td>
  </tr>
  <tr>
    <td width="106" height="637" align="right" valign="top" bgcolor="#CCCCCC"><table width="100" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><img src="Images/mytaskheader.jpg" alt="mydayheader" width="82" height="42" /></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="mytask.php"></a></td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="createbatch.php">Create Batch </a></td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="assignstudent.php">Assign Student</a> </td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="createfaculty.php">Create Faculty </a></td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="assignfaculty.php">Assign Faculty </a></td>
      </tr>
      <tr>
        <td height="25" class="style13"><a href="batchtransfer.php">Batch Transfer</a> </td>
      </tr>
      <tr>
        <td class="style13"><a href="myactivity_viewcomment.php"></a><a href="myactivity_addcomment.php"></a></td>
      </tr>
    </table>
      <p>&nbsp;</p></td>
    <td width="810" valign="top" bgcolor="#FFFFFF"><table width="818" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="818" height="30" colspan="17" bgcolor="#0033FF"><table width="778" border="0">
          <tr>
            <td width="35">&nbsp;</td>
            <td width="561"><span class="header_style">Welcome <?php echo $uname; ?><span class="style2">
              <input name="doaction" type="hidden" id="doaction" value="ashok" />
            </span></span></td>
            <td width="168"><label>
              <input type="button" name="Submit22"  onclick="main()" value="Back To main" tabindex="1" />
            </label></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="17" valign="middle" bordercolor="#FFFFFF" bgcolor="#CCCCCC" class="style1">&nbsp;</td>
      </tr>
      <tr>
        <td height="24" colspan="17" align="center" valign="middle" bordercolor="#FFFFFF" bgcolor="#CCCCCC" class="style1"><label><script>
function compose() {
document.getElementById("doaction").value = "compose";
document.form1.submit();
//alert('Are you sure you want to give us the deed to your house?');
}
function inbox() {
window.location = "inbox.php";
}
function forward1() {
document.getElementById("doaction").value = "forward";
document.form1.submit();
}
function sent() {
window.location = "senditems.php";
}
function trash() {
window.location = "trash.php";
}
</script>
        <?php echo $msg; ?></label></td>
        </tr>
      
    </table>
      <table width="819" border="0">
        <tr>
          <td width="356" height="25" align="center" bgcolor="#0033FF" class="style1"><label></label>
            <label></label>
            <span class="style3">Faculty Name </span></td>
          <td width="358" height="25" align="center" bgcolor="#0033FF" class="style3">Batch Name </td>
          <td height="25" align="center" bgcolor="#0033FF" class="style1">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" align="center" bgcolor="#CCCCCC" class="style1">
            <select name="facultyname" id="facultyname" tabindex="1">
			<?php
			include 'db.php';
//			mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$faculty="a";
$query2 = " SELECT * FROM studentprofile WHERE facultyname='$faculty' ORDER BY batchname DESC";
$result2=mysql_query($query2) or die('Error, query failed');
$num2=mysql_numrows($result2);
$x=0;
$vv=0;
while ($x<$num2)
{
$bname=mysql_result($result2,$x,"batchname");
$zz[$vv]=$bname;
$vv++;
$query3 = " SELECT * FROM studentprofile WHERE batchname='$bname' ORDER BY batchname DESC";
$result3=mysql_query($query3) or die('Error, query failed');
$num3=mysql_numrows($result3);
$x=$num3+$x;
}
$queryst = " SELECT * FROM login ORDER BY id DESC";
$resultst=mysql_query($queryst) or die('Error, query failed');
$numst=mysql_numrows($resultst);
echo $numst;
$ist=0;
while ($ist<$numst)
{
$uuname=mysql_result($resultst,$ist,"uname");
$sssid=mysql_result($resultst,$ist,"id");

			?>
              <option value="<?php echo $uuname; ?>"><?php echo $uuname; ?></option>
			  <?php
			  $ist++;
			  }
			  ?>
            </select>
            </label></td>
          <td align="center" bgcolor="#CCCCCC" class="style1"><label>
            <select name="batchname" id="batchname" tabindex="1">
			<?php
			$mm=0;
while ($mm<$vv)
{

			?>
              <option value="<?php echo $zz[$mm]; ?>"><?php echo $zz[$mm]; ?></option>
			  <?php
			  $mm++;
			  }
			  ?>
            </select>
          </label></td>
          <td height="25" align="center" bgcolor="#CCCCCC" class="style1">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#0000FF" class="style1">&nbsp;</td>
          <td width="93" align="center" bgcolor="#0000FF" class="style22"><label>
            <input name="Submit" type="submit" class="style22" value="Continue" />
          </label></td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/bottom.jpg" alt="bottom" width="932" height="25" /></td>
  </tr>
</table>
</form>
</body>
</html>
