<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <?php
    require_once "../connection.php";

    $search = $_POST['search'];
    $zoneIds = [];
    $districtIds = [];
    $muniIds = [];

    $zoneSql = "SELECT * FROM zone WHERE zone LIKE '%".$search."%'";
    $zoneResult = mysqli_query($conn,$zoneSql);
    if(mysqli_num_rows($zoneResult)>0){
        while($zoneRow = mysqli_fetch_array($zoneResult)){
            array_push($zoneIds, $zoneRow['id']);
        }
    }

    $districtSql = "SELECT * FROM district WHERE district LIKE '%".$search."%'";
    $districtResult = mysqli_query($conn,$districtSql);
    if(mysqli_num_rows($districtResult)>0){
    while($districtRow = mysqli_fetch_array($districtResult)){
        array_push($districtIds, $districtRow['id']);
    }
    }

    $muniSql = "SELECT * FROM municipility WHERE municipility LIKE '%".$search."%'";
    $muniResult = mysqli_query($conn,$muniSql);
    if(mysqli_num_rows($muniResult)>0){
        while($muniRow = mysqli_fetch_array($muniResult)){
            array_push($muniIds, $muniRow['id']);
        }
    }

    $zoneMuniSql = "SELECT * FROM zone_municipility WHERE zone_id IN ('".implode("','",$zoneIds)."') OR district_id IN ('".implode("','",$districtIds)."')  OR municipility_id IN ('".implode("','",$muniIds)."')";
    $zoneMuniResult = mysqli_query($conn,$zoneMuniSql);

    $serialNo = 1;
?>

<?php include "../include/header.php" ?>

<div class="nav">
<a href="../index.php" class="create"><button>Home</button></a>
<a href="create.php" class="create"><button>create</button></a>
</div>
<form action="search.php" class="searchBar" method="post">
    <input type="text" name="search" id="" placeholder="Search Here...">
    <button type="submit">Filter</button>
</form>

<div class="container-fluid">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-primary">
        <th>S.N</th>
        <th>Province</th>
        <th>District</th>
        <th>Municipility</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php if(mysqli_num_rows($zoneMuniResult)>0){ ?>
            <?php while($row=mysqli_fetch_array($zoneMuniResult)){ ?>
                <tr>
                    <?php
                    $sql1 = "SELECT * FROM zone WHERE id=$row[zone_id]";
                    $result1 = mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_array($result1);
                    ?>

                    <td> <?php echo $serialNo ?></td>
                    <td> <?php echo $row1['zone'] ?></td>

                    <?php
                    $sql2 = "SELECT * FROM district WHERE id='$row[district_id]'";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_array($result2);
                    ?>

                    <td> <?php echo $row2['district'] ?></td>

                    <?php
                    $sql3 = "SELECT * FROM municipility WHERE id='$row[municipility_id]'";
                    $result3 = mysqli_query($conn,$sql3);
                    $row3 = mysqli_fetch_array($result3);
                    ?>
                    <td> <?php echo $row3['municipility'] ?></td>
                    <td> <?php echo $row['addeddate'] ?></td>
                    <td> <?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];} ?> </td>
                    <td> <?php echo $row['createdBy'] ?></td>
                    <td> <?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
                    <td>
                    <a href="update_status_inactive.php?id=<?php echo $row['id'] ?>" class="active"><?php if($row['status']=="active") echo "<button>Active</button>"?></a>
                    <a href="update_status_active.php?id=<?php echo $row['id'] ?>" class="inactive"><?php if($row['status']=="inactive") echo "<button>Inactive</button>"?></a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"> <i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                        <a href="delete_zone_municipility.php?id=<?php echo $row['id']; ?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
                    </td>
                </tr>
                <?php $serialNo=$serialNo+1; ?>
            <?php }?>
        <?php }?>
    <tbody>
</table>
</div>

<div class="data-empty"> 
    <?php if(mysqli_num_rows($zoneMuniResult)==0) echo "No results";?> 
</div>

</body>
</html>