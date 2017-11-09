<?php include 'includes/header.php'; ?>
<script>
	function back () {
		window.location = "baiviet.php";
	}
</script>
<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql ="select * from baiviet where id ='$id'";
	$query = mysqli_query($db,$sql);
	while ($a = mysqli_fetch_array($query)) {
		?>
			<form action ="" method ="post" enctype ="multipart/form-data" class="form-horizontal">
				<table class="table table-responsive">
					<tr>
						<td>Tên Bài Viết: <br/><input type ="text" name ="tenbaiviet" value="<?php echo $a['tenbaiviet'];?>"></td>
					</tr>
					<tr>
						<td>Nội Dung :<br/><input type="text" name ="noidung" value="<?php echo $a['noidung'];?>"></td>
					</tr>
					<tr>
						<td> Chi Tiết :<br/><textarea name = "chitiet" rows="9"><?php echo $a['chitiet'];?></textarea></td>
					</tr>
					<tr>
						<td>Chuyên Mục :<br><select class="form-control" name="chuyenmuc">
								<?php include '../config/config.php';
								$sel_sql = "SELECT * FROM chuyenmuc";
								$run_sql = mysqli_query($db,$sel_sql);
								While ($rows = mysqli_fetch_assoc ($run_sql)) { ?>
									<option><?php
										echo $rows['tenchuyenmuc']; ?></option>
								<?php	} ?></select></td>
					</tr>
					<tr>
						<td>Ảnh: <input type ="file" name ="anh"><img src="images/<?php echo $i = $a['anh'];?>" style="width:200px; height:150px" /></td>
					</tr>
					<tr>
						<td><input type="submit"  width="100px" height="30px" alt="submit" name ="btn_sua" value ="Gửi bài"></td>
					</tr>
				</table>
			</form>
		<?php
	}

}
if(isset($_POST['btn_sua'])) {
	$tenbaiviet = $_POST['tenbaiviet'];
	$noidung = $_POST['noidung'];
	$chitiet = $_POST['chitiet'];
	$chuyenmuc = $_POST['chuyenmuc'];
	$anh = $_FILES['anh']['name'];
	move_uploaded_file ( $_FILES['anh']['name'], "images/" . $anh );
		$sql = "update baiviet set tenbaiviet='$tenbaiviet',noidung='$noidung',chitiet='$chitiet',chuyenmuc= '$chuyenmuc',anh='$anh' WHERE id='$id'";
	$q = mysqli_query ( $db,$sql ) or die( "nát" );
	if ( $q ) {
		echo '<script>alert("Sửa thành công")</script>';
	}
}
?>
<a href="#" onclick="back()" class="nav navbar-left navbar-brand"><i class="fa fa-2x fa-arrow-left" aria-hidden="true"></i></a>
