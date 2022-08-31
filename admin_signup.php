<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 35%;
		margin-left: 35%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px  ;
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 20px;
		color: #519dbf;
	}
	body  {
		background-image: url("Images/bg.jpg");
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: #009999;
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
	input:hover, input:active 
	{
		background-color: #4f77aa;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #dbdbe3;">
		<form action="admin_signed_up.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #519dbf;"><b>Manager SignUp</b></p></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="number" name="EmployeeID"  placeholder="Enter Employee ID" required></td>
				</tr>
				<tr>
					<td>Manager ID:</td>
					<td><input class="input" type="number" name="ManagerID"  placeholder="Enter user Manager ID" required></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input class="input" type="text" name="FirstName"  placeholder="Enter Your First Name" required></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input class="input" type="text" name="LastName"  placeholder="Enter your Last Name" required></td>
				</tr>
				
				<tr>
					<td>New Password:</td>
					<td><input class="input" type="password" name="Password"  placeholder="Create New Password" required></td>
				</tr>

				<tr>
					<td>Salary:</td>
					<td><input class="input" type="number" name="Salary"   required></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input class="input" type="email" name="Email"  placeholder="Email" required></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input class="input" type="text" name="Gender"  required></td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input class="input" type="date" name="Date_of_Birth" value="01-01-2000" required></td>
				</tr>
				<tr>
					<td>Date of Join:</td>
					<td><input class="input" type="date" name="Date_of_Join" value="01-01-2000" required></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input class="input" type="number" name="Phone" placeholder="Enter Phone Number" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> <br>
		<button type="button"><a href="admin_login.php" style="color: #dbdbe3 ; text-decoration:none; font-size:25px;">Redirect to Manager Login</a></button>
	</div>
</body>
</html>