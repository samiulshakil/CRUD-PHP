<?php
session_start();
$name = $_POST['name'];
$roll = $_POST['roll'];
$department = $_POST['department'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$conn = mysqli_connect('localhost', 'root', '', 'student');

$sql = "INSERT INTO info VALUES(NULL, '$name', '$roll', '$department', '$email', '$mobile', '$address');";

if(mysqli_query($conn,$sql)){
	$_SESSION['regsuccess'] = true ;
	header('location: index.php');
}else {
	$_SESSION['regfail'] = false ;
	header('location: insert.php');
}

?>