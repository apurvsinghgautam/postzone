<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('db.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST")
{
	$newfeed=test_input($_POST['feed']);
	$nm=$_SESSION['login_user'];
    
	$sql="INSERT INTO post (newfeed,nm)
			VALUES ('$newfeed','$nm')";    
	$drop=mysqli_query($conn,$sql);
	if (!$drop) 
	{
		die("Could Not Post".mysqli_error($conn));
	}
	else
	{
		header("Location: newfeeds.php");
	}
}
function test_input($data)
{
	$data=stripslashes($data);  //Remove slashes
	$data=htmlspecialchars($data); //Remove html tags
	return $data;
}
mysqli_free_result($retpost);
mysqli_close($conn);
?>
</body>
</html>


