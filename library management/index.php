<?php
$connection=mysqli_connect('localhost','root','','library');

 if(isset($_POST['submit'])){
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	if(($username=="shashank")&&($password=="shasha4u")){
 		header('location:index.php');
 	}else{
 		echo "not a valid user";
 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
       <div class="col-sm-6">
<h1 style="color:#550080; text-align:center;">ADMIN LOGIN</h1>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="insert.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="submit">Login</button>
		</div>
	</form>
</div>
</div>

</body>
</html>