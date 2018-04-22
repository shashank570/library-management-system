<?php
$connection=mysqli_connect('localhost','root','','library');
	if(isset($_POST['insert'])){
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];
	$pub=$_POST['pub'];
	$prize=$_POST['prize'];


    $bookname= mysqli_real_escape_string($connection,$bookname);
	$author=mysqli_real_escape_string($connection,$author);
    $pub= mysqli_real_escape_string($connection,$pub);
	$prize=mysqli_real_escape_string($connection,$prize);

 $query = "INSERT INTO insertbook(bookname,author,pub,prize) VALUES('$bookname','$author','$pub','$prize')";
   $result=mysqli_query($connection, $query);
if(!$result){
	die("query failed");
}
}
	?>


<!DOCTYPE html>
<html>
<head>
	<title>LIBRARY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
       <div class="col-sm-10">
<h1 style="color:#550080; text-align:center;">SHASHANK's LIBRARY</h1>
	<div class="header">
		<h2>INSERT NEW BOOK INTO LIBRARY</h2>
	</div>
	
	<form method="post" action="insert.php">

		<div class="input-group">
			<label>BOOK_NAME</label>
			<input type="text" name="bookname" >
		</div>
		<div class="input-group">
			<label>AUTHOR</label>
			<input type="text" name="author">
		</div>
		<div class="input-group">
			<label>PUBLISHER</label>
			<input type="text" name="pub">
		</div>
		<div class="input-group">
			<label>PRIZE</label>
			<input type="text" name="prize">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="insert">Insert</button>
		</div>
	</form>
</div>
</div>
</body>
</html>