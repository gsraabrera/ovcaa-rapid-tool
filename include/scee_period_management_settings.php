<?php
$tdatascee_period_management = array();
$tdatascee_period_management[".searchableFields"] = array();
$tdatascee_period_management[".ShortName"] = "scee_period_management";
$tdatascee_period_management[".OwnerID"] = "";
$tdatascee_period_management[".OriginalTable"] = "public.scheduled_feature_dates";


$tdatascee_period_management[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatascee_period_management[".originalPagesByType"] = $tdatascee_period_management[".pagesByType"];
$tdatascee_period_management[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatascee_period_management[".originalPages"] = $tdatascee_period_management[".pages"];
$tdatascee_period_management[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatascee_period_management[".originalDefaultPages"] = $tdatascee_period_management[".defaultPages"];

//	field labels
$fieldLabelsscee_period_management = array();
$fieldToolTipsscee_period_management = array();
$pageTitlesscee_period_management = array();
$placeHoldersscee_period_management = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsscee_period_management["English"] = array();
	$fieldToolTipsscee_period_management["English"] = array();
	$placeHoldersscee_period_management["English"] = array();
	$pageTitlesscee_period_management["English"] = array();
	$fieldLabelsscee_period_management["English"]["id"] = "Id";
	$fieldToolTipsscee_period_management["English"]["id"] = "";
	$placeHoldersscee_period_management["English"]["id"] = "";
	$fieldLabelsscee_period_management["English"]["scheduled_feature_id"] = "Scheduled Feature Id";
	$fieldToolTipsscee_period_management["English"]["scheduled_feature_id"] = "";
	$placeHoldersscee_period_management["English"]["scheduled_feature_id"] = "";
	$fieldLabelsscee_period_management["English"]["description"] = "Description";
	$fieldToolTipsscee_period_management["English"]["description"] = "";
	$placeHoldersscee_period_management["English"]["description"] = "";
	$fieldLabelsscee_period_management["English"]["start_datetime"] = "Start Datetime";
	$fieldToolTipsscee_period_management["English"]["start_datetime"] = "";
	$placeHoldersscee_period_management["English"]["start_datetime"] = "";
	$fieldLabelsscee_period_management["English"]["end_datetime"] = "End Datetime";
	$fieldToolTipsscee_period_management["English"]["end_datetime"] = "";
	$placeHoldersscee_period_management["English"]["end_datetime"] = "";
	$fieldLabelsscee_period_management["English"]["content"] = "Content";
	$fieldToolTipsscee_period_management["English"]["content"] = "";
	$placeHoldersscee_period_management["English"]["content"] = "";
	$fieldLabelsscee_period_management["English"]["created_at"] = "Created At";
	$fieldToolTipsscee_period_management["English"]["created_at"] = "";
	$placeHoldersscee_period_management["English"]["created_at"] = "";
	$fieldLabelsscee_period_management["English"]["updated_at"] = "Updated At";
	$fieldToolTipsscee_period_management["English"]["updated_at"] = "";
	$placeHoldersscee_period_management["English"]["updated_at"] = "";
	$fieldLabelsscee_period_management["English"]["term_id"] = "Term Id";
	$fieldToolTipsscee_period_management["English"]["term_id"] = "";
	$placeHoldersscee_period_management["English"]["term_id"] = "";
	if (count($fieldToolTipsscee_period_management["English"]))
		$tdatascee_period_management[".isUseToolTips"] = true;
}


	$tdatascee_period_management[".NCSearch"] = true;



$tdatascee_period_management[".shortTableName"] = "scee_period_management";
$tdatascee_period_management[".nSecOptions"] = 0;

$tdatascee_period_management[".mainTableOwnerID"] = "";
$tdatascee_period_management[".entityType"] = 1;
$tdatascee_period_management[".connId"] = "financialslatestDbatlocalhost";


$tdatascee_period_management[".strOriginalTableName"] = "public.scheduled_feature_dates";

	



$tdatascee_period_management[".showAddInPopup"] = false;

$tdatascee_period_management[".showEditInPopup"] = false;

$tdatascee_period_management[".showViewInPopup"] = false;

$tdatascee_period_management[".listAjax"] = false;
//	temporary
//$tdatascee_period_management[".listAjax"] = false;

	$tdatascee_period_management[".audit"] = true;

	$tdatascee_period_management[".locking"] = false;


$pages = $tdatascee_period_management[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatascee_period_management[".edit"] = true;
	$tdatascee_period_management[".afterEditAction"] = 1;
	$tdatascee_period_management[".closePopupAfterEdit"] = 1;
	$tdatascee_period_management[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatascee_period_management[".add"] = true;
$tdatascee_period_management[".afterAddAction"] = 1;
$tdatascee_period_management[".closePopupAfterAdd"] = 1;
$tdatascee_period_management[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatascee_period_management[".list"] = true;
}



$tdatascee_period_management[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatascee_period_management[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatascee_period_management[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatascee_period_management[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatascee_period_management[".printFriendly"] = true;
}



$tdatascee_period_management[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatascee_period_management[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatascee_period_management[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatascee_period_management[".isUseAjaxSuggest"] = true;





$tdatascee_period_management[".ajaxCodeSnippetAdded"] = false;

$tdatascee_period_management[".buttonsAdded"] = false;

$tdatascee_period_management[".addPageEvents"] = true;

// use timepicker for search panel
$tdatascee_period_management[".isUseTimeForSearch"] = false;


$tdatascee_period_management[".badgeColor"] = "DB7093";


$tdatascee_period_management[".allSearchFields"] = array();
$tdatascee_period_management[".filterFields"] = array();
$tdatascee_period_management[".requiredSearchFields"] = array();

$tdatascee_period_management[".googleLikeFields"] = array();
$tdatascee_period_management[".googleLikeFields"][] = "id";
$tdatascee_period_management[".googleLikeFields"][] = "scheduled_feature_id";
$tdatascee_period_management[".googleLikeFields"][] = "description";
$tdatascee_period_management[".googleLikeFields"][] = "start_datetime";
$tdatascee_period_management[".googleLikeFields"][] = "end_datetime";
$tdatascee_period_management[".googleLikeFields"][] = "content";
$tdatascee_period_management[".googleLikeFields"][] = "created_at";
$tdatascee_period_management[".googleLikeFields"][] = "updated_at";
$tdatascee_period_management[".googleLikeFields"][] = "term_id";



$tdatascee_period_management[".tableType"] = "list";

$tdatascee_period_management[".printerPageOrientation"] = 0;
$tdatascee_period_management[".nPrinterPageScale"] = 100;

$tdatascee_period_management[".nPrinterSplitRecords"] = 40;

$tdatascee_period_management[".geocodingEnabled"] = false;










$tdatascee_period_management[".pageSize"] = 20;

$tdatascee_period_management[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatascee_period_management[".strOrderBy"] = $tstrOrderBy;

$tdatascee_period_management[".orderindexes"] = array();


$tdatascee_period_management[".sqlHead"] = "SELECT id,      scheduled_feature_id,      description,      start_datetime,      end_datetime,      content,      created_at,      updated_at,      term_id";
$tdatascee_period_management[".sqlFrom"] = "FROM public.scheduled_feature_dates sfd";
$tdatascee_period_management[".sqlWhereExpr"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'scee_module_application'  )";
$tdatascee_period_management[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascee_period_management[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascee_period_management[".arrGroupsPerPage"] = $arrGPP;

$tdatascee_period_management[".highlightSearchResults"] = true;

$tableKeysscee_period_management = array();
$tableKeysscee_period_management[] = "id";
$tdatascee_period_management[".Keys"] = $tableKeysscee_period_management;


$tdatascee_period_management[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","id");
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


	$tdatascee_period_management["id"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "id";
//	scheduled_feature_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "scheduled_feature_id";
	$fdata["GoodName"] = "scheduled_feature_id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","scheduled_feature_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "scheduled_feature_id";

		$fdata["sourceSingle"] = "scheduled_feature_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scheduled_feature_id";

	
	
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


	$tdatascee_period_management["scheduled_feature_id"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "scheduled_feature_id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatascee_period_management["description"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "description";
//	start_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_datetime";
	$fdata["GoodName"] = "start_datetime";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","start_datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "start_datetime";

		$fdata["sourceSingle"] = "start_datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_datetime";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatascee_period_management["start_datetime"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "start_datetime";
//	end_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_datetime";
	$fdata["GoodName"] = "end_datetime";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","end_datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "end_datetime";

		$fdata["sourceSingle"] = "end_datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_datetime";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatascee_period_management["end_datetime"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "end_datetime";
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","content");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "content";

		$fdata["sourceSingle"] = "content";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatascee_period_management["content"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "content";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","created_at");
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


	$tdatascee_period_management["created_at"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","updated_at");
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


	$tdatascee_period_management["updated_at"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "updated_at";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("scee_period_management","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

		$fdata["sourceSingle"] = "term_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.student_terms";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "term_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(term,'  ',ay)";

				$edata["LookupWhere"] = "term_type='Semestral'";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "term_id";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatascee_period_management["term_id"] = $fdata;
		$tdatascee_period_management[".searchableFields"][] = "term_id";


$tables_data["scee_period_management"]=&$tdatascee_period_management;
$field_labels["scee_period_management"] = &$fieldLabelsscee_period_management;
$fieldToolTips["scee_period_management"] = &$fieldToolTipsscee_period_management;
$placeHolders["scee_period_management"] = &$placeHoldersscee_period_management;
$page_titles["scee_period_management"] = &$pageTitlesscee_period_management;


changeTextControlsToDate( "scee_period_management" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["scee_period_management"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["scee_period_management"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_scee_period_management()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,      scheduled_feature_id,      description,      start_datetime,      end_datetime,      content,      created_at,      updated_at,      term_id";
$proto0["m_strFrom"] = "FROM public.scheduled_feature_dates sfd";
$proto0["m_strWhere"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'scee_module_application'  )";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'scee_module_application'  )";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'scee_module_application'  )"
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
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "scee_period_management";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "scheduled_feature_id",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto8["m_sql"] = "scheduled_feature_id";
$proto8["m_srcTableName"] = "scee_period_management";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "scee_period_management";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start_datetime",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto12["m_sql"] = "start_datetime";
$proto12["m_srcTableName"] = "scee_period_management";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end_datetime",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto14["m_sql"] = "end_datetime";
$proto14["m_srcTableName"] = "scee_period_management";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto16["m_sql"] = "content";
$proto16["m_srcTableName"] = "scee_period_management";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto18["m_sql"] = "created_at";
$proto18["m_srcTableName"] = "scee_period_management";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "scee_period_management";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "sfd",
	"m_srcTableName" => "scee_period_management"
));

$proto22["m_sql"] = "term_id";
$proto22["m_srcTableName"] = "scee_period_management";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.scheduled_feature_dates";
$proto25["m_srcTableName"] = "scee_period_management";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "scheduled_feature_id";
$proto25["m_columns"][] = "description";
$proto25["m_columns"][] = "start_datetime";
$proto25["m_columns"][] = "end_datetime";
$proto25["m_columns"][] = "content";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "term_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "public.scheduled_feature_dates sfd";
$proto24["m_alias"] = "sfd";
$proto24["m_srcTableName"] = "scee_period_management";
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

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="scee_period_management";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scee_period_management = createSqlQuery_scee_period_management();


	
		;

									

$tdatascee_period_management[".sqlquery"] = $queryData_scee_period_management;



include_once(getabspath("include/scee_period_management_events.php"));
$tdatascee_period_management[".hasEvents"] = true;

?>