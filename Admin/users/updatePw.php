<?php
require_once "../connection.php";
session_start();
$id = $_GET['id'];

$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);

if($password==$cpassword){
    $sql = "UPDATE users SET password='$hash' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: index.php");
    }
}else{
    $_SESSION['upUsersPwError'] = "password does not match";
    header("location: changePw.php?id=".$id);
}

?>