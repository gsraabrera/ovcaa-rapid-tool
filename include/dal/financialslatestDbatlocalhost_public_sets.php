<?php
$dalTablesets = array();
$dalTablesets["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesets["student_set_id"] = array("type"=>3,"varname"=>"student_set_id", "name" => "student_set_id", "autoInc" => "0");
$dalTablesets["set_question_id"] = array("type"=>3,"varname"=>"set_question_id", "name" => "set_question_id", "autoInc" => "0");
$dalTablesets["answer"] = array("type"=>201,"varname"=>"answer", "name" => "answer", "autoInc" => "0");
$dalTablesets["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablesets["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");

$dal_info["financialslatestDbatlocalhost_public_sets"] = &$dalTablesets;
?>