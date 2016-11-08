<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Postzone- Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="216713098226-vvusplddpue9sqpln2sjgbtra28mk90p.apps.googleusercontent.com">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
  		<div class="info">
    		<h1>Postzone</h1><span><i class="fa fa-heart"></i></span>
  		</div>
	</div>
	<div class="form">
  		<div class="thumbnail"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png"/></div>
  			<form class="register-form" method="POST" action="register.php">
          <input type="text" name="name" placeholder="yourname"/>
    			<input type="text" name="mobile" placeholder="mobile"/>
   	 			<input type="password" name="password" placeholder="password"/>
    			<button type="submit" name="submit" class="btn btn-primary">Register</button>
    			<p class="message">Already registered? <a href="#">Sign In</a></p>
  			</form>
  				<form class="login-form" method="POST" action="login.php">
    				<input type="text" name="username" placeholder="username"/>
    				<input type="password" name="password" placeholder="password"/>
    				<button type="submit" name="submit" class="btn btn-primary">Login</button>
    				<p class="message">Not registered? <a href="#">Create an account</a></p>
            <h1 class="message">OR</h1>
            <div id="gSignIn"></div>
            <div class="userContent"></div>
        </form>
	</div>
  		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  		<script src="js/main.js"></script>
      <script src="js/google.js"></script>
</body>
</html>