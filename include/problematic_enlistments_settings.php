<?php
$tdataproblematic_enlistments = array();
$tdataproblematic_enlistments[".searchableFields"] = array();
$tdataproblematic_enlistments[".ShortName"] = "problematic_enlistments";
$tdataproblematic_enlistments[".OwnerID"] = "";
$tdataproblematic_enlistments[".OriginalTable"] = "public.student_enlistments";


$tdataproblematic_enlistments[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproblematic_enlistments[".originalPagesByType"] = $tdataproblematic_enlistments[".pagesByType"];
$tdataproblematic_enlistments[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproblematic_enlistments[".originalPages"] = $tdataproblematic_enlistments[".pages"];
$tdataproblematic_enlistments[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproblematic_enlistments[".originalDefaultPages"] = $tdataproblematic_enlistments[".defaultPages"];

//	field labels
$fieldLabelsproblematic_enlistments = array();
$fieldToolTipsproblematic_enlistments = array();
$pageTitlesproblematic_enlistments = array();
$placeHoldersproblematic_enlistments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproblematic_enlistments["English"] = array();
	$fieldToolTipsproblematic_enlistments["English"] = array();
	$placeHoldersproblematic_enlistments["English"] = array();
	$pageTitlesproblematic_enlistments["English"] = array();
	$fieldLabelsproblematic_enlistments["English"]["term_id"] = "Term Id";
	$fieldToolTipsproblematic_enlistments["English"]["term_id"] = "";
	$placeHoldersproblematic_enlistments["English"]["term_id"] = "";
	$fieldLabelsproblematic_enlistments["English"]["id"] = "Id";
	$fieldToolTipsproblematic_enlistments["English"]["id"] = "";
	$placeHoldersproblematic_enlistments["English"]["id"] = "";
	$fieldLabelsproblematic_enlistments["English"]["last_name"] = "Last Name";
	$fieldToolTipsproblematic_enlistments["English"]["last_name"] = "";
	$placeHoldersproblematic_enlistments["English"]["last_name"] = "";
	$fieldLabelsproblematic_enlistments["English"]["first_name"] = "First Name";
	$fieldToolTipsproblematic_enlistments["English"]["first_name"] = "";
	$placeHoldersproblematic_enlistments["English"]["first_name"] = "";
	$fieldLabelsproblematic_enlistments["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsproblematic_enlistments["English"]["middle_name"] = "";
	$placeHoldersproblematic_enlistments["English"]["middle_name"] = "";
	$fieldLabelsproblematic_enlistments["English"]["academic_program_id"] = "Program";
	$fieldToolTipsproblematic_enlistments["English"]["academic_program_id"] = "";
	$placeHoldersproblematic_enlistments["English"]["academic_program_id"] = "";
	$fieldLabelsproblematic_enlistments["English"]["acad_group"] = "College";
	$fieldToolTipsproblematic_enlistments["English"]["acad_group"] = "";
	$placeHoldersproblematic_enlistments["English"]["acad_group"] = "";
	$fieldLabelsproblematic_enlistments["English"]["status"] = "Status";
	$fieldToolTipsproblematic_enlistments["English"]["status"] = "";
	$placeHoldersproblematic_enlistments["English"]["status"] = "";
	$fieldLabelsproblematic_enlistments["English"]["student_id"] = "Student Id";
	$fieldToolTipsproblematic_enlistments["English"]["student_id"] = "";
	$placeHoldersproblematic_enlistments["English"]["student_id"] = "";
	$fieldLabelsproblematic_enlistments["English"]["created_at"] = "Created At";
	$fieldToolTipsproblematic_enlistments["English"]["created_at"] = "";
	$placeHoldersproblematic_enlistments["English"]["created_at"] = "";
	$fieldLabelsproblematic_enlistments["English"]["updated_at"] = "Updated At";
	$fieldToolTipsproblematic_enlistments["English"]["updated_at"] = "";
	$placeHoldersproblematic_enlistments["English"]["updated_at"] = "";
	$fieldLabelsproblematic_enlistments["English"]["remarks"] = "Remarks";
	$fieldToolTipsproblematic_enlistments["English"]["remarks"] = "";
	$placeHoldersproblematic_enlistments["English"]["remarks"] = "";
	$fieldLabelsproblematic_enlistments["English"]["student_program_record_id"] = "Student Program Record Id";
	$fieldToolTipsproblematic_enlistments["English"]["student_program_record_id"] = "";
	$placeHoldersproblematic_enlistments["English"]["student_program_record_id"] = "";
	if (count($fieldToolTipsproblematic_enlistments["English"]))
		$tdataproblematic_enlistments[".isUseToolTips"] = true;
}


	$tdataproblematic_enlistments[".NCSearch"] = true;



$tdataproblematic_enlistments[".shortTableName"] = "problematic_enlistments";
$tdataproblematic_enlistments[".nSecOptions"] = 0;

$tdataproblematic_enlistments[".mainTableOwnerID"] = "";
$tdataproblematic_enlistments[".entityType"] = 1;
$tdataproblematic_enlistments[".connId"] = "financialslatestDbatlocalhost";


$tdataproblematic_enlistments[".strOriginalTableName"] = "public.student_enlistments";

	



$tdataproblematic_enlistments[".showAddInPopup"] = false;

$tdataproblematic_enlistments[".showEditInPopup"] = false;

$tdataproblematic_enlistments[".showViewInPopup"] = false;

$tdataproblematic_enlistments[".listAjax"] = false;
//	temporary
//$tdataproblematic_enlistments[".listAjax"] = false;

	$tdataproblematic_enlistments[".audit"] = false;

	$tdataproblematic_enlistments[".locking"] = false;


$pages = $tdataproblematic_enlistments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproblematic_enlistments[".edit"] = true;
	$tdataproblematic_enlistments[".afterEditAction"] = 1;
	$tdataproblematic_enlistments[".closePopupAfterEdit"] = 1;
	$tdataproblematic_enlistments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproblematic_enlistments[".add"] = true;
$tdataproblematic_enlistments[".afterAddAction"] = 1;
$tdataproblematic_enlistments[".closePopupAfterAdd"] = 1;
$tdataproblematic_enlistments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproblematic_enlistments[".list"] = true;
}



$tdataproblematic_enlistments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproblematic_enlistments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproblematic_enlistments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproblematic_enlistments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproblematic_enlistments[".printFriendly"] = true;
}



$tdataproblematic_enlistments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproblematic_enlistments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproblematic_enlistments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproblematic_enlistments[".isUseAjaxSuggest"] = true;





$tdataproblematic_enlistments[".ajaxCodeSnippetAdded"] = false;

$tdataproblematic_enlistments[".buttonsAdded"] = false;

$tdataproblematic_enlistments[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproblematic_enlistments[".isUseTimeForSearch"] = false;


$tdataproblematic_enlistments[".badgeColor"] = "8FBC8B";


$tdataproblematic_enlistments[".allSearchFields"] = array();
$tdataproblematic_enlistments[".filterFields"] = array();
$tdataproblematic_enlistments[".requiredSearchFields"] = array();

$tdataproblematic_enlistments[".googleLikeFields"] = array();
$tdataproblematic_enlistments[".googleLikeFields"][] = "id";
$tdataproblematic_enlistments[".googleLikeFields"][] = "last_name";
$tdataproblematic_enlistments[".googleLikeFields"][] = "first_name";
$tdataproblematic_enlistments[".googleLikeFields"][] = "middle_name";
$tdataproblematic_enlistments[".googleLikeFields"][] = "academic_program_id";
$tdataproblematic_enlistments[".googleLikeFields"][] = "acad_group";
$tdataproblematic_enlistments[".googleLikeFields"][] = "term_id";
$tdataproblematic_enlistments[".googleLikeFields"][] = "status";
$tdataproblematic_enlistments[".googleLikeFields"][] = "student_id";
$tdataproblematic_enlistments[".googleLikeFields"][] = "created_at";
$tdataproblematic_enlistments[".googleLikeFields"][] = "updated_at";
$tdataproblematic_enlistments[".googleLikeFields"][] = "remarks";
$tdataproblematic_enlistments[".googleLikeFields"][] = "student_program_record_id";



$tdataproblematic_enlistments[".tableType"] = "list";

$tdataproblematic_enlistments[".printerPageOrientation"] = 0;
$tdataproblematic_enlistments[".nPrinterPageScale"] = 100;

$tdataproblematic_enlistments[".nPrinterSplitRecords"] = 40;

$tdataproblematic_enlistments[".geocodingEnabled"] = false;







$tdataproblematic_enlistments[".noRecordsFirstPage"] = true;



$tdataproblematic_enlistments[".pageSize"] = 20;

$tdataproblematic_enlistments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproblematic_enlistments[".strOrderBy"] = $tstrOrderBy;

$tdataproblematic_enlistments[".orderindexes"] = array();


$tdataproblematic_enlistments[".sqlHead"] = "SELECT student_enlistments.id,  	users.last_name,  	users.first_name,  	users.middle_name,  	student_program_history_view.academic_program_id,  	student_program_history_view.acad_group,  	student_enlistments.term_id,    student_enlistments.status,  	student_enlistments.student_id,  	student_enlistments.created_at,  	student_enlistments.updated_at,  	student_enlistments.remarks,    student_program_history_view.student_program_record_id";
$tdataproblematic_enlistments[".sqlFrom"] = "FROM \"public\".student_enlistments  join student_program_history_view on student_program_history_view.campus_id=student_enlistments.student_id and student_enlistments.term_id >= student_program_history_view.term_admitted and student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)  join students on students.campus_id = student_program_history_view.campus_id  join users on users.id = students.user_id";
$tdataproblematic_enlistments[".sqlWhereExpr"] = "student_enlistments.status!='Officially Enrolled'  AND EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )";
$tdataproblematic_enlistments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproblematic_enlistments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproblematic_enlistments[".arrGroupsPerPage"] = $arrGPP;

$tdataproblematic_enlistments[".highlightSearchResults"] = true;

$tableKeysproblematic_enlistments = array();
$tdataproblematic_enlistments[".Keys"] = $tableKeysproblematic_enlistments;


$tdataproblematic_enlistments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","id");
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


	$tdataproblematic_enlistments["id"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "id";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.last_name";

	
	
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


	$tdataproblematic_enlistments["last_name"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "last_name";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.first_name";

	
	
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


	$tdataproblematic_enlistments["first_name"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "first_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","middle_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "middle_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.middle_name";

	
	
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


	$tdataproblematic_enlistments["middle_name"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "middle_name";
//	academic_program_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "academic_program_id";
	$fdata["GoodName"] = "academic_program_id";
	$fdata["ownerTable"] = "public.student_program_history_view";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","academic_program_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "academic_program_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_program_history_view.academic_program_id";

	
	
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


	$tdataproblematic_enlistments["academic_program_id"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "academic_program_id";
//	acad_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "acad_group";
	$fdata["GoodName"] = "acad_group";
	$fdata["ownerTable"] = "public.student_program_history_view";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","acad_group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "acad_group";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_program_history_view.acad_group";

	
	
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


	$tdataproblematic_enlistments["acad_group"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "acad_group";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

		$fdata["sourceSingle"] = "term_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.term_id";

	
	
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


	$tdataproblematic_enlistments["term_id"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "term_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.status";

	
	
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


	$tdataproblematic_enlistments["status"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "status";
//	student_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "student_id";
	$fdata["GoodName"] = "student_id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","student_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "student_id";

		$fdata["sourceSingle"] = "student_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.student_id";

	
	
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


	$tdataproblematic_enlistments["student_id"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "student_id";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.created_at";

	
	
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


	$tdataproblematic_enlistments["created_at"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.updated_at";

	
	
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


	$tdataproblematic_enlistments["updated_at"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "updated_at";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "remarks";

		$fdata["sourceSingle"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_enlistments.remarks";

	
	
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


	$tdataproblematic_enlistments["remarks"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "remarks";
//	student_program_record_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "student_program_record_id";
	$fdata["GoodName"] = "student_program_record_id";
	$fdata["ownerTable"] = "public.student_program_history_view";
	$fdata["Label"] = GetFieldLabel("problematic_enlistments","student_program_record_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "student_program_record_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_program_history_view.student_program_record_id";

	
	
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


	$tdataproblematic_enlistments["student_program_record_id"] = $fdata;
		$tdataproblematic_enlistments[".searchableFields"][] = "student_program_record_id";


$tables_data["problematic_enlistments"]=&$tdataproblematic_enlistments;
$field_labels["problematic_enlistments"] = &$fieldLabelsproblematic_enlistments;
$fieldToolTips["problematic_enlistments"] = &$fieldToolTipsproblematic_enlistments;
$placeHolders["problematic_enlistments"] = &$placeHoldersproblematic_enlistments;
$page_titles["problematic_enlistments"] = &$pageTitlesproblematic_enlistments;


changeTextControlsToDate( "problematic_enlistments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["problematic_enlistments"] = array();
//	enlisted_courses
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="enlisted_courses";
		$detailsParam["dOriginalTable"] = "public.student_enlistments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "enlisted_courses";
	$detailsParam["dCaptionTable"] = GetTableCaption("enlisted_courses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["problematic_enlistments"][$dIndex] = $detailsParam;

	
		$detailsTablesData["problematic_enlistments"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["problematic_enlistments"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["problematic_enlistments"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["problematic_enlistments"][$dIndex]["detailKeys"][]="student_enlistment_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["problematic_enlistments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_problematic_enlistments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_enlistments.id,  	users.last_name,  	users.first_name,  	users.middle_name,  	student_program_history_view.academic_program_id,  	student_program_history_view.acad_group,  	student_enlistments.term_id,    student_enlistments.status,  	student_enlistments.student_id,  	student_enlistments.created_at,  	student_enlistments.updated_at,  	student_enlistments.remarks,    student_program_history_view.student_program_record_id";
$proto0["m_strFrom"] = "FROM \"public\".student_enlistments  join student_program_history_view on student_program_history_view.campus_id=student_enlistments.student_id and student_enlistments.term_id >= student_program_history_view.term_admitted and student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)  join students on students.campus_id = student_program_history_view.campus_id  join users on users.id = students.user_id";
$proto0["m_strWhere"] = "student_enlistments.status!='Officially Enrolled'  AND EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "student_enlistments.status!='Officially Enrolled'  AND EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_enlistments.status!='Officially Enrolled'  AND EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "student_enlistments.status!='Officially Enrolled'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "!='Officially Enrolled'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "EXISTS (      SELECT 1      FROM student_enlist_classes sec      WHERE sec.student_enlistment_id = student_enlistments.id        AND sec.status IN ('Finalized', 'Enlisted')  )"
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
	"m_strName" => "id",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto10["m_sql"] = "student_enlistments.id";
$proto10["m_srcTableName"] = "problematic_enlistments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.users",
	"m_srcTableName" => "problematic_enlistments"
));

$proto12["m_sql"] = "users.last_name";
$proto12["m_srcTableName"] = "problematic_enlistments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.users",
	"m_srcTableName" => "problematic_enlistments"
));

$proto14["m_sql"] = "users.first_name";
$proto14["m_srcTableName"] = "problematic_enlistments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "public.users",
	"m_srcTableName" => "problematic_enlistments"
));

$proto16["m_sql"] = "users.middle_name";
$proto16["m_srcTableName"] = "problematic_enlistments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "academic_program_id",
	"m_strTable" => "public.student_program_history_view",
	"m_srcTableName" => "problematic_enlistments"
));

$proto18["m_sql"] = "student_program_history_view.academic_program_id";
$proto18["m_srcTableName"] = "problematic_enlistments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "acad_group",
	"m_strTable" => "public.student_program_history_view",
	"m_srcTableName" => "problematic_enlistments"
));

$proto20["m_sql"] = "student_program_history_view.acad_group";
$proto20["m_srcTableName"] = "problematic_enlistments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto22["m_sql"] = "student_enlistments.term_id";
$proto22["m_srcTableName"] = "problematic_enlistments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto24["m_sql"] = "student_enlistments.status";
$proto24["m_srcTableName"] = "problematic_enlistments";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "student_id",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto26["m_sql"] = "student_enlistments.student_id";
$proto26["m_srcTableName"] = "problematic_enlistments";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto28["m_sql"] = "student_enlistments.created_at";
$proto28["m_srcTableName"] = "problematic_enlistments";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto30["m_sql"] = "student_enlistments.updated_at";
$proto30["m_srcTableName"] = "problematic_enlistments";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto32["m_sql"] = "student_enlistments.remarks";
$proto32["m_srcTableName"] = "problematic_enlistments";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "student_program_record_id",
	"m_strTable" => "public.student_program_history_view",
	"m_srcTableName" => "problematic_enlistments"
));

$proto34["m_sql"] = "student_program_history_view.student_program_record_id";
$proto34["m_srcTableName"] = "problematic_enlistments";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "public.student_enlistments";
$proto37["m_srcTableName"] = "problematic_enlistments";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "term_id";
$proto37["m_columns"][] = "student_id";
$proto37["m_columns"][] = "status";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "remarks";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "\"public\".student_enlistments";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "problematic_enlistments";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
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
$proto41["m_strName"] = "public.student_program_history_view";
$proto41["m_srcTableName"] = "problematic_enlistments";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "student_program_record_id";
$proto41["m_columns"][] = "campus_id";
$proto41["m_columns"][] = "academic_program_id";
$proto41["m_columns"][] = "acad_group";
$proto41["m_columns"][] = "curriculum_id";
$proto41["m_columns"][] = "status";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_at";
$proto41["m_columns"][] = "acad_org";
$proto41["m_columns"][] = "term_admitted";
$proto41["m_columns"][] = "first_registration";
$proto41["m_columns"][] = "classification";
$proto41["m_columns"][] = "term_end";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "join student_program_history_view on student_program_history_view.campus_id=student_enlistments.student_id and student_enlistments.term_id >= student_program_history_view.term_admitted and student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "problematic_enlistments";
$proto42=array();
$proto42["m_sql"] = "student_program_history_view.campus_id=student_enlistments.student_id and student_enlistments.term_id >= student_program_history_view.term_admitted and student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)";
$proto42["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_program_history_view.campus_id=student_enlistments.student_id and student_enlistments.term_id >= student_program_history_view.term_admitted and student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
						$proto44=array();
$proto44["m_sql"] = "student_program_history_view.campus_id=student_enlistments.student_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "public.student_program_history_view",
	"m_srcTableName" => "problematic_enlistments"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "=student_enlistments.student_id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto42["m_contained"][]=$obj;
						$proto46=array();
$proto46["m_sql"] = "student_enlistments.term_id >= student_program_history_view.term_admitted";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = ">= student_program_history_view.term_admitted";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

			$proto42["m_contained"][]=$obj;
						$proto48=array();
$proto48["m_sql"] = "student_enlistments.term_id < coalesce(student_program_history_view.term_end,9990)";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "public.student_enlistments",
	"m_srcTableName" => "problematic_enlistments"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "< coalesce(student_program_history_view.term_end,9990)";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto42["m_contained"][]=$obj;
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "public.students";
$proto51["m_srcTableName"] = "problematic_enlistments";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "user_id";
$proto51["m_columns"][] = "sais_id";
$proto51["m_columns"][] = "campus_id";
$proto51["m_columns"][] = "created_at";
$proto51["m_columns"][] = "updated_at";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "join students on students.campus_id = student_program_history_view.campus_id";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "problematic_enlistments";
$proto52=array();
$proto52["m_sql"] = "students.campus_id = student_program_history_view.campus_id";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "public.students",
	"m_srcTableName" => "problematic_enlistments"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= student_program_history_view.campus_id";
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
$proto55["m_strName"] = "public.users";
$proto55["m_srcTableName"] = "problematic_enlistments";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "sais_id";
$proto55["m_columns"][] = "last_name";
$proto55["m_columns"][] = "first_name";
$proto55["m_columns"][] = "middle_name";
$proto55["m_columns"][] = "email";
$proto55["m_columns"][] = "user_roles";
$proto55["m_columns"][] = "tester";
$proto55["m_columns"][] = "created_at";
$proto55["m_columns"][] = "updated_at";
$proto55["m_columns"][] = "google_id";
$proto55["m_columns"][] = "country_of_citizenship";
$proto55["m_columns"][] = "type_of_residency";
$proto55["m_columns"][] = "sex";
$proto55["m_columns"][] = "birthdate";
$proto55["m_columns"][] = "suffix";
$proto55["m_columns"][] = "legal_name";
$proto55["m_columns"][] = "civil_status";
$proto55["m_columns"][] = "preferred_name";
$proto55["m_columns"][] = "indigenous_group";
$proto55["m_columns"][] = "religion";
$proto55["m_columns"][] = "gender_identity";
$proto55["m_columns"][] = "is_ncip_registered";
$proto55["m_columns"][] = "emergency_name";
$proto55["m_columns"][] = "emergency_number";
$proto55["m_columns"][] = "emergency_relationship";
$proto55["m_columns"][] = "signature_path";
$proto55["m_columns"][] = "emergency_country_code";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "join users on users.id = students.user_id";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "problematic_enlistments";
$proto56=array();
$proto56["m_sql"] = "users.id = students.user_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.users",
	"m_srcTableName" => "problematic_enlistments"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= students.user_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="problematic_enlistments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_problematic_enlistments = createSqlQuery_problematic_enlistments();


	
		;

													

$tdataproblematic_enlistments[".sqlquery"] = $queryData_problematic_enlistments;



$tdataproblematic_enlistments[".hasEvents"] = false;

?>