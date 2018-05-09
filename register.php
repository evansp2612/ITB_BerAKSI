<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/register.css">
<script src="script.js"></script>

<body>
	<center>
		<form action="registerproses.php" method="get" id="myForm">
			<center style="font-size: 30px"><b>——— SIGNUP ———</b></center><br>
			<table>
				<tr><td>Your Name</td><td colspan="2"><input name="fullname" type="text" maxlength="20"/></td></tr>
				<tr><td>Username</td><td><input name="username" type="text" type="text" maxlength="20" onblur="validate('username', this.value)"/></td><td width="17px"><div id='username'></div></td></tr>
				<tr><td>Email</td><td><input name="email" type="text" maxlength="20" onblur="validate('email', this.value)"/></td><td><div id='email'></div></td></tr>
				<tr><td>Password</td><td colspan="2"><input name="password" type="password" maxlength="20"/></td></tr>
				<tr><td>Confirm Password</td><td colspan="2"><input name="confirmpassword" type="password" maxlength="20"/></td></tr>
				<tr><td colspan="3" height="10"></td></tr>			
				<tr><td><a href=index.php>Already have an account?</a></td>
				<td align="right" colspan="2"><input type='button' id='button' onclick="checkForm()" value="REGISTER"></td></tr>
			</table>
		</form>
	</center>
</body>