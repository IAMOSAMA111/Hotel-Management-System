<?php

	
	$host = "localhost";
	$dbUsername ="root";
	$Password = "root";
	$dbname = "mydb";
	
	
	$conn =  mysqli_connect($host, $dbUsername , $Password, $dbname );
	if($conn){
		
		echo "success";
	}
	
else{
	echo "failed";
}
 

?>