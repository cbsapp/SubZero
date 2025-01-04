<?php
$pagecode="01";
session_start();
$_SESSION["pagecode"]=$pagecode;
include 'db.php';
include 'config.php';
//require('logincheck.php');
$fday=$_POST['fday'];
$fmonth=$_POST['fmonth'];
$fyear=$_POST['fyear'];
$tday=$_POST['tday'];
$tmonth=$_POST['tmonth'];
$tyear=$_POST['tyear'];
$dateofbirth="$fyear-$fmonth-$fday";
$dateofbirth=$_POST['dateofbirth'];
$followdate="$tyear-$tmonth-$tday";
$followdate=$_POST['followdate'];
$enquiryname=$_POST['enquiryname'];
$streetaddress=$_POST['streetaddress'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pincode=$_POST['pincode'];
$currently=$_POST['currently'];
$qualification=$_POST['qualification'];
$college=$_POST['college'];
$discipline=$_POST['discipline'];
$year=$_POST['year'];
$companyname=$_POST['companyname'];
$officephoneno=$_POST['officephoneno'];
$designation=$_POST['designation'];
$parent=$_POST['parent'];
$pdesignation=$_POST['pdesignation'];
$pmobileno=$_POST['pmobileno'];
$pcompanyname=$_POST['pcompanyname'];
$pphoneno=$_POST['pphoneno'];
$interest=$_POST['interest'];
$advertisement=$_POST['advertisement'];
$placement=$_POST['placement'];
$counselorattended=$_POST['counselorattended'];
$enquiry=$_POST['enquiry'];
$coursesuggested=$_POST['coursesuggested'];
$batchdate=$_POST['batchdate'];
$other=$_POST['other'];
$remarks=$_POST['remarks'];
$timee = date('h:i A',time()+(3600*5.5));
$datee=date("Y-m-d");
$datereceived=date("Y-m-d");
$datereceived="$fyear-$fmonth-$fday";
$timereceived="$thr:$tmin";
////////////////////////Task ID Generation///////////////////////////////////
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = " SELECT * FROM taskid ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed');
$num=mysql_numrows($result);
$i=0;
$taskid=mysql_result($result,$i,"taskid");
$id=mysql_result($result,$i,"id");
$taskno=$taskid;
$taskid++;
$query = " UPDATE taskid SET taskid='$taskid' WHERE id='$id'";
mysql_query($query);
/////////////////////////////End Of Task ID Generation///////////////////////
////////////////////////////Permission Calculation//////////////////////////
include 'db.php';
//mysql_connect("$serverip",$username,$password);
//@mysql_select_db($database) or die( "Unable to select database");
$query = "SELECT * FROM login WHERE uname='$uname' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed1');
$num=mysql_numrows($result);
$i=0;
$toplevel=mysql_result($result,$i,"toplevel");
$levelcode=mysql_result($result,$i,"levelcode");
$cc=",";
$perr="ashok";
$perr=$toplevel;
$permis=$toplevel;
$num=10;
$i=0;
while ($i<$num)
{
$query = "SELECT * FROM login WHERE levelcode='$toplevel' ORDER BY id DESC";
$result=mysql_query($query) or die('Error, query failed2');
$j=0;
$toplevel=mysql_result($result,$j,"toplevel");
if($toplevel=="")
{
}
else
{
$perr="$perr$cc$toplevel";
}
$i++;
}
//////////////////End Of Permission Calculation/////////////////////////////////
$status="Not Viewed";
//echo $perr;
//echo $taskno;
$status="In Transit";
$query = "INSERT INTO n_councelling VALUES ('','$taskno','$uname','$enquiryname','$streetaddress','$address2','$dateofbirth','$city','$pincode','$phone','$mobile','$email','$currently','$qualification','$college','$discipline','$year','$companyname','$designation','$officephoneno','$parent','$pcompanyname','$pdesignation','$pphoneno','$pmobileno','$interest','$advertisement','$other','$placement','$counselorattended','$enquiry','$coursesuggested','$batchdate','$remarks','$status','$followdate','$followdate','$datee','$perr','$perr')";
mysql_query($query);
echo $query;
$status="In Transit";
$query = "INSERT INTO n_followup VALUES ('','$taskno','$enquiryname','$phone','$mobile','$datee','$remarks','$followdate','$status','$datee')";
mysql_query($query);
mysql_close();
//echo "You have Successfully Submited";
Header("Location: counc.php");
?>