<?php
include 'config.php';
include 'logincheck.php';
$caseid=$_GET['caseid'];
mysql_connect("$serverip",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM n_complaints WHERE caseid='$caseid'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$caseid=mysql_result($result,$i,"caseid");
$srename=mysql_result($result,$i,"srename");
$faculty=mysql_result($result,$i,"faculty");
$batch=mysql_result($result,$i,"batch");
$datee=mysql_result($result,$i,"datee");
$status=mysql_result($result,$i,"status");
$issue=mysql_result($result,$i,"issue");
?>
<table width="753" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td width="153" height="23" align="left" bgcolor="#C5E7F5" class="style2">Case ID </td>
    <td width="200" align="left" bgcolor="#C5E7F5" class="style2"><?php echo $caseid; ?>
    <input name="caseid" type="hidden" id="caseid" value="<?php echo $caseid; ?>" /></td>
    <td width="161" align="left" bgcolor="#C5E7F5" class="style2">Batch</td>
    <td width="226" align="left" bgcolor="#C5E7F5" class="style2"><?php echo $batch; ?></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#C5E7F5" class="style2">Sre Name </td>
    <td align="left" bgcolor="#C5E7F5" class="style2"><?php echo $srename; ?></td>
    <td align="left" bgcolor="#C5E7F5" class="style2">Date</td>
    <td align="left" bgcolor="#C5E7F5" class="style2"><?php echo $datee; ?></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#C5E7F5" class="style2">Faculty</td>
    <td align="left" bgcolor="#C5E7F5" class="style2"><?php echo $faculty; ?></td>
    <td align="left" bgcolor="#C5E7F5" class="style2">Status</td>
    <td align="left" bgcolor="#C5E7F5" class="style2"><?php echo $status; ?></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#C5E7F5" class="style2">Issue</td>
    <td colspan="3" align="left" bgcolor="#C5E7F5" class="style2"><?php echo $issue; ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#C5E7F5" class="style2">Reply</td>
    <td colspan="3" align="left" bgcolor="#C5E7F5" class="style2"><textarea name="reply" cols="60" rows="4" class="style2" id="reply" tabindex="1"></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#C5E7F5">&nbsp;</td>
    <td colspan="3" align="right" bgcolor="#C5E7F5"><label><a href="javascript: submitt();"><img src="images/submit.gif" alt="submit" width="73" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
  </tr>
</table>
