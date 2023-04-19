<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Zone Municipility</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php  
    require_once "../connection.php";
    $sql_zone_dist = "SELECT * FROM zone_district GROUP BY zone_id";
    $result_zone = mysqli_query($conn,$sql_zone_dist);
    $result_dist = mysqli_query($conn,$sql_zone_dist);

    $sql_muni = "SELECT * FROM municipility";
    $result_muni = mysqli_query($conn,$sql_muni);
    ?>

<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php include "../include/header.php" ?>
    
    <div class="form">
        <form action="action_zone_municipility.php" method="POST">

            <label for="" class="label">Select Zone:</label>

            <select name="zone_name" class="js-example-basic-single">

                <?php if(mysqli_num_rows($result_zone)>0){ ?>
                    <?php while($row_zone=mysqli_fetch_array($result_zone)){ ?>
                        <?php if($row_zone['status']=="active"){ ?>
                
                            <?php
                            $zoneSql = "SELECT * FROM zone WHERE id='$row_zone[zone_id]'";
                            $zoneResult = mysqli_query($conn,$zoneSql);
                            $zoneRow = mysqli_fetch_array($zoneResult);
                            ?>

                            <option value="<?php echo $row_zone['zone_id'] ?>"><?php echo $zoneRow['zone']; ?></option>
                <?php }?>
                <?php }?>
                <?php }?>
            </select> <br><br>

            <label for="" class="label">Select District:</label>
            <select name="district_name" class="js-example-basic-single">
                <?php if(mysqli_num_rows($result_dist)>0){ ?>
                    <?php while($row_dist=mysqli_fetch_array($result_dist)){ ?>
                        <?php if($row_dist['status']=="active"){ ?>

                            <?php
                            $districtSql = "SELECT * FROM district WHERE id='$row_dist[district_id]'";
                            $districtResult = mysqli_query($conn,$districtSql);
                            $districtRow = mysqli_fetch_array($districtResult);
                            ?>

                <option value="<?php  echo $row_dist['district_id'] ?>"><?php  echo $districtRow['district'] ?></option>
                <?php }?>
                <?php }?>
                <?php }?>
            </select> <br><br>
            
            <label for="" class="label">Select Municipility:</label>
            <select name="municipility_name" class="js-example-basic-single">
                <?php if(mysqli_num_rows($result_muni)>0){ ?>
                    <?php while($row_muni=mysqli_fetch_array($result_muni)){ ?>
                        <?php if($row_muni['status']=="active"){ ?>
                            
                <option value="<?php echo $row_muni['id'] ?>"><?php echo $row_muni['municipility'] ?></option>
                
                <?php }?>
                <?php }?>
                <?php }?>
            </select> <br><br>

            <span id="name">Status:</span>
            <label for="" class="label">Active</label>
            <input type="radio" name="status" id="" value="active">
            <label for="">Inactive</label>
            <input type="radio" name="status" id="" value="inactive">
            <br>
            <button type="submit" class="submit">submit</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>