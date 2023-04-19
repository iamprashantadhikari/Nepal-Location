<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Add Blog</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php" ?>

    <div class="container">
        <form action="action.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">File input</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
</div>
</body>
</html>