<!DOCTYPE html>
<html>
<head>
	<title>User Room Status</title>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url("Images/blur3.jpg");
	  background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: contain;
		
	}
	table {
		font-size: 22px;
		color: white;
		font-weight: bold;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		margin-right: 50%;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		color: black;
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
		text-align: center;
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
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="7"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Room Booking Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Room Status</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from user_room_book";
					$sql = "SELECT * from temp_session";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_row($result);
					$phone = $row[6];
					$idproof = $row[5];
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($phone==$row[0] && $idproof==$row[2])
				    		{
				    			?>
				    			<td><?php echo $row[15]; ?></td>
				    			<td><?php echo $row[1]; ?></td>
				    			<td><?php echo $row[3]; ?></td>
				    			<td><?php echo $row[4]; ?></td>
				    			<td><?php echo $row[5]; ?></td>
				    			<td><?php echo $row[13]; ?></td>
				    			<td><?php echo $row[14]; ?></td>
				    		</tr><?php
				    		}
				    	}
				  		mysqli_free_result($result);
					}
				?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td></td>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="user_cancel_room.php" method="post">
							<input type="number" name="book_id">
					</td>
					<td style="text-align: center;"><button type="submit">Cancel Booking</button></td></form>	
				</tr>
			</table>
	</div>
</body>
</html>