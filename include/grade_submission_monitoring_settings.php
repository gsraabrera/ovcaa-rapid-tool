<?php
$tdatagrade_submission_monitoring = array();
$tdatagrade_submission_monitoring[".searchableFields"] = array();
$tdatagrade_submission_monitoring[".ShortName"] = "grade_submission_monitoring";
$tdatagrade_submission_monitoring[".OwnerID"] = "";
$tdatagrade_submission_monitoring[".OriginalTable"] = "public.s_student_grades";


$tdatagrade_submission_monitoring[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagrade_submission_monitoring[".originalPagesByType"] = $tdatagrade_submission_monitoring[".pagesByType"];
$tdatagrade_submission_monitoring[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagrade_submission_monitoring[".originalPages"] = $tdatagrade_submission_monitoring[".pages"];
$tdatagrade_submission_monitoring[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagrade_submission_monitoring[".originalDefaultPages"] = $tdatagrade_submission_monitoring[".defaultPages"];

//	field labels
$fieldLabelsgrade_submission_monitoring = array();
$fieldToolTipsgrade_submission_monitoring = array();
$pageTitlesgrade_submission_monitoring = array();
$placeHoldersgrade_submission_monitoring = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgrade_submission_monitoring["English"] = array();
	$fieldToolTipsgrade_submission_monitoring["English"] = array();
	$placeHoldersgrade_submission_monitoring["English"] = array();
	$pageTitlesgrade_submission_monitoring["English"] = array();
	$fieldLabelsgrade_submission_monitoring["English"]["status"] = "Status";
	$fieldToolTipsgrade_submission_monitoring["English"]["status"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["status"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["faculty_id"] = "Faculty Id";
	$fieldToolTipsgrade_submission_monitoring["English"]["faculty_id"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["faculty_id"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["term_id"] = "Term Id";
	$fieldToolTipsgrade_submission_monitoring["English"]["term_id"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["term_id"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["email"] = "Email";
	$fieldToolTipsgrade_submission_monitoring["English"]["email"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["email"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["first_name"] = "First Name";
	$fieldToolTipsgrade_submission_monitoring["English"]["first_name"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["first_name"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsgrade_submission_monitoring["English"]["middle_name"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["middle_name"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["last_name"] = "Last Name";
	$fieldToolTipsgrade_submission_monitoring["English"]["last_name"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["last_name"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["completion_progress"] = "Completion Progress";
	$fieldToolTipsgrade_submission_monitoring["English"]["completion_progress"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["completion_progress"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["grade_posting_progress"] = "Grade Posting Progress";
	$fieldToolTipsgrade_submission_monitoring["English"]["grade_posting_progress"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["grade_posting_progress"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["home_unit"] = "Home Unit";
	$fieldToolTipsgrade_submission_monitoring["English"]["home_unit"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["home_unit"] = "";
	$fieldLabelsgrade_submission_monitoring["English"]["home_college"] = "Home College";
	$fieldToolTipsgrade_submission_monitoring["English"]["home_college"] = "";
	$placeHoldersgrade_submission_monitoring["English"]["home_college"] = "";
	if (count($fieldToolTipsgrade_submission_monitoring["English"]))
		$tdatagrade_submission_monitoring[".isUseToolTips"] = true;
}


	$tdatagrade_submission_monitoring[".NCSearch"] = true;



$tdatagrade_submission_monitoring[".shortTableName"] = "grade_submission_monitoring";
$tdatagrade_submission_monitoring[".nSecOptions"] = 0;

$tdatagrade_submission_monitoring[".mainTableOwnerID"] = "";
$tdatagrade_submission_monitoring[".entityType"] = 1;
$tdatagrade_submission_monitoring[".connId"] = "financialslatestDbatlocalhost";


$tdatagrade_submission_monitoring[".strOriginalTableName"] = "public.s_student_grades";

	



$tdatagrade_submission_monitoring[".showAddInPopup"] = false;

$tdatagrade_submission_monitoring[".showEditInPopup"] = false;

$tdatagrade_submission_monitoring[".showViewInPopup"] = false;

$tdatagrade_submission_monitoring[".listAjax"] = false;
//	temporary
//$tdatagrade_submission_monitoring[".listAjax"] = false;

	$tdatagrade_submission_monitoring[".audit"] = false;

	$tdatagrade_submission_monitoring[".locking"] = false;


$pages = $tdatagrade_submission_monitoring[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagrade_submission_monitoring[".edit"] = true;
	$tdatagrade_submission_monitoring[".afterEditAction"] = 1;
	$tdatagrade_submission_monitoring[".closePopupAfterEdit"] = 1;
	$tdatagrade_submission_monitoring[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagrade_submission_monitoring[".add"] = true;
$tdatagrade_submission_monitoring[".afterAddAction"] = 1;
$tdatagrade_submission_monitoring[".closePopupAfterAdd"] = 1;
$tdatagrade_submission_monitoring[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagrade_submission_monitoring[".list"] = true;
}



$tdatagrade_submission_monitoring[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagrade_submission_monitoring[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagrade_submission_monitoring[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagrade_submission_monitoring[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagrade_submission_monitoring[".printFriendly"] = true;
}



$tdatagrade_submission_monitoring[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagrade_submission_monitoring[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagrade_submission_monitoring[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagrade_submission_monitoring[".isUseAjaxSuggest"] = true;





$tdatagrade_submission_monitoring[".ajaxCodeSnippetAdded"] = false;

$tdatagrade_submission_monitoring[".buttonsAdded"] = false;

$tdatagrade_submission_monitoring[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagrade_submission_monitoring[".isUseTimeForSearch"] = false;


$tdatagrade_submission_monitoring[".badgeColor"] = "7B68EE";


$tdatagrade_submission_monitoring[".allSearchFields"] = array();
$tdatagrade_submission_monitoring[".filterFields"] = array();
$tdatagrade_submission_monitoring[".requiredSearchFields"] = array();

$tdatagrade_submission_monitoring[".googleLikeFields"] = array();
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "faculty_id";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "term_id";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "email";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "first_name";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "middle_name";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "last_name";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "completion_progress";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "status";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "grade_posting_progress";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "home_unit";
$tdatagrade_submission_monitoring[".googleLikeFields"][] = "home_college";



$tdatagrade_submission_monitoring[".tableType"] = "list";

$tdatagrade_submission_monitoring[".printerPageOrientation"] = 0;
$tdatagrade_submission_monitoring[".nPrinterPageScale"] = 100;

$tdatagrade_submission_monitoring[".nPrinterSplitRecords"] = 40;

$tdatagrade_submission_monitoring[".geocodingEnabled"] = false;







$tdatagrade_submission_monitoring[".noRecordsFirstPage"] = true;



$tdatagrade_submission_monitoring[".pageSize"] = 20;

$tdatagrade_submission_monitoring[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagrade_submission_monitoring[".strOrderBy"] = $tstrOrderBy;

$tdatagrade_submission_monitoring[".orderindexes"] = array();


$tdatagrade_submission_monitoring[".sqlHead"] = "SELECT *";
$tdatagrade_submission_monitoring[".sqlFrom"] = "FROM (  	      select fc.faculty_id,cl.term_id, email, first_name, middle_name, last_name,   	 COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id)) completion_progress,      CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END AS status,  	sum(posted_count) || '/' || sum(student_count) grade_posting_progress,  home_unit, home_college  from classes cl  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true  join faculties fc on fc.faculty_id = cfic.faculty_id  join users on users.id = fc.user_id  join courses cr on cr.course_id = cl.course_id  join (  select class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count  	from s_student_grades   	group by class_id  ) gr on gr.class_id = cl.id   where cl.active_class_size>0 and cr.grading!='NON'  group by email, first_name, middle_name, last_name, cl.term_id,home_unit, home_college,fc.faculty_id  ) t";
$tdatagrade_submission_monitoring[".sqlWhereExpr"] = "";
$tdatagrade_submission_monitoring[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagrade_submission_monitoring[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagrade_submission_monitoring[".arrGroupsPerPage"] = $arrGPP;

$tdatagrade_submission_monitoring[".highlightSearchResults"] = true;

$tableKeysgrade_submission_monitoring = array();
$tdatagrade_submission_monitoring[".Keys"] = $tableKeysgrade_submission_monitoring;


$tdatagrade_submission_monitoring[".hideMobileList"] = array();




//	faculty_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "faculty_id";
	$fdata["GoodName"] = "faculty_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","faculty_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "faculty_id";

	
	
		$fdata["FullName"] = "faculty_id";

	
	
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


	$tdatagrade_submission_monitoring["faculty_id"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "faculty_id";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

	
	
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


	$tdatagrade_submission_monitoring["term_id"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "term_id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
	
		$fdata["FullName"] = "email";

	
	
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


	$tdatagrade_submission_monitoring["email"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "email";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

	
	
		$fdata["FullName"] = "first_name";

	
	
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


	$tdatagrade_submission_monitoring["first_name"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "first_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","middle_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "middle_name";

	
	
		$fdata["FullName"] = "middle_name";

	
	
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


	$tdatagrade_submission_monitoring["middle_name"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "middle_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

	
	
		$fdata["FullName"] = "last_name";

	
	
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


	$tdatagrade_submission_monitoring["last_name"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "last_name";
//	completion_progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "completion_progress";
	$fdata["GoodName"] = "completion_progress";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","completion_progress");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "completion_progress";

	
	
		$fdata["FullName"] = "completion_progress";

	
	
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


	$tdatagrade_submission_monitoring["completion_progress"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "completion_progress";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatagrade_submission_monitoring["status"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "status";
//	grade_posting_progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "grade_posting_progress";
	$fdata["GoodName"] = "grade_posting_progress";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","grade_posting_progress");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "grade_posting_progress";

	
	
		$fdata["FullName"] = "grade_posting_progress";

	
	
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


	$tdatagrade_submission_monitoring["grade_posting_progress"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "grade_posting_progress";
//	home_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "home_unit";
	$fdata["GoodName"] = "home_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","home_unit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "home_unit";

	
	
		$fdata["FullName"] = "home_unit";

	
	
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


	$tdatagrade_submission_monitoring["home_unit"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "home_unit";
//	home_college
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "home_college";
	$fdata["GoodName"] = "home_college";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("grade_submission_monitoring","home_college");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "home_college";

	
	
		$fdata["FullName"] = "home_college";

	
	
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


	$tdatagrade_submission_monitoring["home_college"] = $fdata;
		$tdatagrade_submission_monitoring[".searchableFields"][] = "home_college";


$tables_data["grade_submission_monitoring"]=&$tdatagrade_submission_monitoring;
$field_labels["grade_submission_monitoring"] = &$fieldLabelsgrade_submission_monitoring;
$fieldToolTips["grade_submission_monitoring"] = &$fieldToolTipsgrade_submission_monitoring;
$placeHolders["grade_submission_monitoring"] = &$placeHoldersgrade_submission_monitoring;
$page_titles["grade_submission_monitoring"] = &$pageTitlesgrade_submission_monitoring;


changeTextControlsToDate( "grade_submission_monitoring" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["grade_submission_monitoring"] = array();
//	unposted_student_grades
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="unposted_student_grades";
		$detailsParam["dOriginalTable"] = "public.s_student_grades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "unposted_student_grades";
	$detailsParam["dCaptionTable"] = GetTableCaption("unposted_student_grades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["grade_submission_monitoring"][$dIndex] = $detailsParam;

	
		$detailsTablesData["grade_submission_monitoring"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["grade_submission_monitoring"][$dIndex]["masterKeys"][]="faculty_id";

	$detailsTablesData["grade_submission_monitoring"][$dIndex]["masterKeys"][]="term_id";

				$detailsTablesData["grade_submission_monitoring"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["grade_submission_monitoring"][$dIndex]["detailKeys"][]="faculty_id";

		
	$detailsTablesData["grade_submission_monitoring"][$dIndex]["detailKeys"][]="term";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["grade_submission_monitoring"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_grade_submission_monitoring()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM (  	      select fc.faculty_id,cl.term_id, email, first_name, middle_name, last_name,   	 COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id)) completion_progress,      CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END AS status,  	sum(posted_count) || '/' || sum(student_count) grade_posting_progress,  home_unit, home_college  from classes cl  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true  join faculties fc on fc.faculty_id = cfic.faculty_id  join users on users.id = fc.user_id  join courses cr on cr.course_id = cl.course_id  join (  select class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count  	from s_student_grades   	group by class_id  ) gr on gr.class_id = cl.id   where cl.active_class_size>0 and cr.grading!='NON'  group by email, first_name, middle_name, last_name, cl.term_id,home_unit, home_college,fc.faculty_id  ) t";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_sql"] = "*";
$proto6["m_srcTableName"] = "grade_submission_monitoring";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strHead"] = "  	      select";
$proto9["m_strFieldList"] = "fc.faculty_id,cl.term_id, email, first_name, middle_name, last_name,   	 COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id)) completion_progress,      CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END AS status,  	sum(posted_count) || '/' || sum(student_count) grade_posting_progress,  home_unit, home_college";
$proto9["m_strFrom"] = "from classes cl  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true  join faculties fc on fc.faculty_id = cfic.faculty_id  join users on users.id = fc.user_id  join courses cr on cr.course_id = cl.course_id  join (  select class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count  	from s_student_grades   	group by class_id  ) gr on gr.class_id = cl.id";
$proto9["m_strWhere"] = "cl.active_class_size>0 and cr.grading!='NON'";
$proto9["m_strOrderBy"] = "";
	
		;
			$proto9["cipherer"] = null;
$proto11=array();
$proto11["m_sql"] = "cl.active_class_size>0 and cr.grading!='NON'";
$proto11["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "cl.active_class_size>0 and cr.grading!='NON'"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
						$proto13=array();
$proto13["m_sql"] = "cl.active_class_size>0";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "active_class_size",
	"m_strTable" => "cl",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = ">0";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto11["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "cr.grading!='NON'";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "grading",
	"m_strTable" => "cr",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "!='NON'";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto11["m_contained"][]=$obj;
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_where"] = $obj;
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto9["m_having"] = $obj;
$proto9["m_fieldlist"] = array();
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "fc",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto19["m_sql"] = "fc.faculty_id";
$proto19["m_srcTableName"] = "grade_submission_monitoring";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto9["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "cl",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto21["m_sql"] = "cl.term_id";
$proto21["m_srcTableName"] = "grade_submission_monitoring";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto9["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "email"
));

$proto23["m_sql"] = "email";
$proto23["m_srcTableName"] = "grade_submission_monitoring";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto9["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto25["m_sql"] = "first_name";
$proto25["m_srcTableName"] = "grade_submission_monitoring";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto9["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "middle_name"
));

$proto27["m_sql"] = "middle_name";
$proto27["m_srcTableName"] = "grade_submission_monitoring";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto9["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto29["m_sql"] = "last_name";
$proto29["m_srcTableName"] = "grade_submission_monitoring";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto9["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id))"
));

$proto31["m_sql"] = "COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id))";
$proto31["m_srcTableName"] = "grade_submission_monitoring";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "completion_progress";
$obj = new SQLFieldListItem($proto31);

$proto9["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END"
));

$proto33["m_sql"] = "CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END";
$proto33["m_srcTableName"] = "grade_submission_monitoring";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "status";
$obj = new SQLFieldListItem($proto33);

$proto9["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sum(posted_count) || '/' || sum(student_count)"
));

$proto35["m_sql"] = "sum(posted_count) || '/' || sum(student_count)";
$proto35["m_srcTableName"] = "grade_submission_monitoring";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "grade_posting_progress";
$obj = new SQLFieldListItem($proto35);

$proto9["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "home_unit"
));

$proto37["m_sql"] = "home_unit";
$proto37["m_srcTableName"] = "grade_submission_monitoring";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto9["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "home_college"
));

$proto39["m_sql"] = "home_college";
$proto39["m_srcTableName"] = "grade_submission_monitoring";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto9["m_fieldlist"][]=$obj;
$proto9["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "public.classes";
$proto42["m_srcTableName"] = "grade_submission_monitoring";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id";
$proto42["m_columns"][] = "course_id";
$proto42["m_columns"][] = "term_id";
$proto42["m_columns"][] = "parent_class_id";
$proto42["m_columns"][] = "type";
$proto42["m_columns"][] = "section";
$proto42["m_columns"][] = "date";
$proto42["m_columns"][] = "mon";
$proto42["m_columns"][] = "tue";
$proto42["m_columns"][] = "wed";
$proto42["m_columns"][] = "thu";
$proto42["m_columns"][] = "fri";
$proto42["m_columns"][] = "sat";
$proto42["m_columns"][] = "start_time";
$proto42["m_columns"][] = "end_time";
$proto42["m_columns"][] = "credit";
$proto42["m_columns"][] = "hours";
$proto42["m_columns"][] = "tm_id";
$proto42["m_columns"][] = "facility_id";
$proto42["m_columns"][] = "max_class_size";
$proto42["m_columns"][] = "active_class_size";
$proto42["m_columns"][] = "activity";
$proto42["m_columns"][] = "class_nbr";
$proto42["m_columns"][] = "assoc";
$proto42["m_columns"][] = "acad_org";
$proto42["m_columns"][] = "acad_group";
$proto42["m_columns"][] = "created_at";
$proto42["m_columns"][] = "updated_at";
$proto42["m_columns"][] = "prerog_count";
$proto42["m_columns"][] = "reserved_count";
$proto42["m_columns"][] = "is_active";
$proto42["m_columns"][] = "hide_faculty";
$proto42["m_columns"][] = "consent";
$proto42["m_columns"][] = "is_prerog_open";
$proto42["m_columns"][] = "is_coi_open";
$proto42["m_columns"][] = "status";
$proto42["m_columns"][] = "is_grade_posted";
$proto42["m_columns"][] = "is_partial_posting";
$proto42["m_columns"][] = "deleted_at";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "classes cl";
$proto41["m_alias"] = "cl";
$proto41["m_srcTableName"] = "grade_submission_monitoring";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto9["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "public.class_faculty_in_charge";
$proto46["m_srcTableName"] = "grade_submission_monitoring";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id";
$proto46["m_columns"][] = "class_id";
$proto46["m_columns"][] = "faculty_id";
$proto46["m_columns"][] = "mode";
$proto46["m_columns"][] = "type";
$proto46["m_columns"][] = "status";
$proto46["m_columns"][] = "created_at";
$proto46["m_columns"][] = "updated_at";
$proto46["m_columns"][] = "is_encoder";
$proto46["m_columns"][] = "is_approver";
$proto46["m_columns"][] = "is_poster";
$proto46["m_columns"][] = "is_set";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true";
$proto45["m_alias"] = "cfic";
$proto45["m_srcTableName"] = "grade_submission_monitoring";
$proto47=array();
$proto47["m_sql"] = "cl.id = cfic.class_id and cfic.is_poster=true";
$proto47["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "cl.id = cfic.class_id and cfic.is_poster=true"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
						$proto49=array();
$proto49["m_sql"] = "cl.id = cfic.class_id";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cl",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= cfic.class_id";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto47["m_contained"][]=$obj;
						$proto51=array();
$proto51["m_sql"] = "cfic.is_poster=true";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_poster",
	"m_strTable" => "cfic",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "=true";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto47["m_contained"][]=$obj;
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto9["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_INNERJOIN";
			$proto54=array();
$proto54["m_strName"] = "public.faculties";
$proto54["m_srcTableName"] = "grade_submission_monitoring";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "faculty_id";
$proto54["m_columns"][] = "user_id";
$proto54["m_columns"][] = "sais_id";
$proto54["m_columns"][] = "created_at";
$proto54["m_columns"][] = "updated_at";
$proto54["m_columns"][] = "home_unit";
$proto54["m_columns"][] = "academic_program_id";
$proto54["m_columns"][] = "is_mas_available";
$proto54["m_columns"][] = "home_college";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "join faculties fc on fc.faculty_id = cfic.faculty_id";
$proto53["m_alias"] = "fc";
$proto53["m_srcTableName"] = "grade_submission_monitoring";
$proto55=array();
$proto55["m_sql"] = "fc.faculty_id = cfic.faculty_id";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "fc",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= cfic.faculty_id";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto9["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_INNERJOIN";
			$proto58=array();
$proto58["m_strName"] = "public.users";
$proto58["m_srcTableName"] = "grade_submission_monitoring";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "id";
$proto58["m_columns"][] = "sais_id";
$proto58["m_columns"][] = "last_name";
$proto58["m_columns"][] = "first_name";
$proto58["m_columns"][] = "middle_name";
$proto58["m_columns"][] = "email";
$proto58["m_columns"][] = "user_roles";
$proto58["m_columns"][] = "tester";
$proto58["m_columns"][] = "created_at";
$proto58["m_columns"][] = "updated_at";
$proto58["m_columns"][] = "google_id";
$proto58["m_columns"][] = "country_of_citizenship";
$proto58["m_columns"][] = "type_of_residency";
$proto58["m_columns"][] = "sex";
$proto58["m_columns"][] = "birthdate";
$proto58["m_columns"][] = "suffix";
$proto58["m_columns"][] = "legal_name";
$proto58["m_columns"][] = "civil_status";
$proto58["m_columns"][] = "preferred_name";
$proto58["m_columns"][] = "indigenous_group";
$proto58["m_columns"][] = "religion";
$proto58["m_columns"][] = "gender_identity";
$proto58["m_columns"][] = "is_ncip_registered";
$proto58["m_columns"][] = "emergency_name";
$proto58["m_columns"][] = "emergency_number";
$proto58["m_columns"][] = "emergency_relationship";
$proto58["m_columns"][] = "signature_path";
$proto58["m_columns"][] = "emergency_country_code";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "join users on users.id = fc.user_id";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "grade_submission_monitoring";
$proto59=array();
$proto59["m_sql"] = "users.id = fc.user_id";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.users",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= fc.user_id";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto9["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_INNERJOIN";
			$proto62=array();
$proto62["m_strName"] = "public.courses";
$proto62["m_srcTableName"] = "grade_submission_monitoring";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "course_id";
$proto62["m_columns"][] = "sais_course_id";
$proto62["m_columns"][] = "title";
$proto62["m_columns"][] = "type";
$proto62["m_columns"][] = "description";
$proto62["m_columns"][] = "course_code";
$proto62["m_columns"][] = "sem_offered";
$proto62["m_columns"][] = "career";
$proto62["m_columns"][] = "units";
$proto62["m_columns"][] = "is_repeatable";
$proto62["m_columns"][] = "is_active";
$proto62["m_columns"][] = "campus";
$proto62["m_columns"][] = "equivalent";
$proto62["m_columns"][] = "is_multiple_enrollment";
$proto62["m_columns"][] = "subject";
$proto62["m_columns"][] = "course_number";
$proto62["m_columns"][] = "contact_hours";
$proto62["m_columns"][] = "grading";
$proto62["m_columns"][] = "tm_id";
$proto62["m_columns"][] = "acad_org";
$proto62["m_columns"][] = "acad_group";
$proto62["m_columns"][] = "created_at";
$proto62["m_columns"][] = "updated_at";
$proto62["m_columns"][] = "status";
$proto62["m_columns"][] = "is_academic";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "join courses cr on cr.course_id = cl.course_id";
$proto61["m_alias"] = "cr";
$proto61["m_srcTableName"] = "grade_submission_monitoring";
$proto63=array();
$proto63["m_sql"] = "cr.course_id = cl.course_id";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "cr",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= cl.course_id";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto9["m_fromlist"][]=$obj;
												$proto65=array();
$proto65["m_link"] = "SQLL_INNERJOIN";
			$proto66=array();
$proto66["m_strHead"] = "  select";
$proto66["m_strFieldList"] = "class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count";
$proto66["m_strFrom"] = "from s_student_grades";
$proto66["m_strWhere"] = "";
$proto66["m_strOrderBy"] = "";
	
		;
			$proto66["cipherer"] = null;
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_where"] = $obj;
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto66["m_having"] = $obj;
$proto66["m_fieldlist"] = array();
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "class_id",
	"m_strTable" => "public.s_student_grades",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto72["m_sql"] = "class_id";
$proto72["m_srcTableName"] = "grade_submission_monitoring";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto66["m_fieldlist"][]=$obj;
						$proto74=array();
			$proto75=array();
$proto75["m_functiontype"] = "SQLF_COUNT";
$proto75["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	    WHEN status = 'Posted' THEN 1  		END"
));

$proto75["m_arguments"][]=$obj;
$proto75["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto75);

$proto74["m_sql"] = "COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END)";
$proto74["m_srcTableName"] = "grade_submission_monitoring";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "posted_count";
$obj = new SQLFieldListItem($proto74);

$proto66["m_fieldlist"][]=$obj;
						$proto77=array();
			$proto78=array();
$proto78["m_functiontype"] = "SQLF_COUNT";
$proto78["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto78["m_arguments"][]=$obj;
$proto78["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto78);

$proto77["m_sql"] = "count(*)";
$proto77["m_srcTableName"] = "grade_submission_monitoring";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "student_count";
$obj = new SQLFieldListItem($proto77);

$proto66["m_fieldlist"][]=$obj;
$proto66["m_fromlist"] = array();
												$proto80=array();
$proto80["m_link"] = "SQLL_MAIN";
			$proto81=array();
$proto81["m_strName"] = "public.s_student_grades";
$proto81["m_srcTableName"] = "grade_submission_monitoring";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id";
$proto81["m_columns"][] = "course_code";
$proto81["m_columns"][] = "section";
$proto81["m_columns"][] = "grade";
$proto81["m_columns"][] = "status";
$proto81["m_columns"][] = "remarks";
$proto81["m_columns"][] = "term";
$proto81["m_columns"][] = "created_at";
$proto81["m_columns"][] = "updated_at";
$proto81["m_columns"][] = "campus_id";
$proto81["m_columns"][] = "class_id";
$proto81["m_columns"][] = "posting_batch_number";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "s_student_grades";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "grade_submission_monitoring";
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto66["m_fromlist"][]=$obj;
$proto66["m_groupby"] = array();
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "class_id",
	"m_strTable" => "public.s_student_grades",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto66["m_groupby"][]=$obj;
$proto66["m_orderby"] = array();
$proto66["m_srcTableName"]="grade_submission_monitoring";		
$obj = new SQLQuery($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "join (  select class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count  	from s_student_grades   	group by class_id  ) gr on gr.class_id = cl.id";
$proto65["m_alias"] = "gr";
$proto65["m_srcTableName"] = "grade_submission_monitoring";
$proto86=array();
$proto86["m_sql"] = "gr.class_id = cl.id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "class_id",
	"m_strTable" => "gr",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= cl.id";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto9["m_fromlist"][]=$obj;
$proto9["m_groupby"] = array();
												$proto88=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "email"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto9["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "first_name"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto9["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "middle_name"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto9["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "last_name"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto9["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "cl",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto9["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "home_unit"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto9["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "home_college"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto9["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "faculty_id",
	"m_strTable" => "fc",
	"m_srcTableName" => "grade_submission_monitoring"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto9["m_groupby"][]=$obj;
$proto9["m_orderby"] = array();
$proto9["m_srcTableName"]="grade_submission_monitoring";		
$obj = new SQLQuery($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "(  	      select fc.faculty_id,cl.term_id, email, first_name, middle_name, last_name,   	 COUNT(DISTINCT CASE           WHEN is_grade_posted = true THEN cl.id      END) || '/' ||   count(distinct(cl.id)) completion_progress,      CASE          WHEN COUNT(DISTINCT cl.id) =               COUNT(DISTINCT CASE                   WHEN is_grade_posted = true THEN cl.id               END)          THEN 'Complete'          ELSE 'Incomplete'      END AS status,  	sum(posted_count) || '/' || sum(student_count) grade_posting_progress,  home_unit, home_college  from classes cl  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true  join faculties fc on fc.faculty_id = cfic.faculty_id  join users on users.id = fc.user_id  join courses cr on cr.course_id = cl.course_id  join (  select class_id,                	COUNT(  		 CASE  	    WHEN status = 'Posted' THEN 1  		END) posted_count,   	count(*) student_count  	from s_student_grades   	group by class_id  ) gr on gr.class_id = cl.id   where cl.active_class_size>0 and cr.grading!='NON'  group by email, first_name, middle_name, last_name, cl.term_id,home_unit, home_college,fc.faculty_id  ) t";
$proto8["m_alias"] = "t";
$proto8["m_srcTableName"] = "grade_submission_monitoring";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="grade_submission_monitoring";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_grade_submission_monitoring = createSqlQuery_grade_submission_monitoring();


	
		;

											

$tdatagrade_submission_monitoring[".sqlquery"] = $queryData_grade_submission_monitoring;



$tdatagrade_submission_monitoring[".hasEvents"] = false;

?>