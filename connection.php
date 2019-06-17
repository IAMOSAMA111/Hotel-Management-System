<?php

	
	$host = "localhost";
	$dbUsername ="root";
	$Password = "root";
	$dbname = "mydb";
	
	
	$conn =  mysqli_connect($host, $dbUsername , $Password, $dbname );
	if($conn){
		
	}
	
else{
	echo "failed";
	die('connection failed because ' .mysqli_connect_error());
}
 

?>