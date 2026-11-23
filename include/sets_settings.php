<?php
$tdatasets = array();
$tdatasets[".searchableFields"] = array();
$tdatasets[".ShortName"] = "sets";
$tdatasets[".OwnerID"] = "";
$tdatasets[".OriginalTable"] = "public.sets";


$tdatasets[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasets[".originalPagesByType"] = $tdatasets[".pagesByType"];
$tdatasets[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasets[".originalPages"] = $tdatasets[".pages"];
$tdatasets[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasets[".originalDefaultPages"] = $tdatasets[".defaultPages"];

//	field labels
$fieldLabelssets = array();
$fieldToolTipssets = array();
$pageTitlessets = array();
$placeHolderssets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssets["English"] = array();
	$fieldToolTipssets["English"] = array();
	$placeHolderssets["English"] = array();
	$pageTitlessets["English"] = array();
	$fieldLabelssets["English"]["concat"] = "Faculty Name";
	$fieldToolTipssets["English"]["concat"] = "";
	$placeHolderssets["English"]["concat"] = "";
	$fieldLabelssets["English"]["faculty_id"] = "Faculty Id";
	$fieldToolTipssets["English"]["faculty_id"] = "";
	$placeHolderssets["English"]["faculty_id"] = "";
	$fieldLabelssets["English"]["term_id"] = "Term Id";
	$fieldToolTipssets["English"]["term_id"] = "";
	$placeHolderssets["English"]["term_id"] = "";
	$fieldLabelssets["English"]["ay"] = "Ay";
	$fieldToolTipssets["English"]["ay"] = "";
	$placeHolderssets["English"]["ay"] = "";
	if (count($fieldToolTipssets["English"]))
		$tdatasets[".isUseToolTips"] = true;
}


	$tdatasets[".NCSearch"] = true;



$tdatasets[".shortTableName"] = "sets";
$tdatasets[".nSecOptions"] = 0;

$tdatasets[".mainTableOwnerID"] = "";
$tdatasets[".entityType"] = 0;
$tdatasets[".connId"] = "financialslatestDbatlocalhost";


$tdatasets[".strOriginalTableName"] = "public.sets";

	



$tdatasets[".showAddInPopup"] = false;

$tdatasets[".showEditInPopup"] = false;

$tdatasets[".showViewInPopup"] = false;

$tdatasets[".listAjax"] = false;
//	temporary
//$tdatasets[".listAjax"] = false;

	$tdatasets[".audit"] = false;

	$tdatasets[".locking"] = false;


$pages = $tdatasets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasets[".edit"] = true;
	$tdatasets[".afterEditAction"] = 1;
	$tdatasets[".closePopupAfterEdit"] = 1;
	$tdatasets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasets[".add"] = true;
$tdatasets[".afterAddAction"] = 1;
$tdatasets[".closePopupAfterAdd"] = 1;
$tdatasets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasets[".list"] = true;
}



$tdatasets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasets[".printFriendly"] = true;
}



$tdatasets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasets[".isUseAjaxSuggest"] = true;



			

$tdatasets[".ajaxCodeSnippetAdded"] = false;

$tdatasets[".buttonsAdded"] = false;

$tdatasets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasets[".isUseTimeForSearch"] = false;


$tdatasets[".badgeColor"] = "E07878";


$tdatasets[".allSearchFields"] = array();
$tdatasets[".filterFields"] = array();
$tdatasets[".requiredSearchFields"] = array();

$tdatasets[".googleLikeFields"] = array();
$tdatasets[".googleLikeFields"][] = "concat";
$tdatasets[".googleLikeFields"][] = "faculty_id";
$tdatasets[".googleLikeFields"][] = "term_id";
$tdatasets[".googleLikeFields"][] = "ay";



$tdatasets[".tableType"] = "list";

$tdatasets[".printerPageOrientation"] = 0;
$tdatasets[".nPrinterPageScale"] = 100;

$tdatasets[".nPrinterSplitRecords"] = 40;

$tdatasets[".geocodingEnabled"] = false;







$tdatasets[".noRecordsFirstPage"] = true;



$tdatasets[".pageSize"] = 20;

$tdatasets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasets[".strOrderBy"] = $tstrOrderBy;

$tdatasets[".orderindexes"] = array();


$tdatasets[".sqlHead"] = "SELECT CONCAT(last_name, ', ', first_name),  cfic.faculty_id,  \"public\".classes.term_id,  ay";
$tdatasets[".sqlFrom"] = "FROM \"public\".student_sets AS ss  INNER JOIN (SELECT student_set_id FROM SETS GROUP BY student_set_id) st ON st.student_set_id = ss.id  INNER JOIN \"public\".class_faculty_in_charge AS cfic ON ss.cfic_id = cfic.id  INNER JOIN \"public\".faculties ON cfic.faculty_id = \"public\".faculties.faculty_id  INNER JOIN \"public\".users ON \"public\".faculties.user_id = \"public\".users.id  INNER JOIN \"public\".classes ON cfic.class_id = \"public\".classes.id  INNER JOIN \"public\".student_terms AS sterm ON \"public\".classes.term_id = sterm.term_id";
$tdatasets[".sqlWhereExpr"] = "";
$tdatasets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasets[".arrGroupsPerPage"] = $arrGPP;

$tdatasets[".highlightSearchResults"] = true;

$tableKeyssets = array();
$tdatasets[".Keys"] = $tableKeyssets;


$tdatasets[".hideMobileList"] = array();




//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_sets","concat");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "concat";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(last_name, ', ', first_name)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasets["concat"] = $fdata;
		$tdatasets[".searchableFields"][] = "concat";
//	faculty_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "faculty_id";
	$fdata["GoodName"] = "faculty_id";
	$fdata["ownerTable"] = "public.class_faculty_in_charge";
	$fdata["Label"] = GetFieldLabel("public_sets","faculty_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "faculty_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfic.faculty_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasets["faculty_id"] = $fdata;
		$tdatasets[".searchableFields"][] = "faculty_id";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.classes";
	$fdata["Label"] = GetFieldLabel("public_sets","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".classes.term_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasets["term_id"] = $fdata;
		$tdatasets[".searchableFields"][] = "term_id";
//	ay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ay";
	$fdata["GoodName"] = "ay";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_sets","ay");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ay";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ay";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasets["ay"] = $fdata;
		$tdatasets[".searchableFields"][] = "ay";


$tables_data["public.sets"]=&$tdatasets;
$field_labels["public_sets"] = &$fieldLabelssets;
$fieldToolTips["public_sets"] = &$fieldToolTipssets;
$placeHolders["public_sets"] = &$placeHolderssets;
$page_titles["public_sets"] = &$pageTitlessets;


changeTextControlsToDate( "public.sets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.sets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.sets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CONCAT(last_name, ', ', first_name),  cfic.faculty_id,  \"public\".classes.term_id,  ay";
$proto0["m_strFrom"] = "FROM \"public\".student_sets AS ss  INNER JOIN (SELECT student_set_id FROM SETS GROUP BY student_set_id) st ON st.student_set_id = ss.id  INNER JOIN \"public\".class_faculty_in_charge AS cfic ON ss.cfic_id = cfic.id  INNER JOIN \"public\".faculties ON cfic.faculty_id = \"public\".faculties.faculty_id  INNER JOIN \"public\".users ON \"public\".faculties.user_id = \"public\".users.id  INNER JOIN \"public\".classes ON cfic.class_id = \"public\".classes.id  INNER JOIN \"public\".student_terms AS sterm ON \"public\".classes.term_id = sterm.term_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "CONCAT(last_name, ', ', first_name)";
$proto6["m_srcTableName"] = "public.sets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "cfic",
	"m_srcTableName" => "public.sets"
));

$proto11["m_sql"] = "cfic.faculty_id";
$proto11["m_srcTableName"] = "public.sets";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.classes",
	"m_srcTableName" => "public.sets"
));

$proto13["m_sql"] = "\"public\".classes.term_id";
$proto13["m_srcTableName"] = "public.sets";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "ay"
));

$proto15["m_sql"] = "ay";
$proto15["m_srcTableName"] = "public.sets";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "public.student_sets";
$proto18["m_srcTableName"] = "public.sets";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "student_id";
$proto18["m_columns"][] = "cfic_id";
$proto18["m_columns"][] = "has_taken_set";
$proto18["m_columns"][] = "term_id";
$proto18["m_columns"][] = "created_at";
$proto18["m_columns"][] = "updated_at";
$proto18["m_columns"][] = "is_calculated";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "\"public\".student_sets AS ss";
$proto17["m_alias"] = "ss";
$proto17["m_srcTableName"] = "public.sets";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_INNERJOIN";
			$proto22=array();
$proto22["m_strHead"] = "SELECT";
$proto22["m_strFieldList"] = "student_set_id";
$proto22["m_strFrom"] = "FROM SETS";
$proto22["m_strWhere"] = "";
$proto22["m_strOrderBy"] = "";
	
		;
			$proto22["cipherer"] = null;
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_where"] = $obj;
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto22["m_having"] = $obj;
$proto22["m_fieldlist"] = array();
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "student_set_id",
	"m_strTable" => "public.sets",
	"m_srcTableName" => "public.sets"
));

$proto28["m_sql"] = "student_set_id";
$proto28["m_srcTableName"] = "public.sets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto22["m_fieldlist"][]=$obj;
$proto22["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.sets";
$proto31["m_srcTableName"] = "public.sets";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "student_set_id";
$proto31["m_columns"][] = "set_question_id";
$proto31["m_columns"][] = "answer";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "SETS";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.sets";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto22["m_fromlist"][]=$obj;
$proto22["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "student_set_id",
	"m_strTable" => "public.sets",
	"m_srcTableName" => "public.sets"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto22["m_groupby"][]=$obj;
$proto22["m_orderby"] = array();
$proto22["m_srcTableName"]="public.sets";		
$obj = new SQLQuery($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN (SELECT student_set_id FROM SETS GROUP BY student_set_id) st ON st.student_set_id = ss.id";
$proto21["m_alias"] = "st";
$proto21["m_srcTableName"] = "public.sets";
$proto36=array();
$proto36["m_sql"] = "st.student_set_id = ss.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_set_id",
	"m_strTable" => "st",
	"m_srcTableName" => "public.sets"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= ss.id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "public.class_faculty_in_charge";
$proto39["m_srcTableName"] = "public.sets";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "class_id";
$proto39["m_columns"][] = "faculty_id";
$proto39["m_columns"][] = "mode";
$proto39["m_columns"][] = "type";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "is_encoder";
$proto39["m_columns"][] = "is_approver";
$proto39["m_columns"][] = "is_poster";
$proto39["m_columns"][] = "is_set";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN \"public\".class_faculty_in_charge AS cfic ON ss.cfic_id = cfic.id";
$proto38["m_alias"] = "cfic";
$proto38["m_srcTableName"] = "public.sets";
$proto40=array();
$proto40["m_sql"] = "cfic.id = ss.cfic_id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cfic",
	"m_srcTableName" => "public.sets"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= ss.cfic_id";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "public.faculties";
$proto43["m_srcTableName"] = "public.sets";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "faculty_id";
$proto43["m_columns"][] = "user_id";
$proto43["m_columns"][] = "sais_id";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "home_unit";
$proto43["m_columns"][] = "academic_program_id";
$proto43["m_columns"][] = "is_mas_available";
$proto43["m_columns"][] = "home_college";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN \"public\".faculties ON cfic.faculty_id = \"public\".faculties.faculty_id";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "public.sets";
$proto44=array();
$proto44["m_sql"] = "\"public\".faculties.faculty_id = cfic.faculty_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "public.faculties",
	"m_srcTableName" => "public.sets"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= cfic.faculty_id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "public.users";
$proto47["m_srcTableName"] = "public.sets";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "sais_id";
$proto47["m_columns"][] = "last_name";
$proto47["m_columns"][] = "first_name";
$proto47["m_columns"][] = "middle_name";
$proto47["m_columns"][] = "email";
$proto47["m_columns"][] = "user_roles";
$proto47["m_columns"][] = "tester";
$proto47["m_columns"][] = "created_at";
$proto47["m_columns"][] = "updated_at";
$proto47["m_columns"][] = "google_id";
$proto47["m_columns"][] = "country_of_citizenship";
$proto47["m_columns"][] = "type_of_residency";
$proto47["m_columns"][] = "sex";
$proto47["m_columns"][] = "birthdate";
$proto47["m_columns"][] = "suffix";
$proto47["m_columns"][] = "legal_name";
$proto47["m_columns"][] = "civil_status";
$proto47["m_columns"][] = "preferred_name";
$proto47["m_columns"][] = "indigenous_group";
$proto47["m_columns"][] = "religion";
$proto47["m_columns"][] = "gender_identity";
$proto47["m_columns"][] = "is_ncip_registered";
$proto47["m_columns"][] = "emergency_name";
$proto47["m_columns"][] = "emergency_number";
$proto47["m_columns"][] = "emergency_relationship";
$proto47["m_columns"][] = "signature_path";
$proto47["m_columns"][] = "emergency_country_code";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN \"public\".users ON \"public\".faculties.user_id = \"public\".users.id";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "public.sets";
$proto48=array();
$proto48["m_sql"] = "\"public\".users.id = \"public\".faculties.user_id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.sets"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= \"public\".faculties.user_id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "public.classes";
$proto51["m_srcTableName"] = "public.sets";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "course_id";
$proto51["m_columns"][] = "term_id";
$proto51["m_columns"][] = "parent_class_id";
$proto51["m_columns"][] = "type";
$proto51["m_columns"][] = "section";
$proto51["m_columns"][] = "date";
$proto51["m_columns"][] = "mon";
$proto51["m_columns"][] = "tue";
$proto51["m_columns"][] = "wed";
$proto51["m_columns"][] = "thu";
$proto51["m_columns"][] = "fri";
$proto51["m_columns"][] = "sat";
$proto51["m_columns"][] = "start_time";
$proto51["m_columns"][] = "end_time";
$proto51["m_columns"][] = "credit";
$proto51["m_columns"][] = "hours";
$proto51["m_columns"][] = "tm_id";
$proto51["m_columns"][] = "facility_id";
$proto51["m_columns"][] = "max_class_size";
$proto51["m_columns"][] = "active_class_size";
$proto51["m_columns"][] = "activity";
$proto51["m_columns"][] = "class_nbr";
$proto51["m_columns"][] = "assoc";
$proto51["m_columns"][] = "acad_org";
$proto51["m_columns"][] = "acad_group";
$proto51["m_columns"][] = "created_at";
$proto51["m_columns"][] = "updated_at";
$proto51["m_columns"][] = "prerog_count";
$proto51["m_columns"][] = "reserved_count";
$proto51["m_columns"][] = "is_active";
$proto51["m_columns"][] = "hide_faculty";
$proto51["m_columns"][] = "consent";
$proto51["m_columns"][] = "is_prerog_open";
$proto51["m_columns"][] = "is_coi_open";
$proto51["m_columns"][] = "status";
$proto51["m_columns"][] = "is_grade_posted";
$proto51["m_columns"][] = "is_partial_posting";
$proto51["m_columns"][] = "deleted_at";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN \"public\".classes ON cfic.class_id = \"public\".classes.id";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "public.sets";
$proto52=array();
$proto52["m_sql"] = "\"public\".classes.id = cfic.class_id";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.classes",
	"m_srcTableName" => "public.sets"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= cfic.class_id";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_INNERJOIN";
			$proto55=array();
$proto55["m_strName"] = "public.student_terms";
$proto55["m_srcTableName"] = "public.sets";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "term_id";
$proto55["m_columns"][] = "term";
$proto55["m_columns"][] = "ay";
$proto55["m_columns"][] = "status";
$proto55["m_columns"][] = "created_at";
$proto55["m_columns"][] = "updated_at";
$proto55["m_columns"][] = "term_type";
$proto55["m_columns"][] = "start_date";
$proto55["m_columns"][] = "end_date";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "INNER JOIN \"public\".student_terms AS sterm ON \"public\".classes.term_id = sterm.term_id";
$proto54["m_alias"] = "sterm";
$proto54["m_srcTableName"] = "public.sets";
$proto56=array();
$proto56["m_sql"] = "sterm.term_id = \"public\".classes.term_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "sterm",
	"m_srcTableName" => "public.sets"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= \"public\".classes.term_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "cfic",
	"m_srcTableName" => "public.sets"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.classes",
	"m_srcTableName" => "public.sets"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ay"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.sets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sets = createSqlQuery_sets();


	
		;

				

$tdatasets[".sqlquery"] = $queryData_sets;



$tdatasets[".hasEvents"] = false;

?>