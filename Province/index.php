<?php
require_once "../admin/connection.php";
$id = $_GET['id'];
$sql = "SELECT district_id FROM province_district WHERE province_id='$id' AND status='active'";
$result = mysqli_query($conn,$sql);

$sqlProv = "SELECT * FROM province WHERE id='$id'";
$resultProv = mysqli_query($conn,$sqlProv);
$rowProv = mysqli_fetch_array($resultProv);

$serialNo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Districts</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
</head>
<body>
  <?php include "../include/header.php" ?>

  <div class="container table-size">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item h5"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item h5 active" aria-current="page"><?php echo $rowProv['province'];?></li>
      <li class="breadcrumb-item h5 active" aria-current="page">District</li>
    </ol>
    </nav>
  </div>

    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>S.N</th>
                <th>District</th>
                <th>Total Municipility</th>
                <th>Area</th>
            </thead>
            <tbody>
              <?php
                if(mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_array($result)){
                    $sqlDist = "SELECT * FROM district WHERE id='$row[district_id]'";
                    $resultDist = mysqli_query($conn,$sqlDist);
              ?>
              <?php if(mysqli_num_rows($resultDist)>0){ ?>
                <?php while($rowDist=mysqli_fetch_array($resultDist)){ ?>
                  <tr>
                    <td><?php echo $serialNo; ?></td>
                    <td><?php echo $rowDist['district'] ?></td>
                    <?php
                    $muniCountSql = "SELECT * FROM province_municipility WHERE district_id='$row[district_id]' AND status='active'";
                    $muniCountResult = mysqli_query($conn,$muniCountSql);
                    ?>
                    <td><a href="../District/index.php?id=<?php echo $rowDist['id']?>&pId=<?php echo $id?>"><?php echo mysqli_num_rows($muniCountResult);?></a></td>
                    <td><?php echo $rowDist['area'] ?></td>
                  </tr>
                <?php $serialNo = $serialNo+1; ?>
              <?php } } } }?>
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