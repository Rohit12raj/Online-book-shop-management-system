<?php
ob_start();
session_start();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include("includes/connection.php");
	$uname = mysql_real_escape_string($_POST['username']);
	$pword = mysql_real_escape_string($_POST['password']);
	$query = mysql_query("select username, password from register where username = '$uname' && password = '$pword'");
	$count_users = mysql_num_rows($query);
	if ($count_users == 1) {
		$_SESSION['username'] = $uname;
		echo "<script type=\"text/javascript\">alert('Login Successful.');window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Wrong username or password entered.');window.location.href='login.php';</script>";
	}
}
ob_flush();
?>