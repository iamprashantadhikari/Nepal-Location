<?php
require_once "../../connection.php";
$id = $_GET['id'];
$zoneName = $_POST['zone'];
$zoneArea = $_POST['area'];

$sql = "UPDATE zone_edit_request SET zone_name='$zoneName',zone_area='$zoneArea' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: ../index.php");
}

?>