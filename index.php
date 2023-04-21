<?php
 require_once "admin/connection.php";
 $sql = "SELECT * FROM province WHERE status='active'";
 $result = mysqli_query($conn,$sql);

 $sqlAbout = "SELECT * FROM aboutus";
 $resultAbout = mysqli_query($conn,$sqlAbout);
 $rowAbout = mysqli_fetch_array($resultAbout);
 $desc = $rowAbout['description'];

 $sqlMedia = "SELECT * FROM media WHERE status='active'";
 $resultMedia = mysqli_query($conn,$sqlMedia);
 $rowMedia = mysqli_fetch_array($resultMedia);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $rowAbout['keywords'];?>">
    <meta name="description" content="<?php if (strlen($desc) > 10) $desc = substr($desc, 0, 137) . '...'; echo $desc;?>">
    <title><?php echo $rowAbout['orgname'];?></title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
</head>
<body>
 <?php include "include/header.php" ?>
    
    <div class="main-home-page">
      <div class="background">
          <div class="row">
              <div class="col-md-9 d-flex align-items-center">
                <div>
                  <h1 class="text-light"><?php echo $rowMedia['title'];?></h1>
                  <p class="text-light"><?php echo $rowMedia['description'];?></p>
</div>
              </div>
              <div class="col-3">
                  <img src="admin/uploaded_images/<?php echo $rowMedia['img'];?>" style="width: 20vw;" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col mt-1">
                  <a href="#table"><button class="btn btn-secondary rounded">View Data</button></a>
              </div>
          </div>
      </div>
    </div>

    <div class="container pt-4" id="table">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>Province</th>
                <th>Total District</th>
                <th>Area</th>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($result)>0){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?php echo $row['province'] ?> </td>
                    <?php
                    $distCountSql = "SELECT * FROM province_district WHERE province_id='$row[id]' AND status='active'";
                    $distCountResult = mysqli_query($conn,$distCountSql);
                    ?>
                    <td><a href="Province/index.php?id=<?php echo $row['id'];?>"><?php echo mysqli_num_rows($distCountResult); ?></a></td>
                    <td><?php echo $row['area'] ?></td>
                  </tr>
              <?php } }?>
            </tbody>
        </table>
    </div>

    <section id="aboutUs">
      <div class="container bg-light text-dark p-3 my-3 rounded">
          <div class="row">
              <h1>About us</h1>
          </div>
          <div class="row">
              <p><?php echo $rowAbout['description'];?></p>
          </div>
      </div>
    </section>

 <?php include "include/footer.php" ?>

    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>