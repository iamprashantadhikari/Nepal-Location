
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Baloo+Thambi+2:wght@500&" rel="stylesheet">
</head>
<body>
<div class="main-div">
    <div><?php include "include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "include/header.php";
    $pSql = "SELECT * FROM province WHERE status='active'";
    $pResult = mysqli_query($conn,$pSql);

    $dSql = "SELECT * FROM district WHERE status='active'";
    $dResult = mysqli_query($conn,$dSql);

    $mSql = "SELECT * FROM municipility WHERE status='active'";
    $mResult = mysqli_query($conn,$mSql);

    $serialNo = 1;
    $serialNo1 = 1;
    $serialNo2 = 1;
    ?>
    <div class="container-fluid d-flex justify-content-around mt-2">
        <div class="col-sm-4">
            <table id="example" class="table table-striped table-bordered m-2">
                <thead class="bg-primary text-light">
                    <th>S.N</th>
                    <th>Province</th>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($pResult)>0){ ?>
                        <?php while($pRow=mysqli_fetch_array($pResult)){ ?>
                            <tr>
                                <td><?php echo $serialNo ?></td>
                                <td><?php echo $pRow['province'] ?></td>
                            </tr>
                    <?php $serialNo = $serialNo + 1; } }?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <table id="example1" class="table table-striped table-bordered m-2" style="width:100%">
                <thead class="bg-primary text-light">
                    <th>S.N</th>
                    <th>District</th>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($dResult)>0){ ?>
                        <?php while($dRow=mysqli_fetch_array($dResult)){ ?>
                            <tr>
                                <td><?php echo $serialNo1 ?></td>
                                <td><?php echo $dRow['district'] ?></td>
                            </tr>
                    <?php $serialNo1 = $serialNo1 + 1; } }?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <table id="example2" class="table table-striped table-bordered m-2" style="width:100%">
                <thead class="bg-primary text-light">
                    <th>S.N</th>
                    <th>Municipility</th>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($mResult)>0){ ?>
                        <?php while($mRow=mysqli_fetch_array($mResult)){ ?>
                            <tr>
                                <td><?php echo $serialNo2 ?></td>
                                <td><?php echo $mRow['municipility'] ?></td>
                            </tr>
                    <?php $serialNo2 = $serialNo2 + 1; } }?>
                </tbody>
            </table>
        </div>
    </div>  
    </div>
</div>
</body>
</html>
<?php include "include/footer.php" ?>