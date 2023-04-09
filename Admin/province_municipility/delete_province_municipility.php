<?php
require_once "../connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM province_municipility WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}

?>