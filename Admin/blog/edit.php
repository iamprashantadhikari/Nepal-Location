<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Edit Blog</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
     include "../include/header.php";
     $id = $_GET['id'];
     $sql = "SELECT * FROM blog WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
    ?>

    <div class="container">
        <form action="update.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">File input</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="3"><?php echo $row['description'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</div>
</body>
</html>