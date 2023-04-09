<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Reset Password</h5>
                        </div>
                        <div class="card-body p-4">

                            <form action="password_reset_action.php" method="post">
                                <div class="form-group mb-3">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address" required>
                                </div>
                                <?php if(isset($_SESSION['emailErr'])) echo $_SESSION['emailErr']; ?>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php
unset($_SESSION['emailErr']);
?>