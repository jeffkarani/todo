<?php 
require ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>View Tasks</title>
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
		<h1 class="text-center">Scheduled Tasks</h1>
		
		<h4 class="text-center"><a href="todo.php" class="btn btn-primary">Back to Dashboard</a></h4>
		</div>
	
	</body>
</html>


<div class="container">
	<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Task</th>
			<th>Description</th>			
			<th>Date</th>			
			<th>Update</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php 
			// query to select from database table
			$query = "SELECT * FROM 6470jobs";
			// Run the query
			$run = mysqli_query($conn, $query);
			if(!$run){
				die("<h4>Query failed" . mysqli_error($conn) . "</h4>");
			}
			while($row= mysqli_fetch_assoc($run)){
				echo "<tr>";
				echo "<td>$row[id]</td>";
				echo "<td>$row[task]</td>";
				echo "<td>$row[description]</td>";
				echo "<td>$row[date]</td>";
				echo "<td><a href='edit.php?update_id=$row[id]' class='btn btn-success'>Edit</a></td>";
				echo "<td><a href='viewtask.php?del_id=$row[id]' class='btn btn-danger'>Delete</a></td>";
				echo "</tr>";
			}

			 ?>
		</tbody>
		
	</table>
</div>
<?php 
if (isset($_GET['del_id'])){
	$query = "DELETE FROM 6470jobs WHERE id ='$_GET[del_id]';";
	$run = mysqli_query($conn, $query);
	if ($run){
echo "Successfully deleted";
header('Location: viewtask.php');
	}else{
		die("Query failed" . mysqli_error($conn));
	}
 }

?>