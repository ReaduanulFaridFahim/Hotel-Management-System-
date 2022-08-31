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
		opacity: 75%;
	}
	body  {
		background-image: url("Images/password.jpg");
	  	background-color: #FFFFF0;
	  	background-position: center;
	  	background-attachment: fixed;
	  	background-size: 1700px 900px;
		background-repeat: no-repeat;
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
	$fname= $_POST["Firstname"];
	$pwd=$_POST["Password"];
	$lname=$_POST["Lastname"];
	$email=$_POST["Email"];
	$gndr=$_POST["Gender"];
    $dob=$_POST["Date_of_Birth"];
	$cid=$_POST["idproof"];
	@$phn=$_POST["Phone"];
	
	$sql = "INSERT INTO customer(Firstname,Lastname,
	Email,Gender,Date_of_Birth,idproof,Phone) VALUES
	('$fname','$lname','$email','$gndr','$dob','$cid','$phn')";
	$query=mysqli_query($conn,$sql);

	if($query)
	{
		$sql1="INSERT INTO customerlogin(idproof,Password) VALUES ('$cid','$pwd' )";
		$result=mysqli_query($conn,$sql1);
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>
<br><br>
	<p style="font-weight:bold;">New User Not Created.</p> 
	<br><br>
	
	<button type="button"><a href="user_login.php" style="color: black ; text-decoration:none; font-size:25px;">Redirect to User Login</a></button></div>

</div>
</body>
</html>