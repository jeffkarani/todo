<?php 
require('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale="1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>


	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="index.php" class="navbar-header"><h3><strong>ToDO</strong></h3></a>
		</div>

			<ul class="nav navbar-nav">

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="jumbotron">
			<div class="text-center">
				<img src="images/todo3.jpg" class="img-fluid rounded">
				<h2><p class="text-primary"><strong>Personal Planner<strong></p></h2></div>
				<h2 class="text-center"><p class="text-danger"><strong>If you dont plan, you plan to fail!</strong></p></h2></div>


			</div>
		</div>
	

	</body>
	</html>