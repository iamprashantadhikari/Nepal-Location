<?php
require_once "../connection.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);


if($num==1){
    while($row=mysqli_fetch_array($result)){
        if($row['status']=="active"){
            if(password_verify($password, $row['password'])){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            header("location: ../index.php");
            }
            else{
            $_SESSION['error'] = "Invalid username or password";
            header("location: Login.php");
            }
        }else{
        $_SESSION['ban'] = "You are suspended";
        header("location: Login.php");
        }
    }
}
else{
    $_SESSION['error'] = "Invalid username or password";
    header("location: Login.php");
}
?>