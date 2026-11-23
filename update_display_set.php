<?php
require_once("include/dbcommon.php");

header('Content-Type: application/json');

// Optional: Check kung naka-login ang user
if (!isLogged()) {
    echo json_encode(["success" => false, "message" => "Unauthorized access."]);
    exit;
}

$cfic_id = isset($_POST['cfic_id']) ? (int)$_POST['cfic_id'] : 0;
$is_display = isset($_POST['is_display_set']) && $_POST['is_display_set'] === 'true' ? 'true' : 'false';

if ($cfic_id <= 0) {
    echo json_encode(["success" => false, "message" => "Invalid CFIC ID."]);
    exit;
}

$sql = "UPDATE class_faculty_in_charge 
        SET is_display_set = $is_display 
        WHERE id = $cfic_id";

$exec = DB::Exec($sql);

if ($exec !== false) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => DB::LastError()]);
}
?>