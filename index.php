<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Postzone- Login</title>
    <html xmlns:fb="http://www.facebook.com/2008/fbml">
    <meta name="google-signin-scope" content="profile email">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="536051103891-0mleul9knbaklc60evjivm98c37qvsc4.apps.googleusercontent.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main2.css">
</head>
<body>
	<div class="container">
  		<div class="info">
    		<h1>Postzone</h1></span>
  		</div>
	</div>
	<div class="form">
  		<div class="thumbnail"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png"/></div>
  			<form class="register-form" method="POST" action="register.php">
          <input type="text" name="name" placeholder="yourname" required/>
    			<input type="text" name="mobile" placeholder="mobile" required/>
   	 			<input type="password" name="password" placeholder="password" required/>
    			<button type="submit" name="submit" class="btn btn-primary">Register</button>
    			<p class="message">Already registered? <a href="#">Sign In</a></p>
  			</form>
  				<form class="login-form" method="POST" action="login.php">
    				<input type="text" name="mobile" placeholder="mobile" required/>
    				<input type="password" name="password" placeholder="password" required/>
    				<button type="submit" name="submit" class="btn btn-primary">Login</button>
    				<p class="message">Not registered? <a href="#">Create an account</a></p>
            <h1 class="message">OR</h1><br/>
            <div id="gSignIn"></div>
            <div class="lbutton">
              <div class="container">
                <div class="row">
                  <div class="col-md-2">
                      <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
          			      </fb:login-button>
                  </div>
                  <div class="col-md-2">
                      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                  </div>
                </div>
              </div>
            </div>
        </form>
	</div>

  <?php include('footer.php');?>
  
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();		
		    window.location="social_login.php?socialMedialogin=Google&username="+profile.getName();
		    //alert("ID: " + profile.getId()+'    Full Name: ' + profile.getName()+'          Given Name: ' + profile.getGivenName()+'       Family Name: ' + profile.getFamilyName()+"        Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
      };
  // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
      if (response.status === 'connected') {
      testAPI();
      } else if (response.status === 'not_authorized') {
      alert('Please log into this app.');
      } else {
      alert('Please log into Facebook.');
      }
    }
      function checkLoginState() {
      FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
      });
    }
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '1855375144707983',
      cookie     : true,  // enable cookies to allow the server to access 
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    function testAPI() {
      FB.api('/me', function(response) {
  		window.location="social_login.php?socialMedialogin=facebook&username="+response.name;
        //alert('Successful login for: ' + response.name);
      });
    }
</script>
<script src="js/main.js">
</script>
</body>
</html>