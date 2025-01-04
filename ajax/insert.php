<?php 
if(isset($_GET['site_url']) && isset($_GET['site_name'])){
$con = mysql_connect('localhost', 'root', 'arena123');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("rk", $con);


$site_url= $_GET['site_url'];
$site_name= $_GET['site_name'];


$insertSite_sql = "INSERT INTO `site`  VALUES ( '$site_url', '$site_name');";
$insertSite= mysql_query($insertSite_sql) or die(mysql_error());

echo $insertSite_sql;

echo $insertSite;
} else { 
echo 'Error! Please fill all fileds!';
}
?>
