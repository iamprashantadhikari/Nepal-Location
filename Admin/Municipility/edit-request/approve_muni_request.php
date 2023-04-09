<?php
require_once "../../connection.php";
$userid = $_GET['id'];
$muniId = $_GET['mId'];

$sql = "SELECT * FROM municipility_edit_request WHERE user_id='$userid' AND municipility_id='$muniId'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$sqlUser = "SELECT * FROM users WHERE id='$userid'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$municipilityName = $row['municipility_name'];
$municipilityArea = $row['municipility_area'];
$updateDate = $row['created_date'];
$updatedBy = $rowUser['username'];

$updateSql = "UPDATE municipility SET municipility='$municipilityName',area='$municipilityArea',updatedate='$updateDate',updatedBy='$updatedBy' WHERE id='$row[municipility_id]'";
$updateResult = mysqli_query($conn,$updateSql);

$deleteSql = "DELETE FROM municipility_edit_request WHERE id='$row[id]'";
$deleteResult = mysqli_query($conn,$deleteSql);

if($updateResult && $deleteResult){
    header("location: ../index.php");
}

?>