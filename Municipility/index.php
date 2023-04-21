<?php
require_once "../admin/connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM municipility_ward WHERE municipility_id='$id'";
$result = mysqli_query($conn,$sql);

$pId = $_GET['pId'];
$sqlProv = "SELECT * FROM province WHERE id='$pId'";
$resultProv = mysqli_query($conn,$sqlProv);
$rowProv = mysqli_fetch_array($resultProv);

$dId = $_GET['dId'];
$sqlDist = "SELECT * FROM district WHERE id='$id'";
$resultDist = mysqli_query($conn,$sqlDist);
$rowDist = mysqli_fetch_array($resultDist);

$sqlMuni = "SELECT * FROM municipility WHERE id='$id'";
$resultMuni = mysqli_query($conn,$sqlMuni);
$rowMuni = mysqli_fetch_array($resultMuni);

$serialNo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Ward</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
</head>
<body>
  <?php include "../include/header.php" ?>

  <div class="container table-size">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item h5"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item h5"><a href="../province/index.php?id=<?php echo $pId ?>"><?php echo $rowProv['province'] ?></a></li>
      <li class="breadcrumb-item h5"><a href="javascript:history.back()"><?php echo $rowDist['district'] ?></a></li>
      <li class="breadcrumb-item h5 active" aria-current="page"><?php echo $rowMuni['municipility'] ?></li>
      <li class="breadcrumb-item h5 active" aria-current="page">Ward</li>
    </ol>
    </nav>
  </div>

    <div class="container table-size">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>S.N</th>
                <th>Ward No</th>
                <th>Ward Name</th>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($result)>0){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?php echo $serialNo;?></td>
                    <td><?php echo $row['ward_no'] ?></td>
                    <td><?php echo $row['ward_name'] ?></td>
                  </tr>
                  <?php $serialNo = $serialNo+1; ?>
              <?php } }?>
            </tbody>
        </table>
    </div>

    <?php
    require_once "../admin/connection.php";
    include "../include/footer.php";
    ?>

    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>