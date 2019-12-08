


<?php
  include("db.php");
  error_reporting(0);
  
  ?>


<!DOCTYPE html>


<html>
<head>
  <title>Registartion</title>

</head>
<body>
  <form method="Get" action="">
       <fieldset>
	       <legend> Registartion</legend>
		   
		   Author Name:
		   <input type="text" name="name" value=""/><br>
		   <br><br>
		   Contact Number:
		   <input type="number" name="number" value="">
		   <br><br>
	       Username:
		   <input type="text" name="Username" value=""><br>
		   <br><br>
		   Password:
		   <input type="password" name="" value=""><br>
		   <br><br>
	        <br><br>
			
			<input type="submit" name="submit" value="submit"><br><br>
			 <?php

	 
   if(isset($_GET['submit'])){
	   	 $auname = $_GET['Author Name'];
	 $cnumber = $_GET['Contact Number'];
	 $uname = $_GET['Username'];
	 $pass  =$_GET['Password'];
	
	 
	 if(empty($auname)==true||empty($cnumber)==true||empty($uname)==true||empty($pass)==true){
		 echo 'null submission';
	 }
   }
	 
	 else{
		 echo 'data inserted';
	 }
	 
 
 ?>

			
			
		
	   
	   </fieldset>
	   
  
  
  
  </form>
 
 



</body>











</html>




