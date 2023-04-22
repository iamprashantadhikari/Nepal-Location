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

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">AboutUs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>

    <div class="container mt-3">
        <form action="update.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter For AboutUs Section</label>
            <textarea class="form-control" name="description" rows="4"><?php echo $row['description'];?></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Contact</label>
            <input type="number" class="form-control" name="contact" value="<?php echo $row['contact'] ?>" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" name="gmail" value="<?php echo $row['gmail'] ?>" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Organization Name</label>
            <input type="text" class="form-control" name="orgname" value="<?php echo $row['orgname'] ?>" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Organization Logo</label>
            <input type="file" class="form-control-file" name="logo" onchange="loadFile(event)"> 
            <p><img id="output" src="../uploaded_images/<?php echo $row['logo']; ?>" width="100" /></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter Keywords</label>
            <textarea class="form-control" name="keywords" rows="2"><?php echo $row['keywords'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    </div>
</div>
</body>
</html>