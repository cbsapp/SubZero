<script type="text/javascript" src="js/scw.js"></script>
<script type="text/javascript" src="js/follow2.js"></script>
<style type="text/css">
<!--
.style1 {	font-size: 11px;
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #333333;
	font-size: 11px;
}
-->
</style>

<table width="748" border="0" cellspacing="1" cellpadding="1">
<?php
include 'db.php';
include 'config.php';
$tid=$_GET['tid'];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$stss="In Transit";
$query = " SELECT * FROM n_councelling WHERE taskid='$tid' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$enquiryname=mysql_result($result,$i,"name");
$mobile=mysql_result($result,$i,"mobile");
$phone=mysql_result($result,$i,"phone");
$coursesuggested=mysql_result($result,$i,"coursesuggested");
$createddate=mysql_result($result,$i,"createddate");
?>
            <tr>
              <th height="24" colspan="4" align="left" background="images/bar3.gif" scope="col"><span class="style1">Enquiry Details </span></th>
  </tr>
			   <tr>
              <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Enquiry Name </th>
              <th height="24" align="left" bgcolor="#C5E7F5" class="style22" scope="row"><?php echo $enquiryname; ?></th>
              <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">Course Suggested </th>
              <th align="left" bgcolor="#C5E7F5" class="style22" scope="row"><?php echo $coursesuggested; ?></th>
            </tr>
            <tr>
              <th width="163" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Mobile No / Phone No </th>
              <th width="236" height="24" align="left" bgcolor="#C5E7F5" class="style22" scope="row"><?php echo $mobile; ?>,<?php echo $phone; ?></th>
              <th width="174" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Enquiry Date </th>
              <th width="162" align="left" bgcolor="#C5E7F5" class="style22" scope="row"><?php echo $createddate; ?></th>
            </tr>
</table>
          <table width="748" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <th width="129" height="24" background="images/bar3.gif" class="style1" scope="col">Follow Up Date </th>
              <th width="465" background="images/bar3.gif" class="style1" scope="col">Remarks</th>
              <th width="144" background="images/bar3.gif" class="style1" scope="col">Next Follow Up Date </th>
            </tr>
			<?php
			include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query5 = " SELECT * FROM n_followup WHERE taskid='$tid' ORDER BY taskid,id DESC";
$result5=mysql_query($query5) or die('Error, query failed');
$num5=mysql_numrows($result5);
$i=0;
while($i<$num5)
{
$fudate=mysql_result($result5,$i,"fudate");
$nfudate=mysql_result($result5,$i,"nfudate");
$feedback=mysql_result($result5,$i,"feedback");
$taskid=mysql_result($result5,$i,"taskid");
			?>
            <tr>
              <th height="24" bgcolor="#C5E7F5" scope="row"><span class="style22"><?php echo $fudate; ?></span></th>
              <th align="left" bgcolor="#C5E7F5" scope="row"><span class="style22"><?php echo $feedback; ?></span></th>
              <th bgcolor="#C5E7F5" scope="row"><span class="style22"><?php echo $nfudate; ?></span></th>
            </tr>
			<?php
			$i++;
			}
			?>
          </table>
          <table width="748" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <th width="129" height="24" bgcolor="#C5E7F5" scope="col">Comment</th>
              <th width="272" align="left" bgcolor="#C5E7F5" scope="col"><label class="style22">
                <input name="comment" type="text" class="style22" id="comment" tabindex="1" value="" size="50" />
              </label></th>
              <th width="139" bgcolor="#C5E7F5" scope="col">Next Follow Date </th>
              <th width="195" align="left" bgcolor="#C5E7F5" scope="col"><label class="style22">
                  <input name="nfudate" type="text" id="nfudate" tabindex="1" class="style22" readonly="readonly"/>
              <img src="images/calendar.jpg" width="16" height="15"  class="style22" onclick="scwShow(scwID('nfudate'),event);"/></label></th>
            </tr>
            <tr>
              <th height="24" bgcolor="#C5E7F5" scope="col">Status</th>
              <th align="left" bgcolor="#C5E7F5" scope="col"><label>
                <select name="status" class="style22" id="status" tabindex="1" onchange="joined();">
                  <option value="none" selected="selected">--None--</option>
                  <option value="Registered">Registered</option>
                  <option value="Joined">Joined</option>
                  <option value="Lost">Lost</option>
                </select>
                <span class="style22">
                <input name="enquiryname" type="hidden" id="enquiryname" value="<?php echo $enquiryname; ?>" />
                <input name="mobile" type="hidden" id="mobile" value="<?php echo $mobile; ?>" />
                <input name="phone" type="hidden" id="phone" value="<?php echo $phone; ?>" />
                <input name="taskid" type="hidden" id="taskid" value="<?php echo $taskid; ?>" />
                <input name="coursesuggested" type="hidden" id="coursesuggested" value="<?php echo $coursesuggested; ?>" />
                </span></label></th>
              <th colspan="2" bgcolor="#C5E7F5" scope="col"><table width="322" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <th width="144" align="left" scope="col">&nbsp;</th>
                  <th width="171" align="left" scope="col"><div align="left" class="style2" id="msgg34"><span class="style1">
                    <input name="other" type="hidden" id="other" />
                  </span> <span class="style1">
                  <input name="susername" type="hidden" id="susername" />
                  </span></div></th>
                </tr>
              </table></th>
            </tr>
          </table>
