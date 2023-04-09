<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Add Province</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>

<?php include "../include/header.php" ?>
    
    <div class="form">
    <form action="action_province.php" method="POST">
        <label for="" id="name">Enter Province Name You Want to Add:</label> <br>
        <input type="text" name="province" class="textstyle mt-0" placeholder="Enter Province Name"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area"> <br>
        <span id="name">Status:</span>
        <label for="">Active</label>
        <input type="radio" name="status" id="" value="active">
        <label for="">Inactive</label>
        <input type="radio" name="status" id="" value="inactive"> <br>
        <button type="submit" class="submit">submit</button>
    </form>
    </div>
</body>
</html>