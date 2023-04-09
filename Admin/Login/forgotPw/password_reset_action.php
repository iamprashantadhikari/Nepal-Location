<?php
session_start();
require_once "../../connection.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$token = rand(100000,999999);

$sql = "SELECT email FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    $get_email = $row['email'];

    $update_token_sql = "UPDATE users SET token='$token' WHERE email='$get_email'";
    $update_token_result = mysqli_query($conn,$update_token_sql);

    if($update_token_result){
        header("location: verify_token.php");
    }
}
else{
    $_SESSION['emailErr'] = "No email found";
    header("location: reset.php");
    exit(0);
}

?>