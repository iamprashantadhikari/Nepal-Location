<?php
require_once "../../connection.php";
$id = $_GET['id'];

$districtName = $_POST['district'];
$districtArea = $_POST['area'];

$sql = "UPDATE district_edit_request SET district_name='$districtName',district_area='$districtArea' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: ../index.php");
}
?>