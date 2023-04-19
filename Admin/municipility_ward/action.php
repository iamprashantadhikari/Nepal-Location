<?php
session_start();
require_once "../connection.php";

$municipility_id = $_POST['muni_id'];
$ward_name = $_POST['ward_name'];
$ward_no = $_POST['wardno'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$createdBy = $rowUser['username'];

if(empty($municipility_id) || empty($ward_name) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO municipility_ward (municipility_id,ward_name,ward_no,addeddate,createdBy,status) VALUES ('$municipility_id','$ward_name','$ward_no','$added_date','$createdBy','$status') ";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
}
?>