<?php 
require('connection.php');
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
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
					
		<ul class="nav navbar-nav navbar-right">
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
							</ul>
		</div>

	</nav>

	<div class="jumbotron">
		<h1 class="text-center">Login</h1>
		<h3 class="text-center">Kindly fill the form below to login.</h3>
		<h4 class="text-center"><a href="index.php" class="btn btn-primary">Go to home</a></h4>
		</div>
		<div class="row">
			<div class=col-sm-12>
	<div class="container">		
<form class="form-horizontal" action="login.php" method="post">
<fieldset>  
	<legend>Login</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Enter your first username">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter your password">
    </div>
  </div>
  </div>
 </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-info">Login</button>
    </div>

  
    
</fieldset>
</form>
</div>	
			</div>
		</div>

</div>
	</body>
</html>
 
 </body>
 </html>


<?php 
if (isset($_POST["submit"])) {
  $uName = $_POST["username"];
  $psd = $_POST["password"];
  
  $convertedpass = sha1($psd);

  $sql = "SELECT * FROM 6470users WHERE username='$uName' AND password='$convertedpass'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect!";
   
  }else {
  	header("location:todo.php");
    echo "Welcome $uName";


  }
}

?>
