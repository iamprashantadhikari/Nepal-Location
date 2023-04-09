<?php
session_start();
require_once "../connection.php";

$zone_name = $_POST['zone_name'];
$district_name = $_POST['district_name'];
$municipility_name = $_POST['municipility_name'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($zone_name) || empty($district_name) || empty($municipility_name) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO zone_municipility (zone_id,district_id,municipility_id,addeddate,createdBy,status) VALUES ('$zone_name','$district_name','$municipility_name','$added_date','$createdBy','$status')";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}   
}
?>