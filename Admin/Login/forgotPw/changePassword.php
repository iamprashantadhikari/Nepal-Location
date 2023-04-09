<?php
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | ChangePw</title>
    <link rel="stylesheet" href="../../style/form.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="form-reg py-4 my-5">
            <form action="updatePassword.php?id=<?php echo $id ?>" method="POST">
                    <h3>Change Password</h3>
            
                    <input type="password" name="password" class="text-style-reg" placeholder="New Password" required> <br>
                
                <input type="password" name="cpassword" class="text-style-reg" placeholder="Confirm New Password" required><br>
                <?php if(isset($_SESSION['PwError'])) echo $_SESSION['PwError'];?> <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="register-btn">Confirm</button>
                </div>
            </form>
    </div>
</body>
</html>
<?php
unset($_SESSION['PwError']);
?>