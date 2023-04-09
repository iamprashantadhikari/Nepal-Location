<?php include "../include/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Edit Users</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
    require_once "../connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="form-reg">
        <form action="update_user.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
        <h3>Edit User Account</h3>
                <?php if(isset( $_SESSION['upAlExist'])) echo  $_SESSION['upAlExist']; ?> <br>
                <div class="row">
                    <div class="col">
                        <label for="" class="mb-0">Firstname:</label> <br>
                        <input type="text" name="firstname" class="text-style mt-1" value="<?php echo $row['firstname'] ?>"> <br>
                    </div>
                    <div class="col">
                        <label for="" class="mb-0">Lastname:</label> <br>
                        <input type="text" name="lastname" class="text-style mt-1" value="<?php echo $row['lastname'] ?>"> <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="" class="mb-0">Email:</label> <br>
                        <input type="email" name="email" class="text-style mt-1" value="<?php echo $row['email'] ?>"> <br>                </div>
                    <div class="col">
                        <label for="" class="mb-0">Contact No:</label> <br>
                        <input type="number" name="contact" class="text-style mt-1" value="<?php echo $row['contact'] ?>"> <br>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <label for="" class="mb-0">Username:</label> <br>
                        <input type="text" name="username" class="text-style mt-1" value="<?php echo $row['username'] ?>"> <br>
                    </div>
                    <div class="col">
                        <label for="" class="mb-0">Select Role:</label>
                        <select class="text-style mt-1" name="role">
                        <option value="admin" <?php if($row['role']=="admin") echo 'selected'?> >Admin</option>
                        <option value="user" <?php if($row['role']=="user") echo 'selected'?> >User</option>
                        </select> <br>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <label for="">Upload Your Pic:</label> <br>
                        <input type="file" name="image" onchange="loadFile(event)">
                        <p><img id="output" src="../uploaded_images/<?php echo $row['image']; ?>" width="100" /></p>
                    </div>
                    <div class="col">
                        <label for="" class="mb-0">Address:</label> <br>
                        <input type="text" name="address" class="text-style mt-1" value="<?php echo $row['address'] ?>"> <br>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="register-btn">Update</button>
                </div>
        </form>
    </div>
</body>
</html>
<?php 
unset( $_SESSION['upAlExist']);
unset($_SESSION['upEmptyPw']);
unset($_SESSION['upPwError']);
?>