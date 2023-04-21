<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Province Municipility</title>
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
    include "../include/header.php";
    if($_SESSION['role']=="admin"){
        $sql = "SELECT * FROM province_municipility";
    }else{
        $sql = "SELECT * FROM province_municipility WHERE status='active'";
    }
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    $serialNo = 1;
    ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Province Municipility</li>
    </ol>
    </nav>

<div class="nav">
<a href="create.php" class="create"><button><i class="fa-solid fa-circle-plus"></i>Create</button></a>
</div>
<form action="search.php" class="searchBar" method="post">
    <input type="text" name="search" id="" placeholder="Search Here...">
    <button type="submit">Filter</button>
</form>

<div class="container-fluid">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="bg-primary text-light">
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
            <?php if($num>0){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
            <tr>
                <?php
                    $provinceSql = "SELECT * FROM province WHERE id='$row[province_id]'";
                    $provinceResult = mysqli_query($conn,$provinceSql);
                    $provinceRow = mysqli_fetch_array($provinceResult);
                ?>
                <td> <?php echo $serialNo ?></td>
                <td> <?php echo $provinceRow['province'] ?></td>
                <?php
                    $districtSql = "SELECT * FROM district WHERE id='$row[district_id]'";
                    $districtResult = mysqli_query($conn,$districtSql);
                    $districtRow = mysqli_fetch_array($districtResult);
                ?>
                <td> <?php echo $districtRow['district'] ?></td>
                <?php
                    $muniSql = "SELECT * FROM municipility WHERE id='$row[municipility_id]'";
                    $muniResult = mysqli_query($conn,$muniSql);
                    $muniRow = mysqli_fetch_array($muniResult);
                ?>
                <td> <?php echo $muniRow['municipility'] ?></td>
                <td> <?php echo $row['addeddate'] ?></td>
                <td> <?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];} ?> </td>
                <td><?php echo $row['createdBy'] ?></td>
                <td> <?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
                <td>
                <a <?php if($_SESSION['role']=="admin"){ ?> href="update_status_inactive.php?id=<?php echo $row['id']; }?>" class="active"><?php if($row['status']=="active") echo "<button>Active</button>"?></a>
                <a href="update_status_active.php?id=<?php echo $row['id'] ?>" class="inactive"><?php if($row['status']=="inactive") echo "<button>Inactive</button>"?></a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"> <i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                    <?php if($_SESSION['role']=="admin"){ ?>
                    <a href="delete_province_municipility.php?id=<?php echo $row['id']; ?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
                    <?php }?>
                </td>
            </tr>
            <?php $serialNo=$serialNo+1; ?>
            <?php }?>
            <?php }?>
        <tbody>
    </table>
</div>
</div>
</div>
<div class="data-empty"> <?php if($num==0) echo "Data not available";?> </div>
</body>
</html>
<?php include "../include/footer.php" ?>