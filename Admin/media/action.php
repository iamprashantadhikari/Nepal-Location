<?php
session_start();
require_once "../connection.php";

$title = $_POST['title'];
$description = $_POST['description'];
date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$createdBy = $rowUser['username'];

$file_tmp = $_FILES['image']['tmp_name'];
$file_name = time().'.jpg';
$target_path = "../uploaded_images/".$file_name;
move_uploaded_file($file_tmp, $target_path);

$sql = "INSERT INTO media (title,description,img,addeddate,createdBy) VALUES('$title','$description','$file_name','$added_date','$createdBy')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}else{
    echo "wrong";
}
?>