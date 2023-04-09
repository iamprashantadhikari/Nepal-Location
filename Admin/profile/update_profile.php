<?php
require_once "../connection.php";
session_start();
$id = $_GET['id'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$username = $_POST['username'];

$existSql = "SELECT * FROM users WHERE username='$username'";
$existResult = mysqli_query($conn,$existSql);
$existNum = mysqli_num_rows($existResult);

$updatefile_name = $_FILES['image']['name'];

$sql1 = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);

if($_SESSION['role']=="admin"){
        
    if($updatefile_name){
        $image_name = $row['image'];
        unlink("../uploaded_images/".$image_name);
        
        $updatefile_name = time().'.jpg';
        $updatefile_tmp = $_FILES['image']['tmp_name'];
        $updatetarget_path = "../uploaded_images/".$updatefile_name;
    
        if($row['username']!=$username){
            if($existNum>0){
                $_SESSION['userAlExist'] = "Username already exist";
                header("location: edit.php");
            }else{
                $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address',username='$username',image='$updatefile_name' WHERE id='$id'";
                $query = mysqli_query($conn,$sql);
    
                if($query){
                    header("location: view.php");
                }
            }
        }
        else{
            $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address',username='$username',image='$updatefile_name' WHERE id='$id'";
            $query = mysqli_query($conn,$sql);
        
            move_uploaded_file($updatefile_tmp, $updatetarget_path);
            if($query){
                header("location: view.php");
            }
        }
    }
    else{
        if($row['username']!=$username){
            if($existNum>0){
                $_SESSION['userAlExist'] = "Username already exist";
                header("location: edit.php");
            }else{
                $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address',username='$username' WHERE id='$id'";
                $query = mysqli_query($conn,$sql);
    
                if($query){
                    header("location: view.php");
                }
            }
        }
        else{
            $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address',username='$username' WHERE id='$id'";
            $query = mysqli_query($conn,$sql);
        
            if($query){
                header("location: view.php");
            }
        }
    }

}

else{
    if($updatefile_name){
        
        $image_name = $row['image'];
        unlink("../uploaded_images/".$image_name);
        
        $updatefile_name = time().'.jpg';
        $updatefile_tmp = $_FILES['image']['tmp_name'];
        $updatetarget_path = "../uploaded_images/".$updatefile_name;
    
        $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address',image='$updatefile_name' WHERE id='$id'";
        $query = mysqli_query($conn,$sql);
    
        move_uploaded_file($updatefile_tmp, $updatetarget_path);
        if($query){
            header("location: ../index.php");
        }
    }
    else{
        $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',address='$address' WHERE id='$id'";
        $query = mysqli_query($conn,$sql);
    
        if($query){
            header("location: ../index.php");
        }
    }
}

?>