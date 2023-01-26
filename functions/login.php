<?php
	require('../dbconnect.php');
	session_start();
	if (isset($_POST['submit-data'])) {
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		
		$query = "SELECT * FROM `users` WHERE ( username='$username' OR email='$username' ) AND password='$password'";
		$result = mysqli_query($con, $query);
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['username'] = $username;
			while($row=mysqli_fetch_array($result)) {
				echo "<meta http-equiv='refresh' content='1;url=../dashboard.php' />";
			}
		}
		else {
			echo "<meta http-equiv='refresh' content='1;url=../index.php' />";
		}
	}
?>