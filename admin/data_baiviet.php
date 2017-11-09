<?php include  '../config/config.php';
$ten = "";
$noi = "";
$chi = "";
$chuyen = "";
if(isset($_POST['button_add'])) {
$query = mysqli_query ($db,"insert into baiviet values('','".$_POST["tenbaiviet"]."','".$_POST["noidung"]."','".$_POST["chitiet"]."','".$_POST["chuyenmuc"]."','".$_FILES["anh"]["name"]."')") or die ("Cannot query with database");
if($query) {
$tt  = "images/";
$file = $tt . basename ($_FILES["anh"]["name"]);
$imageFile = pathinfo ($file, PATHINFO_EXTENSION);
move_uploaded_file($_FILES["anh"]["tmp_name"], $file);
	}
}
if(isset($_GET["delete"])) {
	$query = mysqli_query ($db,"delete from baiviet where id='".$_GET["delete"]."'");
	if ($query) {
		unlink("images/".$_GET["images"]);
	}
}
?>