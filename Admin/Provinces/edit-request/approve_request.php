<?php
require_once "../../connection.php";
$userid = $_GET['id'];
$provinceId = $_GET['pId'];

$sql = "SELECT * FROM province_edit_request WHERE user_id='$userid' AND province_id='$provinceId'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

// $sql2 = "SELECT * FROM province_edit_request WHERE user_id='$userid' AND province_id='$row[province_id]'";
// $result2 = mysqli_query($conn,$sql2);
// $row2 = mysqli_fetch_array($result2);

$sqlUser = "SELECT * FROM users WHERE id='$userid'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$provinceName = $row['province_name'];
$provinceArea = $row['province_area'];
$updateDate = $row['created_date'];
$updatedBy = $rowUser['username'];

$updateSql = "UPDATE province SET province='$provinceName',area='$provinceArea',updatedate='$updateDate',updatedBy='$updatedBy' WHERE id='$row[province_id]'";
$updateResult = mysqli_query($conn,$updateSql);

$deleteSql = "DELETE FROM province_edit_request WHERE id='$row[id]'";
$deleteResult = mysqli_query($conn,$deleteSql);

if($updateResult && $deleteResult){
    header("location: ../index.php");
}

?>