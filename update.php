<?php

$name = $_POST['name'];
$roll = $_POST['roll'];
$department = $_POST['department'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$conn = mysqli_connect('localhost' , 'root', '', 'student');

$id = $_GET['id'];

$sql= "UPDATE info SET Name='$name', Roll='$roll', Department= '$department', Email='$email', Mobile='$mobile', Address='$address' where id = $id";

if(mysqli_query($conn,$sql)){
	header("location: singleview.php?id=$id");
}else{
	echo "Not Updated!";
}

?>