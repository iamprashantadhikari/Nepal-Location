<?php
session_start();
require_once "../connection.php";

$province_name = $_POST['province_name'];
$district_name = $_POST['district_name'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($province_name) || empty($district_name) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO province_district (province_id,district_id,addeddate,createdBy,status) VALUES ('$province_name','$district_name','$added_date','$createdBy','$status') ";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
}
?>