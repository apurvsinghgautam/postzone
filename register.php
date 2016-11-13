<!DOCTYPE html>
<html>
<head>
	<title>Postzone - Registration</title>
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main2.css">
</head>
<body>
<div class="registration">
<?php
include('db.php');
session_start();
?>
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
		echo "</br>Registered Successfully with Postzone";
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
<p>Go to <a href="index.php">Login</a> Page.</p>
</br></br></br>
<p>Share Your Thoughts Now on Postzone...</p>


</div>
</body>
</html>



