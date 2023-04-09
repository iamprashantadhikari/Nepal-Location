<?php
session_start();
require_once "../connection.php";

$province = $_POST['province'];
$area = $_POST['area'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($province) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO province(province,area,addeddate,createdBy,status) VALUES ('$province','$area','$added_date','$createdBy','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: index.php");
}
else{
    echo "Data didnt insurted into database";
}
}
?>