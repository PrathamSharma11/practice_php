<?php 
include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
//$image = $_FILES['image'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" . $filename;
move_uploaded_file($tmpname,$file);
if ($filename == " ") {
	// code...
	$data = "update practice set name = '$name',city = '$city', phone = '$phone' where id = '$id'";
	$result = mysqli_query($con,$data);
	header('location:display.php');
} else {
	// code...
	$data = "update practice set name = '$name',city = '$city', phone = '$phone', image = '$file' where id = '$id'";
	$result = mysqli_query($con,$data);
	header("location:display.php");
}





?>