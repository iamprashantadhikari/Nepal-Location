<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-div">
    <div><?php include "../../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
    include "../../include/header.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM district_edit_request WHERE district_id='$id'";
    $result = mysqli_query($conn,$sql);
    $serialNo = 1;
    ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">District</a></li>
        <li class="breadcrumb-item active" aria-current="page">View Request</li>
    </ol>
    </nav>

    <div class="container-fluid mt-2">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-primary text-light">
                <th>S.N</th>
                <th>District Name</th>
                <th>District Area</th>
                <th>Previous Name</th>
                <th>Username</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result)>0){ ?>
                    <?php while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $serialNo ?> </td>
                    <td><?php echo $row['district_name'] ?></td>
                    <td><?php echo $row['district_area'] ?></td>
                    <?php
                    $sqlDistrict = "SELECT district FROM district WHERE id='$row[district_id]'";
                    $resultDistrict = mysqli_query($conn,$sqlDistrict);
                    $rowDistrict = mysqli_fetch_array($resultDistrict);
                    ?>
                    <td><?php echo $rowDistrict['district'] ?></td>
                    <?php
                    $sqlUser = "SELECT * FROM users WHERE id='$row[user_id]'";
                    $resultUser = mysqli_query($conn,$sqlUser);
                    $rowUser = mysqli_fetch_array($resultUser);
                    ?>
                    <td><?php echo $rowUser['username'] ?></td>
                    <td>
                        <a href="approve_dist_request.php?id=<?php echo $row['user_id'];?>&dId=<?php echo $row['district_id'];?>"><button class="btn btn-warning btn-sm">Approve</button></a>
                        <a href="decline_dist_request.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm">Decline</button></a>
                    </td>
                </tr>
                    <?php $serialNo=$serialNo+1; ?>
                    <?php }?>
                <?php }?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</body>
</html>