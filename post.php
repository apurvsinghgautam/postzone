<?php
include('db.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST")
{
	$newfeed=test_input($_POST['feed']);

	$sql="INSERT INTO post (newfeed)
			VALUES ('$newfeed')";

	$drop=mysqli_query($conn,$sql);
	if (!$drop) 
	{
		die("Could Not Post".mysqli_error($conn));
	}
	else
	{
		//echo "Posted Successfully";
		//header("Location: newfeeds.php")
		//include('newfeeds.php');
		$sql="SELECT newfeed FROM post";
		$retpost=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_array($retpost,MYSQL_ASSOC))
		{
			echo "<br><br><br><br><br><br><br><br><hr>";
			echo "EMP POST: {$row['newfeed']} <br> ";
		}
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



