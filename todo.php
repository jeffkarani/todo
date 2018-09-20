<?php 
require('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Todo</title>
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
			<li><a href="index.php"><h4>Home</h4></a></li>
					</ul>
					
		<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
							</ul>
		</div>

	</nav>

				<div class="jumbotron">
			<div class="text-center">
				<p class="text-primary"><h1>Dashboard</h1></p>
			</div>
				


			</div>
		

		<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active btn btn-primary" href="addtodo.php"><h3>Add Task</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-success" href="viewtask.php"><h3>View Tasks</h3></a>
      </li>
         </ul>
  </div>
  <div class="card-body">
    <h1 class="card-title"></h1>
    <p class="card-text"><h2>Welcome to Personal Planner. Please choose a task below:</h2> </p>
    <a href="addtodo.php" class="btn btn-primary">Add Task</a>
    <a href="viewtask.php" class="btn btn-success">View Tasks</a>
  </div>
</div>
	

	</body>
	</html>