<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Edit Zone</title>
    <link rel="stylesheet" href="../../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php
include "../../include/header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM zone_edit_request WHERE zone_id=$id AND user_id='$_SESSION[userid]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

    
<div class="form">
    <form action="update_zone_request.php?id=<?php echo $row['id']; ?>" method="POST" >
        <label for="" id="name">Edit Zone Name Request:</label> <br>
        <input type="text" name="zone" class="textstyle" placeholder="Enter zone Name" value="<?php echo $row['zone_name']; ?>"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area" value="<?php echo $row['zone_area']; ?>"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
</div>
</div>
</div>
</body>
</html>