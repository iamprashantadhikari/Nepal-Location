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
    $sql = "SELECT * FROM municipility WHERE municipility LIKE '%".$search."%'";
    $result = mysqli_query($conn,$sql);

    $serialNo = 1;
    ?>

<?php include "../include/header.php" ?>

    <div class="nav">
    <a href="../index.php" class="create"><button>Home</button></a>
    <a href="create_municipility.php" class="create"><button>create</button></a>
</div>
<form action="sMunicipility.php" class="searchBar" method="post">
    <input type="text" name="search" id="" placeholder="Search Here...">
    <button type="submit">Filter</button>
</form>

<div class="container-fluid">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-primary">
        <th>S.No</th>
        <th>Municipility</th>
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
            <td> <?php echo $serialNo; ?></td>
            <td> <?php echo $row['municipility']; ?> </td>
            <td> <?php echo $row['addeddate'] ?></td>
            <td> <?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];} ?></td>
            <td> <?php echo $row['createdBy'] ?></td>
            <td> <?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
            <td>
                <a href="update_muni_status_inactive.php?id=<?php echo $row['id'] ?>" class="active"> <?php if($row['status']=="active") echo "<button>Active</button>" ?></a>
                <a href="update_muni_status_active.php?id=<?php echo $row['id'] ?>" class="inactive"> <?php if($row['status']=="inactive") echo "<button>Inactive</button>" ?></a>
            </td> 
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"><i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                <a href="delete_municipility.php?id=<?php echo $row['id']; ?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
            </td>
        </tr>
        <?php $serialNo = $serialNo+1 ?>
            <?php } ?>
            <?php } ?>
    </tbody>
</table>
</div>
    <div class="data-empty">
        <?php if(mysqli_num_rows($result)==0) echo "No results" ?>
    </div>
</body>
</html>