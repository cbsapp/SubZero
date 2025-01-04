<?php
session_start();
$srollno=$_SESSION["srollno"];
include 'config.php';
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$ff="Fine";
$query = " SELECT * FROM n_accounts WHERE formonth='$ff' AND rollno='$srollno' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$totalfine=$num *25;
?>
<table width="351" height="82" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td width="156" bgcolor="#C5E7F5" class="style2">No of Days </td>
    <td width="188" bgcolor="#C5E7F5"><span class="style2"><?php echo $num; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5" class="style2">Total Fine </td>
    <td bgcolor="#C5E7F5" class="style2"><?php echo $totalfine; ?>
    <input name="rollno" type="hidden" id="rollno" value="<?php echo $srollno; ?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5">Payment Type  </td>
    <td bgcolor="#C5E7F5"><label>
      <select name="paymenttype" class="style2" id="paymenttype" tabindex="1">
        <option value="Full Payment" selected="selected">Full Payment</option>
        <option value="Partial Payment">Partial Payment</option>
            </select>
    </label></td>
  </tr>
</table>
