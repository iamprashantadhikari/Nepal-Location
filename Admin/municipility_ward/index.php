<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Ward</title>
    <link rel="stylesheet" href="../style/table.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
    include "../include/header.php";
    if($_SESSION['role']=="admin"){
        $sql = "SELECT * FROM municipility_ward";
    }else{
        $sql = "SELECT * FROM municipility_ward WHERE status='active'";
    }
    $result = mysqli_query($conn,$sql);
    $serialNo = 1;
    ?>
    <div class="nav">
     <a href="create.php" class="create"> <button><i class="fa-solid fa-circle-plus"></i>Create</button></a>
    </div>

    <div class="container-fluid">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="bg-primary text-light">
            <th>S.N</th>
            <th>Municipility</th>
            <th>Ward</th>
            <th>Ward No</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Created By</th>
            <th>Updated By</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if(mysqli_num_rows($result)>0){ ?>
                <?php while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $serialNo ?></td>
                <?php
                $sqlMuni = "SELECT municipility FROM municipility WHERE id='$row[municipility_id]'";
                $resultMuni = mysqli_query($conn,$sqlMuni);
                $rowMuni = mysqli_fetch_array($resultMuni);
                ?>
                <td><?php echo $rowMuni['municipility'] ?></td>
                <td><?php echo $row['ward_name'] ?></td>
                <td><?php echo $row['ward_no'] ?></td>
                <td><?php echo $row['addeddate'] ?></td>
                <td><?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];}?></td>
                <td><?php echo $row['createdBy'] ?></td>
                <td><?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
                <td>
                    <a <?php if($_SESSION['role']=="admin"){ ?> href="update_status_inactive.php?id=<?php echo $row['id'];}?>" class="active"> <?php if($row['status']=="active") echo "<button>Active</button>"?></a>
                    <a href="update_status_active.php?id=<?php echo $row['id'];?>" class="inactive"> <?php if($row['status']=="inactive") echo "<button>Inactive</button>"?></a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"><i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                    <?php if($_SESSION['role']=="admin"){ ?>
                    <a href="delete.php?id=<?php echo $row['id'];?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
                    <?php } ?>
                </td>
            </tr>
            <?php $serialNo = $serialNo + 1 ?>
            <?php } } ?>
        </tbody>
    </table>
    </div>
    </div>
</div>
<?php include "../include/footer.php" ?>