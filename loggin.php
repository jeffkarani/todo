<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background:#ccc;">
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-6 m-auto">
				<div class = "card bg-dark mt-5">
					<div class = "card-title bg-primary text-white mt-5">
						<h3 class="text-center ">Login</h3>
					</div>
					<div class = "card-body">
						<form action ="loggin.php" method="post">
							<input type="text" name="username" placeholder="Enter your name" class="form-control mb-3" required>
							<input type="text" name="phone" placeholder="Enter phone number" class="form-control mb-3" required>
							<input type="password" name="password" class="form-control mb-3" placeholder="Enter password" required >
							<input type="submit" name="submit" class="btn btn-primary" mb-3>

						</form>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>