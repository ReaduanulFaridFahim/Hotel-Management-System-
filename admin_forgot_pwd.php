<!DOCTYPE html>
<html>
<head>
	<title>Admin Forgot Password</title>
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
		border: 4px #009999;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
		color: #519dbf;
	}
	body  {
		background-image: url("Images/bg.jpg");
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
		  font-family: sans-serif;
	}
	button {
		background-color:  #519dbf;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
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
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color:  #4f77aa;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		color:  #519dbf;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #FFFFF0;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<form method="post" action="admin_forgot_pwd1.php">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>Admin Forgot Password</b></p></td>
				</tr>
				<tr>
					<td>Enter UserID:</td>
					<td><input class="input" type="text" name="ManagerID" placeholder="Enter user ID" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>