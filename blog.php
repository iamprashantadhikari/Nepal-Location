<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location | Blog</title>
</head>
<body>
<?php
require_once "admin/connection.php";
include "include/header.php";
?>

    <div class="d-flex justify-content-center table-size">
      <h1>Our Blog</h1>
    </div>
    <div class="main-card d-flex justify-content-between p-4 flex-wrap">

    <?php
    $sqlBlog = "SELECT * FROM blog WHERE status='active'";
    $resultBlog = mysqli_query($conn,$sqlBlog);
    if(mysqli_num_rows($resultBlog)){
        while($rowBlog=mysqli_fetch_array($resultBlog)){
    ?>
  
        <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" height="190px" style="object-fit:cover;" src="admin/uploaded_images/<?php echo $rowBlog['image'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $rowBlog['title'];?></h5>
            <p class="card-text blog-card-desc"><?php echo $rowBlog['description'];?></p>
            <a href="blog/seemore.php?id=<?php echo $rowBlog['id'];?>" class="btn btn-primary">See More</a>
        </div>
        </div>
    <?php }} ?>
    </div>

    <?php include "include/footer.php" ?>
</body>
</html>