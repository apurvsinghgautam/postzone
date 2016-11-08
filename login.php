<?php 
include('db.php');
session_start();
if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['username']) && !empty($_POST['password']))
{
	$user=mysqli_real_escape_string($conn,$_POST['username']);
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$sql = "SELECT id FROM logintb WHERE name = '$user' and password = '$pass'";
	$fetch=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($fetch,MYSQLI_ASSOC);
	$active = $row['active'];
    $count=mysqli_num_rows($fetch);
    if($count == 1) 
    {
        //session_register("myusername");
        $_SESSION['login_user']=$user;
        header("Location: newfeeds.php");
    }
    else 
    {
        $error = "Your Login Name or Password is invalid";
        header("Location: index.php");
    }
}
else
{
	echo "Either Username or Password is not Entered";
}
mysqli_close($conn);