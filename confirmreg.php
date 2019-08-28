<?php 
session_start();


$name = $email = $password = $confirmpassword = "";

if (isset($_POST['submit'])) {

	$conn = mysqli_connect('localhost', 'root', '', 'student');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$conpass = $_POST['conpass'];

	if (empty($name) || empty($email) || empty($pass) || empty($conpass)) {
		$_SESSION['name_error'] = "";
		$_SESSION['email_error'] = "";
		$_SESSION['pass_error'] = "";
		$_SESSION['conpass_error'] = "";
		header("location: reg.php");
		exit();
	}else{
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			header("location: reg.php");
			exit();
		}else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("location: reg.php");
				exit();
			}else{
				$sql = "SELECT * FROM login WHERE email == '$email'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck > 0) {
					header("location: reg.php");
					exit();
				}else{
					if ($pass != $conpass) {
						$_SESSION['pass_dontmatch'] = "";
						header("location: reg.php");
						exit();
					}else{
						$pass = md5($pass);
					$sql = "INSERT INTO login VALUES(NULL,'$name', '$email', '$pass');";
					mysqli_query($conn,$sql);
					header("location: index.php");
					}
				}
			}
		}
	}
}else{
	header("location: reg.php");
}
?>