<?php  

	$connection=mysqli_connect('localhost','root','','library');
   $query = "SELECT * FROM insertbook";
   $result=mysqli_query($connection, $query);
if(!$result){
	die("query failed");
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
       <div class="col-sm-8">
        <h1 style="color:#550080; text-align:center;">SHASHANK's LIBRARY</h1>
        <div>
     <table class="table table-hover">
          <tr>
              <th>bookname</th>
              <th>author</th>
              <th>publication</th>
              <th>prize</th>

        
              <?php

                   If(mysqli_num_rows($result)>0)
        {
                     while($row=mysqli_fetch_array($result))
                     {  

                ?>
              <tr>
                  <td><?php echo $row['bookname']; ?></td> 
                  <td><?php echo $row['author']; ?></td> 
                  <td><?php echo $row['pub']; ?></td> 
                  <td><?php echo $row['prize']; ?></td>
               </tr>
                <?php
                }

                }
                 ?>

              
</table>
</div>
     </div>
</body>
</html>