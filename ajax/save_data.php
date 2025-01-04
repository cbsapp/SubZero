<?php

$sDBServer = "localhost";
$sDBName = "rk";
$sDBUsername = "root";
$sDBPassword = "arena123";

//make the database connection
$oLink = mysql_connect($sDBServer,$sDBUsername,$sDBPassword);
@mysql_select_db($sDBName) or $sInfo = "Unable to open database";


//Insert data into our database
$moo = mysql_query("INSERT INTO feedback(feedback_email,feedback_comment,feedback_time) 
VALUES('$_REQUEST[email]','$_REQUEST[comment]',NOW())") or die("Cannot save : " . mysql_error());



if($_REQUEST['return'] == 'confirm') {
print 1;//Print a 1 to show that the insert worked.
exit; //Exit without printing the Thank you note.
}

?>
<html>
<head>
<title>Feedback Recived</title>
</head>

<h1>Feedback Recived</h1>

Thank you for your intrest - we will look into your comment as soon as possible.


</html>

