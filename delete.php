<?php

$conn = mysqli_connect('localhost', 'root', '', 'student');

$id = $_GET['id'];

$sql = "DELETE FROM info where id = $id";

if(mysqli_query($conn,$sql)){
	header ("location: index.php");
}



?>