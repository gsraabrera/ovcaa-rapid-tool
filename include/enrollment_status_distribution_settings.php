<?php
$tdataenrollment_status_distribution = array();
$tdataenrollment_status_distribution[".searchableFields"] = array();
$tdataenrollment_status_distribution[".ShortName"] = "enrollment_status_distribution";
$tdataenrollment_status_distribution[".OwnerID"] = "";
$tdataenrollment_status_distribution[".OriginalTable"] = "public.student_enlistments";


$tdataenrollment_status_distribution[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataenrollment_status_distribution[".originalPagesByType"] = $tdataenrollment_status_distribution[".pagesByType"];
$tdataenrollment_status_distribution[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataenrollment_status_distribution[".originalPages"] = $tdataenrollment_status_distribution[".pages"];
$tdataenrollment_status_distribution[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataenrollment_status_distribution[".originalDefaultPages"] = $tdataenrollment_status_distribution[".defaultPages"];

//	field labels
$fieldLabelsenrollment_status_distribution = array();
$fieldToolTipsenrollment_status_distribution = array();
$pageTitlesenrollment_status_distribution = array();
$placeHoldersenrollment_status_distribution = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenrollment_status_distribution["English"] = array();
	$fieldToolTipsenrollment_status_distribution["English"] = array();
	$placeHoldersenrollment_status_distribution["English"] = array();
	$pageTitlesenrollment_status_distribution["English"] = array();
	$fieldLabelsenrollment_status_distribution["English"]["term_id"] = "Term Id";
	$fieldToolTipsenrollment_status_distribution["English"]["term_id"] = "";
	$placeHoldersenrollment_status_distribution["English"]["term_id"] = "";
	$fieldLabelsenrollment_status_distribution["English"]["status"] = "Status";
	$fieldToolTipsenrollment_status_distribution["English"]["status"] = "";
	$placeHoldersenrollment_status_distribution["English"]["status"] = "";
	$fieldLabelsenrollment_status_distribution["English"]["count"] = "Count";
	$fieldToolTipsenrollment_status_distribution["English"]["count"] = "";
	$placeHoldersenrollment_status_distribution["English"]["count"] = "";
	if (count($fieldToolTipsenrollment_status_distribution["English"]))
		$tdataenrollment_status_distribution[".isUseToolTips"] = true;
}


	$tdataenrollment_status_distribution[".NCSearch"] = true;

	$tdataenrollment_status_distribution[".ChartRefreshTime"] = 0;


$tdataenrollment_status_distribution[".shortTableName"] = "enrollment_status_distribution";
$tdataenrollment_status_distribution[".nSecOptions"] = 0;

$tdataenrollment_status_distribution[".mainTableOwnerID"] = "";
$tdataenrollment_status_distribution[".entityType"] = 3;
$tdataenrollment_status_distribution[".connId"] = "financialslatestDbatlocalhost";


$tdataenrollment_status_distribution[".strOriginalTableName"] = "public.student_enlistments";

	



$tdataenrollment_status_distribution[".showAddInPopup"] = false;

$tdataenrollment_status_distribution[".showEditInPopup"] = false;

$tdataenrollment_status_distribution[".showViewInPopup"] = false;

$tdataenrollment_status_distribution[".listAjax"] = false;
//	temporary
//$tdataenrollment_status_distribution[".listAjax"] = false;

	$tdataenrollment_status_distribution[".audit"] = false;

	$tdataenrollment_status_distribution[".locking"] = false;


$pages = $tdataenrollment_status_distribution[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataenrollment_status_distribution[".edit"] = true;
	$tdataenrollment_status_distribution[".afterEditAction"] = 1;
	$tdataenrollment_status_distribution[".closePopupAfterEdit"] = 1;
	$tdataenrollment_status_distribution[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataenrollment_status_distribution[".add"] = true;
$tdataenrollment_status_distribution[".afterAddAction"] = 1;
$tdataenrollment_status_distribution[".closePopupAfterAdd"] = 1;
$tdataenrollment_status_distribution[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataenrollment_status_distribution[".list"] = true;
}



$tdataenrollment_status_distribution[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataenrollment_status_distribution[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataenrollment_status_distribution[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataenrollment_status_distribution[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataenrollment_status_distribution[".printFriendly"] = true;
}



$tdataenrollment_status_distribution[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataenrollment_status_distribution[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataenrollment_status_distribution[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataenrollment_status_distribution[".isUseAjaxSuggest"] = true;





$tdataenrollment_status_distribution[".ajaxCodeSnippetAdded"] = false;

$tdataenrollment_status_distribution[".buttonsAdded"] = false;

$tdataenrollment_status_distribution[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenrollment_status_distribution[".isUseTimeForSearch"] = false;


$tdataenrollment_status_distribution[".badgeColor"] = "D2AF80";


$tdataenrollment_status_distribution[".allSearchFields"] = array();
$tdataenrollment_status_distribution[".filterFields"] = array();
$tdataenrollment_status_distribution[".requiredSearchFields"] = array();

$tdataenrollment_status_distribution[".googleLikeFields"] = array();
$tdataenrollment_status_distribution[".googleLikeFields"][] = "status";
$tdataenrollment_status_distribution[".googleLikeFields"][] = "term_id";
$tdataenrollment_status_distribution[".googleLikeFields"][] = "count";



$tdataenrollment_status_distribution[".tableType"] = "chart";

$tdataenrollment_status_distribution[".printerPageOrientation"] = 0;
$tdataenrollment_status_distribution[".nPrinterPageScale"] = 100;

$tdataenrollment_status_distribution[".nPrinterSplitRecords"] = 40;

$tdataenrollment_status_distribution[".geocodingEnabled"] = false;



// chart settings
$tdataenrollment_status_distribution[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdataenrollment_status_distribution[".strOrderBy"] = $tstrOrderBy;

$tdataenrollment_status_distribution[".orderindexes"] = array();


$tdataenrollment_status_distribution[".sqlHead"] = "SELECT se.status, se.term_id, COUNT(*)";
$tdataenrollment_status_distribution[".sqlFrom"] = "FROM student_enlistments se  JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id  JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$tdataenrollment_status_distribution[".sqlWhereExpr"] = "se.term_id = :session.term_id";
$tdataenrollment_status_distribution[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenrollment_status_distribution[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenrollment_status_distribution[".arrGroupsPerPage"] = $arrGPP;

$tdataenrollment_status_distribution[".highlightSearchResults"] = true;

$tableKeysenrollment_status_distribution = array();
$tdataenrollment_status_distribution[".Keys"] = $tableKeysenrollment_status_distribution;


$tdataenrollment_status_distribution[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("Enrollment_Status_Distribution","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "se.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataenrollment_status_distribution["status"] = $fdata;
		$tdataenrollment_status_distribution[".searchableFields"][] = "status";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("Enrollment_Status_Distribution","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

		$fdata["sourceSingle"] = "term_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "se.term_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataenrollment_status_distribution["term_id"] = $fdata;
		$tdataenrollment_status_distribution[".searchableFields"][] = "term_id";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Enrollment_Status_Distribution","count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "count";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataenrollment_status_distribution["count"] = $fdata;
		$tdataenrollment_status_distribution[".searchableFields"][] = "count";

$tdataenrollment_status_distribution[".chartLabelField"] = "status";
$tdataenrollment_status_distribution[".chartSeries"] = array();
$tdataenrollment_status_distribution[".chartSeries"][] = array(
	"field" => "count",
	"total" => ""
);
	$tdataenrollment_status_distribution[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Enrollment Status Distribution</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="0">
			<attr value="name">count</attr>';
	$tdataenrollment_status_distribution[".chartXml"] .= '</attr>';
	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
	</attr>';
	$tdataenrollment_status_distribution[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="head">'.xmlencode("student_enlistments Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("term_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataenrollment_status_distribution[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="0">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Enrollment_Status_Distribution","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="1">
		<attr value="name">term_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Enrollment_Status_Distribution","term_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataenrollment_status_distribution[".chartXml"] .= '<attr value="2">
		<attr value="name">count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Enrollment_Status_Distribution","count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataenrollment_status_distribution[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Enrollment Status Distribution</attr>
<attr value="short_table_name">enrollment_status_distribution</attr>
</attr>

</chart>';

$tables_data["Enrollment Status Distribution"]=&$tdataenrollment_status_distribution;
$field_labels["Enrollment_Status_Distribution"] = &$fieldLabelsenrollment_status_distribution;
$fieldToolTips["Enrollment_Status_Distribution"] = &$fieldToolTipsenrollment_status_distribution;
$placeHolders["Enrollment_Status_Distribution"] = &$placeHoldersenrollment_status_distribution;
$page_titles["Enrollment_Status_Distribution"] = &$pageTitlesenrollment_status_distribution;


changeTextControlsToDate( "Enrollment Status Distribution" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Enrollment Status Distribution"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Enrollment Status Distribution"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_enrollment_status_distribution()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "se.status, se.term_id, COUNT(*)";
$proto0["m_strFrom"] = "FROM student_enlistments se  JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id  JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto0["m_strWhere"] = "se.term_id = :session.term_id";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "se.term_id = :session.term_id";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= :session.term_id";
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
	"m_strName" => "status",
	"m_strTable" => "se",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto6["m_sql"] = "se.status";
$proto6["m_srcTableName"] = "Enrollment Status Distribution";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto8["m_sql"] = "se.term_id";
$proto8["m_srcTableName"] = "Enrollment Status Distribution";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(*)";
$proto10["m_srcTableName"] = "Enrollment Status Distribution";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.student_enlistments";
$proto14["m_srcTableName"] = "Enrollment Status Distribution";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "term_id";
$proto14["m_columns"][] = "student_id";
$proto14["m_columns"][] = "status";
$proto14["m_columns"][] = "created_at";
$proto14["m_columns"][] = "updated_at";
$proto14["m_columns"][] = "remarks";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "student_enlistments se";
$proto13["m_alias"] = "se";
$proto13["m_srcTableName"] = "Enrollment Status Distribution";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strHead"] = "SELECT";
$proto18["m_strFieldList"] = "student_enlistment_id";
$proto18["m_strFrom"] = "FROM student_enlist_classes";
$proto18["m_strWhere"] = "status IN ('Finalized','Enlisted')";
$proto18["m_strOrderBy"] = "";
	
		;
			$proto18["cipherer"] = null;
$proto20=array();
$proto20["m_sql"] = "status IN ('Finalized','Enlisted')";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "IN ('Finalized','Enlisted')";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_where"] = $obj;
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto18["m_having"] = $obj;
$proto18["m_fieldlist"] = array();
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto24["m_sql"] = "student_enlistment_id";
$proto24["m_srcTableName"] = "Enrollment Status Distribution";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto18["m_fieldlist"][]=$obj;
$proto18["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.student_enlist_classes";
$proto27["m_srcTableName"] = "Enrollment Status Distribution";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "student_enlistment_id";
$proto27["m_columns"][] = "class_id";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "linked";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "remarks";
$proto27["m_columns"][] = "is_enlisted_during_change_mat";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "student_enlist_classes";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Enrollment Status Distribution";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto18["m_fromlist"][]=$obj;
$proto18["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto18["m_groupby"][]=$obj;
$proto18["m_orderby"] = array();
$proto18["m_srcTableName"]="Enrollment Status Distribution";		
$obj = new SQLQuery($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id";
$proto17["m_alias"] = "sec";
$proto17["m_srcTableName"] = "Enrollment Status Distribution";
$proto32=array();
$proto32["m_sql"] = "sec.student_enlistment_id = se.id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "sec",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= se.id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "public.student_program_records";
$proto35["m_srcTableName"] = "Enrollment Status Distribution";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "student_program_record_id";
$proto35["m_columns"][] = "campus_id";
$proto35["m_columns"][] = "academic_program_id";
$proto35["m_columns"][] = "acad_group";
$proto35["m_columns"][] = "curriculum_id";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "acad_org";
$proto35["m_columns"][] = "term_admitted";
$proto35["m_columns"][] = "first_registration";
$proto35["m_columns"][] = "classification";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto34["m_alias"] = "spr";
$proto34["m_srcTableName"] = "Enrollment Status Distribution";
$proto36=array();
$proto36["m_sql"] = "spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto36["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "spr.campus_id = se.student_id  AND spr.status='ACTIVE'"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
						$proto38=array();
$proto38["m_sql"] = "spr.campus_id = se.student_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "spr",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= se.student_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto36["m_contained"][]=$obj;
						$proto40=array();
$proto40["m_sql"] = "spr.status='ACTIVE'";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "spr",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "='ACTIVE'";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto36["m_contained"][]=$obj;
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "se",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "Enrollment Status Distribution"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Enrollment Status Distribution";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enrollment_status_distribution = createSqlQuery_enrollment_status_distribution();


	
		;

			

$tdataenrollment_status_distribution[".sqlquery"] = $queryData_enrollment_status_distribution;



$tdataenrollment_status_distribution[".hasEvents"] = false;

?>