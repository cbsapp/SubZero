
function fillCategory(){ 
 // this function is used to fill the category list on load
addOption(document.drop_list.Category, "2008", "2008", "");
addOption(document.drop_list.Category, "2009", "2009", "");
addOption(document.drop_list.Category, "2010", "2010", "");
}

///////////////////////////////////////////////Start Sub Category///////////////////////////////////////////////////////////
function SelectSubCat(){
// ON selection of category this function will work
removeAllOptions(document.drop_list.SubCat);
addOption(document.drop_list.SubCat, "", "SubCat", "");

if(document.drop_list.Category.value == '2008'){
addOption(document.drop_list.SubCat,"Semster1", "Semster1");
addOption(document.drop_list.SubCat,"Semster2", "Semster2");
addOption(document.drop_list.SubCat,"Semster3", "Semster3");
}
if(document.drop_list.Category.value == '2009'){
addOption(document.drop_list.SubCat,"Semster1", "Semster1");
addOption(document.drop_list.SubCat,"Semster2", "Semster2");
addOption(document.drop_list.SubCat,"Semster3", "Semster3");
addOption(document.drop_list.SubCat,"Semster4", "Semster4", "");
}
if(document.drop_list.Category.value == '2010'){
addOption(document.drop_list.SubCat,"Semster1", "Semster1");
addOption(document.drop_list.SubCat,"Semster2", "Semster2");
addOption(document.drop_list.SubCat,"Semster3", "Semster3");
addOption(document.drop_list.SubCat,"Semster4", "Semster4");
addOption(document.drop_list.SubCat,"Semster5", "Semster5");
}
}
///////////////////////////////////////////////End Sub Category//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////Start Module Sub Category///////////////////////////////////////////////////////////
function SelectModSubCat(){
// ON selection of category this function will work
removeAllOptions(document.drop_list.ModSubCat);
addOption(document.drop_list.ModSubCat, "", "ModSubCat", "");

if(document.drop_list.SubCat.value == 'Semster1' ){
addOption(document.drop_list.ModSubCat,"Module1", "Module1");
addOption(document.drop_list.ModSubCat,"Module2", "Module2");
addOption(document.drop_list.ModSubCat,"Module3", "Module3");
}
}
///////////////////////////////////////////////End Module Sub Category/////////////////////////////////////////////////////////////

///////////////////////////////////////////////Start Module Assignment/////////////////////////////////////////////////////////////

function SelectAssignment(){
// ON selection of category this function will work
removeAllOptions(document.drop_list.ModAssign);
addOption(document.drop_list.ModAssign, "", "ModAssign", "");

if(document.drop_list.ModSubCat.value == 'Module1' ){
addOption(document.drop_list.ModAssign,"Week", "Week");
addOption(document.drop_list.ModAssign,"Assignment", "Assignment");

}
}
/////////////////////////////////////////////End Module Assignment/////////////////////////////////////////////////////////////////

///////////////////////////////////////////////Start Module Assignment/////////////////////////////////////////////////////////////

function SelectWeek(){
// ON selection of category this function will work
removeAllOptions(document.drop_list.Week);
addOption(document.drop_list.Week, "", "week", "");

if(document.drop_list.ModAssign.value == 'Week' ){
addOption(document.drop_list.Week,"Day1", "Day1");
addOption(document.drop_list.Week,"Day2", "Day2");

}
}
/////////////////////////////////////////////End Module Assignment/////////////////////////////////////////////////////////////////

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
