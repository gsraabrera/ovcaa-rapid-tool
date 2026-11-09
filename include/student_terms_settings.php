<?php
$tdatastudent_terms = array();
$tdatastudent_terms[".searchableFields"] = array();
$tdatastudent_terms[".ShortName"] = "student_terms";
$tdatastudent_terms[".OwnerID"] = "";
$tdatastudent_terms[".OriginalTable"] = "public.student_terms";


$tdatastudent_terms[".pagesByType"] = my_json_decode( "{}" );
$tdatastudent_terms[".originalPagesByType"] = $tdatastudent_terms[".pagesByType"];
$tdatastudent_terms[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatastudent_terms[".originalPages"] = $tdatastudent_terms[".pages"];
$tdatastudent_terms[".defaultPages"] = my_json_decode( "{}" );
$tdatastudent_terms[".originalDefaultPages"] = $tdatastudent_terms[".defaultPages"];

//	field labels
$fieldLabelsstudent_terms = array();
$fieldToolTipsstudent_terms = array();
$pageTitlesstudent_terms = array();
$placeHoldersstudent_terms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_terms["English"] = array();
	$fieldToolTipsstudent_terms["English"] = array();
	$placeHoldersstudent_terms["English"] = array();
	$pageTitlesstudent_terms["English"] = array();
	$fieldLabelsstudent_terms["English"]["term_id"] = "Term Id";
	$fieldToolTipsstudent_terms["English"]["term_id"] = "";
	$placeHoldersstudent_terms["English"]["term_id"] = "";
	$fieldLabelsstudent_terms["English"]["term"] = "Term";
	$fieldToolTipsstudent_terms["English"]["term"] = "";
	$placeHoldersstudent_terms["English"]["term"] = "";
	$fieldLabelsstudent_terms["English"]["ay"] = "Ay";
	$fieldToolTipsstudent_terms["English"]["ay"] = "";
	$placeHoldersstudent_terms["English"]["ay"] = "";
	$fieldLabelsstudent_terms["English"]["status"] = "Status";
	$fieldToolTipsstudent_terms["English"]["status"] = "";
	$placeHoldersstudent_terms["English"]["status"] = "";
	$fieldLabelsstudent_terms["English"]["created_at"] = "Created At";
	$fieldToolTipsstudent_terms["English"]["created_at"] = "";
	$placeHoldersstudent_terms["English"]["created_at"] = "";
	$fieldLabelsstudent_terms["English"]["updated_at"] = "Updated At";
	$fieldToolTipsstudent_terms["English"]["updated_at"] = "";
	$placeHoldersstudent_terms["English"]["updated_at"] = "";
	$fieldLabelsstudent_terms["English"]["term_type"] = "Term Type";
	$fieldToolTipsstudent_terms["English"]["term_type"] = "";
	$placeHoldersstudent_terms["English"]["term_type"] = "";
	$fieldLabelsstudent_terms["English"]["start_date"] = "Start Date";
	$fieldToolTipsstudent_terms["English"]["start_date"] = "";
	$placeHoldersstudent_terms["English"]["start_date"] = "";
	$fieldLabelsstudent_terms["English"]["end_date"] = "End Date";
	$fieldToolTipsstudent_terms["English"]["end_date"] = "";
	$placeHoldersstudent_terms["English"]["end_date"] = "";
	if (count($fieldToolTipsstudent_terms["English"]))
		$tdatastudent_terms[".isUseToolTips"] = true;
}


	$tdatastudent_terms[".NCSearch"] = true;



$tdatastudent_terms[".shortTableName"] = "student_terms";
$tdatastudent_terms[".nSecOptions"] = 0;

$tdatastudent_terms[".mainTableOwnerID"] = "";
$tdatastudent_terms[".entityType"] = 0;
$tdatastudent_terms[".connId"] = "financialslatestDbatlocalhost";


$tdatastudent_terms[".strOriginalTableName"] = "public.student_terms";

	



$tdatastudent_terms[".showAddInPopup"] = false;

$tdatastudent_terms[".showEditInPopup"] = false;

$tdatastudent_terms[".showViewInPopup"] = false;

$tdatastudent_terms[".listAjax"] = false;
//	temporary
//$tdatastudent_terms[".listAjax"] = false;

	$tdatastudent_terms[".audit"] = false;

	$tdatastudent_terms[".locking"] = false;


$pages = $tdatastudent_terms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudent_terms[".edit"] = true;
	$tdatastudent_terms[".afterEditAction"] = 1;
	$tdatastudent_terms[".closePopupAfterEdit"] = 1;
	$tdatastudent_terms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudent_terms[".add"] = true;
$tdatastudent_terms[".afterAddAction"] = 1;
$tdatastudent_terms[".closePopupAfterAdd"] = 1;
$tdatastudent_terms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudent_terms[".list"] = true;
}



$tdatastudent_terms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudent_terms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudent_terms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudent_terms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudent_terms[".printFriendly"] = true;
}



$tdatastudent_terms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudent_terms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudent_terms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudent_terms[".isUseAjaxSuggest"] = true;





$tdatastudent_terms[".ajaxCodeSnippetAdded"] = false;

$tdatastudent_terms[".buttonsAdded"] = false;

$tdatastudent_terms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_terms[".isUseTimeForSearch"] = false;


$tdatastudent_terms[".badgeColor"] = "DC143C";


$tdatastudent_terms[".allSearchFields"] = array();
$tdatastudent_terms[".filterFields"] = array();
$tdatastudent_terms[".requiredSearchFields"] = array();

$tdatastudent_terms[".googleLikeFields"] = array();
$tdatastudent_terms[".googleLikeFields"][] = "term_id";
$tdatastudent_terms[".googleLikeFields"][] = "term";
$tdatastudent_terms[".googleLikeFields"][] = "ay";
$tdatastudent_terms[".googleLikeFields"][] = "status";
$tdatastudent_terms[".googleLikeFields"][] = "created_at";
$tdatastudent_terms[".googleLikeFields"][] = "updated_at";
$tdatastudent_terms[".googleLikeFields"][] = "term_type";
$tdatastudent_terms[".googleLikeFields"][] = "start_date";
$tdatastudent_terms[".googleLikeFields"][] = "end_date";



$tdatastudent_terms[".tableType"] = "list";

$tdatastudent_terms[".printerPageOrientation"] = 0;
$tdatastudent_terms[".nPrinterPageScale"] = 100;

$tdatastudent_terms[".nPrinterSplitRecords"] = 40;

$tdatastudent_terms[".geocodingEnabled"] = false;










$tdatastudent_terms[".pageSize"] = 20;

$tdatastudent_terms[".warnLeavingPages"] = true;



$tstrOrderBy = "order by term_id desc";
$tdatastudent_terms[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_terms[".orderindexes"] = array();
			$tdatastudent_terms[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "term_id");


$tdatastudent_terms[".sqlHead"] = "SELECT term_id,  	term,  	ay,  	status,  	created_at,  	updated_at,  	term_type,  	start_date,  	end_date";
$tdatastudent_terms[".sqlFrom"] = "FROM \"public\".student_terms";
$tdatastudent_terms[".sqlWhereExpr"] = "term_type='Semestral' and EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )";
$tdatastudent_terms[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatastudent_terms[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_terms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_terms[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent_terms[".highlightSearchResults"] = true;

$tableKeysstudent_terms = array();
$tdatastudent_terms[".Keys"] = $tableKeysstudent_terms;


$tdatastudent_terms[".hideMobileList"] = array();




//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","term_id");
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


	$tdatastudent_terms["term_id"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "term_id";
//	term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term";
	$fdata["GoodName"] = "term";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","term");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "term";

		$fdata["sourceSingle"] = "term";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatastudent_terms["term"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "term";
//	ay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ay";
	$fdata["GoodName"] = "ay";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","ay");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ay";

		$fdata["sourceSingle"] = "ay";

	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdatastudent_terms["ay"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "ay";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatastudent_terms["status"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "status";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","created_at");
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


	$tdatastudent_terms["created_at"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","updated_at");
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


	$tdatastudent_terms["updated_at"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "updated_at";
//	term_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "term_type";
	$fdata["GoodName"] = "term_type";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","term_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "term_type";

		$fdata["sourceSingle"] = "term_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_type";

	
	
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


	$tdatastudent_terms["term_type"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "term_type";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
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


	$tdatastudent_terms["start_date"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.student_terms";
	$fdata["Label"] = GetFieldLabel("public_student_terms","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
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


	$tdatastudent_terms["end_date"] = $fdata;
		$tdatastudent_terms[".searchableFields"][] = "end_date";


$tables_data["public.student_terms"]=&$tdatastudent_terms;
$field_labels["public_student_terms"] = &$fieldLabelsstudent_terms;
$fieldToolTips["public_student_terms"] = &$fieldToolTipsstudent_terms;
$placeHolders["public_student_terms"] = &$placeHoldersstudent_terms;
$page_titles["public_student_terms"] = &$pageTitlesstudent_terms;


changeTextControlsToDate( "public.student_terms" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.student_terms"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.student_terms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_student_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "term_id,  	term,  	ay,  	status,  	created_at,  	updated_at,  	term_type,  	start_date,  	end_date";
$proto0["m_strFrom"] = "FROM \"public\".student_terms";
$proto0["m_strWhere"] = "term_type='Semestral' and EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )";
$proto0["m_strOrderBy"] = "order by term_id desc";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "term_type='Semestral' and EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "term_type='Semestral' and EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "term_type='Semestral'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_type",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Semestral'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "EXISTS (      SELECT 1      FROM student_enlistments s      WHERE s.term_id = student_terms.term_id  )"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto10["m_sql"] = "term_id";
$proto10["m_srcTableName"] = "public.student_terms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "term",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto12["m_sql"] = "term";
$proto12["m_srcTableName"] = "public.student_terms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ay",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto14["m_sql"] = "ay";
$proto14["m_srcTableName"] = "public.student_terms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "public.student_terms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto18["m_sql"] = "created_at";
$proto18["m_srcTableName"] = "public.student_terms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "public.student_terms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "term_type",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto22["m_sql"] = "term_type";
$proto22["m_srcTableName"] = "public.student_terms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto24["m_sql"] = "start_date";
$proto24["m_srcTableName"] = "public.student_terms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto26["m_sql"] = "end_date";
$proto26["m_srcTableName"] = "public.student_terms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.student_terms";
$proto29["m_srcTableName"] = "public.student_terms";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "term_id";
$proto29["m_columns"][] = "term";
$proto29["m_columns"][] = "ay";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "term_type";
$proto29["m_columns"][] = "start_date";
$proto29["m_columns"][] = "end_date";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".student_terms";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.student_terms";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.student_terms",
	"m_srcTableName" => "public.student_terms"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="public.student_terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_terms = createSqlQuery_student_terms();


	
		;

									

$tdatastudent_terms[".sqlquery"] = $queryData_student_terms;



$tdatastudent_terms[".hasEvents"] = false;

?>