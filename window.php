<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 10;
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style4 {
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<?php
include 'config.php';
$uuname=$_SESSION["uname"];
$status="Active";
$idd=$_GET['id'];
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM n_experience WHERE id='$idd' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$jobdescription=mysql_result($result,$i,"jobdescription");
?>
<table width="386" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th height="23" align="left" bgcolor="#064377" scope="col"><span class="style4">Job Description </span></th>
  </tr>
  <tr>
    <th height="24" align="left" class="style1 style2" scope="row"><?php echo $jobdescription; ?></th>
  </tr>
</table>
</body>
</html>
