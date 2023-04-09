<?php
require_once "../../connection.php";
$userId = $_GET['id'];
$districtId = $_GET['dId'];

$sql = "SELECT * FROM district_edit_request WHERE user_id='$userId' AND district_id='$districtId'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$sqlUser = "SELECT username FROM users WHERE id='$userId'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$districtName = $row['district_name'];
$districtArea = $row['district_area'];
$updateDate = $row['created_date'];
$updatedBy = $rowUser['username'];

$updateSql = "UPDATE district SET district='$districtName',area='$districtArea',updatedate='$updateDate',updatedBy='$updatedBy' WHERE id='$row[district_id]'";
$updateResult = mysqli_query($conn,$updateSql);

$deleteSql = "DELETE FROM district_edit_request WHERE id='$row[id]'";
$deleteResult = mysqli_query($conn,$deleteSql);

if($updateResult && $deleteResult){
    header("location: ../index.php");
}
?>