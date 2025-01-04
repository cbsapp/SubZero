var request = null;
function getHTTPObject11() {
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
function skillsdelete(idd)
{
getHTTPObject11();
//var a=this.form.text_content.value
//var d=document.form.skillslist.options[document.form.skillslist.selectedIndex].value;
var url="skillsdelete.php";
var parameter="?id="+idd;
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
request.onreadystatechange = output21;
request.send(null);
}
/////////////////////Output////////////////////////
function output21()
{
if(request.readyState == 4)
{
document.getElementById('skills').innerHTML = request.responseText;
}
}
