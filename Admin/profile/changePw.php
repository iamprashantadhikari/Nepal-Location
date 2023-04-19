<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form.css">
    <title>Nepal Location | Change Password</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php" ?>

    <div class="form-reg">
        <form action="update_password.php" method="POST">
                <h3>Change Password</h3>
           
                <input type="password" name="oldpassword" class="text-style-reg" placeholder="Current Password"> <br>
                <?php if(isset($_SESSION['incorrectPw'])) echo $_SESSION['incorrectPw']; ?><br>
                <input type="password" name="password" class="text-style-reg" placeholder="New Password"> <br>
                <?php if(isset($_SESSION['upEmptyPw'])) echo $_SESSION['upEmptyPw']; ?> <br>
            
            <input type="password" name="cpassword" class="text-style-reg" placeholder="Confirm New Password" required><br>
            <?php if(isset($_SESSION['upPwError'])) echo $_SESSION['upPwError'];?> <br>
            <div class="d-flex justify-content-center">
                <button type="submit" id="register-btn">Confirm</button>
            </div>
        </form>
    </div>
    </div>
</div>
</body>
</html>
<?php
unset($_SESSION['incorrectPw']);
unset($_SESSION['upPwError']);
unset($_SESSION['upEmptyPw']);
?>