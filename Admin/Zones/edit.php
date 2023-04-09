<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Edit Zone</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
require_once "../connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM zone WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<?php include "../include/header.php" ?>
    
<div class="form">
    <form action="update_zone.php?id=<?php echo $row['id']; ?>" method="POST">
        <label for="" id="name">Enter Zone Name You Want to Add</label> <br>
        <input type="text" name="zone" class="textstyle" placeholder="Enter Zone Name" value="<?php echo $row['zone'] ?>"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area" value="<?php echo $row['area']; ?>"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
    </div>
</body>
</html>