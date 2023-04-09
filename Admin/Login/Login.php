<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Login</title>
    <link rel="stylesheet" href="../style/form.css">
    <link rel="stylesheet" href="../Assets/asset.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Baloo+Thambi+2:wght@700&" rel="stylesheet">
</head>
<body>

    <div class="images">
        <div style="background-image: url('../Assets/pashupatinath.png');"></div>
        <div style="background-image: url('../Assets/lumbini.jpg');"></div>
        <div style="background-image: url('../Assets/pokhara.png');"></div>
        <div style="background-image: url('../Assets/chitwan.jpg');"></div>
        <div style="background-image: url('../Assets/janakpur.jpg');"></div>
        <div style="background-image: url('../Assets/bouddha.png');"></div>
    </div>

    <div class="login-heading">
        <h1>Login To Nepal Location Information</h1>
    </div>
    <div class="login-form">
        <?php if(isset($_SESSION['success'])) echo $_SESSION['success'] ?>

        <form action="login_action.php" method="post">

            <?php if(isset($_SESSION['ban'])) echo $_SESSION['ban'] ?> <br>

            <input type="text" name="username" class="text-style" placeholder="Username"> <br>
            <!-- <label for="" class="label-style">Password:</label> -->
            <input type="password" name="password" class="text-style" placeholder="Password"><br>

            <?php if(isset($_SESSION['error'])) echo $_SESSION['error'] ?> <br>

            <div class="col">
                <a href="forgotPw/reset.php">Forgot password?</a>
            </div>
            
            <button type="submit" id="login-btn">Login</button>
        </form>
    </div>
</body>
</html>

<?php
session_unset();
?>