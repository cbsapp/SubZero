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
function fine()
{
getHTTPObject();
alert("ff");
var a=this.form.text_content.value
var searc=document.form.searchby.options[document.form.searchby.selectedIndex].value;
var url="fine.php";
var parameter="?studentname=" + a +"&searchby=" + searc;
//alert(parameter);
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
document.getElementById('fine').innerHTML = request.responseText;
}
}
