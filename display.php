


<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<table class="table table-bordered text-center bg-light">
				<tr colspan="6">
					<td>INFORMATION</td>
					
				</tr>
				<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>CITY</td>
				<td>PHONE</td>
				<td>Image</td>
				<td>ACTION</td>
			    </tr>
               <?php 
				include "dbcon.php";
				$data = "select * from practice order by id desc";
				$result = mysqli_query($con,$data);
				$a = mysqli_fetch_array($result);
				while ($a = mysqli_fetch_array($result)) {
					// code...
				

				?> 





			    <tr>
			    	<td><?php echo $a['id'] ?></td>
			    	<td><?php echo $a['name'] ?></td>
			    	<td><?php echo $a['city'] ?></td>
			    	<td><?php echo $a['phone'] ?></td>
			    	<td> <img src="<?php echo $a['image'] ?>" style = "height: 200px; width: 200px;"></td>
			    	<td>
			    		<a href="view.php?id=<?php echo $a['id'] ?>" class="btn btn-danger">view</a>
			    		<a href="delete.php?id=<?php echo $a['id']  ?>" class="btn btn-primary">delete</a>
			    		<a href="edit.php?id=<?php echo $a['id']?>" class="btn btn-secondary">edit</a>
			    	</td>
			    	
			    </tr>

               <?php
                }
               ?>
			</table>
		</div>
	</div>

</body>
</html>
















