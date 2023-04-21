<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/style/style.css">
</head>
<body>
	<div class="msb1" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper d-flex justify-content-between">
						<a class="navbar-brand" href="#">
							Nepal Location
						</a>
					</div>

				</div>

			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav1">

					<li><a href="http://localhost/nepalLocation/admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li><a href="http://localhost/nepalLocation/admin/users/index.php"><i class="fa fa-user"></i> Users</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Provinces/index.php"><i class="fa fa-puzzle-piece"></i> Province</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Zones/index.php"><i class="fa fa-heart"></i> Zone</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Districts/index.php"><i class="fa fa-heart"></i> District</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Province_district/index.php"><i class="fa fa-heart"></i> Province-District</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Zone_district/index.php"><i class="fa fa-heart"></i> Zone-District</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Municipility/index.php"><i class="fa fa-heart"></i> Municipility</a></li>
					<li><a href="http://localhost/nepalLocation/admin/province_municipility/index.php"><i class="fa fa-heart"></i> Province-Muni</a></li>
					<li><a href="http://localhost/nepalLocation/admin/Zone_municipility/index.php"><i class="fa fa-heart"></i> Zone-Muni</a></li>
					<li><a href="http://localhost/nepalLocation/admin/municipility_ward/index.php"><i class="fa fa-heart"></i> Muni Ward</a></li>

					<!-- Dropdown-->
					<?php if($_SESSION['role']=='admin'){ ?>
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<i class="fa fa-diamond"></i> Site Mgmt &#10095;
						  <span class="caret"></span>
            </a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="http://localhost/nepalLocation/admin/blog/index.php">Blog</a></li>
									<li><a href="http://localhost/nepalLocation/admin/socialmedia/index.php">Social Media</a></li>
									<li><a href="http://localhost/nepalLocation/admin/aboutus/index.php">About Us</a></li>
									<li><a href="http://localhost/nepalLocation/admin/media/index.php">Media</a></li>

								</ul>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>  
</div>
<script src="http://localhost/nepalLocation/admin/js/script.js"></script>
</body>
</html>