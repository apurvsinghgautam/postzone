<?php
$servername="localhost";
$username="root";
$password="";
$db_name="postzone";

$conn=mysqli_connect($servername,$username,$password,$db_name);

if ($conn->connect_error) 
{
	die("Connection failed: ".$conn->connect_error);
}
?>
