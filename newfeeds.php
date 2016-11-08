<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Postzone- NewFeed</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="216713098226-vvusplddpue9sqpln2sjgbtra28mk90p.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
	<link type="text/javascript" href="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"/>
    <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main2.css">

</head>
<body>
	<div class="profile">
		<div class="container">
			<div class="row">
				<div class="header">
					<div class="icon col-md-6">
						<div class="row">
							<div class="col-xs-3 col-sm-2-5">
								<img src="https://lh3.googleusercontent.com/aYbdIM1abwyVSUZLDKoE0CDZGRhlkpsaPOg9tNnBktUQYsXflwknnOn2Ge1Yr7rImGk=w300"/>
								<span class="glyphicon glyphicon-option-vertical"></span>	
							</div>
							<div class="col-xs-8">
								<h1>Postzone</h1>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h1 id="demo"></h1>
						<a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="feed">
		<div class="container">
			<div class="row">
				<div class="well">
					<form method="POST" action="post.php">
						<label>New Feed</label></br>   
						<textarea class="form-control" rows="4" id="comment" name="feed" placeholder="Share Your Thoughts..."></textarea>
						<button type="submit" name="submit" class="btn btn-primary">Post</button>
					</form>
				</div>
			</div>
		</div>	
	</div>

	<div class="article">
		<div class="container">
			<div class="row">
				<div class="block">
					<h1 id="demo1"></h1>
					<p id="demo2"></p>	
				</div>
			</div>	
		</div>
	</div>
		
	<div class="footer">
		<div class="container">
			<div class="row">
				<h2>All rights are Resevered.</h2>
				<p>Developed by :-</p>
			</div>
		</div>
	</div>	
</body>
</html>