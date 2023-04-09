<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Users</title>
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <?php include "../include/header.php" ?>
    <?php
    require_once "../connection.php";
    $you = $_SESSION['userid'];
    $sql = "SELECT * FROM users WHERE NOT (id=$you)";
    $result = mysqli_query($conn,$sql);

    $serialNo = 1;
    ?>

<?php if($_SESSION['role']=="admin"){ ?>
<div class="nav">
    <a href="register.php" class="create"> <button><i class="fa-solid fa-circle-plus"></i>Create</button></a>
</div>
<?php } ?>

<div class="container-fluid">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-primary text-light">
        <th>S.N.</th>
        <th>Img</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Username</th>
        <th>Role</th>
        <?php if($_SESSION['role']=="admin"){ ?>
        <th>Status</th>
        <th>Action</th>
        <?php } ?>
    </thead>
    <tbody>
        <?php if(mysqli_num_rows($result)>0){ ?>
            <?php while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $serialNo ?></td>
                    <td><img src="../uploaded_images/<?php echo $row['image'];?>" height="50px" alt="img"></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['contact'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['role'] ?></td>
                    <?php if($_SESSION['role']=="admin"){ ?>
                    <td>                                                                                                  
                    <a href="update_status_to_inactive.php?id=<?php echo $row['id'];?>" class="active"> <?php if($row['status']=="active") echo "<button>Active</button>" ?></a>
                    <a href="update_status_to_active.php?id=<?php echo $row['id'];?>" class="inactive"> <?php if($row['status']=="inactive") echo "<button>Inactive</button>" ?></a>
                    </td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit"><i class='fa-solid fa-pen-to-square'></i>edit</button></a>
                    <a href="changePw.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-secondary btn-sm">Change Pw</button></a>
                </td>
                <?php } ?>
                </tr>
                <?php $serialNo = $serialNo+1 ?>
            <?php }?>
        <?php }?>
    <tbody>
</table>
</div>
<?php include "../include/footer.php" ?>