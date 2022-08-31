<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-top: 13%;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px  ;
		padding-top: 25px;
		padding-bottom: 30px;
		border-radius: 20px;
		opacity: 80%;
	}
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
	p {
		font-size: 24px;
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
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: white;
	  	color: white;
	  	text-decoration: none;		
	}
	a:hover {
	  	
	  	color: white;
	  	text-decoration: none;
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
	    <li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="EmployeeInfo.php">Employee Information</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Room Booking Request has been confirmed!<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<button type="button"><a href="admin_view.php" style="color:black ; text-decoration:none; font-size:25px;">Next</a></button>

	</div>
</body>
</html>