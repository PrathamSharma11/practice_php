<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<?php
			 include "dbcon.php";
			 $id = $_GET["id"];
			 $data = "select * from practice where id = '$id'";
			 $result = mysqli_query($con,$data);
			 $a = mysqli_fetch_array($result);	



			?>
			<form method="post" action="update.php" enctype="multipart/form-data">
				id:
		        <input type="hidden" name="id" value="<?php echo $a['id']   ?>">
				name:
				<input type="text" name="name" value="<?php echo $a['name']   ?>"><br><br>
				city:
				<input type="text" name="city" value="<?php echo $a['city']   ?>"><br><br>
				phone:
				<input type="number" name="phone" value="<?php echo $a['phone']   ?>"><br><br>
				image:
				<input type="file" name="image"><br><br>
				<img src="<?php echo $a['image']   ?>">
				<button>UPDATE</button>
				
			</form>
			
			</div>
			<div class="col-md-6">
			<a href="p.php">BACK</a>	
			</div>
		</div>
		
	</div>

</body>
</html>