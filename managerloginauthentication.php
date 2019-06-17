<?php
$mcnic = $_POST['manager_cnic'];
$mpass = $_POST['manager_pass'];
$servername="localhost";
$username="manager";
$password="manager";
$dbname="mydb";
$conn = mysqli_connect($servername,  $username, $password, $dbname);
      $query=("SELECT * FROM mydb.manager WHERE
      user_CNIC = '$mcnic'
			AND ManagerPassword = '$mpass'");
			$result = mysqli_query($conn,$query);
			$count = mysqli_num_rows($result);

			if($count==1){
				echo "login Successfull";
				header("location:manageroption.php");
			}
			else{
        header("location:managermain.php");
        echo "incorect info";
			}
 ?>
