<?php
require_once "../admin/connection.php";
$id = $_GET['id'];
$sql = "SELECT municipility_id FROM province_municipility WHERE district_id='$id'";
$result = mysqli_query($conn,$sql);

$pId = $_GET['pId'];
$sqlProv = "SELECT * FROM province WHERE id='$pId'";
$resultProv = mysqli_query($conn,$sqlProv);
$rowProv = mysqli_fetch_array($resultProv);

$sqlDist = "SELECT * FROM district WHERE id='$id'";
$resultDist = mysqli_query($conn,$sqlDist);
$rowDist = mysqli_fetch_array($resultDist);

$serialNo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Municipility</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
</head>
<body>
  <?php include "../include/header.php" ?>

  <div class="container table-size">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item h5"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item h5"><a href="javascript:history.back()"><?php echo $rowProv['province'] ?></a></li>
      <li class="breadcrumb-item h5 active" aria-current="page"><?php echo $rowDist['district'] ?></li>
      <li class="breadcrumb-item h5 active" aria-current="page">Municipility</li>
    </ol>
    </nav>
  </div>

    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <th>S.N</th>
                <th>Municipility</th>
                <th>Total Wards</th>
                <th>Area</th>
            </thead>
            <tbody>
              <?php
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  $sqlMuni = "SELECT * FROM municipility WHERE id='$row[municipility_id]'";
                  $resultMuni = mysqli_query($conn,$sqlMuni);
              ?>
              <?php if(mysqli_num_rows($resultMuni)>0){ ?>
                <?php while($rowMuni=mysqli_fetch_array($resultMuni)){ ?>
                  <tr>
                    <td><?php echo $serialNo;?></td>
                    <td><?php echo $rowMuni['municipility'] ?></td>
                    <?php
                    $wardCountSql = "SELECT * FROM municipility_ward WHERE municipility_id='$rowMuni[id]' AND status='active'";
                    $wardCountResult = mysqli_query($conn,$wardCountSql);
                    ?>
                    <td><a href="../Municipility/index.php?id=<?php echo $rowMuni['id']?>&pId=<?php echo $pId?>&dId=<?php echo $id?>"><?php echo mysqli_num_rows($wardCountResult);?></a></td>
                    <td><?php echo $rowMuni['area'] ?></td>
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