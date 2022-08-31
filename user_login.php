<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
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
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color:white;
		font-weight: bold;
		background: scroll;
		border: 10px  #242424;
		border-radius: 15px;
		opacity: 85%;
	}
	body  {
		background-image: url("Images/user.png");
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: 1900px 900px;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
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
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color:  #b76f20;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: white;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-color: #242424;">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: #ddd6ce;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Customer ID:</td>
					<td><input class="input" type="number" name="idproof" placeholder="Enter Customer ID" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button"style="text-decoration: none;  font-size: 25px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: #ddd6ce;"><b>New User?</b></td>
				<td style="color: #ddd6ce;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color:#191919;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color:#191919;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
		
		<button type="button"><a href="index.php" style="color: #191919 ; text-decoration:none; font-size:25px;">Redirect to Homepage</a></button>

	</div>
</body>
</html>