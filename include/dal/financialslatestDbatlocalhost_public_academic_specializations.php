<?php
$dalTableacademic_specializations = array();
$dalTableacademic_specializations["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableacademic_specializations["specialization"] = array("type"=>200,"varname"=>"specialization", "name" => "specialization", "autoInc" => "0");
$dalTableacademic_specializations["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableacademic_specializations["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTableacademic_specializations["id"]["key"]=true;

$dal_info["financialslatestDbatlocalhost_public_academic_specializations"] = &$dalTableacademic_specializations;
?>