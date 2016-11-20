<?php 
session_start();
if(isset($_REQUEST['socialMedialogin']) && $_REQUEST['socialMedialogin']=="Google"){	
        $_SESSION['login_user']=$_REQUEST['username'];
		$_SESSION['LoginType']="Google";
        header("Location: newfeeds.php");
}else if(isset($_REQUEST['socialMedialogin']) && $_REQUEST['socialMedialogin']=="facebook"){	
        $_SESSION['login_user']=$_REQUEST['username'];		
		$_SESSION['LoginType']="facebook";
        header("Location: newfeeds.php");
}
?>