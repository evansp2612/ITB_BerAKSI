<?php
	$value = $_GET['query'];
	$formfield = $_GET['field'];
	$connect = mysqli_connect("85.10.205.173:3306", "itb_beraksi_db", "itb_beraksi_db", "itb_beraksi_db");
	// Check Valid or Invalid user name when user enters user name in username input field.
	if ($formfield == "username") {
		$username = mysqli_query($connect, "select * from user where username = '$value'");
		$result = mysqli_num_rows($username);
		if ($result == 0) {
			if ($value != '')
				echo "✔";
			else
				echo "✘";
		}
		else
			echo "✘";
	}
	// Check Valid or Invalid email when user enters email in email input field.
	if ($formfield == "email") {
		$email = mysqli_query($connect, "select * from user where email = '$value'");
		$result = mysqli_num_rows($email);
		if ($result == 0) {
			if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value))
				echo "✔";
			else
				echo "✘";
		}
		else
			echo "✘";
	}
?>