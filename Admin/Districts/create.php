<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Add District</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php include "../include/header.php" ?>

<div class="form">
    <form action="action_district.php" method="POST">
        <label for="" id="name">Enter District Name You Want to Add</label> <br>
        <input type="text" name="district" class="textstyle" placeholder="Enter District Name"><br>
        <label for="" id="name">Area:</label> <br>
        <input type="number" name="area" class="textstyle mt-0" placeholder="Enter Area"> <br>
        <span id="name">Status:</span>
        <label for="">Active</label>
        <input type="radio" name="status" id="" value="active">
        <label for="">Inacive</label>
        <input type="radio" name="status" id="" value="inactive"> <br>
        <div class="d-flex justify-content-center">
        <button type="submit" class="submit">submit</button>
        </div>
    </form>
    </div>
    </div>
</div>
</body>
</html>