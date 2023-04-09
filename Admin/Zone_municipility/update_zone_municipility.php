<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$update_zone_name = $_POST['zone_name'];
$update_district_name = $_POST['district_name'];
$update_municipility_name = $_POST['municipility_name'];
date_default_timezone_set("Asia/Kathmandu");
$update_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "UPDATE zone_municipility SET zone_id='$update_zone_name',district_id='$update_district_name',municipility_id='$update_municipility_name',updatedate='$update_date',updatedBy='$updatedBy' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
?>