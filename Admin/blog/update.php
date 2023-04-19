<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$title = $_POST['title'];
$description = $_POST['description'];
date_default_timezone_set("Asia/Kathmandu");
$updated_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
$updatedBy = $rowUser['username'];

$sql = "SELECT image FROM blog WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$updated_file_name = $_FILES['image']['name'];
if($updated_file_name){
    $updated_file_name = time().'.jpg';
    $image_name = $row['image'];
    unlink("../uploaded_images/".$image_name);

    $file_tmp = $_FILES['image']['tmp_name'];
    $target_path = "../uploaded_images/".$updated_file_name;
    move_uploaded_file($file_tmp, $target_path);

    $sqlUpdate = "UPDATE blog SET title='$title',image='$updated_file_name',description='$description',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
    $resultUpdate = mysqli_query($conn,$sqlUpdate);
    if($resultUpdate){
        header("location: index.php");
    }
}
else{
    $sqlUpdate = "UPDATE blog SET title='$title',description='$description',updatedate='$updated_date',updatedBy='$updatedBy' WHERE id='$id'";
    $resultUpdate = mysqli_query($conn,$sqlUpdate);
    if($resultUpdate){
        header("location: index.php");
    }
}

?>