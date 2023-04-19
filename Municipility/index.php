<?php
require_once "../admin/connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM municipility_ward WHERE municipility_id='$id'";
$result = mysqli_query($conn,$sql);
$serialNo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Ward</title>
    <link rel="stylesheet" href="../admin/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item h4"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item h4"><a href="javascript:history.back()">District</a></li>
      <li class="breadcrumb-item h4"><a href="javascript:history.back()">Municipility</a></li>
      <li class="breadcrumb-item h4 active" aria-current="page">Ward</li>
    </ol>
    </nav>
  </div>
    <div class="container">
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

    <script src="admin/bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery-3.5.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/js/script.js"></script>
</body>
</html>