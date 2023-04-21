<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$title = $_POST['title'];
$icon = $_POST['icon'];
$link = $_POST['link'];
date_default_timezone_set("Asia/Kathmandu");
$updated_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "UPDATE social_media SET title='$title',icon='$icon',link='$link',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
?>