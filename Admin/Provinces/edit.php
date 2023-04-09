<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Edit Province</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<?php
require_once "../connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM province WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

<?php include "../include/header.php" ?>
    
<div class="form">
    <form action="update_province.php?id=<?php echo $row['id']; ?>" method="POST" >
        <label for="" id="name">Enter Province Name You Want to Edit</label> <br>
        <input type="text" name="province" class="textstyle" placeholder="Enter Province Name" value="<?php echo $row['province']; ?>"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area" value="<?php echo $row['area']; ?>"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
    </div>
</body>
</html>