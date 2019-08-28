<?php
$conn = mysqli_connect('localhost', 'root', '', 'Student');

$id = $_GET['id'];

$sql = "SELECT * FROM info WHERE id=$id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

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
				<h3>Enter Your Personal Information</h3>
				<hr>
				<form action="update.php?id=<?php echo $id ?>" method="POST">
				  <div class="form-group">
				    <label for="Name">Name : </label>
				    <input type="text" required class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name" value="<?php echo $row['Name']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="Roll">Roll : </label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="roll" aria-describedby="emailHelp" placeholder="Enter Your Roll" value="<?php echo $row['Roll']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="Roll">Department : </label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="department" aria-describedby="emailHelp" placeholder="Enter Your Roll" value="<?php echo $row['Department']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="email">Email : </label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Your Roll" value="<?php echo $row['Email']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="mobile">Mobile : </label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="mobile" aria-describedby="emailHelp" placeholder="Enter Your mobile" value="<?php echo $row['Mobile']; ?>">
				  </div>
				  <div class="form-group">
				    <label for="Address">Address : </label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp" placeholder="Enter Your address" value="<?php echo $row['Address']; ?>">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>