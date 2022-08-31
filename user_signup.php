<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
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
		border: 4px  #009999;
		padding-top: 25px;
		padding-bottom: 30px;
		border-radius: 20px;
		opacity: 80%;
	}
	body  {
		background-image: url("Images/user8.jpg");
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size:cover;
	}
	button {
		background-color: #009999;
		border: 1px #a6a6a6;
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
		padding-left: 10px;
		padding-right: 10px;
	}
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color:#4f77aa;
		border: 1px #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #4f77aa;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #edeaf1;">
		<form action="user_signed_up.php" method="post">
			<table>
			<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>Customer SignUp</b></p></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input class="input" type="text" name="Firstname"  placeholder="First Name" required></td>
				</tr>
				
				<tr>
					<td>Last Name:</td>
					<td><input class="input" type="text" name="Lastname"  placeholder="Last Name" required></td>
				</tr>
				<tr>
					<td>Create New Password:</td>
					<td><input class="input" type="password" name="Password"  placeholder="New Password " required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input class="input" type="email" name="Email"  placeholder="Email" required></td>
				</tr><tr>
					<td>Gender:</td>
					<td><input class="input" type="text" name="Gender" required></td>
				</tr><tr>
					<td>Date of Birth:</td>
					<td><input class="input" type="date" name="Date_of_Birth"  placeholder="Date of Birth" required></td>
				</tr>
				<tr>
					<td>Customer ID:</td>
					<td><input class="input" type="number" name="idproof"  placeholder="Idproof" required></td>
				</tr>

				<tr>
					<td>Phone No:</td>
					<td><input class="input" type="number" name="Phone" placeholder=" Phone No" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
					<td colspan="2"><input style="font-size: 28px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>

			</table>
		</form> <br>
		
		<button type="button"><a href="user_login.php" style="color:#dbdbe3 ; text-decoration:none; font-size:25px;">Redirect to Customer Login Page</a></button>

	</div> 
</body>
</html>