<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='print_pdf')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_print_pdf($params);
}





// create table and non table handlers
function buttonHandler_print_pdf($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$term_id = (int)$params["term_id"];
//$faculty_id = (int)$params["faculty_id"];
$record = $button->getCurrentRecord();
$term_id = (int)$record["term_id"];
$faculty_id = (int)$record["faculty_id"];
$sql = "SELECT 
        CONCAT(last_name, ', ', first_name,' ', middle_name) AS faculty_name,
        sterm.term_id,
        ay,
        class_id,
        course_code,
        SECTION,
        scr.cfic_id,
        faculties.faculty_id,
        cfic.type,
        cfic.is_display_set,
        parent_class_id,
        parent_fac,
        ss.total_students,
        classes.acad_org,
        classes.acad_group,
        AVG(CASE WHEN sq.type='Cognitive' THEN mean ELSE NULL END)::DECIMAL(10,2) AS cognitive,
        AVG(CASE WHEN sq.type='Affective' THEN mean ELSE NULL END)::DECIMAL(10,2) AS affective,
        AVG(CASE WHEN sq.type='Fairness' THEN mean ELSE NULL END)::DECIMAL(10,2) AS fairness,
        AVG(mean)::DECIMAL(10,2) AS ratings
    FROM set_cfic_results scr
    JOIN set_questions sq ON sq.id = scr.set_question_id 
    INNER JOIN class_faculty_in_charge AS cfic ON scr.cfic_id = cfic.id
    INNER JOIN faculties ON cfic.faculty_id = faculties.faculty_id
    INNER JOIN users ON faculties.user_id = users.id
    INNER JOIN classes ON cfic.class_id = classes.id
    INNER JOIN courses ON classes.course_id = courses.course_id
    INNER JOIN student_terms AS sterm ON scr.term_id = sterm.term_id
    LEFT JOIN (
        SELECT ss.cfic_id, count(distinct ss.student_id) AS total_students 
        FROM student_sets ss 
        GROUP BY ss.cfic_id 
    ) ss ON ss.cfic_id = scr.cfic_id
    LEFT JOIN (
        SELECT classes.id, faculty_id AS parent_fac  
        FROM classes 
        INNER JOIN class_faculty_in_charge AS cfic ON cfic.class_id = classes.id
        WHERE cfic.status='ACTIVE'
    ) parent ON parent.id = classes.parent_class_id AND parent_fac = cfic.faculty_id
    WHERE answer_type = 'likert' 
      AND faculties.faculty_id = $faculty_id 
      AND scr.term_id = $term_id 
    GROUP BY 
        CONCAT(last_name, ', ', first_name,' ', middle_name),
        sterm.term_id,
        ay,
        class_id,
        course_code,
        SECTION,
        scr.cfic_id,
        faculties.faculty_id,
        cfic.type,
        cfic.is_display_set,
        parent_class_id,
        parent_fac,
        ss.total_students,
        classes.acad_org,
        classes.acad_group";

$data = DB::Query($sql);

$list = [];
while ($row = $data->fetchAssoc()) {
    $list[] = $row;
}

$result["data"] = $list;
$result["term_id"] = $term_id;
$result["faculty_id"] = $faculty_id;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>