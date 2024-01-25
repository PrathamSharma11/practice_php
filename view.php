<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<table class="table table-bordered text-center bg-light">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>city</th>
			<th>phone</th>
			<th>image</th>
			<th>Action</th>
		</tr>
		<?php
        $id = $_GET['id'];
		include "dbcon.php";
		$data = "select * from practice where id = '$id'";
		$result = mysqli_query($con,$data);
		$a = mysqli_fetch_array($result);

		?>
		<tr>
			<td><?php echo $a['id']     ?></td>
			<td><?php echo $a['name']     ?></td>
			<td><?php echo $a['city']     ?></td>
			<td><?php echo $a['phone']     ?></td>
			<td><img src="<?php echo $a['image']     ?>"></td>
			<a href="display.php"><button class="btn btn-primary">BACK</button></a>
		</tr>
		
	</table>

</body>
</html>