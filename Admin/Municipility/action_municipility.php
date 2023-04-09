<?php
session_start();
require_once "../connection.php";

$municipility = $_POST['municipility'];
$area = $_POST['area'];
$status = $_POST['status'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");
$createdBy = $_SESSION['username'];

if(empty($municipility) || empty($status)){
    header("location: create.php");
}
else{
$sql = "INSERT INTO municipility(municipility,area,addeddate,createdBy,status) VALUES ('$municipility','$area','$added_date','$createdBy','$status')";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
}
?>