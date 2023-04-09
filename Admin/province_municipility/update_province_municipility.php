<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$update_prov_name = $_POST['province_name'];
$update_dist_name = $_POST['district_name'];
$update_muni_name = $_POST['municipility_name'];
date_default_timezone_set("Asia/Kathmandu");
$update_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "UPDATE province_municipility SET province_id='$update_prov_name',district_id='$update_dist_name',municipility_id='$update_muni_name',updatedate='$update_date',updatedBy='$updatedBy' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
?>