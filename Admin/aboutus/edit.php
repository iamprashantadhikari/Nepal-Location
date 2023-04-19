<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Edit AboutUs</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php";
     $id = $_GET['id'];
     $sql = "SELECT * FROM aboutus WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
    ?>

    <div class="container mt-3">
        <form action="update.php?id=<?php echo $row['id'];?>" method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter For AboutUs Section</label>
            <textarea class="form-control" name="description" rows="4"><?php echo $row['description'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</div>
</body>
</html>