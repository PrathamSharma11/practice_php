<?php 
include "dbcon.php";
$id = $_GET['id'];
$data = "delete from practice where id = '$id'";
$result = mysqli_query($con,$data);
if ($result) {
	// code...
	header('location:display.php');
} else {
	// code...
	echo "something went wrong";
}











?>