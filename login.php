<?php 
include('db.php');
session_start();
if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['username']) && !empty($_POST['password']))
{
	$user=mysqli_real_escape_string($conn,$_POST['username']);
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$sql = "SELECT id FROM logintb WHERE mobile = '$user' and password = '$pass'";
	$fetch=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($fetch,MYSQLI_ASSOC);
	$active = $row['active'];
    $count=mysqli_num_rows($fetch);
    if($count == 1) 
    {
        $_SESSION['login_user']=$user;
        header("Location: newfeeds.php");
    }
    else 
    {
        header("Location: index.php");
    }
}
mysqli_close($conn);