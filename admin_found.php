<!DOCTYPE html>
<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-top: 10%;
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
</style>
<body>
	<div style="background-color: #f2f2f2;">
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<button type="button"><a href="admin_login.php" style="color: black ; text-decoration:none; font-size:25px;">Redirect to Admin Login</a></button></div>

	</div>
</body>
</html>