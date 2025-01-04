var request = null;
function getHTTPObject10() {
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
function skills()
{
getHTTPObject10();
//var a=this.form.text_content.value
var d=document.form.skillslist.options[document.form.skillslist.selectedIndex].value;
var e=document.form.specialist.options[document.form.specialist.selectedIndex].value;
var f=document.form.proficiency.options[document.form.proficiency.selectedIndex].value;
var g=this.form.uuname.value;
var url="skills.php";
var parameter="?skillslist="+d+"&specialist="+e+"&proficiency="+f+"&uuname="+g;
alert(parameter);
/////////////////kill ie cache/////////////////////////
var now = "upid=" + new Date().getTime();
parameter += (parameter.indexOf("?")+1) ? "&" : "?";
parameter += now;
///////////////End of kill the cahe ////////////////////
request.open('POST', url + parameter , true);
request.setRequestHeader("Content-type", "application/x-www-form-URLencoded");
request.setRequestHeader("Content-length", parameter.length);
request.setRequestHeader("Connection", "close");
request.send(parameter);
request.onreadystatechange = output20;
request.send(null);
}
/////////////////////Output////////////////////////
function output20()
{
if(request.readyState == 4)
{
document.getElementById('skills').innerHTML = request.responseText;
}
}
