<?php
$strTableName="Enrollment Distribution by Home College and Total Number of Units Enrolled";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.student_enlistments";

$gstrOrderBy="order by enl.acad_group ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>