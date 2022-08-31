
<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$cid = $_POST["idproof"];
		$sql = "SELECT * FROM customerlogin";
		$k = 0;
		if ($result=mysqli_query($conn,$sql))
		{
			while ($row=mysqli_fetch_row($result))
		   	{
		   		if($cid==$row[0])
		   		{
		   			$sql1 = "INSERT INTO temp(pwd) VALUES('$row[1]')";
		   			mysqli_query($conn, $sql1);
					header("Location: user_found.php");
					$k = 1;
		   		}
		   	}
			mysqli_free_result($result);
		}
		if($k==0)
		{
			header("Location: user_not_found.php");
		}
	?>