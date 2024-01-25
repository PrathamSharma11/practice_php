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
			
			<form method="post" action="forminsert.php" enctype="multipart/form-data">
				name:
				<input type="text" name="name"><br><br>
				city:
				<input type="text" name="city"><br><br>
				phone:
				<input type="number" name="phone"><br><br>
				image:
				<input type="file" name="image"><br><br>
				<button>SUBMIT</button>
				
			</form>
			
			</div>
			<div class="col-md-6">
			<a href="display.php">DISPLAY</a>	
			</div>
		</div>
		
	</div>

</body>
</html>