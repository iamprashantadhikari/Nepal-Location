<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
        include "../include/header.php";
        $id = $_SESSION['userid'];
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>

<div class="form-reg">
    <form action="update_profile.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
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
                <input type="email" name="email" class="text-style mt-1" value="<?php echo $row['email'] ?>"> <br>
            </div>
            <div class="col">
                <label for="" class="mb-0">Contact No:</label> <br>
                <input type="number" name="contact" class="text-style mt-1" value="<?php echo $row['contact'] ?>"> <br>
            </div>
        </div>
       
        <div class="row">
            <div class="col">
                <label for="" class="mb-0">Address:</label> <br>
                <input type="text" name="address" class="text-style mt-1" value="<?php echo $row['address'] ?>"> <br>
            </div>
            <?php if($_SESSION['role']=="admin"){ ?>
            <div class="col">
                <label for="" class="mb-0">Username:</label> <br>
                <input type="text" name="username" class="text-style mt-1" value="<?php echo $row['username'] ?>"> <br>
            </div>
            <?php }?>
        </div>
        
        <label for="">Upload Your Pic:</label> <br>
        <input type="file" name="image" onchange="loadFile(event)">
        <p><img id="output" src="../uploaded_images/<?php echo $row['image']; ?>" width="100" /></p>

        <div class="d-flex justify-content-center">
            <button type="submit" id="register-btn">Update</button>
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>