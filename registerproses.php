<?php
	session_start();
	$connect = mysqli_connect("85.10.205.173:3306", "itb_beraksi_db", "itb_beraksi_db", "itb_beraksi_db");
	$fullname=$_GET["fullname"];
	$username=$_GET["username"];
	$email=$_GET["email"];
	$password=$_GET["password"];
	$query = "INSERT INTO user (username, password, fullname, email, image) VALUES ('$username', '$password', '$fullname', '$email', 'profdummy');";
	mysqli_query($connect, $query);
	$result = mysqli_query($connect, "select * from user where username = '$username';");
	$user = mysqli_fetch_array($result);
	$userid = $user['userid'];
	$_SESSION['userid'] = $userid;
	header("location:report.php?userid=$userid");
?>