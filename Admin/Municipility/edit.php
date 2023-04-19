<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Edit Municipility</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php
require_once "../connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM municipility WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<?php include "../include/header.php" ?>

<div class="form">
    <form action="update_municipility.php?id=<?php echo $row['id']; ?>" method="POST">
        <label for="" id="name">Enter Municipility Name You Want to Add</label> <br>
        <input type="text" name="municipility" class="textstyle" placeholder="Enter Municipility Name" value="<?php echo $row['municipility']; ?>"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area" value="<?php echo $row['area']; ?>"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
    </div>
    </div>
</div>
</body>
</html>