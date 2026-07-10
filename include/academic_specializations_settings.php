<?php
$tdataacademic_specializations = array();
$tdataacademic_specializations[".searchableFields"] = array();
$tdataacademic_specializations[".ShortName"] = "academic_specializations";
$tdataacademic_specializations[".OwnerID"] = "";
$tdataacademic_specializations[".OriginalTable"] = "public.academic_specializations";


$tdataacademic_specializations[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataacademic_specializations[".originalPagesByType"] = $tdataacademic_specializations[".pagesByType"];
$tdataacademic_specializations[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataacademic_specializations[".originalPages"] = $tdataacademic_specializations[".pages"];
$tdataacademic_specializations[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataacademic_specializations[".originalDefaultPages"] = $tdataacademic_specializations[".defaultPages"];

//	field labels
$fieldLabelsacademic_specializations = array();
$fieldToolTipsacademic_specializations = array();
$pageTitlesacademic_specializations = array();
$placeHoldersacademic_specializations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsacademic_specializations["English"] = array();
	$fieldToolTipsacademic_specializations["English"] = array();
	$placeHoldersacademic_specializations["English"] = array();
	$pageTitlesacademic_specializations["English"] = array();
	$fieldLabelsacademic_specializations["English"]["id"] = "Id";
	$fieldToolTipsacademic_specializations["English"]["id"] = "";
	$placeHoldersacademic_specializations["English"]["id"] = "";
	$fieldLabelsacademic_specializations["English"]["specialization"] = "Specialization";
	$fieldToolTipsacademic_specializations["English"]["specialization"] = "";
	$placeHoldersacademic_specializations["English"]["specialization"] = "";
	$fieldLabelsacademic_specializations["English"]["created_at"] = "Created At";
	$fieldToolTipsacademic_specializations["English"]["created_at"] = "";
	$placeHoldersacademic_specializations["English"]["created_at"] = "";
	$fieldLabelsacademic_specializations["English"]["updated_at"] = "Updated At";
	$fieldToolTipsacademic_specializations["English"]["updated_at"] = "";
	$placeHoldersacademic_specializations["English"]["updated_at"] = "";
	if (count($fieldToolTipsacademic_specializations["English"]))
		$tdataacademic_specializations[".isUseToolTips"] = true;
}


	$tdataacademic_specializations[".NCSearch"] = true;



$tdataacademic_specializations[".shortTableName"] = "academic_specializations";
$tdataacademic_specializations[".nSecOptions"] = 0;

$tdataacademic_specializations[".mainTableOwnerID"] = "";
$tdataacademic_specializations[".entityType"] = 0;
$tdataacademic_specializations[".connId"] = "financialslatestDbatlocalhost";


$tdataacademic_specializations[".strOriginalTableName"] = "public.academic_specializations";

	



$tdataacademic_specializations[".showAddInPopup"] = false;

$tdataacademic_specializations[".showEditInPopup"] = false;

$tdataacademic_specializations[".showViewInPopup"] = false;

$tdataacademic_specializations[".listAjax"] = false;
//	temporary
//$tdataacademic_specializations[".listAjax"] = false;

	$tdataacademic_specializations[".audit"] = false;

	$tdataacademic_specializations[".locking"] = false;


$pages = $tdataacademic_specializations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataacademic_specializations[".edit"] = true;
	$tdataacademic_specializations[".afterEditAction"] = 1;
	$tdataacademic_specializations[".closePopupAfterEdit"] = 1;
	$tdataacademic_specializations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataacademic_specializations[".add"] = true;
$tdataacademic_specializations[".afterAddAction"] = 1;
$tdataacademic_specializations[".closePopupAfterAdd"] = 1;
$tdataacademic_specializations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataacademic_specializations[".list"] = true;
}



$tdataacademic_specializations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataacademic_specializations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataacademic_specializations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataacademic_specializations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataacademic_specializations[".printFriendly"] = true;
}



$tdataacademic_specializations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataacademic_specializations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataacademic_specializations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataacademic_specializations[".isUseAjaxSuggest"] = true;





$tdataacademic_specializations[".ajaxCodeSnippetAdded"] = false;

$tdataacademic_specializations[".buttonsAdded"] = false;

$tdataacademic_specializations[".addPageEvents"] = false;

// use timepicker for search panel
$tdataacademic_specializations[".isUseTimeForSearch"] = false;


$tdataacademic_specializations[".badgeColor"] = "E8926F";


$tdataacademic_specializations[".allSearchFields"] = array();
$tdataacademic_specializations[".filterFields"] = array();
$tdataacademic_specializations[".requiredSearchFields"] = array();

$tdataacademic_specializations[".googleLikeFields"] = array();
$tdataacademic_specializations[".googleLikeFields"][] = "id";
$tdataacademic_specializations[".googleLikeFields"][] = "specialization";
$tdataacademic_specializations[".googleLikeFields"][] = "created_at";
$tdataacademic_specializations[".googleLikeFields"][] = "updated_at";



$tdataacademic_specializations[".tableType"] = "list";

$tdataacademic_specializations[".printerPageOrientation"] = 0;
$tdataacademic_specializations[".nPrinterPageScale"] = 100;

$tdataacademic_specializations[".nPrinterSplitRecords"] = 40;

$tdataacademic_specializations[".geocodingEnabled"] = false;










$tdataacademic_specializations[".pageSize"] = 20;

$tdataacademic_specializations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataacademic_specializations[".strOrderBy"] = $tstrOrderBy;

$tdataacademic_specializations[".orderindexes"] = array();


$tdataacademic_specializations[".sqlHead"] = "SELECT id,  	specialization,  	created_at,  	updated_at";
$tdataacademic_specializations[".sqlFrom"] = "FROM \"public\".academic_specializations";
$tdataacademic_specializations[".sqlWhereExpr"] = "";
$tdataacademic_specializations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataacademic_specializations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataacademic_specializations[".arrGroupsPerPage"] = $arrGPP;

$tdataacademic_specializations[".highlightSearchResults"] = true;

$tableKeysacademic_specializations = array();
$tableKeysacademic_specializations[] = "id";
$tdataacademic_specializations[".Keys"] = $tableKeysacademic_specializations;


$tdataacademic_specializations[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.academic_specializations";
	$fdata["Label"] = GetFieldLabel("public_academic_specializations","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataacademic_specializations["id"] = $fdata;
		$tdataacademic_specializations[".searchableFields"][] = "id";
//	specialization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "specialization";
	$fdata["GoodName"] = "specialization";
	$fdata["ownerTable"] = "public.academic_specializations";
	$fdata["Label"] = GetFieldLabel("public_academic_specializations","specialization");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "specialization";

		$fdata["sourceSingle"] = "specialization";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "specialization";

	
	
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
			$edata["EditParams"].= " maxlength=191";

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


	$tdataacademic_specializations["specialization"] = $fdata;
		$tdataacademic_specializations[".searchableFields"][] = "specialization";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.academic_specializations";
	$fdata["Label"] = GetFieldLabel("public_academic_specializations","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataacademic_specializations["created_at"] = $fdata;
		$tdataacademic_specializations[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.academic_specializations";
	$fdata["Label"] = GetFieldLabel("public_academic_specializations","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataacademic_specializations["updated_at"] = $fdata;
		$tdataacademic_specializations[".searchableFields"][] = "updated_at";


$tables_data["public.academic_specializations"]=&$tdataacademic_specializations;
$field_labels["public_academic_specializations"] = &$fieldLabelsacademic_specializations;
$fieldToolTips["public_academic_specializations"] = &$fieldToolTipsacademic_specializations;
$placeHolders["public_academic_specializations"] = &$placeHoldersacademic_specializations;
$page_titles["public_academic_specializations"] = &$pageTitlesacademic_specializations;


changeTextControlsToDate( "public.academic_specializations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.academic_specializations"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.academic_specializations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_academic_specializations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	specialization,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".academic_specializations";
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
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.academic_specializations",
	"m_srcTableName" => "public.academic_specializations"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.academic_specializations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "specialization",
	"m_strTable" => "public.academic_specializations",
	"m_srcTableName" => "public.academic_specializations"
));

$proto8["m_sql"] = "specialization";
$proto8["m_srcTableName"] = "public.academic_specializations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.academic_specializations",
	"m_srcTableName" => "public.academic_specializations"
));

$proto10["m_sql"] = "created_at";
$proto10["m_srcTableName"] = "public.academic_specializations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.academic_specializations",
	"m_srcTableName" => "public.academic_specializations"
));

$proto12["m_sql"] = "updated_at";
$proto12["m_srcTableName"] = "public.academic_specializations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.academic_specializations";
$proto15["m_srcTableName"] = "public.academic_specializations";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "specialization";
$proto15["m_columns"][] = "created_at";
$proto15["m_columns"][] = "updated_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".academic_specializations";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.academic_specializations";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.academic_specializations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_academic_specializations = createSqlQuery_academic_specializations();


	
		;

				

$tdataacademic_specializations[".sqlquery"] = $queryData_academic_specializations;



$tdataacademic_specializations[".hasEvents"] = false;

?>