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
    $sql_muni = "SELECT * FROM municipility WHERE status='active'";
    $result_muni = mysqli_query($conn,$sql_muni);
    ?>

     <div class="form">
    <form action="action.php" method="POST">

       <label for="" id="name">Select Municipility:</label> <br>

       <select name="muni_id" class="js-example-basic-single form-select" ?>" >

       <?php if(mysqli_num_rows($result_muni)>0){ ?>
        <?php while($row_muni = mysqli_fetch_array($result_muni)){ ?>

        <option value="<?php echo $row_muni['id'];  ?>"><?php echo $row_muni['municipility'];  ?></option>
        
        <?php } ?>
        <?php } ?>
    </select> <br> <br>

    <label id="name">Enter Ward Name:</label> <br>
    <input type="text" name="ward_name" class="form-control" placeholder="Enter Ward Name"> <br>

    <label for="" id="name">Enter Ward No:</label> <br>
    <input type="number" name="wardno" class="form-control" placeholder="Enter Ward No"> <br>

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