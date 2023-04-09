<?php
require_once "../../connection.php";
$id = $_GET['id'];
$municipilityName = $_POST['municipility'];
$municipilityArea = $_POST['area'];

$sql = "UPDATE municipility_edit_request SET municipility_name='$municipilityName',municipility_area='$municipilityArea' WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: ../index.php");
}

?>