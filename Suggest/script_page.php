<?php
	include('conn.php');
	$str = strtolower($_GET['content']);
	if(strlen($str))
	{
		$query = "select * from tblcountry where name like '".trim($str)."%'";
$sel=mysql_query($query) or die('Error, query failed');

		if(mysql_num_rows($sel))
		{
			echo "<table border =\"0\" width=\"100%\">\n";
			if(mysql_num_rows($sel))
			{
				echo "<script language=\"javascript\">box('1');</script>";
				
$num=mysql_numrows($sel);
$i=0;
while($i<$num)
{
$name=mysql_result($sel,$i,"name");
$id=mysql_result($sel,$i,"id");
									$country = str_ireplace($str,"<b>".$str."</b>",$name);
					echo "<tr id=\"word".$i."\" onmouseover=\"highlight(1,'".$i."');\" onmouseout=\"highlight(0,'".$i."');\" onClick=\"display('".$name."');\" >\n<td>".$name."</td>\n</tr>\n";
					$i++;
				}
			}
			echo "</table>";
		}
	}
	else
	{
		echo "<script language=\"javascript\">box('0');</script>";
	}
?>