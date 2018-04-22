<?php  
$connection=mysqli_connect('localhost','root','','library');
 
$query = "SELECT * FROM insertbook";
   $result=mysqli_query($connection, $query);
if(!$result){
  die("query failed");
}


  if(isset($_POST['update'])){
    $bookname=$_POST['bookname'];
	$author=$_POST['author'];
	$pub=$_POST['pub'];
	$prize=$_POST['prize'];
    $id = $_POST['id'];
   $query  = "UPDATE insertbook SET " ;
   $query .= "bookname='$bookname' , " ;
   $query .= " author='$author' , " ;
   $query .= " pub='$pub' , " ;
   $query .= " prize='$prize' " ;
   $query .=" WHERE id=$id";
   $result1=mysqli_query($connection, $query);
if(!$result1){
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
		<h2>UPDATE RECORD</h2>
	</div>
	
	<form method="post" action="update_lib.php">

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
             	<select name="id" id="">
             		<?php 
                 while($row=mysqli_fetch_assoc($result))
                    {
                      $id=$row['id'];
                      echo "<option value='$id'>$id</option>";
                    }
                
             		?>
             		</select>
             		</div> 
		<div class="input-group">
			<button type="submit" class="btn" name="update">Update</button>
		</div>
	</form>
</div>
</div>
</body>
</html>