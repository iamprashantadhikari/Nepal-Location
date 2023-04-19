<?php
require_once "../connection.php";
$id = $_GET['id'];

$sql = "SELECT * FROM social_media WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$update_status = $row['status'];
$update_status = "active";

$sql_update = "UPDATE social_media SET status='$update_status' WHERE id=$id";
$result_update = mysqli_query($conn,$sql_update);

if($result_update){
    header("location: index.php");
}

?>