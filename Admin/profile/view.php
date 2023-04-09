<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | View Profile</title>
</head>
<body>
    <?php
        include "../include/header.php";
        require_once "../connection.php";

        $user = $_SESSION['userid'];
        $sql = "SELECT * FROM users WHERE id=$user";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container py-2">
        <img class="rounded-circle img-fluid ml-5" style="width: 110px; height:110px;" src="../uploaded_images/<?php echo $row['image'] ?>" alt="img">
        <span class="float-right pt-3">
            <a href="edit.php"> <button type="button" class="btn btn-info">Edit</button></a>
            <a href="changePw.php"> <button type="button" class="btn btn-secondary">Change Pw</button></a>
        </span>
        <table class="table">
            <tr>
                <th>First Name</th>
                <td><?php echo $row['firstname'] ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $row['lastname'] ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $row['username'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <tr>
                <th>Contact No</th>
                <td><?php echo $row['contact'] ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['address'] ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?php echo $row['role'] ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
<?php include "../include/footer.php" ?>