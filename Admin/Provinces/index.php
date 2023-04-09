<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Province</title>
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <?php
require_once "../connection.php";
include "../include/header.php";
if($_SESSION['role']=="admin"){
    $sql = "SELECT * FROM province";
}else{
    $sql = "SELECT * FROM province WHERE status='active'";
}
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$serialNo = 1;
?>


<div class="nav">
<a href="create.php" class="create"><button><i class="fa-solid fa-circle-plus"></i>Create</button></a>
</div>
<form class="searchBar" action="search.php" method="post">
    <input type="text" name="search" id="" placeholder="Search Here...">
    <button type="submit">Filter</button>
</form>

<div class="container-fluid">
    <?php if(isset($_SESSION['reqSuccess'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong class="d-flex justify-content-center"> <?php echo $_SESSION['reqSuccess'];?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> <?php }?>
    
    <?php if(isset($_SESSION['pending'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong class="d-flex justify-content-center"> <?php echo $_SESSION['pending'];?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> <?php }?>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="bg-primary text-light">
                <th>S.No</th>
                <th>Province</th>
                <th>Area</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Status</th>
                <th>Action</th>
        </thead>
        <tbody>  
            <?php if ($num>0){ ?>
            <?php while ($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td> <?php echo $serialNo; ?> </td>
                <td> <?php echo $row['province']; ?> </td>
                <td> <?php echo $row['area']; ?> </td>
                <td> <?php echo $row['addeddate']; ?></td>
                <td> <?php if(empty($row['updatedate'])){echo "-";} else{echo $row['updatedate'];}?></td>
                <td> <?php echo $row['createdBy']; ?></td>
                <td> <?php if(empty($row['updatedBy'])){echo "-";} else{echo $row['updatedBy'];} ?></td>
                <td>
                    <a <?php if($_SESSION['role']=="admin"){ ?> href="update_status_inactive.php?id=<?php echo $row['id'];}?>" class="active"> <?php if($row['status']=="active") echo "<button>Active</button>"?></a>
                    <a href="update_status_active.php?id=<?php echo $row['id'];?>" class="inactive"> <?php if($row['status']=="inactive") echo "<button>Inactive</button>"?></a>
                </td>
                <td>
                    <?php
                    $sqlCheck = "SELECT * FROM province_edit_request WHERE province_id=$row[id]";
                    $resultCheck = mysqli_query($conn,$sqlCheck);
                    $rowCheck = mysqli_fetch_array($resultCheck);
                    ?>
                    <?php if(mysqli_num_rows($resultCheck)>0){ ?>
                        <?php if($_SESSION['role']=="admin"){ ?>
                        <a href="edit-request/index.php?id=<?php echo $rowCheck['province_id'];?>"><button class="btn btn-secondary btn-sm rounded">View/Edit Req <small class="badge text-bg-info"><?php echo mysqli_num_rows($resultCheck);?></small></button></a>
                        <?php }else{
                            $sqlCheck2 = "SELECT * FROM province_edit_request WHERE province_id=$row[id] AND user_id=$_SESSION[userid]";
                            $resultCheck2 = mysqli_query($conn,$sqlCheck2);
                            if(mysqli_num_rows($resultCheck2)>0){
                             ?>
                        <a href="edit-request/edit.php?id=<?php echo $rowCheck['province_id'];?>"><button class="btn btn-secondary btn-sm rounded">Edit Req</button></a>
                        <?php } } ?>
                    <?php } ?>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"><i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                    <?php if($_SESSION['role']=="admin"){ ?>
                    <a href="delete_province.php?id=<?php echo $row['id'];?>"><button class="delete"><i class="fa-solid fa-trash"></i>delete</button></a>
                    <?php } ?>
                </td>
            </tr>
            <?php $serialNo = $serialNo+1 ?>
            <?php } ?>
            <?php } ?>
        <tbody>
    </table>
</div>
    <div class="data-empty">
        <?php if($num==0) echo "Data not available" ?>
    </div>
</body>
</html>
<?php
include "../include/footer.php";
unset($_SESSION['reqSuccess']);
unset($_SESSION['pending']);
?>