<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

</head>
<style>
	
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url("Images/blur2.jpg");
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: 1800px 900px;
		color: white;
	}
	table {
		font-size: 30px;
	}
	td {
		padding: 15px;
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
	ul {
		list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #129e89;
	  	text-decoration: none;
	  	position: absolute;
	  	height: 200%;
	  	overflow: auto;
	}
	li {
		color: white;
		display: inline;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:visited {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: none;	
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: none;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: none;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		
	}
	.decor {
		font-family: Times New Roman;
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 10px; font-size: 48px; text-align:center">HOTEL <p style="color: #e6b800; display: inline;">WALDORF</p> ASTORIA</td>
			<td id="td1" style="font-size: 25px; text-align: right;">HELLO, <?php echo $row[0]," ",$row[1]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:100px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>Name: </b></td>
					<td><?php echo $row[0]," ",$row[1] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number: </b></td>
					<td><?php echo $row[6] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth: </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>