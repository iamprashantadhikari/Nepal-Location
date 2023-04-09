<?php
session_start();
require_once "../connection.php";

$zone = $_POST['zone'];
$area = $_POST['area'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/s h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($zone) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO zone (zone,area,addeddate,createdBy,status) VALUES ('$zone','$area','$added_date','$createdBy','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("location: index.php");
}
}
?>