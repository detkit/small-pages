<?php session_start ();
if(!isset($_SESSION['login'])) header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Chuyen muc</title>
	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
	<!--- Custom styles for this iconsAwesome --->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script>
		function ajax_request (req,id) {
			var tenchuyenmuc = document.getElementById('tenchuyenmuc').value;
			var ndchuyenmuc = document.getElementById('ndchuyenmuc').value;
			if(req == undefined) {
				req = '';
				id = '';
			} else if(req == 'add_new') {
				id = '';
			}

			if(tenchuyenmuc == ' ') {
				tenchuyenmuc = '';
			}

			if(ndchuyenmuc == '') {
				ndchuyenmuc = '';
			}

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var td_div = document.getElementById('td');
					td_div.innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','data_chuyenmuc.php?id='+ id +'&req=' + req + '&tenchuyenmuc=' + tenchuyenmuc + '&ndchuyenmuc=' + ndchuyenmuc, true);
			xmlhttp.send();
		}

		function edit_request (req_type, edit_id) {
			if(req_type == 'edit_req') {
				ed_tenchuyenmuc = '';
				ed_ndchuyenmuc  = '';
			}else {
				var ed_tenchuyenmuc = document.getElementById('ed_tenchuyenmuc').value;
				var ed_ndchuyenmuc = document.getElementById('ed_ndchuyenmuc').value;
			}
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var form_data = document.getElementById('form_data');
					form_data.innerHTML = xmlhttp.responseText;
					if(req_type == 'edit_button') {
						window.location.reload();
					}
				}
			}
			xmlhttp.open('GET','edit_chuyenmuc.php?req_type=' + req_type + '&edit_id=' + edit_id + '&ed_tenchuyenmuc=' + ed_tenchuyenmuc + '&ed_ndchuyenmuc='
				+ ed_ndchuyenmuc,true);
			xmlhttp.send();
		}
		function back () {
			window.location="index.php";
		}
		function index () {
			window.location="../index.php";
		}
	</script>
</head>
<body onload="ajax_request();">
<a href="#" onclick="index()" class="nav navbar-left navbar-brand">Trang chủ</a>
<div class="container">
		<div class="jumbotron">
			<h1 class="display-3"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Chuyên Mục </h1>
		</div>
			<div class="form-horizontal" id="form_data">
				<div class="form-group">
				<label class="col-md-2 control-label ">Tên Chuyên Mục :</label>
				<div class="col-md-3">
					<input type="text" id="tenchuyenmuc" class="form-control">
				</div>
					<label class="col-md-2 control-label ">Nội Dung Chuyên Mục</label>
					<div class="col-md-3">
						<input type="text" id="ndchuyenmuc" class="form-control">
				</div>
			</div>
				<div class="form-group">
					<div class="col-lg-12 text-right">
						<button class="btn btn-primary btn-lg btn" onclick="ajax_request('add_new');"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
					</div>
				</div>
			</div>
				<table class="table table-responsive">
					<thead>
						<tr class="info">
							<td>STT</td>
							<td>Tên Chuyện Mục</td>
							<td>Nội Dung Chuyện Mục</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody id="td">
					</tbody>
				</table>
			</div>
<a href="#" onclick="back()" class="nav navbar-left navbar-brand"><i class="fa fa-2x fa-arrow-left" aria-hidden="true"></i></a>
<footer class="blog-footer">

	<p>Admin &copy; 2017 </p>
</footer>
</body>
</html>










