<?php
$dalTablestudent_sets = array();
$dalTablestudent_sets["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestudent_sets["student_id"] = array("type"=>200,"varname"=>"student_id", "name" => "student_id", "autoInc" => "0");
$dalTablestudent_sets["cfic_id"] = array("type"=>3,"varname"=>"cfic_id", "name" => "cfic_id", "autoInc" => "0");
$dalTablestudent_sets["has_taken_set"] = array("type"=>11,"varname"=>"has_taken_set", "name" => "has_taken_set", "autoInc" => "0");
$dalTablestudent_sets["term_id"] = array("type"=>3,"varname"=>"term_id", "name" => "term_id", "autoInc" => "0");
$dalTablestudent_sets["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablestudent_sets["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablestudent_sets["is_calculated"] = array("type"=>11,"varname"=>"is_calculated", "name" => "is_calculated", "autoInc" => "0");

$dal_info["financialslatestDbatlocalhost_public_student_sets"] = &$dalTablestudent_sets;
?>