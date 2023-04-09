<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/table.css">
</head>
<body>
    <?php
    require_once "../connection.php";

    $search = $_POST['search'];
    $provinceIds = [];
    $districtIds = [];

    $provinceSql = "SELECT * FROM province WHERE province LIKE '%".$search."%'";
    $provinceResult = mysqli_query($conn,$provinceSql);
    if(mysqli_num_rows($provinceResult)>0){
        while($provinceRow=mysqli_fetch_array($provinceResult)){
        array_push($provinceIds, $provinceRow['id']);
        }
    }
    // $provinceIds = json_encode($provinceIds);


    $districtSql = "SELECT * FROM district WHERE district LIKE '%".$search."%'";
    $districtResult = mysqli_query($conn,$districtSql);
    if(mysqli_num_rows($districtResult)>0){
        while($districtRow = mysqli_fetch_array($districtResult)){
            array_push($districtIds, $districtRow['id']);
        }
    }
    $sqlProvDist = "SELECT * FROM province_district WHERE province_id IN ('".implode("','",$provinceIds)."') OR district_id IN ('".implode("','",$districtIds)."')";
    $resultProvDist = mysqli_query($conn,$sqlProvDist);  

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

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-primary">
        <th>S.No</th>
        <th>Province</th>
        <th>District</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
            <?php if (mysqli_num_rows($resultProvDist)>0){ ?>
            <?php while ($rowProvDist = mysqli_fetch_array($resultProvDist)){ ?>
                
        <tr>

            <?php
            $sql1 = "SELECT * FROM province WHERE id='$rowProvDist[province_id]'";
            $result1 = mysqli_query($conn,$sql1);
            $row1 = mysqli_fetch_array($result1);
            ?>

            <td> <?php echo $serialNo; ?> </td>
            <td> <?php echo $row1['province']; ?> </td>

            <?php
            $sql2 = "SELECT * FROM district WHERE id='$rowProvDist[district_id]'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_array($result2);
            ?>

            <td> <?php echo $row2['district']; ?> </td>
            <td> <?php echo $rowProvDist['addeddate']; ?> </td>
            <td> <?php if(empty($rowProvDist['updatedate'])){echo "-";} else{echo $rowProvDist['updatedate'];}?> </td>
             <td> <?php echo $rowProvDist['createdBy'] ?></td>
            <td> <?php if(empty($rowProvDist['updatedBy'])){echo "-";} else{echo $rowProvDist['updatedBy'];} ?></td>
            <td>
                <a href="update_status_inactive.php?id=<?php echo $rowProvDist['id'] ?>" class="active"><?php if($rowProvDist['status']=="active") echo "<button>Active</button>"?></a>
                <a href="update_status_active.php?id=<?php echo $rowProvDist['id'] ?>" class="inactive"><?php if($rowProvDist['status']=="inactive") echo "<button>Inactive</button>"?></a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $rowProvDist['id']; ?>"><button class="edit"> <i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                <a href="delete_province_district.php?id=<?php echo $rowProvDist['id'];?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
            </td>
        </tr>
        <?php $serialNo = $serialNo+1 ?>
        <?php } ?>
        <?php } ?>
    </tbody>  
</table>
    <div class="data-empty">
        <?php if(mysqli_num_rows($resultProvDist)==0) echo "No results" ?>
    </div>
</body>
</html>