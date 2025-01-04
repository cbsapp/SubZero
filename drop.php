<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>(Type a title for your page here)</title>
<script language="javascript" src="list.js"></script>
</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000" onload="fillCategory();">

<FORM name="drop_list" action="yourpage.php" method="POST" >
		
<SELECT  NAME="Category" onChange="SelectSubCat();" >
<Option value="">Category</option>
</SELECT>&nbsp;
<SELECT id="SubCat" NAME="SubCat" onChange="SelectModSubCat();">
<Option value="">SubCat</option>
</SELECT>&nbsp;
<SELECT id="ModSubCat" NAME="ModSubCat" onChange="SelectAssignment();">
<Option value="">ModSubCat</option>
</SELECT>&nbsp;
<SELECT id="ModAssign" NAME="ModAssign" onChange="SelectWeek();">
<Option value="">Assignment</option>
</SELECT>&nbsp;
<SELECT id="Week" NAME="Week">
<Option value="">Week</option>
</SELECT>
</form>

</body>

</html>
