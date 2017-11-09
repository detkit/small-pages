<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Chu</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
	<!-- Static navbar -->
	<nav class="nav navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
					<a class="logo" href="index.php"><img src="image/uefa-logo-black.svg" alt="uefa champie"></a>
					<li class="active"><a href="index.php"><i class="fa fa-2x fa-home" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div id="navbar" class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li><?php $sql = "SELECT * FROM baiviet LIMIT 5";
							$run = mysqli_query ($db,$sql);
							while ($rows = mysqli_fetch_array ($run)) { ?>
								<li><a href="chitiet.php?tenbaiviet=<?php echo $rows['tenbaiviet']; ?>"><?php echo  $rows["chuyenmuc"]; ?></li></a>
							<?php }?></li>
					<li><a href="dangky.php">Đăng Ký</a></li>
				</ul>
			</div> <!-- /container -->
		</nav>
	<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img  class="first-slide" src="image/rashford.jpg" alt="Marcus Rashford">
						<div class="container">
						<div class="carousel-caption">
							<h4>Rashford</h4>
							<p>Football Manchester United</p>
						</div>
						</div>
					</div>
					<div class="item">
						<img class="third-slide" src="image/youtube-tv.jpg" alt="youtube-tv">
						<div class="container">
						<div class="carousel-caption">
							<h4>Youtube</h4>
							<p>Youtube App Tv</p>
						</div>
						</div>
					</div>
					<div class="item">
						<img class="second-slide" src="image/uefa.jpg" alt="UEFA Champions League">
						<div class="container">
							<div class="carousel-caption">
							<h4>Champions League</h4>
							<p>UEFA</p>
						</div>
						</div>
					</div>
				</div>
				<a href="#slider" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="#slider" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
	</div>
</div>
			<div class="container">
				<div class="row">
					<?php
					$sql = "select * from baiviet";
					$rs = mysqli_query($db,$sql);
					while($row = mysqli_fetch_array($rs))
					{
					$anh = $row['anh'];
					?>
					<div class="media">
						<div class="media-left media-middle">
							<?php echo "<img class='media-object' src='admin/images/$anh' style='width: 330px;'>" ?>
						</div>
							<div class="media-body">
						<h2 class="media-heading"><a class="nav navbar-collapse" href="chitiet.php?tenbaiviet=<?php echo $row['tenbaiviet']; ?>"><?php echo $row['tenbaiviet']; ?></a></h2>
							<p class="lead"><?php echo $row['noidung']; ?></p>
							</div>
						</div>
					</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
	<div class="container">
		<div class="row">
			<footer>
				<div class="center_align">
					   <span class="fa-stack fa-lg">
					  <a href="#"><i class="fa fa-circle fa-2x"></i>
						  <i class="fa  fa-facebook-square font_awesome_icons" aria-hidden="true"></i></a>
					</span>
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-2x"></i>
					    <i class="fa fa-twitter font_awesome_icons"></i>
					</span>
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-2x"></i>
					    <i class="fa fa-instagram font_awesome_icons"></i>
					</span>
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					    <i class="fa fa-apple font_awesome_icons"></i>
					</span>
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-2x"></i>
					    <i class="fa fa-google font_awesome_icons"></i>
					</span>
					<p>&copy;VN 2017-Đăng Quang</p>
				</div>
			</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

