
<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$empid = $_POST["EmployeeID"];
		$sql = "SELECT * FROM employee";
		$k = 0;
		if ($result=mysqli_query($conn,$sql))
		{
			while ($row=mysqli_fetch_row($result))
		   	{
		   		if($empid==$row[0])
		   		{
		   			$sql1 = "DELETE FROM employee WHERE EmployeeID=$row[0]";
		   			mysqli_query($conn, $sql1);
					header("Location:delete_employee(2).php");
					$k = 1;
		   		}
		   	}
			mysqli_free_result($result);
		}
		if($k==0)
		{
			header("Location: delete_employee(3).php");
		}
	?>