<?php
$tdatastudent_enlistments_chart = array();
$tdatastudent_enlistments_chart[".searchableFields"] = array();
$tdatastudent_enlistments_chart[".ShortName"] = "student_enlistments_chart";
$tdatastudent_enlistments_chart[".OwnerID"] = "";
$tdatastudent_enlistments_chart[".OriginalTable"] = "public.student_enlistments";


$tdatastudent_enlistments_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatastudent_enlistments_chart[".originalPagesByType"] = $tdatastudent_enlistments_chart[".pagesByType"];
$tdatastudent_enlistments_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatastudent_enlistments_chart[".originalPages"] = $tdatastudent_enlistments_chart[".pages"];
$tdatastudent_enlistments_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatastudent_enlistments_chart[".originalDefaultPages"] = $tdatastudent_enlistments_chart[".defaultPages"];

//	field labels
$fieldLabelsstudent_enlistments_chart = array();
$fieldToolTipsstudent_enlistments_chart = array();
$pageTitlesstudent_enlistments_chart = array();
$placeHoldersstudent_enlistments_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_enlistments_chart["English"] = array();
	$fieldToolTipsstudent_enlistments_chart["English"] = array();
	$placeHoldersstudent_enlistments_chart["English"] = array();
	$pageTitlesstudent_enlistments_chart["English"] = array();
	$fieldLabelsstudent_enlistments_chart["English"]["term_id"] = "Term Id";
	$fieldToolTipsstudent_enlistments_chart["English"]["term_id"] = "";
	$placeHoldersstudent_enlistments_chart["English"]["term_id"] = "";
	$fieldLabelsstudent_enlistments_chart["English"]["status"] = "Status";
	$fieldToolTipsstudent_enlistments_chart["English"]["status"] = "";
	$placeHoldersstudent_enlistments_chart["English"]["status"] = "";
	$fieldLabelsstudent_enlistments_chart["English"]["count"] = "Count";
	$fieldToolTipsstudent_enlistments_chart["English"]["count"] = "";
	$placeHoldersstudent_enlistments_chart["English"]["count"] = "";
	if (count($fieldToolTipsstudent_enlistments_chart["English"]))
		$tdatastudent_enlistments_chart[".isUseToolTips"] = true;
}


	$tdatastudent_enlistments_chart[".NCSearch"] = true;

	$tdatastudent_enlistments_chart[".ChartRefreshTime"] = 0;


$tdatastudent_enlistments_chart[".shortTableName"] = "student_enlistments_chart";
$tdatastudent_enlistments_chart[".nSecOptions"] = 0;

$tdatastudent_enlistments_chart[".mainTableOwnerID"] = "";
$tdatastudent_enlistments_chart[".entityType"] = 3;
$tdatastudent_enlistments_chart[".connId"] = "financialslatestDbatlocalhost";


$tdatastudent_enlistments_chart[".strOriginalTableName"] = "public.student_enlistments";

	



$tdatastudent_enlistments_chart[".showAddInPopup"] = false;

$tdatastudent_enlistments_chart[".showEditInPopup"] = false;

$tdatastudent_enlistments_chart[".showViewInPopup"] = false;

$tdatastudent_enlistments_chart[".listAjax"] = false;
//	temporary
//$tdatastudent_enlistments_chart[".listAjax"] = false;

	$tdatastudent_enlistments_chart[".audit"] = false;

	$tdatastudent_enlistments_chart[".locking"] = false;


$pages = $tdatastudent_enlistments_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudent_enlistments_chart[".edit"] = true;
	$tdatastudent_enlistments_chart[".afterEditAction"] = 1;
	$tdatastudent_enlistments_chart[".closePopupAfterEdit"] = 1;
	$tdatastudent_enlistments_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudent_enlistments_chart[".add"] = true;
$tdatastudent_enlistments_chart[".afterAddAction"] = 1;
$tdatastudent_enlistments_chart[".closePopupAfterAdd"] = 1;
$tdatastudent_enlistments_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudent_enlistments_chart[".list"] = true;
}



$tdatastudent_enlistments_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudent_enlistments_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudent_enlistments_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudent_enlistments_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudent_enlistments_chart[".printFriendly"] = true;
}



$tdatastudent_enlistments_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudent_enlistments_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudent_enlistments_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudent_enlistments_chart[".isUseAjaxSuggest"] = true;





$tdatastudent_enlistments_chart[".ajaxCodeSnippetAdded"] = false;

$tdatastudent_enlistments_chart[".buttonsAdded"] = false;

$tdatastudent_enlistments_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_enlistments_chart[".isUseTimeForSearch"] = false;


$tdatastudent_enlistments_chart[".badgeColor"] = "D2AF80";


$tdatastudent_enlistments_chart[".allSearchFields"] = array();
$tdatastudent_enlistments_chart[".filterFields"] = array();
$tdatastudent_enlistments_chart[".requiredSearchFields"] = array();

$tdatastudent_enlistments_chart[".googleLikeFields"] = array();
$tdatastudent_enlistments_chart[".googleLikeFields"][] = "status";
$tdatastudent_enlistments_chart[".googleLikeFields"][] = "term_id";
$tdatastudent_enlistments_chart[".googleLikeFields"][] = "count";



$tdatastudent_enlistments_chart[".tableType"] = "chart";

$tdatastudent_enlistments_chart[".printerPageOrientation"] = 0;
$tdatastudent_enlistments_chart[".nPrinterPageScale"] = 100;

$tdatastudent_enlistments_chart[".nPrinterSplitRecords"] = 40;

$tdatastudent_enlistments_chart[".geocodingEnabled"] = false;



// chart settings
$tdatastudent_enlistments_chart[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatastudent_enlistments_chart[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_enlistments_chart[".orderindexes"] = array();


$tdatastudent_enlistments_chart[".sqlHead"] = "SELECT se.status, se.term_id, COUNT(*)";
$tdatastudent_enlistments_chart[".sqlFrom"] = "FROM student_enlistments se  JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id  JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$tdatastudent_enlistments_chart[".sqlWhereExpr"] = "se.term_id = :session.term_id";
$tdatastudent_enlistments_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_enlistments_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_enlistments_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent_enlistments_chart[".highlightSearchResults"] = true;

$tableKeysstudent_enlistments_chart = array();
$tdatastudent_enlistments_chart[".Keys"] = $tableKeysstudent_enlistments_chart;


$tdatastudent_enlistments_chart[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("public_student_enlistments_Chart","status");
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


	$tdatastudent_enlistments_chart["status"] = $fdata;
		$tdatastudent_enlistments_chart[".searchableFields"][] = "status";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("public_student_enlistments_Chart","term_id");
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


	$tdatastudent_enlistments_chart["term_id"] = $fdata;
		$tdatastudent_enlistments_chart[".searchableFields"][] = "term_id";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_student_enlistments_Chart","count");
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


	$tdatastudent_enlistments_chart["count"] = $fdata;
		$tdatastudent_enlistments_chart[".searchableFields"][] = "count";

$tdatastudent_enlistments_chart[".chartLabelField"] = "status";
$tdatastudent_enlistments_chart[".chartSeries"] = array();
$tdatastudent_enlistments_chart[".chartSeries"][] = array(
	"field" => "count",
	"total" => ""
);
	$tdatastudent_enlistments_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">public.student_enlistments Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">count</attr>';
	$tdatastudent_enlistments_chart[".chartXml"] .= '</attr>';
	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
	</attr>';
	$tdatastudent_enlistments_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="head">'.xmlencode("student_enlistments Chart").'</attr>
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
$tdatastudent_enlistments_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_student_enlistments_Chart","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">term_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_student_enlistments_Chart","term_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudent_enlistments_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_student_enlistments_Chart","count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatastudent_enlistments_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">public.student_enlistments Chart</attr>
<attr value="short_table_name">student_enlistments_chart</attr>
</attr>

</chart>';

$tables_data["public.student_enlistments Chart"]=&$tdatastudent_enlistments_chart;
$field_labels["public_student_enlistments_Chart"] = &$fieldLabelsstudent_enlistments_chart;
$fieldToolTips["public_student_enlistments_Chart"] = &$fieldToolTipsstudent_enlistments_chart;
$placeHolders["public_student_enlistments_Chart"] = &$placeHoldersstudent_enlistments_chart;
$page_titles["public_student_enlistments_Chart"] = &$pageTitlesstudent_enlistments_chart;


changeTextControlsToDate( "public.student_enlistments Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.student_enlistments Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.student_enlistments Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_student_enlistments_chart()
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
	"m_srcTableName" => "public.student_enlistments Chart"
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
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto6["m_sql"] = "se.status";
$proto6["m_srcTableName"] = "public.student_enlistments Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto8["m_sql"] = "se.term_id";
$proto8["m_srcTableName"] = "public.student_enlistments Chart";
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
$proto10["m_srcTableName"] = "public.student_enlistments Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.student_enlistments";
$proto14["m_srcTableName"] = "public.student_enlistments Chart";
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
$proto13["m_srcTableName"] = "public.student_enlistments Chart";
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
	"m_srcTableName" => "public.student_enlistments Chart"
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
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto24["m_sql"] = "student_enlistment_id";
$proto24["m_srcTableName"] = "public.student_enlistments Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto18["m_fieldlist"][]=$obj;
$proto18["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.student_enlist_classes";
$proto27["m_srcTableName"] = "public.student_enlistments Chart";
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
$proto26["m_srcTableName"] = "public.student_enlistments Chart";
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
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto18["m_groupby"][]=$obj;
$proto18["m_orderby"] = array();
$proto18["m_srcTableName"]="public.student_enlistments Chart";		
$obj = new SQLQuery($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id";
$proto17["m_alias"] = "sec";
$proto17["m_srcTableName"] = "public.student_enlistments Chart";
$proto32=array();
$proto32["m_sql"] = "sec.student_enlistment_id = se.id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "sec",
	"m_srcTableName" => "public.student_enlistments Chart"
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
$proto35["m_srcTableName"] = "public.student_enlistments Chart";
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
$proto34["m_srcTableName"] = "public.student_enlistments Chart";
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
	"m_srcTableName" => "public.student_enlistments Chart"
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
	"m_srcTableName" => "public.student_enlistments Chart"
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
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "public.student_enlistments Chart"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.student_enlistments Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_enlistments_chart = createSqlQuery_student_enlistments_chart();


	
		;

			

$tdatastudent_enlistments_chart[".sqlquery"] = $queryData_student_enlistments_chart;



$tdatastudent_enlistments_chart[".hasEvents"] = false;

?>