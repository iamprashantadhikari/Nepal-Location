<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Edit Request</title>
    <link rel="stylesheet" href="../../style/form.css">
</head>
<body>
    <?php
    include "../../include/header.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM district_edit_request WHERE district_id='$id' AND user_id='$_SESSION[userid]'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    
<div class="form">
    <form action="update_dist_request.php?id=<?php echo $row['id']; ?>" method="POST" >
        <label for="" id="name">Edit District Name Request:</label> <br>
        <input type="text" name="district" class="textstyle" placeholder="Enter district Name" value="<?php echo $row['district_name']; ?>"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area" value="<?php echo $row['district_area']; ?>"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
</div>
</body>
</html>