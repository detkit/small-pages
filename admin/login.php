<?php
session_start ();
include_once 'includes/header.php';
?>
<?php
if (isset($_POST['sb'])) {
	// Assign vars
	$user = $_POST['us'];
	$pass = $_POST['pw'];
	$_SESSION['login']=$user;
	$sql = "SELECT * FROM user WHERE username='$user' and password='$pass'";
	$result = mysqli_query($db,$sql);
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {

		header('Location: index.php');
	}else{
		echo "Sai username and password";
	}
}
?>
	<form class="form-signin" method="post" action="">
		<h2 class="form-signin-heading">Sign In</h2>
		<label for="user"><i class="fa fa-user" aria-hidden="true"></i> User Name</label>
		<input type="text"  class="form-control" placeholder="Address user" name="us">
		<label for="inputPassword">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Address password" name="pw">
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="sb">Sign in</button>
	</form>

<?php include 'includes/footer.php'?>
