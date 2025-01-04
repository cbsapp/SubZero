	function handleHttpResponse() {
		if (http.readyState == 4) {
				document.getElementById("box").innerHTML = http.responseText;
							
		}
	}
	function getHTTPObject() {
		var xmlhttp;
		/*@cc_on
		@if (@_jscript_version >= 5)
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
				}
			}
		@else
		xmlhttp = false;
		@end @*/
		if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
			try {
				xmlhttp = new XMLHttpRequest();
			} catch (e) {
				xmlhttp = false;
			}
		}
		return xmlhttp;
	}
	var http = getHTTPObject(); // We create the HTTP Object

	function getScriptPage(div_id,content_id)
	{
		subject_id = div_id;
		var now = "upid=" + new Date().getTime();
		content = document.getElementById(content_id).value;
		var searc=document.form.searchby.options[document.form.searchby.selectedIndex].value;
		http.open("GET", "script_page.php?content=" + escape(content) +"&searchby="+ searc +"&u=" + now, true);		
		http.onreadystatechange = handleHttpResponse;		
		http.send(null);
		if(content.length>0)
			box('1');
		else
			box('0');

	}	
	function highlight(action,id)
	{	
	  if(action)	
		document.getElementById('word'+id).bgColor = "#064377";
	  else
		document.getElementById('word'+id).bgColor = "#C5E7F5";
	}
	function display(word)
	{
		document.getElementById('text_content').value = word;
		document.getElementById('box').style.display = 'none';
		document.getElementById('text_content').focus();

	}
	function box(act)
	{
		
	  if(act=='0')	
	  {
		document.getElementById('box').style.display = 'none';

	  }
	  else
	  	document.getElementById('box').style.display = 'block';
	}