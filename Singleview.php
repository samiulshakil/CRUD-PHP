<?php

$conn = mysqli_connect('localhost', 'root', '', 'student');

$id = $_GET['id'];

$sql = "SELECT * FROM info WHERE id=$id";

$Q = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($Q);

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
				<a href="index.php" class="btn btn-primary">All Students</a>
			</div>
			<div class="col-md-9">
				<h3>Your Information</h3><br>
				<table class="table">
					<tr>
						<td>Name</td>
						<td><?php echo $data['Name'];?></td>
					</tr>
					<tr>
						<td>Roll</td>
						<td><?php echo $data['Roll'];?></td>
					</tr>
					<tr>
						<td>Department</td>
						<td><?php echo $data['Department'];?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data['Email'];?></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><?php echo $data['Mobile'];?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data['Address'];?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>