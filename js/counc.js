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
var a=this.form.enquiryname.value
var b=this.form.streetaddress.value;
var c=this.form.address2.value;
var d=this.form.city.value;
var e=this.form.state.value;
var f=this.form.phone.value
var g=this.form.mobile.value;
var h=this.form.email.value;
var i=this.form.dateofbirth.value;
var j=this.form.pincode.value;

myOption = -1;
for (i=this.form.currently.length-1; i > -1; i--)
{
if (this.form.currently[i].checked)
{
myOption = i; i = -1;
}
}
var k= this.form.currently[myOption].value;
//var k=this.form.currently.value;
myOption = -1;
for (i=this.form.qualification.length-1; i > -1; i--)
{
if (this.form.qualification[i].checked)
{
myOption = i; i = -1;
}
}
var l= this.form.qualification[myOption].value;
///var l=this.form.qualification.value;
var m=this.form.college.value;
var n=this.form.discipline.value;
var o=this.form.year.value;
var p=this.form.parent.value;
var q=this.form.pcompanyname.value;
var r=this.form.pdesignation.value;
var s=this.form.pphoneno.value;
var t=this.form.pmobileno.value;
var u=document.form.interest.options[document.form.interest.selectedIndex].value;
var v=document.form.advert.options[document.form.advert.selectedIndex].value;
var x=this.form.other.value;
myOption = -1;
for (i=this.form.placement.length-1; i > -1; i--)
{
if (this.form.placement[i].checked)
{
myOption = i; i = -1;
}
}
var y= this.form.placement[myOption].value;
//var y=this.form.placement.value;
var z=this.form.counselorattended.value;
myOption = -1;
for (i=this.form.enquiry.length-1; i > -1; i--)
{
if (this.form.enquiry[i].checked)
{
myOption = i; i = -1;
}
}
var aa= this.form.enquiry[myOption].value;
//var aa=this.form.enquiry.value;
var ab=this.form.coursesuggested.value;
var ac=this.form.batchdate.value;
var ad=this.form.remarks.value;
var ae=this.form.followdate.value;
var af=this.form.companyname.value;
var ag=this.form.designation.value;
var ah=this.form.officephoneno.value;
var url="counc1.php";
var parameter="?nnn=" + a + "&enquiryname=" + a + "&streetaddress=" + b + "&address2=" + c + "&city=" + d + "&state=" + e + "&phone=" + f + "&mobile=" + g + "&email=" + h + "&dateofbirth=" + i + "&pincode=" + j + "&currently=" + k + "&qualification=" + l + "&college=" + m + "&discipline=" + n + "&year=" + o + "&parent=" + p + "&pcompanyname=" + q + "&pdesignation=" + r + "&pphoneno=" + s + "&pmobileno=" + t + "&interest=" + u + "&advertisement=" + v + "&other=" + x + "&placement=" + y + "counselorattended=" + z + "&enquiry=" + aa + "&coursesuggested=" + ab + "&batchdate=" + ac + "&remarks=" + ad + "&followdate=" + ae + "&companyname=" + af + "&designation=" + ag + "&officephoneno=" + ah;
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
hidee();
request.send(null);
}
function employed()
{
getHTTPObject();
var y="ifemployed.php";
request.open("GET",y, true);
request.onreadystatechange = output2;
request.send(null);
}
function unemployed()
{
getHTTPObject();
var y="unemployed.php";
request.open("GET",y, true);
request.onreadystatechange = output2;
request.send(null);
}
function advertmode()
{
var adv = document.form.advert.options[document.form.advert.selectedIndex].value;
if(adv=="Friends/Relatives")
{
getHTTPObject();
var y="other.php";
request.open("GET",y, true);
request.onreadystatechange = output3;
request.send(null);
}
else if(adv=="Other (Specify)")
{
getHTTPObject();
var y="other.php";
request.open("GET",y, true);
request.onreadystatechange = output3;
request.send(null);
}
else
{
getHTTPObject();
var y="empty.php";
request.open("GET",y, true);
request.onreadystatechange = output3;
request.send(null);
}
}
function hidee()
{
alert("asssdd");
setTimeout("hider()",10000);
}
function hider()
{
getHTTPObject();
var y="emptyy.php";
request.open("GET",y, true);
request.onreadystatechange = output4;
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
document.getElementById('msg1').innerHTML = request.responseText;
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