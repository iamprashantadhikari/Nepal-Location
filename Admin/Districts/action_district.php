<?php
session_start();
require_once "../connection.php";

$district = $_POST['district'];
$area = $_POST['area'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($district) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO district (district,area,addeddate,createdBy,status) VALUES ('$district','$area','$added_date','$createdBy','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("location: index.php");
}
}
?>