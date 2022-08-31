<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 55%;
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
		scroll-margin: 1px;
		position: relative;
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
	$cid = $_POST["idproof"];
	$pwd = $_POST["password"];
	$sql = "SELECT * FROM customerlogin AS cl,customer as c WHERE cl.idproof=c.idproof";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($cid==$row[0] && $pwd==$row[1])
    		{
				$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			$sql1 = "INSERT INTO temp_session VALUES('$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]')";
	    		mysqli_query($conn, $sql1);
    			header("Location: user_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
<br><br>    <p style="color: black; font-weight:bold"> Please!!!! Try Again With Proper Information.</p>  
<br><br>
		<button type="button"><a href="user_login.php" style="color: black ; text-decoration:none; font-size:20px;">Redirect to User Login</a></button></div>

</div>
</body>
</html>