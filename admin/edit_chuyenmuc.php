<?php include '../config/config.php';
if ($_REQUEST['req_type'] == 'edit_req') {
	$sel_sql = "SELECT * FROM chuyenmuc WHERE id = '$_REQUEST[edit_id]'";
	$run_sql = mysqli_query ($db,$sel_sql);
		while ($rows = mysqli_fetch_assoc ($run_sql)) { ?>
				<div class="form-group">
					<label class="col-md-2 control-label ">Tên Chuyên Mục :</label>
					<div class="col-md-3">
						<input type="text" value="<?php echo $rows['tenchuyenmuc'];?>" id="ed_tenchuyenmuc" "class="form-control">
					</div>
					<label class="col-md-2 control-label ">Nội Dung Chuyên Mục</label>
					<div class="col-md-3">
						<input type="text" value="<?php echo $rows['ndchuyenmuc'];?>" id="ed_ndchuyenmuc"   class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<button class="btn btn-primary btn-lg" onclick="edit_request('edit_button',<?php echo $rows['id'];?>);">Edit Update</button>
					</div>
				</div>
		<?php }
	}elseif ($_REQUEST['req_type'] == 'edit_button') {
		$ed_sql = "UPDATE chuyenmuc SET tenchuyenmuc = '$_REQUEST[ed_tenchuyenmuc]', ndchuyenmuc = '$_REQUEST[ed_ndchuyenmuc]' WHERE id='$_REQUEST[edit_id]'";
		$run_sql = mysqli_query ($db,$ed_sql);
	}
?>


