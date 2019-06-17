<?php
  $servername="localhost";
  $username="manager";
  $password="manager";
  $dbname="mydb";

  $conn = mysqli_connect($servername,  $username, $password, $dbname);

  if($conn){
    echo "connection OK";
  }
  else{
    die("Connection failed because".mysqli_connect_error());
  }

 ?>
 
