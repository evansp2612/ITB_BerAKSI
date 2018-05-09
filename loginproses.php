<?php
	session_start();
	$username = $_GET["username"];
	$password = $_GET["password"];
	$connect = mysqli_connect("85.10.205.173:3306", "itb_beraksi_db", "itb_beraksi_db", "itb_beraksi_db");
	$login = mysqli_query($connect, "select * from user where username = '$username' and password = '$password';");
	$result = mysqli_num_rows($login);
	if ($result > 0) {
		$user = mysqli_fetch_array($login);
		$userid = $user['userid'];
		$_SESSION['userid'] = $userid;
		header("location:report.php?userid=$userid");
	}
	else
		header("location:index.php"); 

?>