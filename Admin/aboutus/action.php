<?php
session_start();
require_once "../connection.php";

$description = $_POST['description'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$createdBy = $rowUser['username'];

$sql = "INSERT INTO aboutus (description,addeddate,createdBy) VALUES ('$description','$added_date','$createdBy')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
?>