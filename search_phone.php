<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
</head>
<style>
div {
		width: 55%;
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
	button {
		background-color: #519dbf;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
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
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: #e6b800;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
		<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>View Employee Details</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="search_phone(1).php" method="post">
			<tr>
				<td>Enter Employee Phone Number: </td>
				<td><input class="input" type="number" name="Phone" placeholder="Employee Phone no" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 28px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="View Details"></td>
			</tr>
			</form>
		</table>
	</body>
</html>