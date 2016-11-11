<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<center>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['password']))
{
	$name=test_input($_POST['name']);
	$mobile=test_input($_POST['mobile']);
	$password=$_POST['password'];

	$sql="INSERT INTO logintb (name,mobile,password)
			VALUES ('$name','$mobile','$password')";

	$drop=mysqli_query($conn,$sql);
	if (!$drop) 
	{
		die("Could Not Register".mysqli_error($conn));
	}
	else
	{
		echo "Registered Successfully";
	}
}
mysqli_close($conn);
function test_input($data)
{
	$data=trim($data);   //Trim Data
	$data=stripslashes($data);  //Remove slashes
	$data=htmlspecialchars($data); //Remove html tags
	return $data;
}
?>
<br><br><br><br>
Go to <a href="index.php">Login</a> Page
</center>
</body>
</html>



