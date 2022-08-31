<html>
<head>
	<title>Cancel Room</title>
</head>
<style>
		div {
		width: 40%;
		height: 35%;
		text-align: center;
		position: relative;
		margin-top: 8%;
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
		background-image: url("Images/bg.jpg");
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: 1700px 900px;
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
		$bid = $_POST["book_id"];
		$sql = "SELECT * from user_room_book";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[15])
			{				
				$sql1 = "DELETE FROM user_room_book WHERE book_id='$bid'";
				mysqli_query($conn,$sql1);
				header("Location: user_cancel_room1.php");
				break;
			}
		}
	?>
	<br><br>
	<p style="font-weight: bold;">No room found</p> 
	
	
	<button type="button"><a href="user_view.php" style="color: black ; text-decoration:none; font-size:25px;">Redirect to User Dashbord</a></button>

</div>
</body>
</html>