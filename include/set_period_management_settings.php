<?php
$tdataset_period_management = array();
$tdataset_period_management[".searchableFields"] = array();
$tdataset_period_management[".ShortName"] = "set_period_management";
$tdataset_period_management[".OwnerID"] = "";
$tdataset_period_management[".OriginalTable"] = "public.scheduled_feature_dates";


$tdataset_period_management[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataset_period_management[".originalPagesByType"] = $tdataset_period_management[".pagesByType"];
$tdataset_period_management[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataset_period_management[".originalPages"] = $tdataset_period_management[".pages"];
$tdataset_period_management[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataset_period_management[".originalDefaultPages"] = $tdataset_period_management[".defaultPages"];

//	field labels
$fieldLabelsset_period_management = array();
$fieldToolTipsset_period_management = array();
$pageTitlesset_period_management = array();
$placeHoldersset_period_management = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsset_period_management["English"] = array();
	$fieldToolTipsset_period_management["English"] = array();
	$placeHoldersset_period_management["English"] = array();
	$pageTitlesset_period_management["English"] = array();
	$fieldLabelsset_period_management["English"]["id"] = "Id";
	$fieldToolTipsset_period_management["English"]["id"] = "";
	$placeHoldersset_period_management["English"]["id"] = "";
	$fieldLabelsset_period_management["English"]["scheduled_feature_id"] = "Scheduled Feature Id";
	$fieldToolTipsset_period_management["English"]["scheduled_feature_id"] = "";
	$placeHoldersset_period_management["English"]["scheduled_feature_id"] = "";
	$fieldLabelsset_period_management["English"]["description"] = "Description";
	$fieldToolTipsset_period_management["English"]["description"] = "";
	$placeHoldersset_period_management["English"]["description"] = "";
	$fieldLabelsset_period_management["English"]["start_datetime"] = "Start Datetime";
	$fieldToolTipsset_period_management["English"]["start_datetime"] = "";
	$placeHoldersset_period_management["English"]["start_datetime"] = "";
	$fieldLabelsset_period_management["English"]["end_datetime"] = "End Datetime";
	$fieldToolTipsset_period_management["English"]["end_datetime"] = "";
	$placeHoldersset_period_management["English"]["end_datetime"] = "";
	$fieldLabelsset_period_management["English"]["content"] = "Content";
	$fieldToolTipsset_period_management["English"]["content"] = "";
	$placeHoldersset_period_management["English"]["content"] = "";
	$fieldLabelsset_period_management["English"]["created_at"] = "Created At";
	$fieldToolTipsset_period_management["English"]["created_at"] = "";
	$placeHoldersset_period_management["English"]["created_at"] = "";
	$fieldLabelsset_period_management["English"]["updated_at"] = "Updated At";
	$fieldToolTipsset_period_management["English"]["updated_at"] = "";
	$placeHoldersset_period_management["English"]["updated_at"] = "";
	$fieldLabelsset_period_management["English"]["term_id"] = "Term Id";
	$fieldToolTipsset_period_management["English"]["term_id"] = "";
	$placeHoldersset_period_management["English"]["term_id"] = "";
	if (count($fieldToolTipsset_period_management["English"]))
		$tdataset_period_management[".isUseToolTips"] = true;
}


	$tdataset_period_management[".NCSearch"] = true;



$tdataset_period_management[".shortTableName"] = "set_period_management";
$tdataset_period_management[".nSecOptions"] = 0;

$tdataset_period_management[".mainTableOwnerID"] = "";
$tdataset_period_management[".entityType"] = 1;
$tdataset_period_management[".connId"] = "financialslatestDbatlocalhost";


$tdataset_period_management[".strOriginalTableName"] = "public.scheduled_feature_dates";

	



$tdataset_period_management[".showAddInPopup"] = false;

$tdataset_period_management[".showEditInPopup"] = false;

$tdataset_period_management[".showViewInPopup"] = false;

$tdataset_period_management[".listAjax"] = false;
//	temporary
//$tdataset_period_management[".listAjax"] = false;

	$tdataset_period_management[".audit"] = true;

	$tdataset_period_management[".locking"] = false;


$pages = $tdataset_period_management[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataset_period_management[".edit"] = true;
	$tdataset_period_management[".afterEditAction"] = 1;
	$tdataset_period_management[".closePopupAfterEdit"] = 1;
	$tdataset_period_management[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataset_period_management[".add"] = true;
$tdataset_period_management[".afterAddAction"] = 1;
$tdataset_period_management[".closePopupAfterAdd"] = 1;
$tdataset_period_management[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataset_period_management[".list"] = true;
}



$tdataset_period_management[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataset_period_management[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataset_period_management[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataset_period_management[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataset_period_management[".printFriendly"] = true;
}



$tdataset_period_management[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataset_period_management[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataset_period_management[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataset_period_management[".isUseAjaxSuggest"] = true;





$tdataset_period_management[".ajaxCodeSnippetAdded"] = false;

$tdataset_period_management[".buttonsAdded"] = false;

$tdataset_period_management[".addPageEvents"] = true;

// use timepicker for search panel
$tdataset_period_management[".isUseTimeForSearch"] = false;


$tdataset_period_management[".badgeColor"] = "6B8E23";


$tdataset_period_management[".allSearchFields"] = array();
$tdataset_period_management[".filterFields"] = array();
$tdataset_period_management[".requiredSearchFields"] = array();

$tdataset_period_management[".googleLikeFields"] = array();
$tdataset_period_management[".googleLikeFields"][] = "id";
$tdataset_period_management[".googleLikeFields"][] = "scheduled_feature_id";
$tdataset_period_management[".googleLikeFields"][] = "description";
$tdataset_period_management[".googleLikeFields"][] = "start_datetime";
$tdataset_period_management[".googleLikeFields"][] = "end_datetime";
$tdataset_period_management[".googleLikeFields"][] = "content";
$tdataset_period_management[".googleLikeFields"][] = "created_at";
$tdataset_period_management[".googleLikeFields"][] = "updated_at";
$tdataset_period_management[".googleLikeFields"][] = "term_id";



$tdataset_period_management[".tableType"] = "list";

$tdataset_period_management[".printerPageOrientation"] = 0;
$tdataset_period_management[".nPrinterPageScale"] = 100;

$tdataset_period_management[".nPrinterSplitRecords"] = 40;

$tdataset_period_management[".geocodingEnabled"] = false;










$tdataset_period_management[".pageSize"] = 20;

$tdataset_period_management[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataset_period_management[".strOrderBy"] = $tstrOrderBy;

$tdataset_period_management[".orderindexes"] = array();


$tdataset_period_management[".sqlHead"] = "SELECT id,      scheduled_feature_id,      description,      start_datetime,      end_datetime,      content,      created_at,      updated_at,      term_id";
$tdataset_period_management[".sqlFrom"] = "FROM public.scheduled_feature_dates sfd";
$tdataset_period_management[".sqlWhereExpr"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'set_module_application'  )";
$tdataset_period_management[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_period_management[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_period_management[".arrGroupsPerPage"] = $arrGPP;

$tdataset_period_management[".highlightSearchResults"] = true;

$tableKeysset_period_management = array();
$tableKeysset_period_management[] = "id";
$tdataset_period_management[".Keys"] = $tableKeysset_period_management;


$tdataset_period_management[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","id");
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


	$tdataset_period_management["id"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "id";
//	scheduled_feature_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "scheduled_feature_id";
	$fdata["GoodName"] = "scheduled_feature_id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","scheduled_feature_id");
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


	$tdataset_period_management["scheduled_feature_id"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "scheduled_feature_id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","description");
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


	$tdataset_period_management["description"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "description";
//	start_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_datetime";
	$fdata["GoodName"] = "start_datetime";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","start_datetime");
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


	$tdataset_period_management["start_datetime"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "start_datetime";
//	end_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_datetime";
	$fdata["GoodName"] = "end_datetime";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","end_datetime");
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


	$tdataset_period_management["end_datetime"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "end_datetime";
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","content");
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


	$tdataset_period_management["content"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "content";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","created_at");
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


	$tdataset_period_management["created_at"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","updated_at");
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


	$tdataset_period_management["updated_at"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "updated_at";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.scheduled_feature_dates";
	$fdata["Label"] = GetFieldLabel("set_period_management","term_id");
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


	$tdataset_period_management["term_id"] = $fdata;
		$tdataset_period_management[".searchableFields"][] = "term_id";


$tables_data["set_period_management"]=&$tdataset_period_management;
$field_labels["set_period_management"] = &$fieldLabelsset_period_management;
$fieldToolTips["set_period_management"] = &$fieldToolTipsset_period_management;
$placeHolders["set_period_management"] = &$placeHoldersset_period_management;
$page_titles["set_period_management"] = &$pageTitlesset_period_management;


changeTextControlsToDate( "set_period_management" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["set_period_management"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["set_period_management"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_set_period_management()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,      scheduled_feature_id,      description,      start_datetime,      end_datetime,      content,      created_at,      updated_at,      term_id";
$proto0["m_strFrom"] = "FROM public.scheduled_feature_dates sfd";
$proto0["m_strWhere"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'set_module_application'  )";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'set_module_application'  )";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "EXISTS (      SELECT 1      FROM public.scheduled_features sf      WHERE sf.id = sfd.scheduled_feature_id        AND sf.feature_name = 'set_module_application'  )"
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
	"m_srcTableName" => "set_period_management"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "set_period_management";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "scheduled_feature_id",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto8["m_sql"] = "scheduled_feature_id";
$proto8["m_srcTableName"] = "set_period_management";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "set_period_management";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start_datetime",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto12["m_sql"] = "start_datetime";
$proto12["m_srcTableName"] = "set_period_management";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end_datetime",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto14["m_sql"] = "end_datetime";
$proto14["m_srcTableName"] = "set_period_management";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto16["m_sql"] = "content";
$proto16["m_srcTableName"] = "set_period_management";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto18["m_sql"] = "created_at";
$proto18["m_srcTableName"] = "set_period_management";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "set_period_management";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "sfd",
	"m_srcTableName" => "set_period_management"
));

$proto22["m_sql"] = "term_id";
$proto22["m_srcTableName"] = "set_period_management";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.scheduled_feature_dates";
$proto25["m_srcTableName"] = "set_period_management";
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
$proto24["m_srcTableName"] = "set_period_management";
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
$proto0["m_srcTableName"]="set_period_management";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_period_management = createSqlQuery_set_period_management();


	
		;

									

$tdataset_period_management[".sqlquery"] = $queryData_set_period_management;



include_once(getabspath("include/set_period_management_events.php"));
$tdataset_period_management[".hasEvents"] = true;

?>