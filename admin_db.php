<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 35%;
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
		opacity: 80%;
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
	$user = $_POST["ManagerID"];
	$pwd = $_POST["Password"];
	$sql = "SELECT ManagerID, Password from managerlogin";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==$row[0] && $pwd==$row[1])
    		{
    			header("Location: admin_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>                       
<br><br>      Please!!!! Try Again With Proper Information.
<br><br>
		<button type="button"><a href="admin_login.php" style="color: black ; text-decoration:none; font-size:25px;">Redirect to Admin Login</a></button></div>

</div>
</body>
</html>