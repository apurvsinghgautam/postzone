<?php
include('db.php');
session_start();

$check=$_SESSION['login_user'];
$sql="SELECT name FROM logintb WHERE name='$check' "; 
$session=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($session,MYSQLI_ASSOC);
$login_session=$row['name'];
 
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}
?>