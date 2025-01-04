<?php
include 'config.php';
include 'db.php';
session_start();
$uname=$_SESSION["uname"];
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM $db_login WHERE uname='$uname'";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
$section=mysql_result($result,$i,"section");
$headd1='<script type="text/javascript" src="';
$headd2='"></script>';
if($section=="admin")
{
$value="adminjs/stmenu.js";
$value1="adminjs/menu.js";
$headd="$headd1$value$headd2";
$menuu="$headd1$value1$headd2";
}
if($section=="Councellor")
{
$value="menu/stmenu.js";
$value1="menu/menu.js";
$headd="$headd1$value$headd2";
$menuu="$headd1$value1$headd2";
}
if($section=="Accounts")
{
$value="accounts/stmenu.js";
$value1="accounts/menu.js";
$headd="$headd1$value$headd2";
$menuu="$headd1$value1$headd2";
}
if($section=="Faculty")
{
$value="faculty/stmenu.js";
$value1="faculty/menu.js";
$headd="$headd1$value$headd2";
$menuu="$headd1$value1$headd2";
}
?>