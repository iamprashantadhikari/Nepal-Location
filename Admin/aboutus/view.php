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
    <div><?php include "../include/sidebar.php" ?></div>
    <div id="child-div" class="child-div child-div-full">
    <?php
     include "../include/header.php";
     $id = $_GET['id'];
     $sql = "SELECT * FROM aboutus WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
    ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:history.back()">AboutUs</a></li>
        <li class="breadcrumb-item active" aria-current="page">View</li>
    </ol>
    </nav>
    <div class="container py-4">
        <table class="table">
            <tr>
                <th>Logo</th>
                <td><img src="../uploaded_images/<?php echo $row['logo'] ?>" alt=""></td>
            </tr>
            <tr>
                <th>Organization</th>
                <td><?php echo $row['orgname']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['address']; ?></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><?php echo $row['contact']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['gmail']; ?></td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?php echo $row['addeddate']; ?></td>
            </tr>
            <tr>
                <th>Created By</th>
                <td><?php echo $row['createdBy']; ?></td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td><?php echo $row['keywords']; ?></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><?php echo $row['description']; ?></td>
            </tr>
        </table>
    </div>
    </div>
</div>
<?php include "../include/footer.php" ?>