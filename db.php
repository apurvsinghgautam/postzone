<?php
$servername="localhost";
$username="root";
$password="scorpion";
$db_name="alognew";

$conn=mysqli_connect($servername,$username,$password,$db_name);

if ($conn->connect_error) 
{
	die("Connection failed: ".$conn->connect_error);
}
?>