<?php
require_once "../../connection.php";
$id = $_GET['id'];
$provinceName = $_POST['province'];
$provinceArea = $_POST['area'];

$sql = "UPDATE province_edit_request SET province_name='$provinceName',province_area='$provinceArea' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: ../index.php");
}

?>