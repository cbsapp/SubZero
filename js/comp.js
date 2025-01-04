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
function submitt()
{
getHTTPObject();
var a=this.form.comment.value
var b=this.form.nfudate.value;
var c=this.form.enquiryname.value;
var d=this.form.mobile.value;
var e=this.form.phone.value;
var f=this.form.taskid.value;
var hh=this.form.status.value;
var cc=this.form.coursesuggested.value;
var su=this.form.susername.value;
alert("ashok");
alert(f);
var url="follow2.php";
var parameter="?nnn=" + a + "&comment=" + a + "&enquiryname=" + c + "&mobile=" + d + "&phone=" + e + "&taskid=" + f + "&status=" + hh +"&nfudate=" +b + "&coursesuggested=" + cc + "&susername=" + su;
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
function comp(xy)
{
getHTTPObject();
var y="comp1.php?caseid=" + xy;
request.open("GET",y, true);
request.onreadystatechange = output2;
request.send(null);
}
/////////////////////Output////////////////////////
function output1()
{
if(request.readyState == 4)
{
document.getElementById('msg').innerHTML = request.responseText;
}
}
function output2()
{
if(request.readyState == 4)
{
document.getElementById('crr').innerHTML = request.responseText;
}
}
function output3()
{
if(request.readyState == 4)
{
document.getElementById('msg2').innerHTML = request.responseText;
}
}
function output4()
{
if(request.readyState == 4)
{
document.getElementById('msg').innerHTML = request.responseText;
}
}