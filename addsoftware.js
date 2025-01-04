// Get the HTTP Object
var request = null;
function getHTTPObject() {
	try {
		request = new XMLHttpRequest();
	} catch (trymicrosoft) {
		try {
			request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (othermicrosoft) {
			try {
				request = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (failed) {
				request = null;
			}
		}
	}
	if (request == null)
	alert("Your browser does not support AJAX");
}
//function getHTTPObject()
//{
//if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP"); 
//else if (window.XMLHttpRequest) return new XMLHttpRequest(); 
//else { 
//alert("Your browser does not support AJAX.");
//return null; 
//}
//}
// Implement business logic
function doWork()
{
getHTTPObject();
var ab=document.form1.softname.value;
var bc="softwaretest.php?sname=";
var cd=bc+ab;
request.open("GET",cd, true);
request.onreadystatechange = setOutput;
request.send(null);
}
// Implement business logic
function dowork1()
{
getHTTPObject();
var w=document.form1.softname.value
var x=document.form1.softduration.value
var y="softinsert.php?sname=";
var z="&sduration=";
var outt=y+w+z+x;
request.open("GET",outt, true);
request.onreadystatechange = setOut;
request.send(null);
}
function doWork2()
{
getHTTPObject();
var ab=document.form1.softduration.value;
var bc="softwaredetail.php?duration=";
var cd=bc+ab;
request.open("GET",cd, true);
request.onreadystatechange = setOutput1;
request.send(null);
}
// Change the value of the outputText field
function setOutput()
{
if(request.readyState == 4)
{
document.getElementById('output1').innerHTML = request.responseText;
}
}
function setOut()
{
if(request.readyState == 4)
{
document.getElementById('msg').innerHTML = request.responseText;
document.form1.softname.value="";
document.form1.softduration.value="";
}
}
function setOutput1()
{
if(request.readyState == 4)
{
document.getElementById('addd').innerHTML = request.responseText;
}
}