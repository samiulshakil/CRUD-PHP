<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'Student');

$sql = "SELECT * FROM info";

$result = mysqli_query($conn,$sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Home Page Php</title>
</head>
<body>

	<div class="container pt-5">
		<div class="row">
			<div class="col-md-3">
				<a href="insert.php" class="btn btn-primary">New Student</a>
			</div>
			<div class="col-md-9">
				<h4>All Students Information</h4>
				<?php if(isset($_SESSION['regsuccess'])) { ?>
				<br>
				<div class="alert alert-primary alert-dismissible fade show" role="alert">
				  <strong>Success!</strong>       Your Registration.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<?php } ?>
				<br>
				<table class="table">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Roll</th>
						<th>Department</th>
						<th>Actions</th>
					</tr>
					<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['Id']; ?></td>
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Roll']; ?></td>
						<td><?php echo $row['Department']; ?></td>
						<td>
							<a href="singleview.php?id=<?php echo $row['Id'];?>" class="btn btn-primary mr-2">View</a>
							<a href="edit.php?id=<?php echo $row['Id'];?>" class="btn btn-success mr-2">Edit</a>
							<a href="delete.php?id=<?= $row['Id'];?>" class="btn btn-danger mr-2" onclick="confirm('Are You Sure?')">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php unset($_SESSION['regsuccess']); ?>