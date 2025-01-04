<?php
session_start();
$srollno=$_SESSION["srollno"];
$paymentfor=$_GET['paymentfor'];
include 'config.php';
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$ff="Fine";
$query = " SELECT * FROM n_accounts WHERE formonth='$paymentfor' AND rollno='$srollno' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$amount=mysql_result($result,$i,"amount");
$totalfine=$num *25;
?>
<table width="351" height="82" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td width="156" bgcolor="#C5E7F5" class="style2">Amount</td>
    <td width="188" bgcolor="#C5E7F5"><span class="style2"><?php echo $amount; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Total Payable Amount </td>
    <td bgcolor="#C5E7F5" class="style2"><?php echo $amount; ?>
    <input name="rollno" type="hidden" id="rollno" value="<?php echo $srollno; ?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5">Payment Type </td>
    <td bgcolor="#C5E7F5"><select name="paymenttype" class="style2" id="paymenttype" tabindex="1">
      <option value="Full Payment" selected="selected">Full Payment</option>
      <option value="Partial Payment">Partial Payment</option>
        </select></td>
  </tr>
</table>
