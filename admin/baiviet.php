<?php session_start ();
if(!isset($_SESSION['login'])) header('location:index.php');
?>
<?php include 'data_baiviet.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bai Viet</title>
	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
	<!--- Custom styles for this iconsAwesome --->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script>
		function back () {
			window.location = "index.php";
		}
		function index () {
			window.location="../index.php";
		}
</script>
</head>
	<body>
	<a href="#" onclick="index()" class="nav navbar-brand">Trang chủ</a>
	<div class="container">
		<div class="jumbotron">
			<h1><i class="fa fa-sticky-note-o"></i> Bài Viết</h1>
		</div>
		<form  action="" class="form-horizontal" id="form_data" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label class="col-md-2 control-label ">Tên Bài Viết</label>
			<div class="col-lg-8">
				<input type="text" id="tenbaiviet" name="tenbaiviet"class="form-control">
			</div>
			</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Nội Dung</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="noidung" name="noidung">
						</div>
				</div>
			<div class="form-group">
				<label class="col-md-2 control-label" >Chuyên Mục</label>
				<div class="col-lg-8">
					<select class="form-control" id="chuyenmuc" name="chuyenmuc">
						<?php include '../config/config.php';
							$sel_sql = "SELECT * FROM chuyenmuc";
							$run_sql = mysqli_query($db,$sel_sql);
							While ($rows = mysqli_fetch_assoc ($run_sql)) { ?>
						<option><?php
							echo $rows['tenchuyenmuc']; ?></option>
					<?php	} ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Chi Tiết</label>
				<div class="col-lg-8">
					<textarea class="form-control" id="chitiet" name="chitiet"  rows="5" ><?php echo $chi; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Ảnh</label>
				<div class="col-md-4">
					<input type="file" id="anh" name="anh">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary btn-lg" name="button_add"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>

				</div>
			</div>
		</form>

		<table class="table table-bordered">
			<thead>
				<tr class="success">
					<th>STT</th>
					<th>Tên Bài Viết</th>
					<th>Nội Dung</th>
					<th>Chuyên Mục</th>
					<th>Chi tiết</th>
					<th>Ảnh</th>
					<th>Tùy Chọn</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$query = mysqli_query ($db,"select * from baiviet");
			while ($rows = mysqli_fetch_array ($query,MYSQLI_ASSOC)) { ?>
			<tr>
				<td> <?php echo $rows["id"]; ?></td>
				<td><?php echo $rows["tenbaiviet"]; ?></td>
				<td> <?php echo $rows["noidung"]; ?></td>
				<td><?php echo $rows["chuyenmuc"]; ?></td>
				<td>'<?php echo $rows["chitiet"]; ?></td>
				<?php echo '<td><img src="images/' . $rows["anh"] . '"style="width: 200px; height: 150px;"></td>'; ?>
				<td><a href="edit_baiviet.php?id=<?php  echo $rows['id']; ?>"  class="btn btn-success btn-lg"><i class="fa fa-pencil-square-o"></i> Edit</a>
				<?php echo '<a class="btn btn-danger btn-lg" href="?delete=' . $rows["id"] . '&images=' . $rows["anh"] . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td></tr>';
				}
			?>

			</tbody>
		</table>
	</div>
	<a href="#" onclick="back()" class="nav navbar-left navbar-brand"><i class="fa fa-2x fa-arrow-left" aria-hidden="true"></i></a>
	<footer class="blog-footer">
		<p>Admin &copy; 2017 </p>
	</footer>
	</body>
</html>