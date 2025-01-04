<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

$dbservertype='mysql';
$servername='localhost';
// username and password to log onto db server
$dbusername='root';
$dbpassword='arena123';
// name of database
$dbname='tutorials';

////////////////////////////////////////
////// DONOT EDIT BELOW  /////////
///////////////////////////////////////
connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
global $link;
$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("Could not connect to MySQL");}
mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
}
//////// End of connecting to database ////////

@$cat=$_GET['cat']; // Use this line or below line if register_global is off
//@$cat=$HTTP_GET_VARS['cat']; // Use this line or above line if register_global is off
/*
If register_global is off in your server then after reloading of the page to get the value of cat from query string we have to take special care.
To read more on register_global visit.
  http://www.plus2net.com/php_tutorial/register-globals.php
*/

?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Multiple drop down list box from plus2net</title>
<SCRIPT language=JavaScript>
<!--
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='dd.php?cat=' + val ;
}
function disableselect()
{
<?
if(isset($cat) and strlen($cat) > 0){
echo "document.f1.subcat.disabled = false;";}
else{echo "document.f1.subcat.disabled = true;";}
?>
}
//-->

</script>
</head>

<body onload=disableselect();>

<?


///////// Getting the data from Mysql table for first list box//////////
$quer2=mysql_query("SELECT DISTINCT category,cat_id FROM category order by category"); 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer=mysql_query("SELECT DISTINCT subcategory FROM subcategory where cat_id=$cat order by subcategory"); 
}else{$quer=mysql_query("SELECT DISTINCT subcategory FROM subcategory order by subcategory"); } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method=post name=f1 action='dd-check.php'>";
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
//////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
while($noticia2 = mysql_fetch_array($quer2)) { 
if($noticia2['cat_id']==@$cat){echo "<option selected value='$noticia2[cat_id]'>$noticia2[category]</option>"."<BR>";}
else{echo  "<option value='$noticia2[cat_id]'>$noticia2[category]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='subcat'><option value=''>Select one</option>";
while($noticia = mysql_fetch_array($quer)) { 
echo  "<option value='$noticia[subcategory]'>$noticia[subcategory]</option>";
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////
//// Add your other form fields as needed here/////
echo "<input type=submit value=Submit>";
echo "</form>";
?>
<center><a href='http://www.plus2net.com'>PHP SQL HTML free tutorials and scripts</a></center> 
</body>

</html>
