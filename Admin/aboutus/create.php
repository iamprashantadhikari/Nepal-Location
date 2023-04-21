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

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">AboutUs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
    </nav>

    <div class="container mt-3">
        <form action="action.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter For AboutUs Section</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Contact</label>
            <input type="number" class="form-control" name="contact" placeholder="Enter Contact No" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" name="gmail" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Organization Name</label>
            <input type="text" class="form-control" name="orgname" placeholder="Enter Organization Name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Organization Logo</label>
            <input type="file" class="form-control-file" name="logo" onchange="loadFile(event)"> 
            <p><img id="output" width="100" /></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter Keywords</label>
            <textarea class="form-control" name="keywords" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
</div>
</body>
</html>