<?php 
require ('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title>ToDO Items</title>
	<meta name="viewport" content="width=device-width, initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
</head>

<body>
	<div class="container-fluid">

	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
		
		<div class="navbar-header">
			<a href="index.php" class="navbar-header"><h3><strong>ToDO</strong></h3></a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="todo.php"><h4>ToDO Panel</h4></a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
							</ul>
		</div>
	</nav>

	<div class="jumbotron">
		<h1 class="text-center">Add Tasks Here</h1>
		
		<h4 class="text-center"><a href="todo.php" class="btn btn-primary">Back to Dashboard</a></h4>
		</div>


		<div class="row">
			<div class=col-sm-12>
	<div class="container">		
<form class="form-horizontal" action="addtodo.php" method="post">
<fieldset>  
	<legend>Tasks</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="task">Task:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="task" placeholder="Enter task">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Description:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" placeholder="Enter your description">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="date">Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="date" placeholder="Enter your password">
    </div>
  </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-info">Add</button>
    </div>
  </div>
  
</fieldset>
</form>
</div>	
			</div>
		</div>

</div>
	</body>
</html>

<?php 
if(isset($_POST['submit'])){
	extract($_POST);
		//query to insert
	$query = "INSERT INTO 6470jobs VALUES (null,'$task', '$description', '$date');";
	// Run the query to check whether its working and inserting
$result = mysqli_query($conn, $query);
if(!$result){
	die("Query failed. " . mysqli_error($conn));
	 }else{

	 	
	 	}header("location:addtodo.php");
	}
?>