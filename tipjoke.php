<?php
include 'config.php';
$status="Approved";
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM jokeofday WHERE status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=rand(0,$num);
$joke=mysql_result($result,$i,"jokeofday");
////////////////////////tip/////////////////////////////////
$query = " SELECT * FROM tipofday WHERE status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=rand(0,$num);
$tip=mysql_result($result,$i,"tipofday");
//////////////////////////////thought/////////////////////////
$query = " SELECT * FROM thoughtofday WHERE status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=rand(0,$num);
$thought=mysql_result($result,$i,"thoughtofday");
////////////////////announcement////////////////////////////////
$query = " SELECT * FROM announcement WHERE status='$status' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$acco=mysql_result($result,$i,"message");
?>