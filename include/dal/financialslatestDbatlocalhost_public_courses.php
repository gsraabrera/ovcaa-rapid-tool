<?php
$dalTablecourses = array();
$dalTablecourses["course_id"] = array("type"=>20,"varname"=>"course_id", "name" => "course_id", "autoInc" => "1");
$dalTablecourses["sais_course_id"] = array("type"=>3,"varname"=>"sais_course_id", "name" => "sais_course_id", "autoInc" => "0");
$dalTablecourses["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTablecourses["type"] = array("type"=>200,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTablecourses["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablecourses["course_code"] = array("type"=>200,"varname"=>"course_code", "name" => "course_code", "autoInc" => "0");
$dalTablecourses["sem_offered"] = array("type"=>200,"varname"=>"sem_offered", "name" => "sem_offered", "autoInc" => "0");
$dalTablecourses["career"] = array("type"=>200,"varname"=>"career", "name" => "career", "autoInc" => "0");
$dalTablecourses["units"] = array("type"=>200,"varname"=>"units", "name" => "units", "autoInc" => "0");
$dalTablecourses["is_repeatable"] = array("type"=>11,"varname"=>"is_repeatable", "name" => "is_repeatable", "autoInc" => "0");
$dalTablecourses["is_active"] = array("type"=>11,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablecourses["campus"] = array("type"=>200,"varname"=>"campus", "name" => "campus", "autoInc" => "0");
$dalTablecourses["equivalent"] = array("type"=>3,"varname"=>"equivalent", "name" => "equivalent", "autoInc" => "0");
$dalTablecourses["is_multiple_enrollment"] = array("type"=>11,"varname"=>"is_multiple_enrollment", "name" => "is_multiple_enrollment", "autoInc" => "0");
$dalTablecourses["subject"] = array("type"=>200,"varname"=>"subject", "name" => "subject", "autoInc" => "0");
$dalTablecourses["course_number"] = array("type"=>200,"varname"=>"course_number", "name" => "course_number", "autoInc" => "0");
$dalTablecourses["contact_hours"] = array("type"=>200,"varname"=>"contact_hours", "name" => "contact_hours", "autoInc" => "0");
$dalTablecourses["grading"] = array("type"=>200,"varname"=>"grading", "name" => "grading", "autoInc" => "0");
$dalTablecourses["tm_id"] = array("type"=>3,"varname"=>"tm_id", "name" => "tm_id", "autoInc" => "0");
$dalTablecourses["acad_org"] = array("type"=>200,"varname"=>"acad_org", "name" => "acad_org", "autoInc" => "0");
$dalTablecourses["acad_group"] = array("type"=>200,"varname"=>"acad_group", "name" => "acad_group", "autoInc" => "0");
$dalTablecourses["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablecourses["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablecourses["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablecourses["is_academic"] = array("type"=>11,"varname"=>"is_academic", "name" => "is_academic", "autoInc" => "0");

$dal_info["financialslatestDbatlocalhost_public_courses"] = &$dalTablecourses;
?>