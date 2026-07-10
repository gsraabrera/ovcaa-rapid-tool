<?php
$tdataovcaa_rapid_users = array();
$tdataovcaa_rapid_users[".searchableFields"] = array();
$tdataovcaa_rapid_users[".ShortName"] = "ovcaa_rapid_users";
$tdataovcaa_rapid_users[".OwnerID"] = "";
$tdataovcaa_rapid_users[".OriginalTable"] = "public.ovcaa_rapid_users";


$tdataovcaa_rapid_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataovcaa_rapid_users[".originalPagesByType"] = $tdataovcaa_rapid_users[".pagesByType"];
$tdataovcaa_rapid_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataovcaa_rapid_users[".originalPages"] = $tdataovcaa_rapid_users[".pages"];
$tdataovcaa_rapid_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataovcaa_rapid_users[".originalDefaultPages"] = $tdataovcaa_rapid_users[".defaultPages"];

//	field labels
$fieldLabelsovcaa_rapid_users = array();
$fieldToolTipsovcaa_rapid_users = array();
$pageTitlesovcaa_rapid_users = array();
$placeHoldersovcaa_rapid_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovcaa_rapid_users["English"] = array();
	$fieldToolTipsovcaa_rapid_users["English"] = array();
	$placeHoldersovcaa_rapid_users["English"] = array();
	$pageTitlesovcaa_rapid_users["English"] = array();
	$fieldLabelsovcaa_rapid_users["English"]["id"] = "ID";
	$fieldToolTipsovcaa_rapid_users["English"]["id"] = "";
	$placeHoldersovcaa_rapid_users["English"]["id"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["username"] = "Username";
	$fieldToolTipsovcaa_rapid_users["English"]["username"] = "";
	$placeHoldersovcaa_rapid_users["English"]["username"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["password"] = "Password";
	$fieldToolTipsovcaa_rapid_users["English"]["password"] = "";
	$placeHoldersovcaa_rapid_users["English"]["password"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["email"] = "Email";
	$fieldToolTipsovcaa_rapid_users["English"]["email"] = "";
	$placeHoldersovcaa_rapid_users["English"]["email"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["fullname"] = "Fullname";
	$fieldToolTipsovcaa_rapid_users["English"]["fullname"] = "";
	$placeHoldersovcaa_rapid_users["English"]["fullname"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["groupid"] = "Groupid";
	$fieldToolTipsovcaa_rapid_users["English"]["groupid"] = "";
	$placeHoldersovcaa_rapid_users["English"]["groupid"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["active"] = "Active";
	$fieldToolTipsovcaa_rapid_users["English"]["active"] = "";
	$placeHoldersovcaa_rapid_users["English"]["active"] = "";
	$fieldLabelsovcaa_rapid_users["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsovcaa_rapid_users["English"]["ext_security_id"] = "";
	$placeHoldersovcaa_rapid_users["English"]["ext_security_id"] = "";
	if (count($fieldToolTipsovcaa_rapid_users["English"]))
		$tdataovcaa_rapid_users[".isUseToolTips"] = true;
}


	$tdataovcaa_rapid_users[".NCSearch"] = true;



$tdataovcaa_rapid_users[".shortTableName"] = "ovcaa_rapid_users";
$tdataovcaa_rapid_users[".nSecOptions"] = 0;

$tdataovcaa_rapid_users[".mainTableOwnerID"] = "";
$tdataovcaa_rapid_users[".entityType"] = 0;
$tdataovcaa_rapid_users[".connId"] = "financialslatestDbatlocalhost";


$tdataovcaa_rapid_users[".strOriginalTableName"] = "public.ovcaa_rapid_users";

	



$tdataovcaa_rapid_users[".showAddInPopup"] = false;

$tdataovcaa_rapid_users[".showEditInPopup"] = false;

$tdataovcaa_rapid_users[".showViewInPopup"] = false;

$tdataovcaa_rapid_users[".listAjax"] = false;
//	temporary
//$tdataovcaa_rapid_users[".listAjax"] = false;

	$tdataovcaa_rapid_users[".audit"] = false;

	$tdataovcaa_rapid_users[".locking"] = false;


$pages = $tdataovcaa_rapid_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataovcaa_rapid_users[".edit"] = true;
	$tdataovcaa_rapid_users[".afterEditAction"] = 1;
	$tdataovcaa_rapid_users[".closePopupAfterEdit"] = 1;
	$tdataovcaa_rapid_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataovcaa_rapid_users[".add"] = true;
$tdataovcaa_rapid_users[".afterAddAction"] = 1;
$tdataovcaa_rapid_users[".closePopupAfterAdd"] = 1;
$tdataovcaa_rapid_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataovcaa_rapid_users[".list"] = true;
}



$tdataovcaa_rapid_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataovcaa_rapid_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataovcaa_rapid_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataovcaa_rapid_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataovcaa_rapid_users[".printFriendly"] = true;
}



$tdataovcaa_rapid_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataovcaa_rapid_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataovcaa_rapid_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataovcaa_rapid_users[".isUseAjaxSuggest"] = true;





$tdataovcaa_rapid_users[".ajaxCodeSnippetAdded"] = false;

$tdataovcaa_rapid_users[".buttonsAdded"] = false;

$tdataovcaa_rapid_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataovcaa_rapid_users[".isUseTimeForSearch"] = false;


$tdataovcaa_rapid_users[".badgeColor"] = "4682B4";


$tdataovcaa_rapid_users[".allSearchFields"] = array();
$tdataovcaa_rapid_users[".filterFields"] = array();
$tdataovcaa_rapid_users[".requiredSearchFields"] = array();

$tdataovcaa_rapid_users[".googleLikeFields"] = array();
$tdataovcaa_rapid_users[".googleLikeFields"][] = "id";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "username";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "password";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "email";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "fullname";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "groupid";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "active";
$tdataovcaa_rapid_users[".googleLikeFields"][] = "ext_security_id";



$tdataovcaa_rapid_users[".tableType"] = "list";

$tdataovcaa_rapid_users[".printerPageOrientation"] = 0;
$tdataovcaa_rapid_users[".nPrinterPageScale"] = 100;

$tdataovcaa_rapid_users[".nPrinterSplitRecords"] = 40;

$tdataovcaa_rapid_users[".geocodingEnabled"] = false;










$tdataovcaa_rapid_users[".pageSize"] = 20;

$tdataovcaa_rapid_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataovcaa_rapid_users[".strOrderBy"] = $tstrOrderBy;

$tdataovcaa_rapid_users[".orderindexes"] = array();


$tdataovcaa_rapid_users[".sqlHead"] = "SELECT id,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataovcaa_rapid_users[".sqlFrom"] = "FROM \"public\".ovcaa_rapid_users";
$tdataovcaa_rapid_users[".sqlWhereExpr"] = "";
$tdataovcaa_rapid_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovcaa_rapid_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovcaa_rapid_users[".arrGroupsPerPage"] = $arrGPP;

$tdataovcaa_rapid_users[".highlightSearchResults"] = true;

$tableKeysovcaa_rapid_users = array();
$tableKeysovcaa_rapid_users[] = "id";
$tdataovcaa_rapid_users[".Keys"] = $tableKeysovcaa_rapid_users;


$tdataovcaa_rapid_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "ID";

	
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


	$tdataovcaa_rapid_users["id"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdataovcaa_rapid_users["username"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdataovcaa_rapid_users["password"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
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


	$tdataovcaa_rapid_users["email"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdataovcaa_rapid_users["fullname"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdataovcaa_rapid_users["groupid"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataovcaa_rapid_users["active"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "public.ovcaa_rapid_users";
	$fdata["Label"] = GetFieldLabel("public_ovcaa_rapid_users","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataovcaa_rapid_users["ext_security_id"] = $fdata;
		$tdataovcaa_rapid_users[".searchableFields"][] = "ext_security_id";


$tables_data["public.ovcaa_rapid_users"]=&$tdataovcaa_rapid_users;
$field_labels["public_ovcaa_rapid_users"] = &$fieldLabelsovcaa_rapid_users;
$fieldToolTips["public_ovcaa_rapid_users"] = &$fieldToolTipsovcaa_rapid_users;
$placeHolders["public_ovcaa_rapid_users"] = &$placeHoldersovcaa_rapid_users;
$page_titles["public_ovcaa_rapid_users"] = &$pageTitlesovcaa_rapid_users;


changeTextControlsToDate( "public.ovcaa_rapid_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ovcaa_rapid_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ovcaa_rapid_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ovcaa_rapid_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM \"public\".ovcaa_rapid_users";
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
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "public.ovcaa_rapid_users",
	"m_srcTableName" => "public.ovcaa_rapid_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.ovcaa_rapid_users";
$proto23["m_srcTableName"] = "public.ovcaa_rapid_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".ovcaa_rapid_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.ovcaa_rapid_users";
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

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ovcaa_rapid_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ovcaa_rapid_users = createSqlQuery_ovcaa_rapid_users();


	
		;

								

$tdataovcaa_rapid_users[".sqlquery"] = $queryData_ovcaa_rapid_users;



$tdataovcaa_rapid_users[".hasEvents"] = false;

?>