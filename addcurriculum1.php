<table width="752" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th width="138" background="images/bar3.gif" class="style1" scope="col">Semester</th>
    <th width="607" height="24" background="images/bar3.gif" class="style1" scope="col">Subject</th>
  </tr>
  <?php
  include 'config.php';
  require 'logincheck.php';
session_start();
$uname=$_SESSION["uname"];
$vv=$_POST['semester'];
$vv++;
	  $z=1;
	  while($z<$vv)
	  {
	  $ccc="cc";
$cccc="()";
$cc="$ccc$z$cccc";
	  ?>
  <tr>
    <th bgcolor="#C5E7F5" class="style2" scope="col"><?php echo $z; ?></th>
    <th align="left" bgcolor="#C5E7F5" scope="col"><input name="subject<?php echo $z; ?>" type="text" class="style2" id="subject<?php echo $z; ?>" tabindex="1" size="25" />
        <select name="select" class="style2" id="sec<?php echo $z; ?>" tabindex="1">
          <option value="none">---None---</option>
          <?php

include 'db.php';
//mysql_connect($serverip,$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
			  $query = " SELECT * FROM n_softwares GROUP BY name";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
while ($i<$num)
{
$name=mysql_result($result,$i,"name");
?>
          <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
          <?php
$i++;
}
 ?>
        </select>
        <input type="button" name="Submit22" value="Add"  onclick="<?php echo $cc; ?>" tabindex="1" /></th>
  </tr>
  <?php
	  $z++;
	  }
	  ?>
</table>