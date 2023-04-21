<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Add Province District</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<?php
require_once "../connection.php";
$sql_province = "SELECT * FROM province";
$result_province = mysqli_query($conn,$sql_province);

$sql_district = "SELECT * FROM district";
$result_district = mysqli_query($conn,$sql_district);
?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">Province District</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
    </nav>

<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
<?php include "../include/header.php" ?>

    <div class="form">
    <form action="action_province_district.php" method="POST">

       <label for="" id="name">Select Province:</label> <br>

       <select name="province_name" class="js-example-basic-single form-select" ?>" >

       <?php if(mysqli_num_rows($result_province)>0){ ?>
        <?php while($row_province = mysqli_fetch_array($result_province)){ ?>
            <?php if($row_province['status']=="active"){ ?>

        <option value="<?php echo $row_province['id'];  ?>"><?php echo $row_province['province'];  ?></option>
        
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </select> <br> <br>

    <label for="" id="name">Select District:</label> <br>
    <select name="district_name" class="js-example-basic-single form-select" ?>">

        <?php if(mysqli_num_rows($result_district)>0){ ?>
            <?php while($row_district = mysqli_fetch_array($result_district)){ ?>
                <?php if($row_district['status']=="active"){ ?>

        <option value="<?php echo $row_district['id']; ?>"><?php echo $row_district['district']; ?></option>
        
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </select> <br> <br>

    <span id="name">Status:</span>
        <label for="">Active</label>
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