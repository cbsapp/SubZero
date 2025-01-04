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
function submittt()
{
getHTTPObject();
//var a=this.form.skills.value
var b=document.form.semester.options[document.form.semester.selectedIndex].value;
//var v=document.form.advert.options[document.form.advert.selectedIndex].value;
var url="addcurriculum1.php";
var parameter="?nnn=" + b + "&semester=" + b;
//var cd=bc+ab;
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
request.onreadystatechange = output1;
request.send(null);
}
/////////////////////Output////////////////////////
function output1()
{
if(request.readyState == 4)
{
document.getElementById('crr').innerHTML = request.responseText;
}
}