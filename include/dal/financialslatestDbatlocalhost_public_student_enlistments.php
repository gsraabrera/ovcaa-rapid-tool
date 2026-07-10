<?php
$dalTablestudent_enlistments = array();
$dalTablestudent_enlistments["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestudent_enlistments["term_id"] = array("type"=>3,"varname"=>"term_id", "name" => "term_id", "autoInc" => "0");
$dalTablestudent_enlistments["student_id"] = array("type"=>200,"varname"=>"student_id", "name" => "student_id", "autoInc" => "0");
$dalTablestudent_enlistments["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablestudent_enlistments["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablestudent_enlistments["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablestudent_enlistments["remarks"] = array("type"=>201,"varname"=>"remarks", "name" => "remarks", "autoInc" => "0");
$dalTablestudent_enlistments["id"]["key"]=true;

$dal_info["financialslatestDbatlocalhost_public_student_enlistments"] = &$dalTablestudent_enlistments;
?>