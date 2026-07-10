<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard["English"] = array();
	$fieldLabelsdashboard["English"]["public_student_enlistments_Chart_term_id"] = "Term Id";
	$fieldLabelsdashboard["English"]["public_student_enlistments_Chart_status"] = "Status";
	$fieldLabelsdashboard["English"]["public_student_enlistments_Chart_count"] = "Count";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_term_id"] = "Term Id";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_career"] = "Career";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_batch"] = "Batch";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_0_units"] = "0 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_1_2_units"] = "1-2 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_3_5_units"] = "3-5 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_6_8_units"] = "6-8 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_9_11_units"] = "9-11 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_12_14_units"] = "12-14 Units";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_15_units_above"] = "15 units above";
	$fieldLabelsdashboard["English"]["enrollment_count_by_unit_and_batch_total"] = "Total";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"public.student_enlistments Chart", "field"=>"term_id" );
$tdatadashboard[".searchFields"]["public_student_enlistments_Chart_term_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.student_enlistments Chart", "field"=>"status" );
$tdatadashboard[".searchFields"]["public_student_enlistments_Chart_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.student_enlistments Chart", "field"=>"count" );
$tdatadashboard[".searchFields"]["public_student_enlistments_Chart_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"term_id" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_term_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"career" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_career"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"batch" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_batch"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"0 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_0_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"1-2 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_1_2_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"3-5 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_3_5_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"6-8 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_6_8_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"9-11 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_9_11_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"12-14 units" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_12_14_units"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"15 units above" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_15_units_above"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"enrollment_count_by_unit_and_batch", "field"=>"total" );
$tdatadashboard[".searchFields"]["enrollment_count_by_unit_and_batch_total"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "public_student_enlistments_Chart_term_id";
$tdatadashboard[".allSearchFields"][] = "public_student_enlistments_Chart_status";
$tdatadashboard[".allSearchFields"][] = "public_student_enlistments_Chart_count";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_term_id";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_career";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_batch";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_0_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_1_2_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_3_5_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_6_8_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_9_11_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_12_14_units";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_15_units_above";
$tdatadashboard[".allSearchFields"][] = "enrollment_count_by_unit_and_batch_total";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "public_student_enlistments_Chart_term_id";
$tdatadashboard[".googleLikeFields"][] = "public_student_enlistments_Chart_status";
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "enrollment_count_by_unit_and_batch_grid", "table" => "enrollment_count_by_unit_and_batch",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_student_enlistments_Chart_chart", "table" => "public.student_enlistments Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;




$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";



$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>