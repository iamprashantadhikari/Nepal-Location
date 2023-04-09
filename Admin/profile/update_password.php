<?php
require_once "../connection.php";
session_start();

$oldPassword = $_POST['oldpassword'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$userId = $_SESSION['userid'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE id=$userId";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if(password_verify($oldPassword, $row['password'])){
    
    if(empty($password)){
        $_SESSION['upEmptyPw'] = "Password cannot be empty";
        header("location: changePw.php");
        }
    if($password==$cpassword){
        $sqlUpdate = "UPDATE users SET password='$hash' WHERE id='$userId'";
        $resultUpdate = mysqli_query($conn,$sqlUpdate);

        if($resultUpdate){
            header("location: ../index.php");
        }
    }else{
        $_SESSION['upPwError'] = "password does not match";
        header("location: changePw.php");
    }
}else{
    $_SESSION['incorrectPw'] = "incorrect current password";
    header("location: changePw.php");
}

?>