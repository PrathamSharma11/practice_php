<?php 
include "dbcon.php";
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
//$image = $_FILES['image'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" . $filename;
move_uploaded_file($tmpname,$file);
$data = "insert into practice(name,city,phone,image)value('$name','$city','$phone','$file')";
$result = mysqli_query($con,$data);
if ($result) {
    header("location:p.php");	
} else {
	// code...
	echo "something went wrong!!!!";
}

?>