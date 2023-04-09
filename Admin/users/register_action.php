<?php
require_once "../connection.php";

session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$file_tmp = $_FILES['image']['tmp_name'];
$file_name = time().'.jpg';
$target_path = "../uploaded_images/".$file_name;
 if(move_uploaded_file($file_tmp, $target_path)) {   
        echo "Image uploaded successfully";
    }else{
        echo "Couldnot upload Images";
    }

$existSql = "SELECT * FROM users WHERE username='$username'";
$existResult = mysqli_query($conn,$existSql);
$existNum = mysqli_num_rows($existResult);
if($existNum>0){
    $_SESSION['alExist'] = "Username already exists";
    $_SESSION['fname'] = $firstname;
    $_SESSION['lname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['uname'] = $username;
    $_SESSION['contact'] = $contact;
    header("location: register.php");
}
else{
    if(empty($password)){
    $_SESSION['emptyPw'] = "Password cannot be empty";
    header("location: register.php");
    }

    elseif($password==$cpassword){
        $sql = "INSERT INTO users (firstname,lastname,email,contact,address,role,username,password,image) VALUES ('$firstname','$lastname','$email','$contact','$address','$role','$username','$hash','$file_name')";
        $result = mysqli_query($conn,$sql);

        if($result){
            header("location: index.php");
            $_SESSION['success'] = "Registered Successfully";
        }

    }else{
        $_SESSION['pwError'] = "password does not match";
        $_SESSION['fname'] = $firstname;
        $_SESSION['lname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['uname'] = $username;
        $_SESSION['contact'] = $contact;
        $_SESSION['address'] = $address;
        header("location: register.php");
    }
}
?>