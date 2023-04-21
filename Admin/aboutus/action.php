<?php
session_start();
require_once "../connection.php";

$description = $_POST['description'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gamil = $_POST['gmail'];
$orgname = $_POST['orgname'];
$keywords = $_POST['keywords'];

$file_tmp = $_FILES['logo']['tmp_name'];
$file_name = time().'.jpg';
$target_path = "../uploaded_images/".$file_name;
move_uploaded_file($file_tmp, $target_path);

date_default_timezone_set("Asia/Kathmandu");
$added_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$createdBy = $rowUser['username'];

$sql = "INSERT INTO aboutus (description,logo,orgname,address,contact,gmail,keywords,addeddate,createdBy) VALUES ('$description','$file_name','$orgname','$address','$contact','$gmail','$keywords','$added_date','$createdBy')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
?>