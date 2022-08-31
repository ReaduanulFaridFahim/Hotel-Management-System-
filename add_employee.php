<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<style>
	div {
		width: 35%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 35%;
		margin-left: 35%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #72c3ec;
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 20px;
		color: #519dbf;

	}
	body  {
		background-image: url("Images/emp6.jpg");
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: #009999;
		border: 1px  #a6a6a6;
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
	<div style="background-color: #c3d6ea;">
		<form action="employeedb.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #519dbf;"><b>Employee SignUp</b></p></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="number" name="EmployeeID"  placeholder="Enter the ID" required></td>
				</tr>
				<tr>
					<td>Hotel ID:</td>
					<td><input class="input" type="text" name="HotelID" Value="20032" required></td>
				</tr><tr>
					<td>First Name:</td>
					<td><input class="input" type="text" name="Firstname"  placeholder="Enter the First Name" required></td>
				</tr><tr>
					<td>Last Name:</td>
					<td><input class="input" type="text" name="Lastname"  placeholder="Enter the Last Name" required></td>
				</tr><tr>
					<td>Salary:</td>
					<td><input class="input" type="number" name="Salary"  placeholder="Enter the Salary" required></td>
				</tr><tr>
					<td>Role:</td>
					<td><input class="input" type="text" name="Role"  placeholder="Enter the Role" required></td>
				</tr><tr>
					<td>Email:</td>
					<td><input class="input" type="email" name="Email"  placeholder="Enter the Email Address" required></td>
				</tr><tr>
					<td>Gender:</td>
					<td><input class="input" type="text" name="Gender" required></td>
				</tr><tr>
					<td>Date of Birth:</td>
					<td><input class="input" type="date" name="Date_of_Birth"  placeholder="Enter the DOB" required></td>
				</tr>
				<tr>
					<td>Date of Join:</td>
					<td><input class="input" type="date" name="Date_of_Join"  placeholder="Enter the Date of Join" required></td>
				</tr>
				<tr>
					<td>Phone No:</td>
					<td><input class="input" type="number" name="Phone" placeholder="Enter the Phone Number" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
		<br>
		
		<button type="button"><a href="Employeeinfo.php" style="color: #dbdbe3 ; text-decoration:none; font-size:20px;">Redirect to Employee Management Page</a></button>


	</div>
</body>
</html>