<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];
$update_muni_id = $_POST['muni_id'];
$update_ward_name = $_POST['ward_name'];
$update_wardno = $_POST['wardno'];
date_default_timezone_set("Asia/Kathmandu");
$update_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "UPDATE municipility_ward SET municipility_id='$update_muni_id',ward_name='$update_ward_name',ward_no='$update_wardno',updatedate='$update_date',updatedBy='$updatedBy' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
?>