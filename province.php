<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Province</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
</head>
<body>
    <?php
    require_once "admin/connection.php";
    include "include/header.php";
    $sql = "SELECT * FROM province WHERE status='active'";
    $result = mysqli_query($conn,$sql);
    $serialNo = 1;
    ?>

    <div class="container table-size" id="table">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>S.N</th>
                <th>Province</th>
                <th>Area</th>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($result)>0){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?php echo $serialNo ?></td>
                    <td><?php echo $row['province'] ?> </td>
                    <td><?php echo $row['area'] ?></td>
                  </tr>
              <?php $serialNo=$serialNo+1; } }?>
            </tbody>
        </table>
    </div>

<?php include "include/footer.php" ?>

    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>