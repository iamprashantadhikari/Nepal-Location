<?php
session_start();
require_once "../connection.php";
$id = $_GET['id'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$role = $_POST['role'];
$username = $_POST['username'];

$sqlUser = "SELECT * FROM users WHERE id='$id'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$existSql = "SELECT * FROM users WHERE username='$username'";
$existResult = mysqli_query($conn,$existSql);
$existNum = mysqli_num_rows($existResult);

$updatefile_name = $_FILES['image']['name'];

if($updatefile_name){
    $updatefile_name = time().'.jpg';
    $image_name = $rowUser['image'];
    if(file_exists("../uploaded_images/".$image_name)){
        unlink("../uploaded_images/".$image_name);
    }
    $updatefile_temp = $_FILES['image']['tmp_name'];
    $updatetarget_path = "../uploaded_images/".$updatefile_name;

    if($rowUser['username']!=$username){
            if($existNum>0){
                $_SESSION['upAlExist'] = "Username already exists";
                header("location: edit.php?id=".$id);
                }else{
                    $sqlUpdate = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', contact='$contact',address='$address',role='$role',username='$username' WHERE id='$id'";
                    $resultUpdate = mysqli_query($conn,$sqlUpdate);

                if($resultUpdate){
                header("location: index.php");
                 }
                }
    }
    else{
            $sqlUpdate = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', contact='$contact',address='$address',role='$role',username='$username',image='$updatefile_name' WHERE id='$id'";
            $resultUpdate = mysqli_query($conn,$sqlUpdate);
            
            move_uploaded_file($updatefile_temp, $updatetarget_path);
                    if($resultUpdate){
                    header("location: index.php");
                }
    
    }
}
else{
    if($rowUser['username']!=$username){
        if($existNum>0){
            $_SESSION['upAlExist'] = "Username already exists";
            header("location: edit.php?id=".$id);
            }else{
                $sqlUpdate = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', contact='$contact',address='$address',role='$role',username='$username' WHERE id='$id'";
                $resultUpdate = mysqli_query($conn,$sqlUpdate);

                if($resultUpdate){
                header("location: index.php");
            }
            }

}
else{
        $sqlUpdate = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', contact='$contact',address='$address',role='$role',username='$username' WHERE id='$id'";
        $resultUpdate = mysqli_query($conn,$sqlUpdate);

                if($resultUpdate){
                header("location: index.php");
                // $_SESSION['upSuccess'] = "Registered Successfully";
            }

}
}



?>