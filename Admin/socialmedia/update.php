<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];
date_default_timezone_set("Asia/Kathmandu");
$updated_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "UPDATE social_media SET facebook='$facebook',instagram='$instagram',twitter='$twitter',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
?>