<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url("Images/emp3.png");
	  background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size:contain;
		background-repeat:no-repeat ;
		
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: #035956;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		font-family: 'Redressed';
	}

	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #129e89;
	  	text-decoration: none;
	  	position:absolute;
	  	height: 143%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: none;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 10px; font-size: 48px;">HOTEL <p style="color: #e6b800; display: inline;">WALDORF</p> ASTORIA</td>
		</tr>
	</table>
	<ul>
        <br><br>
        <li><a href="add_employee.php">Add Employee</a></li>
        <li><a href="search_employee_main(1).php">Search Employee</a></li>
        <li><a href="show_employee.php">Employee List</a></li>
        <li><a href="delete_employee.php"> Delete Employee</a></li>
        <li><a href="admin_view.php">Admin Dashboard</a></li>

    </ul>
	</table>			
	</div>
</body>
</html>