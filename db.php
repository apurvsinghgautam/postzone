<?php
$servername="sql6.freemysqlhosting.net";
$username="sql6148986";
$password="dTIg8HKfaC";
$db_name="sql6148986";

$conn=mysqli_connect($servername,$username,$password,$db_name);

if ($conn->connect_error) 
{
	die("Connection failed: ".$conn->connect_error);
}
?>