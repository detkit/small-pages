<?php include '../config/config.php';
if($_REQUEST['req'] != '') {
	if($_REQUEST['req'] == 'add_new') {
		$tenchuyenmuc = $_REQUEST['tenchuyenmuc'];
		$ndchuyenmuc = $_REQUEST['ndchuyenmuc'];

		$ins_sql = "INSERT INTO chuyenmuc (tenchuyenmuc,ndchuyenmuc) VALUES ('$tenchuyenmuc','$ndchuyenmuc')";
		$run_sql = mysqli_query ($db,$ins_sql);
	} elseif ($_REQUEST['req'] == 'delete_record') {
		$del_id = $_REQUEST['id'];
		$del_sql = "DELETE FROM chuyenmuc WHERE  id='$del_id'";
		$run_sql = mysqli_query ($db,$del_sql);
	}
}

	$sql = "SELECT * FROM chuyenmuc";
	$run = mysqli_query ($db,$sql);
	while($rows = mysqli_fetch_assoc ($run)) { ?>
		<tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php  echo $rows['tenchuyenmuc']; ?></td>
			<td><?php echo $rows['ndchuyenmuc']; ?></td>
			<td>
				<a class="btn btn-info btn-lg"  href="javascript:void(0);" onclick="edit_request('edit_req', <?php echo $rows['id'];?>);"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa </a>
				<a class="btn btn-danger btn-lg" href="javascript:void(0);" onclick="ajax_request('delete_record',<?php echo $rows['id']; ?>);"><i class="fa fa-trash" aria-hidden="true"></i> Xóa </a>
			</td>
		</tr>
	<?php }
?>