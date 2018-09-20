<?php 
require ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>Registration</title>
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
			<li><a href="index.php"><h4>Home</h4></a></li>
					</ul>
		</div>
	</nav>

	<div class="jumbotron">
		<h1 class="text-center">Registration</h1>
		<h3 class="text-center">Kindly fill the form below to register to ToDO.</h3>
		<h4 class="text-center"><a href="index.php" class="btn btn-primary">Home</a></h4>
		</div>
		<div class="row">
			<div class=col-sm-12>
	<div class="container">		
<form class="form-horizontal" action="register.php" method="post">
<fieldset>  
	<legend>Personal Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Enter your first username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter your password">
    </div>
  </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-info">Register</button>
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
	$password = sha1($_POST['password']);
	//query to insert
	$query = "INSERT INTO 6470users VALUES (null,'$username', '$phone', '$password');";
	// Run the query to check whether its working and inserting
$result = mysqli_query($conn, $query);
if(!$result){
	die("Query failed. " . mysqli_error($conn));
	 }else{

	 	echo "Welcome to TODO $username ";

	 	
	 	}
	}
?>