<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$empid =  $_POST["EmployeeID"];
	$hotelid=$_POST["HotelID"];
	$fname= $_POST["Firstname"];
	$lname=$_POST["Lastname"];
	$salary=$_POST["Salary"];
	$role=$_POST["Role"];
	$email=$_POST["Email"];
	$gndr=$_POST["Gender"];
    $dob=$_POST["Date_of_Birth"];
	$doj=$_POST["Date_of_Join"];
	@$phn=$_POST["Phone"];
	
	$sql = "INSERT INTO employee(EmployeeID, HotelID, Firstname,Lastname,Salary,Role,
	Email,Gender,Date_of_Birth,Date_of_Join,Phone) VALUES
	('$empid', '$hotelid', '$fname','$lname','$salary','$role','$email','$gndr','$dob','$doj','$phn')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: employee_added(1).php");
	}
	else
	{
		header("Location: employee_added(2).php");
	}
?>
</body>
</html>