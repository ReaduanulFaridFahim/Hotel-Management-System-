<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");

	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$empid =  $_POST["EmployeeID"];
	@$pwd = $_POST["Password"];
	$mngid=$_POST["ManagerID"];
	$fname= $_POST["FirstName"];
	$lname=$_POST["LastName"];
	$salary=$_POST["Salary"];
	$email=$_POST["Email"];
	$gndr=$_POST["Gender"];
    $dob=$_POST["Date_of_Birth"];
	$doj=$_POST["Date_of_Join"];
	@$phn=$_POST["Phone"];
	
	$sql = "INSERT INTO manager(EmployeeID, ManagerID, FirstName,LastName,Salary,
	Email,Gender,Date_of_Birth,Date_of_Join,Phone) VALUES
	('$empid', '$mngid', '$fname','$lname','$salary','$email','$gndr','$dob','$doj','$phn')";
	$query= mysqli_query($conn,$sql);

	if($query){
    
	$sql1="INSERT INTO managerlogin(ManagerID,Password) VALUES ('$mngid','$pwd')";
	$result=mysqli_query($conn,$sql1);
     
	header("Location: admin_signed_up1.php");

	}
	else{
		header("Location: admin_signed_up2.php");
	}

?>
</body>
</html>