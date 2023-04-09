<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$update_zone = $_POST['zone'];
$update_area = $_POST['area'];
date_default_timezone_set("Asia/Kathmandu");
$update_date = date("Y/m/s h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sqlCheck = "SELECT * FROM zone_edit_request WHERE user_id='$_SESSION[userid]' AND zone_id='$id'";
$resultCheck = mysqli_query($conn,$sqlCheck);

if($_SESSION['role']=="admin"){
$sql = "UPDATE zone SET zone='$update_zone',area='$update_area',updatedate='$update_date',updatedBy='$updatedBy' WHERE id = $id";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}
}
elseif(mysqli_num_rows($resultCheck)>0){
    $_SESSION['pending'] = "Your Request is already pending";
    header("location: index.php");
}
else{
    $userId = $_SESSION['userid'];

    $sqlRequest = "INSERT INTO zone_edit_request(zone_name,zone_area,zone_id,user_id,created_date) VALUES ('$update_zone','$update_area','$id','$userId','$update_date')";
    $resultRequest = mysqli_query($conn,$sqlRequest);

    if($resultRequest){
        $_SESSION['reqSuccess'] = "Requested Successfully";
        header("location: index.php");
    }
}
?>