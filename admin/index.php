<?php
session_start ();
if(!isset($_SESSION['login'])) header('location:login.php'); ?>
<?php include_once 'includes/header.php'; ?>
<script>
	function cm () {
		window.location="chuyenmuc.php";
	}
	function bv () {
		window.location="baiviet.php";
	}
	function back() {
		window.location="logout.php";
	}
</script>
<a href="#" onclick="back()" class="nav navbar-fixed-top navbar-brand">Log Out</a>
<div class="form-signin">
	<a href="#" onclick="cm()" class="btn btn-primary btn-lg"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Chuyên Mục </a>
	<a href="#" onclick="bv()" class="btn btn-primary btn-lg"><i class="fa fa-sticky-note" aria-hidden="true"></i> Bài Viết </a>
</div>

<?php include 'includes/footer.php'; ?>

