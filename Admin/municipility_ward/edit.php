<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Add Municipility Ward</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
    include "../include/header.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM municipility_ward WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $sql_muni = "SELECT * FROM municipility WHERE status='active'";
    $result_muni = mysqli_query($conn,$sql_muni);
    ?>

     <div class="form">
    <form action="update.php?id=<?php echo $row['id']; ?>" method="POST">

       <label for="" id="name">Select Municipility:</label> <br>

       <select name="muni_id" class="js-example-basic-single form-select" ?>" >

       <?php if(mysqli_num_rows($result_muni)>0){ ?>
        <?php while($row_muni = mysqli_fetch_array($result_muni)){ ?>

        <option value="<?php echo $row_muni['id'];?>" <?php if($row['municipility_id']==$row_muni['id']) echo 'selected'?>> <?php echo $row_muni['municipility'];?></option>
        
        <?php } ?>
        <?php } ?>
    </select> <br> <br>

    <label id="name">Enter Ward Name:</label> <br>
    <input type="text" name="ward_name" class="form-control" value="<?php echo $row['ward_name'] ?>"> <br>

    <label for="" id="name">Enter Ward No:</label> <br>
    <input type="number" name="wardno" class="form-control" value="<?php echo $row['ward_no'] ?>"> <br>

        <button type="submit" class="submit">submit</button>
    </form>
    </div>
    </div>
</div>
</body>
</html>