<?php
$dalTables_student_grades = array();
$dalTables_student_grades["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTables_student_grades["course_code"] = array("type"=>200,"varname"=>"course_code", "name" => "course_code", "autoInc" => "0");
$dalTables_student_grades["section"] = array("type"=>200,"varname"=>"section", "name" => "section", "autoInc" => "0");
$dalTables_student_grades["grade"] = array("type"=>200,"varname"=>"grade", "name" => "grade", "autoInc" => "0");
$dalTables_student_grades["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTables_student_grades["remarks"] = array("type"=>201,"varname"=>"remarks", "name" => "remarks", "autoInc" => "0");
$dalTables_student_grades["term"] = array("type"=>3,"varname"=>"term", "name" => "term", "autoInc" => "0");
$dalTables_student_grades["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTables_student_grades["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTables_student_grades["campus_id"] = array("type"=>200,"varname"=>"campus_id", "name" => "campus_id", "autoInc" => "0");
$dalTables_student_grades["class_id"] = array("type"=>20,"varname"=>"class_id", "name" => "class_id", "autoInc" => "0");
$dalTables_student_grades["posting_batch_number"] = array("type"=>3,"varname"=>"posting_batch_number", "name" => "posting_batch_number", "autoInc" => "0");

$dal_info["financialslatestDbatlocalhost_public_s_student_grades"] = &$dalTables_student_grades;
?>