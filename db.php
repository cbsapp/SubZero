<?php
$con = mysql_connect("localhost","root","arena123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }mysql_select_db("arenaone", $con);
  
 
?>