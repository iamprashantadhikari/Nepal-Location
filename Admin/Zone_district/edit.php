<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Edit Zone District</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
require_once "../connection.php";
$id = $_GET['id'];
$sql_zone1 = "SELECT * FROM zone_district WHERE id=$id";
$result_zone1 = mysqli_query($conn,$sql_zone1);
$row = mysqli_fetch_array($result_zone1);


$sql_zone = "SELECT * FROM zone";
$result_zone = mysqli_query($conn,$sql_zone);

$sql_district = "SELECT * FROM district";
$result_district = mysqli_query($conn,$sql_district);
    ?>
    
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php" ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">Zone District</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>

    <div class="form">
        <form action="update_zone_district.php?id=<?php echo $row['id'];?>" method="POST">
            <label id="name">Select Zone:</label> <br>
            <select name="zone_name" class="js-example-basic-single form-select">
                <?php if(mysqli_num_rows($result_zone)>0){ ?>
                    <?php while($row_zone = mysqli_fetch_array($result_zone)){ ?>

                <option value="<?php echo $row_zone['id']; ?>" <?php if($row_zone['id']==$row['zone_id'])  echo 'selected'?>> <?php echo $row_zone['zone']; ?> </option>
                
                <?php } ?>
                <?php } ?>
            </select> <br> <br>

            <label id="name">Select District:</label> <br>
            <select name="district_name" class="js-example-basic-single form-select">
                <?php if(mysqli_num_rows($result_district)>0){ ?>
                    <?php while($row_district = mysqli_fetch_array($result_district)){ ?>

                <option value="<?php echo $row_district['id'];?>" <?php if($row_district['id']==$row['district_id']) echo 'selected'?>> <?php echo $row_district['district'];?> </option>
                
                <?php } ?>
                <?php } ?>
            </select> <br>

            <button type="submit" class="submit">submit</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>