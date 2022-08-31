<!DOCTYPE html>
<html>
<head>
	<title>Admin Booking History</title>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url("Images/pic4.jpg");
	  background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color: #035956;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
		font-family: 'Redressed';
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
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
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

    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Employee Details</b></p>
				</td>
				<tr>
					<th>Employee ID</th>
					<th>Hotel ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Salary</th>
					<th>Role</th>
                    <th>Email Address</th>
					<th>Gender</th>
					<th>Date of Birth</th>
					<th>Date of Join</th>
					<th>Phone</th>
				</tr>
                 <tr>
                <?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
                    $empid=$_POST["EmployeeID"];
					$sql1 = "SELECT * from employee";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
                            if($empid==$row[0])
                            {
				    		?>
				    		<td><?php echo $row[0]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[2]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				    		<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
				   			<td><?php echo $row[7]; ?></td>
				   			<td><?php echo $row[8]; ?></td>
				   			<td><?php echo $row[9]; ?></td>
				    		<td><?php echo $row[10]; ?></td>
                             
				</tr><?php
                            }
				    	}
				    	mysqli_free_result($result); 
				    }?>
                    

                