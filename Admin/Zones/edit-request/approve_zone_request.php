<?php
require_once "../../connection.php";
$userid = $_GET['id'];
$zoneId = $_GET['zId'];

$sql = "SELECT * FROM zone_edit_request WHERE user_id='$userid' AND zone_id='$zoneId'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$sqlUser = "SELECT * FROM users WHERE id='$userid'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$zoneName = $row['zone_name'];
$zoneArea = $row['zone_area'];
$updateDate = $row['created_date'];
$updatedBy = $rowUser['username'];

$updateSql = "UPDATE zone SET zone='$zoneName',area='$zoneArea',updatedate='$updateDate',updatedBy='$updatedBy' WHERE id='$row[zone_id]'";
$updateResult = mysqli_query($conn,$updateSql);

$deleteSql = "DELETE FROM zone_edit_request WHERE id='$row[id]'";
$deleteResult = mysqli_query($conn,$deleteSql);

if($updateResult && $deleteResult){
    header("location: ../index.php");
}

?>