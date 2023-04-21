<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | ChangePw</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php" ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Pw</li>
    </ol>
    </nav>

    <div class="form-reg">
            <form action="updatePw.php?id=<?php echo $id ?>" method="POST">
                    <h3>Change Password</h3>
            
                    <input type="password" name="password" class="text-style-reg" placeholder="New Password"> <br>
                
                <input type="password" name="cpassword" class="text-style-reg" placeholder="Confirm New Password" required><br>
                <?php if(isset($_SESSION['upUsersPwError'])) echo $_SESSION['upUsersPwError'];?> <br>
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
unset($_SESSION['upUsersPwError']);
?>