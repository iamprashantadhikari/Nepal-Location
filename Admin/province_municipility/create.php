<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Province Municipility</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<?php
require_once "../connection.php";
$sql = "SELECT * FROM province_district GROUP BY province_id";
$result_prov = mysqli_query($conn,$sql);

$result_dist = mysqli_query($conn,$sql);

$sql_muni = "SELECT * FROM municipility";
$result_muni = mysqli_query($conn,$sql_muni);

?>

<?php include "../include/header.php" ?>

    <div class="form">
        <form action="action_province_municipility.php" method="POST">

            <label for="" class="label">Select Province:</label>

            <select name="province_name" class="js-example-basic-single">

                <option value="">Select Province</option>

                <?php if(mysqli_num_rows($result_prov)>0){ ?>
                    <?php while($row_prov=mysqli_fetch_array($result_prov)){ ?>
                        <?php if($row_prov['status']=="active"){ ?>

                            <?php
                            $provinceSql = "SELECT * FROM province WHERE id='$row_prov[province_id]'";
                            $provinceResult = mysqli_query($conn,$provinceSql);
                            $provinceRow = mysqli_fetch_array($provinceResult);
                            ?>

                <option value="<?php echo $row_prov['province_id']  ?>"> <?php echo $provinceRow['province'];?> </option>
                <?php } ?>
                <?php } ?>
                <?php } ?>
            </select> <br><br>
            
            <label for="" class="label">Select District:</label>

            <select name="district_name" class="js-example-basic-single">

               <option value="">Select District</option>

                <?php if(mysqli_num_rows($result_prov)>0){ ?>
                    <?php while($row_dist=mysqli_fetch_array($result_dist)){ ?>
                        <?php if($row_dist['status']=="active"){ ?>

                            <?php
                              $districtSql = "SELECT * FROM district WHERE id='$row_dist[district_id]'";
                              $districtResult = mysqli_query($conn,$districtSql);
                              $districtRow = mysqli_fetch_array($districtResult);
                            ?>
                
                            <option value="<?php echo $row_dist['district_id'] ?>"> <?php echo $districtRow['district'];?> </option>
                <?php } ?>
                <?php } ?>
                <?php } ?>
            </select><br><br>
            
            <label for="" class="label">Select Municipility:</label>

            <select name="municipility_name" class="js-example-basic-single">

                <option value="">Select Municipility</option>

                <?php if(mysqli_num_rows($result_muni)>0){ ?>
                    <?php while($row_muni=mysqli_fetch_array($result_muni)){ ?>
                        <?php if($row_muni['status']=="active"){ ?>
                
                            <option value="<?php echo $row_muni['id']; ?>"> <?php echo $row_muni['municipility']; ?> </option>
                <?php } ?>
                <?php } ?>
                <?php } ?>
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
</body>
</html>
