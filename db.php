<?php
$servername="sql6.freemysqlhosting.net";
$username="sql6144371";
$password="9NRZb9cvD1";
$db_name="sql6144371";

$conn=mysqli_connect($servername,$username,$password,$db_name);

if ($conn->connect_error) 
{
	die("Connection failed: ".$conn->connect_error);
}
?>