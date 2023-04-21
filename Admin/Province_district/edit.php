<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Edit Province District</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
    require_once "../connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM province_district WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);


    $sql_province = "SELECT * FROM province";
    $result_province = mysqli_query($conn,$sql_province);

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
        <li class="breadcrumb-item"><a href="javascript:history.back()">Province District</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>

    <div class="form">
        <form action="update_province_district.php?id=<?php echo $row['id']; ?>" method="POST">
        <label id="name">Select Province:</label> <br>
        <select name="province_name" class="js-example-basic-single form-select">

            <?php if(mysqli_num_rows($result_province)>0){ ?>
                <?php while($row_province=mysqli_fetch_array($result_province)){ ?>
                    
            <option value="<?php echo $row_province['id'];?>" <?php if($row_province['id']==$row['province_id']) echo 'selected'?> ><?php echo $row_province['province']; ?></option>
            
            <?php }?>
            <?php }?>
        </select> <br> <br>

        <label id="name">Select District:</label> <br>
        <select name="district_name" class="js-example-basic-single form-select">
            <?php if(mysqli_num_rows($result_district)>0){ ?>
                <?php while($row_district=mysqli_fetch_array($result_district)){ ?>

            <option value="<?php echo $row_district['id'];?>" <?php if($row_district['id']==$row['district_id']) echo 'selected' ?> ><?php echo $row_district['district']; ?></option>
            
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