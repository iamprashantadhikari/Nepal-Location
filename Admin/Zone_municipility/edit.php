<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Zone Municipility</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
require_once "../connection.php";
$id = $_GET['id'];
$sql_zone_muni = "SELECT * FROM zone_municipility WHERE id=$id";
$result_zone_muni = mysqli_query($conn,$sql_zone_muni);
$row_zone_muni = mysqli_fetch_array($result_zone_muni);

$sql_zone = "SELECT * FROM zone_district WHERE status = 'active' GROUP BY zone_id";
$result_zone = mysqli_query($conn,$sql_zone);
$result_dist = mysqli_query($conn,$sql_zone);   

$sql_muni = "SELECT * FROM municipility";
$result_muni = mysqli_query($conn,$sql_muni);
?>

<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php include "../include/header.php" ?>
    
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">Zone Municipility</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>

<div class="form">
    <form action="update_zone_municipility.php?id=<?php echo $row_zone_muni['id'] ?>" method="POST">
        <label id="name">Select Zone:</label> <br>
        <select name="zone_name" class="js-example-basic-single form-select">
            <?php if(mysqli_num_rows($result_zone)>0){ ?>
                <?php while($row_zone=mysqli_fetch_array($result_zone)){ ?>

                    <?php
                    $zoneSql = "SELECT * FROM zone WHERE id='$row_zone[zone_id]'";
                    $zoneResult = mysqli_query($conn,$zoneSql);
                    $zoneRow = mysqli_fetch_array($zoneResult);
                    ?>

            <option value="<?php echo $row_zone['zone_id'] ?>" <?php if($row_zone['zone_id']==$row_zone_muni['zone_id']) echo 'selected' ?> ><?php echo $zoneRow['zone'] ?></option>
            
            <?php }?>
            <?php }?>
        </select> <br> <br>

        <label id="name">Select District:</label> <br>
        <select name="district_name" class="js-example-basic-single form-select">
            <?php if(mysqli_num_rows($result_dist)>0){ ?>
                <?php while($row_dist=mysqli_fetch_array($result_dist)){ ?>

                    <?php
                    $districtSql = "SELECT * FROM district WHERE id='$row_dist[district_id]'";
                    $districtResult = mysqli_query($conn,$districtSql);
                    $districtRow = mysqli_fetch_array($districtResult);
                    ?>

            <option value="<?php echo $row_dist['district_id'] ?>" <?php if($row_dist['district_id']==$row_zone_muni['district_id']) echo 'selected'?> ><?php echo $districtRow['district'] ?></option>
           
            <?php }?>
            <?php }?>
        </select> <br><br>

        <label id="name">Select Municipility:</label> <br>
        <select name="municipility_name" class="js-example-basic-single form-select">
            <?php if(mysqli_num_rows($result_muni)>0){ ?>
                <?php while($row_muni=mysqli_fetch_array($result_muni)){ ?>

            <option value="<?php echo $row_muni['id'] ?>" <?php if($row_muni['id']==$row_zone_muni['municipility_id']) echo 'selected' ?> ><?php echo $row_muni['municipility'] ?></option>
           
            <?php }?>
            <?php }?>
        </select> <br><br>
        <button type="submit" class="submit">submit</button>
    </form>
</div>
</div>
</div>
</body>
</html>