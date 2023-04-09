<?php
session_start();
require_once "../../connection.php";
$id = $_GET['id'];

$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);

if($password==$cpassword){
    $sql = "UPDATE users SET password='$hash' WHERE id='$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: ../Login.php");
    }
}
else{
    $_SESSION['PwError'] = "Password does not match";
    header("location: changePassword.php?id=".$id);
}

?>