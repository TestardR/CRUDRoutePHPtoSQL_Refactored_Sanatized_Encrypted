<?php

include "db.php";
include "functions.php";

createRows();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">

	<div class="col-sm-6">
		<h1 class= "text-center">Create</h1>
		<form action="login_create.php" method="post">

			<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control">
			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="CREATE">

		</form>
	</div>

</div>
</body>
</html>