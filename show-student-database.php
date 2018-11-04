<?php 
session_start();
if($_SESSION['username']== null)
{
  header('location:login.php');
}

require_once('dal.php');

$databaseObject = new Database();
$selectQuery="SELECT * FROM `student`";
$output = $databaseObject->executeQuery($selectQuery,'select');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Student</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body>
<table class="table table-dark">
  <thead>
  	<tr>
			<th scope="col">#</th>
			<th scope="col">First Name</th>
			<th scope="col">Last Name</th>
			<th scope="col">Email</th>
			<th scope="col">Action</th>
	</tr>
  </thead>
  <tbody>
  	<?php
  		//var_dump($output);
  		for($i=0;$i<sizeof($output);$i++)
  		{
  	?>
  		<tr>
	      <th scope="row"><?php echo $i+1;?></th>
	      <td><?php echo $output[$i]["first_name"];?></td>
	      <td><?php echo $output[$i]["last_name"];?></td>
	      <td><?php echo $output[$i]["email"];?></td>
	      <td><a href="student-delete-backend.php?email=<?php echo $output[$i]["email"];?>" style="color:green">Delete</a> || <a href="edit.php?email=<?php echo $output[$i]["email"];?>" style="color:green">Edit</a></td>
    	</tr>
  			 
    <?php
  		
  		}

  	?>
   

 	   
</tbody>
  <a href="/">Add Student</a><br>
  <a href="/logout.php">Logout</a>
</table>



</body>
</html>
