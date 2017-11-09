<?php include 'config/config.php'; ?>
<?php
	if(isset($_GET['tenbaiviet'])) {
		$tenbaiviet = $_GET['tenbaiviet'];
		$sql = "select * from baiviet where tenbaiviet = '$tenbaiviet'";
		$run = mysqli_query ($db,$sql);
		$row = mysqli_fetch_assoc ($run);
		$anh = $row['anh'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $row['tenbaiviet']; ?></title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		function lo () {
			window.location=('index.php');
		}
	</script>
</head>

<body>
<nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<ul class="nav navbar-nav">
				<a class="logo" href="index.php"><img src="image/uefa-logo-black.svg" alt="uefa champie"></a>
				<li class="active"><a href="index.php"><i class="fa fa-2x fa-home" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div id="navbar" class="nav navbar-right">
			<ul class="nav navbar-nav">
				<li><?php $sql = "SELECT * FROM baiviet LIMIT 5";
					$run = mysqli_query ($db,$sql);
					while ($rows = mysqli_fetch_assoc ($run)) { ?>
				<li><a href="chitiet.php?tenbaiviet=<?php echo $rows['tenbaiviet']; ?>"><?php echo  $rows["chuyenmuc"]; ?></li></a>
				<?php }?>
				<li><a href="dangky.php">Đăng Ký</a></li>
			</ul>
		</div>
	</div> <!-- /container -->
</nav>

<div class="container">
	<div class="col-lg-9 col-md-offset-2">
		<h3><?php echo $row['chuyenmuc']; ?></h3>
		<h3><?php echo $row['tenbaiviet']; ?></h3>
				<span><?php echo $row['noidung']; ?></span>
	<?php echo "<img src='admin/images/$anh' style='width: 650px'>;"?>
		<div class="lead"><?php echo $row['chitiet']; ?></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<footer>
			<div class="center_align">
					   <span class="fa-stack fa-lg">
					  <a href="#"><i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-stack-2x fa-facebook font_awesome_icons"></i></a>
					</span>
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					    <i class="fa fa-twitter font_awesome_icons"></i>
					</span>
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					    <i class="fa fa-instagram font_awesome_icons"></i>
					</span>
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					    <i class="fa fa-apple font_awesome_icons"></i>
					</span>
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					    <i class="fa fa-google font_awesome_icons"></i>
					</span>
				<p>&copy;VN 2017- All Machine Learning</p>
			</div>
		</footer>
</body>
</html>