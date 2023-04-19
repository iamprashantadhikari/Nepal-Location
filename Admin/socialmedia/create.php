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
    <?php include "../include/header.php" ?>

    <div class="container">
        <form action="action.php" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Logo</label>
            <input type="file" class="form-control-file" name="logo">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Link</label>
            <input type="text" class="form-control" name="link" placeholder="Enter Link">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>