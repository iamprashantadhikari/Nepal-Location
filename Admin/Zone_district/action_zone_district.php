<?php
session_start();
require_once "../connection.php";

$zone_name = $_POST['zone_name'];
$district_name = $_POST['district_name'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($zone_name) || empty($district_name) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO zone_district (zone_id,district_id,addeddate,createdBy,status) VALUES ('$zone_name','$district_name','$added_date','$createdBy','$status')";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
}
?>