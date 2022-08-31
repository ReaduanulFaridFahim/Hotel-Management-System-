<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 15px;
		color: #519dbf;
		border: 6px ;
		border-radius: 15px;
	}
	body  {
		background-image: url("Images/bg.jpg");
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #519dbf;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #FFFFF0;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: #4f77aa;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: #4f77aa;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color:  #519dbf;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color:  #FFFFF0;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #dbdbe3;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #519dbf;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="ManagerID" placeholder="Enter Manager ID"  required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="Password"  placeholder="Enter password" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #519dbf;"><b>New Manager?</b></td>
				<td style="color: #519dbf;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;  color:#dbdbe3" href="admin_signup.php">Manager SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;  color:#dbdbe3" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
		<br>
		<button type="button"><a href="index.php" style="color: #dbdbe3 ; text-decoration:none; font-size:25px;">Redirect to Homepage</a></button></div>
</body>
</html>