<?php
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Register</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php include "../include/header.php"; ?>
    <div class="form-reg">
        <form action="register_action.php" method="POST" enctype="multipart/form-data">
            <h3>Create an Account</h3>
            <?php if(isset($_SESSION['alExist'])) echo $_SESSION['alExist'] ?> <br>
            <div class="row">
                <div class="col">
                     <!-- <label for="" class="label-style">Firstname:</label> -->
                    <input type="text" value="<?php if(isset($_SESSION['fname'])) echo $_SESSION['fname'] ?>" name="firstname" class="text-style-reg" placeholder="First Name" required><br>
                </div>
                <div class="col">
                    <!-- <label for="" class="label-style">Lastname:</label> -->
                    <input type="text" value="<?php if(isset($_SESSION['lname'])) echo $_SESSION['lname'] ?>" name="lastname" class="text-style-reg" placeholder="Last Name" required><br>
                </div>
            </div>
           
            <div class="row">
                <div class="col">
                    <!-- <label for="" class="label-style">Email:</label> -->
                    <input type="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" name="email" class="text-style-reg" placeholder="Email" required><br>
                </div>
                <div class="col">
                    <input type="number" value="<?php if(isset($_SESSION['contact'])) echo $_SESSION['contact'] ?>" name="contact" class="text-style-reg" placeholder="Phone No" required> <br>
                </div>
            </div>
                
            <div class="row">
                <div class="col">
                    <!-- <label for="" class="ml-3">Select Role:</label> -->
                    <select class="text-style-reg" name="role" id="">
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    </select> <br>
                </div>
                <div class="col">
                     <!-- <label for="">Username:</label> -->
                    <input type="text" value="<?php if(isset($_SESSION['uname'])) echo $_SESSION['uname'] ?>" name="username" class="text-style-reg" placeholder="Username" required><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- <label for="">Password:</label> -->
                     <input type="password" name="password" class="text-style-reg" placeholder="Password"> 
                     <?php if(isset($_SESSION['emptyPw'])) echo $_SESSION['emptyPw'] ?> <br>
                </div>
                <div class="col">
                    <!-- <label for="">Confirm Password:</label> -->
                    <input type="password" name="cpassword" class="text-style-reg" placeholder="Confirm Password" required><br>
                    <?php if(isset($_SESSION['pwError'])) echo $_SESSION['pwError'] ?> <br>
                </div>
            </div>
           
            <div class="row">
                <div class="col">
                    <input type="text" value="<?php if(isset($_SESSION['address'])) echo $_SESSION['address'] ?>" name="address" class="text-style-reg" placeholder="Address" required>
                </div>
                <div class="col">
                    <label class="ml-3">Upload Your Pic:</label> <br>
                    <input class="ml-3" type="file" name="image" onchange="loadFile(event)">
                    <p><img id="output" width="100" /></p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" id="register-btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['uname']);
unset($_SESSION['emptyPw']);
unset($_SESSION['pwError']);
unset($_SESSION['alExist']);
// session_unset();
// session_destroy();
?>