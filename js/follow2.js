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
function joined()
{
//	alert("ashok");
var adv = document.form.status.options[document.form.status.selectedIndex].value;
if(adv=="Joined")
{
//	alert("ashok");
getHTTPObject();
var y="joined.php";
request.open("GET",y, true);
request.onreadystatechange = output3;
request.send(null);
}
else if(adv=="Registered")
{
getHTTPObject();
var y="joined.php";
request.open("GET",y, true);
request.onreadystatechange = output3;
request.send(null);
}
}
/////////////////////Output////////////////////////
function output3()
{
if(request.readyState == 4)
{
document.getElementById('msgg34').innerHTML = request.responseText;
}
}
