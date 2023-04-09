<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | View Request</title>
</head>
<body>
    <?php
    include "../../include/header.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM province_edit_request WHERE province_id='$id'";
    $result = mysqli_query($conn,$sql);
    $serialNo = 1;
     ?>

    <div class="container-fluid mt-2">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-primary text-light">
                <th>S.N</th>
                <th>Province Name</th>
                <th>Province Area</th>
                <th>Previous Name</th>
                <th>Username</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result)>0){ ?>
                    <?php while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $serialNo ?> </td>
                    <td><?php echo $row['province_name'] ?></td>
                    <td><?php echo $row['province_area'] ?></td>
                    <?php
                    $sqlProvince = "SELECT province FROM province WHERE id='$row[province_id]'";
                    $resultProvince = mysqli_query($conn,$sqlProvince);
                    $rowProvince = mysqli_fetch_array($resultProvince);
                    ?>
                    <td><?php echo $rowProvince['province'] ?></td>
                    <?php
                    $sqlUser = "SELECT * FROM users WHERE id='$row[user_id]'";
                    $resultUser = mysqli_query($conn,$sqlUser);
                    $rowUser = mysqli_fetch_array($resultUser);
                    ?>
                    <td><?php echo $rowUser['username'] ?></td>
                    <td>
                        <a href="approve_request.php?id=<?php echo $row['user_id'];?>&pId=<?php echo $row['province_id'];?>"><button class="btn btn-warning btn-sm">Approve</button></a>
                        <a href="delete_request.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm">Decline</button></a>
                    </td>
                </tr>
                    <?php $serialNo=$serialNo+1; ?>
                    <?php }?>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>