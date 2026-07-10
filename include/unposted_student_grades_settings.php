<?php
$tdataunposted_student_grades = array();
$tdataunposted_student_grades[".searchableFields"] = array();
$tdataunposted_student_grades[".ShortName"] = "unposted_student_grades";
$tdataunposted_student_grades[".OwnerID"] = "";
$tdataunposted_student_grades[".OriginalTable"] = "public.s_student_grades";


$tdataunposted_student_grades[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataunposted_student_grades[".originalPagesByType"] = $tdataunposted_student_grades[".pagesByType"];
$tdataunposted_student_grades[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataunposted_student_grades[".originalPages"] = $tdataunposted_student_grades[".pages"];
$tdataunposted_student_grades[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataunposted_student_grades[".originalDefaultPages"] = $tdataunposted_student_grades[".defaultPages"];

//	field labels
$fieldLabelsunposted_student_grades = array();
$fieldToolTipsunposted_student_grades = array();
$pageTitlesunposted_student_grades = array();
$placeHoldersunposted_student_grades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsunposted_student_grades["English"] = array();
	$fieldToolTipsunposted_student_grades["English"] = array();
	$placeHoldersunposted_student_grades["English"] = array();
	$pageTitlesunposted_student_grades["English"] = array();
	$fieldLabelsunposted_student_grades["English"]["status"] = "Status";
	$fieldToolTipsunposted_student_grades["English"]["status"] = "";
	$placeHoldersunposted_student_grades["English"]["status"] = "";
	$fieldLabelsunposted_student_grades["English"]["faculty_id"] = "Faculty Id";
	$fieldToolTipsunposted_student_grades["English"]["faculty_id"] = "";
	$placeHoldersunposted_student_grades["English"]["faculty_id"] = "";
	$fieldLabelsunposted_student_grades["English"]["term"] = "Term";
	$fieldToolTipsunposted_student_grades["English"]["term"] = "";
	$placeHoldersunposted_student_grades["English"]["term"] = "";
	$fieldLabelsunposted_student_grades["English"]["course_code"] = "Course Code";
	$fieldToolTipsunposted_student_grades["English"]["course_code"] = "";
	$placeHoldersunposted_student_grades["English"]["course_code"] = "";
	$fieldLabelsunposted_student_grades["English"]["section"] = "Section";
	$fieldToolTipsunposted_student_grades["English"]["section"] = "";
	$placeHoldersunposted_student_grades["English"]["section"] = "";
	$fieldLabelsunposted_student_grades["English"]["campus_id"] = "Campus Id";
	$fieldToolTipsunposted_student_grades["English"]["campus_id"] = "";
	$placeHoldersunposted_student_grades["English"]["campus_id"] = "";
	$fieldLabelsunposted_student_grades["English"]["student_name"] = "Student Name";
	$fieldToolTipsunposted_student_grades["English"]["student_name"] = "";
	$placeHoldersunposted_student_grades["English"]["student_name"] = "";
	if (count($fieldToolTipsunposted_student_grades["English"]))
		$tdataunposted_student_grades[".isUseToolTips"] = true;
}


	$tdataunposted_student_grades[".NCSearch"] = true;



$tdataunposted_student_grades[".shortTableName"] = "unposted_student_grades";
$tdataunposted_student_grades[".nSecOptions"] = 0;

$tdataunposted_student_grades[".mainTableOwnerID"] = "";
$tdataunposted_student_grades[".entityType"] = 1;
$tdataunposted_student_grades[".connId"] = "financialslatestDbatlocalhost";


$tdataunposted_student_grades[".strOriginalTableName"] = "public.s_student_grades";

	



$tdataunposted_student_grades[".showAddInPopup"] = false;

$tdataunposted_student_grades[".showEditInPopup"] = false;

$tdataunposted_student_grades[".showViewInPopup"] = false;

$tdataunposted_student_grades[".listAjax"] = false;
//	temporary
//$tdataunposted_student_grades[".listAjax"] = false;

	$tdataunposted_student_grades[".audit"] = false;

	$tdataunposted_student_grades[".locking"] = false;


$pages = $tdataunposted_student_grades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataunposted_student_grades[".edit"] = true;
	$tdataunposted_student_grades[".afterEditAction"] = 1;
	$tdataunposted_student_grades[".closePopupAfterEdit"] = 1;
	$tdataunposted_student_grades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataunposted_student_grades[".add"] = true;
$tdataunposted_student_grades[".afterAddAction"] = 1;
$tdataunposted_student_grades[".closePopupAfterAdd"] = 1;
$tdataunposted_student_grades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataunposted_student_grades[".list"] = true;
}



$tdataunposted_student_grades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataunposted_student_grades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataunposted_student_grades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataunposted_student_grades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataunposted_student_grades[".printFriendly"] = true;
}



$tdataunposted_student_grades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataunposted_student_grades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataunposted_student_grades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataunposted_student_grades[".isUseAjaxSuggest"] = true;





$tdataunposted_student_grades[".ajaxCodeSnippetAdded"] = false;

$tdataunposted_student_grades[".buttonsAdded"] = false;

$tdataunposted_student_grades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunposted_student_grades[".isUseTimeForSearch"] = false;


$tdataunposted_student_grades[".badgeColor"] = "6da5c8";


$tdataunposted_student_grades[".allSearchFields"] = array();
$tdataunposted_student_grades[".filterFields"] = array();
$tdataunposted_student_grades[".requiredSearchFields"] = array();

$tdataunposted_student_grades[".googleLikeFields"] = array();
$tdataunposted_student_grades[".googleLikeFields"][] = "faculty_id";
$tdataunposted_student_grades[".googleLikeFields"][] = "term";
$tdataunposted_student_grades[".googleLikeFields"][] = "course_code";
$tdataunposted_student_grades[".googleLikeFields"][] = "section";
$tdataunposted_student_grades[".googleLikeFields"][] = "campus_id";
$tdataunposted_student_grades[".googleLikeFields"][] = "student_name";
$tdataunposted_student_grades[".googleLikeFields"][] = "status";



$tdataunposted_student_grades[".tableType"] = "list";

$tdataunposted_student_grades[".printerPageOrientation"] = 0;
$tdataunposted_student_grades[".nPrinterPageScale"] = 100;

$tdataunposted_student_grades[".nPrinterSplitRecords"] = 40;

$tdataunposted_student_grades[".geocodingEnabled"] = false;










$tdataunposted_student_grades[".pageSize"] = 20;

$tdataunposted_student_grades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataunposted_student_grades[".strOrderBy"] = $tstrOrderBy;

$tdataunposted_student_grades[".orderindexes"] = array();


$tdataunposted_student_grades[".sqlHead"] = "select faculty_id,term, ssg.course_code, ssg.section, ssg.campus_id, last_name || ', ' || first_name || ' ' || middle_name student_name, ssg.status";
$tdataunposted_student_grades[".sqlFrom"] = "from s_student_grades ssg  join students st on st.campus_id = ssg.campus_id   join users u on u.id = st.user_id  join classes cl on cl.id = ssg.class_id  join courses cr on cr.course_id = cl.course_id  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true";
$tdataunposted_student_grades[".sqlWhereExpr"] = "ssg.status != 'Posted' and cr.grading!='NON'";
$tdataunposted_student_grades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunposted_student_grades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunposted_student_grades[".arrGroupsPerPage"] = $arrGPP;

$tdataunposted_student_grades[".highlightSearchResults"] = true;

$tableKeysunposted_student_grades = array();
$tdataunposted_student_grades[".Keys"] = $tableKeysunposted_student_grades;


$tdataunposted_student_grades[".hideMobileList"] = array();




//	faculty_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "faculty_id";
	$fdata["GoodName"] = "faculty_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","faculty_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "faculty_id";

	
	
		$fdata["isSQLExpression"] = true;
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


	$tdataunposted_student_grades["faculty_id"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "faculty_id";
//	term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term";
	$fdata["GoodName"] = "term";
	$fdata["ownerTable"] = "public.s_student_grades";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","term");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataunposted_student_grades["term"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "term";
//	course_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "course_code";
	$fdata["GoodName"] = "course_code";
	$fdata["ownerTable"] = "public.s_student_grades";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","course_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "course_code";

		$fdata["sourceSingle"] = "course_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssg.course_code";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataunposted_student_grades["course_code"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "course_code";
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "public.s_student_grades";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","section");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "section";

		$fdata["sourceSingle"] = "section";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssg.section";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataunposted_student_grades["section"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "section";
//	campus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "campus_id";
	$fdata["GoodName"] = "campus_id";
	$fdata["ownerTable"] = "public.s_student_grades";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","campus_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "campus_id";

		$fdata["sourceSingle"] = "campus_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssg.campus_id";

	
	
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


	$tdataunposted_student_grades["campus_id"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "campus_id";
//	student_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "student_name";
	$fdata["GoodName"] = "student_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","student_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "student_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name || ', ' || first_name || ' ' || middle_name";

	
	
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


	$tdataunposted_student_grades["student_name"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "student_name";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.s_student_grades";
	$fdata["Label"] = GetFieldLabel("unposted_student_grades","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssg.status";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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


	$tdataunposted_student_grades["status"] = $fdata;
		$tdataunposted_student_grades[".searchableFields"][] = "status";


$tables_data["unposted_student_grades"]=&$tdataunposted_student_grades;
$field_labels["unposted_student_grades"] = &$fieldLabelsunposted_student_grades;
$fieldToolTips["unposted_student_grades"] = &$fieldToolTipsunposted_student_grades;
$placeHolders["unposted_student_grades"] = &$placeHoldersunposted_student_grades;
$page_titles["unposted_student_grades"] = &$pageTitlesunposted_student_grades;


changeTextControlsToDate( "unposted_student_grades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["unposted_student_grades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["unposted_student_grades"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.s_student_grades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="grade_submission_monitoring";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "grade_submission_monitoring";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["unposted_student_grades"][0] = $masterParams;
				$masterTablesData["unposted_student_grades"][0]["masterKeys"] = array();
	$masterTablesData["unposted_student_grades"][0]["masterKeys"][]="faculty_id";
				$masterTablesData["unposted_student_grades"][0]["masterKeys"][]="term_id";
				$masterTablesData["unposted_student_grades"][0]["detailKeys"] = array();
	$masterTablesData["unposted_student_grades"][0]["detailKeys"][]="faculty_id";
				$masterTablesData["unposted_student_grades"][0]["detailKeys"][]="term";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_unposted_student_grades()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "faculty_id,term, ssg.course_code, ssg.section, ssg.campus_id, last_name || ', ' || first_name || ' ' || middle_name student_name, ssg.status";
$proto0["m_strFrom"] = "from s_student_grades ssg  join students st on st.campus_id = ssg.campus_id   join users u on u.id = st.user_id  join classes cl on cl.id = ssg.class_id  join courses cr on cr.course_id = cl.course_id  join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true";
$proto0["m_strWhere"] = "ssg.status != 'Posted' and cr.grading!='NON'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ssg.status != 'Posted' and cr.grading!='NON'";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ssg.status != 'Posted' and cr.grading!='NON'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ssg.status != 'Posted'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "!= 'Posted'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "cr.grading!='NON'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "grading",
	"m_strTable" => "cr",
	"m_srcTableName" => "unposted_student_grades"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "!='NON'";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "faculty_id"
));

$proto10["m_sql"] = "faculty_id";
$proto10["m_srcTableName"] = "unposted_student_grades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "term",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto12["m_sql"] = "term";
$proto12["m_srcTableName"] = "unposted_student_grades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "course_code",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto14["m_sql"] = "ssg.course_code";
$proto14["m_srcTableName"] = "unposted_student_grades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto16["m_sql"] = "ssg.section";
$proto16["m_srcTableName"] = "unposted_student_grades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto18["m_sql"] = "ssg.campus_id";
$proto18["m_srcTableName"] = "unposted_student_grades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "last_name || ', ' || first_name || ' ' || middle_name"
));

$proto20["m_sql"] = "last_name || ', ' || first_name || ' ' || middle_name";
$proto20["m_srcTableName"] = "unposted_student_grades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "student_name";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "ssg",
	"m_srcTableName" => "unposted_student_grades"
));

$proto22["m_sql"] = "ssg.status";
$proto22["m_srcTableName"] = "unposted_student_grades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.s_student_grades";
$proto25["m_srcTableName"] = "unposted_student_grades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "course_code";
$proto25["m_columns"][] = "section";
$proto25["m_columns"][] = "grade";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "remarks";
$proto25["m_columns"][] = "term";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "campus_id";
$proto25["m_columns"][] = "class_id";
$proto25["m_columns"][] = "posting_batch_number";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "s_student_grades ssg";
$proto24["m_alias"] = "ssg";
$proto24["m_srcTableName"] = "unposted_student_grades";
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
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "public.students";
$proto29["m_srcTableName"] = "unposted_student_grades";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "user_id";
$proto29["m_columns"][] = "sais_id";
$proto29["m_columns"][] = "campus_id";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "join students st on st.campus_id = ssg.campus_id";
$proto28["m_alias"] = "st";
$proto28["m_srcTableName"] = "unposted_student_grades";
$proto30=array();
$proto30["m_sql"] = "st.campus_id = ssg.campus_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "st",
	"m_srcTableName" => "unposted_student_grades"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= ssg.campus_id";
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
$proto33["m_strName"] = "public.users";
$proto33["m_srcTableName"] = "unposted_student_grades";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "sais_id";
$proto33["m_columns"][] = "last_name";
$proto33["m_columns"][] = "first_name";
$proto33["m_columns"][] = "middle_name";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "user_roles";
$proto33["m_columns"][] = "tester";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "google_id";
$proto33["m_columns"][] = "country_of_citizenship";
$proto33["m_columns"][] = "type_of_residency";
$proto33["m_columns"][] = "sex";
$proto33["m_columns"][] = "birthdate";
$proto33["m_columns"][] = "suffix";
$proto33["m_columns"][] = "legal_name";
$proto33["m_columns"][] = "civil_status";
$proto33["m_columns"][] = "preferred_name";
$proto33["m_columns"][] = "indigenous_group";
$proto33["m_columns"][] = "religion";
$proto33["m_columns"][] = "gender_identity";
$proto33["m_columns"][] = "is_ncip_registered";
$proto33["m_columns"][] = "emergency_name";
$proto33["m_columns"][] = "emergency_number";
$proto33["m_columns"][] = "emergency_relationship";
$proto33["m_columns"][] = "signature_path";
$proto33["m_columns"][] = "emergency_country_code";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "join users u on u.id = st.user_id";
$proto32["m_alias"] = "u";
$proto32["m_srcTableName"] = "unposted_student_grades";
$proto34=array();
$proto34["m_sql"] = "u.id = st.user_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "u",
	"m_srcTableName" => "unposted_student_grades"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= st.user_id";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "public.classes";
$proto37["m_srcTableName"] = "unposted_student_grades";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "course_id";
$proto37["m_columns"][] = "term_id";
$proto37["m_columns"][] = "parent_class_id";
$proto37["m_columns"][] = "type";
$proto37["m_columns"][] = "section";
$proto37["m_columns"][] = "date";
$proto37["m_columns"][] = "mon";
$proto37["m_columns"][] = "tue";
$proto37["m_columns"][] = "wed";
$proto37["m_columns"][] = "thu";
$proto37["m_columns"][] = "fri";
$proto37["m_columns"][] = "sat";
$proto37["m_columns"][] = "start_time";
$proto37["m_columns"][] = "end_time";
$proto37["m_columns"][] = "credit";
$proto37["m_columns"][] = "hours";
$proto37["m_columns"][] = "tm_id";
$proto37["m_columns"][] = "facility_id";
$proto37["m_columns"][] = "max_class_size";
$proto37["m_columns"][] = "active_class_size";
$proto37["m_columns"][] = "activity";
$proto37["m_columns"][] = "class_nbr";
$proto37["m_columns"][] = "assoc";
$proto37["m_columns"][] = "acad_org";
$proto37["m_columns"][] = "acad_group";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "prerog_count";
$proto37["m_columns"][] = "reserved_count";
$proto37["m_columns"][] = "is_active";
$proto37["m_columns"][] = "hide_faculty";
$proto37["m_columns"][] = "consent";
$proto37["m_columns"][] = "is_prerog_open";
$proto37["m_columns"][] = "is_coi_open";
$proto37["m_columns"][] = "status";
$proto37["m_columns"][] = "is_grade_posted";
$proto37["m_columns"][] = "is_partial_posting";
$proto37["m_columns"][] = "deleted_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "join classes cl on cl.id = ssg.class_id";
$proto36["m_alias"] = "cl";
$proto36["m_srcTableName"] = "unposted_student_grades";
$proto38=array();
$proto38["m_sql"] = "cl.id = ssg.class_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cl",
	"m_srcTableName" => "unposted_student_grades"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= ssg.class_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "public.courses";
$proto41["m_srcTableName"] = "unposted_student_grades";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "course_id";
$proto41["m_columns"][] = "sais_course_id";
$proto41["m_columns"][] = "title";
$proto41["m_columns"][] = "type";
$proto41["m_columns"][] = "description";
$proto41["m_columns"][] = "course_code";
$proto41["m_columns"][] = "sem_offered";
$proto41["m_columns"][] = "career";
$proto41["m_columns"][] = "units";
$proto41["m_columns"][] = "is_repeatable";
$proto41["m_columns"][] = "is_active";
$proto41["m_columns"][] = "campus";
$proto41["m_columns"][] = "equivalent";
$proto41["m_columns"][] = "is_multiple_enrollment";
$proto41["m_columns"][] = "subject";
$proto41["m_columns"][] = "course_number";
$proto41["m_columns"][] = "contact_hours";
$proto41["m_columns"][] = "grading";
$proto41["m_columns"][] = "tm_id";
$proto41["m_columns"][] = "acad_org";
$proto41["m_columns"][] = "acad_group";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_at";
$proto41["m_columns"][] = "status";
$proto41["m_columns"][] = "is_academic";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "join courses cr on cr.course_id = cl.course_id";
$proto40["m_alias"] = "cr";
$proto40["m_srcTableName"] = "unposted_student_grades";
$proto42=array();
$proto42["m_sql"] = "cr.course_id = cl.course_id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "cr",
	"m_srcTableName" => "unposted_student_grades"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= cl.course_id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "public.class_faculty_in_charge";
$proto45["m_srcTableName"] = "unposted_student_grades";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "class_id";
$proto45["m_columns"][] = "faculty_id";
$proto45["m_columns"][] = "mode";
$proto45["m_columns"][] = "type";
$proto45["m_columns"][] = "status";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "is_encoder";
$proto45["m_columns"][] = "is_approver";
$proto45["m_columns"][] = "is_poster";
$proto45["m_columns"][] = "is_set";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "join class_faculty_in_charge cfic on cl.id = cfic.class_id and cfic.is_poster=true";
$proto44["m_alias"] = "cfic";
$proto44["m_srcTableName"] = "unposted_student_grades";
$proto46=array();
$proto46["m_sql"] = "cl.id = cfic.class_id and cfic.is_poster=true";
$proto46["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "cl.id = cfic.class_id and cfic.is_poster=true"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
						$proto48=array();
$proto48["m_sql"] = "cl.id = cfic.class_id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cl",
	"m_srcTableName" => "unposted_student_grades"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= cfic.class_id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto46["m_contained"][]=$obj;
						$proto50=array();
$proto50["m_sql"] = "cfic.is_poster=true";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_poster",
	"m_strTable" => "cfic",
	"m_srcTableName" => "unposted_student_grades"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "=true";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

			$proto46["m_contained"][]=$obj;
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="unposted_student_grades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_unposted_student_grades = createSqlQuery_unposted_student_grades();


	
		;

							

$tdataunposted_student_grades[".sqlquery"] = $queryData_unposted_student_grades;



$tdataunposted_student_grades[".hasEvents"] = false;

?>