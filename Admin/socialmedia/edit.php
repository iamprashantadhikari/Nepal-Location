<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php";
     $id = $_GET['id'];
     $sql = "SELECT * FROM social_media WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
     ?>

    <div class="container">
        <form action="update.php?id=<?php echo $row['id'];?>" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Facebook Link</label>
            <input type="text" class="form-control" name="facebook" value="<?php echo $row['facebook'];?>">
        </div><div class="form-group">
            <label for="formGroupExampleInput">Instagram Link</label>
            <input type="text" class="form-control" name="instagram" value="<?php echo $row['instagram'];?>">
        </div><div class="form-group">
            <label for="formGroupExampleInput">Twitter Link</label>
            <input type="text" class="form-control" name="twitter" value="<?php echo $row['twitter'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>