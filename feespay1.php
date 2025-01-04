<?php
include 'config.php';
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$studentname=$_GET['studentname'];
$searchby=$_GET['searchby'];
$query = " SELECT * FROM n_student WHERE ".$searchby."='$studentname' ORDER BY taskid,id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$rollno=mysql_result($result,$i,"rollno");
$studentname=mysql_result($result,$i,"studentname");
$balancecoursefee=mysql_result($result,$i,"balancecoursefee");
$invoiceno=mysql_result($result,$i,"invoiceno");
$coursefee=mysql_result($result,$i,"coursefee");
$taskid="9000";
$query = " SELECT * FROM n_taxallocation WHERE taskid='$taskid' ORDER BY taskid,id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$servicetax=mysql_result($result,$i,"servicetax");
$educess=mysql_result($result,$i,"educess");
$highercess=mysql_result($result,$i,"highercess");
$st="Not Paid";
$query = " SELECT * FROM n_accounts WHERE studentname='$studentname' AND status='$st' ORDER BY id";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
session_start();
$_SESSION["srollno"] = $rollno;
?>
<style type="text/css">
<!--
.style2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #333333;
	font-size: 11px;
}
-->
</style>

<table width="747">
  <tr>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Student Name </th>
    <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $studentname; ?>&nbsp;</th>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Course Fees </th>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $coursefee; ?></th>
  </tr>
  <tr>
    <th width="146" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Student Roll No</th>
    <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $rollno; ?></th>
    <th width="157" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Pending Amount </th>
    <th width="191" height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $balancecoursefee; ?></th>
  </tr>
  <tr>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Receipt No </th>
    <th width="82" height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><input name="receiptno" type="text" class="style2" id="receiptno" tabindex="1" size="10" />
        <label></label></th>
    <th width="27" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
      <input name="autocreate" type="checkbox" id="autocreate" tabindex="1" value="auto" />
    </label></th>
    <th width="116" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Auto Create</th>
    <th colspan="2" rowspan="3" align="left" bgcolor="#FFFFFF" class="style2" scope="row"><div align="left" class="style2" id="fine" ></div></th>
  </tr>
  <tr>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Invoice No</th>
    <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style2" scope="row"><?php echo $invoiceno; ?></th>
  </tr>
  <tr>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Payment For </th>
    <th height="24" colspan="3" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><label>
      <select name="paymentfor" class="style2" tabindex="1" onchange="finee();">
	  <option value="None">None</option>
	  <?php
	  while($i<$num)
{
$formonth=mysql_result($result,$i,"formonth");
?>
        <option value="<?php echo $formonth; ?>"><?php echo $formonth; ?></option>
		<?php
		$i++;
		}
		?>
      </select>
    </label></th>
  </tr>
</table>
