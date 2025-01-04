var request = null;
function getHTTPObject1() {
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
function cheque()
{
getHTTPObject1();
//var a=this.form.rollno.value
//var b=document.form.paymentfor.options[document.form.paymentfor.selectedIndex].value;
var url="cheque.php";
var parameter="?rollno=";
alert(url);
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
request.onreadystatechange = output10;
request.send(null);
}
function ccard()
{
getHTTPObject1();
//var a=this.form.rollno.value
//var b=document.form.paymentfor.options[document.form.paymentfor.selectedIndex].value;
var url="ccard.php";
var parameter="?rollno=";
alert(url);
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
request.onreadystatechange = output11;
request.send(null);
}
function dd()
{
getHTTPObject1();
//var a=this.form.rollno.value
//var b=document.form.paymentfor.options[document.form.paymentfor.selectedIndex].value;
var url="dd.php";
var parameter="?rollno=";
alert(url);
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
request.onreadystatechange = output12;
request.send(null);
}
/////////////////////Output////////////////////////
function output10()
{
if(request.readyState == 4)
{
document.getElementById('payment').innerHTML = request.responseText;
}
}
function output11()
{
if(request.readyState == 4)
{
document.getElementById('payment').innerHTML = request.responseText;
}
}
function output12()
{
if(request.readyState == 4)
{
document.getElementById('payment').innerHTML = request.responseText;
}
}
