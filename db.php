<?php
 $servername="localhost";
 $username="root";
 
 $password="";
 $dbname="webtech";

	 $conn = mysqli_connect($servername,$username,$password,$dbname);
	 
 
 if($conn){
	 echo 'Connection has been estatblished';
 }
 else{
	 echo 'Connection not esatblished';
 }


?>