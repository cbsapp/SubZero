<table width="748" border="0" cellspacing="1" cellpadding="1">
  
  <tr>
    <th width="338" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Subject Name </th>
    <th width="163" height="24" align="left" bgcolor="#C5E7F5" class="style22" scope="row"><label class="style22">Duration</label></th>
    <th width="237" align="left" bgcolor="#C5E7F5" class="style2" scope="row">Skills Level Required</th>
  </tr>
  <?php
  $num=$_POST['nosubject'];
  while($i<$num)
  {
  ?>
  <tr>
    <th align="left" bgcolor="#C5E7F5" class="style2" scope="row"><input name="subjectname<?php echo $i; ?>" type="text" class="style22" id="subjectname" tabindex="1" size="40" /></th>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row"><span class="style2">
      <input name="duration<?php echo $i; ?>" type="text" class="style22" id="duration" tabindex="1" size="25" />
    </span></th>
    <th bgcolor="#C5E7F5" class="style22" scope="row"><label>
      <select name="skilllevel<?php echo $i; ?>" tabindex="1">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select>
    </label></th>
  </tr>
  <?php
  $i++;
  }
  ?>
  <tr>
    <th align="left" bgcolor="#C5E7F5" class="style2" scope="row">&nbsp;</th>
    <th height="24" align="left" bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
    <th bgcolor="#C5E7F5" class="style1" scope="row">&nbsp;</th>
  </tr>
</table>
