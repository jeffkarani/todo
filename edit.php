<?php require("connection.php") ?>

<?php 
// If edit button is clicked in view.php get the update id and bring it here 
 if(isset($_GET['update_id'])){
// Assign the id fetched above  to a variable $id
$id = $_GET['update_id'];
// Select all the data in the fields in this form and run the query
$sql = mysqli_query($conn, "SELECT * FROM 6470jobs where id = '$id'");
// Fetch the data from the query above and hold it in a variable $row
$row = mysqli_fetch_row($sql);
 }
if(isset($_POST['edit'])){
  $newTask = $_POST['newTask'];
  $newDescription = $_POST['newDescription'];
  $newDate = $_POST['newDate'];
  $id = $_POST['id'];
  $sql = mysqli_query($conn, "UPDATE 6470jobs SET task='$newTask', description='$newDescription', date='$newDate'  WHERE id='$id'") or die("Update failed " . mysqli_error());
header('location: viewtask.php');
}

 ?>

<html>
<head>
  <title>Edit</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container">
    
<form class="form-horizontal" action="edit.php" method="post">
<fieldset>  
  <legend>Tasks</legend>
  <div>
    <input type="hidden" name="id" value="<?php echo $row[0];?>" >
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="task">Task:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="newTask" value="<?php echo $row[1];?>" placeholder="Enter your first name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="secondName">Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="newDescription" value="<?php echo $row[2];?>" placeholder="Enter your second name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date">Date:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="newDate" value="<?php echo $row[3];?>" placeholder="Enter your second name">
    </div>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="edit" class="btn btn-info">Edit</button>
    </div>
  </div>
  
</fieldset>
</form>
  </div>

</body>
</html>