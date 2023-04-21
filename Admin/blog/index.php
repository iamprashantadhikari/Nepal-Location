<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Blog</title>
    <link rel="stylesheet" href="../style/table.css">
</head>
<body>
<div class="main-div">
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php include "../include/header.php";
    $sql = "SELECT * FROM blog";
    $result = mysqli_query($conn,$sql);
    $serialNo = 1;
    ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
    </nav>

    <div class="nav">
        <a href="create.php" class="create"> <button><i class="fa-solid fa-circle-plus"></i>Create</button></a>
    </div>
    <div class="container-fluid">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-primary text-light">
                <th>S.N</th>
                <th>Created Date</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Updated Date</th>
                <th>Updated By</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $serialNo;?></td>
                    <td><?php echo $row['addeddate'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><img src="../uploaded_images/<?php echo $row['image'];?>" height="50px" alt="img"></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['createdBy'];?></td>
                    <td><?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];} ?></td>
                    <td><?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
                    <td>
                        <a href="update_status_to_inactive.php?id=<?php echo $row['id'];?>" class="active"><?php if($row['status']=="active") echo "<button>Active</button>" ?></a>
                        <a href="update_status_to_active.php?id=<?php echo $row['id'];?>" class="inactive"> <?php if($row['status']=="inactive") echo "<button>Inactive</button>" ?></a>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"><i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                    <a href="delete.php?id=<?php echo $row['id'];?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
                    </td>
                </tr>
                <?php $serialNo=$serialNo+1; }} ?>
            </tbody>
        </table>    
    </div>
    </div>
</div>
</body>
</html>