<?php
	session_start();
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
			<div class="col-md-6 offset-md-3">
				<h3>Registration</h3>
				<hr>
				<form action="confirmreg.php" method="POST">
				  <div class="form-group">
				    <label for="Name">Name : </label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
				    <?php if (isset($_SESSION['name_error'])) { ?>
				    	<span style="color: red;">* Name is required </span>
				    <?php } ?>
				  </div>
				  <div class="form-group">
				    <label for="Email">Email : </label>
				    <input type="Email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
				    <?php if (isset($_SESSION['email_error'])) { ?>
				    	<span style="color: red;">* Email is required </span>
				    <?php } ?>
				    <?php if (isset($_SESSION['email_error_format'])) { ?>
				    	<span style="color: red;">* Invalid email format </span>
				  	 <?php } ?>
				  </div>
				  <div class="form-group">
				    <label for="Password">Password : </label>
				    <input type="Password" class="form-control" id="exampleInputEmail1" name="pass" aria-describedby="emailHelp" placeholder="Enter Your Password">
				    <?php if (isset($_SESSION['pass_error'])) { ?>
				    	<span style="color: red;">* Password is required </span>
				    <?php } ?>
				  </div>
				  <div class="form-group">
				    <label for="Password">Confirm Password : </label>
				    <input type="Password" class="form-control" id="exampleInputEmail1" name="conpass" aria-describedby="emailHelp" placeholder="Enter Your Password Again">
				    <?php if (isset($_SESSION['conpass_error'])) { ?>
				    	<span style="color: red;">* Confirm Password is required </span>
				    <?php } ?> 
				    <?php if (isset($_SESSION['pass_dontmatch'])) { ?>
				    	<span style="color: red;">* Password Didn't Match </span>
				    <?php } ?>
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php unset($_SESSION['name_error']); ?>
<?php unset($_SESSION['pass_error']); ?>
<?php unset($_SESSION['conpass_error']); ?>
<?php unset($_SESSION['email_error']); ?>
<?php unset($_SESSION['email_error_format']); ?>