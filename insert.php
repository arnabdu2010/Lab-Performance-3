<?php
 include("db.php");
 error_reporting(0);
 
 if(isset($_GET['submit'])){
	 
	 $auname = $_GET['Author Name'];
	 $cnumber = $_GET['Contact Number'];
	 $uname = $_GET['Username'];
	 $pass  =$_GET['Password'];
	 
	 if(empty($auname)==true||empty($cnumber)==true||empty($uname)==true||empty($pass)==true){
		 echo 'null submission';
	 }
	 
	 else{
		 echo 'data inserted';
	 }
	 
 }
 ?>
 

   