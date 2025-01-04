alert("demo");
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
function feespay34()
{
alert("jass");
getHTTPObject();
var a=this.form.rollno.value;
var b=document.form.paymentfor.options[document.form.paymentfor.selectedIndex].value;
var c=this.form.expdate.value;
var d=this.form.cardno.value;
var e=this.form.bank.value;
var f=this.form.cardname.value;
var g=document.form.paymenttowards.options[document.form.paymenttowards.selectedIndex].value;
var url="feespay2.php";
var parameter="?rollno=" + a +"&paymentfor=" +b +"&expdate=" + c +"&cardno=" +d "&bank=" +e + "&cardname=" + f +"&paymenttowards=" + g;
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
request.onreadystatechange = output1;
request.send(null);
}
/////////////////////Output////////////////////////
function output1()
{
if(request.readyState == 4)
{
document.getElementById('fees').innerHTML = request.responseText;
}
}