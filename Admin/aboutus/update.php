<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$description = $_POST['description'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gmail = $_POST['gmail'];
$orgname = $_POST['orgname'];
$keywords = $_POST['keywords'];

date_default_timezone_set("Asia/Kathmandu");
$updated_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "SELECT logo FROM aboutus WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$updated_file_name = $_FILES['logo']['name'];
if($updated_file_name){
    $updated_file_name = time().'.jpg';
    $logo_name = $row['logo'];
    unlink("../uploaded_images/".$logo_name);

    $file_tmp = $_FILES['logo']['tmp_name'];
    $target_path = "../uploaded_images/".$updated_file_name;
    move_uploaded_file($file_tmp, $target_path);

    $sql = "UPDATE aboutus SET description='$description',logo='$updated_file_name',orgname='$orgname',address='$address',contact='$contact',gmail='$gmail',keywords='$keywords',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: index.php");
    }
}
else{
    $sql = "UPDATE aboutus SET description='$description',orgname='$orgname',address='$address',contact='$contact',gmail='$gmail',keywords='$keywords',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: index.php");
    }
}

?>