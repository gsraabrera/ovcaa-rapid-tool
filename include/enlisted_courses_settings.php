<?php
$tdataenlisted_courses = array();
$tdataenlisted_courses[".searchableFields"] = array();
$tdataenlisted_courses[".ShortName"] = "enlisted_courses";
$tdataenlisted_courses[".OwnerID"] = "";
$tdataenlisted_courses[".OriginalTable"] = "public.student_enlistments";


$tdataenlisted_courses[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataenlisted_courses[".originalPagesByType"] = $tdataenlisted_courses[".pagesByType"];
$tdataenlisted_courses[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataenlisted_courses[".originalPages"] = $tdataenlisted_courses[".pages"];
$tdataenlisted_courses[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataenlisted_courses[".originalDefaultPages"] = $tdataenlisted_courses[".defaultPages"];

//	field labels
$fieldLabelsenlisted_courses = array();
$fieldToolTipsenlisted_courses = array();
$pageTitlesenlisted_courses = array();
$placeHoldersenlisted_courses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenlisted_courses["English"] = array();
	$fieldToolTipsenlisted_courses["English"] = array();
	$placeHoldersenlisted_courses["English"] = array();
	$pageTitlesenlisted_courses["English"] = array();
	$fieldLabelsenlisted_courses["English"]["id"] = "Id";
	$fieldToolTipsenlisted_courses["English"]["id"] = "";
	$placeHoldersenlisted_courses["English"]["id"] = "";
	$fieldLabelsenlisted_courses["English"]["course_code"] = "Course Code";
	$fieldToolTipsenlisted_courses["English"]["course_code"] = "";
	$placeHoldersenlisted_courses["English"]["course_code"] = "";
	$fieldLabelsenlisted_courses["English"]["section"] = "Section";
	$fieldToolTipsenlisted_courses["English"]["section"] = "";
	$placeHoldersenlisted_courses["English"]["section"] = "";
	$fieldLabelsenlisted_courses["English"]["status"] = "Status";
	$fieldToolTipsenlisted_courses["English"]["status"] = "";
	$placeHoldersenlisted_courses["English"]["status"] = "";
	$fieldLabelsenlisted_courses["English"]["student_enlistment_id"] = "Student Enlistment Id";
	$fieldToolTipsenlisted_courses["English"]["student_enlistment_id"] = "";
	$placeHoldersenlisted_courses["English"]["student_enlistment_id"] = "";
	if (count($fieldToolTipsenlisted_courses["English"]))
		$tdataenlisted_courses[".isUseToolTips"] = true;
}


	$tdataenlisted_courses[".NCSearch"] = true;



$tdataenlisted_courses[".shortTableName"] = "enlisted_courses";
$tdataenlisted_courses[".nSecOptions"] = 0;

$tdataenlisted_courses[".mainTableOwnerID"] = "";
$tdataenlisted_courses[".entityType"] = 1;
$tdataenlisted_courses[".connId"] = "financialslatestDbatlocalhost";


$tdataenlisted_courses[".strOriginalTableName"] = "public.student_enlistments";

	



$tdataenlisted_courses[".showAddInPopup"] = false;

$tdataenlisted_courses[".showEditInPopup"] = false;

$tdataenlisted_courses[".showViewInPopup"] = false;

$tdataenlisted_courses[".listAjax"] = false;
//	temporary
//$tdataenlisted_courses[".listAjax"] = false;

	$tdataenlisted_courses[".audit"] = false;

	$tdataenlisted_courses[".locking"] = false;


$pages = $tdataenlisted_courses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataenlisted_courses[".edit"] = true;
	$tdataenlisted_courses[".afterEditAction"] = 1;
	$tdataenlisted_courses[".closePopupAfterEdit"] = 1;
	$tdataenlisted_courses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataenlisted_courses[".add"] = true;
$tdataenlisted_courses[".afterAddAction"] = 1;
$tdataenlisted_courses[".closePopupAfterAdd"] = 1;
$tdataenlisted_courses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataenlisted_courses[".list"] = true;
}



$tdataenlisted_courses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataenlisted_courses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataenlisted_courses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataenlisted_courses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataenlisted_courses[".printFriendly"] = true;
}



$tdataenlisted_courses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataenlisted_courses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataenlisted_courses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataenlisted_courses[".isUseAjaxSuggest"] = true;





$tdataenlisted_courses[".ajaxCodeSnippetAdded"] = false;

$tdataenlisted_courses[".buttonsAdded"] = false;

$tdataenlisted_courses[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenlisted_courses[".isUseTimeForSearch"] = false;


$tdataenlisted_courses[".badgeColor"] = "dc143c";


$tdataenlisted_courses[".allSearchFields"] = array();
$tdataenlisted_courses[".filterFields"] = array();
$tdataenlisted_courses[".requiredSearchFields"] = array();

$tdataenlisted_courses[".googleLikeFields"] = array();
$tdataenlisted_courses[".googleLikeFields"][] = "id";
$tdataenlisted_courses[".googleLikeFields"][] = "course_code";
$tdataenlisted_courses[".googleLikeFields"][] = "section";
$tdataenlisted_courses[".googleLikeFields"][] = "status";
$tdataenlisted_courses[".googleLikeFields"][] = "student_enlistment_id";



$tdataenlisted_courses[".tableType"] = "list";

$tdataenlisted_courses[".printerPageOrientation"] = 0;
$tdataenlisted_courses[".nPrinterPageScale"] = 100;

$tdataenlisted_courses[".nPrinterSplitRecords"] = 40;

$tdataenlisted_courses[".geocodingEnabled"] = false;










$tdataenlisted_courses[".pageSize"] = 20;

$tdataenlisted_courses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataenlisted_courses[".strOrderBy"] = $tstrOrderBy;

$tdataenlisted_courses[".orderindexes"] = array();


$tdataenlisted_courses[".sqlHead"] = "SELECT student_enlistments.id,  	course_code,  	section,    sec.status,    student_enlistment_id";
$tdataenlisted_courses[".sqlFrom"] = "FROM \"public\".student_enlistments  join student_enlist_classes sec on sec.student_enlistment_id=student_enlistments.id and sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')  join classes on classes.id = sec.class_id  join courses on courses.course_id=classes.course_id";
$tdataenlisted_courses[".sqlWhereExpr"] = "";
$tdataenlisted_courses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenlisted_courses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenlisted_courses[".arrGroupsPerPage"] = $arrGPP;

$tdataenlisted_courses[".highlightSearchResults"] = true;

$tableKeysenlisted_courses = array();
$tdataenlisted_courses[".Keys"] = $tableKeysenlisted_courses;


$tdataenlisted_courses[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("enlisted_courses","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.id";

	
	
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


	$tdataenlisted_courses["id"] = $fdata;
		$tdataenlisted_courses[".searchableFields"][] = "id";
//	course_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "course_code";
	$fdata["GoodName"] = "course_code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enlisted_courses","course_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "course_code";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course_code";

	
	
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


	$tdataenlisted_courses["course_code"] = $fdata;
		$tdataenlisted_courses[".searchableFields"][] = "course_code";
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enlisted_courses","section");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "section";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "section";

	
	
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


	$tdataenlisted_courses["section"] = $fdata;
		$tdataenlisted_courses[".searchableFields"][] = "section";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_enlist_classes";
	$fdata["Label"] = GetFieldLabel("enlisted_courses","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sec.status";

	
	
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


	$tdataenlisted_courses["status"] = $fdata;
		$tdataenlisted_courses[".searchableFields"][] = "status";
//	student_enlistment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "student_enlistment_id";
	$fdata["GoodName"] = "student_enlistment_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enlisted_courses","student_enlistment_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "student_enlistment_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistment_id";

	
	
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


	$tdataenlisted_courses["student_enlistment_id"] = $fdata;
		$tdataenlisted_courses[".searchableFields"][] = "student_enlistment_id";


$tables_data["enlisted_courses"]=&$tdataenlisted_courses;
$field_labels["enlisted_courses"] = &$fieldLabelsenlisted_courses;
$fieldToolTips["enlisted_courses"] = &$fieldToolTipsenlisted_courses;
$placeHolders["enlisted_courses"] = &$placeHoldersenlisted_courses;
$page_titles["enlisted_courses"] = &$pageTitlesenlisted_courses;


changeTextControlsToDate( "enlisted_courses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["enlisted_courses"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["enlisted_courses"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.student_enlistments";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="problematic_enlistments";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "problematic_enlistments";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["enlisted_courses"][0] = $masterParams;
				$masterTablesData["enlisted_courses"][0]["masterKeys"] = array();
	$masterTablesData["enlisted_courses"][0]["masterKeys"][]="id";
				$masterTablesData["enlisted_courses"][0]["detailKeys"] = array();
	$masterTablesData["enlisted_courses"][0]["detailKeys"][]="student_enlistment_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_enlisted_courses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_enlistments.id,  	course_code,  	section,    sec.status,    student_enlistment_id";
$proto0["m_strFrom"] = "FROM \"public\".student_enlistments  join student_enlist_classes sec on sec.student_enlistment_id=student_enlistments.id and sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')  join classes on classes.id = sec.class_id  join courses on courses.course_id=classes.course_id";
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
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "enlisted_courses"
));

$proto6["m_sql"] = "student_enlistments.id";
$proto6["m_srcTableName"] = "enlisted_courses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "course_code"
));

$proto8["m_sql"] = "course_code";
$proto8["m_srcTableName"] = "enlisted_courses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "section"
));

$proto10["m_sql"] = "section";
$proto10["m_srcTableName"] = "enlisted_courses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sec",
	"m_srcTableName" => "enlisted_courses"
));

$proto12["m_sql"] = "sec.status";
$proto12["m_srcTableName"] = "enlisted_courses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_enlistment_id"
));

$proto14["m_sql"] = "student_enlistment_id";
$proto14["m_srcTableName"] = "enlisted_courses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.student_enlistments";
$proto17["m_srcTableName"] = "enlisted_courses";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "term_id";
$proto17["m_columns"][] = "student_id";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$proto17["m_columns"][] = "remarks";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".student_enlistments";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "enlisted_courses";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "public.student_enlist_classes";
$proto21["m_srcTableName"] = "enlisted_courses";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "student_enlistment_id";
$proto21["m_columns"][] = "class_id";
$proto21["m_columns"][] = "status";
$proto21["m_columns"][] = "linked";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "remarks";
$proto21["m_columns"][] = "is_enlisted_during_change_mat";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "join student_enlist_classes sec on sec.student_enlistment_id=student_enlistments.id and sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')";
$proto20["m_alias"] = "sec";
$proto20["m_srcTableName"] = "enlisted_courses";
$proto22=array();
$proto22["m_sql"] = "sec.student_enlistment_id=student_enlistments.id and sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')";
$proto22["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "sec.student_enlistment_id=student_enlistments.id and sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
						$proto24=array();
$proto24["m_sql"] = "sec.student_enlistment_id=student_enlistments.id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "sec",
	"m_srcTableName" => "enlisted_courses"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "=student_enlistments.id";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto22["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "sec.status in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sec",
	"m_srcTableName" => "enlisted_courses"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "in ('Enlisted','Enrolled','Sent to SAIS', 'Finalized')";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto22["m_contained"][]=$obj;
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "public.classes";
$proto29["m_srcTableName"] = "enlisted_courses";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "course_id";
$proto29["m_columns"][] = "term_id";
$proto29["m_columns"][] = "parent_class_id";
$proto29["m_columns"][] = "type";
$proto29["m_columns"][] = "section";
$proto29["m_columns"][] = "date";
$proto29["m_columns"][] = "mon";
$proto29["m_columns"][] = "tue";
$proto29["m_columns"][] = "wed";
$proto29["m_columns"][] = "thu";
$proto29["m_columns"][] = "fri";
$proto29["m_columns"][] = "sat";
$proto29["m_columns"][] = "start_time";
$proto29["m_columns"][] = "end_time";
$proto29["m_columns"][] = "credit";
$proto29["m_columns"][] = "hours";
$proto29["m_columns"][] = "tm_id";
$proto29["m_columns"][] = "facility_id";
$proto29["m_columns"][] = "max_class_size";
$proto29["m_columns"][] = "active_class_size";
$proto29["m_columns"][] = "activity";
$proto29["m_columns"][] = "class_nbr";
$proto29["m_columns"][] = "assoc";
$proto29["m_columns"][] = "acad_org";
$proto29["m_columns"][] = "acad_group";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "prerog_count";
$proto29["m_columns"][] = "reserved_count";
$proto29["m_columns"][] = "is_active";
$proto29["m_columns"][] = "hide_faculty";
$proto29["m_columns"][] = "consent";
$proto29["m_columns"][] = "is_prerog_open";
$proto29["m_columns"][] = "is_coi_open";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "is_grade_posted";
$proto29["m_columns"][] = "is_partial_posting";
$proto29["m_columns"][] = "deleted_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "join classes on classes.id = sec.class_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "enlisted_courses";
$proto30=array();
$proto30["m_sql"] = "\"public\".classes.id = sec.class_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.classes",
	"m_srcTableName" => "enlisted_courses"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= sec.class_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "public.courses";
$proto33["m_srcTableName"] = "enlisted_courses";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "course_id";
$proto33["m_columns"][] = "sais_course_id";
$proto33["m_columns"][] = "title";
$proto33["m_columns"][] = "type";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "course_code";
$proto33["m_columns"][] = "sem_offered";
$proto33["m_columns"][] = "career";
$proto33["m_columns"][] = "units";
$proto33["m_columns"][] = "is_repeatable";
$proto33["m_columns"][] = "is_active";
$proto33["m_columns"][] = "campus";
$proto33["m_columns"][] = "equivalent";
$proto33["m_columns"][] = "is_multiple_enrollment";
$proto33["m_columns"][] = "subject";
$proto33["m_columns"][] = "course_number";
$proto33["m_columns"][] = "contact_hours";
$proto33["m_columns"][] = "grading";
$proto33["m_columns"][] = "tm_id";
$proto33["m_columns"][] = "acad_org";
$proto33["m_columns"][] = "acad_group";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "is_academic";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "join courses on courses.course_id=classes.course_id";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "enlisted_courses";
$proto34=array();
$proto34["m_sql"] = "\"public\".courses.course_id = \"public\".classes.course_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "public.courses",
	"m_srcTableName" => "enlisted_courses"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= \"public\".classes.course_id";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="enlisted_courses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enlisted_courses = createSqlQuery_enlisted_courses();


	
		;

					

$tdataenlisted_courses[".sqlquery"] = $queryData_enlisted_courses;



$tdataenlisted_courses[".hasEvents"] = false;

?>