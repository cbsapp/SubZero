<?php
	include('conn.php');
	$searchby=$_GET['searchby'];
	$str = strtolower($_GET['content']);
	if(strlen($str))
	{
		$query = "select * from n_student where ".$searchby." like '".trim($str)."%'";
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
$sname=mysql_result($sel,$i,"studentname");
$rollno=mysql_result($sel,$i,"rollno");
$invoiceno=mysql_result($sel,$i,"invoiceno");
if($searchby=="studentname")
{
$name=$sname;
}
if($searchby=="rollno")
{
$name=$rollno;
}
if($searchby=="invoiceno")
{
$name=$invoiceno;
}
$id=mysql_result($sel,$i,"id");
									$country = str_ireplace($str,"<b>".$str."</b>",$name);
					echo "<tr class=\"style2\" id=\"word".$i."\" onmouseover=\"highlight(1,'".$i."');\" onmouseout=\"highlight(0,'".$i."');\" onClick=\"display('".$name."');\" >\n<td>".$country."</td>\n</tr>\n";
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