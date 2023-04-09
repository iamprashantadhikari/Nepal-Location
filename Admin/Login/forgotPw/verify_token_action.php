<?php
session_start();
require_once "../../connection.php";

$token = $_POST['token'];

$sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    header("location: changePassword.php?id=".$id);
}
else{
$_SESSION['tokenErr'] = "Incorrect Code";
header("location: verify_token.php");
}

?>