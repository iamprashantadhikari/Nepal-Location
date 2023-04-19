<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Province Municipility</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
require_once "../connection.php";
$id = $_GET['id'];
$sql_prov_dist = "SELECT * FROM province_municipility WHERE id='$id'";
$result_prov_dist = mysqli_query($conn,$sql_prov_dist);
$row_prov_dist = mysqli_fetch_array($result_prov_dist);

$sql = "SELECT * FROM province_district WHERE status = 'active' GROUP BY province_id";
$result_prov = mysqli_query($conn,$sql);
$result_dist = mysqli_query($conn,$sql);

$sql_muni = "SELECT * FROM municipility";
$result_muni = mysqli_query($conn,$sql_muni);
    ?>

<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php include "../include/header.php" ?>
    
    <div class="form">
        <form action="update_province_municipility.php?id=<?php echo $row_prov_dist['id']; ?>" method="POST">
            <label class="label">Select Province:</label>
            <select name="province_name" class="js-example-basic-single">
                <?php if(mysqli_num_rows($result_prov)>0){ ?>
                    <?php while($row_prov=mysqli_fetch_array($result_prov)){ ?>

                        <?php
                            $provinceSql = "SELECT * FROM province WHERE id='$row_prov[province_id]'";
                            $provinceResult = mysqli_query($conn,$provinceSql);
                            $provinceRow = mysqli_fetch_array($provinceResult);
                            ?>

               <option value="<?php echo $row_prov['province_id']; ?>" <?php if($row_prov['province_id']==$row_prov_dist['province_id']) echo'selected'?> ><?php echo $provinceRow['province']; ?></option>    
               
               <?php }?>
               <?php }?>
            </select> <br> <br>

            <label class="label">Select District:</label>
            <select name="district_name" class="js-example-basic-single">
                <?php if(mysqli_num_rows($result_dist)>0){ ?>
                    <?php while($row_dist=mysqli_fetch_array($result_dist)){ ?>

                        <?php
                            $districtSql = "SELECT * FROM district WHERE id='$row_dist[district_id]'";
                            $districtResult = mysqli_query($conn,$districtSql);
                            $districtRow = mysqli_fetch_array($districtResult);
                        ?>

                <option value="<?php echo $row_dist['district_id'];?>" <?php if($row_dist['district_id']==$row_prov_dist['district_id']) echo 'selected'?> ><?php echo $districtRow['district']; ?></option>
                <?php } ?>
                <?php } ?>
            </select> <br> <br>

            <label class="label">Select Municipility:</label>
            <select name="municipility_name" class="js-example-basic-single">
                <?php if(mysqli_num_rows($result_muni)>0){ ?>
                    <?php while($row_muni=mysqli_fetch_array($result_muni)){ ?>

                <option value="<?php echo $row_muni['id']; ?>" <?php if($row_muni['id']==$row_prov_dist['municipility_id']) echo'selected'?>> <?php echo $row_muni['municipility']; ?></option>
                
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