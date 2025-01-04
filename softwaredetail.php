<table width="732" border="0" cellpadding="1" cellspacing="1">
<?php
include 'config.php';
include 'db.php';
$duration=$_GET['duration'];
$i=0;
$cla=1;
while($i<$duration)
{
?>
  <tr>
    <th width="126" bgcolor="#C5E7F5" class="style2" scope="col">Class <?php echo $cla; ?> </th>
    <th width="599" align="left" bgcolor="#C5E7F5" scope="col"><label>
      <input name="<?php echo $i; ?>" type="text" class="style2" id="class" tabindex="1" size="60" />
    </label></th>
  </tr>
<?php
$i++;
$cla++;
}
?>
</table>
