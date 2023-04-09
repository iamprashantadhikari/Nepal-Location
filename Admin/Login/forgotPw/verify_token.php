<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Token Verify</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex justify-content-center py-5">
        <div class="card text-center" style="width: 300px;">
            <div class="card-header h5 text-white bg-primary">Verify Code</div>
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Enter six digit code that you have got to verify.
                </p>
                <form action="verify_token_action.php" method="post">
                    <div class="form-outline">
                        <input type="number" name="token" class="form-control mt-3" placeholder="Enter Code" required/>
                        <?php if(isset($_SESSION['tokenErr'])) echo $_SESSION['tokenErr']; ?> <br>
                    </div>
                        <button type="submit" class="btn btn-primary w-100">Verify</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
unset($_SESSION['tokenErr']);
?>