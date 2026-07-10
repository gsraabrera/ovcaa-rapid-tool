<?php
$dalTablefaculties = array();
$dalTablefaculties["faculty_id"] = array("type"=>20,"varname"=>"faculty_id", "name" => "faculty_id", "autoInc" => "1");
$dalTablefaculties["user_id"] = array("type"=>13,"varname"=>"user_id", "name" => "user_id", "autoInc" => "0");
$dalTablefaculties["sais_id"] = array("type"=>3,"varname"=>"sais_id", "name" => "sais_id", "autoInc" => "0");
$dalTablefaculties["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTablefaculties["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTablefaculties["home_unit"] = array("type"=>200,"varname"=>"home_unit", "name" => "home_unit", "autoInc" => "0");
$dalTablefaculties["academic_program_id"] = array("type"=>200,"varname"=>"academic_program_id", "name" => "academic_program_id", "autoInc" => "0");
$dalTablefaculties["is_mas_available"] = array("type"=>11,"varname"=>"is_mas_available", "name" => "is_mas_available", "autoInc" => "0");
$dalTablefaculties["home_college"] = array("type"=>200,"varname"=>"home_college", "name" => "home_college", "autoInc" => "0");

$dal_info["financialslatestDbatlocalhost_public_faculties"] = &$dalTablefaculties;
?>