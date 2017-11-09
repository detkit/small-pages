<?php include 'config/config.php'; ?>
<?php
if(isset($_POST['sb'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "insert into user(username,password) values ('$user','$pass')";
	$q = mysqli_query ( $db, $sql );
	if ( $q ) {
		echo "ok";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký</title>
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
				<li><?php $sql = "SELECT * FROM baiviet";
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
				<div class="page-header">
				<h3 class="lead">Đăng Ký</h3>
				</div>
				<form method="post" action="" class="form-horizontal">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="sb" class="btn btn-primary pull-right">Add Account</button>
					</div>
				</form>
				</div>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	</body>
</html>